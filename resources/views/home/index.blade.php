@include('include.header')

<!-- banner sec -->

<section class="banner_sec">

     <div class="main-banner-slider owl-carousel owl-theme">

          @if (!@empty($homeBanner))
          @foreach ($homeBanner as $item)
          <div class="item main-item">
               <a href="#"><img src="/storage/{{@$item->media}}" alt="No images"></a>
               <div class="banner_title">
                    <h1>{{@$item->short_description}}</h1>
               </div>
          </div>
          @endforeach
          @endif


          {{-- <div class="item main-item">

                    <a href=""><img src="{{ asset('images/architectural-01.jpg') }}" alt=""></a>

          <div class="banner_title">

               <h1>INTERIOFY Anything and Everything </h1>

          </div>

     </div>

     <div class="item main-item">

          <a href=""><img src="{{ asset('images/architectural-02.jpg') }}" alt=""></a>

          <div class="banner_title">

               <h1>INTERIOFY Anything and Everything </h1>

          </div>

     </div> --}}

     </div>



</section>

<!-- banner sec end  -->

<!-- content area starts -->
<section>
     <div class="text_div_1">
          <div class="container">
               <div class="text_div_2 text-center">
                    <p class="text_p_1">
                         INTERIOFY Anything and Everything
                    </p>
                    <p class="text_p_2">
                         Say goodbye to the stress of finding the perfect team for your dream space. Introducing I InterioFy, India's groundbreaking tech platform that connects you with the elite squad of interior designers, contractors, and vendors you need – all under one roof. We're more than just a marketplace. I InterioFy is a collaborative hub where creativity meets convenience. Here, designers and industry partners seamlessly connect to bring your vision to life, whether it's a residential haven, a thriving commercial space, or a stunning retail environment.
                    </p>
               </div>
          </div>
     </div>
</section>
<!-- /content area ends -->

<!-- step form sec start  -->

