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
        <select class="selectpicker area" data-live-search="true" data-width="100%" id="area" title="Area In The City">
            <option class="option" value="uttara">Uttara</option>
            <option class="option" value="Shamoli-Mohammadpur">Shamoli - Mohammadpur</option>
            <option class="option" value="Magbazar-Eskaton">Magbazar - Eskaton</option>
            <option class="option" value="Badda-Banasree">Badda - Banasree</option>
            <option class="option" value="Baridhara-Bosundhara">Baridhara - Bosundhara</option>
            <option class="option" value="Firmget-Mohakhali">Firmget - Mohakhali</option>
            <option class="option" value="Old-dhaka">Old Dhaka</option>
            <option class="option" value="Lalbag-Azimpur">Lalbag - Azimpur</option>
            <option class="option" value="Mirpur-Pallabi">Mirpur - Pallabi</option>
            <option class="option" value="Cantonment-Kafrul">Cantonment - Kafrul</option>
            <option class="option" value="Paltan-Motijheel">Paltan - Motijheel</option>
            <option class="option" value="Gulshan-Banani">Gulshan - Banani</option>
            <option class="option" value="Lalmatia-Dhanmondi">Lalmatia - Dhanmondi</option>
            <option class="option" value="Rampura-Khilgaon">Rampura - Khilgaon</option>
        </select>
    </div>

    <div class="col-12 col-sm-4 col-md-4 col-lg-4 mt-2 mt-sm-2 mt-md-3 mt-lg-3 @if($agent->isMobile()) mb-2 @endif">
        <select class="selectpicker" data-live-search="true" data-width="100%" id="experience" title="Experience">
            <option class="option" value="1-5">1-5 Years</option>
            <option class="option" value="6-10">6-10 Years</option>
            <option class="option" value="11-15">11-15 Years</option>
            <option class="option" value="16-20">16-20 Years</option>
            <option class="option" value=">20">More then 20 Years</option>
        </select>
    </div>


    {{-- Filter Experience --}}
    {{-- <div class="col-lg-4">
      <div class="form-group" style="width:100%;padding-top: 1rem;">
        <select class="form-control" id="timing" style="width:100%;">
          <option value="">Timing</option>
          <option class="option" value="fixed">Fixed</option>
          <option class="option" value="flexible">Flexible</option>
        </select>
      </div>
    </div> --}}
    {{-- Filter Experience End --}}

</div>

<!--/ end of Sorting and Filter -->
