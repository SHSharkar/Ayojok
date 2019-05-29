@extends('layouts.admin')

@push('css')

@endpush

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Query List
      </h1>
    </section>

    <section class="maincontent">

      <div class="col-md-12" style="margin-top:2rem;">

        <div class="box box-danger">
          <div class="box-body table-responsive">
            <table id="table" class="table table-bordered">
              <thead>
                <tr >
                  <th>Query ID</th>
                  <th>Name</th>
                  <th>Phone No</th>
                  <th>Email</th>
                  <th>Query Date</th>
                  <th style="text-align: center">Action</th>
                  <th style="text-align: center">Pending</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($datas as $data)

                  <?php
                    $seen = \App\Query::where('user_id',$data->user_id)->whereIn('status',['Query Submitted','In Review'])->count();
                         // echo $seen;
                  ?>

                  @if ($seen == 0)
                    <tr>
                      <td>{{$data->user_id}}</td>
                      <td>{{$data->user->name}}</td>
                      <td>{{$data->user->contact}}</td>
                      <td>{{$data->user->email}}</td>
                      <td>{{$data->created_at->format('d-m-Y')}}</td>
                      <td>
                        <center>

                          <a href="{{url('/admin/query/'.$user = $data->user_id)}}" class="btn btn-primary">
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                          </a>
                          <a href="{{url('/admin/query_box/'.$user = $data->user_id)}}" class="btn btn-primary">
                            <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                          </a>
                        </center>
                      </td>
                      <td><center>{{$seen}}</center></td>
                      </tr>
                  @else
                    <tr style="background-color:#bddcf7;">
                      <td>{{$data->user_id}}</td>
                      <td>{{$data->user->name}}</td>
                      <td>{{$data->user->contact}}</td>
                      <td>{{$data->user->email}}</td>
                      <td>{{$data->created_at->format('d-m-Y')}}</td>
                      <td>
                        <center>

                            <a href="{{url('/admin/query/'.$user = $data->user_id)}}" class="btn btn-primary">
                              <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a>
                            <a href="{{url('/admin/query_box/'.$user = $data->user_id)}}" class="btn btn-primary">
                              <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                            </a>
                          </center>
                        </td>
                        <td><center>{{$seen}}</center></td>
                      </tr>
                  @endif


                @endforeach
                </tbody>

              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->

        </div>



      </section><!-- /.content -->
    </div>

  @endsection

  @push('scripts')
    <script src="https://cdn.datatables.net/plug-ins/1.10.19/sorting/datetime-moment.js"></script>
    <script>

    $(function () {
       $.fn.dataTable.moment( 'd-m-Y' );
      $('#table').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,
         "order": [[ 4, "asc" ]]
      });
    });
    </script>
  @endpush
