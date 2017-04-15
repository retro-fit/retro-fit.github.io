<?php
      echo "
              <table class='table table-striped table-hover'>
                <thead>
                <tr>
                  <th>Airlines</th>
                  <th>Flightno</th>
                  <th>Destination</th>
                  <th>Via</th>
                  <th>Terminal</th>
                  <th>Status</th>
                  <th>Eta</th>
                  </tr>
                </thead>
           ";

           if($_POST['Airline'] == "" && $_POST['Flightno'] == "" && $_POST['Destination'] == ""){
             echo $_POST['Airline'];
             $result = $db->query("SELECT * FROM departures;");

             while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

               echo "
                 <tbody>
                   <tr class='info'>
                     <td>".$reslt[airlines]."</td>
                     <td>".$reslt[flightno]."</td>
                     <td>".$reslt[destination]."</td>
                     <td>".$reslt[via]."</td>
                     <td>".$reslt[terminal]."</td>
                     <td>".$reslt[status]."</td>
                     <td>".$reslt[eta]."</td>

               ";
                 }
               echo "
                 </tr>
                 </tbody>
                 </table>";
               //$db->close();
           }
           elseif ($_POST['Airline'] == "" && $_POST["Flightno"] == "") {
             $destination = $_POST['Destination'];
           //  echo $destination;
             $result = $db->query("SELECT * FROM departures WHERE destination = '$destination';");

             while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

               echo "
                   <tr>
                     <td>".$reslt[airlines]."</td>
                     <td>".$reslt[flightno]."</td>
                     <td>".$reslt[destination]."</td>
                     <td>".$reslt[via]."</td>
                     <td>".$reslt[terminal]."</td>
                     <td>".$reslt[status]."</td>
                     <td>".$reslt[eta]."</td>
               ";
                 }
               echo "</table>";
               //$db->close();
           }
           elseif ($_POST['Flightno'] == "" && $_POST['Destination'] == "") {
             $airline = $_POST['Airline'];
             //echo $airline;
             $result = $db->query("SELECT * FROM departures WHERE airlines = '$airline';");

             while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

               echo "
                   <tr>
                     <td>".$reslt[airlines]."</td>
                     <td>".$reslt[flightno]."</td>
                     <td>".$reslt[destination]."</td>
                     <td>".$reslt[via]."</td>
                     <td>".$reslt[terminal]."</td>
                     <td>".$reslt[status]."</td>
                     <td>".$reslt[eta]."</td>
               ";
                 }
               echo "</table>";
               //$db->close();
           }
           elseif ($_POST['Airline'] == "" && $_POST['Destination'] == "") {
             $flightno = $_POST['Flightno'];
             //echo $flightno;
             $result = $db->query("SELECT * FROM departures WHERE flightno = '$flightno';");

             while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

               echo "
                   <tr>
                     <td>".$reslt[airlines]."</td>
                     <td>".$reslt[flightno]."</td>
                     <td>".$reslt[destination]."</td>
                     <td>".$reslt[via]."</td>
                     <td>".$reslt[terminal]."</td>
                     <td>".$reslt[status]."</td>
                     <td>".$reslt[eta]."</td>
               ";
                 }
               echo "</table>";
               //$db->close();
           }
           elseif ($_POST['Airline'] == "") {
             $flightno = $_POST['Flightno'];
             $destination = $_POST['Destination'];
             $result = $db->query("SELECT * FROM departures WHERE flightno = '$flightno' AND destination = '$destination' ;");

             while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

               echo "
                   <tr>
                     <td>".$reslt[airlines]."</td>
                     <td>".$reslt[flightno]."</td>
                     <td>".$reslt[destination]."</td>
                     <td>".$reslt[via]."</td>
                     <td>".$reslt[terminal]."</td>
                     <td>".$reslt[status]."</td>
                     <td>".$reslt[eta]."</td>
               ";
               echo "</table>";
               //$db->close();
           }
          }
          elseif ($_POST['Flightno'] == "") {
            $airline = $_POST['Airline'];
            $destination = $_POST['Destination'];
            $result = $db->query("SELECT * FROM departures WHERE airlines = '$airline' AND destination = '$destination' ;");

            while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

              echo "
                  <tr>
                    <td>".$reslt[airlines]."</td>
                    <td>".$reslt[flightno]."</td>
                    <td>".$reslt[destination]."</td>
                    <td>".$reslt[via]."</td>
                    <td>".$reslt[terminal]."</td>
                    <td>".$reslt[status]."</td>
                    <td>".$reslt[eta]."</td>
              ";
              echo "</table>";
              //$db->close();

          }
        }
        elseif ($_POST['Destination'] == "") {
          $flightno = $_POST['Flightno'];
          $airline = $_POST['Airline'];
          $result = $db->query("SELECT * FROM departures WHERE flightno = '$flightno' AND airlines = '$airline' ;");

          while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

            echo "
                <tr>
                  <td>".$reslt[airlines]."</td>
                  <td>".$reslt[flightno]."</td>
                  <td>".$reslt[destination]."</td>
                  <td>".$reslt[via]."</td>
                  <td>".$reslt[terminal]."</td>
                  <td>".$reslt[status]."</td>
                  <td>".$reslt[eta]."</td>
            ";
            echo "</table>";
            $db->close();
          }
        }

    ?>
