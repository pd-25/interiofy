@include('include.header')

    
    <!--===================== Office Interior Banner  ===================== -->
    <section class="inner_banner inner_bannerblog">
        <div class="container">
            <div class="inner_box">
                <div class="inner_banner_caption">
                    <h1>Blogs</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    {{-- <div class="interior-banner">
        <div class="interior-banner-slider owl-carousel owl-theme">
            <div class="item banner-item">
                <a href=""><img src="images/about-us.jpg" alt=""></a>
                <div class="banner-item-info">
                    <h1 style="color:white">Our blogs</h1>
                    <p style="color:white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="item banner-item">
                <a href=""><img src="images/architectural-01.jpg" alt=""></a>
                <div class="banner-item-info">
                    <h1  style="color:white">Our blogs</h1>
                    <p  style="color:white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="item banner-item">
                <a href=""><img src="images/architectural-02.jpg" alt=""></a>
                <div class="banner-item-info">
                    <h1  style="color:white">Our blogs</h1>
                    <p  style="color:white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div> --}}

    <!--===================== End Office Interior Banner  ===================== -->

     <!-- blog section starts -->
     <section>
         <div class="blog_div_1">
             <div class="container">
                 <div class="blog_div_2">
                     <div class="text_div_1">
                         <div class="container">
                             <div class="text_div_2 text-center">
                                 <p class="text_p_1">
                                    From Opulence to Open Floorplans: The Evolution of Interior Design in India.
                                 </p>
                                 <p class="text_p_2">
                                    India's vibrant culture has always been reflected in its approach to interior design. Homes and buildings tell stories of tradition and functionality. Our country’s rich history is intricately woven into the evolution of its interior design. What began as a practice focused on utility and status in royal courts has transformed into a dynamic industry catering to diverse needs and aesthetics. Let's embark on a journey through time to explore this fascinating transformation.
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="blog_div_3 mt-5 mb-5">
                         <div class="row">
                            @if (!@empty($blog))
                                @foreach ($blog as $item)
                                    <div class="col-lg-4 col-md-4 col-12 mb-5">
                                        <div class="blog_div_3">
                                            <div class="holiday_pack_slide">
                                                <a href="{{route('blog-details', encrypt($item->id))}}">
                                                    <div class="holiday_pack_area">
                                                        <div class="pack_image">
                                                            <img class="img-fluid" src="{{ asset('storage/'.$item->image) }}" alt="No Images">
                                                        </div>
                                                        <h3 class="title_blog">{{@$item->title}}</h3>
                                                        <p> {!! Str::words ($item->description, 30 ,' ...') !!}</p>
                                                        {{-- <p>{!! @$item->description !!}</p> --}}
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- /blog section ends -->


@include('include.footer')
