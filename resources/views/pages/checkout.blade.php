@extends('layouts.checkout')
@section('title', 'Checkout')

@section('content')
<!-- Main -->
<main>
<section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Travel Package
                            </li>
                            <li class="breadcrumb-item">
                                Details
                            </li>
                            <li class="breadcrumb-item active">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Who's Going?</h1>
                        <p>Trip to Bali, Indonesia</p>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Picture</td>
                                        <td>Name</td>
                                        <td>Nationality</td>
                                        <td>Visa</td>
                                        <td>Passport</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="{{url('frontend/images/going-1.png')}}" alt="" height="60px"></td>
                                        <td class="align-middle">Angga Risky</td>
                                        <td class="align-middle">CN</td>
                                        <td class="align-middle">N/A</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle"><a href=""><img src="{{url('frontend/images/ic_remove.png')}}" alt=""></a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{url('frontend/images/going-2.png')}}" alt="" height="60px"></td>
                                        <td class="align-middle">Galih Pratama</td>
                                        <td class="align-middle">SG</td>
                                        <td class="align-middle">30 Days</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle"><a href=""><img src="{{url('frontend/images/ic_remove.png')}}" alt=""></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <from class="form-inline">
                                <label for="inputUsername" class="sr-only">Name</label>
                                <input type="text" name="inputUsername" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="Username">
                                
                                <label for="inputVisa" class="sr-only">Visa</label>
                                <select name="inputVIsa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                    <option value="VISA" selected>VISA</option>
                                    <option value="30 Days">30 Days</option>
                                    <option value="N/A">N/A</option>
                                </select>

                            <label for="doePassport" class="sr-only">DOE Passport</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <input type="text" class="form-control datepicker" 
                                id="doePassport" placeholder="DOE Passport">
                            </div>

                            <button type="submit" class="btn btn-add-now mb-2 px-4">Add Now</button>
                            </from>
                            <h3 class="mt-3 mb-0">Note</h3>
                            <p class="disclaimer mb-0">You are only able to invite member that has registered in Travelgram.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Checkout Information</h2>
                        <table class="trip-information">
                            <tr>
                                <th width="50%">Members</th>
                                <td width="50%" class="text-right">
                                    2 Person
                                </td>
                            </tr>

                            <tr>
                                <th width="50%">Additional Visa</th>
                                <td width="50%" class="text-right">
                                    IDR 2.000.000
                                </td>
                            </tr>

                            <tr>
                                <th width="50%">Trip Price</th>
                                <td width="50%" class="text-right">
                                    IDR 8.500.000
                                </td>
                            </tr>

                            <tr>
                                <th width="50%">Subtotal</th>
                                <td width="50%" class="text-right">
                                    IDR 19.000.000
                                </td>
                            </tr>

                            <tr>
                                <th width="50%">Total(+Unique)</th>
                                <td width="50%" class="text-right text-total">
                                    <span class="text-blue">IDR 19.000.</span>
                                    <span class="text-orange">333</span>
                                </td>
                            </tr>
                        </table>

                        <hr>

                        <h2>Payment Instruction</h2>
                        <p class="payment-instruction">Please complete your payment before continue to travel</p>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="{{url('frontend/images/ic_bank.png')}}" alt="" class="bank-image">
                                <div class="description">
                                    <h3>PT. Travelgram ID</h3>
                                    <p>5271 6789 8877 <br> Bank Central Asia</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="bank-item pb-3">
                                <img src="{{url('frontend/images/ic_bank.png')}}" alt="" class="bank-image">
                                <div class="description">
                                    <h3>PT. Travelgram ID</h3>
                                    <p>6435 5555 6661 <br> Bank Mandiri</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="join-container">
                        <a href="{{url('/checkout/success')}}" class="btn btn-block btn-join-now mt-3 py-2">Confirm Payment</a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{url('/detail')}}" class="text-muted">Cancel Booking</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/gijgo/css/gijgo.css')}}"/>
@endpush

@push('addon-script')
<script src="{{url('frontend/libraries/gijgo/js/gijgo.min.js')}}"></script>
<script>
    $('.datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        icons: {
            rightIcon: '<img src="{{url('frontend/images/ic_doe.png')}}">'
        }
    });
</script> 
@endpush