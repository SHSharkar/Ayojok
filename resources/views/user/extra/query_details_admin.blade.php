{{--Date Picker--}}
<link rel="stylesheet" type="text/css" href="{{asset('vendor/keith_wood_datepicker/')}}/css/jquery.datepick.css">
<div class="modal-header modal_header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<div class="modal-body modal_body">
    <div class="row body_first_row">
        <div class="col-sm-6">
            <img src="{{asset($details['image_url'])}}"
                 class="vendor_img">
        </div>
        <div class="col-sm-6">
            <h4 class="vendor_title date_title" style="text-transform: capitalize">{{$details['category']}} : {{$details['title']}}</h4>
            <h4 class="date_title">Requested Date: {{date("d M Y", strtotime($details['event_date']))}}</h4>
            <h4 class="date_title">Requested Shift: {{$details['shift']}}</h4>
            <h4 class="date_title">Query Status: {{$details['status']}}</h4>
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
                        <option value="{{$details['status']}}" selected>{{$details['status']}}</option>
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
                    <input type="number" id="total" name="total" placeholder="Total Amount" value="{{$details['total']}}" onkeyup="inputValid()">
                </div>
            </div>
            <div class="row date_row" id="ap">
                <div class="col-sm-4 date_title">
                    <p>Advance Payable: </p>
                </div>
                <div class="col-sm-3 form control">
                    <input type="number" id="advance" name="advance" placeholder="Advance Amount" value="{{$details['advance']}}" max="{{$details['total']}}" onkeyup="inputValid()">
                </div>
            </div>
            <div class="row date_row" id="ds">
                <div class="col-sm-4 date_title">
                    <p>Discount: </p>
                </div>
                <div class="col-sm-3 form control">
                    <input type="number" id="discount" name="discount" placeholder="Discount" value="{{$details['discount']}}" max="{{$details['total']}}" onkeyup="inputValid()">
                </div>
            </div>
            <div class="row date_row" id="cp">
                <div class="col-sm-4 date_title">
                    <p>Cash Payment: </p>
                </div>
                <div class="col-sm-3 form control">
                    <input type="number" id="payment" name="payment" placeholder="Cash Payment" value="">
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
            minDate: 1
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
        var status="<?php echo $details['status'] ;?>";

        switch(status)
        {
            case 'Not Available':
            {
                document.getElementById('status').innerHTML = "";
                var x = document.getElementById('status');
                var s = document.createElement('option');
                s.text = status;
                s.value= status;
                x.add(s);
                var av = document.createElement('option');
                av.text = "Available";
                av.value= "Available";
                x.add(av);
                var b = document.createElement('option');
                b.text = "Booked";
                b.value= "Booked";
                x.add(b);

                break;
            }

            case 'Booked':
            {
                document.getElementById('status').innerHTML = "";
                var x = document.getElementById('status');
                var s = document.createElement('option');
                s.text = status;
                s.value= status;
                x.add(s);

                break;
            }

            case 'Available':
            {
                document.getElementById('status').innerHTML = "";
                var x = document.getElementById('status');
                var s = document.createElement('option');
                s.text = status;
                s.value= status;
                x.add(s);
                var av = document.createElement('option');
                av.text = "Not Available";
                av.value= "Not Available";
                x.add(av);
                var b = document.createElement('option');
                b.text = "Booked";
                b.value= "Booked";
                x.add(b);

                break;
            }

            case 'Cash Requested':
            {
                document.getElementById('status').innerHTML = "";
                var x = document.getElementById('status');
                var s = document.createElement('option');
                s.text = status;
                s.value= status;
                x.add(s);
                var b = document.createElement('option');
                b.text = "Booked";
                b.value= "Booked";
                x.add(b);

                break;
            }

            case 'In Review':
            {
                document.getElementById('status').innerHTML = "";
                var x = document.getElementById('status');
                var s = document.createElement('option');
                s.text = status;
                s.value= status;
                x.add(s);
                var av = document.createElement('option');
                av.text = "Available";
                av.value= "Available";
                x.add(av);
                var na = document.createElement('option');
                na.text = "Not Available";
                na.value= "Not Available";
                x.add(na);
                var b = document.createElement('option');
                b.text = "Booked";
                b.value= "Booked";
                x.add(b);

                break;
            }

            case 'Timeout':
            {
                document.getElementById('status').innerHTML = "";
                var x = document.getElementById('status');
                var s = document.createElement('option');
                s.text = status;
                s.value= status;
                x.add(s);
                var av = document.createElement('option');
                av.text = "Available";
                av.value= "Available";
                x.add(av);
                var na = document.createElement('option');
                na.text = "Not Available";
                na.value= "Not Available";
                x.add(na);
                var b = document.createElement('option');
                b.text = "Booked";
                b.value= "Booked";
                x.add(b);

                break;
            }

            case 'Query Submitted':
            {
                document.getElementById('status').innerHTML = "";
                var x = document.getElementById('status');
                var s = document.createElement('option');
                s.text = status;
                s.value= status;
                x.add(s);
                var ir = document.createElement('option');
                ir.text = "In Review";
                ir.value= "In Review";
                x.add(s);
                var av = document.createElement('option');
                av.text = "Available";
                av.value= "Available";
                x.add(av);
                var na = document.createElement('option');
                na.text = "Not Available";
                na.value= "Not Available";
                x.add(na);
                var b = document.createElement('option');
                b.text = "Booked";
                b.value= "Booked";
                x.add(b);

                break;
            }
        }

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
                document.getElementById('datepicker2').value="";
                document.getElementById('timepicker').value="";
                document.getElementById('total').value="";
                document.getElementById('advance').value="";
                document.getElementById('discount').value="";

                break;
            }

            case 'Booked':
            {
                document.getElementById('total').readOnly= true;
                document.getElementById('advance').readOnly= true;
                document.getElementById('discount').readOnly= true;

                break;
            }

            case 'Cash Requested':
            {
                document.getElementById('total').readOnly= true;
                document.getElementById('advance').readOnly= true;
                document.getElementById('discount').readOnly= true;

                break;
            }

            case 'Available':
            {
                document.getElementById('cp').style.display="none";
                document.getElementById('pt').style.display="none";
                document.getElementById('payment').value="";

                break;
            }

            case 'In Review':
            {
                document.getElementById('cp').style.display="none";
                document.getElementById('pt').style.display="none";
                document.getElementById('payment').value="";

                break;
            }

            case 'Query Submitted':
            {
                document.getElementById('cp').style.display="none";
                document.getElementById('pt').style.display="none";
                document.getElementById('payment').value="";

                break;
            }

            default :
            {
                break;
            }
        }
    }

    function inputValid()
    {
        var t=document.getElementById('total').value;
        var a=document.getElementById('advance').value;
        var d=parseInt(t-a).toString();
        //alert (d);
        document.getElementById('total').setAttribute('min','0');
        document.getElementById('advance').setAttribute('min','0');
        document.getElementById('advance').setAttribute('max',t);
        document.getElementById('discount').setAttribute('min','0');
        document.getElementById('discount').setAttribute('max',d);
    }
</script>
