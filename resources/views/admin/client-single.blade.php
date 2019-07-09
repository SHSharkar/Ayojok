@extends('layouts.admin')

@push('css')

@endpush

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Client Details
            </h1>
        </section>

        <section class="maincontent">


            <div class="col-md-4" style="margin-top:2rem;">

                <div class="box box-danger">
                    <div class="box-body">
                        <div class="details">
                            <label for="id" class="control-label col-md-4">Client ID:</label>

                            <div class="col-md-8">
                                <p>{{$data->id}}</p>
                            </div>
                            <label for="email" class="control-label col-md-4">Client Email:</label>

                            <div class="col-md-8">
                                <p>{{$data->email}}</p>
                            </div>
                            <label for="username" class="control-label col-md-4">Client Username:</label>

                            <div class="col-md-8">
                                <p>{{$data->name}}</p>
                            </div>
                            <label for="name" class="control-label col-md-4">Client Name:</label>

                            <div class="col-md-8">
                                @if (empty($data->fname) && empty($data->lname))
                                    <p>{{"Not Set Yet"}}</p>
                                @else
                                    <p>{{$data->fname}} {{$data->lname}}</p>
                                @endif
                            </div>
                            <label for="contact" class="control-label col-md-4">Client Contact:</label>

                            <div class="col-md-8">
                                <p>{{$data->contact}}</p>
                            </div>
                            <label for="contact" class="control-label col-md-4">Client Address:</label>

                            <div class="col-md-8">
                                <p>{{$data->address}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>

            <div class="col-md-8" style="margin-top:2rem;">
                <div class="box box-success">
                    <div class="box-body table-responsive">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Reference Name/Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $sl = 1;
                            @endphp
                            @foreach ($addresses as $address)

                                <tr>
                                    <td>{{$sl}}</td>
                                    <td>{{$address->line1}},{{$address->line2}},{{$address->city}}</td>
                                    <td>{{$address->contact}}</td>
                                    <td>{{$address->addressName}}</td>
                                </tr>
                                @php
                                $sl++;
                                @endphp
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <div class="row container-fluid">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body" style="margin-top:2rem;">
                        <div class="col-md-6" style="margin-bottom:2rem;">
                            <form action="{{route('service.store')}}" method="post" class="form-horizontal"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label class="control-label col-md-2" for="service_type">Type:</label>

                                    <div class="col-md-10">
                                        <select style="padding: 5px;" class="form-control" id="service_type"
                                                name="service_type" required onchange="loadCategory(this)">
                                            <option value="">-- Select any type --</option>
                                            <option value="service" style="text-transform:capitalize;">service</option>
                                            <option value="vendor" style="text-transform:capitalize;">vendor</option>
                                            {{--@foreach ($catagories as $catagory)
                                                <option value="{{$catagory->id}}" style="text-transform:capitalize;">{{$catagory->name}}</option>
                                            @endforeach--}}
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2" for="category">Category:</label>

                                    <div class="col-md-10">
                                        <select style="padding: 5px;" class="form-control" id="category" name="category"
                                                onchange="loadItem(this)" required>
                                            <option value="">-- Select any Category --</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2" for="category">Category:</label>

                                    <div class="col-md-10">
                                        <select style="padding: 5px;" class="form-control" id="item" name="item"
                                                 required>
                                            <option value="">-- Select Item --</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2" for="long_description">Long
                                        Description:</label>

                                    <div class="col-md-10">
                                        <textarea rows="5" class="form-control" id="long_description"
                                                  placeholder="Enter deatils description" name="long_description"
                                                  required></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary pull-right" type="submit">Upload service</button>
                                </div>

                            </form>
                        </div>


                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.content -->
    </div>

@endsection

@push('scripts')
<script>
    $(function () {
        $('#example1').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })

    function loadCategory(ob) {
        // alert(ob.value);

        $.ajax({
            url: 'load-category/' + ob.value,
            type: 'GET',
            success: function (data) {
                console.log(' type: ' + data);
                //alert(i+':'+data);
                $('#category').html(data);
            },
            error: function (xhr, status, error) {
                // check status && error
                console.log('Error  message: ' + error);
            },
            dataType: 'text'

        });
    }

    function loadItem(ob) {
        //alert(ob.value);
        $.ajax({
            url: 'load-item/' + ob.value,
            type: 'GET',
            success: function (data) {
                console.log(' item: ' + data);
                //alert(i+':'+data);
                $('#item').html(data);
            },
            error: function (xhr, status, error) {
                // check status && error
                console.log('Error  message: ' + error);
            },
            dataType: 'text'
        });
    }


</script>
@endpush
