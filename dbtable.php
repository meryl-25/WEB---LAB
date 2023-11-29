<?php

include 'dbconn.php';

$table="CREATE TABLE series(id int(2) PRIMARY KEY, name varchar(25)NOT NULL)";

if(mysqli_query($conn, $table)){
    
    echo "<b><br>TABLE series CREATED SUCCESSFULLY</b><br>";
}

else{
    
    echo "<b>COULD NOT CREATE TABLE!!</b><br>".mysql_error($conn);
} 
    mysqli_close($conn);

?>
