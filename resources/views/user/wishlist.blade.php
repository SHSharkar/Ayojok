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
                    <img class="pagehead-img img-fluid mt-4 mb-2 mb-sm-3 mb-md-4 mb-lg-4" src="{{ asset('img/logo_final.png') }}" alt="">
                </div>
            </div>
        </div>
    </header>
    <!-- FB Profile Style -->

    <!-- Blank section -->

    <section class="page-section">
        <div class="container">
            <div class="row pt-3">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                        </ol>
                    </nav>
                </div>
                <!-- /.col-12 col-sm-12 col-md-12 col-lg-12 -->
            </div>
            <!-- /.row pt-3 -->
        </div>
    </section>

    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="">
                        <h3><i class="fa fa-map-marker fa-lg" style="margin-right:1rem;"></i> My Wishlist</h3>
                    </div>
                    <!-- /. -->
                </div>
                <!-- /.col-12 col-sm-12 col-md-12 col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row mt-3">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <p>All your favourite service providers in a single place. Revisit your favourite service providers and view their profile any time.</p>

                    <div class="table-responsive">
                        <table class="table table-striped wishlist-table-design">
                            <tbody>
                            @foreach ($wishlists as $wishlist)
                                <tr>
                                    <td>
                                        @if (isset($wishlist->vendors_id))
                                            @if ($wishlist->vendor->profile_img != null && file_exists(public_path($wishlist->vendor->profile_img)))
                                                <img src="{{ $wishlist->vendor->profile_img }}" alt="{{$wishlist->vendor->title}}" class="wishlist-product-logo">
                                            @else
                                                <img src="{{ asset('img/vendor-profile/default.png') }}" alt="{{ $wishlist->vendor->title }}" class="wishlist-product-logo">
                                                <!-- /.img-fluid -->
                                            @endif
                                        @else
                                            @if ($wishlist->product->image != null && file_exists(public_path($wishlist->product->image)))
                                                <img src="{{ $wishlist->product->image }}" alt="{{$wishlist->product->title}}" class="wishlist-product-logo">
                                            @else
                                                <img src="{{ asset('img/vendor-profile/default.png') }}" alt="{{ $wishlist->vendor->title }}" class="wishlist-product-logo">
                                                <!-- /.img-fluid -->
                                            @endif
                                        @endif
                                    </td>

                                    <td>
                                        <h5>
                                            @if (isset($wishlist->vendors_id))
                                                {{$wishlist->vendor->title}}
                                            @else
                                                {{$wishlist->product->title}}
                                            @endif
                                        </h5>
                                        <p class="mb-0">
                                            @if (isset($wishlist->vendors_id))
                                                Starting Price : {{$wishlist->vendor->startingat_1_price}} BDT
                                            @else
                                                Starting Price : {{$wishlist->product->price}} BDT
                                            @endif
                                        </p>
                                    </td>

                                    <td class="text-center">
                                        @if (isset($wishlist->vendors_id))
                                            <a href="{{url('vendors/'.$catagory = $wishlist->catagory->name.'/'.$vendor = $wishlist->vendors_id)}}" class="btn btn-outline-events"><i class="fa fa-eye"></i> View</a>
                                        @else
                                            <a href="{{url('services/'.$catagory = $wishlist->catagory->name.'/'.$product = $wishlist->products_id)}}" class="btn btn-outline-events"><i class="fa fa-eye"></i> View</a>
                                        @endif
                                    </td>

                                    <td class="text-center">
                                        {{ Form::open(['route' => ['wishlist.destroy', $wishlist->id], 'method' => 'delete']) }}
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash" style="color: white;"></i> Remove</button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- /.table table-striped -->
                    </div>
                    <!-- /.table-responsive -->

                    <div class="text-right">
                        {{ $wishlists->links() }}
                    </div>
                    <!-- /.text-right -->

                    <div class="mb-3 text-right">
                        <a href="{{ route('mainhome') }}" class="btn btn-outline-events"><i class="fa fa-home"></i> Go to home</a>
                        <!-- /.btn btn-link -->
                    </div>
                    <!-- /.mb-3 -->
                </div>
                <!-- /.col-12 col-sm-12 col-md-12 col-lg-12 -->
            </div>
            <!-- /.row mt-3 -->
        </div>
    </section>
@endsection

@push('scripts')

@endpush
