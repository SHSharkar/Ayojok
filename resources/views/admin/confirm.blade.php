@extends('layouts.admin')

@push('css')

@endpush

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Booking List
            </h1>
        </section>

        <section class="maincontent">

            <div class="col-md-12" style="margin-top:2rem;">

                <div class="box box-danger">
                    <div class="box-body table-responsive">
                        <table id="table" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Ph No</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($datas as $data)
                                <?php
                                $check = 0;
                                $userdata = App\User::where('id', $data->user_id)->get();
                                $check = App\Models\order::where('user_id', $data->user_id)->where('is_open', 0)->where('payment_type',0)->count();
                                if ($check > 0) {
                                    $color = 'background-color:rgb(255,255,255)';
                                } else {
                                    $color = 'background-color:rgba(20,121,183,0.3)';
                                }
                                //dd($check);
                                ?>
                                <tr style="{{$color}}">
                                    <td>{{$data->user->name}} - ({{$data->user->fname}}{{$data->user->lame}})</td>
                                    <td>{{$data->user->contact or ""}}</td>
                                    <td>{{$data->user->email or ""}}</td>
                                    <td>{{$data->created_at->format('d M Y') }}</td>
                                    <td>{{ $data->created_at->format('h:i:a')}}</td>

                                    <td>
                                        <center>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a href="{{url('/admin/confirm/'.$user = $data->user_id)}}"
                                                       class="btn btn-primary">
                                                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6">
                                                    @if($check > 0)
                                                        <h5> Unseen</h5>
                                                    @else
                                                        <h5>Seen</h5>
                                                    @endif
                                                </div>
                                            </div>

                                        </center>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>


        </section>
        <!-- /.content -->
    </div>

@endsection

@push('scripts')
<script>
    $(function () {
        $('#table').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false,
            "order": [[4, "desc"]]
        })
    })
</script>
@endpush