<section class="step_form_sec">

     <div class="container">

          <div class="step_icon_row">

               <a href="{{ route('home-services') }}" class="step_icon_box">

                    <div class="step_icon">

                         <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">

                              <g>

                                   <path d="M471.982 417.008Q472 416.5 472 416a32.036 32.036 0 0 0-32-32V236l28.8-21.6a8 8 0 0 0-.08-12.859L400 151.322V64a8 8 0 0 0 8-8V24a8 8 0 0 0-8-8h-80a8 8 0 0 0-8 8v32a8 8 0 0 0 8 8v28.861l-59.28-43.32a8 8 0 0 0-9.44 0l-208 152a8 8 0 0 0-.08 12.859L72 236v148a32.036 32.036 0 0 0-32 32q0 .5.018 1.008A32 32 0 0 0 48 480h416a32 32 0 0 0 7.982-62.992ZM328 32h64v16h-64Zm8 72V64h48v75.63L335.243 104Zm-80-38.092 194.555 142.176-18.628 13.971L260.706 97.53a8 8 0 0 0-9.412 0L80.073 222.055l-18.628-13.971ZM32 448a16.019 16.019 0 0 1 15.76-16h.019c.409.057.818.106 1.235.133a8 8 0 0 0 8.023-10.716A15.727 15.727 0 0 1 56 416a16.019 16.019 0 0 1 16-16v64H48a16.019 16.019 0 0 1-16-16Zm344 16h-96V288h96Zm16 0V280a8 8 0 0 0-8-8H272a8 8 0 0 0-8 8v184H88V236.074l168-122.182 168 122.182V464Zm72 0h-24v-64a16.019 16.019 0 0 1 16 16 15.727 15.727 0 0 1-1.037 5.421 8 8 0 0 0 8.023 10.716c.417-.027.826-.076 1.235-.133h.019a16 16 0 0 1-.24 32Z" fill="#000000" opacity="1" data-original="#000000" class=""></path>

                                   <path d="M224 272h-96a8 8 0 0 0-8 8v112a8 8 0 0 0 8 8h96a8 8 0 0 0 8-8V280a8 8 0 0 0-8-8Zm-8 56h-32v-40h32Zm-48-40v40h-32v-40Zm-32 56h32v40h-32Zm48 40v-40h32v40Z" fill="#000000" opacity="1" data-original="#000000" class=""></path>

                                   <circle cx="304" cy="368" r="8" transform="rotate(-67.5 304 368)" fill="#000000" opacity="1" data-original="#000000" class=""></circle>

                              </g>

                         </svg>

                    </div>

                    <h3 class="step_name">Home</h3>

               </a>

               <a href="{{ route('office-services') }}" class="step_icon_box">

                    <div class="step_icon">

                         <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 16.933 16.933" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">

                              <g>

                                   <path d="M5.821.53c-1.168 0-2.117.948-2.117 2.117v.993a.806.806 0 0 0-.264.593c0 .483.388.803.811.793.058.397.243.755.512 1.03v1.087c-.934 0-1.739.54-2.129 1.323h-.517a.798.798 0 0 0-.794.794v1.058c-.005.358.534.358.53 0V9.26c0-.151.113-.265.264-.265h7.937c.151 0 .265.114.265.265v4.497H1.852V12.7a.265.265 0 1 0-.53 0v1.587c0 .193.057.373.149.53H.794a.265.265 0 0 0-.266.263v1.059c0 .147.119.266.266.265H16.14c.146 0 .264-.12.263-.265v-1.06a.265.265 0 0 0-.263-.263h-1.86a1.31 1.31 0 0 0 .245-.529h.293a.797.797 0 0 0 .792-.793v-.53a.265.265 0 0 0-.263-.265h-.795v-.263a.265.265 0 0 0-.264-.266h-2.646a.265.265 0 0 0-.264.266v1.588c0 .298.104.57.272.792h-.95c.092-.156.148-.336.148-.529V9.26a.798.798 0 0 0-.794-.794h-.518a2.374 2.374 0 0 0-2.128-1.323V6.056c.24-.226.452-.61.51-1.028.51 0 .813-.398.813-.795a.78.78 0 0 0-.264-.592l-.001-.994A2.118 2.118 0 0 0 6.35.529zm0 .528h.53c.884 0 1.585.704 1.585 1.589v.792h-.154l-.716-.717a.265.265 0 0 0-.373 0s-.74.717-1.666.717h-.794v-.792a1.58 1.58 0 0 1 1.588-1.589zM6.865 3.27l.543.543v.95c0 .737-.585 1.322-1.323 1.322a1.314 1.314 0 0 1-1.322-1.323V3.97h.264c.906 0 1.56-.488 1.838-.699zM4.233 4.498a.264.264 0 0 1-.001-.53zm3.97-.265a.262.262 0 0 1-.265.265v-.53c.152.002.264.121.264.265zm-2.911 2.2a1.838 1.838 0 0 0 1.587 0v.71s-.002.53-.794.53-.793-.53-.793-.53zm-.36 1.24s.256.529 1.153.529c.898 0 1.154-.53 1.154-.53h.17a1.84 1.84 0 0 1 1.516.794h-5.68a1.84 1.84 0 0 1 1.518-.793zm7.499 2.378a.265.265 0 0 0-.26.267v1.059c-.008.36.537.36.529 0v-1.059a.264.264 0 0 0-.27-.267zm1.058 0a.265.265 0 0 0-.26.267v1.059c-.007.36.538.36.53 0v-1.059a.264.264 0 0 0-.27-.267zm-7.404.533c-.435 0-.793.36-.793.795s.358.793.793.793c.435 0 .795-.358.795-.793s-.36-.795-.795-.795zm-4.502.525a.264.264 0 0 0-.26.268v.264c-.005.358.534.358.53 0v-.264a.265.265 0 0 0-.27-.268zm4.502.005c.15 0 .266.116.266.265s-.117.264-.266.264-.264-.115-.264-.264.115-.265.264-.265zm5.82 1.585h2.117v1.325a.785.785 0 0 1-.792.793h-.53a.786.786 0 0 1-.795-.793zm2.647.53h.53v.265a.257.257 0 0 1-.264.264h-.266zm-12.7 1.058h8.467c0 .298-.232.53-.53.53H2.382a.522.522 0 0 1-.529-.53zm-.794 1.059h14.816v.53H1.058z" fill="#000000" opacity="1" data-original="#000000"></path>

                              </g>

                         </svg>

                    </div>

                    <h3 class="step_name">Office</h3>

               </a>

               <a href="{{ route('retail-services') }}" class="step_icon_box">

                    <div class="step_icon">

                         <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">

                              <g>

                                   <path d="M491.776 426.566h-26.352v-185.07c20.641-8.235 35.045-26.545 35.045-47.776a8.008 8.008 0 0 0-1.153-4.138l-56.747-93.9c-.181-.299-.371-.59-.569-.874V53.284c0-12.122-9.862-21.984-21.984-21.984H151.278c-12.122 0-21.984 9.862-21.984 21.984V97.59l-55.593 91.991a8.005 8.005 0 0 0-1.153 4.138c0 21.231 14.404 39.541 35.045 47.776v52.547H49.307l-6.051-27.063a8 8 0 0 0-7.807-6.254H16a8 8 0 0 0 0 16h13.04l22.043 98.582c-6.58 3.431-11.09 10.308-11.09 18.228 0 10.267 7.575 18.776 17.425 20.292a22.179 22.179 0 0 0-.972 6.502c0 8.799 5.138 16.421 12.571 20.024v28.124c0 6.74 5.483 12.224 12.224 12.224h410.536c6.74 0 12.224-5.483 12.224-12.224v-29.688c-.001-6.74-5.484-12.223-12.225-12.223zm-50.797-196.421c-20.698 0-38.054-12.178-42.421-28.426H483.4c-4.365 16.248-21.722 28.426-42.421 28.426zM144.784 103.901h57.814l-24.991 81.818H94.729l49.373-81.7c.072-.035.281-.118.682-.118zm208.906 0 24.991 81.818h-84.172v-81.818zm-75.181 81.818h-84.173l24.991-81.818h59.181v81.818zm-1.07 16c-4.366 16.248-21.722 28.426-42.421 28.426-20.698 0-38.054-12.178-42.421-28.426zm102.981 0c-4.366 16.248-21.722 28.426-42.421 28.426s-38.054-12.178-42.421-28.426zm97.868-16H395.41l-24.991-81.818h57.814c.4 0 .609.083.681.118zM151.278 47.3h268.739a5.992 5.992 0 0 1 5.984 5.984v34.617H145.293V53.284c0-3.3 2.685-5.984 5.985-5.984zM89.616 201.719h84.842c-4.366 16.248-21.722 28.426-42.421 28.426s-38.055-12.178-42.421-28.426zm73.875 108.323c.655 0 2.279.567 3.185 1.698.415.517.791 1.257.44 2.826l-13.062 58.412H66.958l-14.073-62.936zM55.993 393.534c0-2.47 2.086-4.557 4.556-4.557h99.914a8 8 0 0 0 7.807-6.254l14.46-64.666c1.338-5.983.071-11.779-3.567-16.32-3.745-4.674-9.896-7.695-15.672-7.695h-39.898v-48.435c2.76.347 5.578.538 8.445.538 21.963 0 41.185-10.543 51.49-26.188 10.305 15.645 29.527 26.188 51.49 26.188 21.964 0 41.186-10.543 51.491-26.188 10.305 15.645 29.527 26.188 51.49 26.188s41.185-10.543 51.49-26.188c10.305 15.645 29.527 26.188 51.49 26.188 2.867 0 5.685-.19 8.445-.537v180.958h-68.406V311.937h1.35a8 8 0 0 0 8-8v-22.615a8 8 0 0 0-8-8H190.649a8 8 0 0 0-8 8v22.615a8 8 0 0 0 8 8h1.35v114.628h-18.156c.58-1.98.897-4.072.897-6.237 0-12.255-9.966-22.226-22.218-22.237l-.019-.001H60.549c-2.47.001-4.556-2.086-4.556-4.556zm318.375-97.597H198.649v-6.615h175.719zm-95.859 16v114.628h-70.51V311.937zm16 0h70.509v114.628h-70.509zM152.492 426.566a6.244 6.244 0 0 1-6.228-6.237c0-3.439 2.798-6.237 6.237-6.237s6.238 2.798 6.238 6.237a6.244 6.244 0 0 1-6.228 6.237zm-73.808-12.475c3.439 0 6.237 2.798 6.237 6.237s-2.798 6.238-6.237 6.238-6.238-2.798-6.238-6.238 2.798-6.237 6.238-6.237zm21.34 0h31.137a22.159 22.159 0 0 0 0 12.475h-31.137a22.152 22.152 0 0 0 0-12.475zM488 464.7H85.017v-22.135H488zM185.97 67.6a8 8 0 0 1 8-8h61.051a8 8 0 0 1 0 16H193.97a8 8 0 0 1-8-8zm124.026 0a8 8 0 0 1 8-8h61.051a8 8 0 0 1 0 16h-61.051a8 8 0 0 1-8-8zM235.78 384.927l17.312-29.984a8 8 0 0 1 13.856 8l-17.312 29.984a7.998 7.998 0 0 1-10.929 2.928 8 8 0 0 1-2.927-10.928zm-16.22-9.366 17.312-29.984a8 8 0 0 1 13.856 8l-17.312 29.984a7.998 7.998 0 0 1-10.929 2.928 8 8 0 0 1-2.927-10.928zm133.898-12.619-17.312 29.984a7.998 7.998 0 0 1-10.929 2.928 8 8 0 0 1-2.928-10.928l17.312-29.984a7.999 7.999 0 0 1 10.928-2.928 8 8 0 0 1 2.929 10.928zm-16.221-9.365-17.312 29.984a7.998 7.998 0 0 1-10.929 2.928 8 8 0 0 1-2.928-10.928l17.312-29.984a7.998 7.998 0 0 1 10.928-2.928 8 8 0 0 1 2.929 10.928z" fill="#000000" opacity="1" data-original="#000000"></path>

                              </g>

                         </svg>

                    </div>

                    <h3 class="step_name">Retail</h3>

               </a>

          </div>

     </div>

