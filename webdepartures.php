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
  <div>
  
      <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header"
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
      <ul class="nav navbar-nav navbar-left">
		  <li><a href="finalhomepage.php">HOME</a></li>
       <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">AIRPORT DETAILS
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="webarrivals.php">Arrival</a></li>
            <li><a href="webdepartures.php">Departure</a></li>
            <li><a href="collapse/collapse-group.html">Walkthrough</a></li>
          </ul>
        </li>
            <!--<li>
                <a href="#">HOW TO GET THERE?</a>
            </li>-->
      </ul>
    <div>
      <form class="navbar-form navbar-right" action="finalhomepage.php" method="get" role="search">
        <div class="form-group">
          <input class="form-control" name="PNR" placeholder="Enter PNR no." type="text">
        </div>
        <button type="button" data-toggle="modal"  class="btn btn-default" data-target="#myModal">Submit</button>
      </form>
    </div>
      </div>
  </nav>
      
      
       <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Flight Details</h4>
      </div>
      <div class="modal-body">
          <div class="col-sm-6">
        <p>Name: Peter Dias</p>
        <p>PNR: 1023456789</p>
        <p>Terminal: A</p>
          </div>
          <div class="col-sm-6">
            <p>FlightNo: 102345 </p>
            <p>FlightName: Jet</p>
            <p>Departure: 12:35</p>
          </div>
      </div>
      <div class="modal-footer">
          <a href="https://smartport.000webhostapp.com/Passenger/passenger.php?PNR=1023456789" style="float:left; margin-left:13px;" >Walktrough</a>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      
      
      
  <!--Navbar-->
	<div class="container" style="margin-top:7%;">
		<h1 style="text-align:center;">DEPARTURES</h1>
	</div>

<div class="container">
<form class="form-horizontal" method="post" action="webdepartures.php">
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
            $result = $db->query("SELECT * FROM departures;");
            while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

            echo "
            <option>$reslt[airlines]</option>
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
            <option value=''> </option>
            ";
            $result = $db->query("SELECT * FROM departures;");
            while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

            echo "
            <option>$reslt[flightno]</option>
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
        <label for="select" class="col-lg-3 control-label" style="margin-left:4%;">DESTINATION</label><br>
        <div class="col-lg-10">
          <select class="form-control" name="Destination" style="margin-left:5%;width:80%;">
            <?php
            echo "
            <option value=''> </option>
            ";
            $result = $db->query("SELECT * FROM departures;");
            while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

            echo "
            <option>$reslt[destination]</option>
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

	include 'depart.php';
	 ?>

</div>
</div>

<footer class="text-center" style="margin-top:10%">
  <a class="up-arrow" href="webdepartures.php" data-toggle="tooltip" title="TO TOP">
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
