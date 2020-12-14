<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\TransactionSuccess;

use App\Transaction;
use App\TransactionDetail;
use App\TravelPackage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request, $id){
        $item = Transaction::with(['details', 'travel_package', 'user']) -> findOrFail($id);
        return view('pages.checkout', [
            'item' => $item
        ]);
    }

    public function process(Request $request, $id){
        $travel_package = TravelPackage::findOrFail($id);

        $transaction = Transaction::create([
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'additional_visa' => 0,
            'transaction_total' => $travel_package -> price,
            'transaction_status' => 'IN_CART'
        ]);

        TransactionDetail::create([
            'transactions_id' => $transaction -> id,
            'username' => Auth::user() -> username,
            'nationality' => 'ID',
            'is_visa' => false,
            'doe_passport' => Carbon::now() -> addYears(5) 
        ]);

        return redirect() -> route('checkout', $transaction->id);
    }

    public function remove(Request $request, $detail_id){
        $item = TransactionDetail::findOrFail($detail_id);

        $transaction = Transaction::with(['details', 'travel_package']) -> findOrFail($item -> transactions_id);

        if($item->is_visa){
            $transaction -> transaction_total -= 1500000;
            $transaction -> additional_visa -= 1500000;
        }

        $transaction -> transaction_total -= $transaction -> travel_package -> price;
        $transaction -> save();

        $item->delete();

        return redirect() -> route('checkout', $item -> transactions_id);
    }

    public function create(Request $request, $id){
        $request -> validate([
            'username' => 'required|string|exists:users,username',
            'is_visa' => 'required|boolean',
            'doe_passport' => 'required'
        ]);

        $data = $request -> all();
        $data['transactions_id'] = $id;

        TransactionDetail::create($data);

        $transaction = Transaction::with(['travel_package']) -> find($id);

        if($request->is_visa){
            $transaction -> transaction_total += 1500000;
            $transaction -> additional_visa += 1500000;
        }

        $transaction -> transaction_total += $transaction -> travel_package -> price;
        $transaction -> save();

        return redirect() -> route('checkout', $id);
    }

    public function success(Request $request, $id){
        $transaction = Transaction::with(['details', 'travel_package.galleries', 'user'])->findOrFail($id);
        $transaction -> transaction_status = 'PENDING';

        $transaction -> save();

        //return $transaction;

        //EMAIL
        Mail::to($transaction->user)->send(
            new TransactionSuccess($transaction)
        );

        return view('pages.success');
    }
}
