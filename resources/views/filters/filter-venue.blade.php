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

    {{-- Filter City Area --}}
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 mt-2 mt-sm-2 mt-md-3 mt-lg-3">
        <select class="selectpicker area" data-live-search="true" data-width="100%" id="area" title="Area In The City">
            {{--<option class="option" value="Destination Wedding">Destination Wedding</option>--}}
            <option class="option" value="uttara">Uttara</option>
            <option class="option" value="Baridhara-Bosundhara">Baridhara-Bosundhara</option>
            <option class="option" value="gulshan-banani">Gulshan - Banani</option>
            <option class="option" value="Khilkhet-Nikunja">Khilkhet - Nikunja</option>

            <option class="option" value="Badda-Banasree">Badda - Banasree</option>
            <option class="option" value="Rampura-Khilgaon">Rampura - Khilgaon</option>
            <option class="option" value="Rajarbag-Shantinagar">Rajarbag - Shantinagar</option>
            <option class="option" value="Magbazar-Eskaton">Magbazar - Eskaton</option>

            <option class="option" value="Paltan-Motijheel">Paltan - Motijheel</option>
            <option class="option" value="Cantonment-Kafrul">Cantonment - Kafrul</option>
            <option class="option" value="mirpur-pallabi">Mirpur - Pallabi</option>
            <option class="option" value="Lalbag-Azimpur">Lalbag - Azimpur</option>

            <option class="option" value="Old_Dhaka">Old Dhaka</option>
            <option class="option" value="shamoli-mohammadpur">Shamoli - Mohammadpur</option>
            <option class="option" value="Lalmatia-Dhanmondi">Lalmatia - Dhanmondi</option>
            <option class="option" value="Mohakhali-Tejgaon">Mohakhali - Tejgaon</option>
        </select>
    </div>
    {{-- Filter City Area End --}}

    {{-- Filter Capacity --}}
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 mt-2 mt-sm-2 mt-md-3 mt-lg-3">
        <select class="selectpicker" data-live-search="true" data-width="100%" id="capacity" title="Capacity"> <!-- id="capacity" -->
            <option class="option" value="<100">Less then 100</option>
            <option class="option" value="100-200">100-200</option>
            <option class="option" value="200-500">200-500</option>
            <option class="option" value="500-1000">500-1000</option>
            <option class="option" value=">1000">More than 1000</option>
        </select>
    </div>
    {{-- Filter Capacity End --}}

    {{-- Filter Price --}}
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 @if($agent->isMobile()) mt-2 @endif">
        <div class="form-group">
            <input type="hidden" id="price" name="price" value=""/>
        </div>
    </div>
    {{-- Filter Price --}}
</div>

<!--/ end of Sorting and Filter -->
