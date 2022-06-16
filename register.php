<?php
// include 'registerController.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Landing Page by Code4education</title>

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="images/favicon.png" />

    <!-- Bootstrap 5 CDN Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

</head>
<?php 
include 'toastrlink.php';
include 'conn.php';
if(isset($_POST['submit']))
{
    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
    $lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $country =isset($_POST['country']);
    $state =isset($_POST['state']);
    $city =isset($_POST['city']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    $technology = mysqli_real_escape_string($conn,$_POST['technology']);
    $pin = mysqli_real_escape_string($conn,$_POST['pin']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);
    // $msg = mysqli_real_escape_string($conn,$_POST['msg']);
    $pass = password_hash($password,PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword,PASSWORD_BCRYPT);
    $emailquery = "SELECT * from coreproject where email = '$email'";
    $query = mysqli_query($conn,$emailquery);
    $emailcount = mysqli_num_rows($query);
    if($emailcount>0)
    {
        echo "email all ready exits";
    }else{
        if($password === $cpassword)
        {
            $insert = "INSERT INTO coreproject(fname,lname,mobile,email,country,state,city,pin,address,technology,password,cpassword) VALUES('$fname','$lname','$mobile','$email','$country','$state','$city','$pin','$address','$technology','$pass','$cpass')";
            $iquery = mysqli_query($conn,$insert);
           if($iquery)
           {
               ?>
               <script>
                   alert('data inset successfullly');
                   window.location.replace('login.php');
               </script>
               <?php
           }else
           {
            ?>
            <script>
                alert('data not inset successfullly');
            </script>
            <?php
           }
        }else
        {
            echo "password are not matching";
        }
    }
}


?>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="75">
    <section id="register" class="register_wrapper">
        <div class="container justify-content-center">
        <h3 class="text-center text-danger fs-2">Register <span class="text-warning">Now</span> </h3>
        <div class="row ">
			<div class="col-sm-7">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
				<div class="row bg-info bg-opacity-25 p-4">
					<div class="col-sm-6">
						<label for="address">First Name</label>
					<div class="input-group mb-3">
				  <span class="input-group-text text-danger" id="basic-addon1"><i class="fa fa-user"></i></span>
				  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="fname" name="fname">
				</div>
					</div>
					<div class="col-sm-6">
						<label for="address">Last Name</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="lname" name="lname">
				</div>
					</div>
					<div class="col-sm-6">
						<label for="address">Email Id</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="email" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="email" name="email">
				</div>
					</div>
					<div class="col-sm-6">
						<label for="address">Moible NO</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="number" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="mobile" name="mobile">
				</div>
					</div>
					<div class="col-sm-6">
						<label for="address">Password</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="password" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="password" name="password">
				</div>
                <label for="address">Technology</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="password" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="technology" name="technology">
				</div>
					</div>
					<div class="col-sm-6">
						<label for="address">Comfirm Password</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="number" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="cpassword" name="cpassword">
				</div>
                <label for="address">Pin</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="number" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="pin" name="pin">
				</div>
					</div>
					<div class="col-sm-6">
						<label for="address">Address</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="address" name="address">
				</div>
					</div>
					<div class="col-sm-6">
						<label for="address">Country</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <select name="" id="country" name="country" class="form-control" required>
				  	<option value="" selected hidden>--Select Option--</option>
				  	<option value="ind">India</option>
				  	<option value="pk">Pakistan</option>
				  	<option value="au">America</option>
				  </select>
				</div>
					</div>
					<div class="col-sm-6">
						<label for="address">State</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <select name="" id="state" name="state" class="form-control">
				  	<option value="">--Select Option--</option>
				  	<option value="1">Uttar Pradesh</option>
				  	<option value="1">Madhy Pradesh</option>
				  	<option value="1">Rajsthan</option>
				  </select>
				</div>
					</div>
					<div class="col-sm-6">
						<label for="address">City</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <select name="" id="city" name="city" class="form-control">
				  	<option value="">--Select Option--</option>
				  	<option value="1">Ballia</option>
				  	<option value="1">Lucknow</option>
				  	<option value="1">Rajsthan</option>
				  </select>
				</div>
					</div>
					<div class="col-sm-12">
						<label for="address">Message</label>
					<div class="input-group mb-3">
				  <textarea name="" id="msg" name="msg" class="form-control" cols="3" rows="0"></textarea>
				</div>
				<!-- <button type="submit" id="save_data" class="float-center btn btn-warning text-center text-danger fw-bold rounded">Register</button> -->
				<input type="submit" name="submit" class="float-center btn btn-warning text-center text-danger fw-bold rounded" value="Register">
					</div>

				</div>
            </form>
			</div>
		</div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>