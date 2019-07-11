@extends('layouts.admin')

@push('css')

@endpush

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>
                        Client Details
                    </h3>

                </div>
                <div class="col-md-6">
                    <h3>
                        Add New Query
                    </h3>

                </div>
            </div>
        </section>

        <section class="maincontent">
            <div class="row container-fluid">
                <div class="col-md-6">
                    <div class="box box-default">
                        <div class="box-body">
                            <div class="details">
                                <label for="id" class="control-label col-md-4">Client ID:</label>

                                <div class="col-md-8">
                                    <p>{{$data->id}}</p>
                                </div>
                                <label for="email" class="control-label col-md-4">Client Email:</label>

                                <div class="col-md-8">
                                    <p>{{$data->email}}</p>
                                </div>
                                <label for="username" class="control-label col-md-4">Client Username:</label>

                                <div class="col-md-8">
                                    <p>{{$data->name}}</p>
                                </div>
                                <label for="name" class="control-label col-md-4">Client Name:</label>

                                <div class="col-md-8">
                                    @if (empty($data->fname) && empty($data->lname))
                                        <p>{{"Not Set Yet"}}</p>
                                    @else
                                        <p>{{$data->fname}} {{$data->lname}}</p>
                                    @endif
                                </div>
                                <label for="contact" class="control-label col-md-4">Client Contact:</label>

                                <div class="col-md-8">
                                    <p>{{$data->contact}}</p>
                                </div>
                                <label for="contact" class="control-label col-md-4">Client Address:</label>

                                <div class="col-md-8">
                                    <p>{{$data->address}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <h3>
                        Total Accounting
                    </h3>

                    <div class="box box-success">
                        <div class="box-body">
                            <div class="details">
                                <label for="id" class="control-label col-md-4">Total Price:</label>

                                <div class="col-md-8">
                                    <p id="total_price">0</p>
                                </div>
                                <label for="email" class="control-label col-md-4">Advance price:</label>

                                <div class="col-md-8">
                                    <p id="total_advance">0</p>
                                </div>
                                <label for="username" class="control-label col-md-4">Discount:</label>

                                <div class="col-md-8">
                                    <p id="total_discount">0</p>
                                </div>
                                <label for="name" class="control-label col-md-4">Total paid:</label>

                                <div class="col-md-8">
                                    <p id="total_paid">0</p>
                                    <hr style="border-top: 2px solid black">

                                </div>
                                <label for="contact" class="control-label col-md-4">Due:</label>

                                <div class="col-md-8">
                                    <p id="total_due">0</p>
                                </div>
                                <label for="contact" class="control-label col-md-4">Cash Payments:</label>

                                <div class="col-md-8">
                                    <p id="total_cashPayments">0</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>

                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-body" style="margin-top:2rem;">
                            <div class="col-md-12" style="margin-bottom:2rem;">
                                <form action="{{route('admin.user.query')}}" method="post" class="form-horizontal"
                                      enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <input type="hidden" value="{{$data->id}}" name="user_id">

                                    <div class="form-group">
                                        <label class="control-label col-md-2" for="contact">Mobile:</label>

                                        <div class="col-md-10">
                                            <input type="text" style="padding: 5px;" class="form-control" id="contact"
                                                   name="contact" value="{{$data->contact}}" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2" for="event_date">Date:</label>

                                        <div class="col-md-4">
                                            <input type="date" style="padding: 5px;" class="form-control"
                                                   id="event_date" name="event_date" value="" required>
                                        </div>

                                        <label class="control-label col-md-2" for="shift">Shift:</label>

                                        <div class="col-md-4">
                                            <input type="text" style="padding: 5px;" class="form-control" id="shift"
                                                   name="shift" value="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2" for="service_type">Type:</label>

                                        <div class="col-md-10">
                                            <select style="padding: 5px;" class="form-control" id="service_type"
                                                    name="service_type" required onchange="loadCategory(this)">
                                                <option value="">-- Select any type --</option>
                                                <option value="service" style="text-transform:capitalize;">service
                                                </option>
                                                <option value="vendor" style="text-transform:capitalize;">vendor
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2" for="category">Category:</label>

                                        <div class="col-md-10">
                                            <select style="padding: 5px;" class="form-control" id="category"
                                                    name="category"
                                                    onchange="loadItem(this)" required>
                                                <option value="">-- Select any Category --</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2" for="item">Item/Vendor:</label>

                                        <div class="col-md-10">
                                            <select style="padding: 5px;" class="form-control" id="item" name="item"
                                                    required>
                                                <option value="">-- Select Item --</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2" for="long_description">Message:</label>

                                        <div class="col-md-10">
                                        <textarea rows="5" class="form-control" id="long_description"
                                                  placeholder="Enter deatils description" name="long_description"
                                                ></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary pull-right" type="submit">Add Query</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

                {{--<div class="col-md-8" style="margin-top:2rem;">
                    <div class="box box-success">
                        <div class="box-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th>Reference Name/Address</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                $sl = 1;
                                @endphp
                                @foreach ($addresses as $address)
                                    <tr>
                                        <td>{{$sl}}</td>
                                        <td>{{$address->line1}},{{$address->line2}},{{$address->city}}</td>
                                        <td>{{$address->contact}}</td>
                                        <td>{{$address->addressName}}</td>
                                    </tr>
                                    @php
                                    $sl++;
                                    @endphp
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>--}}

            </div>
        </section>

        <div class="row container-fluid">

            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-body table-responsive">
                        <label class="label-primary">Query List</label>
                        <table id="example2" class="table table-bordered table-striped">

                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Id</th>
                                <th>Category</th>
                                <th>Vendor/Service Name</th>
                                <th>Submit Id</th>
                                <th style="background-color: rgba(255, 55, 199, 0.95)">Event Date</th>

                                <th>Total Price</th>
                                <th>Advance</th>
                                <th>Discount</th>
                                <th>Cash Payment:</th>
                                <th>Total Paid:</th>
                                <th style="background-color: rgba(255, 28, 96, 0.95)">Due/Payment status:</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $sl = 1;
                            $total_prices = 0;
                            $total_discount = 0;
                            $total_paid = 10;
                            @endphp
                            @foreach ($vendors as $vendor)
                                <?php
                                $total_prices += $vendor->total;
                                $total_discount += $vendor->discount;
                                $total_paid += $vendor->payment;
                                ?>
                                <tr>
                                    <td>{{$sl}}</td>
                                    <td>{{$vendor->id}}</td>
                                    <td>{{$vendor->catagory->name}}</td>
                                    <td>
                                        @if(isset($vendor->vendors->title))
                                            {{$vendor->vendors->title}}
                                        @else
                                            {{$vendor->product->title}}
                                        @endif
                                    </td>
                                    <td>{{$vendor->submit_id}}</td>
                                    <td>{{date_format(date_create($vendor->event_date),'d-M/Y')}}</td>
                                    <td>
                                        <input type="number" class="text-center price" name="total_price"
                                               disabled="disabled" id="price" onchange="accounts_total()"
                                               value="{{$vendor->total}}">
                                    </td>
                                    <td>
                                        <input type="number" class="text-center advance" name="advance"
                                               disabled="disabled" id="advance" onchange="accounts_advance()"
                                               value="{{$vendor->advance}}">
                                    </td>
                                    <td>
                                        <input type="number" class="text-center discount" name="discount"
                                               disabled="disabled" id="discount" onchange="accounts_discount()"
                                               value="{{$vendor->discount}}">
                                    </td>
                                    <td>
                                        <input type="number" class="text-center cashPayment" name="cash_payment"
                                               disabled="disabled" id="cashPayment" onchange="accounts_cashPayment()"
                                               value="0">
                                    </td>
                                    <td>
                                        <span>BDT. </span> {{$vendor->payment}} Tk
                                    </td>
                                    <td>
                                        {{$vendor->total - ($vendor->payment+$vendor->discount)}}
                                    </td>

                                    <td>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="javascript:void(0)" class="btn-edit">
                                                    <i class="fa fa-edit" style="font-size:36px"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-save" style="font-size:36px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                $sl++;
                                @endphp
                            @endforeach
                            <?php
                            $total_due = $total_prices - ($total_discount + $total_paid);
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>

@endsection

@push('scripts')
<script>
    $(function () {
        $('#example1').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })

        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })

    function loadCategory(ob) {
        // alert(ob.value);

        $.ajax({
            url: 'load-category/' + ob.value,
            type: 'GET',
            success: function (data) {
                console.log(' type: ' + data);
                //alert(i+':'+data);
                $('#category').html(data);
            },
            error: function (xhr, status, error) {
                // check status && error
                console.log('Error  message: ' + error);
            },
            dataType: 'text'

        });
    }

    function loadItem(ob) {
        //alert(ob.value);
        $.ajax({
            url: 'load-item/' + ob.value,
            type: 'GET',
            success: function (data) {
                console.log(' item: ' + data);
                //alert(i+':'+data);
                $('#item').html(data);
            },
            error: function (xhr, status, error) {
                // check status && error
                console.log('Error  message: ' + error);
            },
            dataType: 'text'
        });
    }

    function accounts_total() {

        var prices = document.getElementsByClassName("price");
        var total_price = 0;
        var counter;
        for (counter = 0; counter < prices.length; counter++) {
            if (prices[counter].value > 0) {
                total_price = total_price + parseInt(prices[counter].value, 10);
            }
        }
        console.log(total_price);
        document.getElementById('total_price').innerHTML = total_price;
    }
    function accounts_advance() {

        var prices = document.getElementsByClassName("advance");
        var total_price = 0;
        var counter;
        for (counter = 0; counter < prices.length; counter++) {
            if (prices[counter].value > 0) {
                total_price = total_price + parseInt(prices[counter].value, 10);
            }
        }
        console.log(total_price);
        document.getElementById('total_advance').innerHTML = total_price;

    }
    function accounts_discount() {

        var prices = document.getElementsByClassName("discount");
        var total_price = 0;
        var counter;
        for (counter = 0; counter < prices.length; counter++) {
            if (prices[counter].value > 0) {
                total_price = total_price + parseInt(prices[counter].value, 10);
            }
        }
        console.log(total_price);
        document.getElementById('total_discount').innerHTML = total_price;

    }
    function accounts_cashPayment() {

        var prices = document.getElementsByClassName("cashPayment");
        var total_price = 0;
        var counter;
        for (counter = 0; counter < prices.length; counter++) {
            if (prices[counter].value > 0) {
                total_price = total_price + parseInt(prices[counter].value, 10);
            }
        }
        console.log(total_price);
        document.getElementById('total_cashPayments').innerHTML = total_price;

    }
    function Total_paid() {

        //console.log(document.getElementById("total_price").value);
        var prices = document.getElementsByClassName("total_price");
        //console.log(!isNaN(parseInt(prices[0].value)));
        var total_price = 0;
        var counter;
        for (counter = 0; counter < prices.length; counter++) {
            if (prices[counter].value > 0) {
                console.log(counter);
                total_price = total_price + parseInt(prices[counter].value, 10);
            }
        }
        console.log(total_price);
    }

    $(".btn-edit").on("click", function () {
        $(this).closest('tr').find('input,button').prop('disabled', false);
    });

    $(document).ready(function () {
        accounts_total();
        accounts_advance();
        accounts_discount();
        accounts_cashPayment();


        document.getElementById('total_paid').innerHTML = "<?php echo $total_paid ?>";
        document.getElementById('total_due').innerHTML = "<?php echo $total_due ?>";

    });


</script>
@endpush