</section>

<!-- step form sec end  -->







<!-- Services we offer start  -->

<section class="servicesWeOfferSec"  style="background: #cccccc; margin-top:2%; padding-bottom:5%;">

     <div class="container">

          <div class="row justify-content-center">

               <div class="col-sm-12 text-center">

                    <div class="heading">

                         <h2>Our Services</h2>

                    </div>

               </div>

          </div>

          <div class="service_row">

               <a href="https://sweetdevelopers.com/html/iinteriofy/design-plan%20&%20architecture.html">

                    <div class="services_box"  style="background: white;">

                         <div class="service_icon">

                              <img class="img-fluid" src="{{ asset('images/plan.png') }}" alt="">

                         </div>

                         <h3 class="serviceTitle">architecture</h3>

                    </div>

               </a>

               <a href="https://sweetdevelopers.com/html/iinteriofy/interior-decoration.html">

                    <div class="services_box"  style="background: white;">

                         <div class="service_icon">

                              <img class="img-fluid" src="{{ asset('images/hvac33.png') }}" alt="">

                         </div>

                         <h3 class="serviceTitle">HVAC consultation</h3>

                    </div>

               </a>

               <a href="https://sweetdevelopers.com/html/iinteriofy/electrical-lighting.html">

                    <div class="services_box" style="background: white;">

                         <div class="service_icon">

                              <img class="img-fluid" src="{{ asset('images/design33.png') }}" alt="">

                         </div>

                         <h3 class="serviceTitle">design consultation</h3>

                    </div>
               </a>

               <a href="https://sweetdevelopers.com/html/iinteriofy/electrical-lighting.html">

                    <div class="services_box" style="background: white;">

                         <div class="service_icon">

                              <img class="img-fluid" src="{{ asset('images/civilstructure.png') }}" alt="">

                         </div>

                         <h3 class="serviceTitle">Civil & Structure</h3>

                    </div>
               </a>


               <a href="https://sweetdevelopers.com/html/iinteriofy/structural.html">



                    <div class="services_box" style="background: white;">

                         <div class="service_icon">

                              <img class="img-fluid" src="{{ asset('images/contract33.png') }}" alt="">

                         </div>

                         <h3 class="serviceTitle">Contracting</h3>

                    </div>
               </a>

               <a href="https://sweetdevelopers.com/html/iinteriofy/plumbing.html">

                    <div class="services_box" style="background: white;">

                         <div class="service_icon">

                              <img class="img-fluid" src="{{ asset('images/electric.png') }}" alt="">

                         </div>

                         <h3 class="serviceTitle">electrical consultation</h3>

                    </div>
               </a>

               <a href="https://sweetdevelopers.com/html/iinteriofy/flooring.html">

                    <div class="services_box" style="background: white;">

                         <div class="service_icon">

                              <img class="img-fluid" src="{{ asset('images/painting33.png') }}" alt="">

                         </div>

                         <h3 class="serviceTitle">Painting consultation</h3>

                    </div>
               </a>

               <a href="https://sweetdevelopers.com/html/iinteriofy/flooring.html">

                    <div class="services_box" style="background: white;">

                         <div class="service_icon">

                              <img class="img-fluid" src="{{ asset('images/plumbing.png') }}" alt="">

                         </div>

                         <h3 class="serviceTitle">Plumbing consultation</h3>

                    </div>
               </a>

               <!-- <a href="https://sweetdevelopers.com/html/iinteriofy/Carpentry_Masonry.html">

                    <div class="services_box">

                         <div class="service_icon">

                              <img class="img-fluid" src="images/carpentry.png" alt="">

                         </div>

                         <h3 class="serviceTitle">Carpentry & Masonry</h3>

                    </div></a>

                    <a href="https://sweetdevelopers.com/html/iinteriofy/painting.html">

                    <div class="services_box">

                         <div class="service_icon">

                              <img class="img-fluid" src="images/painting.png" alt="">

                         </div>

                         <h3 class="serviceTitle">Painting Work</h3>

                    </div></a> -->

          </div>

     </div>


     
     <section class="sliders_sec">

          <div class="container">

               <div class="slider_area">

                    <div class="slider_head">

                         <!--<h3 class="slider_title">Design Consultation</h3>-->

                    </div>

                    <div class="row">
                         <div class="col-12 text-center">
                              <h1>Value Add Services</h1>
                         </div>
                         <div class="col-sm-12">

                              <div class="our_tour_slider owl-carousel owl_navigation">
                                   @if (!@empty($subBanner))
                                        @foreach ($subBanner as $item)
                                             <div class="holiday_pack_slide">
                                                  <a href="#">
                                                       <div class="holiday_pack_area">
                                                            <div class="pack_image">
                                                                 <img class="img-fluid" src="/storage/{{@$item->media}}" alt="No images" />
                                                            </div>
                                                       </div>
                                                  </a>
                                             </div>
                                        @endforeach
                                   @endif
                                   {{-- <div class="holiday_pack_slide">

                                        <a href="#">

                                             <div class="holiday_pack_area">



                                                  <div class="pack_image">

                                                       <img class="img-fluid" src="{{ asset('images/Design2.jpg') }}" alt="" />

                                                  </div>

                                             </div>

                                        </a>

                                   </div>
                                   <div class="holiday_pack_slide">

                                        <a href="#">

                                             <div class="holiday_pack_area">



                                                  <div class="pack_image">

                                                       <img class="img-fluid" src="{{ asset('images/Design3.jpg') }}" alt="" />

                                                  </div>

                                             </div>

                                        </a>

                                   </div>
                                   <div class="holiday_pack_slide">

                                        <a href="#">

                                             <div class="holiday_pack_area">



                                                  <div class="pack_image">

                                                       <img class="img-fluid" src="{{ asset('images/Design4.jpg') }}" alt="" />

                                                  </div>

                                             </div>

                                        </a>

                                   </div>
                                   <div class="holiday_pack_slide">

                                        <a href="#">

                                             <div class="holiday_pack_area">



                                                  <div class="pack_image">

                                                       <img class="img-fluid" src="{{ asset('images/Design5.jpg') }}" alt="" />

                                                  </div>

                                             </div>

                                        </a>

                                   </div> --}}

                              </div>

                              <!--<div class="see-all-btn">-->

                              <!--     <a class="btn seeAllBtn" href="design-consultation.html">See All<i class="fa-solid fa-angles-right"></i></a>-->

                              <!--</div>-->

                         </div>

                    </div>

               </div>

            <!--   <div class="slider_area">-->

            <!--        <div class="slider_head">-->

            <!--             <h3 class="slider_title">Architecture</h3>-->

            <!--        </div>-->

            <!--        <div class="row">-->

            <!--             <div class="col-sm-12">-->

            <!--                  <div class="our_tour_slider owl-carousel owl_navigation">-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->

            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/temple.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/terres.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->



            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/Kids-room.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/Bedroom.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/livingRoom.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                  </div>-->

            <!--                  <div class="see-all-btn">-->

            <!--                       <a class="btn seeAllBtn" href="architecture.html">See All<i class="fa-solid fa-angles-right"></i></a>-->

            <!--                  </div>-->

            <!--             </div>-->

            <!--        </div>-->

            <!--   </div>-->



            <!--   <div class="slider_area">-->

            <!--        <div class="slider_head">-->

            <!--             <h3 class="slider_title">HVAC consultation</h3>-->

            <!--        </div>-->

            <!--        <div class="row">-->

            <!--             <div class="col-sm-12">-->

            <!--                  <div class="our_tour_slider owl-carousel owl_navigation">-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/Flooring1.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/Walls1.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->



            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/ceiling1.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/Flooring2.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/Walls2.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/ceiling2.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->



            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/Walls3.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                       <div class=" holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/Flooring3.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->



            <!--                  </div>-->

            <!--                  <div class="see-all-btn">-->

            <!--                       <a class="btn seeAllBtn" href="hvac-consultation.html">See All<i class="fa-solid fa-angles-right"></i></a>-->

            <!--                  </div>-->

            <!--             </div>-->

            <!--        </div>-->

            <!--   </div>-->

            <!--   <div class="slider_area">-->

            <!--        <div class="slider_head">-->

            <!--             <h3 class="slider_title">Electrical Consultation</h3>-->

            <!--        </div>-->

            <!--        <div class="row">-->

            <!--             <div class="col-sm-12">-->

            <!--                  <div class="our_tour_slider owl-carousel owl_navigation">-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/electrical1.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->

            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/plumber1.jpg" alt="" />-->

            <!--                                      </div>-->



            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->



            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/carpenter1.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/plumber2.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/electrical2.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/carpenter2.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->







            <!--                  </div>-->

            <!--                  <div class="see-all-btn">-->

            <!--                       <a class="btn seeAllBtn" href="#">See All<i class="fa-solid fa-angles-right"></i></a>-->

            <!--                  </div>-->

            <!--             </div>-->

            <!--        </div>-->

            <!--   </div>-->

            <!--     <div class="slider_area">-->

            <!--        <div class="slider_head">-->

            <!--             <h3 class="slider_title">Contractor</h3>-->

            <!--        </div>-->

            <!--        <div class="row">-->

            <!--             <div class="col-sm-12">-->

            <!--                  <div class="our_tour_slider owl-carousel owl_navigation">-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->

            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/temple.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/terres.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->



            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/Kids-room.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/Bedroom.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/livingRoom.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                  </div>-->

            <!--                  <div class="see-all-btn">-->

            <!--                       <a class="btn seeAllBtn" href="architecture.html">See All<i class="fa-solid fa-angles-right"></i></a>-->

            <!--                  </div>-->

            <!--             </div>-->

            <!--        </div>-->

            <!--   </div>-->

            <!--<div class="slider_area">-->

            <!--        <div class="slider_head">-->

            <!--             <h3 class="slider_title">Structural Consultation</h3>-->

            <!--        </div>-->

            <!--        <div class="row">-->

            <!--             <div class="col-sm-12">-->

            <!--                  <div class="our_tour_slider owl-carousel owl_navigation">-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/Design1.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/Design2.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->



            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/Design3.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/Design4.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                       <div class="holiday_pack_slide">-->

            <!--                            <a href="#">-->

            <!--                                 <div class="holiday_pack_area">-->



            <!--                                      <div class="pack_image">-->

            <!--                                           <img class="img-fluid" src="images/Design5.jpg" alt="" />-->

            <!--                                      </div>-->

            <!--                                 </div>-->

            <!--                            </a>-->

            <!--                       </div>-->

            <!--                  </div>-->

            <!--                  <div class="see-all-btn">-->

            <!--                       <a class="btn seeAllBtn" href="design-consultation.html">See All<i class="fa-solid fa-angles-right"></i></a>-->

            <!--                  </div>-->

            <!--             </div>-->

            <!--        </div>-->

            <!--   </div>-->



          </div>

     </section>

     <!-- Services we offer end  -->


