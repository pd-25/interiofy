@include('include.header')
<section class="inner_banner">
    <div class="container">
        <div class="inner_box">
            <div class="inner_banner_caption">
                <h1>Contact Us</h1>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="index.html">Contact Us </a></li> -->
                    <li class="breadcrumb-item active" aria-current="page">
                        Contact Us
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<section class="mb-70">
    <div class="container">
        <div class="row contact-icon">
            <div class="col-md-4 mb-3">
                <div class="cover p-4 bg-white row m-0 rounded shadow-md">
                    <div class="col-md-3 text-center">
                        <i class="fa fa-map-marker ff20" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-9 ps-0 fs-6 pt-1 fw-bolder">
                        <h3 class="cad">{{ @$contact->location }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="cover p-4 bg-white row m-0 rounded shadow-md">
                    <div class="col-md-3 text-center">
                        <i class="fa fa-envelope ff20" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-9 ps-0 fs-6 pt-1 fw-bolder">
                        <h3 class="cad">
                            {{ @$contact->email1 }} <br />
                            {{ @$contact->email2 }}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="cover p-4 bg-white row m-0 rounded shadow-md">
                    <div class="col-md-3 text-center">
                        <i class="fa fa-phone ff20" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-9 ps-0 fs-6 pt-1 fw-bolder">
                        <h3 class="cad">
                            {{ @$contact->phone1 }} <br />
                            {{ @$contact->phone2 }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="shadow-md bg-white p-5">
                    <form action="">
                        <h4 class="fs-7 fw-bolder mb-4">Contact Form</h4>
                        <div class="mb-4">
                            <label class="pt-2 llf" for="">Full Name :</label>
                            <input type="text" placeholder="Enter Full Name" class="form-control mb-0" />
                        </div>
                        <div class="mb-4">
                            <label class="pt-2 llf" for="">Mobile Number :</label>
                            <input type="text" placeholder="Enter Mobile Number" class="form-control mb-0" />
                        </div>
                        <div class="mb-4">
                            <label class="pt-2 llf" for="">Email Address :</label>
                            <input type="text" placeholder="Enter Email Address" class="form-control mb-0" />
                        </div>
                        <div class="mb-4">
                            <label class="pt-2 llf" for="">Address :</label>
                            <textarea name="" id="" cols="30" placeholder="Enter Your Text" rows="4" class="form-control"></textarea>
                        </div>
                        <div class="submit-btn">
                            <button class="btn csbf">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="shadow-md bg-white p-4 map-frame">
                    {!! @$contact->location_map !!}
                </div>
            </div>
        </div>
    </div>
</section>

@include('include.footer')
