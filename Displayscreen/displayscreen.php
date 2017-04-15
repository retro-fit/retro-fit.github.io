
<!DOCTYPE html>
<html>
<head>
 <title>Display Flight Status</title>
 <meta http-equiv="refresh" content="<?php echo 5?>;URL='<?php  echo '../pratik_nayak/smartport/project.php'?>'">
 <link rel="stylesheet" href="bootstrap.min.css">
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 </head>
 <style>
 .Absolute-Center {
  width: 500px;
  height: 500px;
  /*min-width: 200px;
  max-width: 400px;*/
  margin-top: 50px;
  margin-bottom: auto;
  padding: 40px;
  margin-left: 150px;
  background-color: cyan;

}

#div {
      height: 550px;
      margin-left:auto;
      margin-right: auto;


}

#row {

  width:auto;
  height: 550px;
  margin-top: 5%;
  margin-left: 2.7%;

}

#arrive{
    opacity: 0.7;
    background: transparent;
    margin-right: 0%;

}

#dep{
  opacity: 0.7;
  background: transparent;
  margin-left: 0%;

}

table tr td, table tr th{
      color: #100202;
      font-weight: bold;
}


 </style>
 <body style="background-image:url(1360x768-data_out_167_70414826-runway-wallpapers.jpg)">
   <!--<div class="container-fluid" id="div" style="background-color:red;">-->
   <div class="row" id="div">
     <div class="col-md-6" id="row">
       <h4><b>DEPARTURES</b></h4>
       <?php
          include 'departures.php'
        ?>
     </div>

     <div class="col-md-6" id="row" >
       <h4><b>ARRIVALS</b></h4>
       <?php
          include 'arrivals.php';
        ?>
     </div>
   </div>

 </body>
 </html>