<!-- sliders sec start  -->

<section class="sliders_sec">

     <div class="container">

          <div class="slider_area">
               <div class="row justify-content-center">

                    <div class="col-sm-12 text-center">

                         <div class="heading mt-3">

                              <h2>Value Add Services</h2>

                         </div>

                    </div>

               </div>

               <div class="slider_head">
                    <!-- <h3 class="slider_title">Design Consultation</h3> -->
               </div>

               <div class="row">

                    <div class="col-sm-12">

                         <div class="our_tour_slider owl-carousel owl_navigation">
                              @if (!@empty($subBanner))
                              @foreach ($subBanner as $item)
                              <div class="holiday_pack_slide">
                                   <a href="#">
                                        <div class="holiday_pack_area">
                                             <div class="pack_image">
                                                  <img class="img-fluid" src="/storage/{{@$item->media}}" alt="No images" />
                                             </div>
                                        </div>
                                   </a>
                              </div>
                              @endforeach
                              @endif
                              {{-- <div class="holiday_pack_slide">

                              <a href="#">

                                   <div class="holiday_pack_area">



                                        <div class="pack_image">

                                             <img class="img-fluid" src="{{ asset('images/Design2.jpg') }}" alt="" />

                         </div>

                    </div>

                    </a>

               </div>
               <div class="holiday_pack_slide">

                    <a href="#">

                         <div class="holiday_pack_area">



                              <div class="pack_image">

                                   <img class="img-fluid" src="{{ asset('images/Design3.jpg') }}" alt="" />

                              </div>

                         </div>

                    </a>

               </div>
               <div class="holiday_pack_slide">

                    <a href="#">

                         <div class="holiday_pack_area">



                              <div class="pack_image">

                                   <img class="img-fluid" src="{{ asset('images/Design4.jpg') }}" alt="" />

                              </div>

                         </div>

                    </a>

               </div>
               <div class="holiday_pack_slide">

                    <a href="#">

                         <div class="holiday_pack_area">



                              <div class="pack_image">

                                   <img class="img-fluid" src="{{ asset('images/Design5.jpg') }}" alt="" />

                              </div>

                         </div>

                    </a>

               </div> --}}

          </div>

          <!--<div class="see-all-btn">-->

          <!--     <a class="btn seeAllBtn" href="design-consultation.html">See All<i class="fa-solid fa-angles-right"></i></a>-->

          <!--</div>-->

     </div>

     </div>

     </div>

     <!--   <div class="slider_area">-->

     <!--        <div class="slider_head">-->

     <!--             <h3 class="slider_title">Architecture</h3>-->

     <!--        </div>-->

     <!--        <div class="row">-->

     <!--             <div class="col-sm-12">-->

     <!--                  <div class="our_tour_slider owl-carousel owl_navigation">-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->

     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/temple.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/terres.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->



     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/Kids-room.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/Bedroom.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/livingRoom.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                  </div>-->

     <!--                  <div class="see-all-btn">-->

     <!--                       <a class="btn seeAllBtn" href="architecture.html">See All<i class="fa-solid fa-angles-right"></i></a>-->

     <!--                  </div>-->

     <!--             </div>-->

     <!--        </div>-->

     <!--   </div>-->



     <!--   <div class="slider_area">-->

     <!--        <div class="slider_head">-->

     <!--             <h3 class="slider_title">HVAC consultation</h3>-->

     <!--        </div>-->

     <!--        <div class="row">-->

     <!--             <div class="col-sm-12">-->

     <!--                  <div class="our_tour_slider owl-carousel owl_navigation">-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/Flooring1.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/Walls1.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->



     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/ceiling1.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/Flooring2.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/Walls2.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/ceiling2.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->



     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/Walls3.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                       <div class=" holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/Flooring3.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->



     <!--                  </div>-->

     <!--                  <div class="see-all-btn">-->

     <!--                       <a class="btn seeAllBtn" href="hvac-consultation.html">See All<i class="fa-solid fa-angles-right"></i></a>-->

     <!--                  </div>-->

     <!--             </div>-->

     <!--        </div>-->

     <!--   </div>-->

     <!--   <div class="slider_area">-->

     <!--        <div class="slider_head">-->

     <!--             <h3 class="slider_title">Electrical Consultation</h3>-->

     <!--        </div>-->

     <!--        <div class="row">-->

     <!--             <div class="col-sm-12">-->

     <!--                  <div class="our_tour_slider owl-carousel owl_navigation">-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/electrical1.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->

     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/plumber1.jpg" alt="" />-->

     <!--                                      </div>-->



     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->



     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/carpenter1.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/plumber2.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/electrical2.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/carpenter2.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->







     <!--                  </div>-->

     <!--                  <div class="see-all-btn">-->

     <!--                       <a class="btn seeAllBtn" href="#">See All<i class="fa-solid fa-angles-right"></i></a>-->

     <!--                  </div>-->

     <!--             </div>-->

     <!--        </div>-->

     <!--   </div>-->

     <!--     <div class="slider_area">-->

     <!--        <div class="slider_head">-->

     <!--             <h3 class="slider_title">Contractor</h3>-->

     <!--        </div>-->

     <!--        <div class="row">-->

     <!--             <div class="col-sm-12">-->

     <!--                  <div class="our_tour_slider owl-carousel owl_navigation">-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->

     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/temple.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/terres.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->



     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/Kids-room.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/Bedroom.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/livingRoom.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                  </div>-->

     <!--                  <div class="see-all-btn">-->

     <!--                       <a class="btn seeAllBtn" href="architecture.html">See All<i class="fa-solid fa-angles-right"></i></a>-->

     <!--                  </div>-->

     <!--             </div>-->

     <!--        </div>-->

     <!--   </div>-->

     <!--<div class="slider_area">-->

     <!--        <div class="slider_head">-->

     <!--             <h3 class="slider_title">Structural Consultation</h3>-->

     <!--        </div>-->

     <!--        <div class="row">-->

     <!--             <div class="col-sm-12">-->

     <!--                  <div class="our_tour_slider owl-carousel owl_navigation">-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/Design1.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/Design2.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->



     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/Design3.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/Design4.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                       <div class="holiday_pack_slide">-->

     <!--                            <a href="#">-->

     <!--                                 <div class="holiday_pack_area">-->



     <!--                                      <div class="pack_image">-->

     <!--                                           <img class="img-fluid" src="images/Design5.jpg" alt="" />-->

     <!--                                      </div>-->

     <!--                                 </div>-->

     <!--                            </a>-->

     <!--                       </div>-->

     <!--                  </div>-->

     <!--                  <div class="see-all-btn">-->

     <!--                       <a class="btn seeAllBtn" href="design-consultation.html">See All<i class="fa-solid fa-angles-right"></i></a>-->

     <!--                  </div>-->

     <!--             </div>-->

     <!--        </div>-->

     <!--   </div>-->



     </div>

