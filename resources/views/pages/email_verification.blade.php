<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 6/16/2019
 * Time: 1:33 PM
 */

?>
@extends('layouts.app')
<style>
    .text {
        font-style: normal;
        text-transform: none;
    }

    #countdown {
        font-size: 40px;
        font-weight: bold;
        margin-top: 40%;
    }

    .dot {
        height: 200px;
        width: 200px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
    }
    .success{
        background-color: #D4EDDA;
    }
    .danger{
        background-color: #F8D7DA;

    }
</style>

@push('css')
@endpush

@section('content')
    <header class="pagehead" style="background-image:url({{ asset('img/backgrounds/header_bg_index.jpg') }});height:auto;background-position:center;background-repeat:no-repeat;background-size:cover">
        <div class="container">
            <div class="row">
                <div class="col-12 my-auto text-center text-white">
                    <img class="pagehead-img img-fluid mt-5 mb-5" src="{{ asset('img/logo_final.png') }}"
                         alt=""/>
                </div>
            </div>
        </div>
    </header>

    <section class="page-section mt-4 mb-4" style="height: 50%">
        <div class="container">

            @if(isset($user))
                <h4 class="text success">Email Verified Successfully, {{$user->name}}</h4>
            @else
                <h4 class="text danger">Email Not Verified.Try Again </h4>

            @endif
            <center>
                {{--You Will Redirect to homepage in --}}
                <div class="dot">
                    <div id="countdown"></div>
                </div>

            </center>

        </div>
    </section>
@endsection

@push('scripts')
<script>
    var timeleft = 3;
    var downloadTimer = setInterval(function () {
        document.getElementById("countdown").innerHTML = timeleft + "";
        timeleft -= 1;
        if (timeleft <= 0) {
            clearInterval(downloadTimer);
//            document.getElementById("countdown").innerHTML = "Finished"
            window.location = "/";//here double curly bracket

        }
    }, 1000);


</script>
@endpush
