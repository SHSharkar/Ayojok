<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 7/1/2019
 * Time: 1:06 PM
 * Des: This invoice for
 */


?>

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
{{--Style for printer--}}
<style>
    @page {
        size: 15.5in 15.5in;
        /*size: A4;*/
        margin-left: 0;
        margin-right: 0;
        padding: 0;
    }
</style>

@endpush


@section('content')


    <div class="container" id='printableArea' style="margin-top: 100px">

        <div class="row mt-4">
            <div class="col-sm-12">
                <div class="text-center">
                    <a href="#"><i class="fa fa-print pull-left icon" id="print"></i></a>
                    <a href="#"><i class="fa fa-envelope icons pull-left icon" id="sendMail"></i></a>

                    {{--<div class="row " id="invoice">
                        <div class="col-sm-4 invoice_tab">
                            <a href="">
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

                                    <tr>
                                        <td class="highlighter_bold">
                                            <strong>Customer Name</strong>
                                        </td>
                                        <td>
                                            : {{$user_info->name}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="highlighter_bold">
                                            <strong>Email</strong>
                                        </td>
                                        <td>
                                            : {{$user_info->email}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="highlighter_bold">
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
                                            <strong class="highlighter_bold">Company Info </strong>
                                        </td>
                                        <td>
                                            : {{--{{$tran_id}} || {{$tranDetail_directFromSSL['tran_id']}}--}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="highlighter_bold">
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
                                        <td class="highlighter_bold">
                                            <strong>Category </strong>
                                        </td>
                                        <td>
                                            : {{ucwords(str_replace('_',' ',$category->name))}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="highlighter_bold">
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
                        <h5 class="text-center"><strong>Order summary</strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php
                            $total_discounts = 0;
                            $total_due = 0;
                            $total_paid = 0;
                            $total_price = 0;

                            $j = 0;
                            ?>

                            @foreach($details as $query)
                                <?php
                                $total_discounts += $query->discount;
                                $total_price += $query->total;

                                if ($j % 2 == 0) {
                                    $background = "#FFFFFF";
                                } else {
                                    $background = "#FFFFFF";
                                }
                                ?>
                                <table class="table table-condensed" style="background-color: {{$background}}">
                                    <tr class="table2">
                                        <td colspan="3">
                                            <strong class="highlighter">
                                                <span class="highlighter_bold ">Vendor/Service Name:</span>
                                                {{$product->title}}
                                                {{--@if(isset($product->short_des))
                                                    ( {{ $product->short_des}} )
                                                @endif--}}
                                                <br>
                                                <span class="highlighter_bold ">Booking Date: </span>{{ date("d-M-Y",strtotime($query->event_date))}}
                                            </strong>
                                        </td>
                                        <td colspan="2" class="text-right">
                                            <table class="table table-condensed highlighter">
                                                <tr>
                                                    <td class="highlighter_bold"><strong>Total Price</strong></td>
                                                    <td class=""><strong>{{$query->total}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td class="highlighter_bold"><strong>Discount</strong></td>
                                                    <td class=""><strong>{{$query->discount}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <?php
                                                    $payable_amount = 0;
                                                    $payable_amount = $query->total - $query->discount;
                                                    ?>
                                                    <td class="highlighter_bold"><strong>Payable</strong></td>
                                                    <td class=""><strong>{{ $payable_amount }}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td class="highlighter_bold"><strong>Due</strong></td>
                                                    <td class=""><strong>{{$payable_amount - $query->payment}}</strong>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"></td>
                                    </tr>

                                    <tr>
                                        <th>SL</th>
                                        <th>Tx Id</th>
                                        <th>Tx Date</th>
                                        <th>Tx Mode</th>
                                        <th>Amount</th>
                                    </tr>
                                    <?php
                                    $total_amount_for_one_query = 0;
                                    $current_due = 0;
                                    $i = 1;
                                    ?>
                                    @foreach($query->invoices as $invoice)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$invoice->id}}</td>
                                            <td>{{date("d-M-Y",strtotime($invoice->created_at)) }}</td>
                                            <td>
                                                {{$invoice->payment_type}} <br>
                                                @if($invoice->transaction_id != 0 )
                                                    ( {{$invoice->transaction_id}} )
                                                @endif
                                            </td>
                                            <td class="text-right">BDT. {{$invoice->paid_amount}}</td>
                                        </tr>
                                        <?php
                                        $total_amount_for_one_query += $invoice->paid_amount;
                                        $i++;
                                        ?>
                                    @endforeach
                                    <tr class="highlighter">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="highlighter_bold text-right">Total Paid:</td>
                                        <td class="highlighter_bold text-right">
                                            BDT. {{$total_amount_for_one_query}}</td>
                                    </tr>
                                    <tr class="highlighter border_bottom">
                                        <td colspan="5">
                                            <span class="highlighter_bold ">Payment Status:</span>
                                            @if($total_amount_for_one_query >= $payable_amount)
                                                Cleared
                                            @else
                                                Due
                                            @endif
                                        </td>
                                    </tr>
                                </table>

                                <?php
                                $j++;
                                ?>
                            @endforeach
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

        .table > tr {
            border: none;
        }

        /*Nir*/
        .table td, .table th {
            padding: 0;
            vertical-align: middle;
            border-top: none;
            border-bottom: 1px solid #e9ecef;
        }

        .table2 td, .table2 th {
            padding: 0;
            vertical-align: middle;
            border-top: none;
            border-bottom: none;
        }

        .highlighter {
            font-size: 20px;
        }

        .highlighter_bold {
            font-weight: bold;
        }

        .border_bottom {
            border-bottom: 2px solid black;
        }

        .text-right {
            text-align: right;
        }


    </style>

@endsection

@push('scripts')
<script type="text/javascript">

    $('#print').on('click', function () {

        $('.footer').hide();
        $('.navbar').hide();

        $('#print').hide();
        $('#sendMail').hide();

        window.print();

        /*setTimeout(function(){*/
        $('.footer').show();
        $('.navbar').show();

        $('#print').show();
        $('#sendMail').show();
        /*}, 2000);*/
    })
</script>

@endpush




