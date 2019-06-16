{{--Date Picker--}}
<link rel="stylesheet" type="text/css" href="{{asset('vendor/keith_wood_datepicker/')}}/css/jquery.datepick.css">
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
        <div class="col-sm-4">
            <h4 class="vendor_title date_title">{{$details['title']}}</h4>
            <p>{{$details['category']}}</p>
            {{--<p>Query ID: 095864</p>--}}
        </div>
        <div class="col-sm-4">
            <h4 class="date_title">Date: {{date("d M Y", strtotime($details['event_date']))}}</h4>
            <p class="date_title">Shift: {{$details['shift']}}</p>
            {{--<p>Query ID: 095864</p>--}}
        </div>
    </div>
    <div class="row modal_container">
        <form method="post" action="{{url('/admin/update-query-details/')}}">
            {{csrf_field()}}
        <div class="col-sm-6">
            <div class="row date_row">
                <div class="col-sm-4 date_title">
                    <p>Date: </p>
                </div>
                <div class="col-sm-3 form control">
                    <input type="text" id="datepicker" name="event_date" placeholder="Event Date" value="{{$details['event_date']}}">
                </div>
            </div>
            <div class="row date_row">
                <div class="col-sm-4 date_title">
                    <p>Shift: </p>
                </div>
                <div class="col-sm-3 form control">
                    <input type="text" name="shift" value="{{$details['shift']}}">
                </div>
            </div>
            <div class="row date_row">
                <div class="col-sm-4 date_title">
                    <p>Status: </p>
                </div>
                <div class="col-sm-3 form control">
                    <select name="status" id="status" onchange="onStatusChange()">
                        <option value="{{$details['status']}}" selected>--{{$details['status']}}--</option>
                        <option value="Available">Available</option>
                        <option value="Not Available">Not Available</option>
                        <option value="Booked">Booked</option>
                        <option value="Payment Completed">Payment Completed</option>
                    </select>
                </div>
            </div>
            <div class="row date_row" id="ed">
                <div class="col-sm-4 date_title">
                    <p>Expiry Date: </p>
                </div>
                <div class="col-sm-3 form control">
                    <input type="text" id="datepicker2" name="expiry_date" placeholder="Expiry Date" value="{{$details['expiry_date']}}">
                </div>
            </div>
            <div class="row date_row" id="et">
                <div class="col-sm-4 date_title">
                    <p>Expiry Time: </p>
                </div>
                <div class="col-sm-3 form control">
                    <input type="text" id="timepicker" name="expiry_time" placeholder="Expiry Time" value="{{$details['expiry_time']}}">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">
                    <input type="hidden" name="query_id" value="{{$details['id']}}">
                    <input  class="btn btn-success" style="width: 100%" type="submit" name="update_query" value="Update Query">
                </div>
            </div>

        </div>
        <div class="col-sm-6">
            <div class="row date_row" id="tp">
                <div class="col-sm-4 date_title">
                    <p>Total Payable: </p>
                </div>
                <div class="col-sm-3 form control">
                    <input type="number" id="total" name="total" placeholder="Total Amount" value="{{$details['total']}}">
                </div>
            </div>
            <div class="row date_row" id="ap">
                <div class="col-sm-4 date_title">
                    <p>Advance Payable: </p>
                </div>
                <div class="col-sm-3 form control">
                    <input type="number" id="advance" name="advance" placeholder="Advance Amount" value="{{$details['advance']}}">
                </div>
            </div>
            <div class="row date_row" id="ds">
                <div class="col-sm-4 date_title">
                    <p>Discount: </p>
                </div>
                <div class="col-sm-3 form control">
                    <input type="number" id="discount" name="discount" placeholder="Discount" value="{{$details['discount']}}">
                </div>
            </div>
            <div class="row date_row" id="cp">
                <div class="col-sm-4 date_title">
                    <p>Cash Payment: </p>
                </div>
                <div class="col-sm-3 form control">
                    <input type="number" name="payment" placeholder="Cash Payment" value="">
                </div>
            </div>
            <div class="row date_row" id="pt">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-6 date_title">
                    <p>Total Paid: {{$details['payment']}} | <span class="due_title">Due: {{$details['total']-$details['discount']-$details['payment']}}</span></p>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $( function() {
        $("#datepicker").datepicker({
            dateFormat: "yy-mm-dd",
        });
    });
    $( function() {
        $("#datepicker2").datepicker({
            dateFormat: "yy-mm-dd",
        });
    });
    var dt='<?php echo $details['expiry_time'];?>';
    $('#timepicker').timepicker({
        timeFormat: 'h:mm p',
        interval: 120,
        minTime: '12:00am',
        maxTime: '11:00pm',
        defaultTime: dt,
        startTime: '10:00am',
        dynamic: false,
        dropdown: true,
        scrollbar: true,
    });
</script>
<script>
    $(document).ready(function(){
        onStatusChange();
    });
    function onStatusChange()
    {
        var stat=document.getElementById('status').value;

        document.getElementById('ed').style.display="";
        document.getElementById('et').style.display="";
        document.getElementById('tp').style.display="";
        document.getElementById('ap').style.display="";
        document.getElementById('ds').style.display="";
        document.getElementById('cp').style.display="";
        document.getElementById('pt').style.display="";

        document.getElementById('total').readOnly= false;
        document.getElementById('advance').readOnly= false;
        document.getElementById('discount').readOnly= false;

        switch (stat)
        {
            case 'Not Available':
            {
                document.getElementById('ed').style.display="none";
                document.getElementById('et').style.display="none";
                document.getElementById('tp').style.display="none";
                document.getElementById('ap').style.display="none";
                document.getElementById('ds').style.display="none";
                document.getElementById('cp').style.display="none";
                document.getElementById('pt').style.display="none";
                break;
            }

            case 'Booked':
            {
                document.getElementById('total').readOnly= true;
                document.getElementById('advance').readOnly= true;
                document.getElementById('discount').readOnly= true;
                break;
            }

            default :
            {
                break;
            }
        }
    }
</script>
