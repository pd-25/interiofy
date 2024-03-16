@include('include.header')

     <!-- inner banner sec -->

     <div class="interior-banner">

        <div class="interior-banner-slider owl-carousel owl-theme">

            @foreach($serviceBanners as $banner)

                <div class="item banner-item">

                    <a href="{{ $banner->link }}"><img src="{{ asset('storage/'.$banner->image_path) }}" alt=""></a>

                    <div class="banner-item-info">

                        <h1>{{ $banner->heading }}</h1>

                        <p style="color:white">{{ strip_tags($banner->description) }}</p>

                    </div>

                </div>

            @endforeach    

        </div>

     </div>

    <!-- inner banner sec end  -->

    

    <!--===================== services section  ===================== -->

    <section class="services_section">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-md-12 text-center">

                    <div class="heading heading-mb">

                        <p class="para">{{ strip_tags($serviceDetails->description) }}</p>
                        
                    </div>

                </div>

            </div>

        </div>

    </section>

    <?php if($serviceDetails->show_child_images == "0"){ ?>
        <section class="services_section">

            <div class="container">

                <div class="service_slider owl-carousel owl_navigation">

                    @foreach($serviceSliders as $slider)

                        <div class="service_box">

                            <a href="#">

                                <div class="holiday_pack_area">

                                    <div class="service-pack-pic">

                                        <img class="img-fluid" src="{{ asset('storage/'.$slider->image_path) }}" alt="{{ $slider->name }}" />

                                    </div>

                                </div>

                            </a>

                        </div>
                    
                    @endforeach    

                </div>

            </div>

        </section>
    <?php }else{ ?>    
        <?php 
            foreach($serviceCatSliders as $catSlider){
                $categorySlider = $catSlider->servicecategoryimage;
        ?>
          
            <section class="services_section">

                <div class="container">

                    <div class="interior-heading">

                        <h4>{{ $catSlider->name }}</h4>

                    </div>

                    <div class="service_slider owl-carousel owl_navigation">

                        @foreach($categorySlider as $slider)

                            <div class="service_box">

                                <a href="#">

                                    <div class="holiday_pack_area">

                                        <div class="service-pack-pic">

                                            <img class="img-fluid" src="{{ asset('storage/'.$slider->image_path) }}" alt="{{ $slider->name }}" />

                                        </div>

                                    </div>

                                </a>

                            </div>
                        
                        @endforeach
                    </div>

                </div>

            </section>    

        <?php } ?>    
    <?php } ?>    

    <!--===================== services section end  ===================== -->



    <section class="mb-70">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-8">

                    <div class="form_wrapper">

                        <div class="form_container">

                             <div class="title_container">

                                  <h2>talk to our INTERIOFY experts</h2>

                             </div>

                             <div class="row">

                                  <div class="col-md-12">

                                       <div class="form-area">

                                            <div class="form-inner">

                                                 <form>

                                                      <div class="form-group">

                                                           <input type="text" class="form-control" placeholder="First Name" value="" />

                                                      </div>

                                                      <div class="form-group">

                                                           <input type="text" class="form-control" placeholder="Email" name="name">

                                                      </div>

                                                      <div class="form-group">

                                                           <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number" name="name">

                                                      </div>

                                                      <div class="form-group tuggle toggle-switch">

                                                           <div class="tuggle_text">

                                                                <p>You can reach me on WhatsApp</p>

                                                                <p>

                                                                     <small>Uncheck to opt-out of upcoming meetings and offer alerts</small>

                                                                </p>

                                                           </div>

                                                           <input type="checkbox" id="switch" /><label for="switch">Toggle</label>

                                                      </div>

                                                      <div class="form-group">

                                                           <input type="text" class="form-control"  placeholder="Enter your current residence pincode" value="" />

                                                      </div>

                                                      <button id="bfc" class="btn my_newBtn" type="submit">

                                                           <span>Book</span>

                                                           <span>Design Consultations</span>

                                                           <span class="bfcForm_label__NW7wY"></span>

                                                      </button>

                                                      <p class="someText">By submitting this form, you agree to

                                                           the <a class="turms_text" href="#">privacy policy</a>

                                                           and <a class="turms_text" href="#"> terms of use </a>

                                                      </p>

                                                 </form>

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

    

   

    @include('include.footer')
