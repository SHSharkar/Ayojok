@extends('layouts.app')

@section('content')
    @php $agent = new Jenssegers\Agent\Agent() @endphp

    <!-- Masthead -->
    <header class="masthead" style="background-image:url({{ asset('img/backgrounds/header_bg_index.jpg') }});height:auto;background-position:center;background-repeat:no-repeat;background-size:cover">
        <div class="scroll-down">
            <div class="logos pt-4">
                <img class="logo" src="{{ asset('img/logo_final.png') }}" alt="">

                <p class="tagline" style="">Bangladesh's first & biggest online event booking service</p>
            </div>

            <div class="row pb-3">
                <div class="col-10 offset-1 col-sm-6 offset-sm-3 col-md-4 offset-md-4 text-center">

                    <div class="mb-3">
                        {{ Form::open(['route'=>'find', 'method' => 'post'])}}
                        <div class="input-group index-top-search-bar">
                            <select name="catagory" id="catagory" class="selectpicker" data-live-search="true" data-width="75%" title="I am looking">
                                @unless (empty($vendors))
                                    @foreach ($vendors as $vendor)
                                        <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                    @endforeach
                                @endunless

                                @unless (empty($services))
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                    @endforeach
                                @endunless
                            </select>
                            <div class="input-group-append">
                                <input class="btn search-button" type="submit" value="Go">
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>

                    @if ($agent->isMobile())
                        <div class="row">
                            <div class="col-4 col-lg-4">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <span class="header-write">Find Services</span>
                            </div>
                            <div class="col-4 col-lg-4">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <span class="header-write">Fast and Easy</span>
                            </div>
                            <div class="col-4 col-lg-4">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <span class="header-write">Zero Hassle</span>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <ul style="padding: 0; margin: 0; list-style: none; display: flex;">
                                        <li style="margin-right: 65px;"><i class="fa fa-check" aria-hidden="true"></i>
                                            <span class="header-write">Find Services</span>
                                        </li>
                                        <li style="margin-right: 65px;"><i class="fa fa-check" aria-hidden="true"></i>
                                            <span class="header-write">Fast and Easy</span>
                                        </li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i> <span class="header-write">Zero Hassle</span></li>
                                    </ul>
                                </div>
                                <!-- /.text-center -->
                            </div>
                            <!-- /.col-12 -->
                        </div>
                        <!-- /.row -->
                    @endif
                </div>
            </div>
        </div>
    </header>

    <!-- /End FB Profile Style -->
    <section class="bg-white pt-3">
        <div class="container-fluid">
            <div class="row row pt-3 pb-3">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="fb-profile-text" style="text-align:center;">
                        <p class="fb-profile-text1">Ayojok brings wide selection of trusted event service providers for your desired budget and occasion.<br>Save time & money as you browse all kinds of event related services anywhere, anytime.
                        </p>

                        <p class="tag1">How it works? Simple, easy <span class="andSymbl">&</span> fast!</p>

                        <div class="row scroll-down" style="text-align:center;">
                            <div class="col-12 col-sm-4 col-lg-4">
                                <div class="content_ico">
                                    <a href="https://www.ayojok.com/how-it-works">
                                        <img class="icon1" src="{{asset('img/icons/mouse.png')}}">
                                        <span class="how_it_works_icon">Choose services</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4 col-lg-4">

                                <div class="content_ico2">
                                    <a href="https://www.ayojok.com/how-it-works">

                                        <img class="icon" src="{{asset('img/icons/phone.png')}}">
                                        <span class="how_it_works_icon">Get notified about availability</span>
                                    </a>

                                </div>
                            </div>

                            <div class="col-12 col-sm-4 col-lg-4">
                                <div class="content_ico3">
                                    <a href="https://www.ayojok.com/how-it-works">
                                        <img class="icon" src="{{asset('img/icons/calender_v2.png')}}">
                                        <span class="how_it_works_icon">Confirm</span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- /End FB Profile Style -->

    <!-- Values Section -->

    <!-- Our Service -->
    <section class="page-section pricing mt-3">
        <div class="wow container fadeIn mb-4">
            <div class="text-center wow fadeIn">
                <p style="color:black; font-size:26px;">Find services for your every budget</p>

                <p style="color:black; font-size:18px;">Venues, catering, decoration, photographers & more</p>
            </div>
            <div class="row text-center justify-content-md-center">
                <div class="col-6 col-sm-6 col-md-3 mb-3">
                    <div class="item">
                        <a href="{{url('vendors/'.$catagory ='venue')}}">
                            <div class="img-wrapper">
                                <h4 class="fontOverImage">Venue</h4>
                                <img src="{{asset('img/final/Venue.jpg')}}" class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 mb-3">
                    <div class="item">
                        <a href="{{url('vendors/'.$catagory ='catering')}}">
                            <div class="img-wrapper">
                                <h4 class="fontOverImage">Catering</h4>
                                <img src="{{asset('img/final/catering.jpg')}}"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                        {{--
                                            <a href="{{url('vendors/'.$catagory ='photography & cinematography')}}"></a>
                        --}}
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 mb-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='photography_and_cinematography')}}">

                            <div class="img-wrapper">
                                <h4 class="fontOverImage">Photography</h4>
                                <img src="{{asset('img/final/Photography.jpg')}}"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 mb-3">
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

            <!-- Sub Service Start-->
            <div class="row text-center">
                <div class="col-6 col-sm-6 col-md-3 mb-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='invitation_cards')}}">

                            <div class="img-wrapper">
                                <h4 class="fontOverImage">Invitation Cards</h4>
                                <img src="{{asset('img/final/invitation card.jpg')}}"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 mb-3">
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
                <div class="col-6 col-sm-6 col-md-3 mb-3">
                    <div class="item">

                        <a href="{{url('vendors/'.$catagory ='makeup_artist')}}">

                            <div class="img-wrapper">
                                <h4 class="fontOverImage">Makeup Artist</h4>
                                <img src="{{asset('img/final/Make UP.jpg')}}"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 mb-3">
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

            <div class="row text-center">
                <div class="col-6 col-sm-6 col-md-3 mb-3">
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
                <div class="col-6 col-sm-6 col-md-3 mb-3">
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

                {{--Services start--}}
                <div class="col-6 col-sm-6 col-md-3 mb-3">
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

                <div class="col-6 col-sm-6 col-md-3 mb-3">
                    <div class="item">

                        <a href="{{url('services/'.$catagory ='light_&_sound')}}">

                            <div class="img-wrapper">
                                <h4 class="fontOverImage">light & sound</h4>
                                <img src="{{asset('img/final/Lighting.jpg')}}"
                                     class="img-fluid mx-auto zoom " alt="">
                            </div>
                        </a>
                    </div>
                </div>

            </div>


            <div class="row text-center justify-content-md-center" id="hidden_row" style=" display: none">
                <div class="col-6 col-sm-6 col-md-3 mb-3">
                    <div class="item">

                        <a href="{{url('services/'.$catagory ='holud_snacks')}}">

                            <div class="img-wrapper">
                                <h4 class="fontOverImage">Holud & Snacks</h4>
                                <img src="{{asset('img/final/Holud Snacks.jpg')}}"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>

                    </div>

                </div>
                <div class="col-6 col-sm-6 col-md-3 mb-3">
                    <div class="item">

                        <a href="{{url('services/'.$catagory ='dala_kula')}}">

                            <div class="img-wrapper">
                                <h4 class="fontOverImage">Dala Kula</h4>
                                <img src="{{asset('img/final/Dala-Kula.jpg')}}"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 mb-3">
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
                <div class="col-6 col-sm-6 col-md-3 mb-3">
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

            <div class="row text-center justify-content-md-center" id="hidden_row2" style="display: none;">
                <div class="col-6 col-sm-6 col-md-3 mb-3">
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
                <div class="col-6 col-sm-6 col-md-3 mb-3">
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
                <div class="col-6 col-sm-6 col-md-3 mb-3">
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
                <div class="col-6 col-sm-6 col-md-3 mb-3">
                    <div class="item">
                        <a href="{{url('vendors/'.$catagory ='bridal_outfit')}}">
                            <div class="img-wrapper">
                                <h4 class="fontOverImage">Bridal Outfits</h4>
                                <img src="{{asset('img/final/bridal.jpg')}}"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                    </div>
                </div>

                {{-- <div class="col-6 col-sm-6 col-md-3 mb-3">
                     <div class="item">

                         <a href="{{url('services/'.$catagory ='holud_dress')}}">

                             <div class="img-wrapper">
                                 <h4 class="fontOverImage">Holud Dresses</h4>
                                 <img src="{{asset('img/final/Holud.jpg')}}"
                                      class="img-fluid mx-auto zoom" alt="">
                             </div>
                         </a>
                     </div>
                 </div>--}}

                {{--<div class="col-6 col-sm-6 col-md-3 mb-3">
                    <div class="item">

                        <a href="{{url('services/'.$catagory ='wedding')}}">

                            <div class="img-wrapper">
                                <h4 class="fontOverImage">Wedding Accessories</h4>
                                <img src="{{asset('img/final/Wedding Accessories.jpg')}}"
                                     class="img-fluid mx-auto zoom" alt="">
                            </div>
                        </a>
                    </div>
                </div>--}}
            </div>


            <!-- ./Sub Service Ends-->
            {{--<center><a href="{{url('all_vendors')}}" class="btn btn-danger rounded btn-sm custom-btn mt-3"
                       style="color: white;padding: 1% 5%;text-transform: none;background-color: #810D28">Load more</a>
            </center>--}}

            <div class="text-center">
                <a href="javascript:void(0);" class="btn btn-danger rounded btn-sm custom-btn mt-3" style="color: white;padding: 1% 5%;text-transform: none;background-color: #810d28" onclick="makeDisplayBlock()" id="btn_loadMore">More</a>
            </div>
        </div>

    </section>

    <!-- Event Section -->
    <!-- <section class="page-section bg-light">
    <div class="container text-center wow fadeIn mt-4 mb-4">
      <div class="row mt-4">
        <div class="col-md-3 wow fadeIn event-sec" data-wow-delay=".2s">
          <a href="{{url('event-coordinator')}}">
            <div class="hovereffect" style="cursor: pointer;">
              <img class="img-fluid" src="img/service1.jpg" alt="">

              <div class="overlay">
                <h2>Checking</h2>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3 wow fadeIn" data-wow-delay=".2s">
          <a href="{{url('event-coordinator')}}">
            <div class="hovereffect" style="cursor: pointer;">
              <img class="img-fluid" src="img/service2.jpg" alt="">
              <div class="overlay">
                <h2>Monitoring</h2>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3 mb-3 wow fadeIn" data-wow-delay=".2s">

          <div class="event-dec">
            <div style="text-align:center;">
              <h2>Event </h2><h3>Coordinator</h3>
            </div>
            <ul class="servicelist list-group">
              <li class="list-group">Checking</li>
              <li class="list-group">Monitoring</li>
              <li class="list-group">Assuring</li>
            </ul>
          </div>

          <a href="{{url('event-coordinator')}}" class="btn btn-proceed mt-5">Learn More</a>

        </div>
        <div class="col-md-3 wow fadeIn" data-wow-delay=".2s" >
          <a href="{{url('event-coordinator')}}">
            <div class="hovereffect" style="cursor: pointer;">
              <img class="img-fluid" src="img/service3.jpg" alt="">
              <div class="overlay">
                <h2>Assuring</h2>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section> -->

    <!-- Hours Section - Repurposed from Pricing Table -->
    <!-- <section class="page-section pricing" id="hours" style="background-image: url('img/backgrounds/bg-pricing.jpg')">
      <div class="container wow fadeIn mt-4 mb-4">
        <div class="text-center">
          <h2>Planning Tools</h2>
          <hr class="colored">
          <p>Plan your wedding the right way with our effective planning tools</p>
        </div>
        <div class="row"> -->
    <!-- Pricing Table 1 -->
    <!-- <div class="col-md-4">
          <div class="pricing-item">
            @if (Auth::check())
        <a href="{{route('mychecklist',Auth::user()->id)}}">
              <img src="img/planning-tools/my-checklist.png" style="width:25%;margin:3em;" alt="">
              <h4 class="mb-5">My Checklist</h4>
            </a>
            @else
        <a href="#myModal" data-toggle="modal">
          <img src="img/planning-tools/my-checklist.png" style="width:25%;margin:3em;" alt="">
          <h4 class="mb-5">My Checklist</h4>
        </a>
        @endif

            </div>
          </div> -->
    <!-- Pricing Table 2 -->
    <!-- <div class="col-md-4">
          <div class="pricing-item">
            @if (Auth::check())
        <a href="{{ route('myvendors', Auth::user()->id) }}">
              <img src="img/planning-tools/my-vendor.png" style="width:25%;margin:3em;" alt="">
              <h4 class="mb-5">My Vendors</h4>
            </a>
            @else
        <a href="#myModal" data-toggle="modal">
          <img src="img/planning-tools/my-vendor.png" style="width:25%;margin:3em;" alt="">
          <h4 class="mb-5">My Vendors</h4>
        </a>
        @endif
            </div>
          </div> -->
    <!-- Pricing Table 3 -->
    <!-- <div class="col-md-4">
          <div class="pricing-item">
            @if (Auth::check())
        <a href="{{route('mybudget')}}">
              <img src="img/planning-tools/budget-manager.png" style="width:25%;margin:3em;" alt="">
              <h4 class="mb-5">Budget Manager</h4>
            </a>
            @else
        <a href="#myModal" data-toggle="modal">
          <img src="img/planning-tools/budget-manager.png" style="width:25%;margin:3em;" alt="">
          <h4 class="mb-5">Budget Manager</h4>
        </a>
        @endif
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- plaaning tools new UI -->
    <section class="page-section pricing" id="hours" style="background-color: white;color: #323232">
        <div class="container wow fadeIn @if($agent->isMobile()) mt-3 @else mt-5 @endif">
            <div class="row">
                <!-- Pricing Table 1 -->
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="pricing-item_1 plan_tool_rectangle">
                        {{--<img class="photo plan_tool_rectangle" src="">--}}

                        <div class="pricing_content">
                            <h4 class="pricing_title"> Save time & money<br> and be stress free </h4>

                            <p class="pricing_para" style="text-transform: none">Our Event Coordinator <br>
                                gives you control <br>
                                and supervision over <br>
                                your events without<br>
                                hassle and stress. </p>
                            <a href="{{route('event_coordinator')}}" class="btn btn-danger rounded btn-sm custom-btn" style="color: white;padding: 1% 5%;text-transform: none;background-color: #810D28">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="pricing-item_2 plan_tool_rectangle pricing_item_2">
                        {{--<img class="photo plan_tool_rectangle" src="">--}}

                        <div class="pricing_content">
                            <h4 class="pricing_title" @if ($agent->isMobile()) style="font-size:18px;padding:6px;border-radius:3px;font-weight:600;text-align:center!important;background:rgba(255, 255, 255, .85);" @endif> @if($agent->isMobile()) Easy Planning with easy tools @else Easy Planning
                                <br> with easy tools @endif</h4>

                            <p class="pricing_para" style="text-transform: none; @if ($agent->isMobile()) font-size:16px;padding:6px;border-radius:3px;font-weight:500;background:rgba(255, 255, 255, .85); @endif">Plan your wedding the right way
                                <br>
                                with our effective free planning tools. <br>
                                Manage checklists, vendors,<br>
                                budgets and more.<br>
                            </p>

                            {{--<a href="#" class="btn btn-danger rounded btn-sm custom-btn"
                               style="color: white;padding: 1% 2%;text-transform: none;background-color: #810D28">Take me to
                                tools</a>--}}

                            @if ($agent->isMobile())
                                <div class="row easy-planning-with-easy-tools text-left">
                                    @if (Auth::check())
                                        <div class="col-6 col-sm-6 mb-3">
                                            <div class="custom-bg">
                                                <a href="{{route('mychecklist',Auth::user()->id)}}">
                                                    <img class="icon2" src="{{asset('img/planning-tools/my-checklist.png')}}"> My Checklist
                                                </a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-6 col-sm-6 mb-3">
                                            <div class="custom-bg">
                                                <a href="#myModal" data-toggle="modal">
                                                    <img class="icon2" src="{{asset('img/planning-tools/my-checklist.png')}}"> My Checklist
                                                </a>
                                            </div>
                                        </div>
                                    @endif

                                    @if (Auth::check())
                                        <div class="col-6 col-sm-6 mb-3">
                                            <div class="custom-bg">
                                                <a href="{{ route('myvendors', Auth::user()->id) }}">
                                                    <img class="icon2" src="{{asset('img/planning-tools/my-vendor.png')}}"> My Vendors
                                                </a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-6 col-sm-6 mb-3">
                                            <div class="custom-bg">
                                                <a href="#myModal" data-toggle="modal">
                                                    <img class="icon2" src="{{asset('img/planning-tools/my-vendor.png')}}"> My Vendors
                                                </a>
                                            </div>
                                        </div>
                                    @endif

                                    @if (Auth::check())
                                        <div class="col-6 col-sm-6 mb-3">
                                            <div class="custom-bg">
                                                <a href="{{route('mybudget')}}">
                                                    <img class="icon2" src="{{asset('img/planning-tools/budget-manager.png')}}"> My Budget
                                                </a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-6 col-sm-6 mb-3">
                                            <div class="custom-bg">
                                                <a href="#myModal" data-toggle="modal">
                                                    <img class="icon2" src="{{asset('img/planning-tools/budget-manager.png')}}"> My Budget
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                {{-- End of Mobile Version --}}
                            @else
                                <div class="row planning_tools_icons center-block">
                                    @if (Auth::check())
                                        <div class="col-sm-4 planning_tools_icon">
                                            <a href="{{route('mychecklist',Auth::user()->id)}}">
                                                <img class="icon2" src="{{asset('img/planning-tools/my-checklist.png')}}">

                                                <p class="mt-3">My <br> Checklist</p>
                                            </a>
                                        </div>
                                    @else
                                        <div class="col-sm-4 planning_tools_icon">
                                            <a href="#myModal" data-toggle="modal">
                                                <img class="icon2" src="{{asset('img/planning-tools/my-checklist.png')}}">

                                                <p class="mt-3">My <br> Checklist</p>
                                            </a>
                                        </div>
                                    @endif

                                    @if (Auth::check())
                                        <div class="col-sm-4 planning_tools_icon">
                                            <a href="{{ route('myvendors', Auth::user()->id) }}">
                                                <img class="icon2" src="{{asset('img/planning-tools/my-vendor.png')}}">

                                                <p class="mt-3">My <br> Vendors</p>
                                            </a>
                                        </div>
                                    @else
                                        <div class="col-sm-4 planning_tools_icon">
                                            <a href="#myModal" data-toggle="modal">
                                                <img class="icon2" src="{{asset('img/planning-tools/my-vendor.png')}}">

                                                <p class="mt-3">My <br> Vendors</p>
                                            </a>
                                        </div>
                                    @endif

                                    @if (Auth::check())
                                        <div class="col-sm-4 planning_tools_icon">
                                            <a href="{{route('mybudget')}}">
                                                <img class="icon2" src="{{asset('img/planning-tools/budget-manager.png')}}">

                                                <p class="mt-3">My <br> Budget</p>

                                            </a>
                                        </div>
                                    @else
                                        <div class="col-sm-4 planning_tools_icon">
                                            <a href="#myModal" data-toggle="modal">
                                                <img class="icon2" src="{{asset('img/planning-tools/budget-manager.png')}}">

                                                <p class="mt-3">My <br> Budget </p>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of new planning tools  -->

    <!-- Menu Gallery -->
    <section class="page-section mt-3" id="menu">
        <div class="container wow fadeIn mb-4">
            <div class="text-center">
                <p>
                    <span style="transform: scale(2, 1.3);font-size: 25px;font-weight: 200;font-family: 'Source Sans Pro', sans-serif;">Ideas and stories</span><br>Get your creative inspiration from current trend and tips.
                </p>
            </div>

            <div class="portfolio-gallery">
                @foreach ($items as $item)
                    <div class="item">

                        <div class="image">
                            <a href="{{ $item->get_link() }}" title="{{ $item->get_title() }}">


                                <div>

                                    <?php
                                    $sentence = $item->get_description();


                                    //echo $sentence;
                                    preg_match_all('~<img .*?src=["\']+(.*?)["\']+~', $sentence, $urls, PREG_SET_ORDER);
                                    if (isset($urls[0][1])) {
                                        $urls = $urls[0][1];
                                    } else {
                                        $urls = "https://www.blubirdinteractive.com/assets/img/image-not-found.jpg";
                                    }

                                    //echo $urls;
                                    ?>
                                    <img src="{{$urls}}" class="img-fluid  photo_rectangle photo_idea_stories" alt="">
                                </div>
                            </a>

                        </div>
                        <p style="width:100%;" class="text-center txt">{{ $item->get_title() }}</p>
                    </div>


                @endforeach
                {{--
                  <div class="item">
                    <a href="#" class="gallery-link" title="Mini Croissants">
                      <div>
                        <h4>S2</h4>
                        <img src="img/stories/2.jpg" class="img-fluid mx-auto" alt="">
                      </div>
                    </a>
                  </div>
                  <div class="item">
                    <a href="#" class="gallery-link" title="Gourmet Sweet Cakes">
                      <div>
                        <h4>S3</h4>
                        <img src="img/stories/3.jpg" class="img-fluid mx-auto" alt="">
                      </div>
                    </a>
                  </div>
                  <div class="item">
                    <a href="#" class="gallery-link" title="Traditional Honey Cake">
                      <div>
                        <h4>S4</h4>
                        <img src="img/stories/4.jpg" class="img-fluid mx-auto" alt="">
                      </div>
                    </a>
                  </div>
                  <div class="item">
                    <a href="#" class="gallery-link" title="Rosemary Breadsticks and Salami Rolls">
                      <div>
                        <h4>S5</h4>
                        <img src="img/stories/5.jpg" class="img-fluid mx-auto" alt="">
                      </div>
                    </a>
                  </div>
                  <div class="item">
                    <a href="#" class="gallery-link" title="Mini Croissants">
                      <div>
                        <h4>S6</h4>
                        <img src="img/stories/6.jpg" class="img-fluid mx-auto" alt="">
                      </div>
                    </a>
                  </div> --}}
            </div>

        </div>
    </section>
@endsection

@push('scripts')
    <script>
        function makeDisplayBlock() {
            document.getElementById('hidden_row').style.display = 'flex';
            document.getElementById('hidden_row2').style.display = 'flex';

            $('#btn_loadMore').hide();
        }
    </script>
@endpush
