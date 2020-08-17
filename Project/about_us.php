<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Us - Job Hunter BD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="css/about_us.css" rel="stylesheet">
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





.container{
  padding-top: 60px;
}
.mb-60 {
    margin-bottom: 60px;
}
.services-inner {
    border: 2px solid #48c7ec;
    margin-left: 35px;
    transition: .3s;
}
.our-services-img {
    float: left;
    margin-left: -36px;
    margin-right: 22px;
    margin-top: 28px;
}
.our-services-text {
    padding-right: 10px;
}
.our-services-text {
    overflow: hidden;
    padding: 28px 0 25px;
}
.our-services-text h4 {
    color: #222222;
    font-size: 18px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 8px;
    padding-bottom: 10px;
    position: relative;
    text-transform: uppercase;
}
.our-services-text h4::before {
    background: #ec6d48 none repeat scroll 0 0;
    bottom: 0;
    content: "";
    height: 1px;
    position: absolute;
    width: 35px;
}
.our-services-wrapper:hover .services-inner {
    background: #fff none repeat scroll 0 0;
    border: 2px solid transparent;
    box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.2);
}
.our-services-text p {
    margin-bottom: 0;
}
p {
    font-size: 14px;
    font-weight: 400;
    line-height: 26px;
    color: #666;
    margin-bottom: 15px;
}

#rec
{
  padding-top: 50px;
  padding-bottom: 100px;
}

#rec h1{
  text-align: center;
  padding-bottom: 40px;
}
#rec img{
  max-width: 100px;
  margin: 10px 20px;
}

.col-md-12{
  padding-left: 60px;
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


	<div class="container-fluid">
		<img src="images/welcome.jpg" width="100%">
		<div class="text1">
			<h1>About Us</h1>
			<a href="index.html" class="text2" role="text">Home</a><a type="text"> > About Us</a>
		</div>
	</div>


 <!-- Services -->

 <div class="container">
    <h2 class="conatiner text-center">Our Services</h2>
    <br>
    <br>
	<div class="row">
		<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="our-services-wrapper mb-60">
							<div class="services-inner">
								<div class="our-services-img">
								<img src="images/serv.png" width="68px" alt="">
								</div>
								<div class="our-services-text">
									<h4>Basic Listing</h4>
									<p>Jobs displayed in the Category/<br>Classified section.
									Job will be live<br> for 30 days (max).
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="our-services-wrapper mb-60">
							<div class="services-inner">
								<div class="our-services-img">
								<img src="images/serv.png" width="68px" alt="">
								</div>
								<div class="our-services-text">
									<h4>Stand Out Listing</h4>
									<p>Make your job circular Stand-out among thousands of job circular.
									Jobs displayed in the Category/Classified section with Logo and different background-color.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="our-services-wrapper mb-60">
							<div class="services-inner">
								<div class="our-services-img">
								<img src="images/serv.png" width="68px" alt="">
								</div>
								<div class="our-services-text">
									<h4>Hot Job</h4>
									<p>Display your company logo and position name on the homepage of bdjobs.com.
									Customized web page for your job circular.</p>
								</div>
							</div>
						</div>
					</div>
	</div>
</div>


<section id="rec">
 <div class="conatiner text-center">
 <h1> Our Partners</h1>
 <div>
 <img src = "images/sm.png">
 <img src = "images/up.png">
 <img src = "images/ab.png">
 <img src = "images/av.png">
 <img src = "images/dr.png">
 <img src = "images/bata.png">
  <br>
 <img src = "images/br.png">
 <img src = "images/tc.png">
 <img src = "images/en.png">
 <img src = "images/law.png">                                                     
 <img src = "images/free.png">
 <img src = "images/wl.png">
 
 </div>
 </div>
 </section>


<!-- Details -->
	<div class="row align-items-center">
		<div class="col-md-12 col-lg-6">

			<h2 class="fw4">Why Advertise With Us?</h2>
			<strong>
				<li>20 lacs unique visitors per month</li>
    			<li>2,00,000 visitors per day</li>
    			<li>25 lacs CVs in the CV Bank</li>
    			<li>25, 000+ companies recruit through jobhunterbd.com</li>
   				<li> 1,00,000+ applications daily</li>
    			<li>80,000+ views per job.</li> 
			</strong>
		</div>
		<div class="col-md-12 col-lg-6">
			<img src="images/pic1.jpg" alt=""/>
		</div>
	</div>
<section id ="footer">
<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">Footer Content</h5>
        <p>Here you can use service and Behaviour to organize our footer content.</p>
       

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
          <i class="fa fa-facebook"></i>
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
          <i class="fa fa-dribbble"></i>
        </a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

 
 

</footer>
<!-- Footer -->
</section>

