@extends('layouts.app')

@section('content')
    @php $agent = new Jenssegers\Agent\Agent() @endphp

    <!-- Masthead -->
    <header class="pagehead" style="background-image:url({{ asset('img/backgrounds/header_bg_index.jpg') }});height:auto;background-position:center;background-repeat:no-repeat;background-size:cover">
        <div class="container">
            <div class="row">
                <div class="col-12 my-auto text-center text-white">
                    <img class="pagehead-img img-fluid mt-5 mb-5" src="{{ asset('img/logo_final.png') }}" alt="">
                </div>
            </div>
        </div>
    </header>

    <!-- How it works section -->
    <section class="page-section pricing" style="color: black; background-color: white">
        <div class="row wow fadeIn text-center mt-md-3 mt-lg-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <h3 class="pagetitle" style="color: #e5b15b">How It Works</h3>
                <!-- /.pagetitle -->
            </div>
            <!-- /.col-12 col-sm-12 col-md-12 col-lg-12 -->
        </div>
        <!-- /.row wow fadeIn text-center -->

        <div class="container wow fadeIn mb-2">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-justify mb-3">
                    <p>
                        <strong>Ayojok.com</strong> is a platform where you can browse and pick your desired event service providers. We are here to save your time and money while keeping you trending by delivering quality services for your events from Ayojok itself.
                    </p>

                    <p>From event accessories and decorative products to photographers and venues, find all event related services in one place and book them right away from the ease of your comforts anytime, anywhere.</p>
                </div>
                <!-- /.col-12 col-sm-12 col-md-12 col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row mb-4">
                <div class="col-12 col-sm-2 col-md-1 col-lg-1 @if($agent->isMobile()) text-center @endif">
                    <img src="{{ asset('img/icons/icon-23.png') }}" alt="Search Icon" width="75">
                </div>
                <!-- /.col-4 col-sm-3 col-md-2 col-lg-2 -->

                <div class="col-12 col-sm-10 col-md-11 col-lg-11">
                    <h3 class="@if($agent->isMobile()) text-center mt-2 @endif" style="font-weight: 400;">Search</h3>

                    <ul style="padding: 0; margin: 0 0 0 15px; line-height: 1.8rem; font-size: 16px;">
                        <li>Conveniently seek out the perfect service provider using our location filter.</li>
                        <li>Find service providers closer to your area.</li>
                        <li>Browse service providers’ profiles and see their works.</li>
                    </ul>
                </div>
                <!-- /.col-8 col-sm-9 col-md-10 col-lg-10 -->
            </div>
            <!-- /.row mb-4 -->

            <div class="row mb-4">
                <div class="col-12 col-sm-2 col-md-1 col-lg-1 @if($agent->isMobile()) text-center @endif">
                    <img src="{{ asset('img/icons/booking.png') }}" alt="Booking Icon" width="75">
                </div>
                <!-- /.col-4 col-sm-3 col-md-2 col-lg-2 -->

                <div class="col-12 col-sm-10 col-md-11 col-lg-11">
                    <h3 class="@if($agent->isMobile()) text-center mt-2 @endif" style="font-weight: 400;">Availability & Booking</h3>

                    <p>Your wedding, your way! Choose your preferred services and send the booking request for desired service providers right away.
                        <br>You can contact the service provider directly for maximum transparency and to make a better informed decision.</p>


                    <p>All services and products in our website can be booked online. The following is a step by step process of how our whole booking process works:</p>

                    <ul style="padding: 0; margin: 0 0 0 15px; line-height: 1.8rem; font-size: 16px;">
                        <li>Pick your service and select your preferred date and time. Proceed by clicking on "SEND FOR QUERY & GET A CALL"</li>
                        <li>A message will be sent to your inbox regarding your query and our Ayojok team will contact you soon.</li>

                        <li>To confirm your booking, go to “My Query” under Your Account.</li>
                        <li>Payment of your booking can be done in “Payment” under Your Account via online debit/credit or BKash.</li>
                    </ul>
                </div>
                <!-- /.col-8 col-sm-9 col-md-10 col-lg-10 -->
            </div>
            <!-- /.row mb-4 -->

            <div class="row">
                <div class="col-12 col-sm-2 col-md-1 col-lg-1 @if($agent->isMobile()) text-center @endif">
                    <img src="{{ asset('img/icons/icon-25.png') }}" alt="Confirmation Icon" width="75">
                </div>
                <!-- /.col-4 col-sm-3 col-md-2 col-lg-2 -->

                <div class="col-12 col-sm-10 col-md-11 col-lg-11">
                    <h3 class="@if($agent->isMobile()) text-center mt-2 @endif" style="font-weight: 400;">Confirmation</h3>

                    <p class="text-justify">Upon completion of the booking process, the client will be contacted by our team with confirmation. The client will either receive an email or a physical copy of the billing information.</p>

                    <p class="text-justify">Clients can also check the status of their booked services and contact their service providers anytime from “My Vendor” tab.</p>
                </div>
                <!-- /.col-8 col-sm-9 col-md-10 col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
    </section>
@endsection
