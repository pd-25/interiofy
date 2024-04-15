@include('include.header')

<!--===================== Office Interior Banner  ===================== -->

<div class="interior-banner">

    <div class="interior-banner-slider owl-carousel owl-theme">

        @if (!@empty($homeBanner))
        @foreach ($homeBanner as $item)
        <div class="item banner-item">
            <a href="#"><img src="/storage/{{@$item->media}}" alt="No images"></a>
            <div class="banner-item-info">
                <h1 style="color:white">Partner With Us</h1>
                <p style="color:white">{{@$item->short_description}}</p>
            </div>
        </div>
        @endforeach
        @endif

        {{-- <div class="item banner-item">

            <a href=""><img src="images/architectural-01.jpg" alt=""></a>

            <div class="banner-item-info">

                <h1 style="color:white">Partner With Us</h1>

                <p style="color:white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                    a galley of type and scrambled it to make a type specimen book.</p>

            </div>

        </div>

        <div class="item banner-item">

            <a href=""><img src="images/architectural-02.jpg" alt=""></a>

            <div class="banner-item-info">

                <h1 style="color:white">Partner With Us</h1>

                <p style="color:white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                    a galley of type and scrambled it to make a type specimen book.</p>

            </div>

        </div> --}}

    </div>

</div>

<!--===================== End Office Interior Banner  ===================== -->


<!-- content area starts -->
<section>
    <div class="text_div_1">
        <div class="container">
            <div class="text_div_2 text-center">
                <p class="text_p_1">
                    Partner with I InterioFY: Craft New Heights For Your Business
                </p>
                <p class="text_p_2">
                    Expand your reach, showcase your expertise, and connect with a network of passionate design seekers - all on I InterioFY!
                    <br>
                    We're a revolutionary tech platform that bridges the gap between talented designers, contractors, vendors, and clients looking to transform their residential, retail, or commercial spaces. Here, you have the opportunity to:
                </p>

                <div class="desc-p text-left new-text-p-3" style="font-size: 16px; padding:3%;">
                    ARE YOU A...

                    <ul class="txt-ul text-left" style="margin-top: 2%;">
                        <li class="txt-li pb-3" style="font-size: 16px;"><b>• Designer:</b> Showcase your portfolio to a vast pool of potential clients. Collaborate on projects seamlessly and manage them efficiently through our user-friendly platform.</li>
                        <li class="txt-li pb-3" style="font-size: 16px;"><b>• Contractor:</b> Expand your client base by connecting with those seeking top-quality construction expertise. Partner with designers to offer a complete design-build solution.</li>
                        <li class="txt-li pb-3" style="font-size: 16px;"><b>• Vendor:</b> Reach architects, interior designers, and project managers looking for the perfect furnishings, materials, or finishing touches.</li>
                    </ul>
                </div>

                <p class="text_p_1 new-text-p-4" style="margin-top: 10%;">
                    Explore our flexible subscription models tailored to fit your business needs and propel your success

                <div class="desc-p text-left" style="margin-top: 5%; font-size: 16px; padding:3%;">
                    BENEFITS OF BEING A PARTNER

                    <ul class="text-left"  style="margin-top: 2%;">
                        <li class="txt-li pb-3" style="font-size: 16px;"><b>• Reach a wider audience:</b> Showcase your portfolio and expertise to a diverse pool of clients seeking residential, retail, and commercial design solutions.</li>
                        <li class="txt-li pb-3" style="font-size: 16px;"><b>• Streamlined collaboration:</b> Our user-friendly platform facilitates seamless communication, saving you valuable time and resources.</li>
                        <li class="txt-li pb-3" style="font-size: 16px;"><b>• Increased visibility:</b> Gain recognition within the design community and establish yourself as a leader in your field.</li>
                        <li class="txt-li pb-3" style="font-size: 16px;"><b>• Effortless lead generation:</b> Let I InterioFY handle the matchmaking, connecting you with qualified clients actively seeking your services.</li>
                        <li class="txt-li pb-3" style="font-size: 16px;"><b>• Enhanced credibility:</b> Build trust and establish your brand reputation by being on this platform.</li>

                    </ul>
                </div>
                </p>

                <p class="text_p_1 new-text-p-4" style="margin-top: 10%;">
                    Ready to join a thriving community and take your business to the next level?


                <ul class="join-btns">
                    <li><a href="#" class="btn seeAllBtn">Sign up as a Designer</a></li>
                    <li><a href="#" class="btn seeAllBtn">Become a Partner Contractor</a></li>
                    <li><a href="#" class="btn seeAllBtn">Join our Vendor Network</a></li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- /content area ends -->

