@extends('layouts.app')

@push('css')
  <link href="{{asset('css/account.css')}}" rel="stylesheet" type="text/css">
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

  <section class="page-section">
    <div class="container">

      <div class="row">
        <div class="col-lg-12">
          <ul class="breadcrumb">
            <li><a href="{{url('/')}}">Home</a></li>
            {{--<li><a href="{{url('my-account')}}">My Account</a></li>--}}
            <li class="active"> Wishlist</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section mb-4">
    <div class="container">

      <div class="row">
        <div class="col-lg-12">
          <div class="wow fadeIn">
            <h3><i class="fa fa-map-marker fa-lg" style="margin-right:1rem;"></i>  My Wishlist</h3>
          </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-lg-12">
          <div>
            <p>All your favourite service providers in a single place. Revisit your favourite service providers and view their profile any time.</p>
          </div>
          <div class="row table-responsive">
            <table class="table">
              <tbody>
                @if (Auth::user()->wishlist->count() )
                  @foreach ($wishlists as $wishlist)
                    <tr>
                      <td style="width:10%;">
                        <div class="productThumb">
                          @if (isset($wishlist->vendors_id))

                            <img src="{{$wishlist->vendor->profile_img}}" alt="{{$wishlist->vendor->title}}" class="img-fluid">
                          @else

                            <img src="{{$wishlist->product->image}}" alt="{{$wishlist->product->title}}" class="img-fluid">
                          @endif

                        </div>
                      </td>
                      <td>
                        <div class="productDetails">
                          <h5>
                            @if (isset($wishlist->vendors_id))
                              {{$wishlist->vendor->title}}
                            @else
                              {{$wishlist->product->title}}
                            @endif

                          </h5>
                          <p>
                            @if (isset($wishlist->vendors_id))
                              Starting Price : {{$wishlist->vendor->startingat_1_price}} BDT
                              {{--Starting Price : {{__('N/A')}}--}}
                            @else
                              Starting Price : {{$wishlist->product->price}} BDT
                            @endif

                          </p>
                        </div>
                      </td>
                      {{-- <td>
                      <a href="#" class="btn add-addressbtn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                    </td> --}}
                    <td style="text-align: right;width: 5%">
                      @if (isset($wishlist->vendors_id))
                        <a href="{{url('vendors/'.$catagory = $wishlist->catagory->name.'/'.$vendor = $wishlist->vendors_id)}}" class="btn add-addressbtn"><i class="fa fa-eye"></i> View </a>
                      @else
                        <a href="{{url('services/'.$catagory = $wishlist->catagory->name.'/'.$product = $wishlist->products_id)}}" class="btn add-addressbtn"><i class="fa fa-eye"></i> View </a>
                      @endif

                    </td>
                    <td class="text-left">
                      {{ Form::open(['route' => ['wishlist.destroy', $wishlist->id], 'method' => 'delete']) }}
                      <button type="submit" class="like btn"><i class="fa fa-trash" style="color:rgb(244, 127, 32);"></i></button>
                      {{ Form::close() }}
                    </td>
                  </tr>
                @endforeach
              @endif

            </tbody>
          </table>

        </div>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col-lg-12 ">
        <ul class="pager">
          {{--<li class="previous pull-left"><a href="{{route('my-account')}}"> &larr; Back to My Account </a></li>--}}
          <li class="next pull-right"><a href="{{route('mainhome')}}"> <i class="fa fa-home"></i> Go to home</a></li>
        </ul>
      </div>
    </div>


  </div>
</section>
@endsection

@push('scripts')

@endpush
