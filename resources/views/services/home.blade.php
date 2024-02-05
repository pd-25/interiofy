@include('include.header')

<section class="stepform_Sec">
    <div class="container">
        <!-- MultiStep Form -->

        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="stepform">
            {{-- <div class="step well form-step-bg">
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
                            <div class="form-group">
                                <input type="text" name="" class="form-control mobile_no" placeholder="Enter Email/Mobile Number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" onkeyup="return New_user_registration_otp_generate()" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="otp" class="form-control" placeholder="OTP" id="otpnumber"/>
                            </div>
                        </div>
                        <div class="buttonsGroups button-bg">
                            <button class="btn btn-success" onclick="return User_otp_verification()">Next</button>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="step well form-step-bg">
                <fieldset>
                    <div class="form-area step-login-form">
                        <div class="form-inner">
                            <div class="form-group">
                                <input type="text" name="" class="form-control" placeholder="Enter Name" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="" class="form-control" placeholder="Enter Email" />
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div> --}}
            <div class="step well">
                <!-- fieldsets -->
                <fieldset>
                    <div class="row justify-content-center">
                        <div class="col-sm-12 text-center">
                            <div class="heading">
                                <h2>give us your Home requirements</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="wrapper1">
                                <div class="main_tab">
                                    <div class="tab-wrapper">
                                        <ul class="tabs">
                                            <li class="tab-link active new_tab" data-tab="1">Home</li>
                                            <li class="tab-link" data-tab="2">Renovation</li>
                                        </ul>
                                    </div>

                                    <div class="content-wrapper">
                                        <div id="tab-1" class="tab-content active">
                                            <ul class="select_buttons">
                                                <div class="select">
                                                    <input type="checkbox" class="home_requirements" name="home_requirements" id="item_3" value="Complete home solution"/>
                                                    <label class="btn btn-warning button_select" for="item_3">
                                                        <div class="icon">
                                                            <img class="img-fluid" src="images/smarthome.png" alt="" />
                                                        </div>
                                                        <h3>Complete home solution</h3>
                                                    </label>
                                                </div>

                                                <div class="select">
                                                    <input type="checkbox" class="home_requirements" name="home_requirements" id="item_5" value="Living Room"/>
                                                    <label class="btn btn-warning button_select" for="item_5">
                                                        <div class="icon">
                                                            <img class="img-fluid" src="images/living-room.png" alt="" />
                                                        </div>
                                                        <h3>Living Room</h3>
                                                    </label>
                                                </div>

                                                <div class="select">
                                                    <input type="checkbox" class="home_requirements" name="home_requirements" id="item_6" value="Kitchen"/>
                                                    <label class="btn btn-warning button_select" for="item_6">
                                                        <div class="icon">
                                                            <img class="img-fluid" src="images/kitchen.png" alt="" />
                                                        </div>
                                                        <h3>Kitchen</h3>
                                                    </label>
                                                </div>

                                                <div class="select">
                                                    <input type="checkbox" class="home_requirements" name="home_requirements" id="item_8" value="Terrace Balcony"/>
                                                    <label class="btn btn-warning button_select" for="item_8">
                                                        <div class="icon">
                                                            <img class="img-fluid" src="images/balcony.png" alt="" />
                                                        </div>
                                                        <h3>Terrace/Balcony</h3>
                                                    </label>
                                                </div>

                                                <div class="select">
                                                    <input type="checkbox" class="home_requirements" name="home_requirements" id="item_9" value="Dining room"/>
                                                    <label class="btn btn-warning button_select" for="item_9">
                                                        <div class="icon">
                                                            <img class="img-fluid" src="images/dining-table.png" alt="" />
                                                        </div>
                                                        <h3>Dining room</h3>
                                                    </label>
                                                </div>

                                                <div class="select">
                                                    <input type="checkbox" class="home_requirements" name="home_requirements" id="item_10" value="Kids room"/>
                                                    <label class="btn btn-warning button_select" for="item_10">
                                                        <div class="icon">
                                                            <img class="img-fluid" src="images/play.png" alt="" />
                                                        </div>
                                                        <h3>Kids room</h3>
                                                    </label>
                                                </div>

                                                <div class="select">
                                                    <input type="checkbox" class="home_requirements" name="home_requirements" id="item_11" value="Pooja Room"/>
                                                    <label class="btn btn-warning button_select" for="item_11">
                                                        <div class="icon">
                                                            <img class="img-fluid" src="images/temple.png" alt="" />
                                                        </div>
                                                        <h3>Pooja Room</h3>
                                                    </label>
                                                </div>
                                            </ul>
                                        </div>

                                        <div id="tab-2" class="tab-content">
                                            <ul class="select_buttons">
                                                <div class="select">
                                                    <input type="checkbox" class="home_requirements" name="home_requirements" id="item_4" value="Bedroom"/>
                                                    <label class="btn btn-warning button_select" for="item_4">
                                                        <div class="icon">
                                                            <img class="img-fluid" src="images/bedroom.png" alt="" />
                                                        </div>
                                                        <h3>Bedroom</h3>
                                                    </label>
                                                </div>
                                                <div class="select">
                                                    <input type="checkbox" class="home_requirements" name="home_requirements" id="item_5" value="Living Room"/>
                                                    <label class="btn btn-warning button_select" for="item_5">
                                                        <div class="icon">
                                                            <img class="img-fluid" src="images/living-room.png" alt="" />
                                                        </div>
                                                        <h3>Living Room</h3>
                                                    </label>
                                                </div>
                                                <div class="select">
                                                    <input type="checkbox" class="home_requirements" name="home_requirements" id="item_7" value="Bathroom"/>
                                                    <label class="btn btn-warning button_select" for="item_7">
                                                        <div class="icon">
                                                            <img class="img-fluid" src="images/bathroom.png" alt="" />
                                                        </div>
                                                        <h3>Bathroom</h3>
                                                    </label>
                                                </div>

                                                <div class="select">
                                                    <input type="checkbox" class="home_requirements" name="home_requirements" id="item_9" value="Design and plan"/>
                                                    <label class="btn btn-warning button_select" for="item_9">
                                                        <div class="icon">
                                                            <img class="img-fluid" src="images/model.png" alt="" />
                                                        </div>
                                                        <h3>Design and plan</h3>
                                                    </label>
                                                </div>

                                                <div class="select">
                                                    <input type="checkbox" class="home_requirements" name="home_requirements" id="item_10" value="Kids room"/>
                                                    <label class="btn btn-warning button_select" for="item_10">
                                                        <div class="icon">
                                                            <img class="img-fluid" src="images/play.png" alt="" />
                                                        </div>
                                                        <h3>Kids room</h3>
                                                    </label>
                                                </div>

                                                <div class="select">
                                                    <input type="checkbox" class="home_requirements" name="home_requirements" id="item_11" value="Dining room"/>
                                                    <label class="btn btn-warning button_select" for="item_11">
                                                        <div class="icon">
                                                            <img class="img-fluid" src="images/dining-table.png" alt="" />
                                                        </div>
                                                        <h3>Dining room</h3>
                                                    </label>
                                                </div>
                                            </ul>
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
                                    <input type="checkbox" class="services_required" name="services_required[]" id="item_12" value="Design, Plan & Architecture"/>
                                    <label class="btn btn-warning button_select" for="item_12">
                                        <div class="icon">
                                            <img class="img-fluid" src="images/plan.png" alt="" />
                                        </div>
                                        <h3>Design, Plan & Architecture</h3>
                                    </label>
                                </div>

                                <div class="select">
                                    <input type="checkbox" class="services_required" name="services_required[]" id="item_13" value="Interior works"/>
                                    <label class="btn btn-warning button_select" for="item_13">
                                        <div class="icon">
                                            <img class="img-fluid" src="images/workspace.png" alt="" />
                                        </div>
                                        <h3>Interior works</h3>
                                    </label>
                                </div>

                                <div class="select">
                                    <input type="checkbox" class="services_required" name="services_required[]" id="item_14" value="Electrical and Lighting work"/>
                                    <label class="btn btn-warning button_select" for="item_14">
                                        <div class="icon">
                                            <img class="img-fluid" src="images/lighting.png" alt="" />
                                        </div>
                                        <h3>Electrical and Lighting work</h3>
                                    </label>
                                </div>

                                <div class="select">
                                    <input type="checkbox" class="services_required" name="services_required[]" id="item_15" value="Plumbing Work"/>
                                    <label class="btn btn-warning button_select" for="item_15">
                                        <div class="icon">
                                            <img class="img-fluid" src="images/plumbing.png" alt="" />
                                        </div>
                                        <h3>Plumbing Work</h3>
                                    </label>
                                </div>
                                <div class="select">
                                    <input type="checkbox" class="services_required" name="services_required[]" id="item_16" value="Structural"/>
                                    <label class="btn btn-warning button_select" for="item_16">
                                        <div class="icon">
                                            <img class="img-fluid" src="images/sketch.png" alt="" />
                                        </div>
                                        <h3>Structural</h3>
                                    </label>
                                </div>

                                <div class="select">
                                    <input type="checkbox" class="services_required" name="services_required[]" id="item_17" value="Flooring Work"/>
                                    <label class="btn btn-warning button_select" for="item_17">
                                        <div class="icon">
                                            <img class="img-fluid" src="images/mop.png" alt="" />
                                        </div>
                                        <h3>Flooring Work</h3>
                                    </label>
                                </div>

                                <div class="select">
                                    <input type="checkbox" class="services_required" name="services_required[]" id="item_18" value="Carpentry & Masonry"/>
                                    <label class="btn btn-warning button_select" for="item_18">
                                        <div class="icon">
                                            <img class="img-fluid" src="images/carpentry.png" alt="" />
                                        </div>
                                        <h3>Carpentry & Masonry</h3>
                                    </label>
                                </div>

                                <div class="select">
                                    <input type="checkbox" class="services_required" name="services_required[]" id="item_19" value="Painting Work"/>
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
                                <div class="form-group">
                                    <input type="text" class="form-control budget" name="budget" id="budget" placeholder="Budget (in lakh)" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control pincode" name="pincode" id="pincode" placeholder="Pin Code" required />
                                </div>
                                <div class="form-group redio_checkbox">
                                    <h3>Major Cities</h3>
                                    <div class="redioItemRow">
                                        <div class="redio_item">
                                            <input type="radio" class="city" id="Delhi" name="city" value="Delhi" />
                                            <label for="Delhi"><img src="images/delhi.jpg" alt="" />Delhi</label>
                                        </div>
                                        <div class="redio_item">
                                            <input type="radio" class="city" id="Bangalore" name="city" value="Bangalore" />
                                            <label for="Bangalore"><img src="images/banglore.jpg" alt="" />Bangalore</label>
                                        </div>
                                        <div class="redio_item">
                                            <input type="radio" class="city" id="Pune" name="city" value="Pune" />
                                            <label for="Pune"><img src="images/pune.jpg" alt="" />Pune</label>
                                        </div>
                                        <div class="redio_item">
                                            <input type="radio" class="city" id="Hyderabad" name="city" value="Hyderabad" />
                                            <label for="Hyderabad"><img src="images/hyderabad.jpg" alt="" />Hyderabad</label>
                                        </div>
                                        <div class="redio_item">
                                            <input type="radio" class="city" id="Thane" name="city" value="Thane" />
                                            <label for="Thane"><img src="images/thane.jpg" alt="" />Thane</label>
                                        </div>
                                        <div class="redio_item">
                                            <input type="radio" class="city" id="Gurgaon" name="city" value="Gurgaon" />
                                            <label for="Gurgaon"><img src="images/gurgaon.png" alt="" />Gurgaon</label>
                                        </div>
                                        <div class="redio_item">
                                            <input type="radio" class="city" id="Ghaziabad" name="city" value="Ghaziabad" />
                                            <label for="Ghaziabad"><img src="images/gaziabad.jpg" alt="" />Ghaziabad</label>
                                        </div>
                                        <div class="redio_item">
                                            <input type="radio" class="city" id="Lucknow" name="city" value="Lucknow" />
                                            <label for="Lucknow"><img src="images/lkw.webp" alt="" />Lucknow</label>
                                        </div>
                                        <div class="redio_item">
                                            <input type="radio" class="city" id="Faridabad" name="city" value="Faridabad" />
                                            <label for="Faridabad"><img src="images/faridabad.jpg" alt="" />Faridabad</label>
                                        </div>
                                        <div class="redio_item">
                                            <input type="radio" class="city" id="Mumbai" name="city" value="Mumbai" />
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
                                    <input type="Date" class="form-control bookingdate" name="bookingdate" placeholder=" Select Date" required />
                                </div>
                                <div class="form-group">
                                    <input type="Time" class="form-control booking_time" name="booking_time" placeholder=" Select Time" required />
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
                    <style>
                        .selected {
                            background-color: #ffa200 !important;
                            /* Change this to the desired selected color */
                        }

                        .rati {
                            color: white !important;
                        }

                        .box {
                            background: linear-gradient(180deg, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 60%, rgb(255 162 0) 48%);
                            padding: 40px 28px;
                            border-radius: 10px;
                            margin: 10px 0px;
                        }

                        .imbox {
                            width: 106px;
                            height: 106px;
                            border-radius: 50%;
                            position: absolute;
                            margin-left: 25px;
                            margin-top: -15px;
                            border: dotted 1px #ffa200;
                        }

                        .testi {
                            background: #000000;
                            color: white;
                            padding: 20px;
                            border-radius: 27px;
                        }
                        .aast {
                            background: linear-gradient(324deg, rgb(255 162 0) 51%, rgba(255, 255, 255, 1) 50%, #000000 50%);
                            padding: 24px;
                            width: 23px;
                            position: absolute;
                            margin-top: -11px;
                            margin-left: 47px;
                            rotate: 13deg;
                        }
                        button.sert {
                            background: white;
                            border: none;
                            font-size: 15px;
                            margin: 10px 0px 0 0px;
                            border-radius: 17px;
                            padding: 3px 30px;
                        }
                        .sert:hover {
                            background: black;
                            /* You can adjust the width and style as needed */
                            color: white;
                            border: solid 1px gray;
                        }
                        .white-p {
                            color: white;
                        }
                    </style>

                    <div class="row justify-content-center">
                        <div class="col-sm-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="box">
                                            <div class="row">
                                                <div class="col-6" style="padding: 45px 10px;">
                                                    <img class="imbox" src="https://static.vecteezy.com/system/resources/previews/002/002/257/non_2x/beautiful-woman-avatar-character-icon-free-vector.jpg" alt="User 1" class="user-image" />
                                                </div>
                                                <div class="col-6" style="padding: 26px 10px;">
                                                    <h3 style="font-weight: 800;">Our Partner</h3>
                                                    <h5>About Us</h5>
                                                </div>
                                            </div>

                                            <div class="testi">
                                                <div class="row">
                                                    <div class="col-6"></div>
                                                    <div class="col-6">
                                                        <!-- <h5>Comments</h5> -->
                                                        <h5 class="white-p">Rating: 4.0/5.0</h5>
                                                        <div class="rating">
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="white-p">"Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator."</p>
                                            </div>
                                            <!-- <div class="aast "></div> -->
                                            <div class="col text-center"><button class="sert">Select Now</button></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-12">
                                        <div class="box">
                                            <div class="row">
                                                <div class="col-6" style="padding: 45px 10px;">
                                                    <img class="imbox" src="https://static.vecteezy.com/system/resources/previews/002/002/257/non_2x/beautiful-woman-avatar-character-icon-free-vector.jpg" alt="User 1" class="user-image" />
                                                </div>
                                                <div class="col-6" style="padding: 26px 10px;">
                                                    <h3 style="font-weight: 800;">Our Partner</h3>
                                                    <h5>About Us</h5>
                                                </div>
                                            </div>

                                            <div class="testi">
                                                <div class="row">
                                                    <div class="col-6"></div>
                                                    <div class="col-6">
                                                        <!-- <h5>Comments</h5> -->
                                                        <h5 class="white-p">Rating: 4.0/5.0</h5>
                                                        <div class="rating">
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="white-p">"Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator."</p>
                                            </div>
                                            <!-- <div class="aast "></div> -->
                                            <div class="col text-center"><button class="sert">Select Now</button></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="box">
                                            <div class="row">
                                                <div class="col-6" style="padding: 45px 10px;">
                                                    <img class="imbox" src="https://static.vecteezy.com/system/resources/previews/002/002/257/non_2x/beautiful-woman-avatar-character-icon-free-vector.jpg" alt="User 1" class="user-image" />
                                                </div>
                                                <div class="col-6" style="padding: 26px 10px;">
                                                    <h3 style="font-weight: 800;">Our Partner</h3>
                                                    <h5>About Us</h5>
                                                </div>
                                            </div>

                                            <div class="testi">
                                                <div class="row">
                                                    <div class="col-6"></div>
                                                    <div class="col-6">
                                                        <!-- <h5>Comments</h5> -->
                                                        <h5 class="white-p">Rating: 4.0/5.0</h5>
                                                        <div class="rating">
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="white-p">"Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator."</p>
                                            </div>
                                            <!-- <div class="aast "></div> -->
                                            <div class="col text-center"><button class="sert">Select Now</button></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="box">
                                            <div class="row">
                                                <div class="col-6" style="padding: 45px 10px;">
                                                    <img class="imbox" src="https://static.vecteezy.com/system/resources/previews/002/002/257/non_2x/beautiful-woman-avatar-character-icon-free-vector.jpg" alt="User 1" class="user-image" />
                                                </div>
                                                <div class="col-6" style="padding: 26px 10px;">
                                                    <h3 style="font-weight: 800;">Our Partner</h3>
                                                    <h5>About Us</h5>
                                                </div>
                                            </div>

                                            <div class="testi">
                                                <div class="row">
                                                    <div class="col-6"></div>
                                                    <div class="col-6">
                                                        <!-- <h5>Comments</h5> -->
                                                        <h5 class="white-p">Rating: 4.0/5.0</h5>
                                                        <div class="rating">
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="white-p">"Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator."</p>
                                            </div>
                                            <!-- <div class="aast "></div> -->
                                            <div class="col text-center"><button class="sert">Select Now</button></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="box">
                                            <div class="row">
                                                <div class="col-6" style="padding: 45px 10px;">
                                                    <img class="imbox" src="https://static.vecteezy.com/system/resources/previews/002/002/257/non_2x/beautiful-woman-avatar-character-icon-free-vector.jpg" alt="User 1" class="user-image" />
                                                </div>
                                                <div class="col-6" style="padding: 26px 10px;">
                                                    <h3 style="font-weight: 800;">Our Partner</h3>
                                                    <h5>About Us</h5>
                                                </div>
                                            </div>

                                            <div class="testi">
                                                <div class="row">
                                                    <div class="col-6"></div>
                                                    <div class="col-6">
                                                        <!-- <h5>Comments</h5> -->
                                                        <h5 class="white-p">Rating: 4.0/5.0</h5>
                                                        <div class="rating">
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="white-p">"Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator."</p>
                                            </div>
                                            <!-- <div class="aast "></div> -->
                                            <div class="col text-center"><button class="sert">Select Now</button></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="box">
                                            <div class="row">
                                                <div class="col-6" style="padding: 45px 10px;">
                                                    <img class="imbox" src="https://static.vecteezy.com/system/resources/previews/002/002/257/non_2x/beautiful-woman-avatar-character-icon-free-vector.jpg" alt="User 1" class="user-image" />
                                                </div>
                                                <div class="col-6" style="padding: 26px 10px;">
                                                    <h3 style="font-weight: 800;">Our Partner</h3>
                                                    <h5>About Us</h5>
                                                </div>
                                            </div>

                                            <div class="testi">
                                                <div class="row">
                                                    <div class="col-6"></div>
                                                    <div class="col-6">
                                                        <!-- <h5>Comments</h5> -->
                                                        <h5 class="white-p">Rating: 4.0/5.0</h5>
                                                        <div class="rating">
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                            <span class="text-warning">&#9733;</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="white-p">"Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator."</p>
                                            </div>
                                            <!-- <div class="aast "></div> -->
                                            <div class="col text-center"><button class="sert">Select Now</button></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="buttonsGroups button-bg">
                <button class="action back btn btn-primary">Back</button>
                <button class="action next btn btn btn-success">Next</button>
                {{-- <button class="action submit btn btn-success">Find Partner</button> --}}
                <button class="action submit btn btn-success" onclick="return SubmitHomeForm()">Find More Partner</button>
            </div>
        </div>
        <!-- /.MultiStep Form -->
    </div>
</section>

@push('scripts')
<script>
    function SubmitHomeForm(){


        var idsArr = [];

        $('.home_requirements').find('input[type=checkbox]:checked').each(function() {
            idsArr .push(this.value);
        });

        alert(idsArr); return false;

    }


    function New_user_registration_otp_generate() {
        if ($(".mobile_no").val().length == 10) {
            var mobile = $(".mobile_no").val();
            var form_data = new FormData();
            form_data.append("email_or_mobileno", mobile);
            form_data.append("_token", "{{ csrf_token() }}");
            $.ajax({
                url: "{{route('otp.generate')}}",
                type: "POST",
                cache: false,
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
                        },
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
                success: (response) => {},
                error: (response) => {
                    console.log(response);
                },
            });
        }
    }

    // function User_otp_verification(){
    // var otpnumber = $("#otpnumber").val();
    // if(otpnumber == ''){
    //     Swal.fire({
    //         icon: "error",
    //         title: "Oops...",
    //         text: "Please enter OTP",
    //         footer: ''
    //     });
    // }else{
    //     var mobileoremail = $(".mobile_no").val();
    //     var form_data  = new FormData();
    //         form_data.append('otpnumber', otpnumber);
    //         form_data.append('mobileoremail', mobileoremail);
    //         form_data.append('_token', '{{ csrf_token() }}');
    //         $.ajax({
    //             url: "{{route('otp.verification')}}",
    //             type: 'POST',
    //             cache : false,
    //             processData: false,
    //             contentType: false,
    //             data: form_data,
    //             success: (response) => {

    //                     if(response == "Invalid OTP"){
    //                         Swal.fire({
    //                             icon: "error",
    //                             title: "Oops...",
    //                             text: "OTP is incorrect.",
    //                             footer: ''
    //                         });
    //                     }else{

    //                     }
    //             },
    //             error: (response) => {
    //                     console.log(response);
    //             }
    //         });
    //     }
    // }
</script>
@endpush @include('include.footer')