</section>

<!-- sliders sec end  -->



<!--===================== counter up sec  ===================== -->

<section id="counter" class="counterUp_sec">

     <div class="container">

          <div class="row justify-content-center">

               <div class="col-sm-12 text-center">

                    <div class="heading">

                         <h2><img src={{ asset('images/new-logo.jpeg') }}" alt="" class="logo_img"></h2>

                    </div>

               </div>

          </div>

          <div class="wrapper">

               <div class="counterUP">

                    <div class="counter">

                         <span class="num count percent" data-count="31">000</span>

                         <span class="num">K</span><i class="fa-solid fa-plus"></i>

                    </div>



                    <p class="text">Completed Homes</p>

               </div>



               <div class="counterUP">

                    <div class="counter">

                         <span class="num count percent" data-count="600">000</span>

                         <i class="fa-solid fa-plus"></i>

                    </div>



                    <p class="text">In-house Designers</p>

               </div>



               <div class="counterUP">

                    <div class="counter">

                         <span class="num count percent" data-count="30">000</span>

                         <i class="fa-solid fa-plus"></i>

                    </div>



                    <p class="text">Projects Delivered Daily</p>

               </div>



               <div class="counterUP">

                    <div class="counter">

                         <span class="num count percent" data-count="20">000</span>

                         <i class="fa-solid fa-plus"></i>

                    </div>

                    <p class="text">Cities</p>

               </div>

          </div>



     </div>

