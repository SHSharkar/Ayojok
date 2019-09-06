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

    <!-- Event Coordinator description section -->
    <section class="page-section pt-3">
        <div class="container">
            <div class=" text-center">
                <h3>Event Coordinator</h3>
                <hr class="colored">
            </div>

            <div class="row mt-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="text-justify">Save yourself a lot of time and stress by hiring our trusted and professional event coordinator who will ensure that your event takes place without any hindrance. Our event coordinator will take on the task of</p>

                    <ul class="mb-3" style="font-size:16px; line-height: 1.8rem; padding: 0; margin: 0 0 0 15px; font-weight: 600;">
                        <li>Creating a checklist according to your plans</li>
                        <li>Checking up with service providers on a regular basis</li>
                        <li>Making sure your plan is being executed</li>
                        <li>Ensuring deadlines of services are met</li>
                        <li>Effective organizing of decoration, catering, seating arrangement etc.</li>
                    </ul>

                    <p class="text-justify">More than often it has been the case that on the day of the wedding, the father, son or a relative cannot be found as they have to run around and make sure all the guests have been served food or whether the catering service has been started in due time. This takes out a lot of time and makes them unable to enjoy the event itself, like socializing with guests or being in photographs with the bride and groom a time that is better spent on something more useful. This is where our event coordinator steps in and takes on these responsibilities ensuring that you have a stress free event.</p>
                </div>
                <!-- /.col-12 col-sm-12 col-md-12 col-lg-12 -->
            </div>
            <!-- /.row mt-4 -->
        </div>
    </section>
    <!--/ End Event Coordinator description section -->

    <!-- Form for query section -->
    <section class="page-section" id="contact" style="background-image: url('img/backgrounds/bg-service.jpg');">
        <div class="container ">
            <div class="text-center contact-header pt-3">
                <h2 class="font-weight-lighter">Contact Us</h2>
                <hr class="colored">
                <p>We are interested in being a part of organizing your events so feel free to contact us anytime for our assistance.</p>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-8 col-lg-8 mx-auto">
                    <form name="sentMessage" id="contactForm" novalidate>
                        {{ csrf_field() }}
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control contact-placeholder" placeholder="Name" id="your-name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control contact-placeholder" placeholder="Email Address" id="your-email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control contact-placeholder" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control contact-placeholder" placeholder="Message" id="mess" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Form for query section -->
@endsection
