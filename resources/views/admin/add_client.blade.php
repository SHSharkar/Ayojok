<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 5/5/2019
 * Time: 11:52 AM
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
                Add New Client
            </h1>
        </section>

        <section class="maincontent">
            <div class="row container-fluid">
                <div class="col-md-12" style="margin-top:2rem;">

                    <?php
                    $msg = null;
                    $msg = \Illuminate\Support\Facades\Session::get('success');
                    ?>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(isset($msg))
                        <div class="alert alert-success">
                            <strong>Success!</strong> {{$msg}}.
                        </div>
                    @endif

                    <div class="box box-primary">
                        <div class="box-body" style="margin-top:2rem;">

                            <form action="{{route('client.store')}}" method="post" class="form-horizontal"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="row">
                                    <div class="col-sm-12 ">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="first_name" class="control-label col-md-3">First
                                                    Name: <span
                                                            style="color:red;">*</span> </label>

                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="first_name"
                                                           placeholder="Client first-name" name="first_name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="last_name" class="control-label col-md-3">Last Name: <span
                                                            style="color:red;">*</span> </label>

                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="last_name"
                                                           placeholder="Client last name" name="last_name" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email" class="control-label col-md-3">Email: <span
                                                            style="color:red;">*</span> </label>

                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="email"
                                                           placeholder="Enter name" name="email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="contact_number" class="control-label col-md-3">Contact
                                                    Number: <span
                                                            style="color:red;">*</span> </label>

                                                <div class="col-md-9">
                                                    <input type="tel" class="form-control" id="contact_number"
                                                           placeholder="Contact Number" name="contact_number" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="address">Address: </label>

                                                <div class="col-md-9">
                                                    <textarea rows="5" class="form-control" id="address"
                                                              placeholder="Client Address" name="address"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="password" class="control-label col-md-3">Password: <span
                                                            style="color:red;">*</span> </label>

                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="password"
                                                           placeholder="Client Password" name="password" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-6"></div>
                                        <div class="col-sm-6"></div>
                                    </div>
                                </div>

                                <div>
                                    <button class="btn btn-primary pull-right" type="submit">Add Client</button>
                                </div>

                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>

            </div>
        </section>
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
    })
</script>
@endpush
