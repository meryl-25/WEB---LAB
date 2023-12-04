<?php

include "2_dbconn_cust.php";

$insert = "INSERT INTO customer(cust_id, cust_name, house_name, mob) VALUES(1,'ANUPAMA', 'ANU BHAVAN', 9876543210)";
$insert = "INSERT INTO customer(cust_id, cust_name, house_name, mob) VALUES(101,'BIBIN', 'BIBI NIVAS', 9753108642)";


if (mysqli_query($conn,$insert)) {
    
  echo "<b><br>NEW RECORD INSERTED SUCCESSFULLY</b><br>";
  
} 

else {
    
  echo "<b>ERROR: </b><br>".mysqli_error($conn);
  
}

mysqli_close($conn);

?>