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
          <table class='table table-striped table-hover' id='dep' style='margin-left:0%;'>
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
       $result = $db->query("SELECT * FROM departures;");
       while($reslt = $result->fetchArray(SQLITE3_ASSOC)){

         echo "
           <tbody>
             <tr class='info' >";
		foreach($reslt as $r){echo '<td>'.$r.'</td>';}
           }

           echo "
             </tr>
             </tbody>
             </table>";
          //$db->close();


 ?>
