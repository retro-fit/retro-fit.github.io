<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
<!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }


</style>

<body style="background-image:url(images/bluesky.jpg)">

  <!--Navbar-->
  <div id="mypage">
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img style="max-width:100px; margin-top: 5px; width: 55px; height:55px ;"
             src="https://img.clipartfest.com/f5572bd21753ce8e6c042d6ce10d2b62_plane-clip-art-vector-clip-airplane-clip-art-vector_2000-2000.svg">
      <a class="navbar-brand" href="#myPage">SMARTPORT</a>
    </div>

      <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		 <li><a href="index.html">HOME</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">FLIGHT STATUS
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="webarrivals.php">Arrival</a></li>
            <li><a href="webdepartures.php">Departure</a></li>
          </ul>
        </li>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">HOW TO GET THERE?
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Bus</a></li>
            <li><a href="#">Taxi</a></li>
            <li><a href="#">Train</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
  <!--Navbar-->
	<div class="container" style="margin-top:7%;">
		<h1 style="text-align:center;">ARRIVALS</h1>
	</div>
<div class="container">
<form class="form-horizontal" method="post" action="webarrivals.php">
  <div class="row" style="margin-top:2%;">
    <div class="col-md-12" style="text-align:center; margin-left:25px;">
    <div class="col-md-3" style="margin-left:;">
      <div class="form-group" >
        <label for="select" class="col-lg-3 control-label" style="margin-left:5%;">AIRLINES</label><br>
        <div class="col-lg-10">
          <select class="form-control" name="Airline" style="margin-left:5%; width:80%;">
            <?php
            class MyDB extends SQLite3
            {
                function __construct()
                {
                    $this->open('test.db');
                }
            }

            $db = new MyDB();

            echo "
            <option value=''></option>
            ";
            $result = $db->query("SELECT * FROM ARRIVALS;");
            while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

            echo "
            <option>$reslt[AIRLINES]</option>
            ";
            }
            echo "</select>";
            //$db->close();
             ?>
          </select>
        </div>
      </div>
    </div>

    <div class="col-md-3" >
      <div class="form-group" >
        <label for="select" class="col-lg-3 control-label" style="margin-left:4%;">FLIGHTNO</label><br>
        <div class="col-lg-10">
          <select class="form-control" name="Flightno" style="margin-left:5%;width:80%;">
            <?php
            echo "
            <option value=''></option>
            ";
            $result = $db->query("SELECT * FROM ARRIVALS;");
            while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

            echo "
            <option>$reslt[FLIGHTNO]</option>
            ";
            }
            echo "</select>";
             ?>
          </select>
        </div>
      </div>
    </div>

    <div class="col-md-3" >
      <div class="form-group" >
        <label for="select" class="col-lg-3 control-label" style="margin-left:4%;">Origin</label><br>
        <div class="col-lg-10">
          <select class="form-control" name="Origin" style="margin-left:5%;width:80%;">
            <?php
            echo "
            <option value=''></option>
            ";
            $result = $db->query("SELECT * FROM ARRIVALS;");
            while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

            echo "
            <option>$reslt[ORIGIN]</option>
            ";
            }
            echo "</select>";
             ?>
          </select>
        </div>
      </div>
    </div>

    <div class="col-md-3" style="padding-top:3%;">
      <div class="col-lg-12" style="margin-left:-37%;">
        <button style="height:35px; width:40%" type="submit" name="Button" class="btn btn-primary btn-xs">Submit</button>
      </div>
    </div>

  </div>
</div>
</form>


<div class="col-md-12" style="text-align:center;">

	<?php

	include 'arrive.php';
	 ?>

</div>
</div>

<footer class="text-center" style="margin-top:10%">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
    <p>CONTACT <br>ADDRESS: Airport Rd, Dabolim, Goa 403801, India<br>PHONE:1234567891 <br>EMAIL: pratiknayak12@gmail.com
    </p>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();

  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

 </body>
</html>
