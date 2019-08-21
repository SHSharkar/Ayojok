@php $agent = new Jenssegers\Agent\Agent() @endphp
<!-- Sorting and Filter -->
<div class="row mb-2 mb-sm-2 mb-md-3 mb-lg-3">
    {{-- It will be use later when city filter needed --}}
    {{-- Filter City Area --}}
    {{-- <div class="col-lg-3">
      <div class="form-group" style="width:100%;padding-top: 1rem;">
        <select class="form-control" id="city" style="width:100%;">
          <option value="">City</option>
          <option class="option" value="dhaka">Dhaka</option>
        </select>
      </div>
    </div> --}}
    {{-- Filter City End --}}

    <div class="col-12 col-sm-4 col-md-4 col-lg-4 mt-2 mt-sm-2 mt-md-3 mt-lg-3">
        <select class="selectpicker area" data-live-search="true" data-width="100%" id="experience" title="Experience">
            <option class="option" value="1-5">1-5 Years</option>
            <option class="option" value="6-10">6-10 Years</option>
            <option class="option" value="11-15">11-15 Years</option>
            <option class="option" value="16-20">16-20 Years</option>
            <option class="option" value=">20">More then 20 Years</option>
        </select>
    </div>

    <div class="col-12 col-sm-4 col-md-4 col-lg-4 mt-2 mt-sm-2 mt-md-3 mt-lg-3">
        <select class="selectpicker" data-live-search="true" data-width="100%" id="menu" title="Menu">
            <option class="option" value="fixed">Fixed Menu</option>
            <option class="option" value="chef">Chef Only</option>
        </select>
    </div>

    {{-- Filter Price --}}
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 @if($agent->isMobile()) mt-2 @endif">
        <div class="form-group">
            <input type="hidden" id="price" name="price" value=""/>
        </div>
    </div>
    {{-- Filter Price --}}
</div>

<!--/ end of Sorting and Filter -->
