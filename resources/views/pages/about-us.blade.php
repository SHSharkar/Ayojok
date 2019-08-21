@extends('layouts.app')

@section('content')
    <!-- Masthead -->
    <header class="pagehead" style="background-image:url({{ asset('img/backgrounds/header_bg_index.jpg') }});height:auto;background-position:center;background-repeat:no-repeat;background-size:cover">
        <div class="container">
            <div class="row">
                <div class="col-12 my-auto text-center text-white">
                    <img class="pagehead-img img-fluid mt-4 mb-2 mb-sm-3 mb-md-4 mb-lg-4" src="{{ asset('img/logo_final.png') }}" alt="">
                </div>
            </div>
        </div>
    </header>
    <!-- FB Profile Style -->

    <!-- Blank section -->
    <section class="page-section services" style="background-image: url('img/backgrounds/texture-bg.png')">
        <div class="container pt-3 mb-md-1 mb-lg-1">
            <div class="wow fadeIn text-center">
                <h3>About Us</h3>
                <hr class="colored">
            </div>
            <div class="row font-weight-light text-justify">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <p>Ayojok.com is a place for you to meet trusted and professional services for your events, who can deliver quality services and products available in the market, in the most effortless and hassle-free way possible. No more exasperating phone calls, no more rejection due to unavailability of event venue and no more dilemma of which event management to pick. For any events such as wedding, birthday, anniversary, corporate events or simply a friends &amp; family get together, Ayojok lets you book or buy everything you require in lesser time and with convenience. From something as little as a henna pack to something as immense as your preferred venues, we let you find a variety of products and services to choose from, all the while retaining your taste and budget.</p>
                    <p>Apart from these services, you can take suggestions and advices from our helpline. Even if this whole process seems daunting to you due to your busy schedule, you have the option to hire our professional ‘Event Coordinator’ who will do all these work for you! </p>
                    <p><strong>Wait, it’s not end yet!</strong></p>
                    <p>Our website is continuously being updated with blogs and articles every week in our “ideas &amp; stories” section because we want you to keep up with the ongoing &amp; latest trends and creative ideas. We aim to make your event as grand and memorable as possible.</p>
                </div>
                <!-- /.col-12 col-sm-12 col-md-12 col-lg-12 -->
            </div>
        </div>
    </section>
@endsection