<section>
    <div class="container mb-5">
        <div class="partner-heading">
            <h2>Get unlimited <strong>perks <br> with I Interiofy</strong></h2>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-5">
                <div class="partner-box">
                    <i class="fa fa-object-group"></i>
                    <h4>Regular flow of high quality projects to work with</h4>
                </div>

            </div>

            <div class="col-lg-4 mb-5">
                <div class="partner-box">
                    <i class="fa fa-dot-circle-o"></i>
                    <h4>360 Degree Support in with design, materials and technology</h4>
                </div>
            </div>

            <div class="col-lg-4 mb-5">
                <div class="partner-box">
                    <i class="fa fa-credit-card"></i>
                    <h4>Regular flow of high quality projects to work with</h4>
                </div>
            </div>

            <div class="col-lg-4 mb-5">
                <div class="partner-box">
                    <i class="fa fa-object-group"></i>
                    <h4>Regular flow of high quality projects to work with</h4>
                </div>

            </div>

            <div class="col-lg-4 mb-5">

                <div class="partner-box">

                    <i class="fa fa-dot-circle-o"></i>

                    <h4>360 Degree Support in with design, materials and technology</h4>

                </div>

            </div>

            <div class="col-lg-4 mb-5">

                <div class="partner-box">

                    <i class="fa fa-credit-card"></i>

                    <h4>Regular flow of high quality projects to work with</h4>

                </div>

            </div>

        </div>

        <div class="see-all-btn text-center">
            <a class="btn seeAllBtn text-center" href="#" style="margin: auto;">
                Click for more
            </a>
        </div>

    </div>

</section>

<section class="services_section six_slider_div_1">

    <div class="container">

        <div class="six_slider owl-carousel owl_navigation">

            <div class="service_box">

                <a href="#">

                    <div class="holiday_pack_area">

                        <div class="service-pack-pic">

                            <img class="six_slider_img_1" src="images/Minimalism-01.png" alt="" />

                        </div>

                    </div>

                </a>

            </div>

            <div class="service_box">

                <a href="#">

                    <div class="holiday_pack_area">



                        <div class="service-pack-pic">

                            <img class="six_slider_img_1" src="images/Minimalism-02.jpg" alt="" />

                        </div>

                    </div>

                </a>

            </div>



            <div class="service_box">

                <a href="#">

                    <div class="holiday_pack_area">



                        <div class="service-pack-pic">

                            <img class="six_slider_img_1" src="images/Minimalism-03.webp" alt="" />

                        </div>

                    </div>

                </a>

            </div>

            <div class="service_box">

                <a href="#">

                    <div class="holiday_pack_area">



                        <div class="service-pack-pic">

                            <img class="six_slider_img_1" src="images/Minimalism-04.webp" alt="" />

                        </div>

                    </div>

                </a>

            </div>

            <div class="service_box">

                <a href="#">

                    <div class="holiday_pack_area">



                        <div class="service-pack-pic">

                            <img class="six_slider_img_1" src="images/Minimalism-05.jpg" alt="" />

                        </div>

                    </div>

                </a>

            </div>

        </div>

    </div>

</section>


