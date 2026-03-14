<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">

<!-- Modal -->
@php
use Illuminate\Support\Facades\DB;
$countries = DB::table('countries')->select('id','name')->get();
$states = DB::table('states')->select('id','name')->get();
$a = rand(1,9);
$b = rand(1,9);
@endphp


<style>
  .modal 
  {
       background-color: #f5f8fb61;
    z-index: 9999;
    backdrop-filter: blur(2px);
  }

  .modal-content
  {
    background-color:#f5f8fb;

  }

</style>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered modal-lg">

        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title title_24">Enquire Now</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form class="contact_form" id="contact_form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input type="text" name="name" placeholder=" ">
                            <label>Full Name<span class="text-danger">*</span>:</label>
                            <div id="name-error" class="text-danger"></div>
                        </div>

                        <div class="col-lg-6 form-group">
                            <input type="text" name="company_name" placeholder=" ">
                            <label>Company Name<span class="text-danger">*</span>:</label>
                            <div id="company_name-error" class="text-danger"></div>
                        </div>

                        <div class="col-lg-6 form-group">
                            <input type="tel" id="phone" name="phone" placeholder=" Phone Number *">
                            <!-- <label class="phone_number">Phone Number<span class="text-danger">*</span>:</label> -->
                            <div id="full_phone-error" class="text-danger"></div>

                            <input type="hidden" name="country" id="contact_country">
                            <input type="hidden" name="phonecode" id="contact_phonecode">
                            <input type="hidden" name="contact" id="contact_value">
                            <input type="hidden" name="full_phone" id="contact_full_phone">
                        </div>

                        <div class="col-lg-6 form-group">
                            <input type="email" name="email" placeholder=" ">
                            <label>Email Address<span class="text-danger">*</span>:</label>
                            <div id="email-error" class="text-danger"></div>
                        </div>

                        <div class="col-lg-6 form-group">
                            <select name="state" id="state">
                                <option value="">Select State</option>
                                @foreach($states as $state)
                                <option value="{{ $state->name }}" data-id="{{ $state->id }}">{{ $state->name }}
                                </option>
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

                        <div class="col-lg-4 form-group ">

                            <div style="display:flex;gap:6px;">
                                <input type="number" id="simple_captcha" name="simple_captcha"
                                    placeholder="Enter answer" oninput="this.value=this.value.replace(/[^0-9]/g,'')">

                                <label>
                                    What is <span id="capA">{{ $a }}</span> + <span id="capB">{{ $b }}</span> ?
                                </label>

                                <button type="button" id="refreshCaptcha"
                                    style="border:0;background:#eee;padding:5px 8px;border-radius:5px;">↻</button>
                            </div>
                            <input type="hidden" name="captcha_sum" id="captcha_sum" value="{{ $a + $b }}">
                            <div id="simple_captcha-error" class="text-danger"></div>
                        </div>

                        <div class="col-lg-6 form-group" style="align-self: anchor-center;">
                            <button type="submit" class="com_btn">Request a Quote</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
// State -> City
$('#state').change(function() {
    var state_id = $('#state option:selected').data('id');
    if (state_id) {
        $.ajax({
            url: "{{ url('get-cities') }}/" + state_id,
            type: "GET",
            success: function(data) {
                $('#city').html('<option value="">Select City</option>');
                $.each(data, function(key, value) {
                    $('#city').append('<option value="' + value.name + '">' + value.name +
                        '</option>');
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

$("#phone").on("keyup change", function() {
    var countryData = iti.getSelectedCountryData();
    $("#contact_country").val(countryData.name);
    $("#contact_phonecode").val(countryData.dialCode);
    $("#contact_value").val(this.value);
    $("#contact_full_phone").val("+" + countryData.dialCode + this.value);
});

// AJAX Form Submission
$(document).ready(function() {
    $('#contact_form').on('submit', function(e) {
        e.preventDefault();
        $('.text-danger').text(''); // Clear errors
        $('#contact_full_phone').val("+" + iti.getSelectedCountryData().dialCode + $('#phone').val());
        let formData = $(this).serialize();

        $.ajax({
            url: "{{ route('contact.store') }}",
            type: "POST",
            data: formData,
            dataType: "json",
            beforeSend: function() {
                $('.com_btn').attr('disabled', true).text('Sending...');
            },
            success: function(res) {
                $('.com_btn').attr('disabled', false).text('Request a Quote');
                if (res.status === 'success' && res.redirect) {
                    // Redirect to thank you page
                    window.location.href = res.redirect;
                } else if (res.errors) {
                    $.each(res.errors, function(key, value) {
                        $('#' + key + '-error').text(value[0] || value);
                    });
                }
            },
            error: function(xhr) {
                $('.com_btn').attr('disabled', false).text('Request a Quote');
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        $('#' + key + '-error').text(value[0]);
                    });
                } else {
                    alert('An unexpected error occurred.');
                }
            }
        });
    });
});
</script>