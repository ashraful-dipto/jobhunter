<?php

mysqli_connect{("localhost", "root" , "password");
mysqli_select_db{("searchh");
 
 if(isset($_POST['search'])) {
	 $searchq =$_POST['search'];
	 $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
	 
	 
	 $query = mysqli_query("SELECT * FROM job WHERE web devloper LIKE '%$searchq%' OR location LIKE '%$searchq%' OR Full time LIKE '%$searchq%'") or die("could not");
	 
	 $count = mysqli_num_rows($query);
	 if($count == 0){
		 $output+ "ther was no srewach";
		 
	 }else(
	 while($row = mysqli_fetch_array($query)){
		 
		 $web= $row['web devlopment'];
		 $loc= $row['location'];
		 $web= $row['id'];
		 
		 $output .= '<div>' .$web. ''.$loc.'</div>'; 
	 )
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Job Hunter BD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="css/style.css" rel="stylesheet">
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


.carousel{
  padding-bottom: 10px;
}
.carousel-inner img {
  width: 100%;
  height: 100%;
}

.carousel-caption{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}


.search-sec{
  padding: 10px;

}

.search-fix{
  padding-top: 150px;
}

.search-slt{
  display: block;
  width: 100%;
  font-size: 14px;
  line-height: 1.5;
  color: #55595c;
  background-color: #fff;
  background-image: none;
  border: 5px solid #ccc;
  height: calc(55px) !important;
  border-radius:0;
}





.arn-btn{
  width: 100%;
  font-size: 16px;
  font-weight: 400;
  text-transform: capitalize;
  height: calc(55px) !important;
  border-radius:0;
}


.cat{
  text-align: center;
  padding-top: 10px;
  padding-bottom: 20px;
}


.box{
  padding-bottom: 60px;
}


.row{
  padding-bottom: 40px;
}

.drn-btn{
  margin: 0;
  position: absolute;
 left: 50%;
 -ms-transform: translate(-50%,-50%);
 transform: translate(-50%,-50%);
}


.container-fluid{
  position: relative;
  text-align: center;
  color: white;

}
.text1{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}


h1
{
  color:#000000;
  margin:40px 0 60px 0;
  font-weight:300;
}

.text-center{
  color: black;
}

.latest-canditates
{
  width:100%;
  height:auto;
  border-bottom:5px #323233 solid;
  background:#fff;
  text-align:center;
  border-radius:10px;
  overflow:hidden;
  position:relative;
  transition:0.5s;
  margin-bottom:28px;
}


.latest-canditates img
{
  border-radius:50%;
  margin-bottom:20px;
  width: 90px;
}

.latest-canditates h3
{
  font-size:20px;
  font-weight:700;
}

.latest-canditates p
{
  margin-bottom:0;
}

.team-back
{
  width:100%;
  height:auto;
  position:absolute;
  top:0;
  left:0;
  padding:5px 15px 0 15px;
  text-align:left;
  background:#fff;
  
}

.team-front
{
  width:100%;
  height:auto;
  position:relative;
  z-index:10;
  background:#fff;
  padding:15px;
  bottom:0px;
  transition: all 0.5s ease;
}

.latest-canditates:hover .team-front
{
  bottom:-200px;
  transition: all 0.5s ease;
}

.latest-canditates:hover
{
  border-color:#777;
  transition:0.5s;
}

.footer
{
	background-color: #fff;
	color: #fff;
	height:400px;
	
}


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
						<a class="nav-link" href="#">Browse Jobs</a>

					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Canditates</a>

					</li>
					<li class="nav-item">
						<a class="nav-link" href="about_us.php">About Us</a>

					</li>

					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>

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

	<!--- Carousel With Search -->
	<section>
		<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/background1.jpg" class="d-block w-100" alt="#" width="100%">
					<div class="carousel-caption">
						<h2 class="display1">The Eassiest Way to Get Your New Job</h2>
						<h5>Find Job, Employment, and Career Opportunities</h5>
						<section class="search-sec">
							<div class="search-fix">
								<form action="h.php" method="post" novalidate="novalidate">
									<div class="row">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-3 col-md-3 col-sm-12 p-0">
													<input type="text" class="form-control search-slt" name="web devlopment" placeholder="eg. HR/Web Developer">
												</div>
												<div class="col-lg-3 col-md-3 col-sm-12 p-0">
													<input type="text" class="form-control search-slt" placeholder="Location">
												</div>
												<div class="col-lg-3 col-md-3 col-sm-12 p-0">
													<select class="form-control search-slt" id="exampleFormControlSelect1">
														<option>Category</option>
														<option>Full Time</option>
														<option>Part Time</option>
														<option>Internship</option>
													</select>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-12 p-0">
													<button type="submit" name ="search" value="search" class="btn btn-primary arn-btn">Search</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</section>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/background2.jpg" class="d-block w-100" alt="#" >
					<div class="carousel-caption">
						<h2 class="display2">Search Millions of Jobs</h2>
						<h5>Top Careers</h5>
						<section class="search-sec">
							<div class="search-fix">
								<form action="#" method="post" novalidate="novalidate">
									<div class="row">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-3 col-md-3 col-sm-12 p-0">
													<input type="text" class="form-control search-slt" placeholder="eg. HR/Web Developer">
												</div>
												<div class="col-lg-3 col-md-3 col-sm-12 p-0">
													<input type="text" class="form-control search-slt" name = "location" placeholder="Location">
												</div>
												<div class="col-lg-3 col-md-3 col-sm-12 p-0">
													<select class="form-control search-slt" id="exampleFormControlSelect1">
														<option>Category</option>
														<option>Full Time</option>
														<option>Part Time</option>
														<option>Internship</option>
													</select>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-12 p-0">
													<button type="button" class="btn btn-primary arn-btn">Search</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</section>
					</div>
				</div>
				<div class="carousel-item">
					<img src="images/background3.jpg" class="d-block w-100" alt="#">
					<div class="carousel-caption">
						<h2 class="display3">Easy To Manage Jobs</h2>
						<h5>Search Expert Candidates</h5>
						<section class="search-sec">
							<div class="search-fix">
								<form action="#" method="post" novalidate="novalidate">
									<div class="row">
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-3 col-md-3 col-sm-12 p-0">
													<input type="text" class="form-control search-slt" placeholder="eg. HR/Web Developer">
												</div>
												<div class="col-lg-3 col-md-3 col-sm-12 p-0">
													<input type="text" class="form-control search-slt" placeholder="Location">
												</div>
												<div class="col-lg-3 col-md-3 col-sm-12 p-0">
													<select class="form-control search-slt" id="exampleFormControlSelect1">
														<option>Category</option>
														<option>Full Time</option>
														<option>Part Time</option>
														<option>Internship</option>
													</select>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-12 p-0">
													<button type="button" class="btn btn-primary arn-btn">Search</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</section>
					</div>
				</div>

			</div>
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section>

	<!--- Category Box Caption-->
	<div class="cat">
		<h2>Popular Categories</h2>
		<h4>20+ Catetories work wating for you</h4>
	</div>

	<!--- Category Box -->
	<div class="box">
		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

					<div class="box-part text-center">

						<img src="images/card/1.png" height="100" width="100" >

						<div class="title">
							<h4>Education Training</h4>
						</div>

						<div class="text">
							<span>90 Open Positons</span>
						</div>

						<a href="#">Learn More</a>

					</div>
				</div>	 

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

					<div class="box-part text-center">

						<img src="images/card/2.png" height="100" width="100" >

						<div class="title">
							<h4>Accounting/ Finance</h4>
						</div>

						<div class="text">
							<span>71 Open Positons</span>
						</div>

						<a href="#">Learn More</a>

					</div>
				</div>	 

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

					<div class="box-part text-center">

						<img src="images/card/3.png" height="100" width="100" >

						<div class="title">
							<h4>Human Resource</h4>
						</div>

						<div class="text">
							<span>31 Open Positons</span>
						</div>

						<a href="#">Learn More</a>

					</div>
				</div>	 

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

					<div class="box-part text-center">

						<img src="images/card/4.png" height="100" width="100" >

						<div class="title">
							<h4>Telecommunications</h4>
						</div>

						<div class="text">
							<span>193 Open Positons</span>
						</div>

						<a href="#">Learn More</a>

					</div>
				</div>	 

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

					<div class="box-part text-center">

						<img src="images/card/5.png" height="100" width="100" >

						<div class="title">
							<h4>Restaurant/ Food Service</h4>
						</div>

						<div class="text">
							<span>213 Open Positons</span>
						</div>

						<a href="#">Learn More</a>

					</div>
				</div>	 

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

					<div class="box-part text-center">

						<img src="images/card/6.png" height="100" width="100" >

						<div class="title">
							<h4>Health</h4>
						</div>

						<div class="text">
							<span>13 Open Positons</span>
						</div>

						<a href="#">Learn More</a>

					</div>
				</div>
			</div>	
			<button type="button" class="btn btn-primary btn-lg drn-btn">All Categories</button>	
		</div>
	</div>

	<!--- Welcome Section -->
	<div class="container-fluid">
		<img src="images/welcome.jpg" width="100%">
		<div class="text1">
			<h2>Make a Difference with Your Online Resume!</h2>
			<a href="#" class="btn btn-primary btn-lg
			frn-btn" role="button">Sign Up</a>
		</div>
    </div>


	<!--- Latest canditates -->
	 <h1 class="text-center">Latest Canditates</h1>

	
	<div class="container">
	<div class="row">
	
	
	<div class="col-lg-4">
	<div class="latest-canditates">
	
	<div class="team-front">
	<img src="images/can-1.jpg" class="img-fluid" />
	<h3>Al Galib</h3>
	<p>Full Stack Developer</p>
	</div>
	
	<div class="team-back">
	<span>
	Working as a trainee.
	</span>
	</div>
	
	</div>
	</div>
	
	
	<div class="col-lg-4">
	<div class="latest-canditates">
	
	<div class="team-front">
	<img src="images/can-2.jpg" class="img-fluid" />
	<h3>Ashraful Dipto</h3>
	<p>Open Source Interactive Developer</p>
	</div>
	
	<div class="team-back">
	<span>
	Working as a trainee.	
	</span>
	</div>
	
	</div>
	</div>
	
	
	
	<div class="col-lg-4">
	<div class="latest-canditates">
	
	<div class="team-front">
	<img src="images/can-3.jpg" class="img-fluid" />
	<h3>Saumik Aich</h3>
	<p>Frontend Developer</p>
	</div>
	
	<div class="team-back">
	<span>
	Working as a trainee.
	</span>
	</div>
	
	</div>
	</div>
	


	

<section class="footer">

<!-- Footer -->
<div class="footer">
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate
          esse
          quasi, veritatis totam voluptas nostrum.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <a href="#!">PROJECTS</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">ABOUT US</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">AWARDS</a>
            </p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fa fa-home mr-3"></i>Tongi,Gazipur </p>
          </li>
          <li>
            <p>
              <i class="fa fa-envelope mr-3"></i> Noman9@gmail.com</p>
          </li>
          <li>
            <p>
              <i class="fa fa-phone mr-3"></i>  01558032022</p>
          </li>
          <li>
            <p>
              <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

        <!-- Facebook -->
        <a type="button" class="btn-floating btn-fb">
          <i class="fa fa-facebook-fa"></i>
        </a>
        <!-- Twitter -->
        <a type="button" class="btn-floating btn-tw">
          <i class="fa fa-twitter"></i>
        </a>
        <!-- Google +-->
        <a type="button" class="btn-floating btn-gplus">
          <i class="fa fa-google"></i>
        </a>
        <!-- Dribbble -->
        <a type="button" class="btn-floating btn-dribbble">
          <i class="fas fa-dribbble"></i>
        </a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

 
 

</footer>

</div>
</section>

</body>
</html>
