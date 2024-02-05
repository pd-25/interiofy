@include('include.header')

<!-- stepform sec  -->
<section class="stepform_Sec">
    <div class="container">
        <!-- MultiStep Form -->

        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="stepform">
            <div class="step well">
                <fieldset>
                    <div class="row justify-content-center">
                        <div class="col-sm-12 text-center">
                            <div class="heading">
                                <h2>help us to know you better</h2>
                            </div>
                        </div>
                    </div>
                    <div class="form-area step-login-form">
                        <div class="form-inner">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email" name="name" />
                                </div>
                                <div class="form-group">
                                    <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number" name="name" />
                                </div>
                            </form>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="step well">
                <!-- fieldsets -->
                <fieldset>
                    <div class="row justify-content-center">
                        <div class="col-sm-12 text-center">
                            <div class="heading">
                                <h2>give us your Retail requirements</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="wrapper1">
                                <div class="main_tab">
                                    <div class="tab-wrapper">
                                        <ul class="tabs">
                                            <li class="tab-link active new_tab" data-tab="1">New showroom</li>
                                            <li class="tab-link" data-tab="2">Rennovation</li>
                                        </ul>
                                    </div>

                                    <div class="content-wrapper">
                                        <div id="tab-1" class="tab-content active">
                                            <div class="row justify-content-center">
                                                <div class="col-sm-6">
                                                    <form class="gaping" action="#" method="post">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Total Area (square feet)" required />
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-2" class="tab-content">
                                            <div class="row justify-content-center">
                                                <div class="col-sm-6">
                                                    <form class="gaping" action="#" method="post">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Total Area (square feet)" required />
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="step well">
                <!-- fieldsets -->
                <fieldset>
                    <div class="row justify-content-center">
                        <div class="col-sm-12 text-center">
                            <div class="heading">
                                <h2>Services Required</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="select_buttons">
                                <div class="select">
                                    <input type="checkbox" id="item_12" />
                                    <label class="btn btn-warning button_select" for="item_12">
                                        <div class="icon">
                                            <img class="img-fluid" src="images/plan.png" alt="" />
                                        </div>
                                        <h3>Design, Plan & Architecture</h3>
                                    </label>
                                </div>

                                <div class="select">
                                    <input type="checkbox" id="item_13" />
                                    <label class="btn btn-warning button_select" for="item_13">
                                        <div class="icon">
                                            <img class="img-fluid" src="images/workspace.png" alt="" />
                                        </div>
                                        <h3>Interior works</h3>
                                    </label>
                                </div>

                                <div class="select">
                                    <input type="checkbox" id="item_14" />
                                    <label class="btn btn-warning button_select" for="item_14">
                                        <div class="icon">
                                            <img class="img-fluid" src="images/lighting.png" alt="" />
                                        </div>
                                        <h3>Electrical and Lighting work</h3>
                                    </label>
                                </div>

                                <div class="select">
                                    <input type="checkbox" id="item_15" />
                                    <label class="btn btn-warning button_select" for="item_15">
                                        <div class="icon">
                                            <img class="img-fluid" src="images/plumbing.png" alt="" />
                                        </div>
                                        <h3>Plumbing Work</h3>
                                    </label>
                                </div>
                                <div class="select">
                                    <input type="checkbox" id="item_16" />
                                    <label class="btn btn-warning button_select" for="item_16">
                                        <div class="icon">
                                            <img class="img-fluid" src="images/sketch.png" alt="" />
                                        </div>
                                        <h3>Structural</h3>
                                    </label>
                                </div>

                                <div class="select">
                                    <input type="checkbox" id="item_17" />
                                    <label class="btn btn-warning button_select" for="item_17">
                                        <div class="icon">
                                            <img class="img-fluid" src="images/mop.png" alt="" />
                                        </div>
                                        <h3>Flooring Work</h3>
                                    </label>
                                </div>

                                <div class="select">
                                    <input type="checkbox" id="item_18" />
                                    <label class="btn btn-warning button_select" for="item_18">
                                        <div class="icon">
                                            <img class="img-fluid" src="images/carpentry.png" alt="" />
                                        </div>
                                        <h3>Carpentry & Masonry</h3>
                                    </label>
                                </div>

                                <div class="select">
                                    <input type="checkbox" id="item_19" />
                                    <label class="btn btn-warning button_select" for="item_19">
                                        <div class="icon">
                                            <img class="img-fluid" src="images/painting.png" alt="" />
                                        </div>
                                        <h3>Painting Work</h3>
                                    </label>
                                </div>
                            </ul>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="step well">
                <!-- fieldsets -->
                <fieldset>
                    <div class="row justify-content-center">
                        <div class="col-sm-12 text-center">
                            <div class="heading">
                                <h2>TELL US ABOUT YOUR BUDGET & LOCATION</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-8">
                            <form class="gaping" action="#" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Budget (in lakh)" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Pin Code" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group redio_checkbox">
                                    <h3>Major Cities</h3>
                                    <div class="redioItemRow">
                                        <div class="redio_item">
                                            <input type="radio" id="Delhi" checked name="radio" />
                                            <label for="Delhi"><img src="images/delhi.jpg" alt="" />Delhi</label>
                                        </div>
                                        <div class="redio_item">
                                            <input type="radio" id="Bangalore" name="radio" />
                                            <label for="Bangalore"><img src="images/banglore.jpg" alt="" />Bangalore</label>
                                        </div>
                                        <div class="redio_item">
                                            <input type="radio" id="Pune" checked name="radio" />
                                            <label for="Pune"><img src="images/pune.jpg" alt="" />Pune</label>
                                        </div>
                                        <div class="redio_item">
                                            <input type="radio" id="Hyderabad" checked name="radio" />
                                            <label for="Hyderabad"><img src="images/hyderabad.jpg" alt="" />Hyderabad</label>
                                        </div>
                                        <div class="redio_item">
                                            <input type="radio" id="Thane" checked name="radio" />
                                            <label for="Thane"><img src="images/thane.jpg" alt="" />Thane</label>
                                        </div>
                                        <div class="redio_item">
                                            <input type="radio" id="Gurgaon" checked name="radio" />
                                            <label for="Gurgaon"><img src="images/gurgaon.png" alt="" />Gurgaon</label>
                                        </div>
                                        <div class="redio_item">
                                            <input type="radio" id="Ghaziabad" checked name="radio" />
                                            <label for="Ghaziabad"><img src="images/gaziabad.jpg" alt="" />Ghaziabad</label>
                                        </div>
                                        <div class="redio_item">
                                            <input type="radio" id="Lucknow" checked name="radio" />
                                            <label for="Lucknow"><img src="images/lkw.webp" alt="" />Lucknow</label>
                                        </div>
                                        <div class="redio_item">
                                            <input type="radio" id="Faridabad" checked name="radio" />
                                            <label for="Faridabad"><img src="images/faridabad.jpg" alt="" />Faridabad</label>
                                        </div>
                                        <div class="redio_item">
                                            <input type="radio" id="Mumbai" name="radio" />
                                            <label for="Mumbai"><img src="images/mumbai.jpg" alt="" />Mumbai</label>
                                        </div>
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
                    <div class="row justify-content-center">
                        <div class="col-sm-12 text-center">
                            <div class="heading">
                                <h2>TALK TO OUR INTERIFY EXPERTs (FREE OF COST)</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <h3 class="heading_b">Book your slot</h3>
                            <form class="gaping" action="#" method="post">
                                <div class="form-group">
                                    <input type="Date" class="form-control" placeholder=" Select Date" required />
                                </div>
                                <div class="form-group">
                                    <input type="Time" class="form-control" placeholder=" Select Time" required />
                                </div>
                            </form>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="buttonsGroups">
                <button class="action back btn btn-primary">Back</button>
                <button class="action next btn btn btn-success">Next</button>
                <button class="action submit btn btn-success">Find Partner</button>
            </div>
        </div>

        <!-- /.MultiStep Form -->
    </div>
</section>


@include('include.footer')
