@extends('layouts.app')

@section('content')
    <!-- Masthead -->
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

    <section class="page-section services">
        <div class="container">
            <div class="row mb-md-1 mb-lg-1">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class=" mt-md-2 mt-lg-2 mt-1 mb-2">
                        <h3>{{ $catagorydata->name }}</h3>
                    </div>
                    <!-- /. -->

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('mainhome') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize;">{{ $catagorydata->name }}</li>
                        </ol>
                    </nav>
                </div>
                <!-- /.col-12 col-sm-12 col-md-12 -->
            </div>
            <!-- /.row mb-1 -->

            <!-- Sorting and Filter -->
        {{-- <div class="row sub-controls mt-2 mb-2">

        <div class="col-lg-6 row">
        <datalist id="sizeLegend">
        <option value="0"/>
        <option value="1"/>
        <option value="2"/>
        <option value="3"/>
        <option value="4"/>
        <option value="6"/>
        <option value="7"/>
        <option value="8"/>
        <option value="9"/>
        <option value="10"/>
        <option value="11"/>
        <option value="12"/>
        <option value="13"/>
      </datalist>

      <div class="col-lg-3 h-100 mt-2">
      <button type="button" class="control" data-sort="size:asc">Asc</button>
      <button type="button" class="control" data-sort="size:desc">Desc</button>
      </div>

      <div class="col-lg-8">
      <div class="range-slider">
      <label class="range-slider-label">Max</label>
      <input name="minSize" class="range-slider-input" type="range" min="0" max="13" value="0" list="sizeLegend"/>
      </div>
      </div>

      </div>

      <div class="col-lg-6 clearfix" style="border-left:1px solid #dbdbdb;">
      <div class="dropdown-filter pull-right">
      <label>Sort by:</label>
      <select class="select-filter btn btn-primary">
      <option value="all" selected="selected">All</option>
      <option value=".green">Green</option>
      <option value=".blue">Blue</option>
      <option value=".pink">Pink</option>
      </select>
      </div>
      </div>


      </div> --}}
        <!--/ end of Sorting and Filter -->

            <div class="row">
                @unless (empty($datas))
                    @foreach ($datas as $data)
                        <div class="col-6 col-sm-4 col-md-3 col-lg-3 mb-3" id="container" data-ref="container">
                            <div class="products-list-wrapper" data-mh="vendor-product-list">
                                <a href="{{ url('services/'.$catagory = $catagorydata->name.'/'.$product = $data->id) }}">
                                    <div class="card">
                                        @if(($data->image !== null || !empty($data->image)) && file_exists($data->image))
                                            @php $img = $data->image; @endphp
                                        @else
                                            @php $img = asset('img/vendor-profile/default.png'); @endphp
                                        @endif
                                        <img class="card-img-top" src="{{ asset($img) }}" alt="{{ $data->title }}">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ $data->title }}</h5>
                                            <h5 class="card-cust-subtitle">BDT {{ $data->price }}</h5>

                                            @if (auth()->check())
                                                <div class="shop-btn">
                                                    <button type="button" id="wishlistbtn{{$data->id}}" class="btn btn-primary btn-sm hidden-sm" data-toggle="tooltip" data-placement="bottom" title="Add to wish list" onclick="event.preventDefault();document.getElementById('wishlist{{$data->id}}').submit();">
                                                        <i class="fa fa-heart fa-lg"></i></button>
                                                    {!! Form::open(['url' => route('wishlist.store'), 'method' => 'post', 'id' => 'wishlist'.$data->id]) !!}
                                                    {!! Form::hidden('user_id', auth()->id()) !!}
                                                    {!! Form::hidden('catagory_id', $data->catagory_id) !!}
                                                    {!! Form::hidden('product_id', $data->id) !!}
                                                    {!! Form::close() !!}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- /.products-list-wrapper -->
                        </div>
                        <!-- /.col-6 col-sm-3 col-md-3 col-lg-3 mb-3 products-list-wrapper -->
                    @endforeach
                @endunless
            </div>
            <!-- /.row -->
        </div>
    </section>
    <!-- /.page-section services -->
@endsection
