<?php
include "2_dbconn_cust.php";

$update="UPDATE customer SET cust_id=100 WHERE cust_name='ANUPAMA' ";

if(mysqli_query($conn,$update)) {
    echo "<b><br>RECORD UPDATED SUCCESSFULLY</b><br><br>";
}

else {
    echo "<b><br>COULD NOT UPDATE</b>".mysqli_error($conn);   
}

mysqli_close($conn);
?>
