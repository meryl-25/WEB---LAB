<?php

include '2_dbconn_cust.php';

$sql = 'CREATE DATABASE office'; 

if(mysqli_query($conn,$sql)){ 
    
        echo "<b><br>DATABASE office CREATED SUCCESSFUL</b><br>";  
    }
    
else{  
        echo "<b>SORRY!! DATABASE CREATED FAILED!!</b><br>".mysqli_error($conn);  
    }  
    
mysqli_close($conn);  
?>  
