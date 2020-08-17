<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact - Job Hunter BD</title>
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

.container{
  width: 100%;
}




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
      <h1>Contact</h1>
      <a href="index.html" class="text2" role="text">Home</a><a type="text"> > Contact</a>
    </div>
    </div>

  <!--- Contact -->

  <div class="container">

    <h3 class="text-center">Contact us</h3><br />

    <div class="row">
      <div class="col-md-12">
        <form action="/post" method="post">
          <input class="form-control" name="name" placeholder="Name..." /><br>
          <input class="form-control" name="phone" placeholder="Phone..." /><br>
          <input class="form-control" name="email" placeholder="E-mail..." /><br>
          <textarea class="form-control" name="text" placeholder="How can we help you?"></textarea><br>
          <button id="signinSubmit" type="submit" class="btn btn-success btn-block">Contact Us</button>
          <br>
        </form>
      </div>
      <div class="col-md-12">
        <b>Customer service:</b> <br>
        Phone: +88017-00000000<br/>
        E-mail: <a href="mailto:support@jobhunterbd.com">support@jobhunterbd.com</a><br/>
        <br/><br/>

      </div>
    </div>

  </div>
  


  <!--- Footer -->




</body>
</html>
