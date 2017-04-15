<?php
	 echo "
              <table class='table table-striped table-hover'>
                <thead>
                <tr>
                  <th>Airlines</th>
                  <th>Flightno</th>
                  <th>Origin</th>
                  <th>Via</th>
                  <th>Terminal</th>
                  <th>Status</th>
                  <th>Eta</th>
                  </tr>
                </thead>
           ";
	if($_POST['Airline'] == "" && $_POST['Flightno'] == "" && $_POST['Origin'] == ""){
             echo $_POST['Airline'];
             $result = $db->query("SELECT * FROM ARRIVALS;");

             while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

              echo "
		<tbody>
		<tr class='info'>";
		foreach($reslt as $r){echo '<td>'.$r.'</td>';}
           
		}
		echo "
                 </tr>
                 </tbody>
                 </table>";
             }
	
	elseif ($_POST['Airline'] == "" && $_POST["Flightno"] == "") {
             $origin = $_POST['Origin'];
           //  echo $destination;
             $result = $db->query("SELECT * FROM ARRIVALS WHERE ORIGIN = '$origin';");

             while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

		echo "
                 <tbody>
                   <tr class='info'>
                     <td>".$reslt[AIRLINES]."</td>
                     <td>".$reslt[FLIGHTNO]."</td>
                     <td>".$reslt[ORIGIN]."</td>
                     <td>".$reslt[VIA]."</td>
                     <td>".$reslt[TERMINAL]."</td>
                     <td>".$reslt[STATUS]."</td>
                     <td>".$reslt[ETA]."</td>

               ";
                 }
               echo "</table>";
               //$db->close();
           }

	elseif ($_POST['Flightno'] == "" && $_POST['Origin'] == "") {
             $airline = $_POST['Airline'];
             //echo $airline;
             $result = $db->query("SELECT * FROM ARRIVALS WHERE AIRLINES = '$airline';");

             while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

               echo "
                 <tbody>
                   <tr class='info'>
                     <td>".$reslt[AIRLINES]."</td>
                     <td>".$reslt[FLIGHTNO]."</td>
                     <td>".$reslt[ORIGIN]."</td>
                     <td>".$reslt[VIA]."</td>
                     <td>".$reslt[TERMINAL]."</td>
                     <td>".$reslt[STATUS]."</td>
                     <td>".$reslt[ETA]."</td>

               ";
                 }
               echo "</table>";
               //$db->close();
           }
	elseif ($_POST['Airline'] == "") {
             $flightno = $_POST['Flightno'];
             $origin = $_POST['Origin'];
             $result = $db->query("SELECT * FROM ARRIVALS WHERE flightno = '$flightno' AND ORIGIN = '$origin' ;");

             while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

                echo "
                 <tbody>
                   <tr class='info'>
                     <td>".$reslt[AIRLINES]."</td>
                     <td>".$reslt[FLIGHTNO]."</td>
                     <td>".$reslt[ORIGIN]."</td>
                     <td>".$reslt[VIA]."</td>
                     <td>".$reslt[TERMINAL]."</td>
                     <td>".$reslt[STATUS]."</td>
                     <td>".$reslt[ETA]."</td>

               ";
                 
		echo "</table>";	
		//$db->close();
           }
          }
	
	elseif ($_POST['Flightno'] == "") {
            $airline = $_POST['Airline'];
            $origin = $_POST['Origin'];
            $result = $db->query("SELECT * FROM ARRIVALS WHERE AIRLINES = '$airline' AND ORIGIN = '$origin' ;");

            while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

                echo "
                 <tbody>
                   <tr class='info'>
                     <td>".$reslt[AIRLINES]."</td>
                     <td>".$reslt[FLIGHTNO]."</td>
                     <td>".$reslt[ORIGIN]."</td>
                     <td>".$reslt[VIA]."</td>
                     <td>".$reslt[TERMINAL]."</td>
                     <td>".$reslt[STATUS]."</td>
                     <td>".$reslt[ETA]."</td>

               ";
              echo "</table>";
              //$db->close();

          }
        }
	
	elseif ($_POST['Origin'] == "") {
          $flightno = $_POST['Flightno'];
          $airline = $_POST['Airline'];
          $result = $db->query("SELECT * FROM ARRIVALS WHERE flightno = '$flightno' AND AIRLINES = '$airline' ;");

          while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

         echo "
                 <tbody>
                   <tr class='info'>
                     <td>".$reslt[AIRLINES]."</td>
                     <td>".$reslt[FLIGHTNO]."</td>
                     <td>".$reslt[ORIGIN]."</td>
                     <td>".$reslt[VIA]."</td>
                     <td>".$reslt[TERMINAL]."</td>
                     <td>".$reslt[STATUS]."</td>
                     <td>".$reslt[ETA]."</td>

               ";
            echo "</table>";
            $db->close();
          }
        }
	
	
	
?>





