<?php

include 'dbconn_cust.php';

$table="CREATE TABLE customer(cust_id int(2) PRIMARY KEY, cust_name varchar(25)NOT NULL, house_name varchar(20) NOT NULL, mob int(5) NOT NULL)";

if(mysqli_query($conn, $table)){
    
    echo "<b><br>TABLE customer CREATED SUCCESSFULLY</b><br>";
}

else{
    
    echo "<b>COULD NOT CREATE TABLE!!</b><br>".mysql_error($conn);
} 
    mysqli_close($conn);

?>

