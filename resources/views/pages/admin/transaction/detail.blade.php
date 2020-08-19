@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Transaction  {{$item -> user -> name}}</h1>
    </a>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <table class="table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $item -> id}}</td>
                </tr>
                <tr>
                    <th>Travel Package</th>
                    <td>{{ $item -> travel_package -> title}}</td>
                </tr>
                <tr>
                    <th>Buyer</th>
                    <td>{{ $item -> user -> name}}</td>
                </tr>
                <tr>
                    <th>Additional Visa</th>
                    <td>Rp.{{ $item -> additional_visa}}</td>
                </tr>
                <tr>
                    <th>Transaction Total</th>
                    <td>Rp.{{ $item -> transaction_total}}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $item -> transaction_status}}</td>
                </tr>
                <tr>
                    <th>Member</th>
                    <td>
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Nationality</th>
                                <th>Visa</th>
                                <th>DOE Passport</th>
                            </tr>
                            @foreach ($item->details as $detail)
                                <tr>
                                    <td>{{ $detail->id }}</td>
                                    <td>{{ $detail->username }}</td>
                                    <td>{{ $detail->nationality }}</td>
                                    <td>{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                                    <td>{{ $detail->doe_passport }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</div>
@endsection