<section class="stepform_Sec partner-bg">

    <div class="container container-box">

        <div class="row">

            <div class="col-lg-5">

                <div class="miulti-step-pic">

                    <img src="images/partner-sketch.avif" alt="">

                </div>

            </div>

            <div class="col-lg-7">

                <!-- MultiStep Form -->



                <div class="progress">

                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>

                </div>

                <div class="">

                    <div class="step well">

                        <fieldset>

                            <div class="row justify-content-center mt-5">

                                <div class="col-sm-12 text-center">

                                    <div class="heading">

                                        <h2>Partner With Us </h2>
                                        <input type="hidden" id="formType" value="partnerRegister">

                                    </div>

                                </div>

                            </div>

                            <div class="form-area">

                                <div class="form-inner">

                                    <form class="form-box">

                                        <div class="row">
                                            <input type="hidden" id="formType" value="">

                                            <div class="col-md-6 form-group mb-4">

                                                <label for="firm_name" class="form-label">Firm Name</label>

                                                <input type="text" name="firm_name" id="firm_name" class="form-control" />

                                            </div>

                                            <div class="col-md-6 form-group mb-4">

                                                <label for="firm_pan" class="form-label">Firm PAN #</label>

                                                <input type="text" name="firm_pan" id="firm_pan" class="form-control" />

                                            </div>

                                            <div class="col-md-6 form-group mb-4">

                                                <label for="firm_gst" class="form-label">Firm GST #</label>

                                                <input type="text" name="firm_gst" id="firm_gst" class="form-control" />

                                            </div>

                                            <div class="col-md-6 form-group mb-4">

                                                <label for="firm_start_date" class="form-label">Firm Start
                                                    Date</label>

                                                <input type="date" name="firm_start_date" id="firm_start_date" class="form-control" />

                                            </div>

                                            <div class="col-md-12 form-group mb-4">
                                                <label for="" class="form-label">Email</label>
                                                <input type="email" name="email" id="email" class="form-control" />
                                            </div>

                                            <div class="col-md-6 form-group mb-4">
                                                <label for="" class="form-label">Mobile No</label>
                                                <input type="number" minlength="10" maxlength="10" name="mobile_no" id="mobile_no" class="form-control" />
                                            </div>

                                            <div class="col-md-6 form-group">

                                                <label for="city" class="form-label">City</label>

                                                <select name="city" id="city" class="form-control">
                                                    <option value="" selected>Select City</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Hyderabad">Hyderabad</option>
                                                    <option value="Bangalore">Bangalore</option>
                                                    <option value="Pune">Pune</option>
                                                    <option value="Thane">Thane</option>
                                                    <option value="Gurgaon">Gurgaon</option>
                                                    <option value="Gaziabad">Gaziabad</option>
                                                    <option value="Lucknow">Lucknow</option>
                                                    <option value="Faridabad">Faridabad</option>
                                                    <option value="Mumbai">Mumbai</option>
                                                </select>

                                            </div>

                                        </div>

                                    </form>

                                </div>

                            </div>

                        </fieldset>

                    </div>

                    <div class="step well">

                        <!-- fieldsets -->

                        <fieldset>

                            <div class="form-box">
                                <div class="row justify-content-center mt-5">
                                    <div class="col-sm-12 text-center">
                                        <div class="heading">
                                            <h2>Partner Register Form</h2>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-4 form-border">
                                    <label for="" class="form-label">Firm Type</label>
                                    <div class="radio-label-btn">
                                        <input type="radio" name="firm_type" value="Public" />
                                        <label for="Public">Public</label>
                                        <input type="radio" name="firm_type" value="Private" />
                                        <label for="Private">Private</label>
                                        <input type="radio" name="firm_type" value="Individual" />
                                        <label for="Individual">Individual</label>
                                    </div>
                                </div>
                                <div class="mb-4 form-border">
                                    <label for="" class="form-label">Major Category</label>
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4">
                                            <div class="radio-label-btn">
                                                <input type="radio" name="major_category" value="Architectural" />
                                                <label for="" class="major_category">Architectural</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <div class="radio-label-btn">
                                                <input type="radio" name="major_category" value="Flooring" />
                                                <label for="" class="major_category">Flooring</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <div class="radio-label-btn">
                                                <input type="radio" name="major_category" value="Painting" />
                                                <label for="" class="major_category">Painting</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4 pt-3">
                                            <div class="radio-label-btn">
                                                <input type="radio" name="major_category" value="Plumbing" />
                                                <label for="" class="major_category">Plumbing</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4 pt-3">
                                            <div class="radio-label-btn">
                                                <input type="radio" name="major_category" value="Structural" />
                                                <label for="" class="major_category">Structural</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4 pt-3">
                                            <div class="radio-label-btn">
                                                <input type="radio" name="major_category" value="Electrical Lighting" />
                                                <label for="" class="major_category">Electrical Lighting</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <div class="radio-label-btn">
                                                <input type="radio" name="major_category" value="Carpentry & Masonry" />
                                                <label for="" class="major_category">Carpentry & Masonry</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                    </div>
                    <div class="step well">

                        <!-- fieldsets -->

                        <div class="form-box">

                            <fieldset>

                                <div class="row justify-content-center mt-5">
                                    <div class="col-sm-12 text-center">
                                        <div class="heading">
                                            <h2>Partner Register Form</h2>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-4 form-border">
                                    <label for="" class="form-label">Minor Category</label>
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4">
                                            <div class="radio-label-btn">
                                                <input type="radio" name="minor_category" value="Interior">
                                                <label for="" class="minor_category">Interior</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-4">
                                            <div class="radio-label-btn">
                                                <input type="radio" name="minor_category" value="Architectural">
                                                <label for="" class="minor_category">Architectural</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-4">
                                            <div class="radio-label-btn">
                                                <input type="radio" name="minor_category" value="Flooring">
                                                <label for="" class="minor_category">Flooring</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-4 pt-3">
                                            <div class="radio-label-btn">
                                                <input type="radio" name="minor_category" value="Painting">
                                                <label for="" class="minor_category">Painting</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-4 pt-3">
                                            <div class="radio-label-btn">
                                                <input type="radio" name="minor_category" value="Plumbing">
                                                <label for="" class="minor_category">Plumbing</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-4 pt-3">
                                            <div class="radio-label-btn">
                                                <input type="radio" name="minor_category" value="Structural">
                                                <label for="" class="minor_category">Structural</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-4 pt-3">
                                            <div class="radio-label-btn">
                                                <input type="radio" name="minor_category" value="Electrical Lighting">
                                                <label for="" class="minor_category">Electrical Lighting</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-4 pt-3">
                                            <div class="radio-label-btn">
                                                <input type="radio" name="minor_category" value="Carpentry & Masonry">
                                                <label for="" class="minor_category">Carpentry & Masonry</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="" class="form-label">Upload Picture of your completed
                                        project</label>
                                    <input type="file" class="form-control" name="partnerportfolio[]" id="partnerportfolio" accept="image/*" multiple />
                                </div>

                            </fieldset>

                        </div>

                    </div>

                    <div class="buttonsGroups button-bg">
                        <button class="action back btn btn-outline-info">Back</button>
                        <button class="action next btn btn-outline-success">Next</button>
                        <button class="action submit btn btn-success" onclick="return SavePartner()">Generate Your Partner ID</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>


