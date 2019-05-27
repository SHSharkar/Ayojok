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
                        <p>{{$requested_date['event_date']}} ( {{$requested_date['shift']}} )</p>

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
                    <p>Available Dates & Shifts: </p>
                </div>

                @foreach($details['available_dates'] as  $date)
                    <div class="col-sm-3 available_date_box">
                        <p>{{$date['event_date']}} ( {{$date['shift']}} )</p>

                        <p>BDT: {{$date['total']}}</p>
                    </div>
                @endforeach

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
                </div>
                <div class="col-sm-9 ">
                    <p>Affordable package on 19th, standard package on 20th</p>
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
                    </textarea>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal-footer model_footer">
    <div class="row date_row">
        <div class="col-sm-4 label footer_block">
            Total Price: <span class="footer_price">BDT {{$details['total']}}</span>
        </div>
        <div class="col-sm-4 label footer_block">
            Advance : <span class="footer_price">BDT {{$details['advance']}}</span>
        </div>
        <div class="col-sm-4 label">
            Due Payment: <span class="footer_price">BDT {{$details['due']}}</span>
        </div>
    </div>
</div>
