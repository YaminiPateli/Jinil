@include('layouts.frontheader')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css"> -->

<section class="navi_page">
    <div class="container-fluid">
        <div class="navi_page_child">
            <div>
                <p class="title_24"><a href="./" class="text-585">Home</a> / Contact Us</p>
                <h2 class="title_60">Get in Touch</h2>
                <p class="mb-0">Get in touch with our engineering team to discuss your shot blasting, surface
                    preparation, or custom machine requirements. We’re here to support your project from concept to
                    commissioning.</p>
            </div>
            <div class="contact_circle">
                <img src="{{ asset('public/front/images/innder-header-jump.svg') }}" class="circle_text_img">
                <svg class="arrow_img" width="18" height="23" viewBox="0 0 18 23" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.85653 1.15617L8.85653 20.9552L8.85653 1.15617ZM8.85653 20.9552L16.5562 13.2555L8.85653 20.9552ZM8.85653 20.9552L1.15692 13.2556L8.85653 20.9552Z"
                        fill="#58595B" />
                    <path
                        d="M8.85653 1.15617L8.85653 20.9552M8.85653 20.9552L16.5562 13.2555M8.85653 20.9552L1.15692 13.2556"
                        stroke="#58595B" stroke-width="2.31318" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </div>
</section>

<section class="mb_100 con_map">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 pe-lg-5">
                <div class="inve_Pro_card">
                    <h4 class="title_24">Head Office</h4>
                    <p><a href="#">
                        Plot No. 27, Industrial Estate Phase II, Vatva GIDC, Ahmedabad, <br> Gujarat – 382445, India.
                    </a></p>
                    <hr>
                </div>
                <div class="inve_Pro_card">
                    <h4 class="title_24">Business Hours</h4>
                    <p>Monday – Saturday: 9:00 AM – 6:00 PM <br> Sunday: Closed</p>
                    <hr>
                </div>
                <div class="inve_Pro_card">
                    <h4 class="title_24">Direct Contact</h4>
                    <div class="con_num">
                        <div>
                            <p>Phone Number :</p>
                            <p>Support Number :</p>
                            <p>Email Address:</p>
                        </div>
                        <div>
                            <p><a href="#">+91 98765 43210</a></p>
                            <p><a href="#">+91 98765 43211</a></p>
                            <p><a href="#">support@jinil.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14695.24527920025!2d72.62683476778037!3d22.95717488773747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e88beffffffff%3A0xe57e1028c58dd90!2sPlot%20No.%3A%20A2%2F111%2COpp.%20Mayur%20Dyes%20%26%20International%20Ltd!5e0!3m2!1sen!2sin!4v1773141326188!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

@php
use Illuminate\Support\Facades\DB;
$countries = DB::table('countries')->select('id','name')->get();
$a = rand(1,9);
$b = rand(1,9);
@endphp

<section class="mt_100 mb_100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 pe-lg-5">
                <h2 class="title_80 fw-medium text-111"  style="mix-blend-mode: normal;">Need Technical Assistance?</h2>
                <p>Our experienced engineers can help you select the right shot blasting solution based on your application,
                    material type, and production capacity.</p>
            </div>

            <div class="col-lg-8">
                <form class="contact_form" id="contact_form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input type="text" name="name" placeholder=" " >
                            <label>Full Name<span class="text-danger">*</span>:</label>
                            <div id="name-error" class="text-danger"></div>
                        </div>

                        <div class="col-lg-6 form-group">
                            <input type="text" name="company_name" placeholder=" " >
                            <label>Company Name<span class="text-danger">*</span>:</label>
                            <div id="company_name-error" class="text-danger"></div>
                        </div>

                        <div class="col-lg-6 form-group">
                            <input type="tel" id="phone" name="phone" placeholder=" Phone Number *" >
                            <!-- <label class="phone_number">Phone Number<span class="text-danger">*</span>:</label> -->
                            <div id="full_phone-error" class="text-danger"></div>

                            <input type="hidden" name="country" id="contact_country">
                            <input type="hidden" name="phonecode" id="contact_phonecode">
                            <input type="hidden" name="contact" id="contact_value">
                            <input type="hidden" name="full_phone" id="contact_full_phone">
                        </div>

                        <div class="col-lg-6 form-group">
                            <input type="email" name="email" placeholder=" " >
                            <label>Email Address<span class="text-danger">*</span>:</label>
                            <div id="email-error" class="text-danger"></div>
                        </div>

                        <div class="col-lg-6 form-group">
                            <select name="state" id="state" >
                                <option value="">Select State</option>
                                @foreach($states as $state)
                                    <option value="{{ $state->name }}" data-id="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                            <label>State<span class="text-danger">*</span>:</label>
                            <div id="state-error" class="text-danger"></div>
                        </div>

                        <div class="col-lg-6 form-group">
                            <select name="city" id="city">
                                <option value="">Select City</option>
                            </select>
                            <label>City<span class="text-danger">*</span>:</label>
                            <div id="city-error" class="text-danger"></div>
                        </div>

                        <div class="col-lg-12 form-group">
                            <textarea rows="1" name="message" placeholder=" "></textarea>
                            <label>Requirement :</label>
                            <div id="message-error" class="text-danger"></div>
                        </div>

                        <div class="col-lg-3 form-group ">
                          
                            <div style="display:flex;gap:6px;">
                                <input type="number" id="simple_captcha" name="simple_captcha" placeholder="Enter answer"
                                    oninput="this.value=this.value.replace(/[^0-9]/g,'')">

                                      <label>
                                What is <span id="capA">{{ $a }}</span> + <span id="capB">{{ $b }}</span> ?
                            </label>

                                <button type="button" id="refreshCaptcha" style="border:0;background:#eee;padding:5px 8px;border-radius:5px;">↻</button>
                            </div>
                            <input type="hidden" name="captcha_sum" id="captcha_sum" value="{{ $a + $b }}">
                            <div id="simple_captcha-error" class="text-danger"></div>
                        </div>

                        <div class="col-lg-12 form-group">
                            <button type="submit" class="com_btn">Request a Quote</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<!-- 
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

