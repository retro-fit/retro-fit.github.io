<?php

echo "
     <table class='table table-striped table-hover' id='arrive'>
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
$db->close();
 ?>
