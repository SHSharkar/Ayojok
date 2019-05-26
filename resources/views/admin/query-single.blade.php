@extends('layouts.admin')

@push('css')

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
    .details_modal .close{
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
        height: 250px;
        overflow-y: auto;
        padding: 0;
        height: 550px;
    }

    .details_modal .modal_content {
        border-radius: 10px;
    }
    .details_modal .vendor_img{
        height: 110px;
        width: 200px;
    }
    .details_modal .vendor_title{
        text-transform: none;
    }
    .details_modal p{
        margin: 0;
    }
    .details_modal .body_first_row{
        background-color: #F4F4F4;
    }
    .details_modal .row{
        margin-right: 0;
    }
    .details_modal .col-sm-8{
        padding: 1%;
    }

    .details_modal .modal_container{
        padding-top: 2%;
        padding-right: 2%;
        padding-bottom: 0;
        padding-left: 5%;
    }
    .details_modal .modal_container p{
        font-size: 15px;;
    }

    .details_modal .date_row{
        margin-top: 2%;
        margin-bottom: 2%;
    }
    .details_modal .request_date_box{
        border: 1px solid;
        border-radius: 10px;
        margin-right: 10px;
        max-width: 22%;
        padding-top: 1%;
        padding-bottom: 1%;
    }
    .details_modal .date_title{
        padding-top: 2%;
        color: #C29147;
    }
    .details_modal .available_date_box{
        border: 1px solid;
        border-radius: 10px;
        margin-right: 10px;
        max-width: 22%;
        background-color: #62AF0B;
        color: white;
        padding-top: 1%;
        padding-bottom: 1%;
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

          </div><!-- /.box-body -->
        </div><!-- /.box -->

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
          </div><!-- /.box-header -->
          <div class="box-body table-responsive">
            <table id="vendor" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Catagory</th>
                  <th>Vendor Name</th>
                  <th>Event Date</th>
                  <th>Message</th>
                  <th>Status</th>
{{--              <th>Main Dates</th>
                  <th>Shift/Time</th>
                  <th>Advance</th>
                  <th>Total</th>--}}
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($vendors as $vendor)
                  <tr>
                    <td>{{$vendor->id}}</td>
                    <td style="text-transform:uppercase;">{{$vendor->catagory->name}}</td>
                    <td>{{$vendor->vendors->title}}</td>
                    <td>{{$vendor->event_date}}</td>
                    <td>{{$vendor->message}}</td>
                    <td>{{$vendor->status}}</td>
                    {{--<td>

                    {!! Form::open(['method' => 'POST','autocomplete'=>'off','route'=> ['query-update',$vendor->id,$datas->id,], 'style' => 'display:inline']) !!}
                    {!! Form::text('maindate',null,['class'=>'maindate']) !!} <span style="color:red;">*</span>

                      --}}{{-- <input class="maindate"> --}}{{--
                    </td>
                    <td>
                      {!! Form::text('time') !!} <span style="color:red;">*</span>
                    </td>
                    <td>

                      {!! Form::text('advance')!!}<span style="color:red;">*</span>
                      <p style="color:red;">{{ $errors->first('advance') }}</p>

                    </td>
                    <td>

                      {!! Form::text('total') !!}<span style="color:red;">*</span>
                      <p style="color:red;">{{ $errors->first('total') }}</p>

                    </td>--}}
                    <td>
                      <center>

                          {!! Form::button('<span class="glyphicon glyphicon-ok" style="" aria-hidden="true"></span>',['class'=> 'btn btn-success a-btn-slide-text','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Click if it is available']) !!}
                          {!! Form::close()!!}
                          {!! Form::open(['method' => 'POST','route'=> ['no-update',$vendor->id,$datas->id,], 'style' => 'display:inline']) !!}
                          {!! Form::button('<span class="glyphicon glyphicon-remove" style="" aria-hidden="true"></span>',['class'=> 'btn btn-danger a-btn-slide-text','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Click if not available']) !!}
                          {!! Form::close()!!}
                          {{-- <a href="#" class="btn btn-danger a-btn-slide-text"style="padding:10px auto;">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                          </a> --}}

                      </center>
                    </td>
                  </tr>
                @endforeach

              </tbody>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->

      </div>
      {{-- End of Vendor Query --}}

      {{-- Ayojok Service Bookable Query --}}
      <div class="col-md-12" style="margin-top:2rem;">

        <div class="box box-info ">
          <div class="box-header">
            <h3 class="box-title">Service Book</h3>
          </div><!-- /.box-header -->
          <div class="box-body table-responsive">
            <table id="service" class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th>ID</th>
                    <th>Catagory</th>
                    <th>Service Name</th>
                    <th>Service Price</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Status</th>
                   {{-- <th>Main Date</th>
                    <th>Shift/Time</th>
                    <th>Advance</th>
                    <th>Total</th>
                    <th>Action</th>--}}
                  </tr>
              </thead>
              <tbody>


                  @foreach ($services as $service)
                    <tr>
                      <td>{{$service->id}}</td>
                      <td style="text-transform:uppercase;">{{$service->catagory->name}}</td>
                      <td>{{$service->product->title}}</td>
                      <td>{{$service->product->price}} BDT</td>
                      <td>{{$service->event_date}}</td>
                      <td>{{$service->message}}</td>
                      {{--<td>
                        {!! Form::open(['method' => 'POST','autocomplete'=>'off','route'=> ['query-update',$service->id] ]) !!}
                        {!! Form::text('maindate',null,['class'=>'maindate']) !!} <span style="color:red;">*</span>
                      </td>
                      <td>
                          {!! Form::text('time') !!} <span style="color:red;">*</span>
                      </td>
                      <td>
                        {!! Form::text('advance') !!}<span style="color:red;">*</span>
                        <p style="color:red;">{{ $errors->first('advance') }}</p>
                      </td>
                      <td>
                        {!! Form::text('total') !!}<span style="color:red;">*</span>
                        <p style="color:red;">{{ $errors->first('total') }}</p>
                      </td>--}}
                      {{-- <td>
                        <center>
                          <a href="#" class="btn btn-success a-btn-slide-text"style="padding:10px auto;">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                          </a>
                          <a href="#" class="btn btn-danger a-btn-slide-text"style="padding:10px auto;">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                          </a>
                        </center>
                      </td> --}}
                      {{--<td>
                        <center>


                            {!! Form::button('<span class="glyphicon glyphicon-ok" style="" aria-hidden="true"></span>',['class'=> 'btn btn-success a-btn-slide-text','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Click if it is available']) !!}
                            {!! Form::close()!!}
                            {!! Form::open(['method' => 'POST','route'=> ['no-update',$service->id,$datas->id,], 'style' => 'display:inline']) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-remove" style="" aria-hidden="true"></span>',['class'=> 'btn btn-danger a-btn-slide-text','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Click if not available']) !!}
                            {!! Form::close()!!}
                            --}}{{-- <a href="#" class="btn btn-danger a-btn-slide-text"style="padding:10px auto;">
                              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </a> --}}{{--

                        </center>
                      </td>--}}
                        <td>
                            <button class="details details_shadow" data-toggle="modal" data-target="#modal_details"
                                    onclick=setModalWithData('{{json_encode($service->id)}}')> Details
                            </button>
                        </td>
                    </tr>
                  @endforeach
              </tbody>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
      {{-- End of Ayojok Service Bookable Query --}}
    </section><!-- /.content -->
  </div>

  {{--Modals--}}
  {{--Details modal--}}
  <div class="container details_modal">
      <!-- Trigger the modal with a button -->
      <!-- Modal -->
      <div class="modal fade" id="modal_details" role="dialog">
          <div class="modal-dialog modal_dialog modal-lg">
              <!-- Modal content-->
              <div class="modal-content">
                  <div class="modal-header modal_header">
                      <h4 class="modal-title modal_title">Details</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body modal_body">
                      <div class="row body_first_row">
                          <div class="col-sm-4">
                              <img src="https://yt3.ggpht.com/a/AGF-l790ZGzS4Qw4FWGGEp6MQHqbWjxxvVeJhF7_sA=s900-mo-c-c0xffffffff-rj-k-no" class="vendor_img">
                          </div>
                          <div class="col-sm-4">
                              <h4 class="vendor_title">Wedding Mate</h4>
                              <p>Photography & Cinematography</p>
                              <p>Query ID: 095864</p>
                          </div>
                          <div class="col-sm-4">
                              <div class="row date_row">
                                  <div class="col-sm-6 date_title">
                                      <p>Requested Date & Shift</p>
                                  </div>
                                  <div class="col-sm-6">
                                      <p>21/June/2019 (Night)</p>
                                      <p>BDT: 1,10,000</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row modal_container" >
                          <table>
                              <tr>
                                  <td><label>Total: </label></td>
                                  <td><input class="form_event_input" type="number"></td>
                              </tr>
                              <tr>

                              </tr>

                              <label>Discount: </label><input type="number"><br>
                              <label>Payment: </label><input type="number"><br>
                          </table>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection

@push('scripts')

  <script>

  $('.maindate').datepicker({
    multidate: true,
    todayHighlight: true
});
  $(function () {
    $('#vendor,#service').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  </script>
@endpush