<script>
    // State -> City
    $('#state').change(function(){
        var state_id = $('#state option:selected').data('id');
        if(state_id){
            $.ajax({
                url: "{{ url('get-cities') }}/"+state_id,
                type: "GET",
                success:function(data){
                    $('#city').html('<option value="">Select City</option>');
                    $.each(data,function(key,value){
                        $('#city').append('<option value="'+value.name+'">'+value.name+'</option>');
                    });
                }
            });
        }
    });

    // CAPTCHA
    function refreshCaptcha() {
        let a = Math.floor(Math.random() * 9) + 1;
        let b = Math.floor(Math.random() * 9) + 1;
        $('#capA').text(a);
        $('#capB').text(b);
        $('#captcha_sum').val(a + b);
        $('#simple_captcha').val('');
        $('#simple_captcha-error').text('');
    }
    $('#refreshCaptcha').click(refreshCaptcha);

    // intl-tel-input
    var input = document.querySelector("#phone");
    var iti = window.intlTelInput(input, {
        initialCountry: "auto",
        geoIpLookup: function(callback) {
            fetch("https://ipapi.co/json")
                .then(res => res.json())
                .then(data => callback(data.country_code))
                .catch(() => callback("in"));
        },
        separateDialCode: true,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js"
    });

    $("#phone").on("keyup change", function(){
        var countryData = iti.getSelectedCountryData();
        $("#contact_country").val(countryData.name);
        $("#contact_phonecode").val(countryData.dialCode);
        $("#contact_value").val(this.value);
        $("#contact_full_phone").val("+"+countryData.dialCode+this.value);
    });

    // AJAX Form Submission
    $(document).ready(function() {
        $('#contact_form').on('submit', function(e){
            e.preventDefault();
            $('.text-danger').text(''); // Clear errors
            $('#contact_full_phone').val("+"+iti.getSelectedCountryData().dialCode+$('#phone').val());
            let formData = $(this).serialize();

            $.ajax({
                url: "{{ route('contact.store') }}",
                type: "POST",
                data: formData,
                dataType: "json",
                beforeSend: function(){
                    $('.com_btn').attr('disabled', true).text('Sending...');
                },
                success: function(res){
                    $('.com_btn').attr('disabled', false).text('Request a Quote');
                    if(res.status === 'success' && res.redirect){
                        // Redirect to thank you page
                        window.location.href = res.redirect;
                    } else if(res.errors){
                        $.each(res.errors, function(key, value){
                            $('#'+key+'-error').text(value[0] || value);
                        });
                    }
                },
                error: function(xhr){
                    $('.com_btn').attr('disabled', false).text('Request a Quote');
                    if(xhr.status === 422){
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value){
                            $('#'+key+'-error').text(value[0]);
                        });
                    } else {
                        alert('An unexpected error occurred.');
                    }
                }
            });
        });
    });
</script>

@include('layouts.frontfooter')