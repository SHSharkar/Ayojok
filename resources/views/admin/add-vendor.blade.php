@extends('layouts.admin')

@push('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
<style>
    img {
        max-width: 30rem;
        margin: 0.5rem;
    }

    .select2 {
        width: 100% !important;
    }
</style>
@endpush

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add New Vendor
            </h1>
        </section>

        <section class="maincontent">

            <div class="col-md-12" style="margin-top:2rem;">

                <div class="box box-primary">
                    <div class="box-body" style="margin-top:2rem;">
                        <form action="{{route('vendors.store')}}" method="post" class="form-horizontal"
                              enctype="multipart/form-data">
                            <div class="col-md-6" style="margin-bottom:2rem;">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="vendor_name" class="control-label col-md-3">Vendor Name: <span
                                                style="color:red;">*</span> </label>

                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="vendor_name"
                                               placeholder="Enter name" name="vendor_title" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3" for="about_us">Vendor About Us: </label>

                                    <div class="col-md-9">
                                        <textarea rows="5" class="form-control" id="about_us"
                                                  placeholder="Enter about us" name="about_us"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3" for="vendor_contact">Vendor Contact : <span
                                                style="color:red;">*</span> </label>

                                    <div class="col-md-9">
                                        <textarea rows="3" class="form-control" id="vendor_contact"
                                                  placeholder="Enter contact us" name="vendor_contact"
                                                  required></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3" for="vendor_catagory">Catagory: <span
                                                style="color:red;">*</span></label>

                                    <div class="col-md-9">
                                        <select style="padding: 5px;" class="form-control" id="vendor_catagory"
                                                name="vendor_catagory" required>
                                            <option value="">-- Select any type --</option>
                                            @foreach ($catagories as $catagory)
                                                <option value="{{$catagory->id}}"
                                                        style="text-transform:capitalize;">{{$catagory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group">
                                    <label for="startingat_1_title" class="control-label col-md-4">Starting Price Title
                                        (Catagory 1): <span style="color:red;">*</span> </label>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="startingat_1_title"
                                               placeholder="Enter name" name="startingat_1_title" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="startingat_1_price" class="control-label col-md-4">Starting Price Price
                                        (Catagory 1): <span style="color:red;">*</span> </label>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="startingat_1_price"
                                               placeholder="Enter name" name="startingat_1_price" required>
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group">
                                    <label for="startingat_1_title" class="control-label col-md-4">Starting Price Title
                                        (Catagory 2):</label>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="startingat_2_title"
                                               placeholder="Enter name" name="startingat_2_title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="startingat_1_price" class="control-label col-md-4">Starting Price Price
                                        (Catagory 2):</label>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="startingat_2_price"
                                               placeholder="Enter name" name="startingat_2_price">
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group">
                                    <label for="startingat_1_title" class="control-label col-md-4">Starting Price Title
                                        (Catagory 3):</label>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="startingat_3_title"
                                               placeholder="Enter name" name="startingat_3_title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="startingat_1_price" class="control-label col-md-4">Starting Price Price
                                        (Catagory 3):</label>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="startingat_3_price"
                                               placeholder="Enter name" name="startingat_3_price">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <table class="table table-responsive">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-group" id="feature1_lbl">
                                                <label for="feature1" class="control-label" id="">Feature 1:
                                                    <span style="color:red;">*</span> </label>
                                                <input type="text" class="form-control" id="feature1" name="feature1"
                                                       placeholder="Feature 1" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group" id="feature2_lbl">
                                                <label for="feature2" class="control-label" id="">Feature 2:
                                                    <span style="color:red;">*</span> </label>
                                                <input type="text" class="form-control" id="feature2" name="feature2"
                                                       placeholder="Feature 2" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group" id="feature3_lbl">
                                                <label for="feature3" class="control-label" id="">Feature 3:
                                                    <span style="color:red;">*</span> </label>
                                                <input type="text" class="form-control" id="feature3" name="feature3"
                                                       placeholder="Feature 3" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group" id="feature4_lbl">
                                                <label for="feature4" class="control-label" id="">Feature 4:
                                                    <span style="color:red;">*</span> </label>
                                                <input type="text" class="form-control" id="feature4" name="feature4"
                                                       placeholder="Feature 4" required>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="form-group" id="feature5_lbl">
                                                <label for="feature5" class="control-label" id="">Feature 5:
                                                    <span style="color:red;">*</span> </label>
                                                <input type="text" class="form-control" id="feature5" name="feature5"
                                                       placeholder="Feature 5" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group" id="feature6_lbl">
                                                <label for="feature6" class="control-label" id="">Feature 6:
                                                    <span style="color:red;">*</span> </label>
                                                <input type="text" class="form-control" id="feature6" name="feature6"
                                                       placeholder="Feature 6" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group" id="feature7_lbl">
                                                <label for="feature7" class="control-label" id="">Feature
                                                    7:<span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" id="feature7" name="feature7"
                                                       placeholder="Feature 7">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group" id="feature8_lbl">
                                                <label for="feature8" class="control-label" id="">Feature
                                                    8:<span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" id="feature8" name="feature8"
                                                       placeholder="Feature 8">
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                 <div class="form-group" id="lowest_price">
                                     <label class="control-label col-md-2" for="lowest_price" id="lowest_price_lbl">Lowest
                                         Price: <span style="color:red;">*</span></label>

                                     <div class="col-md-10">
                                         <input type="text" class="form-control" id="lowest_price" name="lowest_price"
                                                placeholder="Enter the lowest price for the filter" >
                                     </div>
                                 </div>


                                <div class="form-group" id="venue_area" style="display:none;">
                                    <label class="control-label col-md-2" for="venue_area">Area: <span style="color:red;">*</span></label>

                                    <div class="col-md-10">
                                        <select class="form-control" name="venue_area" id="venue_area_select">
                                            <option value="">-- Area In The City --</option>
                                            <option class="option" value="destination wedding">destination wedding
                                            </option>
                                            <option class="option" value="uttara">Uttara</option>
                                            <option class="option" value="Lalmatia-Dhanmondi">Lalmatia - Dhanmondi
                                            </option>
                                            <option class="option" value="Paltan-Motijheel">Paltan - Motijheel</option>
                                            <option class="option" value="Badda-Banasree">Badda - Banasree</option>
                                            <option class="option" value="gulshan-banani">Gulshan - Banani</option>
                                            <option class="option" value="Rampura-Khilgaon">Rampura - Khilgaon</option>
                                            <option class="option" value="Rajarbag-Shantinagar">Rajarbag - Shantinagar
                                            </option>
                                            <option class="option" value="Magbazar - Eskaton">Magbazar - Eskaton
                                            </option>
                                            <option class="option" value="mirpur-pallabi">Mirpur - Pallabi</option>
                                            <option class="option" value="Lalbag-Azimpur">Lalbag - Azimpur</option>
                                            <option class="option" value="shamoli-mohammadpur">Shamoli - Mohammadpur
                                            </option>

                                            <option class="option" value="Mohakhali-Khilgaon">Mohakhali - Khilgaon
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group" id="kazi_area" style="display:none;">
                                    <label class="control-label col-md-2" for="kazi_area">Kazi Area: <span style="color:red;">*</span></label>

                                    <div class="col-md-10">
                                        <select class="form-control" name="kazi_area" id="kazi_area_select">
                                            <option value="">Area In The City</option>
                                            <option class="option" value="uttara">Uttara</option>
                                            <option class="option" value="Shamoli-Mohammadpur">Shamoli - Mohammadpur
                                            </option>
                                            <option class="option" value="Magbazar-Eskaton">Magbazar - Eskaton</option>
                                            <option class="option" value="Badda-Banasree">Badda - Banasree</option>
                                            <option class="option" value="Baridhara-Bosundhara">Baridhara - Bosundhara
                                            </option>
                                            <option class="option" value="Firmget-Mohakhali">Firmget - Mohakhali
                                            </option>
                                            <option class="option" value="Old-dhaka">Old Dhaka</option>
                                            <option class="option" value="Lalbag-Azimpur">Lalbag - Azimpur</option>
                                            <option class="option" value="Mirpur-Pallabi">Mirpur - Pallabi</option>
                                            <option class="option" value="Cantonment-Kafrul">Cantonment - Kafrul
                                            </option>
                                            <option class="option" value="Paltan-Motijheel">Paltan - Motijheel</option>
                                            <option class="option" value="Gulshan-Banani">Gulshan - Banani</option>
                                            <option class="option" value="Lalmatia-Dhanmondi">Lalmatia - Dhanmondi
                                            </option>
                                            <option class="option" value="Rampura-Khilgaon">Rampura - Khilgaon</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group" id="menu_type" style="display:none;">
                                    <label class="control-label col-md-2" for="menu_type">Menu Type: <span style="color:red;">*</span></label>

                                    <div class="col-md-10">
                                        <select class="form-control" id="menu_type_select" name="menu_type[]"
                                                multiple="multiple">
                                            <option class="option" value="fixed">Fixed Menu</option>
                                            <option class="option" value="chef">Chef Only</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group" id="event_type" style="display:none;">
                                    <label class="control-label col-md-2" for="event_type">Event Type: <span style="color:red;">*</span></label>

                                    <div class="col-md-10">
                                        <select class="form-control" id="event_type_select" name="event_type[]"
                                                multiple="multiple">
                                            <option class="option" value="wedding">Wedding</option>
                                            <option class="option" value="birthday">Birthday</option>
                                            <option class="option" value="corporate">Corporate</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group" id="speciality" style="display:none;">
                                    <label class="control-label col-md-2" for="speciality">Speciality: <span style="color:red;">*</span></label>

                                    <div class="col-md-10">
                                        <select class="form-control" id="speciality_select" name="speciality[]"
                                                multiple="multiple">
                                            <option class="option" value="paper">Paper Made</option>
                                            <option class="option" value="wood">Wood Made</option>
                                            <option class="option" value="hand">Hand Made</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group" id="bakery_speciality" style="display:none;">
                                    <label class="control-label col-md-2" for="bakery_speciality">Bakery
                                        Speciality: <span style="color:red;">*</span></label>

                                    <div class="col-md-10">
                                        <select class="form-control" id="bakery_speciality_select"
                                                name="bakery_speciality[]" multiple="multiple">
                                            <option class="option" value="birthday">Birthday Pastry</option>
                                            <option class="option" value="wedding">Wedding Pastry</option>
                                            <option class="option" value="snacks">Snacks</option>
                                        </select>
                                    </div>
                                </div>


                                {{--Bridal Outfits & Jewellery's feature--}}

                                <div class="form-group" id="type_1" style="display:none;">
                                    <label class="control-label col-md-2" for="event_type">Type 1: </label>

                                    <div class="col-md-10">
                                        <select class="form-control" id="type_1_select" name="type_1[]"
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
                                        <input type="text" class="form-control" name="type_2">
                                    </div>
                                </div>
                                <div class="form-group" id="type_3" style="display:none;">
                                    <label class="control-label col-md-2" for="event_type3">Type 3: </label>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="type_3">
                                    </div>
                                </div>
                                <div class="form-group" id="type_4" style="display:none;">
                                    <label class="control-label col-md-2" for="event_type4">Type 4: </label>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="type_4">
                                    </div>
                                </div>
                                <div class="form-group" id="type_5" style="display:none;">
                                    <label class="control-label col-md-2" for="event_type5">Type 5: </label>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="type_5">
                                    </div>
                                </div>
                                <div class="form-group" id="type_6" style="display:none;">
                                    <label class="control-label col-md-2" for="event_type6">Type 6: </label>

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="type_6">
                                    </div>
                                </div>


                                {{--Image Starts--}}

                                <div class="form-group">
                                    <div class="control-label col-lg-2">
                                        <label class="" for="profile_image">Profile Image:</label>

                                        <p>Max (600x600)</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="file" name="profile_image" id="profile_image" accept="image/*"
                                               class="form-control">
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
                                        <input type="file" name="logo_image" id="logo_image" accept="image/*"
                                               class="form-control">
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
                                        <input type="file" name="feature_image[]" id="feature_image" accept="image/*"
                                               class="form-control" multiple>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="Extra Image">Feature Image Preview</label>

                                        <div id="feature_image_preview"></div>
                                    </div>
                                </div>

                            </div>
                            <div>
                                <button class="btn btn-primary pull-right" type="submit">Upload vendor</button>
                            </div>
                        </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    function previewprofileImage() {
        var $preview = $('#profile-preview').empty();
        if (this.files) $.each(this.files, readAndPreview);

        function readAndPreview(i, file) {

            if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                return alert(file.name + " is not an image");
            }
            var reader = new FileReader();

            $(reader).on("load", function () {
                $preview.append($("<img/>", {src: this.result}));
            });

            reader.readAsDataURL(file);

        }
    }

    function previewlogoImage() {
        var $preview = $('#logo-preview').empty();
        if (this.files) $.each(this.files, readAndPreview);

        function readAndPreview(i, file) {

            if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                return alert(file.name + " is not an image");
            }
            var reader = new FileReader();

            $(reader).on("load", function () {
                $preview.append($("<img/>", {src: this.result}));
            });

            reader.readAsDataURL(file);

        }
    }

    function previewfeatureImages() {

        if (this.files.length > 3) {
            alert('Too many files');
            var $preview = $('#feature_image_preview').empty();
        } else {
            var $preview = $('#feature_image_preview').empty();
            if (this.files) $.each(this.files, readAndPreview);
        }

        function readAndPreview(i, file) {

            if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                return alert(file.name + " is not an image");
            }
            var reader = new FileReader();

            $(reader).on("load", function () {
                $preview.append($("<img/>", {src: this.result}));
            });

            reader.readAsDataURL(file);

        }
    }

    $('#profile_image').on("change", previewprofileImage);
    $('#logo_image').on("change", previewlogoImage);
    $('#feature_image').on("change", previewfeatureImages);

    $('#vendor_catagory').on('change', function () {

        var fieldValue = 9;


        if (this.value == '9') {

            fieldValue = 9; /*Venue*/

            $("#venue_area").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);
            $("#lowest_price").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);


            $("#menu_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#event_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#bakery_speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#home_service").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#kazi_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);

            /*bridal outfit & jewellery*/
            $("#type_1").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_2").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_3").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_4").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_5").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_6").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);

            //alert('hello');
            /*Edit for feature1 - feature8 => change as category */
            //$("#feature1").attr('placeholder','Location');
            //$("#feature1").html('nodevalue','Location');
            chooseFeature_AsCategory(fieldValue);
            /*End of Edit for feature1 - feature8 => change as category */
        }

        else if (this.value == '10') {
            fieldValue = 10; /*DJ*/

            $("#lowest_price").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);

            $("#venue_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#menu_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#event_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#bakery_speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#home_service").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#kazi_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);

            /*bridal outfit & jewellery*/
            $("#type_1").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_2").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_3").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_4").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_5").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_6").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            /*Edit for feature1 - feature8 => change as category */
            chooseFeature_AsCategory(fieldValue);
            /*End of Edit for feature1 - feature8 => change as category */
        }
        else if (this.value == '11') {

            fieldValue = 11; /*Catering*/

            $("#menu_type").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);
            $("#lowest_price").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);

            $("#venue_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#event_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#bakery_speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#home_service").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#kazi_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);

            /*bridal outfit & jewellery*/
            $("#type_1").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_2").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_3").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_4").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_5").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_6").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);

            /*Edit for feature1 - feature8 => change as category */
            chooseFeature_AsCategory(fieldValue);
            /*End of Edit for feature1 - feature8 => change as category */
        }
        else if (this.value == '12') {
            fieldValue = 12;    /*Photography */

            $("#lowest_price").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);
            $("#event_type").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);


            $("#venue_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#menu_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#bakery_speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#home_service").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#kazi_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);

            /*bridal outfit & jewellery*/
            $("#type_1").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_2").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_3").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_4").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_5").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_6").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            /*Edit for feature1 - feature8 => change as category */
            chooseFeature_AsCategory(fieldValue);
            /*End of Edit for feature1 - feature8 => change as category */
        }
        else if (this.value == '13') {
            fieldValue = 13; /*decoration*/

            $("#lowest_price").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);
            $("#event_type").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);


            $("#venue_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#menu_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#bakery_speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#home_service").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#kazi_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);

            /*bridal outfit & jewellery*/
            $("#type_1").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_2").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_3").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_4").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_5").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_6").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            /*Edit for feature1 - feature8 => change as category */
            chooseFeature_AsCategory(fieldValue);
            /*End of Edit for feature1 - feature8 => change as category */
        }
        else if (this.value == '14') {
            fieldValue = 14; /*invitation*/

            $("#lowest_price").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);
            $("#speciality").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);


            $("#venue_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#menu_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#event_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#bakery_speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#home_service").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#kazi_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);

            /*bridal outfit & jewellery*/
            $("#type_1").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_2").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_3").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_4").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_5").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_6").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            /*Edit for feature1 - feature8 => change as category */
            chooseFeature_AsCategory(fieldValue);
            /*End of Edit for feature1 - feature8 => change as category */
        }
        else if (this.value == '15') {
            fieldValue = 15; /*makeup_feature*/

            /*bridal outfit & jewellery*/
            $("#lowest_price").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);

            $("#venue_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#menu_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#event_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#bakery_speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#home_service").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#kazi_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);

            /*bridal outfit & jewellery*/
            $("#type_1").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_2").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_3").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_4").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_5").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_6").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);

            /*Edit for feature1 - feature8 => change as category */
            chooseFeature_AsCategory(fieldValue);
            /*End of Edit for feature1 - feature8 => change as category */
        }
        else if (this.value == '16') {
            fieldValue = 16;    /*bakeries*/

            $("#lowest_price").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);
            $("#bakery_speciality").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);


            $("#venue_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#menu_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#event_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#home_service").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#kazi_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);

            /*bridal outfit & jewellery*/
            $("#type_1").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_2").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_3").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_4").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_5").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_6").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            /*Edit for feature1 - feature8 => change as category */
            chooseFeature_AsCategory(fieldValue);
            /*End of Edit for feature1 - feature8 => change as category */
        }
        else if (this.value == '17') {
            fieldValue = 17; /*Mehedi*/

            $("#lowest_price").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);

            $("#venue_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#menu_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#event_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#bakery_speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#home_service").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#kazi_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);

            /*bridal outfit & jewellery*/
            $("#type_1").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_2").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_3").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_4").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_5").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_6").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);

            /*Edit for feature1 - feature8 => change as category */
            chooseFeature_AsCategory(fieldValue);
            /*End of Edit for feature1 - feature8 => change as category */
        }
        else if (this.value == '18') {
            fieldValue = 18; /*kazi*/

            $("#kazi_area").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);

            $("#venue_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#lowest_price").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#menu_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#event_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#bakery_speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#home_service").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);

            /*bridal outfit & jewellery*/
            $("#type_1").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_2").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_3").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_4").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_5").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#type_6").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            /*Edit for feature1 - feature8 => change as category */
            chooseFeature_AsCategory(fieldValue);
            /*End of Edit for feature1 - feature8 => change as category */
        }
        else if (this.value == '23') { /*Bridal Outfit*/
            fieldValue = 23;

            $("#lowest_price").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);

            $("#venue_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#menu_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#event_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#bakery_speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#home_service").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#kazi_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);

            /*bridal outfit & jewellery*/
            $("#type_1").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);
            $("#type_2").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);
            $("#type_3").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);
            $("#type_4").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);
            $("#type_5").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);
            $("#type_6").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);

            chooseFeature_AsCategory(fieldValue);

        } else if (this.value == '24') { /*jewellery*/
            fieldValue = 24;

            $("#lowest_price").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);

            $("#venue_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#menu_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#event_type").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#bakery_speciality").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#home_service").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);
            $("#kazi_area").css('display', (this.value == fieldValue) ? 'none' : 'none').attr('required', false);

            /*bridal outfit & jewellery*/
            $("#type_1").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);
            $("#type_2").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);
            $("#type_3").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);
            $("#type_4").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);
            $("#type_5").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);
            $("#type_6").css('display', (this.value == fieldValue) ? 'block' : 'none').attr('required', true);

            chooseFeature_AsCategory(fieldValue);

        }
    });

    $('#menu_type_select,#event_type_select,#type_1_select,#speciality_select,#bakery_speciality_select,#venue_area_select,#home_service_select').select2();


    function chooseFeature_AsCategory(category_id) {


        /*$("#feature5").css('display','block').attr('required',true);
         $("#feature6").css('display','block').attr('required',true);
         $("#feature7").css('display','block').attr('required',true);
         $("#feature8").css('display','block').attr('required',true);
         $("#lowest_price").css('display','block').attr('required',true);
         $("#feature5_lbl").css('display','block').attr('required',true);
         $("#feature6_lbl").css('display','block').attr('required',true);
         $("#feature7_lbl").css('display','block').attr('required',true);
         $("#feature8_lbl").css('display','block').attr('required',true);
         $("#lowest_price_lbl").css('display','block').attr('required',true);*/


        /*Edit for Kazi & Mehedi*/

        /*$("#feature5").prop('disabled', false).attr('required', true);
        $("#feature6").prop('disabled', false).attr('required', true);
        $("#feature7").prop('disabled', false).attr('required', true);
        $("#feature8").prop('disabled', false).attr('required', true);
        $("#lowest_price").prop('disabled', false).attr('required', true);*/

        /*End of Edit for Kazi & Mehedi*/

        /*
         * 9  => venue
         * 10 => dj
         * 11 => catering
         * 12 => photography and cinematography
         * 13 => decoration
         * 14 => invitation cards
         * 15 => makeup artist
         * 16 => bakeries
         * 17 => mehedi
         * 18 => kazi
         * 23 => bridal outfit
         * 24 => jewellery
         *
         *
         * */


        if (category_id == 9) {  /*venue*/
            $("#feature1").css('display','block').attr('placeholder', 'Location').attr('required', true);
            $("#feature2").css('display','block').attr('placeholder', 'Venue Type').attr('required', true);
            $("#feature3").css('display','block').attr('placeholder', 'Max. Seating Capacity').attr('required', true);
            $("#feature4").css('display','block').attr('placeholder', 'Outside Caterer').attr('required', true);
            $("#feature5").css('display','block').attr('placeholder', 'Outside Decoration').attr('required', true);
            $("#feature6").css('display','block').attr('placeholder', 'Parking Size').attr('required', true);
            $("#feature7").css('display','block').attr('placeholder', 'Booking Method').attr('required', true);
            $("#feature8").css('display','block').attr('placeholder', 'Timing').attr('required', true);

            $("#feature1_lbl").css('display','block');
            $("#feature2_lbl").css('display','block');
            $("#feature3_lbl").css('display','block');
            $("#feature4_lbl").css('display','block');
            $("#feature5_lbl").css('display','block');
            $("#feature6_lbl").css('display','block');
            $("#feature7_lbl").css('display','block');
            $("#feature8_lbl").css('display','block');
        }
        else if (category_id == 10) { /*dj*/
            $("#feature1").css('display','block').attr('placeholder', 'Performing Time');
            $("#feature2").css('display','block').attr('placeholder', 'Industry Experience (Years)');
            $("#feature3").css('display','block').attr('placeholder', 'Light Setup');
            $("#feature4").css('display','block').attr('placeholder', 'Sound Setup');
            $("#feature5").css('display','block').attr('placeholder', 'Custom Song List');
            $("#feature6").css('display','block').attr('placeholder', 'Booking Method');
            $("#feature7").css('display','block').attr('placeholder', 'Book Before');
            $("#feature8").css('display','block').attr('placeholder', 'Outside City Service');

            $("#feature1_lbl").css('display','block');
            $("#feature2_lbl").css('display','block');
            $("#feature3_lbl").css('display','block');
            $("#feature4_lbl").css('display','block');
            $("#feature5_lbl").css('display','block');
            $("#feature6_lbl").css('display','block');
            $("#feature7_lbl").css('display','block');
            $("#feature8_lbl").css('display','block');
        }
        else if (category_id == 11) { /*catering*/
            $("#feature1").css('display','block').attr('placeholder', 'Location');
            $("#feature2").css('display','block').attr('placeholder', 'Industry Experience');
            $("#feature3").css('display','block').attr('placeholder', 'Min. Order');
            $("#feature4").css('display','block').attr('placeholder', 'Cookeries & Cutleries');
            $("#feature5").css('display','block').attr('placeholder', 'Waiter');
            $("#feature6").css('display','block').attr('placeholder', 'Home Delivery');
            $("#feature7").css('display','block').attr('placeholder', 'Booking Method');
            $("#feature8").css('display','block').attr('placeholder', 'Outside City Service');

            $("#feature1_lbl").css('display','block');
            $("#feature2_lbl").css('display','block');
            $("#feature3_lbl").css('display','block');
            $("#feature4_lbl").css('display','block');
            $("#feature5_lbl").css('display','block');
            $("#feature6_lbl").css('display','block');
            $("#feature7_lbl").css('display','block');
            $("#feature8_lbl").css('display','block');
        }
        else if (category_id == 12) { /*photography and cinematography*/
            $("#feature1").css('display','block').attr('placeholder', 'Location');
            $("#feature2").css('display','block').attr('placeholder', 'Industry Experience');
            $("#feature3").css('display','block').attr('placeholder', 'Service Time');
            $("#feature4").css('display','block').attr('placeholder', 'Corporate Event');
            $("#feature5").css('display','block').attr('placeholder', 'Additional Hour Rate');
            $("#feature6").css('display','block').attr('placeholder', 'Booking Method');
            $("#feature7").css('display','block').attr('placeholder', 'Delivery Time');
            $("#feature8").css('display','block').attr('placeholder', 'Outside City Service');

            $("#feature1_lbl").css('display','block');
            $("#feature2_lbl").css('display','block');
            $("#feature3_lbl").css('display','block');
            $("#feature4_lbl").css('display','block');
            $("#feature5_lbl").css('display','block');
            $("#feature6_lbl").css('display','block');
            $("#feature7_lbl").css('display','block');
            $("#feature8_lbl").css('display','block');
        }
        else if (category_id == 13) { /*decoration*/
            $("#feature1").css('display','block').attr('placeholder', 'Location');
            $("#feature2").css('display','block').attr('placeholder', 'Industry Experience');
            $("#feature3").css('display','block').attr('placeholder', 'Booking Method');
            $("#feature4").css('display','block').attr('placeholder', 'Outside City Service');
            $("#feature5").css('display','block').attr('placeholder', 'Theme Design');
            $("#feature6").css('display','block').attr('placeholder', 'Wedding');
            $("#feature7").css('display','block').attr('placeholder', 'Corporate Event');
            $("#feature8").css('display','block').attr('placeholder', 'Birthday');

            $("#feature1_lbl").css('display','block');
            $("#feature2_lbl").css('display','block');
            $("#feature3_lbl").css('display','block');
            $("#feature4_lbl").css('display','block');
            $("#feature5_lbl").css('display','block');
            $("#feature6_lbl").css('display','block');
            $("#feature7_lbl").css('display','block');
            $("#feature8_lbl").css('display','block');
        }
        else if (category_id == 14) { /*invitation cards*/
            $("#feature1").css('display','block').attr('placeholder', 'Location');
            $("#feature2").css('display','block').attr('placeholder', 'Industry Experience');
            $("#feature3").css('display','block').attr('placeholder', 'Min. Order');
            $("#feature4").css('display','block').attr('placeholder', 'Custom Design');
            $("#feature5").css('display','block').attr('placeholder', 'Handmade Card');
            $("#feature6").css('display','block').attr('placeholder', 'Delivery Time');
            $("#feature7").css('display','block').attr('placeholder', 'Home Delivery');
            $("#feature8").css('display','block').attr('placeholder', 'Booking Method');

            $("#feature1_lbl").css('display','block');
            $("#feature2_lbl").css('display','block');
            $("#feature3_lbl").css('display','block');
            $("#feature4_lbl").css('display','block');
            $("#feature5_lbl").css('display','block');
            $("#feature6_lbl").css('display','block');
            $("#feature7_lbl").css('display','block');
            $("#feature8_lbl").css('display','block');
        }
        else if (category_id == 15) { /*makeup artist*/
            $("#feature1").css('display','block').attr('placeholder', 'Location');
            $("#feature2").css('display','block').attr('placeholder', 'Industry Experience');
            $("#feature3").css('display','block').attr('placeholder', 'Timing');
            $("#feature4").css('display','block').attr('placeholder', 'Men only\\Women only\\ Both');
            $("#feature5").css('display','block').attr('placeholder', 'Home Service');
            $("#feature6").css('display','block').attr('placeholder', 'Booking Method');
            $("#feature7").css('display','block').attr('placeholder', 'Book Before');
            $("#feature8").css('display','block').attr('placeholder', 'Outside City Service');

            $("#feature1_lbl").css('display','block');
            $("#feature2_lbl").css('display','block');
            $("#feature3_lbl").css('display','block');
            $("#feature4_lbl").css('display','block');
            $("#feature5_lbl").css('display','block');
            $("#feature6_lbl").css('display','block');
            $("#feature7_lbl").css('display','block');
            $("#feature8_lbl").css('display','block');
        }
        else if (category_id == 16) { /*bakeries*/
            $("#feature1").css('display','block').attr('placeholder', 'Location');
            $("#feature2").css('display','block').attr('placeholder', 'Industry Experience');
            $("#feature3").css('display','block').attr('placeholder', 'Min. Order');
            $("#feature4").css('display','block').attr('placeholder', 'Customization');
            $("#feature5").css('display','block').attr('placeholder', 'Wedding Cake');
            $("#feature6").css('display','block').attr('placeholder', 'Home Delivery');
            $("#feature7").css('display','block').attr('placeholder', 'Booking Method');
            $("#feature8").css('display','block').attr('placeholder', 'Order Before');

            $("#feature1_lbl").css('display','block');
            $("#feature2_lbl").css('display','block');
            $("#feature3_lbl").css('display','block');
            $("#feature4_lbl").css('display','block');
            $("#feature5_lbl").css('display','block');
            $("#feature6_lbl").css('display','block');
            $("#feature7_lbl").css('display','block');
            $("#feature8_lbl").css('display','block');
        }
        else if (category_id == 17) { /*mehedi*/
            $("#feature1").css('display','block').attr('placeholder', 'Location');
            $("#feature2").css('display','block').attr('placeholder', 'Industry Experience');
            $("#feature3").css('display','block').attr('placeholder', 'Home Service');
            $("#feature4").css('display','block').attr('placeholder', 'Booking Method');
            $("#feature5").css('display','block').attr('placeholder', 'Book Before');
            $("#feature6").css('display','block').attr('placeholder', 'Outside City Service');

            /*$("#feature7").css('display','none').attr('required',false);
             $("#feature8").css('display','none').attr('required',false);
             $("#feature7_lbl").css('display','block').attr('required',false);
             $("#feature8_lbl").css('display','block').attr('required',false);*/
            //$("#lowest_price_lbl").css('display','block').attr('required',true);

           // $("#feature7").attr('placeholder', '').prop('disabled', true).attr('required', false);
            //$("#feature8").attr('placeholder', '').prop('disabled', true).attr('required', false);

            $("#feature7").attr('placeholder', '').css('display',  'none').attr('required', false)
            $("#feature8").attr('placeholder', '').css('display',  'none').attr('required', false)

            $("#feature1_lbl").css('display','block');
            $("#feature2_lbl").css('display','block');
            $("#feature3_lbl").css('display','block');
            $("#feature4_lbl").css('display','block');
            $("#feature5_lbl").css('display','block');
            $("#feature6_lbl").css('display','block');

            $("#feature7_lbl").css('display','none');
            $("#feature8_lbl").css('display','none');


        }
        else if (category_id == 18) { /*kazi*/
            $("#feature1").css('display','block').attr('placeholder', 'Location');
            $("#feature2").css('display','block').attr('placeholder', 'Industry Experience (Years)');
            $("#feature3").css('display','block').attr('placeholder', 'Booking Method');
            $("#feature4").css('display','block').attr('placeholder', 'Book Before');


            $("#feature5").attr('placeholder', '').css('display',  'none').attr('required', false);
            $("#feature6").attr('placeholder', '').css('display',  'none').attr('required', false);
            $("#feature7").attr('placeholder', '').css('display',  'none').attr('required', false);
            $("#feature8").attr('placeholder', '').css('display',  'none').attr('required', false);
            $("#lowest_price").attr('placeholder', '').css('display',  'none').attr('required', false);


            /*$("#feature5").css('display','block').attr('required',false);
             $("#feature6").css('display','block').attr('required',false);
             $("#feature7").css('display','block').attr('required',false);
             $("#feature8").css('display','block').attr('required',false);*/

            /*$("#lowest_price").css('display','none').attr('required',false);


             $("#feature5_lbl").css('display','block').attr('required',false);
             $("#feature6_lbl").css('display','block').attr('required',false);
             $("#feature7_lbl").css('display','block').attr('required',false);
             $("#feature8_lbl").css('display','block').attr('required',false);

             $("#lowest_price_lbl").css('display','block').attr('required',false);*/


            $("#feature1_lbl").css('display','block');
            $("#feature2_lbl").css('display','block');
            $("#feature3_lbl").css('display','block');
            $("#feature4_lbl").css('display','block');

            $("#feature5_lbl").css('display','none');
            $("#feature6_lbl").css('display','none');
            $("#feature7_lbl").css('display','none');
            $("#feature8_lbl").css('display','none');


        }
        else if (category_id == 23) { /*Bridal Outfit*/
            $("#feature1").css('display','block').attr('placeholder', 'Location');
            $("#feature2").css('display','block').attr('placeholder', 'Business Type');
            $("#feature3").css('display','block').attr('placeholder', 'Customization');
            $("#feature4").css('display','block').attr('placeholder', 'Payment Method');
            $("#feature5").css('display','block').attr('placeholder', 'Delivery Time');
            $("#feature6").css('display','block').attr('placeholder', 'Industry Experience');

            $("#feature7").css('display','none').attr('required',false);
            $("#feature8").css('display','none').attr('required',false);


            /* $("#feature5").attr('placeholder','').prop('disabled', true).attr('required',false);
             $("#feature6").attr('placeholder','').prop('disabled', true).attr('required',false);
             $("#feature7").attr('placeholder','').prop('disabled', true).attr('required',false);
             $("#feature8").attr('placeholder','').prop('disabled', true).attr('required',false);
             $("#lowest_price").attr('placeholder','').prop('disabled', true).attr('required',false);*/


            /*$("#feature5").css('display','none').attr('required',false);
             $("#feature6").css('display','none').attr('required',false);
             $("#feature7").css('display','none').attr('required',false);
             $("#feature8").css('display','none').attr('required',false);

             $("#lowest_price").css('display','none').attr('required',false);


             $("#feature5_lbl").css('display','block').attr('required',false);
             $("#feature6_lbl").css('display','block').attr('required',false);
             $("#feature7_lbl").css('display','block').attr('required',false);
             $("#feature8_lbl").css('display','block').attr('required',false);

             $("#lowest_price_lbl").css('display','block').attr('required',false);*/

            $("#feature1_lbl").css('display','block');
            $("#feature2_lbl").css('display','block');
            $("#feature3_lbl").css('display','block');
            $("#feature4_lbl").css('display','block');
            $("#feature5_lbl").css('display','block');
            $("#feature6_lbl").css('display','block');

            $("#feature7_lbl").css('display','none');
            $("#feature8_lbl").css('display','none');


        }
        else if (category_id == 24) { /*Jewellery*/
            $("#feature1").css('display','block').attr('placeholder', 'Location');
            $("#feature2").css('display','block').attr('placeholder', 'Business Type');
            $("#feature3").css('display','block').attr('placeholder', 'Customization');
            $("#feature4").css('display','block').attr('placeholder', 'Payment Method');

            $("#feature5").css('display','block').attr('placeholder', 'Delivery Time');
            $("#feature6").css('display','block').attr('placeholder', 'Industry Experience');


             $("#feature7").css('display','none').attr('required',false);
             $("#feature8").css('display','none').attr('required',false);

            /* $("#lowest_price").css('display','none').attr('required',false);


             $("#feature5_lbl").css('display','block').attr('required',false);
             $("#feature6_lbl").css('display','block').attr('required',false);
             $("#feature7_lbl").css('display','block').attr('required',false);
             $("#feature8_lbl").css('display','block').attr('required',false);

             $("#lowest_price_lbl").css('display','block').attr('required',false);*/

            $("#feature1_lbl").css('display','block');
            $("#feature2_lbl").css('display','block');
            $("#feature3_lbl").css('display','block');
            $("#feature4_lbl").css('display','block');
            $("#feature5_lbl").css('display','block');
            $("#feature6_lbl").css('display','block');


            $("#feature7_lbl").css('display','none');
            $("#feature8_lbl").css('display','none');


        }
    }
</script>

@endpush