</section>

<!--===================== counter up sec end  ===================== -->

<section style="padding-bottom: 70px; background: #cccccc;">

     <div class="container-fluid">

          <div class="row justify-content-center">

               <div class="col-sm-12 text-center">

                    <div class="heading">

                         <h2>Your Journey</h2>

                    </div>

               </div>

          </div>

          <div class="row text-center">
               <div class="col-lg-2 col-md-4 col-12">
                    <img src="{{ asset('images/nk1.jpg') }}" class="design_section_img_1">
                    <p class="design_section_p_1">Share your details</p>
               </div>
               <div class="col-lg-2 col-md-4 col-12">
                    <img src="{{ asset('images/nk2.jpg') }}" class="design_section_img_1">
                    <p class="design_section_p_1">Share Your Requirement</p>
               </div>
               <div class="col-lg-2 col-md-4 col-12">
                    <img src="{{ asset('images/nk3.jpg') }}" class="design_section_img_1">
                    <p class="design_section_p_1">We share 3 partners based on your requirement & location</p>
               </div>
               <div class="col-lg-2 col-md-4 col-12">
                    <img src="{{ asset('images/nk4.jpg') }}" class="design_section_img_1">
                    <p class="design_section_p_1">You fix the free consultation call</p>
               </div>
               <div class="col-lg-2 col-md-4 col-12">
                    <img src="{{ asset('images/nk4.jpg') }}" class="design_section_img_1">
                    <p class="design_section_p_1">You finalize the partner of your choice</p>
               </div>
               <div class="col-lg-2 col-md-4 col-12">
                    <img src="{{ asset('images/nk4.jpg') }}" class="design_section_img_1">
                    <p class="design_section_p_1">The Partner will further coordinate with you to understand and quote for execution</p>
               </div>
          </div>

     </div>