<section style="padding-bottom: 70px;">

     <div class="container-fluid">

          <div class="row justify-content-center">

               <div class="col-sm-12 text-center">

                    <div class="heading">

                         <h2>Journey to Be Partner With Us</h2>

                    </div>

               </div>

          </div>

          <div class="row text-center">
               <div class="col-lg-2 col-md-4 col-12">
                    <img src="{{ asset('images/nk1.jpg') }}" class="design_section_img_1">
                    <p class="design_section_p_1">Fill the form and submit</p>
               </div>
               <div class="col-lg-2 col-md-4 col-12">
                    <img src="{{ asset('images/nk2.jpg') }}" class="design_section_img_1">
                    <p class="design_section_p_1">Receive a verification call</p>
               </div>
               <div class="col-lg-2 col-md-4 col-12">
                    <img src="{{ asset('images/nk3.jpg') }}" class="design_section_img_1">
                    <p class="design_section_p_1">Go through the verification process</p>
               </div>
               <div class="col-lg-2 col-md-4 col-12">
                    <img src="{{ asset('images/nk4.jpg') }}" class="design_section_img_1">
                    <p class="design_section_p_1">Get Onboarded</p>
               </div>
               <div class="col-lg-2 col-md-4 col-12">
                    <img src="{{ asset('images/nk4.jpg') }}" class="design_section_img_1">
                    <p class="design_section_p_1">Complete the orientation & training</p>
               </div>
               <div class="col-lg-2 col-md-4 col-12">
                    <img src="{{ asset('images/nk4.jpg') }}" class="design_section_img_1">
                    <p class="design_section_p_1">Start getting noticed by customers</p>
               </div>
          </div>

     </div>

</section>


@push('scripts')
<script>
    function SavePartner() {
        var mobile_no = $("#mobile_no").val();
        var email = $("#email").val();
        var firm_name = $("#firm_name").val();
        var firm_pan = $("#firm_pan").val();
        var firm_gst = $("#firm_gst").val();
        var firm_start_date = $("#firm_start_date").val();
        var city = $("#city").val();

        var firm_type = $('input[name="firm_type"]:checked').val();
        var major_category = $('input[name="major_category"]:checked').val();
        var minor_category = $('input[name="minor_category"]:checked').val();
        var portfolioFiles = document.getElementById('partnerportfolio');
        var partnerportfolio = portfolioFiles.files;

        var form_data = new FormData();
        form_data.append('email', email);
        form_data.append('mobile_no', mobile_no);
        form_data.append('firm_name', firm_name);
        form_data.append('firm_pan', firm_pan);
        form_data.append('firm_gst', firm_gst);
        form_data.append('firm_start_date', firm_start_date);
        form_data.append('city', city);
        form_data.append('firm_type', firm_type);
        form_data.append('major_category', major_category);
        form_data.append('minor_category', minor_category);

        for (var i = 0; i < partnerportfolio.length; i++) {
            form_data.append('partnerportfolio[]', partnerportfolio[i]);
        }

        form_data.append('_token', '{{ csrf_token() }}');

        console.log(form_data);

        $.ajax({
            url: "{{ route('partnerwithusformdata') }}",
            type: 'POST',
            cache: false,
            processData: false,
            contentType: false,
            data: form_data,
            success: (response) => {
                console.log(response.data);
                if (response.status == "success") {
                    Swal.fire({
                        title: "Success!",
                        html: `You have been successfully registred as partner!<br><b>Your Partner ID: ${response.partner_id}</b>`,
                        icon: "success"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Redirect the user to the desired URL
                            location.reload();
                        }
                    });
                }
                if (response == "userexist") {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "User already exists!",
                        footer: ''
                    });
                }

            },
            error: (response) => {
                console.log(response);
            }
        });

    }
</script>
@endpush
@include('include.footer')