<?php
/**
 * Created by PhpStorm.
 * User: Nirjhor
 * Date: 4/29/2019
 * Time: 12:23 PM
 */

?>

@extends('layouts.app')

@push('css')

@endpush

@section('content')
        <!-- Masthead -->
<header class="pagehead" style="background-image: url('img/backgrounds/header_bg_index.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12 my-auto text-center text-white">
                <img class="pagehead-img img-fluid mb-3" src="img/logo_final.png" alt="">
            </div>
        </div>
    </div>
</header>


<!-- Form for query section -->
<section class="page-section" id="contact" style="background-image: url('img/backgrounds/bg-service.jpg');">
    <div class="container wow fadeIn">

        <div class="text-center contact-header">
            <h2>Contact Us</h2>
            <hr class="colored">
            <p>We are interested in being a part of organizing your events so feel free to contact us anytime for our
                assistance.</p>
        </div>
        <?php
        $msg = \Illuminate\Support\Facades\Session::get('success');
        $eror = "ok";
        ?>
        @if(isset($msg))
            <div class="alert alert-success" style="font-size: 20px">
                <center><strong>Success! {{$msg}} .</strong></center>
            </div>
        @elseif($errors->any())
            <div class="alert alert-danger" style="font-size: 20px">

                    <strong>
                        Warning!
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </strong>

            </div>
        @endif
        <div class="row mt-4">
            <div class="col-lg-8 mx-auto">
                <form method="post" action="{{route('contact_us_submit')}}" novalidate>
                    {{ csrf_field() }}
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control contact-placeholder" placeholder="Name" name="name"
                                   required data-validation-required-message="Please enter your name.">

                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control contact-placeholder" placeholder="Email Address"
                                   name="email" required
                                   data-validation-required-message="Please enter your email address.">

                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control contact-placeholder" placeholder="Phone Number"
                                   name="phone" required
                                   data-validation-required-message="Please enter your phone number.">

                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" class="form-control contact-placeholder" placeholder="Message"
                                      name="mess" required
                                      data-validation-required-message="Please enter a message."></textarea>

                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>

                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{--<div class="row">
        <div class="col-sm-12">
            <a href="{{route('sendEmail')}}" class="btn btn-success">Send</a>
        </div>
    </div>--}}
</section>
<!--/ End Form for query section -->
@endsection

@push('script')

@endpush