</section>

<!--===================== testimonial sec  ===================== -->

<section class="textimonial_sec">

     <div class="container">

          <div class="row justify-content-center">

               <div class="col-sm-12 text-center">

                    <div class="heading">

                         <h2>OUR CUSTOMERS SPEAK FOR US</h2>

                    </div>

               </div>

          </div>

          <div class="row justify-content-center">
               <div class="col-sm-12 text-center">
                    <div class="testi_slider owl-carousel owl_navigation">
                         @if (!@empty($testimonial))
                         @foreach ($testimonial as $item)
                         <div class="testi_slider_item">
                              <div class="testi_img">
                                   <img class="img-fluid" src="{{ asset('storage/'.$item->user_image) }}" alt="No">
                              </div>
                              <h3>{{$item->name}}</h3>
                              <p>{{$item->designation}}</p>
                              <div class="rating">
                                   @for ($i=0; $i < (int)$item->rating; $i++)
                                        <span><i class="fa fa-star orange" aria-hidden="true"></i></span>
                                        @endfor
                                        {{-- <span><i class="fa fa-star orange" aria-hidden="true"></i></span>
                                                  <span><i class="fa fa-star orange" aria-hidden="true"></i></span>
                                                  <span><i class="fa fa-star orange" aria-hidden="true"></i></span>
                                                  <span><i class="fa fa-star orange" aria-hidden="true"></i></span>
                                                  <span><i class="fa fa-star orange" aria-hidden="true"></i></span> --}}
                              </div>
                              <p class="tes_para">
                                   {!! $item->description !!}
                              </p>
                         </div>
                         @endforeach
                         @endif
                         {{-- <div class="testi_slider_item">
                                   <div class="testi_img">
                                        <img class="img-fluid" src="{{ asset('images/my1.jpg') }}" alt="">
                    </div>
                    <h3>Lorem Ipsum</h3>
                    <p>Web Designer</p>
                    <div class="rating">
                         <span><i class="fa fa-star orange" aria-hidden="true"></i></span>
                         <span><i class="fa fa-star orange" aria-hidden="true"></i></span>
                         <span><i class="fa fa-star orange" aria-hidden="true"></i></span>
                         <span><i class="fa fa-star orange" aria-hidden="true"></i></span>
                         <span><i class="fa fa-star orange" aria-hidden="true"></i></span>
                    </div>
                    <p class="tes_para">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis facere beatae
                         adipisci nisi ad aliquam sint ipsa qui fuga eius, non necessitatibus quidem,
                         doloribus eum.
                    </p>
               </div> --}}
               {{-- <div class="testi_slider_item">

                                   <div class="testi_img">

                                        <img class="img-fluid" src="{{ asset('images/my1.jpg') }}" alt="">

          </div>

          <h3>Lorem Ipsum</h3>

          <p>Web Designer</p>

          <div class="rating">

               <span><i class="fa fa-star orange" aria-hidden="true"></i></span>

               <span><i class="fa fa-star orange" aria-hidden="true"></i></span>

               <span><i class="fa fa-star orange" aria-hidden="true"></i></span>

               <span><i class="fa fa-star orange" aria-hidden="true"></i></span>

               <span><i class="fa fa-star orange" aria-hidden="true"></i></span>

          </div>

          <p class="tes_para">

               Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis facere beatae

               adipisci nisi ad aliquam sint ipsa qui fuga eius, non necessitatibus quidem,

               doloribus eum.

          </p>





     </div>
     <div class="testi_slider_item">

          <div class="testi_img">

               <img class="img-fluid" src="{{ asset('images/my1.jpg') }}" alt="">

          </div>

          <h3>Lorem Ipsum</h3>

          <p>Web Designer</p>

          <div class="rating">

               <span><i class="fa fa-star orange" aria-hidden="true"></i></span>

               <span><i class="fa fa-star orange" aria-hidden="true"></i></span>

               <span><i class="fa fa-star orange" aria-hidden="true"></i></span>

               <span><i class="fa fa-star orange" aria-hidden="true"></i></span>

               <span><i class="fa fa-star orange" aria-hidden="true"></i></span>

          </div>

          <p class="tes_para">

               Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis facere beatae

               adipisci nisi ad aliquam sint ipsa qui fuga eius, non necessitatibus quidem,

               doloribus eum.

          </p>





     </div> --}}
     </div>
     </div>
     </div>
     </div>
</section>

<!--===================== testimonial sec end  ===================== -->



<!--===================== Articles & Blogs sec  ===================== -->

