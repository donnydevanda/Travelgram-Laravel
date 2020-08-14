@extends('layouts.detail')
@section('title', 'Package Detail')

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
                             <li class="breadcrumb-item active">
                                 Details
                             </li>
                         </ol>
                     </nav>
                 </div>
             </div>

             <div class="row">
                 <div class="col-lg-8 pl-lg-0">
                     <div class="card card-details">
                         <h1>Nusa Peninda</h1>
                         <p>Indonesia</p>
                         <div class="gallery">
                             <div class="xzoom-container">
                                 <img src="frontend/images/pic-1.jpg" alt="" class="xzoom" 
                                 id="xzoom-default" xoriginal="frontend/images/pic-1.jpg">
                             </div>
                             <div class="xzoom-thumbs">
                                 <a href="frontend/images/pic-1.jpg">
                                     <img src="frontend/images/pic-1.jpg" alt="" 
                                     class="xzoom-gallery" width="128" xpreview="frontend/images/pic-1.jpg">
                                 </a>

                                 <a href="frontend/images/pic-2.jpg">
                                     <img src="frontend/images/pic-2.jpg" alt="" 
                                     class="xzoom-gallery" width="128" xpreview="frontend/images/pic-2.jpg">
                                 </a>

                                 <a href="frontend/images/pic-3.jpg">
                                     <img src="frontend/images/pic-3.jpg" alt="" 
                                     class="xzoom-gallery" width="128" xpreview="frontend/images/pic-3.jpg">
                                 </a>

                                 <a href="frontend/images/pic-4.jpg">
                                     <img src="frontend/images/pic-4.jpg" alt="" 
                                     class="xzoom-gallery" width="128" xpreview="frontend/images/pic-4.jpg">
                                 </a>

                                 <a href="frontend/images/pic-5.jpg">
                                     <img src="frontend/images/pic-5.jpg" alt="" 
                                     class="xzoom-gallery" width="128" xpreview="frontend/images/pic-5.jpg">
                                 </a>
                             </div>
                         </div>
                         <h2>About Destination</h2>
                         <p>Nusa Penida is an island southeast of Indonesia’s island Bali and a district of Klungkung <br>
                             Regency that includes the neighbouring small island of Nusa Lembongan. The Badung <br>
                             Strait separates the island and Bali. The interior of Nusa Penida is hilly with a maximum <br>
                             altitude of 524 metres. It is drier than the nearby island of Bali.</p>
                         <p>Bali and a district of Klungkung Regency that includes the neighbouring small island of <br>
                             Nusa Lembongan. The Badung Strait separates the island and Bali.</p>

                         <div class="features row">
                             <div class="col-md-4">
                                 <img src="frontend/images/ic_event.png" alt="" class="features-image">
                                 <div class="description">
                                     <div class="description">
                                         <h3>Featured Event</h3>
                                         <p>Tari Kecak</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-4 border-left">
                                 <div class="description">
                                     <img src="frontend/images/ic_language.png" alt="" class="features-image">
                                     <div class="description">
                                         <h3>Language</h3>
                                         <p>Bahasa Indonesia</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-4 border-left">
                                 <div class="description">
                                     <img src="frontend/images/ic_foods.png" alt="" class="features-image">
                                     <div class="description">
                                         <h3>Foods</h3>
                                         <p>Local Foods</p>
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>

                 <div class="col-lg-4">
                     <div class="card card-details card-right">
                         <h2>Members are going</h2>
                         <div class="members my-2">
                             <img src="frontend/images/member-1.png" alt="" class="member-image mr-1">
                             <img src="frontend/images/member-2.png" alt="" class="member-image mr-1">
                             <img src="frontend/images/member-3.png" alt="" class="member-image mr-1">
                             <img src="frontend/images/member-4.png" alt="" class="member-image mr-1">
                             <img src="frontend/images/member-etc.png" alt="" class="member-image mr-1">
                         </div>
                         <hr>
                         <h2>Trip information</h2>
                         <table class="trip-information">
                             <tr>
                                 <th width="50%">Date of Departure</th>
                                 <td width="50%" class="text-right">
                                     22 Aug, 2019
                                 </td>
                             </tr>

                             <tr>
                                 <th width="50%">Duration</th>
                                 <td width="50%" class="text-right">
                                     4D3N
                                 </td>
                             </tr>

                             <tr>
                                 <th width="50%">Type</th>
                                 <td width="50%" class="text-right">
                                     Open Trip
                                 </td>
                             </tr>

                             <tr>
                                 <th width="50%">Price</th>
                                 <td width="50%" class="text-right">
                                     IDR 8.500.000 / Person
                                 </td>
                             </tr>
                         </table>
                     </div>

                     <div class="join-container">
                         <a href="{{url('/checkout')}}" class="btn btn-block btn-join-now mt-3 py-2">
                             Join Now
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}"/>
@endpush

@push('addon-script')
<script src="{{url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint:'#333',
            Xoffset: 15
        });
    });
</script>
@endpush