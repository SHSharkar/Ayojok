@extends('layouts.app')

@push('css')

<style>

    .wrapper {
        width: 70%;
    }

    @media (max-width: 992px) {
        .wrapper {
            width: 100%;
        }
    }

    .panel-heading {
        padding: 0;
        border: 0;

    }

    .panel-title > a, .panel-title > a:active {
        display: block;
        padding: 15px;
        color: #555;
        font-size: 16px;
        font-weight: bold;
        /*text-transform: uppercase;*/
        letter-spacing: 1px;
        word-spacing: 3px;
        text-decoration: none;
        text-transform: none !important;
    }

    /*.panel-heading a:before {
        font-family: 'Glyphicons Halflings';
        content: "\f078";
        float: left;
        transition: all 0.5s;

    }*/

    .panel-heading.active a:before {
        -webkit-transform: rotate(180deg);
        -moz-transform: rotate(180deg);
        transform: rotate(180deg);

    }

    .iconRotate {
        transition: all 0.5s;
        padding-right: 12px;
        font-size: 18px;
        color: #D01366;
    }

    .panel-heading.active .iconRotate {
        -webkit-transform: rotate(180deg);
        -moz-transform: rotate(180deg);
        transform: rotate(180deg);

    }

    img {
        width: 300px;
    }

    #accordion .panel-title a:hover {
        background-color: rgba(208, 202, 201, 0.44);
    }

    #accordion .panel-title a {
        border-bottom: 2px solid #736D6C;
        background-color: #F2F2F2;
        color: #D01366;
    }

    #accordion .panel-body {
        background: none;
        color: #222831;
        padding-left: 0;
        padding-right: 0;
    }

    #panel-heading active {
        border-top: 2px solid #736D6C;
    }

    /*Checkbox design*/
    /* The container */
    .CBcontainer {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .CBcontainer input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .CBcontainer {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
    }

    /* On mouse-over, add a grey background color */
    .CBcontainer:hover input ~ .checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .CBcontainer input:checked ~ .checkmark {
        background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .CBcontainer input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .CBcontainer .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    thead {
        background-color: #e0e0e0;
    }

    h5 {
        text-transform: none;
        text-align: left;
    }

    h4 {
        text-transform: none;
    }

    /*Override home.css:1879 */
    .item div h4 {
        font-size: 16px;
        text-align: center;
        max-width: 87%;
    }

    .fa-trash-o:before {
        color: #a10509;
        font-size: 1.5rem;
    }

    .input-group {
        width: 50%;
    }

</style>


@endpush

@section('content')
        <!-- Masthead -->
<header class="pagehead" style="background-image: url({{asset('img/backgrounds/header_bg_index.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-12 my-auto text-center text-white">
                <img class="pagehead-img img-fluid mb-3" src="{{asset('img/logo_final.png')}}" alt="">
            </div>
        </div>
    </div>
</header>

<!-- My Checklist Section -->
<section class="page-section mt-3 mb-3" >
    <div class="container">

        <div class="row">
            <ul class="breadcrumb">
                <li><a href="{{route('mainhome')}}">Home</a></li>
                {{--<li><a href="{{route('my-account')}}">My Account</a></li>--}}
                <li class="active"> My Checklist</li>
            </ul>
        </div>

        <div class="wow fadeIn text-center">
            <h3>My Checklist</h3>
            <hr class="colored">
        </div>

        {{-- <div class="col-lg-12 mt-4" style="text-align: justify;">
        <p>A planning tool designed to make your event preparation more efficient. Use our preset of checklists or add your own set of tasks with corresponding dates to the existing checklist. You can access and edit our checklist anytime either from our app or our website.</p>
      </div> --}}

        <div class="col-lg-12 mt-4" style="text-align: justify;">
            <p>
                This free online checklist is aimed at saving your time and making your event planning stress free.
                Select a date for your wedding and you will instantly be able to access our customizable checklist
                personalized around your wedding date. The checklist will help keep you on track, making sure you have
                completed everything within deadline. You can also easily export and download this checklist as a pdf.
        </div>

        <?php
        if ($errors->any()) {
            echo $errors->first();
        }

        ?>

        {{-- <div class="col-lg-12" style="text-align: justify; font-size:18px;">

      </div> --}}
    </div>


    <?php
    $check = \App\Models\checklist::where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->count();

    //for showing completed task
    $total_task = $check;
    $completed_task = \App\Models\checklist::where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->where('status', 1)->count();

    if ($completed_task == 0) {
        //$completed_task = 1;
        //$percentance  = ($total_task/$completed_task)*100;
        $percentance = 0;
    } else {
        $percentance = ($completed_task / $total_task) * 100;
    }


    ?>

    <hr>
    <div class="row container-fluid">
        <div class="col-sm-10">
            <div class="div container wrapper">

                <h4 style="text-transform: none"><span id="div1">{{$completed_task}}</span> out of {{$total_task}} Tasks
                    Completed.</h4>
            </div>

        </div>
    </div>

    <div class="row container-fluid">
        <div class="col-sm-8">
            <div class="div container wrapper">
                <div class="progress" style="background-color: #D8D8D8; margin-top: .5rem;">

                    <div class="progress-bar progress-bar-striped active" id="progress_bar" role="progressbar"
                         aria-valuenow="40"
                         aria-valuemin="0" aria-valuemax="74"
                         style="width:<?php echo $percentance . '%'; ?>;text-align: center;background-color: #ea9e1e">
                        {{--<h6 id="text">{{round($percentance)." %"}}</h6>--}}
                    </div>


                </div>
            </div>

        </div>
        <div class="col-sm-4">
            {!! Form::open(['method' => 'POST','route' =>'resetChecklist' ,'style' => 'display:inline']) !!}

            <div class="input-group">
                <div class="input-group-append">
                    {{--<input type="submit" class="btn btn-outline-danger" value="Reset" title="Click to Reset the Checklist" data-toggle="tooltip" date-placement="right">--}}
                    {!! Form::button('Reset',['class'=> 'btn btn-outline-danger','type' => 'submit', 'onClick'=>'return confirmMsg()', 'data-toggle'=>'tooltip', 'data-placement'=>'right', 'title'=>'Click to Reset the Checklist']) !!}
                </div>
            </div>
            {!! Form::close()!!}

        </div>


        <hr>

        {{--<button onclick="scrollDiv_init()">Play</button>--}}
        <div class="row container-fluid">

            <div class="col-sm-10">
                <div class="wrapper center-block container">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        @if($check == 0)
                            <a href="{{route('userCheckList_upload',\Illuminate\Support\Facades\Auth::user()->id)}}"
                               class="btn btn-primary" style="background-color: #222222">Get Started ( {{$check}} )</a>
                        @else
                            <div class="panel panel-default">

                                <div class="panel-heading <?php if ($errors->any()) {
                                    if ($errors->first() == 1) {
                                        echo "active";
                                    }
                                }?>" role="tab" id="headingOne">

                                    <h4 class="panel-title">

                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapseOne"
                                           aria-expanded="true" aria-controls="collapseOne">

                                            <h5><i class='fa fa-chevron-down iconRotate'></i> Things to do
                                                first {{--(must done 8-6 months beforehand)--}}</h5>
                                        </a>
                                    </h4>

                                </div>


                                <div id="collapseOne" class="panel-collapse collapse in <?php if ($errors->any()) {
                                    if ($errors->first() == 1) {
                                        echo "show";
                                    }
                                }?> " role="tabpanel"
                                     aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="col-lg-12" style="text-align: justify;font-size:18px;">

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Tasks</th>
                                                    <th>Suggested Date before wedding</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datas as $data)
                                                    @if ($data->section == 1)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="check" class="checkbox"
                                                                       data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}>
                                                                {{$data->details}}
                                                            </td>
                                                            <td>
                                                                {{$data->time}}
                                                                {{--<img src="{{asset('img/delete.png')}}" style="height: 30px;width: 30px;">--}}
                                                            </td>
                                                            <td>
                                                                {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                                {!! Form::button('<span class="fa fa-trash-o" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                                {!! Form::close()!!}
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                                </tbody>
                                            </table>

                                            {{--<ul style="list-style: none;">
                                                @foreach ($datas as $data)
                                                    @if ($data->section == 1)
                                                        <li>
                                                            <input type="checkbox" name="check" class="checkbox"
                                                                   data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}>

                                                            {{$data->details}}
                                                            {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                            {!! Form::button('<span class="fa fa-sm fa-close" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                            {!! Form::close()!!}
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>--}}
                                            {!! Form::open(['method' => 'POST','route' =>'addNew' ,'style' => 'display:inline']) !!}

                                            <div class="input-group mb-3">

                                                <input type="hidden" name="section" value="1">
                                                <input type="text" name="details" class="form-control" autocomplete="off"
                                                       placeholder="Add new to this checklist ( ex: Fix your event dates )"
                                                       required>
                                                {{--<input type="text" name="estimated_time" class="form-control"
                                                       placeholder="estimated time for this  ( ex: 8 months) "
                                                       aria-label="estimated time for this new checklist">--}}
                                                <div class="input-group-append">
                                                    {!! Form::button('Add Your Task',['class'=> 'btn btn-outline-secondary','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'right', 'title'=>'']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close()!!}

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading <?php if ($errors->any()) {
                                    if ($errors->first() == 2) {
                                        echo "active";
                                    }
                                }?>" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <h5 class="new"><i class='fa fa-chevron-down iconRotate'></i> Venue (8-6
                                                months before)</h5>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse <?php if ($errors->any()) {
                                    if ($errors->first() == 2) {
                                        echo "show";
                                    }
                                }?>" role="tabpanel"
                                     aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <div class="col-lg-12" style="text-align: justify;font-size:18px;">

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Tasks</th>
                                                    <th>Suggested Date before wedding</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datas as $data)
                                                    @if ($data->section == 2)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="check" class="checkbox"
                                                                       data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}>
                                                                {{$data->details}}
                                                            </td>
                                                            <td>
                                                                {{$data->time}}
                                                                {{--<img src="{{asset('img/delete.png')}}" style="height: 30px;width: 30px;">--}}
                                                            </td>
                                                            <td>
                                                                {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                                {!! Form::button('<span class="fa fa-trash-o" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                                {!! Form::close()!!}
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                                </tbody>
                                            </table>
                                            {{--<ul style="list-style: none;">--}}

                                            {{--@foreach ($datas as $data)--}}
                                            {{--@if ($data->section == 2)--}}
                                            {{--<li>--}}
                                            {{--<input type="checkbox" name="check" class="checkbox"--}}
                                            {{--data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}> {{$data->details}}--}}
                                            {{--{!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}--}}
                                            {{--{!! Form::button('<span class="fa fa-sm fa-close" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}--}}
                                            {{--{!! Form::close()!!}--}}
                                            {{--</li>--}}
                                            {{--@endif--}}
                                            {{--@endforeach--}}
                                            {{--</ul>--}}
                                            {!! Form::open(['method' => 'POST','route' =>'addNew' ,'style' => 'display:inline']) !!}

                                            <div class="input-group mb-3">

                                                <input type="hidden" name="section" value="2">
                                                <input type="text" name="details" class="form-control" autocomplete="off"
                                                       placeholder="Add new to this checklist ( ex: Fix your event dates )"
                                                       aria-label="Add new to this checklist" required>
                                                {{--<input type="text" name="estimated_time" class="form-control"
                                                       placeholder="estimated time for this  ( ex: 8 months) "
                                                       aria-label="estimated time for this new checklist">--}}
                                                <div class="input-group-append">
                                                    {!! Form::button('Add Your Task',['class'=> 'btn btn-outline-secondary','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'right', 'title'=>'']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close()!!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading <?php if ($errors->any()) {
                                    if ($errors->first() == 3) {
                                        echo "active";
                                    }
                                }?>" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <h5><i class='fa fa-chevron-down iconRotate'></i> Decoration</h5>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse <?php if ($errors->any()) {
                                    if ($errors->first() == 3) {
                                        echo "show";
                                    }
                                }?>" role="tabpanel"
                                     aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <div class="col-lg-12" style="text-align: justify;font-size:18px;">

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Tasks</th>
                                                    <th>Suggested Date before wedding</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datas as $data)
                                                    @if ($data->section == 3)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="check" class="checkbox"
                                                                       data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}>
                                                                {{$data->details}}
                                                            </td>
                                                            <td>
                                                                {{$data->time}}
                                                                {{--<img src="{{asset('img/delete.png')}}" style="height: 30px;width: 30px;">--}}
                                                            </td>
                                                            <td>
                                                                {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                                {!! Form::button('<span class="fa fa-trash-o" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                                {!! Form::close()!!}
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                                </tbody>
                                            </table>

                                            {{--<ul style="list-style: none;">

                                                @foreach ($datas as $data)
                                                    @if ($data->section == 3)
                                                        <li>
                                                            <input type="checkbox" name="check" class="checkbox"
                                                                   data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}> {{$data->details}}
                                                            {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                            {!! Form::button('<span class="fa fa-sm fa-close" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                            {!! Form::close()!!}
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>--}}
                                            {!! Form::open(['method' => 'POST','route' =>'addNew' ,'style' => 'display:inline']) !!}

                                            <div class="input-group mb-3">

                                                <input type="hidden" name="section" value="3">
                                                <input type="text" name="details" class="form-control" autocomplete="off"
                                                       placeholder="Add new to this checklist ( ex: Fix your event dates )"
                                                       aria-label="Add new to this checklist" required>
                                                {{--<input type="text" name="estimated_time" class="form-control"
                                                       placeholder="estimated time for this  ( ex: 8 months) "
                                                       aria-label="estimated time for this new checklist">--}}
                                                <div class="input-group-append">
                                                    {!! Form::button('Add Your Task',['class'=> 'btn btn-outline-secondary','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'right', 'title'=>'']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close()!!}

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading <?php if ($errors->any()) {
                                    if ($errors->first() == 5) {
                                        echo "active";
                                    }
                                }?>" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <h5><i class='fa fa-chevron-down iconRotate'></i> Clothing and
                                                accessories {{--(at least 2-3 months before)--}}</h5>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse <?php if ($errors->any()) {
                                    if ($errors->first() == 5) {
                                        echo "show";
                                    }
                                }?>" role="tabpanel"
                                     aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        <div class="col-lg-12" style="text-align: justify;font-size:18px;">

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Tasks</th>
                                                    <th>Suggested Date before wedding</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datas as $data)
                                                    @if ($data->section == 5)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="check" class="checkbox"
                                                                       data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}>
                                                                {{$data->details}}
                                                            </td>
                                                            <td>
                                                                {{$data->time}}
                                                                {{--<img src="{{asset('img/delete.png')}}" style="height: 30px;width: 30px;">--}}
                                                            </td>
                                                            <td>
                                                                {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                                {!! Form::button('<span class="fa fa-trash-o" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                                {!! Form::close()!!}
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                                </tbody>
                                            </table>
                                            {{--<ul style="list-style: none;">

                                                @foreach ($datas as $data)
                                                    @if ($data->section == 5)
                                                        <li>
                                                            <input type="checkbox" name="check" class="checkbox"
                                                                   data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}> {{$data->details}}
                                                            {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                            {!! Form::button('<span class="fa fa-sm fa-close" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                            {!! Form::close()!!}
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>--}}
                                            {!! Form::open(['method' => 'POST','route' =>'addNew' ,'style' => 'display:inline']) !!}

                                            <div class="input-group mb-3">

                                                <input type="hidden" name="section" value="5">
                                                <input type="text" name="details" class="form-control" autocomplete="off"
                                                       placeholder="Add new to this checklist ( ex: Fix your event dates )"
                                                       aria-label="Add new to this checklist" required>
                                                {{--<input type="text" name="estimated_time" class="form-control"
                                                       placeholder="estimated time for this  ( ex: 8 months) "
                                                       aria-label="estimated time for this new checklist">--}}
                                                <div class="input-group-append">
                                                    {!! Form::button('Add Your Task',['class'=> 'btn btn-outline-secondary','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'right', 'title'=>'']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close()!!}

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading <?php if ($errors->any()) {
                                    if ($errors->first() == 6) {
                                        echo "active";
                                    }
                                }?>" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <h5><i class='fa fa-chevron-down iconRotate'></i>
                                                Jewelleries {{--(2-3 months before)--}}</h5>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse <?php if ($errors->any()) {
                                    if ($errors->first() == 6) {
                                        echo "show";
                                    }
                                }?>" role="tabpanel"
                                     aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <div class="col-lg-12" style="text-align: justify;font-size:18px;">

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Tasks</th>
                                                    <th>Suggested Date before wedding</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datas as $data)
                                                    @if ($data->section == 6)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="check" class="checkbox"
                                                                       data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}>
                                                                {{$data->details}}
                                                            </td>
                                                            <td>
                                                                {{$data->time}}
                                                                {{--<img src="{{asset('img/delete.png')}}" style="height: 30px;width: 30px;">--}}
                                                            </td>
                                                            <td>
                                                                {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                                {!! Form::button('<span class="fa fa-trash-o" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                                {!! Form::close()!!}
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                                </tbody>
                                            </table>

                                            {{--<ul style="list-style: none;">

                                                @foreach ($datas as $data)
                                                    @if ($data->section == 6)
                                                        <li>
                                                            <input type="checkbox" name="check" class="checkbox"
                                                                   data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}> {{$data->details}}
                                                            {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                            {!! Form::button('<span class="fa fa-sm fa-close" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                            {!! Form::close()!!}
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>--}}
                                            {!! Form::open(['method' => 'POST','route' =>'addNew' ,'style' => 'display:inline']) !!}

                                            <div class="input-group mb-3">

                                                <input type="hidden" name="section" value="6">
                                                <input type="text" name="details" class="form-control" autocomplete="off"
                                                       placeholder="Add new to this checklist ( ex: Fix your event dates )"
                                                       aria-label="Add new to this checklist" required>
                                                {{--<input type="text" name="estimated_time" class="form-control"
                                                       placeholder="estimated time for this  ( ex: 8 months) "
                                                       aria-label="estimated time for this new checklist">--}}
                                                <div class="input-group-append">
                                                    {!! Form::button('Add Your Task',['class'=> 'btn btn-outline-secondary','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'right', 'title'=>'']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close()!!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading <?php if ($errors->any()) {
                                    if ($errors->first() == 7) {
                                        echo "active";
                                    }
                                }?>" role="tab" id="headingSix">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            <h5><i class='fa fa-chevron-down iconRotate'></i> Beauty and
                                                makeup {{--(from 1 month before to the day of wedding)--}}</h5>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse <?php if ($errors->any()) {
                                    if ($errors->first() == 7) {
                                        echo "show";
                                    }
                                }?>" role="tabpanel"
                                     aria-labelledby="headingSix">
                                    <div class="panel-body">
                                        <div class="col-lg-12" style="text-align: justify;font-size:18px;">

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Tasks</th>
                                                    <th>Suggested Date before wedding</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datas as $data)
                                                    @if ($data->section == 7)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="check" class="checkbox"
                                                                       data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}>
                                                                {{$data->details}}
                                                            </td>
                                                            <td>
                                                                {{$data->time}}
                                                                {{--<img src="{{asset('img/delete.png')}}" style="height: 30px;width: 30px;">--}}
                                                            </td>
                                                            <td>
                                                                {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                                {!! Form::button('<span class="fa fa-trash-o" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                                {!! Form::close()!!}
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                                </tbody>
                                            </table>
                                            {{--<ul style="list-style: none;">

                                                @foreach ($datas as $data)
                                                    @if ($data->section == 7)
                                                        <li>
                                                            <input type="checkbox" name="check" class="checkbox"
                                                                   data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}> {{$data->details}}
                                                            {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                            {!! Form::button('<span class="fa fa-sm fa-close" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                            {!! Form::close()!!}
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>--}}
                                            {!! Form::open(['method' => 'POST','route' =>'addNew' ,'style' => 'display:inline']) !!}

                                            <div class="input-group mb-3">

                                                <input type="hidden" name="section" value="7">
                                                <input type="text" name="details" class="form-control" autocomplete="off"
                                                       placeholder="Add new to this checklist ( ex: Fix your event dates )"
                                                       aria-label="Add new to this checklist" required>
                                                {{--<input type="text" name="estimated_time" class="form-control"
                                                       placeholder="estimated time for this  ( ex: 8 months) "
                                                       aria-label="estimated time for this new checklist">--}}
                                                <div class="input-group-append">
                                                    {!! Form::button('Add Your Task',['class'=> 'btn btn-outline-secondary','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'right', 'title'=>'']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close()!!}

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading <?php if ($errors->any()) {
                                    if ($errors->first() == 8) {
                                        echo "active";
                                    }
                                }?>" role="tab" id="headingSeven">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            <h5><i class='fa fa-chevron-down iconRotate'></i> Photography &
                                                Cinematography {{--(6 months beforehand)--}}</h5></a>
                                    </h4>
                                </div>
                                <div id="collapseSeven" class="panel-collapse collapse <?php if ($errors->any()) {
                                    if ($errors->first() == 8) {
                                        echo "show";
                                    }
                                }?>" role="tabpanel"
                                     aria-labelledby="headingSeven">
                                    <div class="panel-body">
                                        <div class="col-lg-12" style="text-align: justify;font-size:18px;">

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Tasks</th>
                                                    <th>Suggested Date before wedding</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datas as $data)
                                                    @if ($data->section == 8)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="check" class="checkbox"
                                                                       data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}>
                                                                {{$data->details}}
                                                            </td>
                                                            <td>
                                                                {{$data->time}}
                                                                {{--<img src="{{asset('img/delete.png')}}" style="height: 30px;width: 30px;">--}}
                                                            </td>
                                                            <td>
                                                                {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                                {!! Form::button('<span class="fa fa-trash-o" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                                {!! Form::close()!!}
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                                </tbody>
                                            </table>

                                            {{--<ul style="list-style: none;">

                                                @foreach ($datas as $data)
                                                    @if ($data->section == 8)
                                                        <li>
                                                            <input type="checkbox" name="check" class="checkbox"
                                                                   data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}> {{$data->details}}
                                                            {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                            {!! Form::button('<span class="fa fa-sm fa-close" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                            {!! Form::close()!!}
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>--}}
                                            {!! Form::open(['method' => 'POST','route' =>'addNew' ,'style' => 'display:inline']) !!}

                                            <div class="input-group mb-3">

                                                <input type="hidden" name="section" value="8">
                                                <input type="text" name="details" class="form-control" autocomplete="off"
                                                       placeholder="Add new to this checklist ( ex: Fix your event dates )"
                                                       aria-label="Add new to this checklist" required>
                                                {{--<input type="text" name="estimated_time" class="form-control"
                                                       placeholder="estimated time for this  ( ex: 8 months) "
                                                       aria-label="estimated time for this new checklist">--}}
                                                <div class="input-group-append">
                                                    {!! Form::button('Add Your Task',['class'=> 'btn btn-outline-secondary','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'right', 'title'=>'']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close()!!}

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading <?php if ($errors->any()) {
                                    if ($errors->first() == 9) {
                                        echo "active";
                                    }
                                }?>" role="tab" id="headingEight">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            <h5><i class='fa fa-chevron-down iconRotate'></i>
                                                Invitations {{--(1-2 months before event)--}}</h5>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEight" class="panel-collapse collapse <?php if ($errors->any()) {
                                    if ($errors->first() == 9) {
                                        echo "show";
                                    }
                                }?>" role="tabpanel"
                                     aria-labelledby="headingEight">
                                    <div class="panel-body">
                                        <div class="col-lg-12" style="text-align: justify; font-size:18px;">


                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Tasks</th>
                                                    <th>Suggested Date before wedding</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datas as $data)
                                                    @if ($data->section == 9)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="check" class="checkbox"
                                                                       data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}>
                                                                {{$data->details}}
                                                            </td>
                                                            <td>
                                                                {{$data->time}}
                                                                {{--<img src="{{asset('img/delete.png')}}" style="height: 30px;width: 30px;">--}}
                                                            </td>
                                                            <td>
                                                                {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                                {!! Form::button('<span class="fa fa-trash-o" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                                {!! Form::close()!!}
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                                </tbody>
                                            </table>

                                            {{--<ul style="list-style: none;">

                                                @foreach ($datas as $data)
                                                    @if ($data->section == 9)
                                                        <li>
                                                            <input type="checkbox" name="check" class="checkbox"
                                                                   data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}> {{$data->details}}
                                                            {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                            {!! Form::button('<span class="fa fa-sm fa-close" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                            {!! Form::close()!!}
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>--}}
                                            {!! Form::open(['method' => 'POST','route' =>'addNew' ,'style' => 'display:inline']) !!}

                                            <div class="input-group mb-3">

                                                <input type="hidden" name="section" value="9">
                                                <input type="text" name="details" class="form-control" autocomplete="off"
                                                       placeholder="Add new to this checklist ( ex: Fix your event dates )"
                                                       aria-label="Add new to this checklist" required>
                                                {{--<input type="text" name="estimated_time" class="form-control"
                                                       placeholder="estimated time for this  ( ex: 8 months) "
                                                       aria-label="estimated time for this new checklist">--}}
                                                <div class="input-group-append">
                                                    {!! Form::button('Add Your Task',['class'=> 'btn btn-outline-secondary','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'right', 'title'=>'']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close()!!}

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading <?php if ($errors->any()) {
                                    if ($errors->first() == 10) {
                                        echo "active";
                                    }
                                }?>" role="tab" id="headingNine">

                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            <h5><i class='fa fa-chevron-down iconRotate'></i> Food & Sweets</h5>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseNine" class="panel-collapse collapse <?php if ($errors->any()) {
                                    if ($errors->first() == 10) {
                                        echo "show";
                                    }
                                }?>" role="tabpanel"
                                     aria-labelledby="headingNine">
                                    <div class="panel-body">
                                        <div class="col-lg-12" style="text-align: justify; font-size:18px;">

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Tasks</th>
                                                    <th>Suggested Date before wedding</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datas as $data)
                                                    @if ($data->section == 10)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="check" class="checkbox"
                                                                       data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}>
                                                                {{$data->details}}
                                                            </td>
                                                            <td>
                                                                {{$data->time}}
                                                                {{--<img src="{{asset('img/delete.png')}}" style="height: 30px;width: 30px;">--}}
                                                            </td>
                                                            <td>
                                                                {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                                {!! Form::button('<span class="fa fa-trash-o" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                                {!! Form::close()!!}
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                                </tbody>
                                            </table>
                                            {{--<ul style="list-style: none;">

                                                @foreach ($datas as $data)
                                                    @if ($data->section == 10)
                                                        <li>
                                                            <input type="checkbox" name="check" class="checkbox"
                                                                   data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}> {{$data->details}}
                                                            {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                            {!! Form::button('<span class="fa fa-sm fa-close" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                            {!! Form::close()!!}
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>--}}
                                            {!! Form::open(['method' => 'POST','route' =>'addNew' ,'style' => 'display:inline']) !!}

                                            <div class="input-group mb-3">

                                                <input type="hidden" name="section" value="10">
                                                <input type="text" name="details" class="form-control" autocomplete="off"
                                                       placeholder="Add new to this checklist ( ex: Fix your event dates )"
                                                       aria-label="Add new to this checklist" required>
                                                {{--<input type="text" name="estimated_time" class="form-control"
                                                       placeholder="estimated time for this  ( ex: 8 months) "
                                                       aria-label="estimated time for this new checklist">--}}
                                                <div class="input-group-append">
                                                    {!! Form::button('Add Your Task',['class'=> 'btn btn-outline-secondary','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'right', 'title'=>'']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close()!!}

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading <?php if ($errors->any()) {
                                    if ($errors->first() == 11) {
                                        echo "active";
                                    }
                                }?>" role="tab" id="headingTen">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            <h5><i class='fa fa-chevron-down iconRotate'></i> Music &
                                                Entertainment {{--(2 month before)--}}</h5>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTen" class="panel-collapse collapse <?php if ($errors->any()) {
                                    if ($errors->first() == 11) {
                                        echo "show";
                                    }
                                }?>" role="tabpanel"
                                     aria-labelledby="headingTen">
                                    <div class="panel-body">
                                        <div class="col-lg-12" style="text-align: justify; font-size:18px;">

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Tasks</th>
                                                    <th>Suggested Date before wedding</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datas as $data)
                                                    @if ($data->section == 11)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="check" class="checkbox"
                                                                       data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}>
                                                                {{$data->details}}
                                                            </td>
                                                            <td>
                                                                {{$data->time}}
                                                                {{--<img src="{{asset('img/delete.png')}}" style="height: 30px;width: 30px;">--}}
                                                            </td>
                                                            <td>
                                                                {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                                {!! Form::button('<span class="fa fa-trash-o" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                                {!! Form::close()!!}
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                                </tbody>
                                            </table>

                                            {{-- <ul style="list-style: none;">

                                                 @foreach ($datas as $data)
                                                     @if ($data->section == 11)
                                                         <li>
                                                             <input type="checkbox" name="check" class="checkbox"
                                                                    data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}> {{$data->details}}
                                                             {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                             {!! Form::button('<span class="fa fa-sm fa-close" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                             {!! Form::close()!!}
                                                         </li>
                                                     @endif
                                                 @endforeach
                                             </ul>--}}
                                            {!! Form::open(['method' => 'POST','route' =>'addNew' ,'style' => 'display:inline']) !!}

                                            <div class="input-group mb-3">

                                                <input type="hidden" name="section" value="11">
                                                <input type="text" name="details" class="form-control" autocomplete="off"
                                                       placeholder="Add new to this checklist ( ex: Fix your event dates )"
                                                       aria-label="Add new to this checklist" required>
                                                {{--<input type="text" name="estimated_time" class="form-control"
                                                       placeholder="estimated time for this  ( ex: 8 months) "
                                                       aria-label="estimated time for this new checklist">--}}
                                                <div class="input-group-append">
                                                    {!! Form::button('Add Your Task',['class'=> 'btn btn-outline-secondary','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'right', 'title'=>'']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close()!!}

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading <?php if ($errors->any()) {
                                    if ($errors->first() == 12) {
                                        echo "active";
                                    }
                                }?>" role="tab" id="headingEleven">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                            <h5><i class='fa fa-chevron-down iconRotate'></i> Officiant & Legal
                                                paperwork</h5>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEleven" class="panel-collapse collapse <?php if ($errors->any()) {
                                    if ($errors->first() == 12) {
                                        echo "show";
                                    }
                                }?>" role="tabpanel"
                                     aria-labelledby="headingEleven">
                                    <div class="panel-body">
                                        <div class="col-lg-12" style="text-align: justify; font-size:18px;">

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Tasks</th>
                                                    <th>Suggested Date before wedding</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datas as $data)
                                                    @if ($data->section == 12)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="check" class="checkbox"
                                                                       data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}>
                                                                {{$data->details}}
                                                            </td>
                                                            <td>
                                                                {{$data->time}}
                                                                {{--<img src="{{asset('img/delete.png')}}" style="height: 30px;width: 30px;">--}}
                                                            </td>
                                                            <td>
                                                                {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                                {!! Form::button('<span class="fa fa-trash-o" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                                {!! Form::close()!!}
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                                </tbody>
                                            </table>

                                            {{--<ul style="list-style: none;">

                                                @foreach ($datas as $data)
                                                    @if ($data->section == 12)
                                                        <li>
                                                            <input type="checkbox" name="check" class="checkbox"
                                                                   data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}> {{$data->details}}
                                                            {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                            {!! Form::button('<span class="fa fa-sm fa-close" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                            {!! Form::close()!!}
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>--}}
                                            {!! Form::open(['method' => 'POST','route' =>'addNew' ,'style' => 'display:inline']) !!}

                                            <div class="input-group mb-3">

                                                <input type="hidden" name="section" value="12">
                                                <input type="text" name="details" class="form-control" autocomplete="off"
                                                       placeholder="Add new to this checklist ( ex: Fix your event dates )"
                                                       aria-label="Add new to this checklist" required>
                                                {{--<input type="text" name="estimated_time" class="form-control"
                                                       placeholder="estimated time for this  ( ex: 8 months) "
                                                       aria-label="estimated time for this new checklist">--}}
                                                <div class="input-group-append">
                                                    {!! Form::button('Add Your Task',['class'=> 'btn btn-outline-secondary','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'right', 'title'=>'']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close()!!}

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading <?php if ($errors->any()) {
                                    if ($errors->first() == 13) {
                                        echo "active";
                                    }
                                }?>" role="tab" id="headingTwelve">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                            <h5><i class='fa fa-chevron-down iconRotate'></i>
                                                Trousseau {{--(1 week before)--}}</h5>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwelve" class="panel-collapse collapse <?php if ($errors->any()) {
                                    if ($errors->first() == 13) {
                                        echo "show";
                                    }
                                }?>" role="tabpanel"
                                     aria-labelledby="headingTwelve">
                                    <div class="panel-body">
                                        <div class="col-lg-12" style="text-align: justify; font-size:18px;">

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Tasks</th>
                                                    <th>Suggested Date before wedding</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datas as $data)
                                                    @if ($data->section == 13)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="check" class="checkbox"
                                                                       data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}>
                                                                {{$data->details}}
                                                            </td>
                                                            <td>
                                                                {{$data->time}}
                                                                {{--<img src="{{asset('img/delete.png')}}" style="height: 30px;width: 30px;">--}}
                                                            </td>
                                                            <td>
                                                                {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                                {!! Form::button('<span class="fa fa-trash-o" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                                {!! Form::close()!!}
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                                </tbody>
                                            </table>

                                            {{--<ul style="list-style: none;">

                                                @foreach ($datas as $data)
                                                    @if ($data->section == 13)
                                                        <li>
                                                            <input type="checkbox" name="check" class="checkbox"
                                                                   data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}> {{$data->details}}
                                                            {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                            {!! Form::button('<span class="fa fa-sm fa-close" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                            {!! Form::close()!!}
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>--}}
                                            {!! Form::open(['method' => 'POST','route' =>'addNew' ,'style' => 'display:inline']) !!}

                                            <div class="input-group mb-3">

                                                <input type="hidden" name="section" value="13">
                                                <input type="text" name="details" class="form-control" autocomplete="off"
                                                       placeholder="Add new to this checklist ( ex: Fix your event dates )"
                                                       aria-label="Add new to this checklist" required>
                                                {{--<input type="text" name="estimated_time" class="form-control"
                                                       placeholder="estimated time for this  ( ex: 8 months) "
                                                       aria-label="estimated time for this new checklist">--}}
                                                <div class="input-group-append">
                                                    {!! Form::button('Add Your Task',['class'=> 'btn btn-outline-secondary','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'right', 'title'=>'']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close()!!}

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading <?php if ($errors->any()) {
                                    if ($errors->first() == 14) {
                                        echo "active";
                                    }
                                }?>" role="tab" id="headingThirteen">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseThirteen" aria-expanded="false"
                                           aria-controls="collapseThirteen">
                                            <h5><i class='fa fa-chevron-down iconRotate'></i> Accommodation &
                                                Transport {{--(15 days before)--}}</h5>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThirteen" class="panel-collapse collapse <?php if ($errors->any()) {
                                    if ($errors->first() == 14) {
                                        echo "show";
                                    }
                                }?>" role="tabpanel"
                                     aria-labelledby="headingThirteen">
                                    <div class="panel-body">
                                        <div class="col-lg-12" style="text-align: justify; font-size:18px;">

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Tasks</th>
                                                    <th>Suggested Date before wedding</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datas as $data)
                                                    @if ($data->section == 14)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="check" class="checkbox"
                                                                       data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}>
                                                                {{$data->details}}
                                                            </td>
                                                            <td>
                                                                {{$data->time}}
                                                                {{--<img src="{{asset('img/delete.png')}}" style="height: 30px;width: 30px;">--}}
                                                            </td>
                                                            <td>
                                                                {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                                {!! Form::button('<span class="fa fa-trash-o" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                                {!! Form::close()!!}
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                                </tbody>
                                            </table>
                                            {{--<ul style="list-style: none;">

                                                @foreach ($datas as $data)
                                                    @if ($data->section == 14)
                                                        <li>
                                                            <input type="checkbox" name="check" class="checkbox"
                                                                   data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}> {{$data->details}}
                                                            {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                            {!! Form::button('<span class="fa fa-sm fa-close" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                            {!! Form::close()!!}
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>--}}
                                            {!! Form::open(['method' => 'POST','route' =>'addNew' ,'style' => 'display:inline']) !!}

                                            <div class="input-group mb-3">

                                                <input type="hidden" name="section" value="14">
                                                <input type="text" name="details" class="form-control" autocomplete="off"
                                                       placeholder="Add new to this checklist ( ex: Fix your event dates )"
                                                       aria-label="Add new to this checklist" required>
                                                {{--<input type="text" name="estimated_time" class="form-control"
                                                       placeholder="estimated time for this  ( ex: 8 months) "
                                                       aria-label="estimated time for this new checklist">--}}
                                                <div class="input-group-append">
                                                    {!! Form::button('Add Your Task',['class'=> 'btn btn-outline-secondary','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'right', 'title'=>'']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close()!!}

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading <?php if ($errors->any()) {
                                    if ($errors->first() == 15) {
                                        echo "active";
                                    }
                                }?>" role="tab" id="headingFourteen">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseFourteen" aria-expanded="false"
                                           aria-controls="collapseFourteen">
                                            <h5><i class='fa fa-chevron-down iconRotate'></i> Honeymoon &
                                                Travel {{--(post wedding)--}}</h5>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFourteen" class="panel-collapse collapse <?php if ($errors->any()) {
                                    if ($errors->first() == 15) {
                                        echo "show";
                                    }
                                }?>" role="tabpanel"
                                     aria-labelledby="headingFourteen">
                                    <div class="panel-body">
                                        <div class="col-lg-12" style="text-align: justify; font-size:18px;">

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Tasks</th>
                                                    <th>Suggested Date before wedding</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datas as $data)
                                                    @if ($data->section == 15)
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="check" class="checkbox"
                                                                       data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}>
                                                                {{$data->details}}
                                                            </td>
                                                            <td>
                                                                {{$data->time}}
                                                                {{--<img src="{{asset('img/delete.png')}}" style="height: 30px;width: 30px;">--}}
                                                            </td>
                                                            <td>
                                                                {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                                {!! Form::button('<span class="fa fa-trash-o" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                                {!! Form::close()!!}
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach

                                                </tbody>
                                            </table>

                                            {{--<ul style="list-style: none;">
                                                @foreach ($datas as $data)
                                                    @if ($data->section == 15)
                                                        <li>
                                                            <input type="checkbox" name="check" class="checkbox"
                                                                   data-listid="{{$data->id}}" {{ $data->status ? 'checked' : '' }}> {{$data->details}}
                                                            {!! Form::open(['method' => 'POST','route'=> ['deleteChecklist',$data->id], 'style' => 'display:inline']) !!}
                                                            {!! Form::button('<span class="fa fa-sm fa-close" aria-hidden="true"></span>',['class'=> 'btn btn-xs', 'style' => 'font-size:1rem;color:#dd3333;background-color: #f2f2f2;padding:2px;','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Delete']) !!}
                                                            {!! Form::close()!!}
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>--}}
                                            {!! Form::open(['method' => 'POST','route' =>'addNew' ,'style' => 'display:inline']) !!}

                                            <div class="input-group mb-3">

                                                <input type="hidden" name="section" value="15">
                                                <input type="text" name="details" class="form-control" autocomplete="off"
                                                       placeholder="Add new to this checklist ( ex: Fix your event dates )"
                                                       aria-label="Add new to this checklist" required>
                                                {{--<input type="text" name="estimated_time" class="form-control"
                                                       placeholder="estimated time for this  ( ex: 8 months) "
                                                       aria-label="estimated time for this new checklist">--}}
                                                <div class="input-group-append">
                                                    {!! Form::button('Add Your Task',['class'=> 'btn btn-outline-secondary','type' => 'submit','data-toggle'=>'tooltip', 'data-placement'=>'right', 'title'=>'']) !!}
                                                </div>
                                            </div>
                                            {!! Form::close()!!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif



                        {{--Demo--}}
                        {{--
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Collapsible Group Item #3
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                        --}}


                    </div>
                </div>
            </div>



            <div class="col-sm-2" id="MyDivName"  style="overflow-y: auto;height: 1000px" onMouseOver="pauseDiv()" onMouseOut="resumeDiv()">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">
                            <a href="{{url('vendors/'.$catagory ='venue')}}">
                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">Venue</h4>
                                    <img src="{{asset('img/final/Venue.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">
                            <a href="{{url('vendors/'.$catagory ='catering')}}">
                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">Catering</h4>
                                    <img src="{{asset('img/final/catering.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">

                            <a href="{{url('vendors/'.$catagory ='photography and cinematography')}}">

                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">Photography</h4>
                                    <img src="{{asset('img/final/Photography.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">

                            <a href="{{url('vendors/'.$catagory ='decoration')}}">

                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">Decoration</h4>
                                    <img src="{{asset('img/final/Decoration.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">

                            <a href="{{url('vendors/'.$catagory ='invitation cards')}}">

                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">Invitation Cards</h4>
                                    <img src="{{asset('img/final/invitation card.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">

                            <a href="{{url('vendors/'.$catagory ='dj')}}">

                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">DJ</h4>
                                    <img src="{{asset('img/final/DJ.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">

                            <a href="{{url('vendors/'.$catagory ='makeup artist')}}">

                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">Makeup Artist</h4>
                                    <img src="{{asset('img/final/Make UP.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">

                            <a href="{{url('vendors/'.$catagory ='bakeries')}}">

                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">Bakeries</h4>
                                    <img src="{{asset('img/final/Bakeries.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">

                            <a href="{{url('vendors/'.$catagory ='mehedi')}}">

                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">Mehedi</h4>
                                    <img src="{{asset('img/final/Mehedi.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">

                            <a href="{{url('vendors/'.$catagory ='kazi')}}">

                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">Kazi</h4>
                                    <img src="{{asset('img/final/Kazi.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">

                            <a href="{{url('services/'.$catagory ='vehicle')}}">

                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">Vehicle</h4>
                                    <img src="{{asset('img/final/Vehicle.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">

                            <a href="{{url('services/'.$catagory ='light & sound')}}">

                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">light & sound</h4>
                                    <img src="{{asset('img/final/Lighting.jpg')}}"
                                         class="img-fluid mx-auto zoom " alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">

                            <a href="{{url('services/'.$catagory ='holud snacks')}}">

                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">Holud & Snacks</h4>
                                    <img src="{{asset('img/final/Holud Snacks.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">

                            <a href="{{url('services/'.$catagory ='dala kula')}}">

                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">Dala Kula</h4>
                                    <img src="{{asset('img/final/Dala-Kula.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">

                            <a href="{{url('services/'.$catagory ='holud')}}">

                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">Holud Accessories</h4>
                                    <img src="{{asset('img/final/Holud Accessories.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">

                            <a href="{{url('services/'.$catagory ='wedding')}}">

                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">Wedding Accessories</h4>
                                    <img src="{{asset('img/final/Wedding Accessories.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">

                            <a href="{{url('services/'.$catagory ='alpona')}}">

                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">Alpona</h4>
                                    <img src="{{asset('img/final/Alpona.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">

                            <a href="{{url('services/'.$catagory ='Choreography')}}">

                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">Choreography</h4>
                                    <img src="{{asset('img/final/choreography.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">
                            <a href="{{url('vendors/'.$catagory ='jewellery')}}">
                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">Jewellery</h4>
                                    <img src="{{asset('img/final/Jewellery.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="item">
                            <a href="{{url('vendors/'.$catagory ='bridal outfit')}}">
                                <div class="img-wrapper">
                                    <h4 class="fontOverImage">Bridal Outfits</h4>
                                    <img src="{{asset('img/final/bridal.jpg')}}"
                                         class="img-fluid mx-auto zoom" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                {{--<div class="row">--}}
                {{--<div class="col-sm-12">--}}
                {{--<img src="http://triadcomics.co.nf/wp-content/uploads/2017/07/ImagePlaceholder_icon.svg_.png">--}}
                {{--</div>--}}
                {{--</div>--}}

            </div>
        </div>


</section>
@endsection

@push('scripts')

<script language="javascript">

    $( document ).ready(function() {
        scrollDiv_init();
    });

    ScrollRate = 10;

    function scrollDiv_init() {
        DivElmnt = document.getElementById('MyDivName');
        ReachedMaxScroll = false;

        DivElmnt.scrollTop = 0;
        PreviousScrollTop  = 0;

        ScrollInterval = setInterval('scrollDiv()', ScrollRate);
    }

    function scrollDiv() {

        if (!ReachedMaxScroll) {
            DivElmnt.scrollTop = PreviousScrollTop;
            PreviousScrollTop++;

            ReachedMaxScroll = DivElmnt.scrollTop >= (DivElmnt.scrollHeight - DivElmnt.offsetHeight);
        }
        else {
            ReachedMaxScroll = (DivElmnt.scrollTop == 0)?false:true;

            DivElmnt.scrollTop = PreviousScrollTop;
            PreviousScrollTop--;
        }
    }

    function pauseDiv() {
        clearInterval(ScrollInterval);
    }

    function resumeDiv() {
        PreviousScrollTop = DivElmnt.scrollTop;
        ScrollInterval    = setInterval('scrollDiv()', ScrollRate);
    }
</script>



<script type="text/javascript">
    var completedTask = "<?php echo $completed_task ?>";
    var totalTask = "<?php echo $total_task ?>";
    var percentage;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.checkbox').on('change', function () {
        var taskId = $(this).attr("data-listid"); // gets task ID of clicked checkbox
        //var state = $(this).is(':checked'); // gets if checkbox is checked or not
        var state = $(this).is(':checked') ? 1 : 0;
        //alert(state);

        percentage = 0;

        if (state == 0) {
            completedTask--;
            percentage = (completedTask / totalTask) * 100;
            $("#div1").html(completedTask);
            $("#progress_bar").css('width', percentage + "%");
            $("#text").html(Math.round(percentage) + "%");
        } else {
            completedTask++;
            percentage = (completedTask / totalTask) * 100;
            $("#div1").html(completedTask);
            $("#progress_bar").css('width', percentage + "%");
            $("#text").html(Math.round(percentage) + "%");
        }


        $.ajax({
            /*data: {
             id: taskId,
             status: state,
             },*/
            url: '/my-checklist/checkChecklist/' + taskId + '/' + state,
            type: 'GET',
            success: function (data) {
                console.log(' message: ' + data);
            },
            error: function (xhr, status, error) {
                // check status && error
                console.log('Error  message: ' + error);
            },
            dataType: 'text',

        });


//        alert(taskId+":"+state);

        /*$.ajax({
         data: {
         id: taskId,
         status: state,
         },
         url: '/my-checklist/checkChecklist/',
         type: 'POST',
         success: function( data ) {
         console.log(' message: ' + data);
         },
         error: function(xhr, status, error) {
         // check status && error
         console.log('Error  message: ' + error);
         },
         dataType: 'text',

         });*/
    });


</script>


<script>
    $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).siblings('.panel-heading').addClass('active');
    });

    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).siblings('.panel-heading').removeClass('active');
    });

    function confirmMsg() {
        return confirm("Are You Sure? you want to reset the checklist !");
    }


</script>

<script type="text/javascript">
    $(document).ready(function () {

        var id = "<?php if($errors->any()){echo $errors->first();}?>";
        // alert(id);
        $(function () {

            if (id == 1) {

                $("html, body").animate({
                    scrollTop: $('#collapseOne').get(0).scrollHeight
                }, 2000);
            }
            else if (id == 2) {
                $("html, body").animate({
                    scrollTop: $('#collapseTwo').get(0).scrollHeight
                }, 2000);
            }
            else if (id == 3) {
                $("#collapseThree").animate({
                    scrollTop: $('#collapseThree').get(0).scrollHeight
                }, 2000);
            }
            else if (id == 5) {
                $("html, body").animate({
                    scrollTop: $('#collapseFour').get(0).scrollHeight
                }, 2000);
            }
            else if (id == 6) {
                $("html, body").animate({
                    scrollTop: $('#collapseFive').get(0).scrollHeight
                }, 2000);
            }
            else if (id == 7) {
                $("html, body").animate({
                    scrollTop: $('#collapseSix').get(0).scrollHeight
                }, 2000);
            }
            else if (id == 8) {
                $("html, body").animate({
                    scrollTop: $('#collapseSeven').get(0).scrollHeight
                }, 2000);
            }
            else if (id == 9) {
                $("html, body").animate({
                    scrollTop: $('#collapseEight').get(0).scrollHeight
                }, 2000);
            }
            else if (id == 10) {
                $("html, body").animate({
                    scrollTop: $('#collapseNine').get(0).scrollHeight
                }, 2000);
            }
            else if (id == 11) {
                $("html, body").animate({
                    scrollTop: $('#collapseTen').get(0).scrollHeight
                }, 2000);
            }
            else if (id == 12) {
                $("html, body").animate({
                    scrollTop: $('#collapseEleven').get(0).scrollHeight
                }, 2000);
            }
            else if (id == 13) {
                $("html, body").animate({
                    scrollTop: $('#collapseTwelve').get(0).scrollHeight
                }, 2000);
            }
            else if (id == 14) {
                $("html, body").animate({
                    scrollTop: $('#collapseThirteen').get(0).scrollHeight
                }, 2000);
            }
            else if (id == 15) {
                $("html, body").animate({
                    scrollTop: $('#collapseFourteen').get(0).scrollHeight
                }, 2000);
            }


        });
    })
    ;
</script>


@endpush
