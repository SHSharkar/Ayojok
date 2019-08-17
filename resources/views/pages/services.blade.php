@extends('layouts.app')

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/css/ion.rangeSlider.skinFlat.css">
@endpush

@section('content')
    <!-- Masthead -->
    <header class="pagehead" style="background-image:url({{ asset('img/backgrounds/header_bg_index.jpg') }});height:auto;background-position:center;background-repeat:no-repeat;background-size:cover">
        <div class="container">
            <div class="row">
                <div class="col-12 my-auto text-center text-white">
                    <img class="pagehead-img img-fluid mt-5 mb-5" src="{{ asset('img/logo_final.png') }}" alt="">
                </div>
            </div>
        </div>
    </header>
    <!-- FB Profile Style -->

    <!-- Blank section -->
    <section class="page-section services mt-3">
        <div class="container">
            <div class="wow fadeIn text-center mb-4">
                <h3 id="service-name">{{ $catagorydata->name }}  </h3>
                <hr class="colored">
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('mainhome') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize;">{{ $catagorydata->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>

        @if ($catagorydata->layout == 1)
            @switch ($catagorydata->id)
                @case(12)
                @include('filters.filter-photo')
                @break
                @case(13)
                @include('filters.filter-decor')
                @break
                @case(15)
                @include('filters.filter-makeup')
                @break
            @endswitch

        @elseif ($catagorydata->layout == 2)
            @switch ($catagorydata->id)
                @case(14)
                @include('filters.filter-invitation')
                @break
                @case(16)
                @include('filters.filter-bakeries')
                @break
                @case(17)
                @include('filters.filter-mehedi')
                @break
            @endswitch

        @elseif ($catagorydata->layout == 3)
            @switch ($catagorydata->id)
                @case(9)
                @include('filters.filter-venue')
                @break
                @case(10)
                @include('filters.filter-dj')
                @break
                @case(11)
                @include('filters.filter-catering')
                @break
            @endswitch

        @elseif ($catagorydata->layout == 4)
            @switch ($catagorydata->id)
                @case(18)
                @include('filters.filter-kazi')
                @break
            @endswitch
        @endif


        <!-- Sorting and Filter -->
            <div class="controls">
                {{-- <select class="select-filter">
                     <option value="all">All</option>
                     <option value=".green">Green</option>
                     <option value=".blue">Blue</option>
                     <option value=".pink">Pink</option>
                 </select>--}}

                {{--<select class="select-sort">
                    <option value="default:asc">Ascending</option>
                    <option value="default:desc">Descending</option>
                </select>--}}
            </div>

            <!-- Vendor Row Start -->
        {{-- <div class="row mt-4"> --}}

        <!-- Vendor Listing -->
            @include('extra.product-list')
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.2.0/js/ion.rangeSlider.js" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            cat = {{$catagorydata->id}};
            catname = '{{$catagorydata->name}}';
            //console.log(catname);
            switch (cat) {
            case 9:
                var file = "{{asset('/js/venue.js')}}";
                include(file);
                break;
            case 10:
                var file = "{{asset('/js/dj.js')}}";
                include(file);
                break;
            case 12:
                var file = "{{asset('/js/photo.js')}}";
                include(file);
                break;
            case 11:
                var file = "{{asset('/js/catering.js')}}";
                include(file);
                break;
            case 18:
                var file = "{{asset('/js/kazi.js')}}";
                include(file);
                break;
            case 14:
                var file = "{{asset('/js/invitation.js')}}";
                include(file);
                break;
            case 16:
                var file = "{{asset('/js/bakeries.js')}}";
                include(file);
                break;
            case 17:
                var file = "{{asset('/js/mehedi.js')}}";
                include(file);
                break;
            case 13:
                var file = "{{asset('/js/decor.js')}}";
                include(file);
                break;
            case 15:
                var file = "{{asset('/js/makeup.js')}}";
                include(file);
                break;
            }

            function include(file) {
                var script = document.createElement('script'); //Make a script DOM node
                script.src = file; //Set it's src to the provided URL
                script.type = 'text/javascript';
                script.defer = true;
                document.body.appendChild(script); //Add it to the end of the head section of the page (could change 'head' to 'body' to add it to the end of the body section instead)
            }

        });
        if (!!window.performance && window.performance.navigation.type === 2) {
            window.location.reload();
        }

    </script>

    <script>
        $(function() {
            $('.vendor-product-list').matchHeight();
        });
    </script>
@endpush
