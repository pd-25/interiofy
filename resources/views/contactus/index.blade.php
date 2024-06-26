@include('include.header')

<section class="inner_banner inner_bannerContact">
    <div class="container">
        <div class="inner_box">
            <div class="inner_banner_caption">
                <h1>Contact Us</h1>
            </div>
            {{-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Contact Us
                    </li>
                </ol>
            </nav> --}}
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>

    </div>
</section>

<section>
    <div class="text_div_1">
        <div class="container">
            <div class="text_div_2 text-center">
                <p class="text_p_1">
                    Whether Customer or Partner, Contact Us!
                </p>
                <p class="text_p_2">
                    Have a design concept in mind or seeking expert guidance? Contact us to start your design journey.
                    <br>
                    We're here for customers looking to transform their spaces and partners ready to broaden their horizons.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="mb-70">
    <div class="container">
        <div class="row contact-icon">
            <div class="col-md-4 mb-3">
                <div class="cover p-4 bg-white row m-0 rounded shadow-md text-center">
                    <div class="col-md-12 text-center contact_icon_1">
                        <i class="fa fa-map-marker ff20" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-12 ps-0 fs-6 pt-1 mt-3 mb-4 fw-bolder">
                        <h3 class="cad">1'st Floor, Vincent Plaza, Kuzhithurai 629 163</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="cover p-4 bg-white row m-0 rounded shadow-md text-center">
                    <div class="col-md-12 text-center contact_icon_1">
                        <i class="fa fa-envelope ff20" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-12 ps-0 fs-6 pt-1 mt-3 mb-4 fw-bolder">
                        <h3 class="cad"> sales@smarteyeapps.com <br>
                            support@smarteyeapps.com</h3>

                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="cover p-4 bg-white row m-0 rounded shadow-md text-center">
                    <div class="col-md-12 text-center contact_icon_1">
                        <i class="fa fa-phone ff20" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-12 ps-0 fs-6 pt-1 mt-3 mb-4 fw-bolder">
                        <h3 class="cad"> +912 344 43434 443 <br>
                            +041 3434 44343 43</h3>

                    </div>
                </div>
            </div>
        </div>
        <div class="contact_div_1 text-center mt-5 mb-5">
            <p class="contact_p_1">Get in Touch</p>
            <p class="contact_p_2">
                Send us a note and we will get back to you as quickly as possible
            </p>
            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                {{ Session::get('success') }}

            </div>
            @endif
            @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                {{ Session::get('error') }}
            </div>
            @endif
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="shadow-md bg-white p-5">
                    <form action="{{route('storeEnquries')}}" method="post">
                        @csrf
                        @method('POST')
                        <!--<h4 class="fs-7 fw-bolder mb-4">Contact Form</h4>-->
                        <div class="mb-4">
                            <label class="pt-2 llf" for="">Full Name :</label>
                            <input type="text" placeholder="Enter Full Name" class="form-control mb-0" name="fullName">
                            <span class="text-danger">
                                @error('fullName')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>
                        </div>
                        <div class="mb-4">
                            <label class="pt-2 llf" for="">Mobile Number :</label>
                            <input type="text" name="phoneNo" placeholder="Enter Mobile Number" class="form-control mb-0">
                            <span class="text-danger">
                                @error('phoneNo')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>
                        </div>
                        <div class="mb-4">
                            <label class="pt-2 llf" for="">Email Address :</label>
                            <input type="text" name="email" placeholder="Enter Email Address" class="form-control mb-0">
                            <span class="text-danger">
                                @error('email')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>
                        </div>
                        <div class="mb-4">
                            <label class="pt-2 llf" for="">Address :</label>
                            <textarea name="address" placeholder="Enter Your Text" rows="4" class="form-control"></textarea>
                            <span class="text-danger">
                                @error('address')
                                <strong>{{ $message }}</strong>
                                @enderror
                            </span>
                        </div>
                        <div class="submit-btn">
                            <button type="submit" class="btn csbf">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 d-none">
                <div class="shadow-md bg-white p-4 map-frame">
                    <iframe class="pb-0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15659.16664494769!2d77.32095495000002!3d11.1288885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1660839868672!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@include('include.footer')