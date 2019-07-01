<?php
/**
 * Created by PhpStorm.
 * User: Nirjhor
 * Date: 5/15/2019
 * Time: 11:28 AM
 */
//print_r($vendor_arr);
$query_ids = array();

$cart_query_ids = array();

?>
@extends('layouts.app')

@push('css')
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
<style xmlns="http://www.w3.org/1999/html">

    body {
        /*background-color: #FFFFFF;*/
    }

    .page-section {
        /*background-color: #FFFFFF;*/
    }

    .row.container {
        min-width: 100% !important;
        padding: 0 10%;
        /*background-color: #FFFFFF;*/

    }

    .query_table_div td {
        border: 0;
    }

    .query_table_div tr {
        border-bottom: 3px solid #DEDEDE;
    }

    .circle {
        height: 150px;
        line-height: 30px;
        width: 150px;
        border-radius: 50%;
        /*background-color: #89CB3E;*/
        text-align: center;
        color: #fff;
        font-size: 24px;
        font-weight: 500;
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



    .paybook_complete {
        background-color: #F2F2F2;
        border: 1px solid #DEDEDE;
        color: #6b6b6b;
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

    .paybook_complete_shadow {
        box-shadow: 0 1px 3px 0 rgba(223, 164, 73, 0.24), 0 1px 1px 0 rgba(33, 136, 56, 0.19);
    }



    .re_request {
        background-color: #EF4E4A;
        border: 1px solid #DFA449;
        color: #FFFFFF;
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

    .re_request_shadow {
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
    .duePrice_0 {
        font-weight: bolder;
        margin-bottom: 0;
        /*margin-left: 5px;*/
        color: #464c52;
        text-align: center;
    }

    /*cart*/
    .extra tr:hover {
        background-color: #f5f5f5;
    }

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

    .cart-img {
        padding: 1%;
        background-color: #FFFFFF;
        position: fixed;
        right: 0%;
        top: 30%;
        border-top-left-radius: 70%;
        border-bottom-left-radius: 70%;
        box-shadow: 0px 0px 10px 2px #9c9c9c;
        cursor: cell;
    }

    .cart-img:hover {
        padding: 1.1%;
        background-color: #FFFFFF;
        position: fixed;
        right: 0%;
        top: 30%;
        border-top-left-radius: 70%;
        border-bottom-left-radius: 70%;
        box-shadow: 4px 6px 5px 2px #272121;
        cursor: cell;
    }

    .price {
        padding: 5px;
    }

    .regular_price {
        text-decoration: line-through;
    }

    .discount_price {
        color: #62AF0B;
        margin-left: 15px;
    }

    .hideAll a {
        color: #000;
    }

    #invoice_btn:hover #invoice {
        display: block;
    }

</style>


{{--Time--}}

<style>
    .is-countdown {
        border: 0 !important;
        background-color: #F2F2F2 !important;
    }

    .countdown-period {
        /*display: none !important;*/
        font-size: 15px;
    }

    .remain_time {
        text-align: center;

    }

    .remain_time p {
        font-size: 12px;

    }


</style>
{{--All Modal Design--}}
<style>
    /*Event Modal Design*/
    .event .modal_div {
        /*border-radius: 10px;*/
    }

    .event .modal_dialog {
        width: 22%;
        overflow-y: initial !important;
        /*border-radius: 10px;*/
    }

    .event .modal_header {
        background-color: #FFC107;
        color: #FFFFFF;
        /*border-radius: 10px;*/
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;

    }

    .event .modal_title {
        margin: 0 auto;
        font-size: 20px;
        text-align: center;
        font-weight: 500;
    }

    .event .modal_body {
        height: 250px;
        overflow-y: auto;
    }

    .event .modal_content {
        border-radius: 10px;
    }

    .event .form {
        width: 100%;
        text-align: center;
        display: none;
    }

    .event .form_event_input {
        border: 0;
        border-bottom: 1px solid #6E6E6E;
    }

    .event .form_event_button {
        color: #6E6E6E;
        background-color: #ffffff;
        text-transform: capitalize;
    }

    .event .modal_create_event {
        text-align: center;
        width: 100%;
        border-top: 2px solid #6E6E6E;
        color: #6E6E6E;

    }

    .event .modal_create_event p {
        font-weight: bold;
        cursor: pointer;
    }

    .close {
        color: #ffffff;
        font-size: 30px;
        opacity: 1;
    }

    .modal_footer {
        border: 0;
    }

    /*Details Modal Design*/
    /*Event Modal Design*/

    .details_modal .modal_dialog {
        width: 55%;
        height: 75%;
        overflow-y: initial !important;
    }

    .details_modal .modal_header {
        background-color: #FFFFFF;
        color: #E2AD5B;
        /*border-radius: 10px;*/
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;

    }

    .details_modal .close {
        color: #E2AD5B;
        float: right;
        font-size: 30px;
        opacity: 1;
    }

    .details_modal .modal_title {
        margin: 0 auto;
        font-size: 20px;
        text-align: center;
        font-weight: 500;
    }

    .details_modal .modal_body {
        /*height: 250px;*/
        overflow-y: auto;
        padding: 0;
        height: 550px;
    }

    .details_modal .modal_content {
        border-radius: 10px;
    }

    .details_modal .vendor_img {
        height: 110px;
        width: 200px;
    }

    .details_modal .vendor_title {
        text-transform: none;
        color: #E2AD5B;
    }

    .details_modal p {
        margin: 0;
    }

    .details_modal .body_first_row {
        background-color: #F4F4F4;
    }

    .details_modal .row {
        margin-right: 0;
    }

    .details_modal .col-sm-8 {
        padding: 1%;
    }

    .details_modal .modal_container {
        padding-top: 2%;
        padding-right: 2%;
        padding-bottom: 0;
        padding-left: 5%;
    }

    .details_modal .modal_container p {
        font-size: 15px;;
    }

    .details_modal .date_row {
        margin-top: 2%;
        margin-bottom: 2%;
    }

    .details_modal .request_date_box {
        border: 1px solid;
        border-radius: 10px;
        margin-right: 10px;
        max-width: 22%;
        padding-top: 1%;
        padding-bottom: 1%;
    }

    .details_modal .date_title {
        padding-top: 2%;
        color: #C29147;
    }

    .details_modal .available_date_box {
        border: 1px solid;
        border-radius: 10px;
        margin-right: 10px;
        max-width: 22%;
        background-color: #62AF0B;
        color: white;
        padding-top: 1%;
        padding-bottom: 1%;
    }

    .details_modal .label {
        color: #C29147;
    }

    .details_modal .message_box {
        width: 100%;
        height: 300%;
        border-radius: 10px;
        border: 1px solid #E2AD5B;
        resize: none;
        margin-left: 0;
        text-align: left
    }

    .details_modal .model_footer {
        display: block;
    }

    .details_modal .footer_block {
        border-right: 1px solid #DEDEDE;
        text-align: center;
        padding: 5px 0;
    }

    .details_modal .footer_price {
        color: #535353;
        font-weight: bold;
    }

    .multydates .modal_dialog {
        width: 700px;
    }

    .multydates .close {
        color: #E2AD5B;
        float: right;
        font-size: 30px;
        opacity: 1;
    }

    .multydates .modal_header {
        border: 0;
        display: block;

        padding-top: 0;
        padding-right: 10px;
        padding-bottom: 0;
        padding-left: 0;
    }

    .multydates .modal_footer {
        border-top: 1px solid #e9ecef;
        background-color: #FFC107;
        border-bottom-right-radius: 1rem;
        border-bottom-left-radius: 1rem;

        padding-top: 0;
        padding-right: 10px;
        padding-bottom: 0;
        padding-left: 10px;
    }

    .multydates .btn_paybook {
        background-color: #FFC107;
        width: 100%;
        color: white;
        font-size: 28px;
    }

    .multydates .modal_content {
        border-radius: 1rem;
    }

    .multydates .footer {
        width: 100%;
        text-align: center;
    }

    .multydates p {
        margin-top: 0;
        margin-bottom: 0;
    }

    .multydates .available_date_box {
        border: 1px solid;
        border-radius: 10px;
        margin-right: 10px;
        max-width: 30%;
        padding-top: 1%;
        padding-bottom: 1%;
        cursor: pointer;
    }

    .multydates .selected_date_box {
        border: 1px solid #62AF0B;
        border-radius: 10px;
        margin-right: 10px;
        max-width: 30%;
        padding-top: 1%;
        padding-bottom: 1%;
        cursor: pointer;
        background-color: #62AF0B;
        box-shadow: 6px 7px 14px -8px #0baf90;
    }

    .multydates .noAvailable_date_box {
        border: 1px solid #2B2B2B;
        border-radius: 10px;
        margin-right: 10px;
        max-width: 30%;
        padding-top: 1%;
        padding-bottom: 1%;
        background-color: rgba(77, 77, 77, 0.57);
        /*box-shadow: 6px 7px 14px -8px #000;*/
        cursor: no-drop;
    }

    .multydates .row {
        margin-left: 0;
    }

    .payment .modal_dialog {
        width: 600px;
    }

    .payment .close {
        color: #E2AD5B;
        float: right;
        font-size: 30px;
        opacity: 1;
    }

    .payment .modal_header {
        border: 0;
        display: block;

        padding-top: 0;
        padding-right: 10px;
        padding-bottom: 0;
        padding-left: 0;
    }

    .payment .modal_footer {
        border-top: 1px solid #e9ecef;
        background-color: #FFC107;
        border-bottom-right-radius: 1rem;
        border-bottom-left-radius: 1rem;

        padding-top: 0;
        padding-right: 10px;
        padding-bottom: 0;
        padding-left: 10px;
    }

    .payment .modal_content {
        border-radius: 1rem;
    }

    .payment .footer {
        width: 100%;
        text-align: center;
    }

    .payment p {
        margin-top: 0;
        margin-bottom: 0;
        font-weight: 500;
        font-size: 20px;
        text-align: center;
    }

    .payment .row {
        margin-left: 0;
    }

    .payment .btn_paymentBook {
        background-color: #FFC107;
        width: 50%;
        color: white;
        font-size: 20px;
        text-align: center;
        margin-top: 20px;
        margin-bottom: 20px;
        border-radius: 12px;
        font-weight: 500;
    }

    .payment .modal-body {
        width: 100%;
        color: white;
        font-size: 28px;
        text-align: center;
        /*height: 260px;*/
    }

    .payment img {
        margin-right: 15px;
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
        background-color: #fff;
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
        top: 7px;
        left: 7px;
        width: 9px;
        height: 9px;
        border-radius: 50%;
        background: #FFC107;
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

    .query a {
        text-decoration: none;
        color: white;
    }

    .query a:hover {
        text-decoration: none;
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
        width: 200px;
        font-weight: bolder;
    }

    .btn_expire {
        background-color: #FFFBF4;
        border: 1px solid #E2AD5B;
        color: #E2AD5B;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 22px;
        margin: 4px 2px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        border-radius: 5px;
        vertical-align: central;
        width: 220px;
        font-weight: bolder;
        cursor: pointer;
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
        width: 200px;
        font-weight: bolder;
    }

    .filter {
        background-color: #E2AD5B;
        width: 200px;
        padding: 0;
    }

    .dropdown-item:hover {
        /*background-color: #FFFBF4;*/
        padding-top: 5%;
        padding-bottom: 5%;
    }

    .btn-reset-event {
        float: right;
        width: 72px;
        height: 33px;
        font-size: 11px;
        border-radius: 100%;
        background-color: #FFFFFF;
        border: 1px solid #DDDDDD;
    }

    .btn-reset-event:hover {
        background-color: #FFC107;
    }

    .event_dropdown {
        background-color: #E2AD5B;
        width: 200px;
        padding: 0;
    }

</style>

{{--Style For Tabs--}}
<style>
    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }

    .icons {
        font-size: 35px !important;
        color: #E2AD5B;
    }

    .invoice_tab:hover {
        background-color: #DDDDDD;
    }

    .invoice_tab {
        text-align: center;
        padding: 10px;
    }

    .invoice_image{
        height: 80px;
    }




</style>
@endpush

@section('content')

        <!-- Masthead -->
<header class="pagehead" style="background-image: url({{asset('img/backgrounds/page_header.png')}});">
    <div class="container">
        <div class="row ">

            <div class="col-sm-2 mt query">
                <a href="{{route('my_query')}}" class="btn btn_myqueries">My Queries</a>
            </div>
            <div class="col-sm-2 mt">

                <div class="dropdown">
                    <button class="btn btn_events" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <span id="event_title">My Events</span>
                        <span style="float: right;display: none" onclick="event_filter_showAll('My Events')"
                              id="my_event_cross">&times;</span>

                    </button>

                    <div class="dropdown-menu event_dropdown" aria-labelledby="dropdownMenuButton">
                        @foreach($events as $event)

                            <a class="dropdown-item" href="#"
                               onclick="event_filter('{{str_replace(' ','_',$event->title)}}','{{$event->title}}')">{{$event->title}}</a>
                        @endforeach
                        {{--<a class="dropdown-item" href="#" onclick="event_filter_showAll('All')">All</a>--}}
                        <a class="dropdown-item" href="#" onclick="event_filter('not_set','Not Set')">Not Set</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-4 mt">
                {{--<div class="dropdown " style="float: right" id="drop_down">
                    <button class="btn_filter add_event_shadow dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span id="filter_title">Filter</span>
                        <span style="float: right" onclick="filter_showAll('Filter')">&times;</span>
                    </button>
                    <div class="dropdown-menu filter" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="javascript:void(0)"
                           onclick="filter('Query_Submitted','Query Submitted')">Query Submitted</a>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="filter('In_Review','In Review')">In
                            Review</a>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="filter('Available','Available')">Available</a>
                        <a class="dropdown-item" href="javascript:void(0)"
                           onclick="filter('Not_Available','Not Available')">Not Available</a>
                        <a class="dropdown-item" href="javascript:void(0)"
                           onclick="filter('Booked','Booked')">Booked</a>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="filter('Time_Out','Time Out')">Time
                            Out</a>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="filter_showAll('All')">All</a>
                    </div>
                </div>--}}
            </div>
        </div>

    </div>
</header>

<!-- My Query Section -->
<section class="page-section mt-3 mb-3" style="min-height: 40%">
    <div class="row container">
        <div class="col-sm-12">
            <div class="tab">
                <button class="tablinks" onclick="filter_showAll(event, 'All')">All  </button>
                <button class="tablinks" onclick="filter(event, 'Query_Submitted','Query Submitted')">
                    Query Submitted
                    @if($not_arr['Query Submitted'] != 0)<span class="badge_q badge-light" id="cartCount">{{$not_arr['Query Submitted']}}</span>@endif
                </button>
                <button class="tablinks" onclick="filter(event, 'In_Review','In Review')">
                    In Review
                    @if($not_arr['In Review'] != 0)<span class="badge_q badge-light" id="cartCount">{{$not_arr['In Review']}}</span>@endif
                </button>
                <button class="tablinks" onclick="filter(event, 'Available','Available')">
                    Available
                    @if($not_arr['Available'] != 0)<span class="badge_q badge-light" id="cartCount">{{$not_arr['Available']}}</span>@endif
                </button>
                <button class="tablinks" onclick="filter(event, 'Not_Available','Not Available')">
                    Not Available
                    @if($not_arr['Not Available'] != 0)<span class="badge_q badge-light" id="cartCount">{{$not_arr['Not Available']}}</span>@endif
                </button>
                <button class="tablinks" onclick="filter(event, 'Booked','Booked')">
                    Booked
                    @if($not_arr['Booked'] != 0)<span class="badge_q badge-light" id="cartCount">{{$not_arr['Booked']}}</span>@endif
                </button>
                <button class="tablinks" onclick="filter(event, 'Timeout','Time Out')">
                    Time Out
                    @if($not_arr['Timeout'] != 0)<span class="badge_q badge-light" id="cartCount">{{$not_arr['Timeout']}}</span>@endif

                </button>
                <button class="tablinks" onclick="filter(event, 'Cash_Requested','Cash Requested')">
                    Cash Requested
                    @if($not_arr['Cash Requested'] != 0)<span class="badge_q badge-light" id="cartCount">{{$not_arr['Cash Requested']}}</span>@endif
                </button>
            </div>
        </div>
    </div>
    <div class="row container">
        {{--Nirjhor Code For Query per submitted--}}
        <div class="col-sm-12 query_table_div" id="main1">
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

                        $event_title = $vendor['query_tag'];
                        if ($event_title == null) {
                            $event_title = "not_set";
                        }
                        $event_title = str_replace(' ', '_', $event_title);


                                

                        /**
                         * New Code [ V.02 Api ]
                         */
                        ?>

                        @foreach($vendor['query_list'] as $queries)


                            <?php
                            $status = $queries['display_status'];




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
                                $price = 0;
                            } elseif (strtolower($status) == "not available") {
                                $circle_background_color = "#ADADAD";
                                $padding_top = "35%";
                                $status_var = 4;
                                $price = "(Depend on Discussion)";
                            } elseif (strtolower($status) == "booked") {
                                $circle_background_color = "#FFC63C";
                                $padding_top = "35%";
                                $status_var = 5;
                                $date_name = $status;
                                $price = 0;
                            } elseif (strtolower($status) == "cash requested") {
                                $circle_background_color = "#1B83B8";
                                $padding_top = "25%";
                                $status_var = 6;
                                $date_name = $status;
                                $price = 0;
                            } elseif (strtolower($status) == "timeout") {
                                $circle_background_color = "#EF4E4A";
                                $padding_top = "35%";
                                $status_var = 7;
                                $date_name = $status;
                                $price = 0;
                            }
                            ?>

                            <tr class="{{$className}} {{$event_title}} hideAll">
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
                                        @foreach($queries['query_details'] as $query)



                                            @if($query == reset($queries['query_details'])) {{--For Showing 1st date's month--}}
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
                                                $discount += $query['discount'];

                                                $due = $price - ($already_paid + $discount);
                                            }
                                            ?>
                                        @endforeach
                                    </p>

                                    @if($discount <= 0)
                                        <p class="detail price"> Price:
                                            <span>{{$price}}</span></p>
                                    @else
                                        <p class="detail price">
                                            <span class="regular_price">Regular Price: <span>{{$price}}</span></span>
                                            <span class="discount_price">Discount Price: <span>{{ ($price - $discount)}}</span></span>
                                        </p>
                                    @endif
                                    <p class="detail">
                                        {{--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal_event">Open Modal</button>--}}
                                        @if($expire != 1)
                                            <button class="details details_shadow" data-toggle="modal"
                                                    data-target="#modal_details"
                                                    onclick=setDetailsModalWithData('{{json_encode($query_ids)}}')>
                                                Details
                                            </button>
                                        @endif

                                        <button class="add_event add_event_shadow"
                                                style="background-color: {{$event_background}};color: {{$event_txt_color}}"
                                                data-toggle="modal" data-target="#modal_event"
                                                onclick=setModalWithData('{{json_encode($query_ids)}}','{{$event_tag_id}}')>
                                            {{--<span>
                                                <img src="{{asset('img/icons/myquery/Add to events.png')}}">
                                            </span>--}}
                                            <span style="font-size: 22px">{{$event_title}}</span>
                                        </button>
                                    </p>
                                </td>





                                {{--Icons for Invoices--}}

                                <td>
                                    @if($status_var == 5) <!- booked ->
                                    <div class="row" id="#invoice_btn">
                                        <div class="col-sm-12 " >
                                            <a class="" href="{{route('showInvoice',implode(',',$query_ids))}}" >
                                                <img class="invoice_image" src="{{asset('img/icons/invoice.png')}}">
                                                {{--Get Invoice--}}
                                            </a>
                                        </div>
                                    </div>
                                    {{--<div class="row " id="invoice">
                                        <div class="col-sm-4 invoice_tab">
                                            <a href="{{route('showInvoice',implode(',',$query_ids))}}">
                                                <i class="fa fa-download icons"></i>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 invoice_tab">
                                            <a href="#">
                                                <i class="fa fa-envelope icons"></i>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 invoice_tab">
                                            <a href="#">
                                                <i class="fa fa-print icons"></i>
                                            </a>
                                        </div>
                                    </div>--}}
                                    @endif
                                </td>



                                @if($status_var == 1)   <!- query submitted ->
                                <td class="column_3">
                                    <p></p>

                                    @if($expire != 1)
                                        <p class="remove remove_shadow"
                                           onclick="remove_query('{{json_encode($query_ids)}}')"> Remove </p>
                                    @endif
                                </td>

                                @elseif($status_var == 2) <!- In Review ->
                                <td class="column_3">
                                </td>

                                @elseif($status_var == 3) <!- Available ->
                                <td class="column_3">
                                    <input type="hidden" id="{{$vendor['submit_id']}}" class="expire"
                                           value="{{$vendor['expiry_date'].'T'.date('H:i', strtotime($vendor['expiry_time']))}}">

                                    <div class="remain_time">
                                        {{--<img src="{{asset('img/icons/time.png')}}">--}}
                                        <p class="time" id="defaultCountdown{{$vendor['submit_id']}}">

                                        </p>
                                    </div>

                                    {{-- <button class="paybook paybook_shadow"
                                             onclick="addToCart('{{json_encode($query_ids)}}'),openNav()"
                                             data-toggle="modal" data-target="#modal_multipledates">
                                         Pay & Book
                                     </button>--}}

                                    @if(count($query_ids) <=1)
                                        <button class="paybook paybook_shadow"
                                                onclick="showAvailableDates('{{json_encode($query_ids)}}','Available'),openNav()"
                                                data-toggle="modal" data-target="">
                                            Pay & Book
                                        </button>
                                    @else
                                        <button class="paybook paybook_shadow"
                                                onclick="showAvailableDates('{{json_encode($query_ids)}}','Available')"
                                                data-toggle="modal" data-target="#modal_multipledates">
                                            Pay & Book
                                        </button>
                                    @endif


                                    {{--<a href="#" class="btn btn-success" onclick="cart('{{$status_id}}','{{$status_id}}','{{$title_id}}' ,'{{$category_id}}' , '{{$month_id}}' ,'{{$date1_id}}' , '{{$date2_id}}' , '{{$date3_id}}' ,'{{$totalPrice_id}}' )">Payand book</a>--}}
                                    <p class="advance">Min. Advance: BDT {{$advance}}</p>
                                </td>

                                @elseif($status_var == 4) <!- Not Availabe ->
                                <td class="column_3">
                                    <p></p>

                                    @if($expire != 1)
                                        <p class="remove remove_shadow"
                                           onclick="soft_remove_query('{{json_encode($query_ids)}}')"> Remove </p>
                                    @endif
                                </td>

                                @elseif($status_var == 5 ) <!- Booked ->

                                    @if($due > 0)
                                        <td class="column_3">
                                            <p></p>
                                            @if(count($query_ids) <=1)
                                                <button class="paybook paybook_shadow" style="padding: 5px 52px"
                                                        onclick="showAvailableDates('{{json_encode($query_ids)}}','Booked'),openNav()"
                                                        data-toggle="modal" data-target=""> Pay Rest
                                                </button>
                                            @else
                                                <button class="paybook paybook_shadow" style="padding: 5px 52px"
                                                        onclick="showAvailableDates('{{json_encode($query_ids)}}','Booked')"
                                                        data-toggle="modal" data-target="#modal_multipledates"> Pay Rest
                                                </button>
                                            @endif
                                            {{--<p class="advance">Min. Advance: BDT 5000</p>--}}
                                            <p class="duePrice"> Due amount: BDT {{$due}} </p>
                                        </td>
                                    @else
                                        <td class="column_3">
                                            <p></p>
                                            <button class="paybook_complete paybook_complete_shadow" style="padding: 5px 52px"
                                                    onclick="openNav()"
                                                    data-toggle="modal"> Payment Complete
                                            </button>
                                            {{--<p class="advance">Min. Advance: BDT 5000</p>--}}
                                            <p class="duePrice"> Due amount: BDT {{$due}} </p>
                                        </td>
                                    @endif

                                @elseif($status_var == 7 ) <!- timeout ->
                                <td class="column_3">
                                    <input type="hidden" id="{{$vendor['submit_id']}}" class="expire"
                                           value="{{$vendor['expiry_date'].'T'.date('H:i', strtotime($vendor['expiry_time']))}}">

                                    <div class="remain_time">
                                        {{--<img src="{{asset('img/icons/time.png')}}">--}}
                                        <p class="time" id="defaultCountdown{{$vendor['submit_id']}}">

                                        </p>
                                    </div>

                                    <button class="re_request re_request_shadow"
                                            onclick="re_request('{{json_encode($query_ids)}}')">
                                        Re-request
                                    </button>


                                    {{--<a href="#" class="btn btn-success" onclick="cart('{{$status_id}}','{{$status_id}}','{{$title_id}}' ,'{{$category_id}}' , '{{$month_id}}' ,'{{$date1_id}}' , '{{$date2_id}}' , '{{$date3_id}}' ,'{{$totalPrice_id}}' )">Payand book</a>--}}
                                    <p class="advance">Min. Advance: BDT {{$advance}}</p>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @endforeach
                @else
                    <?php $check = 0; ?>
                @endif

                @if(sizeof($service_arr) > 0)

                    @foreach($service_arr as $vendor)
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



                        $event_title = $vendor['query_tag'];
                        if ($event_title == null) {
                            $event_title = "not_set";
                        }
                        $event_title = str_replace(' ', '_', $event_title);


                        /**
                         * New Code [ V.02 Api ]
                         */


                        ?>

                        @foreach($vendor['query_list'] as $queries)


                            <?php
                            $status = $queries['display_status'];



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
                                $price = 0;
                            } elseif (strtolower($status) == "not available") {
                                $circle_background_color = "#ADADAD";
                                $padding_top = "35%";
                                $status_var = 4;
                                $price = "(Depend on Discussion)";
                            } elseif (strtolower($status) == "booked") {
                                $circle_background_color = "#FFC63C";
                                $padding_top = "35%";
                                $status_var = 5;
                                $date_name = $status;
                                $price = 0;
                            } elseif (strtolower($status) == "cash requested") {
                                $circle_background_color = "#1B83B8";
                                $padding_top = "25%";
                                $status_var = 6;
                                $date_name = $status;
                                $price = 0;
                            } elseif (strtolower($status) == "timeout") {
                                $circle_background_color = "#EF4E4A";
                                $padding_top = "35%";
                                $status_var = 7;
                                $date_name = $status;
                                $price = 0;
                            }

                            $query_ids = array();
                            //print_r($query_ids);

                            ?>

                            <tr class="{{$className}} {{$event_title}} hideAll">
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
                                        @foreach($queries['query_details'] as $query)



                                            @if($query == reset($queries['query_details'])) {{--For Showing 1st date's month--}}
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
                                                $discount += $query['discount'];

                                                $due = $price - ($already_paid + $discount);
                                            }
                                            ?>
                                        @endforeach
                                    </p>

                                    @if($discount <= 0)
                                        <p class="detail price"> Price:
                                            <span>{{$price}}</span></p>
                                    @else
                                        <p class="detail price">
                                            <span class="regular_price">Regular Price: <span>{{$price}}</span></span>
                                            <span class="discount_price">Discount Price: <span>{{ ($price - $discount)}}</span></span>
                                        </p>
                                    @endif
                                    <p class="detail">
                                        {{--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal_event">Open Modal</button>--}}
                                        @if($expire != 1)
                                            <button class="details details_shadow" data-toggle="modal"
                                                    data-target="#modal_details"
                                                    onclick=setDetailsModalWithData('{{json_encode($query_ids)}}')>
                                                Details
                                            </button>
                                        @endif

                                        <button class="add_event add_event_shadow"
                                                style="background-color: {{$event_background}};color: {{$event_txt_color}}"
                                                data-toggle="modal" data-target="#modal_event"
                                                onclick=setModalWithData('{{json_encode($query_ids)}}','{{$event_tag_id}}')>
                                            {{--<span>
                                                <img src="{{asset('img/icons/myquery/Add to events.png')}}">
                                            </span>--}}
                                            <span style="font-size: 22px">{{$event_title}}</span>
                                        </button>
                                    </p>
                                </td>


                                {{--Icons for Invoices--}}

                                <td>
                                    @if($status_var == 5) <!- booked ->
                                    <div class="row" id="#invoice_btn">
                                        <div class="col-sm-12 " style="text-align: center">
                                            <a class="btn btn-default paybook paybook_shadow" href="{{route('showInvoice',implode(',',$query_ids))}}" >Get Invoice</a>
                                        </div>
                                    </div>
                                    {{--<div class="row " id="invoice">
                                        <div class="col-sm-4 invoice_tab">
                                            <a href="{{route('showInvoice',implode(',',$query_ids))}}">
                                                <i class="fa fa-download icons"></i>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 invoice_tab">
                                            <a href="#">
                                                <i class="fa fa-envelope icons"></i>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 invoice_tab">
                                            <a href="#">
                                                <i class="fa fa-print icons"></i>
                                            </a>
                                        </div>
                                    </div>--}}
                                    @endif
                                </td>


                                @if($status_var == 1)   <!- query submitted ->
                                <td class="column_3">
                                    <p></p>

                                    @if($expire != 1)
                                        <p class="remove remove_shadow"
                                           onclick="remove_query('{{json_encode($query_ids)}}')"> Remove </p>
                                    @endif
                                </td>

                                @elseif($status_var == 2) <!- In Review ->
                                <td class="column_3">

                                </td>

                                @elseif($status_var == 3) <!- Available ->
                                <td class="column_3">
                                    <input type="hidden" id="{{$vendor['submit_id']}}" class="expire"
                                           value="{{$vendor['expiry_date'].'T'.date('H:i', strtotime($vendor['expiry_time']))}}">

                                    <div class="remain_time">
                                        {{--<img src="{{asset('img/icons/time.png')}}">--}}
                                        <p class="time" id="defaultCountdown{{$vendor['submit_id']}}">

                                        </p>
                                    </div>

                                    {{-- <button class="paybook paybook_shadow"
                                             onclick="addToCart('{{json_encode($query_ids)}}'),openNav()"
                                             data-toggle="modal" data-target="#modal_multipledates">
                                         Pay & Book
                                     </button>--}}

                                    @if(count($query_ids) <=1)
                                        <button class="paybook paybook_shadow"
                                                onclick="showAvailableDates('{{json_encode($query_ids)}}','Available'),openNav()"
                                                data-toggle="modal" data-target="">
                                            Pay & Book
                                        </button>
                                    @else
                                        <button class="paybook paybook_shadow"
                                                onclick="showAvailableDates('{{json_encode($query_ids)}}','Available')"
                                                data-toggle="modal" data-target="#modal_multipledates">
                                            Pay & Book
                                        </button>
                                    @endif


                                    {{--<a href="#" class="btn btn-success" onclick="cart('{{$status_id}}','{{$status_id}}','{{$title_id}}' ,'{{$category_id}}' , '{{$month_id}}' ,'{{$date1_id}}' , '{{$date2_id}}' , '{{$date3_id}}' ,'{{$totalPrice_id}}' )">Payand book</a>--}}
                                    <p class="advance">Min. Advance: BDT {{$advance}}</p>
                                </td>

                                @elseif($status_var == 4) <!- Not Availabe ->
                                <td class="column_3">
                                    <p></p>

                                    @if($expire != 1)
                                        <p class="remove remove_shadow"
                                           onclick="soft_remove_query('{{json_encode($query_ids)}}')"> Remove </p>
                                    @endif
                                </td>

                                @elseif($status_var == 5 ) <!- Booked ->
                                    @if($due > 0)
                                        <td class="column_3">
                                            <p></p>
                                            @if(count($query_ids) <=1)
                                                <button class="paybook paybook_shadow" style="padding: 5px 52px"
                                                        onclick="showAvailableDates('{{json_encode($query_ids)}}','Booked'),openNav()"
                                                        data-toggle="modal" data-target=""> Pay Rest
                                                </button>
                                            @else
                                                <button class="paybook paybook_shadow" style="padding: 5px 52px"
                                                        onclick="showAvailableDates('{{json_encode($query_ids)}}','Booked')"
                                                        data-toggle="modal" data-target="#modal_multipledates"> Pay Rest
                                                </button>
                                            @endif
                                            {{--<p class="advance">Min. Advance: BDT 5000</p>--}}
                                            <p class="duePrice"> Due amount: BDT {{$due}} </p>
                                        </td>
                                    @else
                                    <td class="column_3">
                                        <p></p>
                                            <button class="paybook_complete paybook_complete_shadow" style="padding: 5px 52px"
                                                    onclick="openNav()"
                                                    data-toggle="modal"> Payment Complete
                                            </button>
                                        {{--<p class="advance">Min. Advance: BDT 5000</p>--}}
                                        <p class="duePrice_0"> Due amount: BDT {{$due}} </p>
                                    </td>
                                    @endif
                                @elseif($status_var == 7 ) <!- timeout ->
                                <td class="column_3">
                                    <input type="hidden" id="{{$vendor['submit_id']}}" class="expire"
                                           value="{{$vendor['expiry_date'].'T'.date('H:i', strtotime($vendor['expiry_time']))}}">

                                    <div class="remain_time">
                                        {{--<img src="{{asset('img/icons/time.png')}}">--}}
                                        <p class="time" id="defaultCountdown{{$vendor['submit_id']}}">

                                        </p>
                                    </div>

                                    <button class="re_request re_request_shadow"
                                            onclick="re_request('{{json_encode($query_ids)}}')">
                                        Re-request
                                    </button>

                                    {{--<a href="#" class="btn btn-success" onclick="cart('{{$status_id}}','{{$status_id}}','{{$title_id}}' ,'{{$category_id}}' , '{{$month_id}}' ,'{{$date1_id}}' , '{{$date2_id}}' , '{{$date3_id}}' ,'{{$totalPrice_id}}' )">Payand book</a>--}}
                                    <p class="advance">Min. Advance: BDT {{$advance}}</p>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @endforeach
                @endif
                @if($check <= 0)
                    <h1>No Data found</h1>
                @endif
            </table>
        </div>
        <div class="cart-img" onclick="openNav(),loadCart()">
            <img src="{{asset('img/cart/cart.png')}}">
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
            <div><label class="cart-total">Total: </label> <label class="cart-total cart-total-value"
                                                                  id="total"></label>
            </div>
            <button class="cart-paybtn cart-paybtn-shadow"
                    data-toggle="modal" data-target="#modal_payment" onclick="setTotal()">Payment
            </button>
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

                var query_current_amount = [];

                var i = 0;
                var total = 0;
                for (i = 0; i < $len; i++) {
                    //alert(document.getElementById(i).value);
                    total = total + parseInt(document.getElementById(i).value);

                    query_current_amount[i] = parseInt(document.getElementById(i).value);
                }
                document.getElementById('total').innerHTML = total;

                document.getElementById('cart_current_amounts').value = query_current_amount;


            }
        </script>
    </div>


    {{--Modals--}}
    {{--Events modal--}}
    <div class="container event">
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
    {{--Modals--}}
    {{--Details modal--}}
    <div class="container details_modal">
        <!-- Trigger the modal with a button -->
        <!-- Modal -->
        <div class="modal fade" id="modal_details" role="dialog">
            <div class="modal-dialog modal_dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content" id="detail_body">

                </div>
            </div>
        </div>
    </div>
    {{--Multiple Dates modal--}}
    <div class="container multydates">
        <!-- Modal -->
        <div class="modal fade modal_div" id="modal_multipledates" role="dialog">
            <div class="modal-dialog modal_dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content modal_content">
                    <div class="modal-header modal_header">

                        <button type="button" class="close" data-dismiss="modal" id="close"
                                onclick="close()">&times;</button>
                    </div>
                    <div class="modal-body modal_body" id="available_date_list">
                        {{--Here Load from user -> dates.blade --}}
                    </div>
                    <div class="modal-footer modal_footer">
                        <div class="footer">

                            <a href="javascript:void(0)" class="btn btn_paybook" id=""
                               onclick="addToCart('{{json_encode($query_ids)}}'),openNav()">Pay & Book
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--Payment Type modal--}}
    <div class="container payment">
        <!-- Modal -->
        <div class="modal fade modal_div" id="modal_payment" role="dialog">
            <div class="modal-dialog modal_dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content modal_content">
                    <div class="modal-header modal_header">
                        <button type="button" class="close" data-dismiss="modal" id="close"
                                onclick="close()">&times;</button>
                    </div>
                    <p>Select Payment Method</p>

                    <div class="modal-body modal_body" id="available_date_list">
                        <div class="buttons">
                            <a href="javascript:void(0)" class="btn btn_paymentBook" id=""
                               onclick="cashPayment()">
                                <img src="{{asset('img/icons/query/pay.svg')}}">
                                Cash Payment
                            </a>

                            <form method="post" action="{{route('sslpay')}}">
                                {{csrf_field()}}
                                <input type="hidden" name="total" id="total_pay">
                                <input type="hidden" name="transid" value="{{uniqid(mt_rand())}}">
                                <input type="hidden" name="q_ids" id="q_ids" value="">
                                <input type="hidden" name="q_amounts" id="q_amounts" value="">
                                <button class="btn btn_paymentBook">
                                    <img src="{{asset('img/icons/query/credit_card.svg')}}">
                                    Online Payment
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row container">
        <a href="{{route('expired_query')}}" class="btn btn_expire">

            <span id="">Expired Queries</span>

        </a>
    </div>
</section>
@endsection
@push('scripts')

<script>
    $(document).ready(function () {
        loadCart();
    });

    function setTotal() {
        var x = $('#total').text();
        //alert("ok"+x);
        $('#total_pay').val(parseInt(x));

        var ids = document.getElementById('cart_query_ids').value;
        ids = JSON.parse(ids)
        document.getElementById('q_ids').value = ids;

        var amounts = document.getElementById('cart_current_amounts').value;
        document.getElementById('q_amounts').value = amounts;


    }
</script>

<script>
    var queryIds_for_event;
    var tagId_for_event;
    var queryIds_for_Details;

    var selected_query_ids = []; //its good practice, new Array is bad practice. they both works same.

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

    function setDetailsModalWithData(query_ids) {
        var id_array = JSON.parse(query_ids);
        queryIds_for_Details = id_array; //set the array as global


        $.ajax({
            url: '/load-query-detals/' + id_array,
            type: 'GET',
            success: function (data) {
                console.log(' message: ' + data);
                $("#detail_body").html(data);
            },
            error: function (xhr, status, error) {
                // check status && error
                console.log('Error  message: ' + error);
            },
            dataType: 'text'

        });
    }

    function addToCart(ids) {
        //var id_array = JSON.parse(ids);


        //alert("ok");
        id_array = selected_query_ids;
        //alert(id_array[0]);
        $.ajax({
            url: '/add-to-myCart/' + id_array,
            type: 'GET',
            success: function (data) {
                console.log(' message: ' + data);
                $('#div-cart').html(data);

                $('#modal_multipledates').modal('hide');
                //close();
            },
            error: function (xhr, status, error) {
                // check status && error
                console.log('Error  message: ' + error);
                $('#modal_multipledates').modal('hide');
            },
            dataType: 'text',
        });
    }

    function addToCart_singleDate(ids) {

        var id_array = ids;


        $.ajax({
            url: '/add-to-myCart/' + id_array,
            type: 'GET',
            success: function (data) {
                console.log(' message: ' + data);
                $('#div-cart').html(data);

                $('#modal_multipledates').modal('hide');
                //close();
            },
            error: function (xhr, status, error) {
                // check status && error
                console.log('Error  message: ' + error);
                $('#modal_multipledates').modal('hide');
            },
            dataType: 'text',
        });
    }

    function cashPayment() {

        //var id_array = JSON.parse(ids);
        var ids = document.getElementById('cart_query_ids').value;
        ids = JSON.parse(ids);
        console.log(ids);

        $.ajax({
            url: '/cash-payments/' + ids,
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


    function showAvailableDates(ids, status) {
        // alert(status);
        var id_array = JSON.parse(ids);
        //alert(id_array[0]);

        if (id_array.length <= 1) {
            addToCart_singleDate(id_array);
        } else {
            $.ajax({
                url: '/show-dates/' + id_array + '/' + status,
                type: 'GET',
                success: function (data) {
                    console.log(' message: ' + data);
                    $('#available_date_list').html(data);
                },
                error: function (xhr, status, error) {
                    // check status && error
                    console.log('Error  message: ' + error);
                },
                dataType: 'text',
            });

            selected_query_ids = [];
        }


    }

    function select_dates(query_id, ob) {

        if (selected_query_ids.includes(query_id)) {
            var index = selected_query_ids.indexOf(query_id);
            if (index > -1) {
                selected_query_ids.splice(index, 1);
            }
            $(ob).addClass('available_date_box');
            $(ob).removeClass('selected_date_box');
        }
        else {
            selected_query_ids.push(query_id);
            $(ob).addClass('selected_date_box');
            $(ob).removeClass('available_date_box');
        }

        console.log(selected_query_ids);

        //alert(selected_query_ids);
        //selected_query_ids.push(query_id);


    }

    function removeFromCart(ids) {
        //alert(ids);
        $.ajax({
            url: '/remove-from-myCart/' + ids,
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

    function loadCart() {
        $.ajax({
            url: '/load-myCart/',
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


    function re_request(ids) {

        //alert(ids);
        var x = confirm("Do You Want to re-Submit The Query with dates ?!! ");
        if (x) {
            var id_array = JSON.parse(ids);
            //alert(id_array[0]);

            $.ajax({

                url: '/my-query-re-request/' + id_array,
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


    function soft_remove_query(ids) {
        var x = confirm("are you sure to delete this query !");
        if (x) {
            var id_array = JSON.parse(ids);
            //alert(id_array[0]);
            $.ajax({
                url: '/my-query-move-to-expire/' + id_array,
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

//                document.location.reload(true);

            },
            error: function (xhr, status, error) {
                // check status && error
                console.log('Error  message: ' + error);
            },
            dataType: 'text'

        });


    }

    function filter(event, status, title) {
        //alert(status);
        $('.hideAll').hide();
        $('.' + status + '').show();

        //alert(status);

        $('.tablinks').removeClass("active");
        event.currentTarget.className += " active";


        /**Status Filter not used anymore*/
        /*$('#filter_title').html(title);
         if (title == "Query Submitted") {
         $('.btn_filter').css('width', '260px');
         $('.filter').css('width', '260px');
         } else if (title == "Not Available") {
         $('.btn_filter').css('width', '250px');
         $('.filter').css('width', '250px');
         } else {
         $('.btn_filter').css('width', '200px');
         $('.filter').css('width', '200px');

         }*/
    }
    function filter_showAll(event, title) {
        $('.hideAll').show();

        $('.tablinks').removeClass("active");
        event.currentTarget.className += " active";

        /**Status Filter not used anymore*/
        /*$('#filter_title').html(title);
         $('.btn_filter').css('width', '200px');
         $('.filter').css('width', '200px');*/
    }

    function event_filter(event, title) {
        //alert(status);
        $('.hideAll').hide();
        $('.' + event + '').show();
        $('#event_title').html(title);
        $('#my_event_cross').show();

    }

    function event_filter_showAll(title) {
        $('.hideAll').show();
        $('#my_event_cross').hide();
        $('#event_title').html(title);
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
<script>
    $(function () {
        //var austDay = new Date("2019-05-31T10:00");
        //austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
        //$('#defaultCountdown').countdown({until: austDay,format: 'HM'});
        var ex = document.getElementsByClassName('expire');
        var tm = document.getElementsByClassName('time');
        //console.log(ex.length);
        for (var i = 0; i < ex.length; i++) {
            console.log(ex[i].id);
            //tm[i].innerHTML=ex[i].value;
            var day = new Date(ex[i].value);

            $('#defaultCountdown' + ex[i].id).countdown({until: day, format: 'HMS', onExpiry: timeout});
        }

        function timeout() {
            //alert(this.id);
            var qid = this.id.replace(/[^\d.]/g, '');
            qid = parseInt(qid, 10);

            $.ajax({
                url: '/timeout-status/' + qid,
                type: 'GET',
                success: function (data) {
                    console.log(' id: ' + data);
                    //alert(i+':'+data);
                    $('body').html(data);
                },
                error: function (xhr, status, error) {
                    // check status && error
                    console.log('Error  message: ' + error);
                },
                dataType: 'text'

            });
        };

    });

    function showInvoiceOutput() {
        $('#invoice').show();
    }
</script>
@endpush
