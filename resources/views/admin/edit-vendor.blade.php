@extends('layouts.admin')

@push('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <style>
  img{
    max-width:30rem;
    margin: 0.5rem;
  }
  .select2 {
  width:100%!important;
  }
  </style>
@endpush

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Vendor ( {{ $vendata->catagory->name }} )
      </h1>
    </section>

    <section class="maincontent">

      <div class="col-md-12" style="margin-top:2rem;">

        <div class="box box-primary">
          <div class="box-body" style="margin-top:2rem;">
            <form action="{{route('vendors.update',['id'=>$vendata->id])}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
              <div class="col-md-6" style="margin-bottom:2rem;">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="vendor_name" class="control-label col-md-3">Vendor Name: <span style="color:red;">*</span> </label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="vendor_name" placeholder="Enter name" name="vendor_title" value="{{$vendata->title or ""}}" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3" for="about_us">Vendor About Us:  </label>
                  <div class="col-md-9">
                    <textarea rows="5" class="form-control" id="about_us" placeholder="Enter about us" name="about_us" >{{$vendata->about_us or ""}}</textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3" for="vendor_contact">Vendor Contact : <span style="color:red;">*</span> </label>
                  <div class="col-md-9">
                    <textarea rows="3" class="form-control" id="vendor_contact" placeholder="Enter contact us" name="vendor_contact" required>{{$vendata->contact or ""}}</textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-9">
                    <input type="hidden" class="form-control" id="vendor_catagory" name="vendor_catagory" value="{{$vendata->catagory_id or ""}}" required>
                  </div>
                </div>

                <hr>

                <div class="form-group">
                  <label for="startingat_1_title" class="control-label col-md-4">Starting Price Title (Catagory 1): <span style="color:red;">*</span> </label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="startingat_1_title" placeholder="Enter name" name="startingat_1_title" value="{{$vendata->startingat_1_title or ""}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="startingat_1_price" class="control-label col-md-4">Starting Price Price (Catagory 1): <span style="color:red;">*</span> </label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="startingat_1_price" placeholder="Enter name" name="startingat_1_price" value="{{$vendata->startingat_1_price or ""}}" required>
                  </div>
                </div>

                <hr>

                <div class="form-group">
                  <label for="startingat_1_title" class="control-label col-md-4">Starting Price Title (Catagory 2):</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="startingat_2_title" placeholder="Enter name" name="startingat_2_title" value="{{$vendata->startingat_2_title or ""}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="startingat_1_price" class="control-label col-md-4">Starting Price Price (Catagory 2):</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="startingat_2_price" placeholder="Enter name" name="startingat_2_price" value="{{$vendata->startingat_2_price or ""}}">
                  </div>
                </div>

                <hr>

                <div class="form-group">
                  <label for="startingat_1_title" class="control-label col-md-4">Starting Price Title (Catagory 3):</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="startingat_3_title" placeholder="Enter name" name="startingat_3_title" value="{{$vendata->startingat_3_title or ""}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="startingat_1_price" class="control-label col-md-4">Starting Price Price (Catagory 3):</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="startingat_3_price" placeholder="Enter name" name="startingat_3_price" value="{{$vendata->startingat_3_price or ""}}">
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <table class="table table-responsive">
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-group" id="feature1_div" style="display: none;">
                          <label for="feature1" class="control-label">Feature 1: <span style="color:red;">*</span> </label>
                          <input type="text" class="form-control" id="feature1" name="feature1" placeholder="Feature 1" value="{{$data->feature_1 or ""}}" required>
                        </div>
                      </td>
                      <td>
                        <div class="form-group" id="feature2_div" style="display: none;">
                          <label for="feature2" class="control-label">Feature 2: <span style="color:red;">*</span> </label>
                          <input type="text" class="form-control" id="feature2" name="feature2" placeholder="Feature 2" value="{{$data->feature_2 or ""}}" required>
                        </div>
                      </td>
                      <td>
                        <div class="form-group" id="feature3_div" style="display: none;">
                          <label for="feature3" class="control-label">Feature 3: <span style="color:red;">*</span> </label>
                          <input type="text" class="form-control" id="feature3" name="feature3" placeholder="Feature 3" value="{{$data->feature_3 or ""}}" required>
                        </div>
                      </td>
                      <td>
                        <div class="form-group" id="feature4_div" style="display: none;">
                          <label for="feature4" class="control-label">Feature 4: <span style="color:red;">*</span> </label>
                          <input type="text" class="form-control" id="feature4" name="feature4" placeholder="Feature 4" value="{{$data->feature_4 or ""}}" required>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="form-group" id="feature5_div" style="display: none;">
                          <label for="feature5" class="control-label">Feature 5: <span style="color:red;">*</span> </label>
                          <input type="text" class="form-control" id="feature5" name="feature5" placeholder="Feature 5" value="{{$data->feature_5 or ""}}" required>
                        </div>
                      </td>
                      <td>
                        <div class="form-group" id="feature6_div" style="display: none;">
                          <label for="feature6" class="control-label">Feature 6: <span style="color:red;">*</span> </label>
                          <input type="text" class="form-control" id="feature6" name="feature6" placeholder="Feature 6" value="{{$data->feature_6 or ""}}" required>
                        </div>
                      </td>
                      <td>
                        <div class="form-group" id="feature7_div" style="display: none;">
                          <label for="feature7" class="control-label">Feature 7:</label>
                          <input type="text" class="form-control" id="feature7" name="feature7" placeholder="Feature 7" value="{{$data->feature_7 or ""}}">
                        </div>
                      </td>
                      <td>
                        <div class="form-group" id="feature8_div" style="display: none;">
                          <label for="feature8" class="control-label">Feature 8:</label>
                          <input type="text" class="form-control" id="feature8" name="feature8" placeholder="Feature 8" value="{{$data->feature_8 or ""}}">
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <div class="form-group" id="lowest_price_div" style="display: none">
                  <label class="control-label col-md-2" for="lowest_price">Lowest Price: (BDT)</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="lowest_price" name="lowest_price" placeholder="Enter the lowest price for the filter" value="{{$data->low_price or ""}}" >
                  </div>
                </div>


                {{--Bridal Outfits & Jewellery's feature--}}

                <div class="form-group" id="type_1" style="display:none;">
                  <label class="control-label col-md-2" for="event_type">Event Type [B&J] :</label>

                  <div class="col-md-10">
                    <select class="form-control" id="event_type_select2" name="type_1[]"
                            multiple="multiple">
                      <option class="option" value="wedding">Wedding</option>
                      <option class="option" value="birthday">Holud</option>
                      <option class="option" value="corporate">Party</option>
                    </select>
                  </div>
                </div>

                <div class="form-group" id="type_2" style="display:none;">
                  <label class="control-label col-md-2" for="event_type2">Type 2:</label>

                  <div class="col-md-10">
                    <input type="text" class="form-control" name="type_2" value="{{$data->type_2 or ""}}">
                  </div>
                </div>
                <div class="form-group" id="type_3" style="display:none;">
                  <label class="control-label col-md-2" for="event_type3" >Type 3:</label>

                  <div class="col-md-10">
                    <input type="text" class="form-control" name="type_3" value="{{$data->type_3 or ""}}">
                  </div>
                </div>
                <div class="form-group" id="type_4" style="display:none;">
                  <label class="control-label col-md-2" for="event_type4">Type 4:</label>

                  <div class="col-md-10">
                    <input type="text" class="form-control" name="type_4" value="{{$data->type_4 or ""}}">
                  </div>
                </div>
                <div class="form-group" id="type_5" style="display:none;">
                  <label class="control-label col-md-2" for="event_type5">Type 5:</label>

                  <div class="col-md-10">
                    <input type="text" class="form-control" name="type_5" value="{{$data->type_5 or ""}}">
                  </div>
                </div>
                <div class="form-group" id="type_6" style="display:none;">
                  <label class="control-label col-md-2" for="event_type6" >Type 6:</label>

                  <div class="col-md-10">
                    <input type="text" class="form-control" name="type_6" value="{{$data->type_6 or ""}}">
                  </div>
                </div>

                <div class="form-group" id="venue_area" style="display:none;">
                  <label class="control-label col-md-2" for="venue_area">Area:</label>
                  <div class="col-md-10">
                    <select class="form-control" name="venue_area" id="venue_area_select">
                      <option value="">-- Area In The City --</option>
                      <option class="option" value="destination wedding">destination wedding</option>
                      <option class="option" value="uttara">Uttara</option>
                      <option class="option" value="Lalmatia-Dhanmondi">Lalmatia - Dhanmondi</option>
                      <option class="option" value="Paltan-Motijheel">Paltan - Motijheel</option>
                      <option class="option" value="Badda-Banasree">Badda - Banasree</option>
                      <option class="option" value="gulshan-banani">Gulshan - Banani</option>
                      <option class="option" value="Rampura-Khilgaon">Rampura - Khilgaon</option>
                      <option class="option" value="Rajarbag-Shantinagar">Rajarbag - Shantinagar</option>
                      <option class="option" value="Magbazar - Eskaton">Magbazar - Eskaton</option>
                      <option class="option" value="mirpur-pallabi">Mirpur - Pallabi</option>
                      <option class="option" value="Lalbag-Azimpur">Lalbag - Azimpur</option>
                      <option class="option" value="shamoli-mohammadpur">Shamoli - Mohammadpur</option>

                      <option class="option" value="Mohakhali-Khilgaon">Mohakhali - Khilgaon</option>

                    </select>
                  </div>
                </div>

                <div class="form-group" id="kazi_area" style="display:none;">
                  <label class="control-label col-md-2" for="kazi_area">Kazi Area:</label>
                  <div class="col-md-10">
                    <select class="form-control" name="kazi_area" id="kazi_area_select">
                      <option value="">Area In The City</option>
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
                </div>

                <div class="form-group" id="menu_type" style="display:none;">
                  <label class="control-label col-md-2" for="menu_type">Menu Type:</label>
                  <div class="col-md-10">
                    <select class="form-control" id="menu_type_select" name="menu_type[]" multiple="multiple">
                      <option class="option" value="fixed">Fixed Menu</option>
                      <option class="option" value="chef">Chef Only</option>
                    </select>
                  </div>
                </div>

                <div class="form-group" id="event_type" style="display:none;">
                  <label class="control-label col-md-2" for="event_type">Event Type:</label>
                  <div class="col-md-10">
                    <select class="form-control" id="event_type_select" name="event_type[]" multiple="multiple">
                      <option class="option" value="wedding">Wedding</option>
                      <option class="option" value="birthday">Birthday</option>
                      <option class="option" value="corporate">Corporate</option>
                    </select>
                  </div>
                </div>

                <div class="form-group" id="speciality" style="display:none;">
                  <label class="control-label col-md-2" for="speciality">Speciality:</label>
                  <div class="col-md-10">
                    <select class="form-control" id="speciality_select" name="speciality[]" multiple="multiple">
                      <option class="option" value="paper">Paper Made</option>
                      <option class="option" value="wood">Wood Made</option>
                      <option class="option" value="hand">Hand Made</option>
                    </select>
                  </div>
                </div>

                <div class="form-group" id="bakery_speciality" style="display:none;">
                  <label class="control-label col-md-2" for="bakery_speciality">Bakery Speciality:</label>
                  <div class="col-md-10">
                    <select class="form-control" id="bakery_speciality_select" name="bakery_speciality[]" multiple="multiple">
                      <option class="option" value="birthday">Birthday Pastry</option>
                      <option class="option" value="wedding">Wedding Pastry</option>
                      <option class="option" value="snacks">Snacks</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="control-label col-lg-2">
                    <label class="" for="profile_image">Profile Image:</label>
                    <p>Max (600x600)</p>
                  </div>
                  <div class="col-lg-4">
                    <input type="file" name="profile_image" id="profile_image" accept="image/*" class="form-control">
                  </div>
                  <div class="col-md-4">
                    <label for="profile_image">Profile Image Preview</label>
                    <div id="profile-preview"></div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="control-label col-lg-2">
                    <label class="" for="logo_image">Logo Image:</label>
                    <p>Max (600x600)</p>
                  </div>
                  <div class="col-lg-4">
                    <input type="file" name="logo_image" id="logo_image" accept="image/*" class="form-control">
                  </div>
                  <div class="col-md-4">
                    <label for="Feature Image">Logo Image Preview</label>
                    <div id="logo-preview"></div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="control-label col-lg-2">
                    <label class="" for="feature_image">Feature Image:</label>
                    <p>Max (600x400)</p>
                  </div>
                  <div class="col-lg-4">
                    <input type="file" name="feature_image[]" id="feature_image" accept="image/*" class="form-control" multiple>
                  </div>
                  <div class="col-lg-4">
                    <label for="Extra Image">Feature Image Preview</label>
                    <div id="feature_image_preview"></div>
                  </div>
                </div>

              </div>
              <div class="col-lg-6">
                <button class="btn btn-primary" type="submit" >Update Vendor</button>
              </div>
            </form>
          </div><!-- /.box-body -->
        </div><!-- /.box -->

      </div>
      <div class="col-lg-12">
        <div class="col-lg-4 text-center">
          <label for="Profile Image">Logo Profile Preview</label>
          <div id="old-profile-preview"> <img src="{{asset($vendata->profile_img)}}" alt="old-profile-preview"> </div>
        </div>
        <div class="col-lg-4 text-center">
          <label for="Old Logo Image">Old Logo Image Preview</label>
          <div id="old-logo-preview"> <img src="{{asset($vendata->logo)}}" alt="old-logo-preview"> </div>
        </div>
        <div class="col-lg-4 text-center">
          <label for="Old Feature Image">Old Feature Image Preview</label>
          <div id="old-feature-preview">
            <img src="{{asset($vendata->feature_image_1)}}" alt="old-feature-preview">
            <img src="{{asset($vendata->feature_image_2)}}" alt="old-feature2-preview">
            <img src="{{asset($vendata->feature_image_3)}}" alt="old-feature3-preview">
          </div>
        </div>
      </div>



    </section><!-- /.content -->
  </div>


@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <script>
  $('#menu_type_select,#event_type_select,#event_type_select2,#speciality_select,#bakery_speciality_select,#venue_area_select,#home_service_select').select2();
  function previewprofileImage() {
    var $preview = $('#profile-preview').empty();
    if (this.files) $.each(this.files, readAndPreview);

    function readAndPreview(i, file) {

      if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
        return alert(file.name +" is not an image");
      }
      var reader = new FileReader();

      $(reader).on("load", function() {
        $preview.append($("<img/>", {src:this.result}));
      });

      reader.readAsDataURL(file);

    }
  }

  function previewlogoImage() {
    var $preview = $('#logo-preview').empty();
    if (this.files) $.each(this.files, readAndPreview);

    function readAndPreview(i, file) {

      if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
        return alert(file.name +" is not an image");
      }
      var reader = new FileReader();

      $(reader).on("load", function() {
        $preview.append($("<img/>", {src:this.result}));
      });

      reader.readAsDataURL(file);

    }
  }

  function previewfeatureImages() {

    if(this.files.length > 3){
      alert('Too many files');
      var $preview = $('#feature_image_preview').empty();
    }else{
      var $preview = $('#feature_image_preview').empty();
      if (this.files) $.each(this.files, readAndPreview);
    }

    function readAndPreview(i, file) {

      if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
        return alert(file.name +" is not an image");
      }
      var reader = new FileReader();

      $(reader).on("load", function() {
        $preview.append($("<img/>", {src:this.result}));
      });

      reader.readAsDataURL(file);

    }
  }

  $('#profile_image').on("change", previewprofileImage);
  $('#logo_image').on("change", previewlogoImage);
  $('#feature_image').on("change", previewfeatureImages);

  $(window).on('load', function () {
    //alert($("#vendor_catagory").val());

    /*Venue*/
    if ($("#vendor_catagory").val() == '9') {

      $("#lowest_price_div").css('display', ($("#vendor_catagory").val() == '9') ? 'block' : 'none').attr('required',true);

      $("#venue_area").css('display', ($("#vendor_catagory").val() == '9') ? 'block' : 'none').attr('required',true);
      $("#venue_area option[value='{{$data->area}}']").attr("selected", true).trigger('change');

      feature('Location','Venue Type','Max. Seating Capacity','Outside Caterer','Outside Decoration','Parking Size','Parking Size','Timing',8);

    }

    /*DJ*/
    else if ($("#vendor_catagory").val() == '10') {

      $("#lowest_price_div").css('display', ($("#vendor_catagory").val() == '10') ? 'block' : 'none').attr('required',true);

      feature('Performing Time','Industry Experience (Years)','Light Setup','Sound Setup','Custom Song List','Booking Method','Book Before','Outside City Service',8);

    }

    /*catering*/
    else if ($("#vendor_catagory").val() == '11'){


      $("#lowest_price_div").css('display', ($("#vendor_catagory").val() == '11') ? 'block' : 'none').attr('required',true);


      $("#menu_type").css('display', ($("#vendor_catagory").val() == '11') ? 'block' : 'none').attr('required',true);
      @php
        $menus = explode(",",$data->menu_type);
      @endphp
      @foreach ($menus as $menu)
        $("#menu_type option[value='{{$menu}}']").attr("selected", true).trigger('change');
      @endforeach

      feature('Location','Industry Experience','Min. Order','Cookeries & Cutleries','Waiter','Home Delivery','Booking Method','Outside City Service',8);

    }

    /*photography and cinematography*/
    else if ($("#vendor_catagory").val() == '12'){

      $("#lowest_price_div").css('display', ($("#vendor_catagory").val() == '12') ? 'block' : 'none').attr('required',true);


      $("#event_type").css('display', ($("#vendor_catagory").val() == '12') ? 'block' : 'none').attr('required',true);
      @php
        $events = explode(",",$data->event_type);
      @endphp
      @foreach ($events as $event)
        $("#event_type option[value='{{$event}}']").attr("selected", true).trigger('change');
      @endforeach

      feature('Location','Industry Experience','Service Time','Corporate Event','Additional Hour Rate','Booking Method','Delivery Time','Outside City Service',8);

    }

    /*decoration*/
    else if ($("#vendor_catagory").val() == '13'){

      $("#lowest_price_div").css('display', ($("#vendor_catagory").val() == '13') ? 'block' : 'none').attr('required',true);


      $("#event_type").css('display', ($("#vendor_catagory").val() == '13') ? 'block' : 'none').attr('required',true);
      @php
        $events = explode(",",$data->event_type);
      @endphp
      @foreach ($events as $event)
        $("#event_type option[value='{{$event}}']").attr("selected", true).trigger('change');
      @endforeach


      feature('Location','Industry Experience','Booking Method','Outside City Service','Theme Design','Wedding','Corporate Event','Birthday',8);

    }

    /*invitation cards*/
    else if ($("#vendor_catagory").val() == '14'){

      $("#lowest_price_div").css('display', ($("#vendor_catagory").val() == '14') ? 'block' : 'none').attr('required',true);

      $("#speciality").css('display', ($("#vendor_catagory").val() == '14') ? 'block' : 'none').attr('required',true);
      @php
        $specialitys = explode(",",$data->speciality_type);
      @endphp
      @foreach ($specialitys as $speciality)
        $("#speciality option[value='{{$speciality}}']").attr("selected", true).trigger('change');
      @endforeach

      feature('Location','Industry Experience','Min. Order','Custom Design','Handmade Card','Delivery Time','Home Delivery','Booking Method',8);

    }

    /*makeup artist*/
    else if ($("#vendor_catagory").val() == '15'){

      $("#lowest_price_div").css('display', ($("#vendor_catagory").val() == '15') ? 'block' : 'none').attr('required',true);

      feature('Location','Industry Experience','Timing','Men only\\Women only\\ Both','Home Service','Booking Method','Book Before','Outside City Service',8);

    }

    /*bakeries*/
    else if ($("#vendor_catagory").val() == '16'){

      $("#lowest_price_div").css('display', ($("#vendor_catagory").val() == '16') ? 'block' : 'none').attr('required',true);

      $("#bakery_speciality").css('display', ($("#vendor_catagory").val() == '16') ? 'block' : 'none').attr('required',true);
      @php
        $bake_specialitys = explode(",",$data->speciality_type);
      @endphp
      @foreach ($bake_specialitys as $bake_speciality)
        $("#bakery_speciality option[value='{{$bake_speciality}}']").attr("selected", true).trigger('change');
      @endforeach

      feature('Location','Industry Experience','Min. Order','Customization','Wedding Cake','Home Delivery','Booking Method','Order Before',8);

    }

    /*Mehdi*/
     else if ($("#vendor_catagory").val() == '17'){
       $("#lowest_price_div").css('display', ($("#vendor_catagory").val() == '17') ? 'block' : 'none').attr('required',true);


      feature('Location','Industry Experience','Home Service','Booking Method','Book Before','Outside City Service','','',6);

    }

    /*Kazi*/
    else if ($("#vendor_catagory").val() == '18'){  /*Kazi*/

      $("#kazi_area").css('display', ($("#vendor_catagory").val() == '18') ? 'block' : 'none').attr('required',true);
      $("#kazi_area option[value='{{$data->area}}']").attr("selected", true).trigger('change');

      //$("#kazi_area").css('display', ($("#vendor_catagory").val() == '18') ? 'block' : 'none').attr('required',true);

      //$("#kazi_area_select option[value='{{$data->area}}']").attr("selected", true).trigger('change');



      feature('Location','Industry Experience (Years)','Booking Method','Book Before','','','','',4);

    }

    /*Edit option for Bridal outfit & Jewellery */
    /**bridal_outfit*/
    else if ($("#vendor_catagory").val() == '23'){


      $("#type_1").css('display', ($("#vendor_catagory").val() == '23') ? 'block' : 'none').attr('required',true);
      @php
        $event_types = explode(",",$data->type_1);
      @endphp
      @foreach ($event_types as $event_type)
        $("#type_1 option[value='{{$event_type}}']").attr("selected", true).trigger('change');
      @endforeach

      $("#type_2").css('display', ($("#vendor_catagory").val() == '23') ? 'block' : 'none').attr('required',true);
      $("#type_3").css('display', ($("#vendor_catagory").val() == '23') ? 'block' : 'none').attr('required',true);
      $("#type_4").css('display', ($("#vendor_catagory").val() == '23') ? 'block' : 'none').attr('required',true);
      $("#type_5").css('display', ($("#vendor_catagory").val() == '23') ? 'block' : 'none').attr('required',true);
      $("#type_6").css('display', ($("#vendor_catagory").val() == '23') ? 'block' : 'none').attr('required',true);


      /*$("#lowest_price").css('display', ($("#vendor_catagory").val() == '23') ? 'none' : 'none').attr('required',false);
      $("#lowest_price_div").css('display', ($("#vendor_catagory").val() == '23') ? 'none' : 'none');*/


      feature('Location','Business Type','Customization','Payment Method','Delivery Time','Industry Experience','','',6);




    }

    /**Jewellery*/
    else if ($("#vendor_catagory").val() == '24'){

      $("#type_1").css('display', ($("#vendor_catagory").val() == '23') ? 'block' : 'none').attr('required',true);
      @php
        $event_types = explode(",",$data->type_1);
      @endphp
      @foreach ($event_types as $event_type)
        $("#type_1 option[value='{{$event_type}}']").attr("selected", true).trigger('change');
      @endforeach

      $("#type_2").css('display', ($("#vendor_catagory").val() == '23') ? 'block' : 'none').attr('required',true);
      $("#type_3").css('display', ($("#vendor_catagory").val() == '23') ? 'block' : 'none').attr('required',true);
      $("#type_4").css('display', ($("#vendor_catagory").val() == '23') ? 'block' : 'none').attr('required',true);
      $("#type_5").css('display', ($("#vendor_catagory").val() == '23') ? 'block' : 'none').attr('required',true);
      $("#type_6").css('display', ($("#vendor_catagory").val() == '23') ? 'block' : 'none').attr('required',true);



      feature('Location','Business Type','Customization','Payment Method','Delivery Time','Industry Experience','','',6);
    }

  });

  /*Nirjhor Edit for feature placeholder and display*/
    function feature(feature_1,feature_2,feature_3,feature_4,feature_5,feature_6,feature_7,feature_8,number_of_feature){

      $("#feature1").css('display','block').attr('placeholder', feature_1);
      $("#feature2").css('display','block').attr('placeholder', feature_2);
      $("#feature3").css('display','block').attr('placeholder', feature_3);
      $("#feature4").css('display','block').attr('placeholder', feature_4);
      $("#feature5").css('display','block').attr('placeholder', feature_5);
      $("#feature6").css('display','block').attr('placeholder', feature_6);
      $("#feature7").css('display','block').attr('placeholder', feature_7);
      $("#feature8").css('display','block').attr('placeholder', feature_8);

      if(number_of_feature == 4){
        $("#feature1_div").css('display','block');
        $("#feature2_div").css('display','block');
        $("#feature3_div").css('display','block');
        $("#feature4_div").css('display','block');


      }else if(number_of_feature == 5){
        $("#feature1_div").css('display','block');
        $("#feature2_div").css('display','block');
        $("#feature3_div").css('display','block');
        $("#feature4_div").css('display','block');
        $("#feature5_div").css('display','block');

      }
      else if(number_of_feature == 6){
        $("#feature1_div").css('display','block');
        $("#feature2_div").css('display','block');
        $("#feature3_div").css('display','block');
        $("#feature4_div").css('display','block');
        $("#feature5_div").css('display','block');
        $("#feature6_div").css('display','block');

      }else if(number_of_feature == 7){
        $("#feature1_div").css('display','block');
        $("#feature2_div").css('display','block');
        $("#feature3_div").css('display','block');
        $("#feature4_div").css('display','block');
        $("#feature5_div").css('display','block');
        $("#feature6_div").css('display','block');
        $("#feature7_div").css('display','block');

      }
      else{
        $("#feature1_div").css('display','block');
        $("#feature2_div").css('display','block');
        $("#feature3_div").css('display','block');
        $("#feature4_div").css('display','block');
        $("#feature5_div").css('display','block');
        $("#feature6_div").css('display','block');
        $("#feature7_div").css('display','block');
        $("#feature8_div").css('display','block');
      }



    }

</script>

@endpush
