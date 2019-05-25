<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 4/21/2019
 * Time: 5:52 PM
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: Sohel Rana
 * Date: 3/9/2019
 * Time: 9:29 AM
 */
?>

@extends('layouts.admin')

@push('css')
<style>

</style>
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Admin's List
            </h1>
        </section>

        <section class="maincontent">

            @if(isset($datas))
                <div class="col-md-12" style="margin-top:2rem;">

                    <div class="box box-primary">
                        <div class="box-body table-responsive">
                            <table id="table" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Admin ID</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($datas as $data)

                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->job_title}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->updated_at}}</td>
                                        <td>
                                            <center>
                                                <a href="{{route('edit_admin',$id = $data->id)}}"
                                                   class="btn btn-primary">
                                                    <span class="glyphicon glyphicon-edit"
                                                          aria-hidden="true"></span>
                                                </a>
                                                <a href="{{route('admin_delete',$id = $data->id)}}"
                                                   class="btn btn-danger"
                                                   onclick="return confirm('are you sure to delete the message ! ')">
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
            @else
                <center><h1>Only Admin Can Access This page.</h1></center>
            @endif


        </section>
        <!-- /.content -->
    </div>

@endsection

@push('scripts')
<script>
    $(function () {
        $('#table').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false,

        })
    })

</script>
@endpush

