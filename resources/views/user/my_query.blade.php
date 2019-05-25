<?php
/**
 * Created by PhpStorm.
 * User: Nirjhor
 * Date: 5/15/2019
 * Time: 11:28 AM
 */
//print_r($vendor_arr);
?>
@extends('layouts.app')

@push('css')
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
<style xmlns="http://www.w3.org/1999/html">
    .row.container {
        min-width: 100% !important;
        padding: 0 10%;
    }

    .circle {
        height: 150px;
        line-height: 30px;
        width: 150px;
        border-radius: 50%;
        /*background-color: #89CB3E;*/
        text-align: center;
        color: #fff;
        font-size: 28px;
        font-weight: bolder;
    }

    td:first-child {
        width: 200px;
    }

    td:first-child + td {
        vertical-align: middle;
    }

    td:first-child + td + td {
        vertical-align: middle;
    }

    .column_3 {
        float: right;
    }

    .title {
        font-weight: bold;
        margin-bottom: 0rem;
    }

    .detail {
        font-weight: bolder;
        margin-bottom: 0rem;
    }

    .button {
        background-color: #F2F2F2;
        border: 1px solid #DFA449;
        color: black;
        padding: 3px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        /*cursor: pointer;*/
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        border-radius: 5px;
    }

    .button1 {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .button2 {
        box-shadow: 0 1px 2px 0 rgba(223, 164, 73, 0.24), 0 1px 1px 0 rgba(33, 136, 56, 0.19);
    }

    .date {
        background-color: #F2F2F2;
        border: 1px solid #DFA449;
        color: black;
        padding: 2px 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        /*cursor: pointer;*/
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        border-radius: 5px;
    }

    .details {
        background-color: #F2F2F2;
        border: 1px solid #DFA449;
        color: #DFA449;
        padding: 5px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 24px;
        margin: 4px 2px;
        /*cursor: pointer;*/
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        border-radius: 5px;
    }

    .details_shadow {
        box-shadow: 0 1px 3px 0 rgba(223, 164, 73, 0.24), 0 1px 1px 0 rgba(33, 136, 56, 0.19);
    }

    .paybook {
        background-color: #F2F2F2;
        border: 1px solid #DFA449;
        color: #DFA449;
        padding: 5px 40px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 24px;
        margin: 4px 2px;
        /*cursor: pointer;*/
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        border-radius: 5px;
    }

    .paybook_shadow {
        box-shadow: 0 1px 3px 0 rgba(223, 164, 73, 0.24), 0 1px 1px 0 rgba(33, 136, 56, 0.19);
    }

    .remove {
        background-color: #F2F2F2;
        border: 1px solid #EF4E4A;
        color: #EF4E4A;
        padding: 3px 40px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 24px;
        font-weight: bold;
        /*margin: 4px 2px;*/
        /*cursor: pointer;*/
        /*margin-top: 50%;*/

        cursor: pointer;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        border-radius: 5px;

    }

    .remove_shadow {
        box-shadow: 0 1px 3px 0 rgba(223, 164, 73, 0.24), 0 1px 1px 0 rgba(33, 136, 56, 0.19);
    }

    .add_event {
        /*background-color: #E2AD5B;*/
        border: 1px solid #0B98FF;
        color: #0B98FF;
        padding: 5px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 24px;
        margin: 4px 2px;
        /*cursor: pointer;*/
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        border-radius: 5px;
        vertical-align: central;
        width: 180px;
    }

    .add_event_shadow {
        box-shadow: 0 1px 3px 0 rgba(223, 164, 73, 0.24), 0 1px 1px 0 rgba(33, 136, 56, 0.19);
    }

    .advance {
        font-weight: bolder;
        margin-bottom: 0;
        color: #8D8D8D;
        /*margin-left: 5px;*/
        text-align: center;
    }

    .time {
        font-weight: bolder;
        margin-bottom: 0;
        /*margin-left: 5px;*/
        text-align: center;
        color: #DD5E5B;
    }

    .duePrice {
        font-weight: bolder;
        margin-bottom: 0;
        /*margin-left: 5px;*/
        color: #DD5E5B;
        text-align: center;
    }

    .modal_div {
        /*border-radius: 10px;*/
    }

    .modal_dialog {
        width: 22%;
        overflow-y: initial !important;
        /*border-radius: 10px;*/
    }

    .modal_header {
        background-color: #FFC107;
        color: #FFFFFF;
        /*border-radius: 10px;*/
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;

    }

    .modal_title {
        margin: 0 auto;
        font-size: 20px;
        text-align: center;
        font-weight: 500;
    }

    .modal_body {
        height: 250px;
        overflow-y: auto;
    }

    .modal_content {
        border-radius: 10px;
    }

    .form {
        width: 100%;
        text-align: center;
        display: none;
    }

    .form_event_input {
        border: 0;
        border-bottom: 1px solid #6E6E6E;
    }

    .form_event_button {
        color: #6E6E6E;
        background-color: #ffffff;
        text-transform: capitalize;
    }

    .modal_create_event {
        text-align: center;
        width: 100%;
        border-top: 2px solid #6E6E6E;
        color: #6E6E6E;

    }

    .modal_create_event p {
        font-weight: bold;
        cursor: pointer;
    }

    /*cart*/
    .sidebar {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 5%;
        right: 0;
        background-color: #ffffff;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 2%;
        -moz-box-shadow: -3px 0 20px 0 #999;
        -webkit-box-shadow: -3px 0 20px 0 #999;
        box-shadow: -3px 0 20px 0 #999;
    }

    .sidebar .closebtn {
        position: absolute;
        top: 3%;
        color: #212529;
        right: 20px;
        font-size: x-large;
        font-weight: bolder;
    }

    .cart-head {
        font-family: "Helvetica Neue", sans-serif;
        font-size: 110%;
        font-weight: bolder;
    }

    .cart-subhead {
        font-family: "Helvetica Neue", sans-serif;
        font-size: 110%;
        font-weight: bolder;
        margin-left: 70%;
        margin-top: 5%;
        margin-bottom: 5%;
    }

    .cart-type {
        font-family: "Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
        font-size: 90%;
        margin-bottom: 0;
    }

    .cart-name {
        font-family: "Helvetica Neue", sans-serif;
        font-size: 95%;
        margin-bottom: 0;
    }

    .cart-addon {
        /*padding: .5rem .75rem;*/
        margin-bottom: 0;
        font-size: 1rem;
        font-weight: normal;
        line-height: 0.01;
        color: #495057;
        text-align: center;
        background-color: inherit;
        border: 1px solid #DFA449;
        border-radius: .25rem;
    }

    .cart-form-control {
        line-height: 0.01;
        color: #495057;
        text-align: center;
        background-color: inherit;
        border: 1px solid #DFA449;
        border-radius: .25rem;
        width: 50%;
    }

    .cart-td {
        padding-top: 5%;
        padding-bottom: 5%;
    }

    .cart-title-td {
        padding-left: 5%;

    }

    .cart-line {
        width: 90%;
        margin-top: 5%;
        margin-left: 5%;
        color: #F0F0F0;
        border-bottom: 1px solid black;
        position: absolute;
    }

    .cart-total {
        margin-top: 10%;
        margin-left: 5%;
        color: #676767;
        font-family: "Helvetica Neue", sans-serif;
        font-weight: bolder;
        font-size: 110%;
        position: absolute;
    }

    .cart-total-value {
        width: 40%;
        margin-left: 55%;
        text-align: center;
    }

    .cart-paybtn {
        width: 90%;
        margin-top: 20%;
        margin-left: 5%;
        padding: 5px;
        background-color: #E2AD5B;
        border: 1px solid #DFA449;
        color: #F2F2F2;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 24px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        border-radius: 10px;
    }

    .cart-paybtn-shadow {
        box-shadow: 0 1px 3px 0 rgba(223, 164, 73, 0.24), 0 1px 1px 0 rgba(33, 136, 56, 0.19);
    }

    .cart-delete-btn {
        background-color: #FFFFFF;
        border: 0px;
    }
</style>

{{--This style for Radio Box--}}
<style>
    /* The container */
    .radio_container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default radio button */
    .radio_container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom radio button */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #ffffff;
        border-radius: 50%;
        /*Extra*/
        border: 1px solid #FFC107;
    }

    /* On mouse-over, add a grey background color */
    .radio_container:hover input ~ .checkmark {
        background-color: #ccc;
    }

    /* When the radio button is checked, add a blue background */
    .radio_container input:checked ~ .checkmark {
        background-color: #FFC107;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .radio_container input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .radio_container .checkmark:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }

    .close {
        color: #ffffff;
        font-size: 30px;
        opacity: 1;
    }

    .modal_footer {
        border: 0;
    }
</style>

{{--Style for header--}}
<style>
    .pagehead .row .mt {
        margin-top: 8%;
    }

    .btn_myqueries {
        background-color: #E2AD5B;
        border: 1px solid #E2AD5B;
        color: #ffffff;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 22px;
        margin: 4px 2px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        border-radius: 5px;
        vertical-align: central;
        width: 180px;
        font-weight: bolder;
    }

    .btn_events {
        background-color: #FFFBF4;
        border: 1px solid #E2AD5B;
        color: #E2AD5B;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 22px;
        margin: 4px 2px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        border-radius: 5px;
        vertical-align: central;
        width: 180px;
        font-weight: bolder;
    }

    .btn_filter {
        background-color: #FFFBF4;
        border: 1px solid #E2AD5B;
        color: #E2AD5B;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 22px;
        margin: 4px 2px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        border-radius: 5px;
        vertical-align: central;
        width: 180px;
        font-weight: bolder;
    }

    .filter {
        background-color: #E2AD5B;
        width: 180px;
    }


</style>
@endpush

@section('content')

        <!-- Masthead -->
<header class="pagehead" style="background-image: url({{asset('img/backgrounds/page_header.png')}});">
    <div class="container">
        <div class="row ">

            <div class="col-sm-2 mt">
                <button class="btn btn_myqueries" onclick="filter_showAll()">My Queries</button>
            </div>
            <div class="col-sm-2 mt">
                <button class="btn btn_events">My Events</button>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-4 mt">

                <div class="dropdown " style="float: right" id="drop_down">

                    <button class="btn_filter add_event_shadow dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>Filter</span>
                    </button>
                    <div class="dropdown-menu filter" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="javascript:void(0)" onclick="filter('Query_Submitted')">Query
                            Submitted</a>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="filter('In_Review')">In Review</a>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="filter('Available')">Available</a>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="filter('Not_Available')">Not
                            Available</a>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="filter('Booked')">Booked</a>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="filter('Time_Out')">Time Out</a>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="filter_showAll()">All</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- My Query Section -->
<section class="page-section mt-3 mb-3" style="min-height: 40%">
    <div class="row container">
        {{--Nirjhor Code For Query per submitted--}}
        <div class="col-sm-12" id="main1">
            <table class="table">
                <tbody>
                <?php
                $check = 1;
                ?>
                @if(sizeof($vendor_arr) > 0)
                    @foreach($vendor_arr as $vendor)
                        <?php $check = 1; ?>
                        <?php

                        $circle_background_color = "#ffffff";
                        $status_var = 0;
                        $padding_top = "35%";

                        $date_name = "Request";
                        $price = 0;
                        $advance = 0;
                        $due = 0;
                        $already_paid = 0;
                        $discount = 0;

                        $query_ids = array();
                        //print_r($query_ids);
                        $status = $vendor['display_status'];
                        //Making class name from status
                        $className = str_replace(' ', '_', $status);

                        if (strtolower($status) == "query submitted") {
                            $circle_background_color = "#47DBC3";
                            $padding_top = "25%";
                            $status_var = 1;
                            $price = "(Depend on Discussion)";
                        } elseif (strtolower($status) == "in review") {
                            $circle_background_color = "#FF8A45";
                            $padding_top = "35%";
                            $status_var = 2;
                            $price = "(Depend on Discussion)";
                        } elseif (strtolower($status) == "available") {
                            $circle_background_color = "#89CB3E";
                            $padding_top = "35%";
                            $status_var = 3;
                            $date_name = $status;
                        } elseif (strtolower($status) == "not available") {
                            $circle_background_color = "#ADADAD";
                            $padding_top = "25%";
                            $status_var = 4;
                            $price = "(Depend on Discussion)";
                        } elseif (strtolower($status) == "booked") {
                            $circle_background_color = "#FFC63C";
                            $padding_top = "35%";
                            $status_var = 5;
                            $date_name = $status;
                        }

                        ?>
                        <tr class="{{$className}} hideAll">
                            <td>
                                <div class="circle"
                                     style="background-color: {{$circle_background_color}};padding-top: {{$padding_top}};">
                                    <span>{{$status}}</span></div>
                            </td>
                            <td>
                                <p class="title">{{$vendor['vendor_name']}}</p>

                                <p class="detail">
                                    <span>{{$vendor['category_name']}}</span>
                                    |
                                    {{$date_name}} Date:
                                    @foreach($vendor['query_details'] as $query)
                                        @if($query == reset($vendor['query_details'])) {{--For Showing 1st date's month--}}
                                        <span class="button button2">{{date_format(date_create($query['event_date']),"M")}}</span>
                                        @endif
                                        <span class="date button2">{{date_format(date_create($query['event_date']),"d")}}</span>

                                        <?php
                                        array_push($query_ids, $query['query_id']);

                                        $event_title = "";
                                        $event_tag_id = null;
                                        $event_background = "#ffffff";
                                        if (isset($query['query_tag'])) {
                                            $event_title = $query['query_tag'];
                                            $event_tag_id = $query['query_tag_id'];
                                            $event_background = "#0B98FF";
                                            $event_txt_color = "#ffffff";
                                        } else {
                                            $event_title = "Add To Event";
                                            $event_background = "#F2F2F2";
                                            $event_txt_color = "#0B98FF";
                                        }



                                        if (is_numeric($price)) {
                                            $price += $query['total_payment'];
                                            $advance += $query['advance_payment'];
                                            $already_paid += $query['total_paid'];
                                            $due = $price - $already_paid;

                                            $discount += $query['discount'];
                                        }
                                        ?>
                                    @endforeach
                                </p>

                                <p class="detail">Price: <span>{{$price}}</span></p>

                                <p class="detail">
                                    {{--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal_event">Open Modal</button>--}}
                                    <button class="details details_shadow"> Details</button>
                                    <button class="add_event add_event_shadow"
                                            style="background-color: {{$event_background}};color: {{$event_txt_color}}"
                                            data-toggle="modal"
                                            data-target="#modal_event"
                                            onclick=setModalWithData('{{json_encode($query_ids)}}','{{$event_tag_id}}')
                                            >
                                        {{--<span>
                                            <img src="{{asset('img/icons/myquery/Add to events.png')}}">
                                        </span>--}}
                                        <span style="font-size: 22px">{{$event_title}}</span>
                                    </button>
                                </p>
                            </td>
                            @if($status_var == 1 || $status_var == 4)
                                <td class="column_3">
                                    <p></p>

                                    <p class="remove remove_shadow"
                                       onclick="remove_query('{{json_encode($query_ids)}}')"> Remove </p>
                                </td>
                            @elseif($status_var == 2)
                                <td class="column_3">
                                </td>
                            @elseif($status_var == 3)
                                <td class="column_3">

                                    <p class="time"><img src="{{asset('img/icons/time.png')}}"> 72:89 left</p>
                                    <button class="paybook paybook_shadow"
                                            onclick="addToCart('{{json_encode($query_ids)}}')">
                                        Pay & Book
                                    </button>
                                    {{--<a href="#" class="btn btn-success" onclick="cart('{{$status_id}}','{{$status_id}}','{{$title_id}}' ,'{{$category_id}}' , '{{$month_id}}' ,'{{$date1_id}}' , '{{$date2_id}}' , '{{$date3_id}}' ,'{{$totalPrice_id}}' )">Payand book</a>--}}
                                    <p class="advance">Min. Advance: BDT {{$advance}}</p>
                                </td>

                            @elseif($status_var == 5)
                                <td class="column_3">
                                    <p></p>
                                    <button class="paybook paybook_shadow" style="padding: 5px 52px"
                                            onclick="addToCart('{{json_encode($query_ids)}}')"> Pay Rest
                                    </button>
                                    {{--<p class="advance">Min. Advance: BDT 5000</p>--}}
                                    <p class="duePrice"> Due amount: BDT {{$due}} </p>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                @else
                    <?php $check = 0; ?>
                @endif














                @if(sizeof($service_arr) > 0)

                    @foreach($service_arr as $vendor)
                        <?php $check = 2; ?>
                        <?php

                        $circle_background_color = "#ffffff";
                        $status_var = 0;
                        $padding_top = "35%";

                        $date_name = "Request";
                        $price = 0;
                        $advance = 0;
                        $due = 0;
                        $already_paid = 0;
                        $discount = 0;

                        $query_ids = array();
                        //print_r($query_ids);
                        $status = $vendor['display_status'];
                        $className = str_replace(' ', '_', $status);


                        if (strtolower($status) == "query submitted") {
                            $circle_background_color = "#47DBC3";
                            $padding_top = "25%";
                            $status_var = 1;
                            $price = "(Depend on Discussion)";
                        } elseif (strtolower($status) == "in review") {
                            $circle_background_color = "#FF8A45";
                            $padding_top = "35%";
                            $status_var = 2;
                            $price = "(Depend on Discussion)";
                        } elseif (strtolower($status) == "available") {
                            $circle_background_color = "#89CB3E";
                            $padding_top = "35%";
                            $status_var = 3;
                            $date_name = $status;
                        } elseif (strtolower($status) == "not available") {
                            $circle_background_color = "#ADADAD";
                            $padding_top = "25%";
                            $status_var = 4;
                            $price = "(Depend on Discussion)";
                        } elseif (strtolower($status) == "booked") {
                            $circle_background_color = "#FFC63C";
                            $padding_top = "35%";
                            $status_var = 5;
                            $date_name = $status;
                        }

                        ?>
                        <tr class="{{$className}} hideAll">
                            <td>
                                <div class="circle"
                                     style="background-color: {{$circle_background_color}};padding-top: {{$padding_top}};">
                                    <span>{{$status}}</span></div>
                            </td>
                            <td>
                                <p class="title">{{$vendor['vendor_name']}}</p>

                                <p class="detail">
                                    <span>{{$vendor['category_name']}}</span>
                                    |
                                    {{$date_name}} Date:


                                    @foreach($vendor['query_details'] as $query)
                                        @if($query == reset($vendor['query_details']))
                                            <span class="button button2">{{date_format(date_create($query['event_date']),"M")}}</span>
                                        @endif
                                        <span class="date button2">{{date_format(date_create($query['event_date']),"d")}}</span>

                                        <?php
                                        array_push($query_ids, $query['query_id']);

                                        $event_title = "";
                                        $event_tag_id = null;
                                        $event_background = "#ffffff";
                                        if (isset($query['query_tag'])) {
                                            $event_title = $query['query_tag'];
                                            $event_tag_id = $query['query_tag_id'];
                                            $event_background = "#0B98FF";
                                            $event_txt_color = "#ffffff";
                                        } else {
                                            $event_title = "Add To Event";
                                            $event_background = "#F2F2F2";
                                            $event_txt_color = "#0B98FF";

                                        }

                                        if (is_numeric($price)) {
                                            $price += $query['total_payment'];
                                            $advance += $query['advance_payment'];
                                            $already_paid += $query['total_paid'];
                                            $due = $price - $already_paid;

                                            $discount += $query['discount'];
                                        }
                                        ?>
                                    @endforeach
                                </p>

                                <p class="detail">Price: <span>{{$price}}</span></p>

                                <p class="detail">

                                    <button class="details details_shadow" data-toggle="modal"
                                            data-target="#modal_event"> Details
                                    </button>
                                    <button class="add_event add_event_shadow"
                                            style="background-color: {{$event_background}};color: {{$event_txt_color}}"
                                            data-toggle="modal"
                                            data-target="#modal_event"
                                            onclick=setModalWithData('{{json_encode($query_ids)}}','{{$event_tag_id}}')
                                            >
                                        <span class="glyphicon glyphicon-th-large"></span>
                                        <span style="font-size: 22px">{{$event_title}}</span>

                                    </button>
                                </p>
                            </td>
                            @if($status_var == 1 || $status_var == 4)
                                <td class="column_3">
                                    <p></p>

                                    <p class="remove remove_shadow"
                                       onclick="remove_query('{{json_encode($query_ids)}}')"> Remove </p>
                                </td>
                            @elseif($status_var == 2)
                                <td class="column_3">
                                </td>
                            @elseif($status_var == 3)
                                <td class="column_3">

                                    <p class="time"><img src="{{asset('img/icons/time.png')}}"> 72:89 left</p>
                                    <button class="paybook paybook_shadow"
                                            onclick="addToCart('{{json_encode($query_ids)}}'),openNav()">
                                        Pay
                                        & Book
                                    </button>
                                    {{--<a href="#" class="btn btn-success" onclick="cart('{{$status_id}}','{{$status_id}}','{{$title_id}}' ,'{{$category_id}}' , '{{$month_id}}' ,'{{$date1_id}}' , '{{$date2_id}}' , '{{$date3_id}}' ,'{{$totalPrice_id}}' )">Payand book</a>--}}
                                    <p class="advance">Min. Advance: BDT 5000</p>
                                </td>
                            @elseif($status_var == 5)
                                <td class="column_3">
                                    <p></p>
                                    <button class="paybook paybook_shadow" style="padding: 5px 52px"
                                            onclick="addToCart('{{json_encode($query_ids)}}'),openNav()"> Pay Rest
                                    </button>
                                    {{--<p class="advance">Min. Advance: BDT 5000</p>--}}
                                    <p class="duePrice"> Due amount: BDT {{$due}} </p>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                @endif
                @if($check <= 0)
                    <h1>No Data found</h1>
                @endif
            </table>
        </div>
        <div id="mySidebar" class="sidebar">
            <div class="row" style="padding-left: 30%">
                <label class="cart-head"><img src="{{asset('img/cart/cart.png')}}"> My Booking List</label><a
                        href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            </div>
            <div class="row">
                <label class="cart-subhead">Amount</label>
            </div>
            <div id="div-cart">

            </div>
            <div class="cart-line"></div>
            <div><label class="cart-total">Total: </label><label class="cart-total cart-total-value" id="total"></label>
            </div>
            <button class="cart-paybtn cart-paybtn-shadow">Payment</button>
        </div>


        <script>
            function openNav() {
                document.getElementById("mySidebar").style.width = "20%";
                document.getElementById("main1").className = "col-sm-10";

                document.getElementById("drop_down").style.float = "left";
            }

            function closeNav() {
                document.getElementById("mySidebar").style.width = "0";
                document.getElementById("main1").className = "col-sm-12";

                document.getElementById("drop_down").style.float = "right";
            }

            function addTotal($len) {
                //alert($len);
                var i = 0;
                var total = 0;
                for (i = 0; i < $len; i++) {
                    //alert(document.getElementById(i).value);
                    total = total + parseInt(document.getElementById(i).value);
                }
                document.getElementById('total').innerHTML = "BDT " + total;
            }
        </script>


    </div>

    {{--Modals--}}
    {{--Events model--}}
    <div class="container">
        <!-- Modal -->
        <div class="modal fade modal_div" id="modal_event" role="dialog">
            <div class="modal-dialog modal_dialog">
                <!-- Modal content-->
                <div class="modal-content modal_content">
                    <div class="modal-header modal_header">

                        <h4 class="modal-title modal_title">MY EVENTS</h4>
                        <button type="button" class="close" data-dismiss="modal" id="close"
                                onclick="close()">&times;</button>
                    </div>
                    <div class="modal-body modal_body" id="event_list">


                        <div id="events">

                            @foreach($events as $event)
                                <label class="radio_container">{{$event->title}}
                                    <input type="radio" id="{{$event->id}}" name="radio" value="{{$event->id}}"
                                           onclick="add_event_to_query('{{$event->id}}')">
                                    <span class="checkmark"></span>
                                    <a href="javascript:void(0)" style="float: right"
                                       onclick="remove_event_from_query('{{$event->id}}')">&times;</a>
                                </label>
                            @endforeach
                            <label class="radio_container">Not Set
                                <input type="radio" id="0" name="radio" value="{{null}}"
                                       onclick="add_event_to_query({{0}})">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer modal_footer">
                        <div class="modal_create_event" id="modal_create_event">
                            <p onclick="create_event_form_open()">+ Create Event</p>
                        </div>
                        <br>

                        <form role="form" id="eventForm" class="form modal_form">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" class="form-control form_event_input" id="event_name"
                                       placeholder="New Event Name">
                            </div>
                            <button type="submit" class="btn form_event_button" id="event_submit">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
@push('scripts')


<script>

    var queryIds_for_event;
    var tagId_for_event;

    function setModalWithData(query_ids, event_tag_id) {
        var id_array = JSON.parse(query_ids);
        queryIds_for_event = id_array;


        /*Loading Event List*/
        if (event_tag_id == "") {
            event_tag_id = 0;
        }
        tagId_for_event = event_tag_id; //for global use

        $.ajax({
            url: '/load-events/' + event_tag_id,
            type: 'GET',
            success: function (data) {
                console.log(' message: ' + data);
                $("#event_list").html(data);
            },
            error: function (xhr, status, error) {
                // check status && error
                console.log('Error  message: ' + error);
            },
            dataType: 'text'

        });


    }
    function cart() {
        alert(document.getElementById('pname').innerHTML);
        var name = document.getElementById('pname').innerHTML;
        document.getElementById('cname').innerHTML = name;
    }

    function addToCart(ids) {
        var id_array = JSON.parse(ids);
        //alert(id_array[0]);
        $.ajax({
            url: '/add-to-myCart/' + id_array,
            type: 'GET',
            success: function (data) {
                console.log(' message: ' + data);
                $('#div-cart').html(data);
            },
            error: function (xhr, status, error) {
                // check status && error
                console.log('Error  message: ' + error);
            },
            dataType: 'text',
        });
    }

    function remove_query(ids) {
        var x = confirm("are you sure to delete this query !");
        if (x) {
            var id_array = JSON.parse(ids);
            //alert(id_array[0]);

            $.ajax({
                url: '/my-query-delete/' + id_array,
                type: 'GET',
                success: function (data) {
                    console.log(' message: ' + data);
                    $('body').html(data);
                },
                error: function (xhr, status, error) {
                    // check status && error
                    console.log('Error  message: ' + error);
                },
                dataType: 'text',
            });
        }
    }
    function create_event_form_open() {
        $("#modal_create_event").hide();
        $("#eventForm").fadeIn();
    }

    $("#modal_event").on("hidden.bs.modal", function () {
        // put your default event here
        $("#modal_create_event").show();
        $("#eventForm").hide();


    });


    function add_event_to_query($event_id) {
        //alert($event_id);

        //console.log("queries: "+queryIds_for_event);

        var id_array = queryIds_for_event; //queryIds_for_event is a global variable which defines when modal is open

        $.ajax({
            url: '/add-event-to-query/' + $event_id + '/' + id_array,
            type: 'GET',
            success: function (data) {
                console.log(' message: ' + data);
                //$('body').html(data);
                document.location.reload(true);

            },
            error: function (xhr, status, error) {
                // check status && error
                console.log('Error  message: ' + error);
            },
            dataType: 'text'

        });


    }
    function remove_event_from_query($event_id) {
        //alert($event_id);

        //console.log("queries: "+queryIds_for_event);

        var id_array = queryIds_for_event; //queryIds_for_event is a global variable which defines when modal is open

        $.ajax({
            url: '/remove-event-from-query/' + $event_id + '/' + id_array + '/' + tagId_for_event,
            type: 'GET',
            success: function (data) {
                console.log(' message: ' + data);
                $("#event_list").html(data);

                document.location.reload(true);

            },
            error: function (xhr, status, error) {
                // check status && error
                console.log('Error  message: ' + error);
            },
            dataType: 'text'

        });


    }

    function filter(status) {
        //alert(status);
        $('.hideAll').hide();
        $('.' + status + '').show();
    }
    function filter_showAll() {
        $('.hideAll').show();
    }


</script>

{{--Event Add--}}
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#event_submit').click(function (e) {
        e.preventDefault();
        //alert("ok");

        var event_name = $('#event_name').val();
        if (event_name == "") {
            alert("You must enter a title !");
            return;
        }

        //alert(event_name);

        $.ajax({
            type: 'POST',
            url: '/add_new_event/' + tagId_for_event,
            data: {
                event_name: event_name
            },
            success: function (response) {
                // $("#queryCount").text(response.totalquery);
                // $("#queryForm")[0].reset();

                //console.log(response);

                $("#event_list").html(response);
                $("#eventForm")[0].reset();

            },
            error: function (error) {
                //console.log(response);
                $("#event_list").html(error);
                $("#eventForm")[0].reset();
            },
            statusCode: {
                422: function () {
                    $('#ajax-alert').html('<div class="alert alert-danger alert-dismissible mt-3 fade show"> <button type="button" class="close" data-dismiss="alert">&times;</button> Date and Number is required</div>');
                },
                401: function (data) {
                    $("#myModal").modal('show');
                },
            },
        });
    });
</script>
@endpush
