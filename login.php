<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="images/favicon.png" />

    <!-- Bootstrap 5 CDN Links -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
</head>
<body>
<?php
include 'conn.php';

if(isset($_POST['login'])){
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$emailsearch = "SELECT * FROM coreproject where email = '$email'";
    echo $emailsearch;
	$query = mysqli_query($conn,$emailsearch);

	$emailcount = mysqli_num_rows($query);
	if($emailcount)
	{
		$email_pass = mysqli_fetch_assoc($query);
		$db_pass = $email_pass['password'];
		$_SESSION['username'] = $email_pass['fname'];
		$pass_decode = password_verify($password,$db_pass);

		if($pass_decode){
			   // header("Location: http://localhost:786/task10/webpage1.php");
			?>
			<script>
				location.replace("admin.php");
				 toastr.info('User login..!');
			</script>
			<?php
		}else
		{
			echo "password incorrect";
		}
	}else
	{
		echo "invalid email id";
	}

}


?>


	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 bg-warning p-3"></div>
		</div>
		<div class="row">
			<h2 class="text-center text-danger fw-bold fs-1 mt-4">Login Form</h2>
			<div class="row">
			<div class="col-sm-12">
				<div class="row justify-content-center">
					<div class="col-sm-4">
						<!-- same page then we use -->
						<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
					<label for="address">Email Address</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="email" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="email" name="email" required>
					</div>
					<label for="address">Password</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="password" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="password" name="password" required>
					</div>
					<div>
						<button type="submit" value="Register" class="btn btn-warning md-3" name="login">Login</button>
					</div>
					</form>
					<a href="register1.php.php" class="mt-3">Register Page</a>
					</div>

				</div>
			</div>
		</div>
		</div>
	</div>
</body>
</html>
