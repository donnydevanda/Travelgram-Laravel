@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
    <a href="{{route('gallery.create')}}" class="btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50">Add Gallery</i>
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

    <div class="card">
        <div class="card-body">
            <form action="{{route('gallery.store)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="travel_packages_id">Travel Package</label>
                    <select name="travel_packages_id" required class="form-control"></select>
                    <option value="">Select Travel Package</option>
                    @foreach ($travel_packages as $travel_package)
                        <option value="{{$travel_packages->id}}">
                            {{$travel_package->title}}
                        </option>
                    @endforeach
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="from-control" name="image" placeholder="Image" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    Save
                </button>
            </form>
        </div>
    </div>
</div>
@endsection



