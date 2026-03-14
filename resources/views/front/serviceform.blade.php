@include('layouts.frontheader')

@php
use Illuminate\Support\Facades\DB;
$states = DB::table('states')->select('id','name')->get();
$a = rand(1,9);
$b = rand(1,9);
@endphp

<section class="mt_100 mb_100 init_pro_contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 pe-lg-5">
                <h2 class="title_80 fw-medium text-111 text-white">Initiate your Project</h2>
                <p class="text-white">Our experienced engineers can help you select the right shot blasting solution based on your application, material type, and production capacity.</p>
            </div>

            <div class="col-lg-8">
                <form class="contact_form" id="service_form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input type="text" name="name" placeholder="Full Name*: ">
                            <div id="name-error" class="text-danger"></div>
                        </div>

                        <div class="col-lg-6 form-group">
                            <input type="text" name="company_name" placeholder="Company Name*: ">
                            <div id="company_name-error" class="text-danger"></div>
                        </div>

                        <div class="col-lg-6 form-group">
                            <input type="tel" name="phone" id="service_phone" placeholder="Phone Number*: ">
                            <input type="hidden" name="country" id="service_country">
                            <input type="hidden" name="phonecode" id="service_phonecode">
                            <input type="hidden" name="full_phone" id="service_full_phone">
                            <div id="full_phone-error" class="text-danger"></div>
                        </div>

                        <div class="col-lg-6 form-group">
                            <input type="email" name="email" placeholder="Email Address*: ">
                            <div id="email-error" class="text-danger"></div>
                        </div>

                        <div class="col-lg-6 form-group">
                            <select name="state" id="service_state">
                                <option value="">Select State*</option>
                                @foreach($states as $state)
                                    <option value="{{ $state->name }}" data-id="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                            <div id="state-error" class="text-danger"></div>
                        </div>

                        <div class="col-lg-6 form-group">
                            <select name="city" id="service_city">
                                <option value="">Select City*</option>
                            </select>
                            <div id="city-error" class="text-danger"></div>
                        </div>

                        <div class="col-lg-12 form-group">
                            <textarea rows="1" name="message" placeholder="Requirement : "></textarea>
                            <div id="message-error" class="text-danger"></div>
                        </div>

                        <div class="mb-2">
                            <label style="font-size:13px;">
                                What is <span id="service_capA">{{ $a }}</span> + <span id="service_capB">{{ $b }}</span> ?
                            </label>
                            <div style="display:flex;gap:6px;">
                                <input type="number" id="service_simple_captcha" name="simple_captcha" placeholder="Enter answer" oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                                <button type="button" id="service_refreshCaptcha" style="border:0;background:#eee;padding:5px 8px;border-radius:5px;">↻</button>
                            </div>
                            <input type="hidden" name="captcha_sum" id="service_captcha_sum" value="{{ $a + $b }}">
                            <div id="simple_captcha-error" class="text-danger"></div>
                        </div>

                        <div class="col-lg-12 form-group">
                            <button type="submit" class="com_btn">Request Consultation</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(function(){

    // State -> City AJAX
    $('#service_state').on('change', function(){
        let state_id = $(this).find(':selected').data('id');
        if(state_id){
            $.get("{{ url('get-cities') }}/"+state_id, function(data){
                let options = '<option value="">Select City</option>';
                $.each(data, function(i, city){
                    options += `<option value="${city.name}">${city.name}</option>`;
                });
                $('#service_city').html(options);
            });
        } else {
            $('#service_city').html('<option value="">Select City</option>');
        }
    });

    // CAPTCHA refresh
    $('#service_refreshCaptcha').click(function(){
        let a = Math.floor(Math.random() * 9) + 1;
        let b = Math.floor(Math.random() * 9) + 1;
        $('#service_capA').text(a);
        $('#service_capB').text(b);
        $('#service_captcha_sum').val(a + b);
        $('#service_simple_captcha').val('');
        $('#simple_captcha-error').text('');
    });

    // intl-tel-input
    let iti = intlTelInput(document.querySelector("#service_phone"), {
        initialCountry: "auto",
        geoIpLookup: function(callback){
            fetch('https://ipapi.co/json').then(res=>res.json()).then(data=>callback(data.country_code)).catch(()=>callback('IN'));
        },
        separateDialCode: true,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js"
    });

    $("#service_phone").on("keyup change", function(){
        let data = iti.getSelectedCountryData();
        $("#service_country").val(data.name);
        $("#service_phonecode").val(data.dialCode);
        $("#service_full_phone").val("+"+data.dialCode+$(this).val());
    });

    // Form submit
    $('#service_form').on('submit', function(e){
        e.preventDefault();
        $('.text-danger').text('');
        $("#service_full_phone").val("+"+iti.getSelectedCountryData().dialCode+$('#service_phone').val());

        $.ajax({
            url: "{{ route('installationstore') }}",
            type: "POST",
            data: $(this).serialize(),
            dataType: "json",
            headers: { 'Accept': 'application/json' },
            beforeSend: function(){
                $('.com_btn').attr('disabled', true).text('Sending...');
            },
            success: function(res){
                $('.com_btn').attr('disabled', false).text('Request Consultation');
                if(res.status === 'success' && res.redirect){
                    window.location.href = res.redirect;
                }
            },
            error: function(xhr){
                $('.com_btn').attr('disabled', false).text('Request Consultation');
                if(xhr.status === 422){
                    let errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, val){
                        $('#'+key+'-error').text(val[0] || val);
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