<div class="row">
    @foreach($datas as $data)
        <div class="col-6 col-sm-4 col-md-3 col-lg-3 mb-3">
            <div class="vendors-index-wrapper" data-mh="vendor-product-list">
                <a href="{{ url('vendors/'.$catagory = $catagorydata->name.'/'.$vendor = $data->vendor->id) }}">
                    <div class="card">
                        @if(($data->vendor->profile_img !== null || !empty($data->vendor->profile_img)) && file_exists($data->vendor->profile_img))
                            @php $img = $data->vendor->profile_img; @endphp
                        @else
                            @php $img = asset('img/vendor-profile/default.png'); @endphp
                        @endif
                        <img class="card-img-top" src="{{ asset($img) }}" alt="{{ $data->vendor->title }}">
                        <div class="card-body" style="padding: .5rem .7rem;">
                            <h5 class="card-title mb-0">{{ Illuminate\Support\Str::limit($data->vendor->title, 35) }}</h5>

                        </div>
                        <div style="padding: 0 .7rem .2rem .7rem; color: #ffffff; text-transform: uppercase; font-size: 12px;">{{ str_replace('_',' ', $catagorydata->name) }} </div>
                    </div>
                </a>
            </div>
            <!-- /.vendors-index-wrapper -->
        </div>
    @endforeach
</div>
