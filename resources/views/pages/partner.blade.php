@extends('layouts.app')

@push('css')

@endpush

@section('content')
    <!-- Masthead -->
    <header class="pagehead" style="background-image:url({{ asset('img/backgrounds/header_bg_index.jpg') }});height:auto;background-position:center;background-repeat:no-repeat;background-size:cover">
        <div class="container">
            <div class="row">
                <div class="col-12 my-auto text-center text-white">
                    <img class="pagehead-img img-fluid mt-5 mb-5" src="{{ asset('img/logo_final.png') }}" alt="">
                </div>
            </div>
        </div>
    </header>

    <!-- Form for query section -->
    <section class="page-section" id="contact" style="background-image: url('img/backgrounds/partner2.jpg');height:auto;background-position:center;background-repeat:no-repeat;background-size:cover;">
        <div class="container wow fadeIn mt-md-3 mt-lg-3">
            <div class="text-center contact-header">
                <h2 class="font-weight-normal">BE A PART OF OUR TEAM</h2>
                <hr class="colored">
                <p>Join our ever increasing team of vendors who have trusted us to take their business to the next level.</p>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-8 col-lg-8 mx-auto">
                    <form name="sentMessage" id="partnerForm" novalidate>
                        {{ csrf_field() }}
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control contact-placeholder" placeholder="Name" id="your_name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Company Name</label>
                                <input type="text" class="form-control contact-placeholder" placeholder="Company Name" id="company_name" required data-validation-required-message="Please enter your company's name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <select id="business_type" class="selectpicker" data-width="100%" required data-validation-required-message="Please select your business type" title="Select Your Business Type">
                                    <option style="color:#f6f6f6;background-color:#1d1c1c;" value="Venue">Venue</option>
                                    <option style="color:#f6f6f6;background-color:#1d1c1c;" value="Catering">Catering</option>
                                    <option style="color:#f6f6f6;background-color:#1d1c1c;" value="Photography & Cinematography">Photography & Cinematography</option>
                                    <option style="color:#f6f6f6;background-color:#1d1c1c;" value="Decoration">Decoration</option>
                                    <option style="color:#f6f6f6;background-color:#1d1c1c;" value="Invitation Cards">Invitation Cards</option>
                                    <option style="color:#f6f6f6;background-color:#1d1c1c;" value="DJ">DJ</option>
                                    <option style="color:#f6f6f6;background-color:#1d1c1c;" value="Makeup Artist">Makeup Artist</option>
                                    <option style="color:#f6f6f6;background-color:#1d1c1c;" value="Bakeries">Bakeries</option>
                                    <option style="color:#f6f6f6;background-color:#1d1c1c;" value="Mehedi">Mehedi</option>
                                    <option style="color:#f6f6f6;background-color:#1d1c1c;" value="Kazi">Kazi</option>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Contact Address</label>
                                <textarea type="text" class="form-control contact-placeholder" placeholder="Contact Address" id="contact_address" required data-validation-required-message="Please enter your contact address."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Office Address</label>
                                <textarea type="text" class="form-control contact-placeholder" placeholder="Office Address" id="office_address"></textarea>
                            </div>
                        </div>


                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control contact-placeholder" placeholder="Email Address" id="your_email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control contact-placeholder" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Years of Experience</label>
                                <input type="number" class="form-control contact-placeholder" placeholder="Years of Experience" id="your_experience" required data-validation-required-message="Please enter your working experience">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control contact-placeholder" placeholder="Message" id="mess"></textarea>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Form for query section -->
@endsection

@push('scripts')
    <script src="{{asset('js/partner_contact.js')}}" charset="utf-8"></script>
@endpush
