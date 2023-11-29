<?php

include 'dbconn.php';

$sql = 'CREATE DATABASE s1mca'; 

if(mysqli_query($conn,$sql)){ 
    
        echo "<b><br>DATABASE s1mca CREATED SUCCESSFUL</b><br>";  
    }
    
else{  
        echo "<b>SORRY!! DATABASE CREATED FAILED!!</b><br>".mysqli_error($conn);  
    }  
    
mysqli_close($conn);  
?>  