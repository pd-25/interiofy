@include('include.header')
<!-- banner sec -->
<section class="banner_sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-2"></div>
            <div class="col-lg-6 col-md-6">
                <div class="form_wrapper banner-form">
                    <div class="form_container">
                        <div class="title_container">
                            <h2>Register</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-area">
                                    <div class="form-inner">

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name *" name="name" id="name" />
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email" name="email" id="email" />
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Country" name="country"  id="country"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="City" name="city"  id="city"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Occupation" name="occupation"  id="occupation"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="mobile_code" class="form-control mobile_no" placeholder="Phone Number *" name="mobile_no" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required onkeyup="return New_user_registration_otp_generate()"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="OTP *" name="otp" required id="otp"/>
                                            </div>

                                            <button id="bfc" class="btn my_newBtn" onclick="return UpdateNewUserData()">
                                                Submit
                                            </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner sec end  -->


@push('scripts')
<script>
    function New_user_registration_otp_generate(){
        if($(".mobile_no").val().length==10){
            var mobile = $(".mobile_no").val();
            var form_data  = new FormData();
            form_data.append('email_or_mobileno', mobile);
            form_data.append('_token', '{{ csrf_token() }}');
            $.ajax({
                url: "{{route('otp.generate')}}",
                type: 'POST',
                cache : false,
                processData: false,
                contentType: false,
                data: form_data,
                beforeSend: function () {
                    let timerInterval;
                    Swal.fire({
                    //title: "Auto close alert!",
                    html: "Otp sent to your mobile number.",
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading();
                        const timer = Swal.getPopup().querySelector("b");
                        timerInterval = setInterval(() => {
                        timer.textContent = `${Swal.getTimerLeft()}`;
                        }, 100);
                    },
                    willClose: () => {
                        clearInterval(timerInterval);
                    }
                    }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        console.log("I was closed by the timer");
                    }
                    });
                },
                complete: function () {
                   // $("#loading-image").hide();
                },
                success: (response) => {

                },
                error: (response) => {
                    console.log(response);
                }
            });

        }
    }

    function UpdateNewUserData(){
        var name            = $("#name").val();
        var email           = $("#email").val();
        var mobile          = $(".mobile_no").val();
        var otp             = $("#otp").val();
        var country         = $("#country").val();
        var city            = $("#city").val();
        var occupation      = $("#occupation").val();

        var form_data  = new FormData();
        form_data.append('name', name);
        form_data.append('email', email);
        form_data.append('mobile_no', mobile);
        form_data.append('otp', otp);
        form_data.append('country', country);
        form_data.append('city', city);
        form_data.append('occupation', occupation);
        form_data.append('_token', '{{ csrf_token() }}');


        if($(".mobile_no").val().length==0){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Please enter your phone no!",
                footer: ''
            });
        }
        if(otp == ''){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Please enter your otp!",
                footer: ''
            });
        }
        if(mobile != '' && otp != ''){
            $.ajax({
                url: "{{route('register.custom')}}",
                type: 'POST',
                cache : false,
                processData: false,
                contentType: false,
                data: form_data,
                success: (response) => {
                    if(response == "Success"){
                        Swal.fire({
                            title: "Your form!",
                            text: "is submitted successfully!",
                            icon: "success"
                        }).then(function() {
                            window.location = "{{ route('login') }}";
                        });
                    }
                    if(response == "usernotexist"){
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "OTP is invalid",
                            footer: ''
                        });
                    }
                },
                error: (response) => {
                    console.log(response);
                }
            });
        }
    }
</script>
@endpush

@include('include.footer')
