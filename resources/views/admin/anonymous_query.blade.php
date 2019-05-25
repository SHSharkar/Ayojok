<?php
/**
 * Created by PhpStorm.
 * User: Nirjhor
 * Date: 5/12/2019
 * Time: 11:57 AM
 */

?>


@extends('layouts.admin')

@push('css')

@endpush

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Anonymous Query List
            </h1>
        </section>
        <br>

        <section class="maincontent">

            <form class="form" method="post" >
                {{csrf_field()}}

            <div class="row container-fluid">
                <div class="col-sm-8">
                        <select class="form-control">
                            <option value="{{null}}">Select User</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}" >{{$user->name}}</option>
                                @endforeach
                        </select>
                </div>
                <div class="col-sm-4">
                    <input type="submit" value="Add checked query to the user" class="btn btn-primary">
                </div>

            </div>

            <div class="row container-fluid">
                <div class="col-md-12" style="margin-top:2rem;">

                    <?php
                    $del_msg = \Illuminate\Support\Facades\Session::get('delete_message');
                    ?>
                    @if(isset($del_msg))
                        <div class="alert alert-warning">
                            <strong>delete!</strong> {{$del_msg}}.
                        </div>
                    @endif



                    <div class="box box-danger">
                        <div class="box-body table-responsive">
                            <table id="table" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Query ID</th>
                                    <th>Mobile No.</th>
                                    <th>Query Date</th>
                                    <th style="text-align: center">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($datas as $data)

                                    <tr>
                                        <td style="text-align: center">
                                            <input type="checkbox" value="{{$data->id}}" name="query_list[]">
                                        </td>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->mobile_number}}</td>

                                        <td>{{$data->event_date}}</td>
                                        <td>
                                            <center>

                                                <a href="{{route('delete_anoQuery',$data->id)}}" class="btn btn-danger"
                                                   onclick="return confirmDelete()">
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </a>
                                            </center>
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

            </div>


            </form>
        </section>
        <!-- /.content -->
    </div>

@endsection

@push('scripts')
<script src="https://cdn.datatables.net/plug-ins/1.10.19/sorting/datetime-moment.js"></script>

<script>
    function confirmDelete() {
        sts = confirm("are you sure to delete your this query ?");
        if (sts) {
            return true;
        } else {
            return false;
        }
    }
</script>

<script>

    $(function () {
        $.fn.dataTable.moment('d-m-Y');
        $('#table').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false,
            "order": [[4, "asc"]]
        });
    });
</script>
@endpush
