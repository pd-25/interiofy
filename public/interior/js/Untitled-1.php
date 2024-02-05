<?php session_start(); ?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script>
    $(function () {
        $("form[name='signupForm']").validate({
            // Define validation rules
            rules: {
                fname: "required",
                lname: "required",
                phone: "required",
                email: "required",
                
                password: "required",
                message: "required",
                fname: {
                    required: true
                },
                phone: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                
                password: {
                    required: true
                },
                
                cpassword: {
	            	required: true,
	            	equalTo : "#password",
	         	}
            },
            // Specify validation error messages
            messages: {
                fname: "Please provide a valid name.",
                phone: "Please provide a valid phone number.",

                lname: "Please provide a last name.",
                email: {
                    required: "Please enter your email",
                    minlength: "Please enter a valid email address"
                },
                cpassword: {
			   		required : 'Confirm Password is required',
			   		equalTo : 'Password not matching',
			   	}
                
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    }); 
</script>
<?php  include('include/header.php'); ?>
<?php
echo $uri = $_SERVER['REQUEST_URI'];

 
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
 
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

 
$query = $_SERVER['QUERY_STRING'];
$namec=explode("=",$query);
$cat=$namec[0];



if (isset($_POST['submit'])) {
//$name = mysqli_real_escape_string($con, $_POST['fname']);
$name= $_POST['fname']. ' ' .$_POST['mname']. ' ' .$_POST['lname'];
$phone= $_POST['phone'];

$email = mysqli_real_escape_string($con, $_POST['email']);

$password = mysqli_real_escape_string($con, $_POST['password']);
$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']); 
if ($name) {
$name_error = "Name must contain only alphabets and space";
}
if ($phone) {
    $phone_error = "Phone Number is Invalid";
    }
if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
$email_error = "Please Enter Valid Email ID";
}
     

if($password != $cpassword) {
$cpassword_error = "Password and Confirm Password doesn't match";
}
if($password == $cpassword) {
if(mysqli_query($con, "INSERT INTO student(name,phone, email ,pass) VALUES('" . $name . "','" . $phone . "', '" . $email . "', '" . md5($password) . "')")) {


$to=$email;
										$subject='mfSahihai Registration';
									    $message='<div style="border:1px solid #ccc;">
										<p style="padding:5px">
										<img src="https://mfsahihai.com/new-site/img/general/mf-logo.png" style="width:100px" >
										</p>
										
										<div style="background:#fff; padding:10px;">
										<p style="text-align:left; font-size:24px;">Dear '.$name.',</p>
										
											<p>Your account has been successfully created. We welcome you to the community of mfSahihai</p>
                                            
                                            <p>Its our privilege to have you as our coustomer. We are pretty much sure that you will love the fact that how simple it is to get started with the services.
                                            We are dedicated to making your working life simple.
                                            </p>
											
										
										<p>&nbsp;</p><p>Best Regards</p>
										
										</div>
										</div>';
										
										$headers = "MIME-Version: 1.0" . "\r\n";
										$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
										
										// More headers
										$headers .= "From:<notreply@q2success.com>\r\n";
										
										
										$mail=mail($to,$subject,$message,$headers);
										
										if($mail)
										{
										    
										    
										    if($cat=="course_id")
    {
	echo "<script>window.location.href='https://mfsahihai.com/login.php?course_id=$namec[1]&success=You have successfully create an account and Please login to continue'</script>";
	
	
    }
    elseif($cat=="training_id")
    {
        echo "<script>window.location.href='https://mfsahihai.com/login.php?training_id=$namec[1]&success=You have successfully create an account and Please login to continue'</script>";
        
    }
    else
    {
        echo "<script>window.location.href='https://mfsahihai.com/login.php?success=You have successfully create an account'</script>";
        echo '<div class="alert alert-success" role="alert">You have successfully create an account and Please login to continue</div>';
    }
										 
										}


} else {
echo "Error: " . $sql . "" . mysqli_error($con);
}
}
mysqli_close($con);
}
if(isset($_POST['login'])){


$username = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['pass']);
$pass=md5($password);



$check= "select * from student where email='".$username."' and pass='".$pass."' ";
$sqlcheck= mysqli_query($con, $check);
$count= mysqli_num_rows($sqlcheck);
$fetch=mysqli_fetch_array($sqlcheck);

//echo $fetch['username'];




if($count > 0)

{
	$_SESSION['user_id']= $fetch['s_id'];	
	$_SESSION['user']= $fetch['email'];	
    $_SESSION['name']= $fetch['name'];
    
    if($cat=="course_id")
    {
	echo "<script>window.location.href='https://mfsahihai.com/courses-details.php?id=$namec[1]'</script>";
    }
    elseif($cat=="training_id")
    {
        echo "<script>window.location.href='https://mfsahihai.com/training-details.php?id=$namec[1]'</script>";
    }
    else
    {
        echo "<script>window.location.href='profile/dash-profile.php'</script>";
    }

} else{

echo "<script>window.location.href='login.php?logerror=Incorrect Email and Password. Try Again'</script>";

}

} ?>
    <div class="content-wrapper  js-content-wrapper">
	<br><br>
	
	<section class="layout-pt-md layout-pb-lg">
        <div class="form-page__content lg:py-50">
          <div class="container">
            <div class="row justify-center items-center">
              <div class="col-xl-12 col-lg-8">
                  <?php if(isset($_GET['logerror'])){ ?>
    <div class="alert alert-danger" role="alert">
  <?php echo $_GET['logerror']; ?>
    </div>
     <?php } ?>
     
     <?php if(isset($_GET['success'])){ ?>
    <div class="alert alert-success" role="alert">
  <?php echo $_GET['success']; ?>
    </div>
     <?php } ?>
     
         <?php if(isset($_GET['error'])){ ?>
    <div class="alert alert-danger" role="alert">
  <?php echo $_GET['error']; ?>
    </div>
     <?php } ?>
     
       <?php if(isset($_GET['passerror'])){ ?>
    <div class="alert alert-danger" role="alert">
  <?php echo $_GET['passerror']; ?>
    </div>
     <?php } ?>
                <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
                    
                    
                    <div class="tab">
  <button class="active tablinks " onclick="openCity('login')">Login</button>
  <button class="tablinks" onclick="openCity('sigunup')">Sign Up</button>
  
</div>

<div id="login" class="city tabcontent">
  <h3 class="text-30 lh-13">Login</h3>
                  <p class="mt-10">Don't have an account yet? <a href="signup.html" class="text-purple-1">Sign up for free</a></p>

                  <form class="contact-form respondForm__form row y-gap-20 pt-30" action="#" method="post">
                    <div class="col-12">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Username Or Email</label>
                      <input type="text" name="email" placeholder="Name">
                    </div>
                    <div class="col-12">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Password</label>
                      <input type="password" name="pass" placeholder="Password">
                    </div>
                    <div class="col-12">
                      <button type="submit" name="login" id="submit" class="button -md -green-1 text-dark-1 fw-500 w-1/1">
                        Login
                      </button>
                    </div>
                  </form>
</div>

<div id="sigunup" class="city tabcontent" style="display:none">
  <h3 class="text-30 lh-13">Sign Up</h3>
                  <p class="mt-10">Already have an account? <a href="login.php" class="text-purple-1">Log in</a></p>

                  <form name="signupForm" class="contact-form respondForm__form row y-gap-20 pt-30" action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
                    <div class="col-lg-4">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">First Name *</label>
                      <input type="text" name="fname" id="fname" placeholder="Name" required="">
                      <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>
                    <div class="col-lg-4">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Middle Name *</label>
                      <input type="text" name="mname" id="mname" placeholder="Middle Name">
                      
                    </div>
                    <div class="col-lg-4">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Last Name *</label>
                      <input type="text" name="lname" id="lname" placeholder="Last Name">
                      <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>
                    <div class="col-lg-6">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email Address *</label>
                      <input type="email" name="email" id="email" placeholder="Email" required="">
                      <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>
                    <div class="col-lg-6">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Phone Number *</label>
                    <input type="text" name="phone" id="phone" placeholder="Phone number" minlength="10" maxlength="10" required>
                      <span class="text-danger"><?php if (isset($phone_error)) echo $phone_error; ?></span>
                    </div>
                    <div class="col-lg-6">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Password *</label>
                      <input type="password" name="password" id="password" placeholder="Password">
                      <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>
                    <div class="col-lg-6">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Confirm Password *</label>
                      <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password">
                      <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                    </div>
                    <div class="col-12">
                      <button type="submit" name="submit" id="submit" class="button -md -green-1 text-dark-1 fw-500 w-1/1">
                        Register
                      </button>
                    </div>
                  </form> 
</div>


                  

              

                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script>
<style>
.active{display:block;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}
.span
		{
			margin-left: 40%;
			margin-top: 5%;
		}
		.error
		{
			color:red;
		}
/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;  display:block;
}

/* Style the tab content */

</style>
	 <?php  include('include/footer.php'); ?>