<?php

include "dbconn.php";

$x=6;
$y='FATHIMA';

$insert = "INSERT INTO series(id, name) VALUES($x,'$y')";

if (mysqli_query($conn,$insert)) {
    
  echo "<b><br>NEW RECORD INSERTED SUCCESSFULLY</b><br><br>";
  
} 

else {
    
   echo "<b>ERROR: </b><br>".mysqli_error($conn);
  
}

mysqli_close($conn);

?>
