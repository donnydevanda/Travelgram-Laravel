@extends('layouts.app')
@section('title', 'Travelgram')

@section('content')
<!-- Header -->
<header class="text-center">
    <h1>Explore The Beautiful World <br> As One Click</h1>
    <p class="mt-3">You will see beautiful <br> moment you never see</p>
    <a href="#" class="btn btn-get-started px-4 mt-4">
        Get Started
    </a>
</header>

<!-- Main -->
<main>
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3K</h2>
                <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>

    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Top Destination</h2>
                    <p>Something that you never try before <br> in this world</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" 
                        style="background-image: url('frontend/images/popular-1.jpg')">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">Deratan, Bali</div>
                        <div class="travel-button mt-auto">
                            <a href="{{url('/detail')}}" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-felx flex-column" 
                        style="background-image: url('frontend/images/popular-2.jpg')">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">Bromo, Malang</div>
                        <div class="travel-button mt-auto">
                            <a href="{{url('/detail')}}" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-felx flex-column" 
                        style="background-image: url('frontend/images/popular-3.jpg')">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">Nusa Penida</div>
                        <div class="travel-button mt-auto">
                            <a href="{{url('/detail')}}" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-felx flex-column" 
                        style="background-image: url('frontend/images/popular-4.jpg')">
                        <div class="travel-country">UAE</div>
                        <div class="travel-location">Dubai</div>
                        <div class="travel-button mt-auto">
                            <a href="{{url('/detail')}}" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Networks</h2>
                    <p>Companies are trusted us <br>more than just a trip.</p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="{{url('frontend/images/logos_partner.png')}}" alt="partner-logo" class="img-partner">
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <p>Moments were giving them <br>the best experience</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-content" id="testimonialContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('frontend/images/testi-1.png')}}" alt="testi-1" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Angga Risky</h3>
                            <p class="testimonial">“ It was glorious and I could <br>
                                not stop to say wohooo for <br>
                                every single moment <br>
                                Dankeeeeee “</p>
                        </div>
                        <hr>
                        <p class="trip-top mt-2">Trip to Ubud</p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('frontend/images/testi-2.png')}}" alt="testi-2" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Shayna</h3>
                            <p class="testimonial">“ The trip was amazing and <br>
                                I saw something beautiful in <br>
                                that Island that makes me <br>
                                want to learn more “</p>
                        </div>
                        <hr>
                        <p class="trip-top mt-2">Trip to Nusa Penida</p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('frontend/images/testi-3.png')}}" alt="testi-3" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Shabrina</h3>
                            <p class="testimonial">“ I loved it when the waves <br>
                                was shaking harder — I was <br>
                                scared too “</p>
                        </div>
                        <hr>
                        <p class="trip-top mt-2">Trip to Karimun Jawa</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>
                    <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection