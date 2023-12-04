<?php
include "2_dbconn_cust.php";

$data="DROP TABLE customer";

if(mysqli_query($conn,$data)){
    
    echo "<b><br>TABLE DELETED SUCCESSFULLY</b><br><br>";
}

else{
    
    echo"<b>COULD NOT DELETE</b><br><br>".mysqli_error($conn);    
}

mysqli_close($conn);
?>