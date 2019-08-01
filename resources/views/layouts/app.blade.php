<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134833729-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-134833729-1');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    {{--<title>{{ config('app.name', 'Ayojok | One Stop Solution for you event') }}</title>--}}
    <title>Ayojok | One Stop Solution for your event</title>
    <link rel="stylesheet" href="{{ mix('/css/primary.css') }}">
    <link rel="icon" href="{{asset('img/logo_final.png')}}" type="image/x-icon">
    @stack('css')
</head>
<body>

<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K2GSM38" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v3.2',
        });
    };
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat" attribution=setup_tool page_id="718944784960805" theme_color="#e5b15b"></div>

<div id="page-top">
@include('auth.login')
@include('auth.register')
@include('extra.leavenum')
@include('extra.thankyou')

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i> Menu
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <!-- Top Menu -updated -->
                <ul class="nav navbar-nav ">

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">{{--Home--}} <img class="logo_as_home" src="{{asset('img/logo_final.png')}}"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('how-it-works')}}">How it Works</a>
                    </li>
                    <li class="nav-item dropdown">
                        {{-- <a class="nav-link" href="{{url('our-services')}}">Ayojok Services</a> --}}
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                        <ul class="megamenu dropdown-menu scrollable-menu " id="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <div class="row">
                                    <div class="col-lg-3 menu_padding">
                                        <ul>
                                            <li><a href="{{url('services/'.$catagory ='vehicle')}}"> {{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/car.png')}}">--}} Vehicle</a></li>
                                            <li><a href="{{url('services/'.$catagory ='light_&_sound')}}">{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/light.png')}}">--}} Light & Sound</a>
                                            </li>
                                            <li><a href="{{url('services/'.$catagory ='holud_snacks')}}">{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/holud_snacks.png')}}">--}} Holud
                                                    Snacks</a></li>
                                            <li><a href="{{url('services/'.$catagory ='dala_kula')}}">{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/car.png')}}">--}} Dala Kula</a></li>
                                            {{--Secend edit--}}
                                            <li><a href="{{url('services/'.$catagory ='holud')}}"> {{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/car.png')}}">--}} Holud
                                                    Accessories</a>
                                            </li>

                                        </ul>
                                    </div>


                                    <div class="col-lg-3 menu_padding">
                                        <ul>

                                            <li><a href="{{url('services/'.$catagory ='wedding')}}">{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/wedding.png')}}">--}} Wedding
                                                    Accessories</a>
                                            </li>

                                            {{--<li><a href="{{url('services/'.$catagory ='building lights')}}"> --}}{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/car.png')}}">--}}{{-- Building Lights </a></li>--}}

                                            <li><a href="{{url('services/'.$catagory ='alpona')}}"> {{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/car.png')}}">--}} Alpona </a></li>
                                            <li><a href="{{url('services/'.$catagory ='Choreography')}}">{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/light.png')}}">--}} Choreography </a>
                                            </li>
                                            <li><a href="{{url('services/'.$catagory ='holud_dress')}}">{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/holud_snacks.png')}}">--}} Holud Dresses </a>
                                            </li>
                                        </ul>
                                    </div>

                                    {{--<div class="col-lg-6">
                                      <ul>
                                        <li><a href="{{url('services/'.$catagory ='holud')}}"><img class="logo_as_megamenu" src="{{asset('img/menu/car.png')}}"> Holud Accessories</a></li>
                                        <li><a href="{{url('services/'.$catagory ='wedding')}}"><img class="logo_as_megamenu" src="{{asset('img/menu/car.png')}}"> Wedding Accessories</a></li>
                                      </ul>
                                    </div>--}}


                                    <div class="vl"></div>


                                    <div class="col-lg-3">

                                        <ul>
                                            <li><a href="{{url('vendors/'.$catagory ='venue')}}">{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/venue.png')}}">--}} Venue</a></li>
                                            <li><a href="{{url('vendors/'.$catagory ='catering')}}">{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/catering.png')}}">--}} Catering</a>
                                            </li>
                                            <li>
                                                <a href="{{url('vendors/'.$catagory ='photography_and_cinematography')}}">{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/photo.png')}}">--}} Photography</a>
                                            </li>
                                            <li><a href="{{url('vendors/'.$catagory ='decoration')}}">{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/decoration.png')}}">--}}
                                                    Decoration</a>
                                            </li>
                                            <li><a href="{{url('vendors/'.$catagory ='invitation_cards')}}">{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/invitation_card.png')}}">--}}
                                                    Invitation
                                                    Cards</a>
                                            </li>

                                            <li><a href="{{url('vendors/'.$catagory ='bridal_outfit')}}">{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/invitation_card.png')}}">--}}
                                                    Bridal Outfit</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 menu_padding_3">
                                        <ul>
                                            <li><a href="{{url('vendors/'.$catagory ='dj')}}">{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/dj.png')}}">--}} DJ</a></li>
                                            <li><a href="{{url('vendors/'.$catagory ='makeup_artist')}}">{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/makeup.png')}}">--}} Makeup
                                                    Artist</a>
                                            </li>
                                            <li><a href="{{url('vendors/'.$catagory ='bakeries')}}">{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/bakeries.png')}}">--}} Bakeries</a>
                                            </li>
                                            <li><a href="{{url('vendors/'.$catagory ='mehedi')}}">{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/car.png')}}">--}} Mehedi</a></li>
                                            <li><a href="{{url('vendors/'.$catagory ='kazi')}}">{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/car.png')}}">--}} Kazi</a></li>

                                            {{--<li><a href="{{url('vendors/'.$catagory ='jewellery')}}">--}}{{--<img
                                                            class="logo_as_megamenu"
                                                            src="{{asset('img/menu/car.png')}}">--}}{{-- Jewellery</a></li>--}}
                                        </ul>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('event-coordinator')}}">Event Coordinator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://ayojok.com/ideas-and-stories/" target="_blank">Ideas and Stories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact_us')}}">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    @if (Route::has('login'))
                        @auth


                            <li class="nav-item">

                                <a class="nav-link" href="{{route('my_query')}}">My queries
                                    <span class="badge_q badge-light" id="cartCount">@include('extra.cart')</span> </a>

                            </li>


                            <li class="nav-item dropdown loggeduser mr-5">
                                <a class="nav-link dropdown-toggle disabled" id="navbarDropdown"
                                   href="{{url('my-account')}}" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">

                                    {{--<small>Hello,</small>--}}
                                    @if ((Auth::user()->fname) == "")
                                        {{Auth::user()->name}} {{--<span class="badge badge-light" id="cartCount">@include('extra.query_cart')</span>--}}
                                    @else
                                        {{Auth::user()->fname}} {{--<span class="badge badge-light" id="cartCount">@include('extra.query_cart')</span>--}}
                                    @endif
                                </a>
                                <ul class="megamenu dropdown-menu scrollable-menu" id="dropdown-menu"
                                    aria-labelledby="navbarDropdown">

                                    <li>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul>
                                                    {{--<li><a href="{{route('my-account')}}">My Account</a></li>--}}
                                                    <li><a href="{{route('wishlist.index')}}">My Wishlist</a></li>
                                                    <li>
                                                        <a href="{{route('myvendors', Auth::user()->id)}}">My Vendors</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('mychecklist',Auth::user()->id)}}">My Checklist</a>
                                                    </li>
                                                    <li><a href="{{route('mybudget')}}">My Budget</a></li>
                                                    <li><a title="Personal information"
                                                           href="{{route('personal-info.edit', Auth::user()->id )}}">Personal
                                                            Information</a></li>

                                                </ul>
                                            </div>
                                            <div class="vl"></div>
                                            <div class="col-sm-6">
                                                <ul>
                                                    {{--<li><a href="{{route('my-account')}}">My Account</a></li>--}}
                                                    <li>
                                                        <a href="{{route('User.Message')}}"> Inbox (<span id="inboxmess">@include('extra.mess')</span>)</a>
                                                    </li>

                                                    {{--<li><a href="{{route('my_query')}}">My queries (<span id="query_cart">@include('extra.cart')</span>)</a></li>
                                                    <li><a href="{{route('client-orderlist', Auth::user()->id)}}">Booking List</a>
                                                    <li><a href="{{route('payment')}}">Payment</a></li>--}}


                                                    <li class="nav-item" data-toggle="tooltip" data-placement="bottom"
                                                        title="Logout">


                                                        <a class="nav-link" href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                              style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>


                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Logout">
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                            class="fa fa-power-off"></i></a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            {{--<li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Confirmed Query ">--}}
                            {{--<a class="counter nav-link" href="{{route('confirm-query')}}">--}}
                            {{--<i class="fa fa-bell" aria-hidden="true"></i><span class="badge badge-light" id="cartCount">@include('extra.query_cart')</span>--}}
                            {{--</a>--}}
                            {{--</li>--}}
                        @else
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="modal" href="#myModal">Login/Registration</a></li>
                        @endauth
                    @endif





                    {{--<li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Wishlist">
                        <a class="counter nav-link" href="{{url('wishlist')}}">
                            <i class="fa fa-heart" aria-hidden="true"></i><span class="badge badge-light"
                                                                                id="wishlistCount">@include('extra.wishlist')</span>
                        </a>
                    </li>--}}


                    {{--<li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Cart">
                        <a class="counter nav-link" href="{{url('cart')}}">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge badge-light"
                                                                                        id="cartCount">@include('extra.cart')</span>
                        </a>
                    </li>--}}


                    {{--<li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Query Cart">
                      <a class="counter nav-link" href="{{url('query-cart')}}">
                        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i><span class="badge badge-light" id="queryCount">--}}{{--@include('extra.query')--}}{{--</span>
                      </a>
                    </li>--}}


                </ul>
                <!-- /End Top menu updated -->
            </div>
        </div>
    </nav>
</div>

@yield('content')

<!-- Footer -->

<div class="footer footer-section pt-4 pb-1" style="background-image:url({{ asset('img/backgrounds/bg-footer_new.png') }});height:auto;background-position:center;background-repeat:no-repeat;background-size:cover;">
    <div class="container">
        <div class="row text-center mb-2">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                <h4>Call</h4>
                <p>+880-1959 555 666</p>
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                <h4>Visit</h4>
                <p>H 52/1, Floor 5, Rd 3/A, Dhanmondi <br>Dhaka - 1209 Bangladesh</p>
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                <h4>Email</h4>
                <p><a href="mailto:info@ayojok.com">info@ayojok.com</a></p>
            </div>
        </div>

        <div class="row text-center mb-2">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 enlist-with-us">
                <p><a href="{{ route('partners') }}">Enlist with us, and become our valued partner. Learn more.</a></p>
            </div>
        </div>

        <div class="row text-center footer-menu-section">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 footer-navbar">
                <ul>
                    <li class="footer-menu"><a href="{{ url('about-us') }}">About Us</a></li>
                    <li class="footer-menu"><a href="{{ url('terms-condition') }}">Terms and Condition</a></li>
                    <li class="footer-menu"><a href="{{ url('privacy') }}">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 social-media-icons text-center">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/ayojokevents" target="_blank"><img class="img-fluid img-fluid social" src="{{asset('img/social/facebook.png')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/ayojokevents/" target="_blank"><img class="img-fluid img-fluid social" src="{{asset('img/social/instagram.png')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UC2Dn5jQAF8TV3_hPAoESk-Q" target="_blank"><img class="img-fluid img-fluid social" src="{{asset('img/social/youtube.png')}}" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <p class="copyright">Copyright {{ date('Y') }} Ayojok</p>
            </div>
        </div>
    </div>
</div>

<!-- Date Picker [http://keith-wood.name/datepick.html] -->

{{-- <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
attribution=setup_tool
page_id="718944784960805"
theme_color="#ff7e29">
</div> --}}

<script src="{{ mix('/js/primary.js') }}"></script>

<script>
    $.fn.selectpicker.Constructor.BootstrapVersion = '4';
</script>

@stack('scripts')

</body>
</html>
