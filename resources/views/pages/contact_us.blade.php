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

    <!-- Form for query section -->
    <section class="page-section" id="contact" style="background-image: url('img/backgrounds/bg-service.jpg');">
        <div class="container ">
            <div class="text-center contact-header pt-2">
                <h2 class="font-weight-lighter">Contact Us</h2>
                <hr class="colored">
                <p>We are interested in being a part of organizing your events so feel free to contact us anytime for our assistance.</p>
            </div>
            <?php
            $msg = \Illuminate\Support\Facades\Session::get('success');
            $eror = 'ok';
            ?>
            @if(isset($msg))
                <div class="alert alert-success" style="font-size: 20px">
                    <div style="text-align: center;"><strong>Success! {{$msg}} .</strong></div>
                </div>
            @elseif ($errors->any())
                <div class="alert alert-danger" style="font-size: 20px">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row mt-4">
                <div class="col-12 col-md-8 col-lg-8 mx-auto">
                    <form method="post" action="{{route('contact_us_submit')}}" novalidate>
                        {{ csrf_field() }}
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control contact-placeholder" placeholder="Name" name="name" required data-validation-required-message="Please enter your name.">

                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control contact-placeholder" placeholder="Email Address" name="email" required data-validation-required-message="Please enter your email address.">

                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control contact-placeholder" placeholder="Phone Number" name="phone" required data-validation-required-message="Please enter your phone number.">

                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control contact-placeholder" placeholder="Message" name="mess" required data-validation-required-message="Please enter a message."></textarea>

                                <p class="help-block text-danger"></p>
                            </div>
                        </div>

                        <div id="success"></div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Form for query section -->
@endsection
