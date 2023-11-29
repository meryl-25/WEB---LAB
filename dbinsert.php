<?php

include "dbconn.php";

$insert = "INSERT INTO series(id, name) VALUES(1,'ANU')";
$insert = "INSERT INTO series(id, name) VALUES(2,'BALU')";
$insert = "INSERT INTO series(id, name) VALUES(3,'CATHERINE')";
$insert = "INSERT INTO series(id, name) VALUES(4,'DENNIS')";
$insert = "INSERT INTO series(id, name) VALUES(5,'EBEL')";
$insert = "INSERT INTO series(id, name) VALUES(7,'GADHA')";


if (mysqli_query($conn,$insert)) {
    
  echo "<b><br>NEW RECORD INSERTED SUCCESSFULLY</b><br>";
  
} 

else {
    
  echo "<b>ERROR: </b><br>".mysqli_error($conn);
  
}

mysqli_close($conn);

?>

