@extends('layouts.app')

@push('css')

@endpush

@section('content')
    <!-- Masthead -->
    <header class="pagehead" style="background-image:url({{ asset('img/backgrounds/header_bg_index.jpg') }});height:auto;background-position:center;background-repeat:no-repeat;background-size:cover">
        <div class="container">
            <div class="row">
                <div class="col-12 my-auto text-center text-white">
                    <img class="pagehead-img img-fluid mt-4 mb-2 mb-sm-3 mb-md-4 mb-lg-4" src="{{ asset('img/logo_final.png') }}" alt=""/>
                </div>
            </div>
        </div>
    </header>
    <!--/ End of Masthead -->

    <!-- Content section -->
    <section class="page-section">
        <div class="container">
            <div class="row pt-3">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('mainhome') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">My Vendors</li>
                        </ol>
                    </nav>

                    <div class="wow fadeIn">
                        <h3><i class="fa fa-shopping-bag fa-lg" style="margin-right:1rem;color: #E3AE5B"></i> My Vendors</h3>
                    </div>

                    <p class="mt-4">A planning tool to keep track of all your booked service providers. You can add service providers manually or will be added automatically once you have placed a booking.</p>
                </div>
                <!-- /.col-12 col-sm-12 col-md-12 col-lg-12 -->
            </div>
            <!-- /.row pt-3 -->

            <div class="row mt-3 mb-3">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Vendors</th>
                                <th>Contact Details</th>
                                <th>Service Date, Time</th>
                                <th>Total Payment</th>
                                <th>Advance Payment</th>
                                <th>Due Payment</th>
                                <th>Manage</th>
                            </tr>
                            </thead>

                            <tbody>
                            @unless (empty($datas))
                                @foreach ($datas as $data)
                                    <tr>
                                        <td>
                                            <span style="text-transform:uppercase;font-weight:900;">{{$data->vendors_name}}</span>
                                            <br><span style="text-transform:capitalize;font-weight:400;">{{ str_replace('_', ' ', $data->catagory) }}</span>
                                        </td>
                                        <td>@if ($data->contact_details)
                                                {{ $data->contact_details }}
                                            @endif</td>
                                        <td>@if ($data->service_date)
                                                {{ $data->service_date }}
                                            @endif <br> @if ($data->service_time)
                                                {{ $data->service_time }}
                                            @endif</td>
                                        <td>{{$data->total_payment}}</td>
                                        <td>{{$data->advance_payment}}</td>
                                        <td>{{$data->due_payment}}</td>
                                        <td>
                                            <button class="btn btn-info mr-1" type="button" data-toggle="modal" data-target="#updateModal" data-venid="{{$data->id}}" data-vendor="{{$data->vendors_name}}" data-catagory="{{$data->catagory}}" data-contact="{{ $data->contact_details }}" data-date="{{$data->service_date}}" data-time="{{$data->service_time}}" data-total="{{$data->total_payment}}" data-advance="{{ $data->advance_payment }}" data-due="{{$data->due_payment}}">
                                                <span class="fa fa-sm fa-edit" style="color: white;" data-toggle="tooltip" data-placement="top" title="Edit" aria-hidden="true"></span>
                                            </button>

                                            {!! Form::open(['method' => 'POST','route'=> ['deleteMyVendor',$data->id], 'style' => 'display:inline']) !!}
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" style="color: white;"></i></button>
                                            <!-- /.btn btn-danger -->
                                            {!! Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach
                            @endunless
                            </tbody>
                        </table>
                        <!-- /.table table-striped -->
                    </div>
                    <!-- /.table-responsive -->

                    <button type="button" name="button" class="btn btn-events" data-toggle="modal" data-target="#createModal">Add New</button>
                </div>
                <!-- /.col-12 col-sm-12 col-md-12 col-lg-12 -->
            </div>
            <!-- /.row mt-3 mb-3 -->
        </div>
    </section>

    <!-- The Update Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel">
        <div class="modal-dialog modal-login" id="myVendorModal" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form class="col-lg-12 row" action="{{route('createMyVendor')}}" method="post">
                        {{csrf_field()}}

                        @include('extra.myVendorform')

                        <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-right:2px;"><span style="color:#fff;">Close</span>
                        </button>
                        <button type="submit" class="btn btn-secondary" style="margin-left:2px;"><span style="color:#fff;">Save</span></button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- The Update Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel">
        <div class="modal-dialog modal-login" id="myVendorModal" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form class="col-lg-12 row" action="{{route('updateMyVendor')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="venid" id="venid">
                        @include('extra.myVendorform')

                        <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-right:2px;background-color: #DCA655">
                            <span style="color:#fff;">Close</span></button>
                        <button type="submit" class="btn btn-secondary" style="margin-left:2px;background-color: #DCA655"><span style="color:#fff;">Save</span>
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script type="text/javascript">
        $('#updateModal').on('show.bs.modal', function(event) {
            console.log('Modal Open');
            var button = $(event.relatedTarget); // Button that triggered the modal
            var vendor = button.data('vendor');
            var catagory = button.data('catagory');
            var contact = button.data('contact');
            var time = button.data('time');
            var date = button.data('date');
            var total = button.data('total');
            var advance = button.data('advance');
            var due = button.data('due');
            var venid = button.data('venid');
            var modal = $(this);
            modal.find('.modal-title').text('Update My Vendor');
            modal.find('.modal-body #vendor_name').val(vendor);
            modal.find('.modal-body #catagory').val(catagory);
            modal.find('.modal-body #contact_detail').val(contact);
            modal.find('.modal-body #service_time').val(time);
            modal.find('.modal-body #service_date').val(date);
            modal.find('.modal-body #total').val(total);
            modal.find('.modal-body #advance').val(advance);
            modal.find('.modal-body #due').val(due);
            modal.find('.modal-body #venid').val(venid);
        });
    </script>
@endpush
