<?php
/**
 * Created by PhpStorm.
 * User: Nirjhor
 * Date: 5/27/2019
 * Time: 11:17 AM
 */
?>


<div class="modal-header modal_header">
    <h4 class="modal-title modal_title">Details</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<div class="modal-body modal_body">
    <div class="row body_first_row">
        <div class="col-sm-4">
            <img src="{{asset($details['image_url'])}}"
                 class="vendor_img">
        </div>
        <div class="col-sm-8">
            <h4 class="vendor_title">{{$details['title']}}</h4>

            <p>{{$details['category']}}</p>

            {{--<p>Query ID: 095864</p>--}}
        </div>
    </div>
    <div class="row modal_container">
        <div class="col-sm-12">
            <div class="row date_row">
                <div class="col-sm-3 date_title">
                    <p>Requested Dates & Shifts: </p>
                </div>

                @foreach($details['requested_dates'] as  $requested_date)
                    <div class="col-sm-3 request_date_box">
                        <p>{{date('d/M/Y',strtotime($requested_date['event_date']))}} ( {{$requested_date['shift']}}
                            )</p>

                        <p>BDT: {{$requested_date['total']}}</p>
                    </div>
                @endforeach
                {{--<div class="col-sm-3 request_date_box">
                    <p>21/June/2019 (Day)</p>

                    <p>BDT: 1,10,000</p>
                </div>
                <div class="col-sm-3 request_date_box">
                    <p>23/June/2019 (Night)</p>

                    <p>BDT: 1,10,000</p>
                </div>--}}
            </div>

            <div class="row date_row">
                <div class="col-sm-3 date_title">

                    @if(strtolower($details['status']) == "booked")
                            <p>Booked Dates & Shifts: </p>
                    @else
                        <p>Available Dates & Shifts: </p>
                    @endif
                </div>

                @if(strtolower($details['status']) == "booked")
                    @foreach($details['booked_dates'] as  $date)
                        <div class="col-sm-3 available_date_box">
                            <p>{{date('d/M/Y',strtotime($date['event_date']))}} ( {{$date['shift']}} )</p>

                            <p>BDT: {{$date['total']}}</p>
                        </div>
                    @endforeach
                @else
                    @foreach($details['available_dates'] as  $date)
                        <div class="col-sm-3 available_date_box">
                            <p>{{date('d/M/Y',strtotime($date['event_date']))}} ( {{$date['shift']}} )</p>

                            <p>BDT: {{$date['total']}}</p>
                        </div>
                    @endforeach
                @endif


                {{--<div class="col-sm-3 available_date_box">
                    <p>21/June/2019 (Day)</p>

                    <p>BDT: 1,10,000</p>
                </div>
                <div class="col-sm-3 available_date_box">
                    <p>23/June/2019 (Night)</p>

                    <p>BDT: 1,10,000</p>
                </div>--}}
            </div>

            <div class="row date_row">
                <div class="col-sm-3 label">
                    <p>Service Details: </p>
                    {{--<p>Query Message: </p>--}}
                </div>
                <div class="col-sm-9 ">
                    <p>{{$details['admin_message']}}</p>
                    {{--<p>{{$details['query_message']}}</p>--}}
                </div>
            </div>
            <div class="row date_row">
                <div class="col-sm-3 label">
                    <p>Short Message: </p>
                </div>
            </div>
            <div class="row date_row">
                <div class="col-sm-12">
                    <textarea class="message_box">
    {{$details['query_message']}}
                    </textarea>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal-footer model_footer">
    <div class="row date_row">
        <div class="col-sm-4 label footer_block">

            Total Price: <span class="footer_price">
                BDT
                @if(strtolower($details['status']) =="cash requested")
                    {{$details['total_av']}}
                @elseif((strtolower($details['status']) == "booked"))
                    {{$details['total_booked']}}
                @else
                    {{ $details['total_av']}}
                @endif
            </span>
        </div>
        <div class="col-sm-4 label footer_block">
            @if(strtolower($details['status']) == "booked")
                <span class="discount_price"> Discount : <span
                            class="footer_price">BDT {{$details['discount_booked']}}</span></span>
                <br>
                <span class="discount_price"> Paid : <span
                            class="footer_price">BDT {{$details['total_paid_booked']}}</span></span>
            @elseif(strtolower($details['status']) =="cash requested")
                <span class="discount_price"> Discount : <span
                            class="footer_price">BDT {{$details['discount_av']}}</span></span>
                <br>
                <span class="discount_price"> Paid : <span
                            class="footer_price">BDT {{$details['total_paid_av']}}</span></span>
            @else
                Advance : <span class="footer_price">BDT {{$details['advance_av']}}</span>
            @endif
        </div>
        <div class="col-sm-4 label">
            @if(strtolower($details['status']) == "booked")
                Due Payment: <span class="footer_price">BDT {{$details['due_booked']}}</span>
            @elseif(strtolower($details['status']) =="cash requested")
                Due Payment: <span class="footer_price">BDT {{$details['due_av']}}</span>
            @else
                <span class="discount_price"> Discount : <span
                            class="footer_price">BDT {{$details['discount_av']}}</span></span>
            @endif
        </div>
    </div>
</div>
