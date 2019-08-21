@extends('layouts.app')

@section('content')
    @php $agent = new Jenssegers\Agent\Agent() @endphp

    <!-- Masthead -->
    <header class="pagehead" style="background-image: url({{asset('img/backgrounds/bg-footer.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-12 my-auto text-center text-white">
                    <img class="pagehead-img img-fluid mt-4 mb-2 mb-sm-3 mb-md-4 mb-lg-4" src="{{ asset('img/logo_final.png') }}" alt="">
                </div>
            </div>
        </div>
    </header>
    <!-- Masthead End -->

    <!-- Blank section -->
    <section class="page-section services">
        <div class="container">
            <!-- <div class="wow fadeIn">
            <h3>Wedding Mate</h3>
          </div> -->

            <div class="row pt-3">
                <!-- Fetaure Image, video or 360 viewer place -->
                <div class="col-lg-8">

                    <div id="myCarousel" class=" carousel slide vendor-carousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                @if ((!empty($datas->feature_image_1) || $datas->feature_image_1 != null) && file_exists($datas->feature_image_1))
                                    <img class="d-block w-100" src="{{ asset($datas->feature_image_1) }}" alt="First slide">
                                @endif
                            </div>
                            <div class="carousel-item">
                                @if ((!empty($datas->feature_image_2) || $datas->feature_image_2 != null) && file_exists($datas->feature_image_2))
                                    <img class="d-block w-100" src="{{ asset($datas->feature_image_2) }}" alt="Second slide">
                                @endif
                            </div>
                            <div class="carousel-item">
                                @if ((!empty($datas->feature_image_3) || $datas->feature_image_3 != null) && file_exists($datas->feature_image_3))
                                    <img class="d-block w-100" src="{{ asset($datas->feature_image_3) }}" alt="Third slide">
                                @endif
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>

                        </a>
                        <ul class="carousel-indicators">
                            @if ((!empty($datas->feature_image_1) || $datas->feature_image_1 != null) && file_exists($datas->feature_image_1))
                                <li data-target="#myCarousel" data-slide-to="0" class="active"><img src="{{asset($datas->feature_image_1)}}" alt=""></li>
                            @endif

                            @if ((!empty($datas->feature_image_2) || $datas->feature_image_2 != null) && file_exists($datas->feature_image_2))
                                <li data-target="#myCarousel" data-slide-to="1"><img src="{{asset($datas->feature_image_2)}}" alt=""></li>
                            @endif

                            @if ((!empty($datas->feature_image_2) || $datas->feature_image_2 != null) && file_exists($datas->feature_image_2))
                                <li data-target="#myCarousel" data-slide-to="2"><img src="{{asset($datas->feature_image_3)}}" alt=""></li>
                            @endif
                        </ul>
                    </div>

                </div>
                <!--/End of Fetaure Image, video or 360 viewer place -->

                <div class="col-lg-4 price-snippet @if($agent->isMobile()) mt-4 @endif">
                    <div class="startingprice">
                        <p class="price">Starting at :</p>
                        <table style="width:100%">
                            @if (!empty($datas->startingat_1_title))
                                <tr>
                                    <th>{{$datas->startingat_1_title}}</th>
                                    <td>BDT {{$datas->startingat_1_price}}</td>
                                </tr>
                            @endif
                            @if (!empty($datas->startingat_2_title))
                                <tr>
                                    <th>{{$datas->startingat_2_title}}</th>
                                    <td>BDT {{$datas->startingat_2_price}}</td>
                                </tr>
                            @endif
                            @if (!empty($datas->startingat_3_title))
                                <tr>
                                    <th>{{$datas->startingat_3_title}}</th>
                                    <td>BDT {{$datas->startingat_3_price}}</td>
                                </tr>
                            @endif
                        </table>
                    </div>

                    {{-- Leave Your Query --}}
                    <div class="form-area @if($agent->isMobile()) mt-3 @endif">
                        <h5 style="margin-top: 5px; text-align: center; color:white;">Booking Query</h5>
                        <p class="text-center" style="font-size:0.9rem;font-weight:500;padding:0;">Please leave your details and let us take care of the rest</p>

                        <div class="row">
                            <div id="ajax-alert" class="col-12"></div>
                        </div>

                        <form role="form" id="queryForm">
                            {!! Form::hidden('catagory_id', $catagorydata->name, ['id' => 'catagory_id']) !!}
                            {!! Form::hidden('vendor_id', $datas->id, ['id' => 'vendor_id']) !!}

                            <div class="form-group">
                                @guest
                                    <input type="text" data-toggle="modal" href="#myModal" class="form-control query_layout_date" {{--id="date"--}} name="date" placeholder="Date" required readonly>
                                @endguest
                                @auth
                                    <input type="text" class="form-control query_layout_date" id="date" name="date" placeholder="Date" required readonly>
                                @endauth

                            </div>
                            <div class="form-group">
                                @guest
                                    <input type="number" data-toggle="modal" href="#myModal" class="form-control query_layout_num" name="phn" placeholder="Mobile Number" required readonly>
                                @endguest
                                @auth
                                    <input type="number" class="form-control query_layout_num" name="phn" id="phn" placeholder="Mobile Number" required value="{{Auth::user()->contact}}">
                                @endauth
                            </div>
                            <div class="form-group">
                                @guest
                                    <textarea data-toggle="modal" href="#myModal" class="form-control query_layout_detail" type="textarea" id="message" placeholder="Details of your requirments" maxlength="500" readonly></textarea>
                                @endguest
                                @auth
                                    <textarea class="form-control query_layout_detail" type="textarea" id="message" placeholder="Details of your requirments" maxlength="500"></textarea>
                                @endauth

                                <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                            </div>
                        </form>

                        <div class="text-center">
                            <button type="button" id="submit" name="submit" form="queryForm" class="btn btn-primary">Send for query & Get a Call</button>

                            <button type="button" name="button" class="btn btn-danger ml-1" onclick="event.preventDefault();document.getElementById('wishlist').submit();">
                                <img src="{{ asset('img/heart.png') }}" height="20" alt="" data-toggle="tooltip" data-placement="top" title="Add to Wish List">
                            </button>
                        </div>
                        <!-- /.text-center -->

                        {!! Form::open(['url' => route('wishlist.store'), 'method' => 'post', 'id' => 'wishlist']) !!}
                        @if (auth()->check())
                            {!! Form::hidden('user_id', auth()->id(), ['id' => 'user_id']) !!}
                        @endif

                        {!! Form::hidden('catagory_id', $datas->catagory_id, ['id' => 'catagory_id']) !!}
                        {!! Form::hidden('vendor_id', $datas->id, ['id' => 'vendor_id']) !!}
                        {!! Form::close() !!}
                    </div>

                    {{-- Leave Your Number --}}
                    {{-- @if (\Session::has('success'))
                    <div id="success" class="text-center">
                    <p>{!! \Session::get('success') !!}</p>
                  </div>
                @else
                <button type="button" class="btn btn-secondary col-md-12" id="leaveNum">Leave A Number</button>
                <div id="leavePhone" style="display:none">
                {!! Form::open(['route'=>'savePhone', 'method' => 'post']) !!}
                <input type="hidden" name="catagory_id" value="{{$catagorydata->id}}">
                <input type="hidden" name="vendor_id" value="{{$datas->id}}">
                <input type="text" name="phone" value="" class="phoneNum" placeholder="Leave your number">
                {!! Form::button('<span class="fa fa-check"></span>', ['type'=>'submit','class' => 'btn btn-secondary levphn']) !!}
                {!! Form::close() !!}
              </div>
            @endif --}}

                </div>
            </div>

        @if ($agent->isMobile())
            <!-- About us row with tabbed content -->
                <div class="row mb-md-5 mt-3">
                    <div id="ajax-alert"></div>
                    <div class="col-4">
                        @if ((!empty($datas->logo) || $datas->logo != null) && file_exists($datas->logo))
                            <div class="avatar">
                                <img alt="" src="{{ asset($datas->logo) }}" class="img-fluid">
                            </div>
                        @else
                            <div class="avatar">
                                <img src="{{ asset('img/vendor-logo/vendor_logo_default.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <!-- /.avatar -->
                        @endif
                    </div>

                    <div class="col-8">
                        <div style="font-size: 20px; font-weight: 500; text-transform: uppercase;">{{ $datas->title }}
                            <small style="font-size: 14px; font-weight: 100;">| About Us</small>
                        </div>

                        @if (empty($datas->about_us))
                            <div class="text-justify">
                                {{ $datas->title }} has been in the event industry for a long time. They have been providing quality products and services with many positive reviews from satisfied customers. Their experience in the industry and professionalism is what sets them apart and makes them a top service provider in their respective category.
                            </div>
                            <!-- /.text-justify -->
                        @else
                            <div class="text-justify">
                                {!! $datas->about_us !!}
                            </div>
                            <!-- /.text-justify -->
                        @endif
                    </div>
                </div>
            @else
                <div id="ajax-alert"></div>
                <!-- About us row with tabbed content -->
                <div class="row mb-md-5 mt-3">
                    <div class="col-2 text-center">
                        @if ((!empty($datas->logo) || $datas->logo != null) && file_exists($datas->logo))
                            <div class="avatar">
                                <img alt="" src="{{ asset($datas->logo) }}">
                            </div>
                        @else
                            <div class="avatar">
                                <img src="{{ asset('img/vendor-logo/vendor_logo_default.jpg') }}" alt="">
                            </div>
                            <!-- /.avatar -->
                        @endif
                    </div>

                    <div class="col-10 vendor-summary">
                        <h3>{{$datas->title}}
                            <small> | About Us</small>
                        </h3>
                        <div id="summary">
                            <p class="collapse text-justify" id="collapseSummary">
                                @if (empty($datas->about_us))
                                    {{ $datas->title }} has been in the event industry for a long time. They have been providing quality products and services with many positive reviews from satisfied customers. Their experience in the industry and professionalism is what sets them apart and makes them a top service provider in their respective category.
                                @else
                                    {!! $datas->about_us !!}
                                @endif
                            </p>
                            <a class="collapsed" data-toggle="collapse" href="#collapseSummary" aria-expanded="false" aria-controls="collapseSummary"></a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Parallax section with all the other feature -->
    <section class="page-section pricing" style="background-image: url({{asset($catagorydata->layout_img)}});">
        <div class="container wow fadeIn mt-4 mb-4 mt-sm-4 mb-sm-4 mt-md-5 mb-md-5 mt-lg-5 mb-lg-5 feature">
            <div class="row text-center">
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 mt-3 mt-sm-4 mt-md-5 mt-lg-5">
                    <a href="#">
                        <img src="{{asset($features->feature1_img)}}" class="subservice" alt="Industry Experience">
                    </a>

                    <p class="vendor-point-title">{{$features->feature1_title}}</p>

                    <p class="vendor-point-subtitle">{{$fdetails->feature_1}}</p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 mt-3 mt-sm-4 mt-md-5 mt-lg-5">
                    <a href="#">
                        <img src="{{asset($features->feature2_img)}}" class="subservice" alt="Location">
                    </a>

                    <p class="vendor-point-title">{{$features->feature2_title}}</p>

                    <p class="vendor-point-subtitle">{{$fdetails->feature_2}} Years</p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 mt-3 mt-sm-4 mt-md-5 mt-lg-5">
                    <a href="#">
                        <img src="{{asset($features->feature3_img)}}" class="subservice" alt="Home Service">
                    </a>

                    <p class="vendor-point-title">{{$features->feature3_title}}</p>

                    <p class="vendor-point-subtitle">{{$fdetails->feature_3}}</p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 mt-3 mt-sm-4 mt-md-5 mt-lg-5">
                    <a href="#">
                        <img src="{{asset($features->feature4_img)}}" class="subservice" alt="Booking Method">
                    </a>

                    <p class="vendor-point-title">{{$features->feature4_title}}</p>

                    <p class="vendor-point-subtitle">{{$fdetails->feature_4}}</p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 mt-3 mt-sm-4 mt-md-5 mt-lg-5">
                    <a href="#">
                        <img src="{{asset($features->feature5_img)}}" class="subservice" alt="Book Before">
                    </a>

                    <p class="vendor-point-title">{{$features->feature5_title}}</p>

                    <p class="vendor-point-subtitle">{{$fdetails->feature_5}}</p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 mt-3 mt-sm-4 mt-md-5 mt-lg-5">
                    <a href="#">
                        <img src="{{asset($features->feature6_img)}}" class="subservice" alt="Outside City Service">
                    </a>

                    <p class="vendor-point-title">{{$features->feature6_title}}</p>

                    <p class="vendor-point-subtitle">{{$fdetails->feature_6}}</p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 mt-3 mt-sm-4 mt-md-5 mt-lg-5">
                    <a href="#">
                        <img src="{{asset($features->feature7_img)}}" class="subservice" alt="Service Type">
                    </a>

                    <p class="vendor-point-title">{{$features->feature7_title}}</p>

                    <p class="vendor-point-subtitle">{{$fdetails->feature_7}}</p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 mt-3 mt-sm-4 mt-md-5 mt-lg-5">
                    <a href="#">
                        <img src="{{asset($features->feature8_img)}}" class="subservice" alt="Service Time">
                    </a>

                    <p class="vendor-point-title">{{$features->feature8_title}}</p>

                    <p class="vendor-point-subtitle">{{$fdetails->feature_8}}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Package details Tabs -->
    <section class="page-section services mt-md-2">
        <div class="container">
            <!-- Packages Details -->
            <div class="text-center wow fadeIn">
                <h3>Our Packages</h3>
                <hr class="colored">
            </div>

            <div class="row mt-3">
                <!-- inner-row -->
                <div class="col-lg-5 @if($agent->isMobile()) mb-3 @endif">
                    <!-- Accordian of Packages photography -->
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        @foreach ($datas->packages as $package)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="photopack">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="{{'#'.$package->id}}" aria-expanded="true" aria-controls="collapseOne">
                                            {{$package->title}} - BDT {{$package->price}}
                                        </a>
                                    </h4>
                                </div>
                                <div id="{{$package->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="photopack">
                                    <div class="panel-body">
                                        <p>
                                            {!! nl2br(e($package->description)) !!}
                                        </p>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- /- End of Accordian of Packages - single -->
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach ($datas->packages as $package)
                                    @if ($loop->first)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$package->id}}" class="active"></li>
                                    @else
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$package->id}}"></li>
                                    @endif
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach ($datas->packages as $package)
                                    @if ($loop->first)
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{asset($package->image)}}" alt="{{$package->title}}">
                                        </div>
                                    @else
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{asset($package->image)}}" alt="{{$package->title}}">
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>


                    </div>

                </div>
            </div>
            <!-- / end package details -->
        </div>
        <!-- /End Container -->
    </section>
    <!-- / end of package section -->

    <!-- Image Gallery -->
    <section class="page-section services pt-3">
        <div class="container">
            <div class="text-center wow fadeIn">
                <h3>Our Gallery</h3>
                <hr class="colored">
            </div>

            <div class="row mt-2">
                <div class="col-12">
                    <!-- Gallery Start -->
                    <div class="img-gallery gal">
                        @foreach ($datas->images as $image)
                            <a href="{{asset($image->image_locations)}}"><img src="{{asset($image->image_locations)}}" alt="" class="img-fluid"></a>
                        @endforeach
                    </div>
                    <!--/ Gallery Ends -->
                </div>
                <!-- /.col-12 -->
            </div>

        </div>

    </section>
    <!-- End Image Gallery -->

    <!-- Youtube Gallery -->
    {{-- <section class="page-section services">
    <div class="container">
    <div class="text-center wow fadeIn">
    <h3>Our Videos</h3>
    <hr class="colored">
    </div>

    <div class="row mt-2">
    <div class="col-lg-12">

    </div>
    </div>
    </div>

    </section> --}}
    <!-- End Youtube Gallery -->

    <!-- Review Rating -->
    <section class="page-section mt-3 mt-md-4 mt-lg-4">
        <div class="container">
            <div class="text-center wow fadeIn">
                <h3>Your Opinion</h3>
                <hr class="colored">
            </div>

            <div class="row mt-md-4">
                <!-- Rating Avarage -->
                <div class="col-lg-6" id="review-bar">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-4 text-center">
                                    <h1 class="rating-num">{{$opinion->avgtotal}}</h1>

                                    <div class="rating">
                                        {{-- <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span> --}}
                                        @foreach(range(1,5) as $i)
                                            @if($opinion->avgtotal >0)
                                                @if ($opinion->avgtotal >0.5)
                                                    <span class="fa fa-star"></span>
                                                @else
                                                    <span class="fa fa-star-half-o"></span>
                                                @endif
                                            @else
                                                <span class="fa fa-star-o"></span>
                                            @endif
                                            @php $opinion->avgtotal--; @endphp

                                        @endforeach
                                    </div>
                                    <div class="rating-total">
                                        <span class="fa fa-user"></span> {{$opinion->total}} total
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="row rating-desc">
                                        <div class="col-lg-3 text-right progress-data">
                                            <span class="fa fa-star"></span>5
                                        </div>
                                        <div class="col-lg-9 mb-2">
                                            <div class="progress progress-striped">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="20"
                                                     aria-valuemin="0" aria-valuemax="100"
                                                     style="width: {{$opinion->rate5}}%">
                                                    <span class="sr-only">{{$opinion->rate5}}0%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end 5 -->
                                        <div class="col-lg-3 text-right progress-data">
                                            <span class="fa fa-star"></span>4
                                        </div>
                                        <div class="col-lg-9 mb-2">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="20"
                                                     aria-valuemin="0" aria-valuemax="100"
                                                     style="width: {{$opinion->rate4}}%">
                                                    <span class="sr-only">{{$opinion->rate4}}%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end 4 -->
                                        <div class="col-lg-3 text-right progress-data">
                                            <span class="fa fa-star"></span>3
                                        </div>
                                        <div class="col-lg-9 mb-2">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="20"
                                                     aria-valuemin="0" aria-valuemax="100"
                                                     style="width: {{$opinion->rate3}}%">
                                                    <span class="sr-only">{{$opinion->rate3}}%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end 3 -->
                                        <div class="col-lg-3 text-right progress-data">
                                            <span class="fa fa-star"></span>2
                                        </div>
                                        <div class="col-lg-9 mb-2">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="20"
                                                     aria-valuemin="0" aria-valuemax="100"
                                                     style="width: {{$opinion->rate2}}%">
                                                    <span class="sr-only">{{$opinion->rate2}}%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end 2 -->
                                        <div class="col-lg-3 text-right progress-data">
                                            <span class="fa fa-star"></span>1
                                        </div>
                                        <div class="col-lg-9 mb-2">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="80"
                                                     aria-valuemin="0" aria-valuemax="100"
                                                     style="width: {{$opinion->rate1}}%">
                                                    <span class="sr-only">{{$opinion->rate1}}%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end 1 -->
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Rating Avarage -->
                <!-- Rating Bar with Rating -->
                <div class="col-lg-6" id="review-box">
                    <!-- Review Section -->
                    <div class="card review">
                        <div class="card-body">
                            <div class="text-right">
                                <div style="color:#ffffff;float:left;font-size:1.2em; font-weight:400;padding:10px;"
                                     id="review-title">Your opinion matters
                                </div>
                                @auth
                                    <a class="btn btn-primary review" href="#reviews-anchor" id="open-review-box">Leave a
                                        Review</a>
                                @endauth
                                @guest
                                    <a class="btn btn-primary review" href="#myModal" data-target="#myModal"
                                       data-toggle="modal">Login to leave a review</a>
                                @endguest
                            </div>

                            <div class="row" id="post-review-box" style="display:none;">
                                <div class="col-md-12">
                                    <form accept-charset="UTF-8" action="{{route('rating')}}" method="post"
                                          id="review-form">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="vendor_id" value="{{$datas->id}}">
                                        <input id="ratings-hidden" name="rating" type="hidden" required>
                                        <textarea class="form-control animated" cols="50" id="new-review" name="comment"
                                                  placeholder="Enter your review here..." rows="5"></textarea>

                                        <div class="text-right mt-3">
                                            <div class="stars starrr" data-rating="0"></div>
                                            <a class="btn btn-danger btn-sm review" href="#" id="close-review-box"
                                               style="display:none; margin-right: 10px;"><span class="fa fa-remove"></span>Cancel</a>
                                            <button class="btn btn-success btn-sm review" type="submit">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Review Section -->
                </div>
                <!-- End Rating Bar with Rating -->
            </div>
            <!-- /end of row-->

            <!-- Reviews Row -->
            <div class="row mt-4">

                <div id="owl-demo" class="owl-carousel owl-theme review" style="display: none;">
                    @foreach ($reviews as $review)
                        <div class="item old-review">

                            <div class="card">
                                <div class="card-body">
                                    <p class="old-review-title">{{$review->user->name or ""}}</p>

                                    <div class="rating">
                                        @for ($i=0; $i < $review->rating; $i++)
                                            <span class="fa fa-star"></span>
                                        @endfor
                                    </div>
                                    <p id="review-body">{{$review->comment}}</p>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
            <!-- /end of Reviews Row -->
        </div>

    </section>
    <!-- /End Review Rating -->

    <!-- Suggested Product-->
    {{-- <section class="page-section mb-4">
    <div class="container">
    <div class="text-center wow fadeIn">
    <h3>You May Also Like</h3>
    <hr class="colored">
    </div>

    <div class="row mt-4">
    <div class="col-lg-12">
    <div class="row related-product">
    <div class="col-md-4">
    <div class="thumbnail">
    <img src="http://placehold.it/350x222" alt="">
    <div class="caption">
    <h4><a href="#">First Product</a></h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur scelerisque, neque sodales pellentesque tempus</p>
    </div>
    <div class="ratings">
    <p class="pull-right">15 reviews</p>
    <p>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star-o"></span>
    <span class="fa fa-star-o"></span>
    </p>
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="thumbnail">
    <img src="http://placehold.it/350x222" alt="">
    <div class="caption">
    <h4><a href="#">First Product</a></h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur scelerisque, neque sodales pellentesque tempus</p>
    </div>
    <div class="ratings">
    <p class="pull-right">15 reviews</p>
    <p>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star-o"></span>
    </p>
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="thumbnail">
    <img src="http://placehold.it/350x222" alt="">
    <div class="caption">
    <h4><a href="#">First Product</a></h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur scelerisque, neque sodales pellentesque tempus</p>
    </div>
    <div class="ratings">
    <p class="pull-right">15 reviews</p>
    <p>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    </p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </section> --}}
    <!-- / End Suggested Product-->
    {{-- @include('extra.phonemodal') --}}
    @include('extra.query-step')

