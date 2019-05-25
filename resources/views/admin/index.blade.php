@extends('layouts.admin')
@push('css')

@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="maincontent">
            <!-- Small boxes (Stat box) -->

            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        @php
                        $totalOrder = App\Models\order::all()->count();
                        @endphp
                        <h3>{{$totalOrder}}</h3>

                        <p>Total Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        @php
                        $totalProduct = App\Models\products::where(['status' => 0])->count();
                        @endphp
                        <h3>{{$totalProduct}}</h3>

                        <p>Total Product</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cube"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        @php
                        $totalvendor = App\Models\vendors::where(['status' => 0])->count();
                        @endphp
                        <h3>{{$totalvendor}}</h3>

                        <p>Total Vendor</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-person"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>0</h3>

                        <p>Total Due</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->


            {{-- <!-- Left col -->
            <section class="col-lg-6">
                <!-- TABLE: LATEST ORDERS -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Latest Orders</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Item</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                        <td>Call of Duty IV</td>
                                        <td><span class="label label-success">Shipped</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                        <td>Samsung Smart TV</td>
                                        <td><span class="label label-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                        <td>iPhone 6 Plus</td>
                                        <td><span class="label label-danger">Delivered</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                        <td>Samsung Smart TV</td>
                                        <td><span class="label label-info">Processing</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                        <td>Samsung Smart TV</td>
                                        <td><span class="label label-warning">Pending</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.Left col --> --}}


            <div class="row container-fluid">
                <section class="col-md-6" style="margin-top:2rem;">
                    <center><h3>Summary of Changelog</h3></center>
                    <div class="box box-primary">

                        <div class="box-body table-responsive">

                            <table id="example2" class="table table-bordered table-striped">

                                <thead>

                                <tr>

                                    <th>Name</th>
                                    <th>Add</th>
                                    <th>Update</th>
                                    <th>Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <td>{{$data['name']}}</td>
                                        <td>{{$data['add']}}</td>
                                        <td>{{$data['update']}}</td>
                                        <td>{{$data['delete']}}</td>

                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </section>

            </div>
            <div class="row container-fluid">
                <section class="col-md-12" style="margin-top:2rem;">
                    <center><h3>Changelog</h3></center>
                    <div class="box box-primary">

                        <div class="box-body table-responsive">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Logs</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                    <th>Order Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($changeLogs as $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>
                                            <?php
                                            $user = \App\Admin::find($data->admin_id);
                                            ?>
                                            {{$user->name}}
                                        </td>
                                        <td>{{$data->message}}</td>
                                        <td>{{date('d-M-Y [D]', strtotime($data->created_at))}}</td>
                                        <?php
                                        if ($data->action === "add") {
                                            $color = "#00ff00";
                                        }
                                        else if($data->action === "delete"){
                                            $color = "#ff3333";
                                        }
                                        else if($data->action === "update"){
                                            $color = "#ffffff";
                                        }
                                        else if($data->action === "activate"){
                                            $color = "#00C0EF";
                                        }
                                        else if($data->action === "deactivate"){
                                            $color = "#F39C12";
                                        }
                                        else if($data->action === "delete"){
                                            $color = "#00ff00";
                                        }
                                        else {
                                            $color = "#ffffff";
                                        }
                                        ?>
                                        <td style="background-color: {{$color}}">
                                            {{$data->action}}
                                        </td>


                                        <?php
                                        if ($data->order_action === "confirm_query") {
                                            $color = "#00ff00";
                                        }
                                        else if($data->order_action === "delete_query"){
                                            $color = "#ff3333";
                                        }
                                        else if($data->order_action === "confirm_booking"){
                                            $color = "#00ff00";
                                        }
                                        else if($data->order_action === "delete_booking"){
                                            $color = "#ff3333";
                                        }
                                        else if($data->order_action === "confirm_payment"){
                                            $color = "#30e2ff";
                                        }

                                        else {
                                            $color = "#ffffff";
                                        }
                                        ?>
                                        <td style="background-color: {{$color}}">
                                            {{$data->order_action}}
                                        </td>

                                    </tr >
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </section>

            </div>


            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            {{--<div class="row container-fluid">--}}
                {{--<section class="col-lg-6">--}}

                    {{--<!-- Calendar -->--}}
                    {{--<div class="box box-solid">--}}
                        {{--<div class="box-header">--}}
                            {{--<i class="fa fa-calendar"></i>--}}

                            {{--<h3 class="box-title">Calendar</h3>--}}
                            {{--<!-- tools box -->--}}
                            {{--<div class="pull-right box-tools">--}}
                                {{--<!-- button with a dropdown -->--}}
                                {{--<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i--}}
                                            {{--class="fa fa-minus"></i>--}}
                                {{--</button>--}}
                                {{--<button type="button" class="btn btn-success btn-sm" data-widget="remove"><i--}}
                                            {{--class="fa fa-times"></i>--}}
                                {{--</button>--}}
                            {{--</div>--}}
                            {{--<!-- /. tools -->--}}
                        {{--</div>--}}
                        {{--<!-- /.box-header -->--}}
                        {{--<div class="box-body no-padding">--}}
                            {{--<!--The calendar -->--}}
                            {{--<div id="calendar" style="width: 100%"></div>--}}
                        {{--</div>--}}
                        {{--<!-- /.box-body -->--}}
                    {{--</div>--}}
                    {{--<!-- /.box -->--}}

                {{--</section>--}}

            {{--</div>--}}
            <!-- right col -->


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@push('scripts')
<script src="{{asset('superadmin/dist/js/pages/dashboard.js')}}"></script>
<script type="text/javascript">
    $('#dashorder').slimScroll({
        height: '200px'
    });
</script>

<script>
    $(function () {
        $('#example1').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': false,
            'info': true,
            'autoWidth': false
        })
    })

    $(function () {
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>

@endpush
