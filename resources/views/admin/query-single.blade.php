@extends('layouts.admin')

@push('css')

{{--All Modal Design--}}
<style>
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
        overflow-y: auto;
        padding: 0;
        height: 500px;
    }

    .details_modal .modal_content {
        border-radius: 10px;
    }

    .details_modal .vendor_img {
        height: 50%;
        width: 50%;
    }

    .details_modal .vendor_title {
        text-transform: none;
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
        color: #C29147;
    }
    .details_modal .due_title{
        color: red;
    }

    .details_modal .label {
        color: #C29147;
    }

    .ui-timepicker-container {
        z-index: 1151 !important;
    }

</style>

@endpush

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Query Details
            </h1>
        </section>

        <section class="maincontent">

            <div class="col-md-4" style="margin-top:2rem;">

                <div class="box box-danger">
                    <div class="box-body">
                        <div class="details">

                            <label for="id" class="control-label col-md-4">Client ID:</label>

                            <div class="col-md-8">
                                <p>{{$datas->id}}</p>
                            </div>
                            <label for="email" class="control-label col-md-4">Client Email:</label>

                            <div class="col-md-8">
                                <p>{{$datas->email}}</p>
                            </div>
                            <label for="username" class="control-label col-md-4">Client Username:</label>

                            <div class="col-md-8">
                                <p>{{$datas->name}}</p>
                            </div>
                            <label for="name" class="control-label col-md-4">Client Name:</label>

                            <div class="col-md-8">
                                @if (empty($datas->fname) && empty($data->lname))
                                    <p>{{"Not Set Yet"}}</p>
                                @else
                                    <p>{{$datas->fname}} {{$datas->lname}}</p>
                                @endif
                            </div>
                            <label for="contact" class="control-label col-md-4">Client Contact:</label>

                            <div class="col-md-8">
                                <p>{{$datas->contact}}</p>
                            </div>

                        </div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            {{-- <div class="col-md-4" style="margin-top:2rem;">
              <div class="box box-info">
                <div class="box-body">
                  <div class="deatils">
                    <p>
                      Notify Client for this query update using email.
                    </p>

                      @if ($emails->first()->is_mailed == 0)

                        {!! Form::open(['method' => 'POST','route'=> ['notify-client',$emails->first()->user_id,], 'style' => 'display:inline']) !!}
                        {!! Form::button('<span class="fa fa-envelope" aria-hidden="true"> Send Mail</span>',['class'=> 'btn btn-success a-btn-slide-text','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'bottom', 'title'=>'Send notification to client']) !!}
                        {!! Form::close()!!}

                      @else
                        <p>Client Notified</p>
                      @endif

                  </div>
                </div>
              </div>
            </div> --}}

            {{-- Vendor Query --}}
            <div class="col-md-12" style="margin-top:2rem;">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Vendor query</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="vendor" class="table table-bordered table-striped">
                            <select id="table-filter">
                                <option value="All">All</option>
                                <option value="Query Submitted">Query Submitted</option>
                                <option value="In Review">In Review</option>
                                <option value="Available">Available</option>
                                <option value="Not Available">Not Available</option>
                                <option value="Cash Requested">Cash Requested</option>
                                <option value="Booked">Booked</option>
                            </select>
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Catagory</th>
                                <th>Vendor Name</th>
                                <th>Submit ID</th>
                                <th>Tag</th>
                                <th>Event Date</th>
                                <th>Status</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($vendors as $vendor)
                                <tr>
                                    <td>{{$vendor->id}}</td>
                                    <td style="text-transform:uppercase;">{{$vendor->catagory->name}}</td>
                                    <td>{{$vendor->vendors->title}}</td>
                                    <td>{{$vendor->submit_id}}</td>
                                    <td>{{$vendor->tag['title']}}</td>
                                    <td>{{$vendor->event_date}}</td>
                                    @if(strtolower($vendor->status)=='query submitted')
                                        <td><a href="{{url('/admin/reviewStatus/'.$vendor->submit_id)}}"
                                               class="btn btn-danger">Query Submitted</a></td>
                                    @else

                                        @switch($vendor->status)

                                        @case('In Review')
                                        <td style="background-color: #ff8a45">{{$vendor->status}}</td>
                                        @break

                                        @case('Available')
                                        <td style="background-color: #89cb3e">{{$vendor->status}}</td>
                                        @break

                                        @case('Not Available')
                                        <td style="background-color: #adadad">{{$vendor->status}}</td>
                                        @break

                                        @case('Booked')
                                        <td style="background-color: #ffc63c">{{$vendor->status}}</td>
                                        @break

                                        @case('Timeout')
                                        <td style="background-color: #ef4e4a">{{$vendor->status}}</td>
                                        @break

                                        @case('Cash Requested')
                                        <td style="background-color: #1b83b8">{{$vendor->status}}</td>
                                        @break

                                        @default
                                        <td>{{$vendor->status}}</td>

                                        @endswitch

                                    @endif
                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal_details"
                                                onclick=setDetailsModalWithData('{{json_encode($vendor->id)}}')>
                                            Details
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            {{-- End of Vendor Query --}}

            {{-- Ayojok Service Bookable Query --}}
            <div class="col-md-12" style="margin-top:2rem;">

                <div class="box box-info ">
                    <div class="box-header">
                        <h3 class="box-title">Service Book</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="service" class="table table-bordered table-striped">
                            <select id="table-filter1">
                                <option value="All">All</option>
                                <option value="Query Submitted">Query Submitted</option>
                                <option value="In Review">In Review</option>
                                <option value="Available">Available</option>
                                <option value="Not Available">Not Available</option>
                                <option value="Cash Requested">Cash Requested</option>
                                <option value="Booked">Booked</option>
                            </select>
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Catagory</th>
                                <th>Service Name</th>
                                <th>Service Price</th>
                                <th>Submit ID</th>
                                <th>Tag</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td>{{$service->id}}</td>
                                    <td style="text-transform:uppercase;">{{$service->catagory->name}}</td>
                                    <td>{{$service->product->title}}</td>
                                    <td>{{$service->product->price}} BDT</td>
                                    <td>{{$service->submit_id}}</td>
                                    <td>{{$service->tag['title']}}</td>
                                    <td>{{$service->event_date}}</td>
                                    @if(strtolower($service->status)=='query submitted')
                                        <td><a href="{{url('/admin/reviewStatus/'.$service->submit_id)}}"
                                               class="btn btn-danger">Query Submitted</a></td>
                                    @else
                                        @switch($service->status)

                                        @case('In Review')
                                        <td style="background-color: #ff8a45">{{$service->status}}</td>
                                        @break

                                        @case('Available')
                                        <td style="background-color: #89cb3e">{{$service->status}}</td>
                                        @break

                                        @case('Not Available')
                                        <td style="background-color: #adadad">{{$service->status}}</td>
                                        @break

                                        @case('Booked')
                                        <td style="background-color: #ffc63c">{{$service->status}}</td>
                                        @break

                                        @case('Timeout')
                                        <td style="background-color: #ef4e4a">{{$service->status}}</td>
                                        @break

                                        @case('Cash Requested')
                                        <td style="background-color: #1b83b8">{{$service->status}}</td>
                                        @break

                                        @default
                                        <td>{{$service->status}}</td>

                                        @endswitch
                                    @endif
                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal_details"
                                                onclick=setDetailsModalWithData('{{json_encode($service->id)}}')>
                                            Details
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            {{-- End of Ayojok Service Bookable Query --}}
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
        </section>
        <!-- /.content -->
    </div>
@endsection

@push('scripts')

<script>

    $('.maindate').datepicker({
        multidate: true,
        todayHighlight: true
    });
    $(function () {
        var table=  $('#vendor').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })

        var table1=  $('#service').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })

        $('#table-filter').on('change', function (){
            if((document.getElementById('table-filter').value)=="All")
            {
                table
                        .columns(6)
                        .search("", true, false, true)
                        .draw();
            }
            else
            {
                table
                        .columns(6)
                        .search("^" + $(this).val() + "$", true, false, true)
                        .draw();
            }
        });

        $('#table-filter1').on('change', function (){
            if((document.getElementById('table-filter1').value)=="All")
            {
                table1
                        .columns(7)
                        .search("", true, false, true)
                        .draw();
            }
            else
            {
                table1
                        .columns(7)
                        .search("^" + $(this).val() + "$", true, false, true)
                        .draw();
            }
        });
    })
</script>
<script>
    function setDetailsModalWithData(query_ids) {
        $.ajax({
            url: '/load-query-details-admin/' + query_ids,
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
</script>

@endpush
