@include('include.header')


<style>
    .profile-nav, .profile-info{
    margin-top:30px;
}

.profile-nav .user-heading {
    background: #fbc02d;
    color: #fff;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    padding: 48px 30px 48px 30px;
    text-align: center;
}

.profile-nav .user-heading.round a  {
    border-radius: 50%;
    -webkit-border-radius: 50%;
    border: 10px solid rgba(255,255,255,0.3);
    display: inline-block;
}

.profile-nav .user-heading a img {
    width: 112px;
    height: 112px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.profile-nav .user-heading h1 {

    font-weight: 300;
    margin-bottom: 5px;
}

.profile-nav .user-heading p {

}

.profile-nav ul {
    margin-top: 1px;
}
button.btn.btn-link.s {
    font-size: 20px;
}
.card-body.s {
    font-size: 16px;
    background: #f7e96757;
    border-radius: 10px;
    padding: 20px;
}
.card.s {
    margin: 0px 0px 15px 18px;
}
.card-header.s {
    padding: 5px;
    background: #ffbd59;
}
button.btn.btn-link.s {
    font-size: 17px;
    color: white;
    font-weight: 700;
}
.container.bootstrap.snippets.bootdey {
    padding: 60px 0px;
}
</style>


<div class="container bootstrap snippets bootdey">
    <div class="row">
      <div class="profile-nav col-md-3">
          <div class="panel">
              <div class="user-heading round">
                  <a href="#">
                      <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                  </a>
                  <h3>Camila Smith</h3>
                  <p>deydey@theEmail.com</p>
              </div>





          </div>
      </div>
      <div class="profile-info col-md-9">
        <div class="panel">
        <div class="row">
            <div class="card s">
                <div class="card-header s" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link s" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Profile
                        </button>
                    </h5>
                </div>
                <!-- Content for Home goes here -->
            </div>

            <!-- About Section -->
            <div class="card s">
                <div class="card-header s" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed s" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Booking Slot
                                                    </button>
                    </h5>
                </div>
                <!-- Content for About goes here -->
            </div>
            <div class="card s">
                <div class="card-header s" id="headingTwo3">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed s" onclick="window.location='{{ url('logout') }}'" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                            Log out
                                                    </button>

                    </h5>
                </div>
                <!-- Content for About goes here -->
            </div>
        </div>
        </div>



          <div class="accordion-menu" id="accordionMenu">
            <div class="accordion">
                <!-- Content for Home and About is displayed here -->
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionMenu">
                    <div class="card-body s ">
                        <div class="panel">

                            <div class="panel-body bio-graph-info">
                                <h2>Profile</h2>
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="bio-row">
                                        <p><span>First Name </span>: Camila</p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Last Name </span>: Smith</p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Country </span>: Australia</p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Birthday</span>: 13 July 1983</p>
                                    </div>
                                  </div>
                                    <div class="col-lg-6">
                                      <div class="bio-row">
                                          <p><span>Occupation </span>: UI Designer</p>
                                      </div>
                                      <div class="bio-row">
                                          <p><span>Email </span>: jsmith@flatlab.com</p>
                                      </div>
                                      <div class="bio-row">
                                          <p><span>Mobile </span>: (12) 03 4567890</p>
                                      </div>
                                      <div class="bio-row">
                                          <p><span>Phone </span>: 88 (02) 123456</p>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionMenu">
                    <div class="card-body s">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    </div>


@include('include.footer')