<section class="blog_sec" id="blog">

     <div class="container">

          <div class="row justify-content-center">

               <div class="col-sm-12 text-center">

                    <div class="heading">

                         <h2>BLOGS</h2>

                    </div>

               </div>

          </div>

          <div class="row justify-content-center">
               <div class="col-sm-12 text-center">
                    <div class="blog_slider owl-carousel owl_navigation">
                         @if (!@empty($blog))
                         @foreach ($blog as $item)
                         <div class="holiday_pack_slide">
                              <a href="#">
                                   <div class="holiday_pack_area">
                                        <div class="pack_image">
                                             <img class="img-fluid" src="{{ asset('storage/'.$item->image) }}" alt="No images">
                                        </div>
                                        <h3 class="title_blog">{{@$item->title}}</h3>
                                        <p>{!! @$item->description !!}</p>
                                   </div>
                              </a>
                         </div>
                         @endforeach
                         @endif



                         {{-- <div class="holiday_pack_slide">

                                   <a href="#">

                                        <div class="holiday_pack_area">

                                             <div class="pack_image">

                                                  <img class="img-fluid" src="{{ asset('images/electrical2.jpg') }}" alt="">

                    </div>

                    <h3 class="title_blog">Lorem ipsum dolor sit amet.</h3>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla eaque

                         neque quis quia et minus!</p>

               </div>

               </a>

          </div>
          <div class="holiday_pack_slide">

               <a href="#">

                    <div class="holiday_pack_area">

                         <div class="pack_image">

                              <img class="img-fluid" src="{{ asset('images/Bedroom.jpg') }}" alt="">

                         </div>

                         <h3 class="title_blog">Lorem ipsum dolor sit amet.</h3>

                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla eaque

                              neque quis quia et minus!</p>

                    </div>

               </a>

          </div>
          <div class="holiday_pack_slide">

               <a href="#">

                    <div class="holiday_pack_area">

                         <div class="pack_image">

                              <img class="img-fluid" src="{{ asset('images/livingRoom.jpg') }}" alt="">

                         </div>

                         <h3 class="title_blog">Lorem ipsum dolor sit amet.</h3>

                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla eaque

                              neque quis quia et minus!</p>

                    </div>

               </a>

          </div>
          <div class="holiday_pack_slide">

               <a href="#">

                    <div class="holiday_pack_area">

                         <div class="pack_image">

                              <img class="img-fluid" src="{{ asset('images/temple.jpg') }}" alt="">

                         </div>

                         <h3 class="title_blog">Lorem ipsum dolor sit amet.</h3>

                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla eaque

                              neque quis quia et minus!</p>

                    </div>

               </a>

          </div> --}}

     </div>

     </div>

     </div>

     </div>

</section>

<!--===================== Articles & Blogs sec end  ===================== -->



<section class="mb-70">

     <div class="container">

          <div class="row justify-content-center">

               <div class="col-lg-8">

                    <div class="form_wrapper">

                         <div class="form_container">

                              <div class="title_container">

                                   <h2>Book Your Free Consultation Call </h2>

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

                                                            <input type="text" class="form-control" placeholder="Enter your current residence pincode" value="" />

                                                       </div>

                                                       <button id="bfc" class="btn my_newBtn" type="submit">

                                                            <span>Book</span>

                                                            <span>Design consultations</span>

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



<!--===================== Login Modal  ===================== -->



<div class="modal fade login-modal-box" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">

     <div class="modal-dialog" role="document">

          <div class="modal-content">

               <div class="modal-header">

                    <h5 class="modal-title" id="loginModalLabel"></h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                         <span aria-hidden="true">&times;</span>

                    </button>

               </div>

               <div class="modal-body login-body">

                    <h5 class="modal-title">To sign in, please enter your mobile number</h5>

                    <div class="mb-4">

                         <input type="text" placeholder="Enter Mobile Number" class="form-control">

                    </div>

                    <div class="login-btn">

                         <button type="submit" class="login-submit">Sign in with OTP</button>

                         <button type="submit" class="login-password">Sign in with Password</button>

                         <h6>First time user? <a href="" id="registerLink" data-toggle="modal" data-target="#registerModal">Register</a></h6>

                    </div>

               </div>

          </div>

     </div>

</div>



<!--===================== Login End Modal  ===================== -->



<!--===================== Register Modal  ===================== -->



<div class="modal fade login-modal-box" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">

     <div class="modal-dialog register-modal" role="document">

          <div class="modal-content">

               <div class="modal-header">

                    <h5 class="modal-title" id="registerModalLabel"></h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                         <span aria-hidden="true">&times;</span>

                    </button>

               </div>

               <div class="modal-body login-body">

                    <h5 class="modal-title">To sign up, please enter your mobile number</h5>

                    <div class="mb-2">

                         <input type="text" placeholder="Name" class="form-control">

                    </div>

                    <div class="mb-2">

                         <input type="text" placeholder="Email" class="form-control">

                    </div>

                    <div class="mb-2">

                         <input type="text" placeholder="Country" class="form-control">

                    </div>

                    <div class="mb-2">

                         <input type="text" placeholder="City" class="form-control">

                    </div>

                    <div class="mb-2">

                         <input type="text" placeholder="Occupation" class="form-control">

                    </div>

                    <div class="mb-2">

                         <input type="text" id="phone_code" placeholder="Enter Mobile Number" class="form-control">

                    </div>

                    <div class="login-btn">

                         <button type="submit" class="login-submit" id="proceed" data-toggle="modal" data-target="#proceedModal">Proceed</button>

                    </div>

                    <div class="mb-4 member">

                         <h4>Already a member? <a href="">Login</a></h4>

                    </div>

               </div>

          </div>

     </div>

</div>



<!--===================== Register End Modal  ===================== -->



<!--===================== OTP Proceed Modal  ===================== -->



<div class="modal fade login-modal-box" id="proceedModal" tabindex="-1" role="dialog" aria-labelledby="proceedModalLabel" aria-hidden="true">

     <div class="modal-dialog register-modal" role="document">

          <div class="modal-content">

               <div class="modal-header">

                    <h5 class="modal-title" id="proceedModalLabel"></h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                         <span aria-hidden="true">&times;</span>

                    </button>

               </div>

               <div class="modal-body login-body">

                    <h5 class="modal-title">Please enter the OTP you've received on </h5>

                    <div class="mb-4">

                         <input type="text" placeholder="Enter OTP Number" class="form-control">

                    </div>

                    <div class="login-btn">

                         <button type="submit" class="login-submit" id="proceed" data-toggle="modal" data-target="#proceedModal">Verify NUmber</button>

                    </div>

                    <div class="mb-4 member">

                         <h4>Didn't receive the OTP yet? <a href="">Resend</a></h4>

                    </div>

               </div>

          </div>

     </div>

</div>



<!--===================== OTP Proceed End Modal  ===================== -->
@include('include.footer')