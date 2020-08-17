<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login - Job Hunter BD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="css/login.css" rel="stylesheet">
</head>
<body>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,700');

html,body{
  height: 100%;
  width: 100%;
  font-family: 'Poppins', sans-serif;
  color: #222;
}

body
{
  background: #E6E6FA;
}


.wrn-btn{
  width: 100%;
  font-size: 16px;
  font-weight: 400;
  text-transform: capitalize;
  height: calc(38px) !important;
  border-radius:0;
}

.container-fluid{
  position: relative;
  text-align: center;
  color: white;
  padding-bottom: 50px;

}
.text1{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}


form { margin: 0px 10px; }

h2 {
  margin-top: 2px;
  margin-bottom: 2px;
}

.container { max-width: 360px; }
.divider {
  text-align: center;
  margin-top: 20px;
  margin-bottom: 5px;
}

.divider hr {
  margin: 7px 0px;
  width: 35%;
}

.left { float: left; }

.right { float: right; }

</style>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-md navbar-light bg-orange sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.html"><img src="images/logo.png" height="100" width="100"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#NavbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="NavbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>

					</li>
					<li class="nav-item">
						<a class="nav-link" href="browse.php">Browse Jobs</a>

					</li>
					<li class="nav-item">
						<a class="nav-link" href="cand.php">Canditates</a>

					</li>
					<li class="nav-item">
						<a class="nav-link" href="about_us.php">About Us</a>

					</li>

					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact</a>

					</li>
					<li class="nav-item">
						<a role="button" class="btn btn-success wrn-btn" href="login.php">Sign In</a>
					</li>
					<li class="nav-item">
						<a role="button" class="btn btn-primary wrn-btn" href="reg.php">Sign Up</a>
					</li>

				</ul>

			</div>	


		</div>
	</nav>

	<!--- Welcome Details-->
	<div class="container-fluid">
		<img src="images/welcome.jpg" width="100%">
		<div class="text1">
			<h1>Sign In</h1>
			<a href="index.html" class="text2"  role="text">Home</a><a type="text"> > Sign In</a>
		</div>
    </div>


	<!--- login Form -->
	
	
	
<?php
include 'database.php';


if(isset($_POST['submit'])){
	$email =  $_POST['email'];
	$password = $_POST['password'];
	
	$emails = " SELECT * FROM registration where email='$email' ";
	$query = mysqli_query($con, $emails);
	
	
	$email_count = mysqli_num_rows($query);

	if($email_count){
		$email_pss = mysqli_fetch_assoc($query);
		
		$db_pass = $email_pss['password'];
		
		$pasd = password_verify($password, $db_pass);
		if($db_pass){
			echo "succescful ";
			
		}else
		{
			echo "incorrect pass";
		}
			?>
			<script>
				location.replace("index.php");
			</script>
			<?php 
		
		}else{
			echo "invalid email";
	}
}
?>
	
	 <div class="container">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form action = "index.php" method="POST">
						<div class="form-group">
							<h2>Sign in</h2>
						</div>
						<div class="form-group">
							<strong>Email or mobile phone number</strong>
							<input id="signinEmail" type="email" name="email" maxlength="50" class="form-control">
						</div>
						<div class="form-group">
							<strong>Password</strong>
							<span class="right"><a href="#">Forgot your password?</a></span>
							<input id="signinPassword" type="password" name="password" maxlength="25" class="form-control">
						</div>
						<div class="form-group" style="padding-top: 12px;">
							<button id="signinSubmit" type="submit" name="submit" class="btn btn-success btn-block">Login now</button>
						</div>
						<div class="form-group divider">
							<hr class="left"><small>New to site?</small><hr class="right">
						</div>
						<p class="form-group"><a href="#" class="btn btn-info btn-block">Create an account</a></p>
						<p class="form-group">By signing in you are agreeing to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<!--- Footer -->

</body>
</html>