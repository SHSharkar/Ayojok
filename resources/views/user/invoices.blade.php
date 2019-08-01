<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 6/20/2019
 * Time: 12:40 PM
 */
?>


@extends('layouts.app')
@push('css')

@endpush


@section('content')
        <!-- Masthead -->
{{--<header class="pagehead" style="background-image:url({{ asset('img/backgrounds/header_bg_index.jpg') }});height:auto;background-position:center;background-repeat:no-repeat;background-size:cover">
    <div class="container">
        <div class="row">
            <div class="col-12 my-auto text-center text-white">
                <img class="pagehead-img img-fluid mt-5 mb-5" src="{{ asset('img/logo_final.png') }}" alt=""/>
            </div>
        </div>
    </div>
</header>--}}
<!--/ End of Masthead -->

{{--@include('extra.invoice')--}}

<div class="container" id='printableArea' style="margin-top: 100px">

    <div class="row mt-4">
        <div class="col-sm-12">
            <div class="text-center">
                <a href="#"><i class="fa fa-print pull-left icon" id="print"></i></a>

                <h5>Invoice for Booking <span> #{{$details[0]->submit_id}}</span></h5>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="card height">
                <div class="card-header">Billing Details</div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card-body">
                            <table>
                                {{--<tr >
                                    <td>
                                        <strong>Transaction Id</strong>
                                    </td>
                                    <td>
                                        : {{$tran_id}} || {{$tranDetail_directFromSSL['tran_id']}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Payment Type</strong>
                                    </td>
                                    <td>
                                        : {{$tranDetail_directFromSSL['card_type']}}
                                    </td>
                                </tr>--}}
                                <tr>
                                    <td>
                                        <strong>Customer Name</strong>
                                    </td>
                                    <td>
                                        : {{$user_info->name}}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <strong>Email</strong>
                                    </td>
                                    <td>
                                        : {{$user_info->email}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Phone</strong>
                                    </td>
                                    <td>
                                        : {{$user_info->contact}}
                                    </td>
                                </tr>


                            </table>

                        </div>

                    </div>
                    <div class="col-sm-6">

                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>
                                        <strong>Company Info </strong>
                                    </td>
                                    <td>
                                        : {{--{{$tran_id}} || {{$tranDetail_directFromSSL['tran_id']}}--}}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <strong>Product </strong>
                                    </td>
                                    <td>
                                        : {{$product->title}}
                                        @if(isset($product->short_des))
                                            ( {{ $product->short_des}} )
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Category </strong>
                                    </td>
                                    <td>
                                        : {{ucwords(str_replace('_',' ',$category->name))}}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <strong>Printed Date </strong>
                                    </td>
                                    <td>
                                        : {{date('d-M-Y')}}
                                    </td>
                                </tr>

                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="row mt-4 mb-2">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center"><strong>Order summary</strong></h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <td><strong>Booking Date</strong></td>
                                <td><strong>Order Date</strong></td>
                                {{-- <td><strong>Transaction Date</strong></td>--}}
                                {{--<td><strong>Transaction ID</strong></td>--}}
                                <td class=""><strong>Total Price</strong></td>
                                <td class=""><strong>Discount</strong></td>
                                <td class=""><strong>Advance Price</strong></td>
                                <td class=""><strong>Payable Amount</strong></td>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $total_discounts = 0;
                            $total_due = 0;
                            $total_paid = 0;
                            $total_price = 0;

                            ?>
                            @foreach($details as $query)
                                @php
                                $total_discounts += $query->discount;
                                $total_price += $query->total;
                                @endphp

                                <tr>
                                    <td class="highrow">
                                        {{ date("d-M-Y",strtotime($query->event_date))}}
                                    </td>
                                    <td class="highrow">
                                        {{ date("d-M-Y",strtotime($query->created_at))}}
                                    </td>
                                    <td class="highrow">
                                        {{$query->total}}
                                    </td>
                                    <td class="highrow">
                                        {{$query->discount}}
                                    </td>
                                    <td class="highrow ">
                                        {{$query->advance}}
                                    </td>
                                    <td class="highrow ">
                                        <?php
                                        $payable_amount = 0;
                                        $payable_amount = $query->total - $query->discount;
                                        ?>
                                        <strong>
                                            {{ $payable_amount }}
                                        </strong>
                                    </td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td colspan="5">
                                        <table>
                                            <thead>
                                            {{--<tr>
                                                <th class="text-center" colspan="3">Invoices</th>
                                            </tr>--}}
                                            <tr>
                                                <th>Transaction Id</th>
                                                <th>Date</th>
                                                <th>Payment Type</th>
                                                <th>Amount</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $total_amount_for_one_query = 0;
                                            $current_due = 0;
                                            ?>
                                            @foreach($query->invoices as $invoice)
                                                <tr>
                                                    <td>{{$invoice->transaction_id}}</td>
                                                    <td>{{date("d-M-Y",strtotime($invoice->created_at)) }}</td>
                                                    <td>{{$invoice->payment_type}}</td>

                                                    <td>{{$invoice->paid_amount}}</td>

                                                </tr>
                                                <?php
                                                $total_amount_for_one_query += $invoice->paid_amount;

                                                ?>
                                            @endforeach
                                            <tr class="total_paid">
                                                <td></td>
                                                <td></td>
                                                <td>Total Paid:</td>

                                                <td>
                                                    {{$total_amount_for_one_query}}
                                                    <?php
                                                    $total_paid += $total_amount_for_one_query;
                                                    ?>
                                                </td>

                                            </tr>
                                            @if($total_amount_for_one_query >= $payable_amount)
                                                <tr class="payment_complete">
                                                    <td colspan="4">
                                                        * Payment Complete *
                                                    </td>
                                                </tr>
                                            @else
                                                <tr class="payment_due">
                                                    <td colspan="4">
                                                        <?php
                                                        $current_due = $payable_amount - $total_amount_for_one_query;
                                                        $total_due += $current_due;
                                                        ?>
                                                        * Due Amount: {{$current_due}} *
                                                    </td>
                                                </tr>
                                            @endif

                                            </tbody>
                                        </table>
                                    </td>

                                </tr>


                            @endforeach


                            <tr>
                                <td class="highrow"></td>
                                <td class="highrow"></td>
                                <td class="highrow"></td>
                                <td class="highrow"></td>
                                <td class="highrow text-center">
                                    <strong>Total Price: </strong>
                                </td>
                                <td class="highrow">{{$total_price}}</td>
                            </tr>

                            <tr>
                                <td class=""></td>
                                <td class=""></td>
                                <td class=""></td>
                                <td class=""></td>
                                <td class=" text-center">
                                    <strong>Discounts: </strong>
                                </td>
                                <td class="">{{$total_discounts}}</td>
                            </tr>


                            <tr>
                                <td class=""></td>
                                <td class=""></td>
                                <td class=""></td>
                                <td class=""></td>
                                <td class=" text-center">
                                    <strong>Total Paid: </strong>
                                </td>
                                <td class="">{{$total_paid}}</td>
                            </tr>

                            <tr>
                                <td class="highrow2"><i class="fa fa-barcode iconbig"></i></td>
                                <td class="highrow2"></td>
                                <td class="highrow2"></td>
                                <td class="highrow2"></td>
                                <td class="highrow2 text-center">
                                    <strong>Due: </strong>
                                </td>
                                <td class="highrow2">{{$total_due}}</td>
                            </tr>




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2 mb-3">
        <div class="col-sm-12" style="text-align: center">
            <span style="color: red">*Collect me for future use.*</span>
        </div>
    </div>
</div>

<style>

    @media print {
        .height {
            min-height: 10px;
        }
    }

    .height {
        min-height: 210px;
    }

    .total_paid {
        font-weight: bold;
    }

    .payment_complete {
        font-weight: bold;
        text-align: center;
        color: green;
    }

    .payment_due {
        font-weight: bold;
        text-align: center;
        color: #ff5470;
    }

    .icon {
        font-size: 47px;
        color: #5CB85C;
    }

    .iconbig {
        font-size: 77px;
        color: #5CB85C;
    }

    .table > tbody > tr > .emptyrow {
        border-top: none;
    }

    .table > thead > tr > .emptyrow {
        border-bottom: none;
    }

    .table > tbody > tr > .highrow {
        border-top: 3px solid;
    }

    .table > tbody > tr > .highrow2 {
        border-top: 0 solid;
    }
</style>

@endsection

@push('scripts')
<script type="text/javascript">

    $('#print').on('click', function () {

        $('.footer').hide();
        $('.navbar').hide();

        window.print();

        /*setTimeout(function(){*/
        $('.footer').show();
        $('.navbar').show();
        /*}, 2000);*/
    })
</script>

@endpush

