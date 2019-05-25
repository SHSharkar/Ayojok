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
                Add New User
            </h1>
        </section>

        @if(isset($permission))
            <center><h1>Only Super-Admin Can Access This page.</h1></center>

        @else
            <?php
            $x = null;
            $x = Session::get('success');
            ?>
            @if( isset($x) )
                <div class="alert alert-success container" id="div3">
                    <strong>Success!</strong> {{Session::get('success')}}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger container">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="list-style: none">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <section class="maincontent">

                <div class="col-md-12" style="margin-top:2rem;">

                    <div class="box box-primary">
                        <div class="box-body" style="margin-top:2rem;">
                            <form action="{{route('addNewUserSubmit')}}" method="post" class="form-horizontal"
                                  enctype="multipart/form-data">
                                <div class="col-md-6" style="margin-bottom:2rem;">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="vendor_name" class="control-label col-md-3">Admin User Name: <span
                                                    style="color:red;">*</span> </label>

                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="" placeholder="Enter name"
                                                   name="name" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="vendor_catagory">Role: <span
                                                    style="color:red;">*</span></label>

                                        <div class="col-md-9">
                                            <select style="padding: 5px;" class="form-control" id="" name="role" required>
                                                <option value="">-- Select any type --</option>
                                                <option value="admin" style="text-transform:capitalize;">admin</option>
                                                <option value="editor" style="text-transform:capitalize;">editor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="form-group">
                                        <label for="email" class="control-label col-md-4">Email</label>

                                        <div class="col-md-8">
                                            <input type="email" class="form-control" id="" placeholder="Enter email"
                                                   name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="control-label col-md-4">Password</label>

                                        <div class="col-md-8">
                                            <input type="password" class="form-control" id="password"
                                                   placeholder="Enter Password" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="control-label col-md-4">Confirm Password</label>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control" id="confirm_password"
                                                   placeholder="Enter Password" name="confirm_password"
                                                   onkeyup="checkPassword()">
                                            <span id="text_bg"><p id="text"></p></span>
                                        </div>
                                    </div>
                                    {{--<input type="file">--}}
                                </div>
                                <div class="col-md-6">
                                    <div style="margin-top: 20%">
                                        <button class="btn btn-primary " id="submit" type="submit" disabled>Add User
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </section>
            <!-- /.content -->

        @endif
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

    function checkPassword() {
        //document.write("in");

        var pass = $('#password').val();

        var c_pass = $('#confirm_password').val();

        console.log(c_pass);

        if (pass === c_pass) {
            $('#text').text("Password match").css("background-color", "#74E728");
            $('#submit').prop("disabled", false);
        } else {
            $('#text').text("Password not match").css("background-color", "#FF3D41");
            $('#submit').prop("disabled", true);
        }

        $(document).ready(function(){
            $("div3").click(function(){

                $("#div3").fadeOut(3000);
            });
        });
        //alert(c_pass);
    }
</script>
@endpush
