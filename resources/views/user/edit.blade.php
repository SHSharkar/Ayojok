@extends('layouts.app')

@push('css')
    <link href="{{asset('css/account.css')}}" rel="stylesheet" type="text/css">
@endpush

@section('content')
    <header class="pagehead" style="background-image:url({{ asset('img/backgrounds/header_bg_index.jpg') }});height:auto;background-position:center;background-repeat:no-repeat;background-size:cover">
        <div class="container">
            <div class="row">
                <div class="col-12 my-auto text-center text-white">
                    <img class="pagehead-img img-fluid mt-4 mb-2 mb-sm-3 mb-md-4 mb-lg-4" src="{{ asset('img/logo_final.png') }}" alt="">
                </div>
            </div>
        </div>
    </header>
    <!-- FB Profile Style -->

    <section class="page-section">
        <div class="container">
            <div class="row pt-3 mb-3">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('mainhome') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Personal Information</li>
                        </ol>
                    </nav>

                    <div class="">
                        <h3><i class="fa fa-user fa-lg"></i> My Personal Information</h3>
                    </div>
                </div>
                <!-- /.col-12 col-sm-12 col-md-12 col-lg-12 -->
            </div>
            <!-- /.row pt-3 mb-3 -->

            <div class="row mb-3">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <p>Please be sure to update your personal information if it has changed</p>

                            {!! Form::open(['url' => route('personal-info.update', ['personal_info' => $user->id]), 'method' => 'put']) !!}
                            <div class="row">
                                <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                    {!! Form::label('fname', 'First Name') !!}
                                    {!! Form::text('fname', $user->fname, ['class' => 'form-control', 'required']) !!}
                                </div>
                                <!-- /.form-group col-12 col-sm-12 col-md-12 col-lg-12 -->

                                <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                    {!! Form::label('lname', 'Last Name') !!}
                                    {!! Form::text('lname', $user->lname, ['class' => 'form-control', 'required']) !!}
                                </div>
                                <!-- /.form-group col-12 col-sm-12 col-md-12 col-lg-12 -->

                                <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                    {!! Form::label('email', 'Email Address') !!}
                                    {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}
                                </div>
                                <!-- /.form-group col-12 col-sm-12 col-md-12 col-lg-12 -->

                                <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                    {!! Form::label('contact', 'Contact Number') !!}
                                    {!! Form::text('contact', $user->contact, ['class' => 'form-control', 'required']) !!}
                                </div>
                                <!-- /.form-group col-12 col-sm-12 col-md-12 col-lg-12 -->

                                <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                    {!! Form::label('password', 'New Password') !!}
                                    {!! Form::password('password', ['class' => 'form-control']) !!}
                                </div>
                                <!-- /.form-group col-12 col-sm-12 col-md-12 col-lg-12 -->

                                <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                    {!! Form::label('address', 'Address') !!}
                                    {!! Form::textarea('address', $user->address, ['class' => 'form-control', 'rows' => '3']) !!}
                                </div>
                                <!-- /.form-group col-12 col-sm-12 col-md-12 col-lg-12 -->

                                <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                    {!! Form::submit('Update', ['class' => 'btn btn-events']) !!}
                                </div>
                                <!-- /.form-group col-12 col-sm-12 col-md-12 col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            {!! Form::close() !!}
                        </div>
                        <!-- /.col-12 col-sm-12 col-md-6 col-lg-6 -->

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <h5>My Information</h5>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>{{$user->fname}} {{$user->lname}} ({{$user->name}})</td>
                                    </tr>

                                    <tr>
                                        <td>Email</td>
                                        <td>{{$user->email}}</td>
                                    </tr>

                                    <tr>
                                        <td>Contact Number</td>
                                        <td>{{$user->contact}}</td>
                                    </tr>

                                    <tr>
                                        <td>Address</td>
                                        <td>{{$user->address}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- /.table table-striped -->
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.col-12 col-sm-12 col-md-6 col-lg-6 -->
                    </div>
                    <!-- /.row -->

                    <div class="text-right mb-3">
                        <a href="{{route('mainhome')}}" class="btn btn-events"><i class="fa fa-home" style="color: white;"></i> Go to Home</a>
                        <!-- /.btn btn-events -->
                    </div>
                    <!-- /.text-right mb-3 -->
                </div>
                <!-- /.col-12 col-sm-12 col-md-12 col-lg-12 -->
            </div>
            <!-- /.row mb-3 -->
        </div>
    </section>
@endsection
