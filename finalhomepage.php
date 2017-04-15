<!DOCTYPE html>
<html>
<head>

<title>Goa International Airport</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://bootswatch.com/flatly/bootstrap.min.css" rel="stylesheet" type="text/css">>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	.video-background {
  background: #000;
  position: fixed;
  top: 0; right: 0; bottom: 0; left: 0;
  z-index: -99;
}
.video-foreground,
.video-background video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}
#vidtop-content {
	top: 0;
	color: #fff;
}

@media (min-aspect-ratio: 16/9) {
  .video-foreground { height: 300%; top: -100%; }
}
@media (max-aspect-ratio: 16/9) {
  .video-foreground { width: 300%; left: -100%; }
}
@media all and (max-width: 600px) {
.vid-info { width: 50%; padding: .5rem; }
.vid-info h1 { margin-bottom: .2rem; }
}
@media all and (max-width: 500px) {
.vid-info .acronym { display: none; }
}

.info p {
    margin-top: 35px;
    margin-left: auto;
    margin-right: auto;
    width: 70%;
	color: white;
    font-family: monospace;
    text-align: center;
}
.info h3 {
    margin-top: 80px;
	text-align: center;
    color: white;
}
#googleMap {
      margin-top: 100px;
      left: 50%
      width: 50%;
      height: 300px;
}

.table1 {
background: rgba(255,255,255,0.5);
}


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



<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

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
        <p>PNR: 1023456789 </p>
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

  </div>
    
   
<br>
<br>
<br>

<div class="info" style="padding-top:5%;"><center><img src="images/logo.jpg" alt="log"  width="150px" height="150px" class="img-circle img-responsive"></center>
</h2>
<h3> MINISTRY  OF  CIVIL  AVIATION </h3>
<p> The Ministry of Civil Aviation of Government of India is the nodal Ministry responsible for the formulation of national policies and programmes for development and regulation of Civil Aviation and for devising and implementing schemes for the orderly growth and expansion of civil air transport. Its functions also extend to overseeing airport facilities, air traffic services and carriage of passengers and goods by air. The Ministry also administers implementation of the 1934 Aircraft Act and is administratively responsible for the Commission of Railways Safety.</p>
</div>


<!--
<div class="video-background">
    <div class="video-foreground" id="theVideo">
      <iframe src="https://www.youtube.com/embed/2iAD9yioGYo?controls=0&showinfo=0&loop=1&rel=0&autoplay=1" volume="0" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
-->
<div class="video-background">
<div class="video-foreground" id="theVideo">
<video width="100%" height="100%" autoplay loop="1">
<source src="videoplayback.mp4" type="video/mp4">
</video>
    </div>
</div>

<script type="text/javascript">

    function setOpacityDirectly (val) {
        document.getElementsByTagName("video")[0.7].style.opacity = val;
    }
</script>
<br>
<br>





<br>
<br>
<br>
<div id="googleMap"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(15.3803, 73.835);
var mapProp = {center:myCenter, zoom: 15, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAL9WK0Et6p8hz2NvSZ_Q7g7buYo1QiTLQ&callback=myMap"></script>

<br>
<br>
<br>

<footer class="text-center">
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