@endsection

@push('scripts')
    <!-- review Section -->
    <script src="{{asset('js/review.js')}}"></script>

    <script type="text/javascript">

        function myFunction() {
            if (true) {
                return true;
            } else {
                return false;
            }
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
        });
        $('#submit').click(function(e) {
            e.preventDefault();
            var catagory = $('#catagory_id').val();
            var vendor = $('#vendor_id').val();
            var date = $('#date').val();
            var mess = $('#message').val();
            var num = $('#phn').val();

            // alert(catagory + ',' + vendor + ',' + date + ',' + time + ',' + pack + ',' + mess);
            $.ajax({
                type: 'POST',
                url: '/vendors/' + catagory + '/' + vendor,
                data: {
                    catagory: catagory,
                    vendor: vendor,
                    date: date,
                    mess: mess,
                    num: num,
                },
                success: function(response) {
                    // $("#queryCount").text(response.totalquery);
                    // $("#queryForm")[0].reset();

                    console.log(response);

                    if (response.flash_message) {
                        $('#inboxmess').text(response.totalinbox);
                        $('#queryForm')[0].reset();
                        $('#query-step').modal('show');
                        $('#ajax-alert').html('<div class="alert alert-custom mt-3" >' + response.flash_message + '</div>');
                    } else {
                        $('#queryForm')[0].reset();
                        $('#ajax-alert').html('<div class="alert alert-danger mt-3" >' + response.flash_messages + '</div>');
                    }

                },
                error: function(error) {

                },
                statusCode: {
                    422: function() {
                        $('#ajax-alert').
                            html(
                                '<div class="alert alert-danger alert-dismissible mt-3 fade show"> <button type="button" class="close" data-dismiss="alert">&times;</button> Date and Number is required</div>');
                    },
                    401: function(data) {
                        $('#myModal').modal('show');
                    },
                },
            });
        });
        // $("#leaveNum").click(function() {
        //   $("#leaveNum").hide();
        //   $('#leavePhone').show();
        // });

        /*$("#date").datetimepicker({
            minView: 2,
            maxView: 2,
            weekStart: 1,
            autoclose: 1,
            todayHighlight: 1,
            format: 'dd-mm-yyyy'
        });*/
        $('#date').datepick({
            multiSelect: 3,
            monthsToShow: 1,
            showTrigger: '#calImg',
            dateFormat: 'dd-mm-yyyy',
            minDate: 0,
        });

        var owl = $('#owl-demo');

        owl.owlCarousel({
            items: 3, //10 items above 1000px browser width
            autoPlay: 2000,
            pagination: true,
            itemsDesktop: [1000, 4], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 2], // betweem 900px and 601px
            itemsTablet: [600, 1],
            stopOnHover: true, //2 items between 600 and 0
            itemsMobile: true, // itemsMobile disabled - inherit from itemsTablet option
        });

        $('#characterLeft').text('500 characters left');
        $('#message').keydown(function() {
            var max = 500;
            var len = $(this).val().length;
            if (len >= max) {
                $('#characterLeft').text('You have reached the limit');
                $('#characterLeft').addClass('red');
                $('#btnSubmit').addClass('disabled');
            } else {
                var ch = max - len;
                $('#characterLeft').text(ch + ' characters left');
                $('#btnSubmit').removeClass('disabled');
                $('#characterLeft').removeClass('red');
            }
        });
        $('div.alert').delay(2000).slideUp(900);


    </script>
@endpush
