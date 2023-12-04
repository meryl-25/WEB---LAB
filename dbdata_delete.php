<?php
include "dbconn.php";

$data="DELETE FROM series WHERE id=7";

if(mysqli_query($conn,$data)){
    
    echo "<b><br>DATA DELETED SUCCESSFULLY</b><br><br>";
}

else{
    
    echo"<b>COULD NOT DELETE</b><br><br>".mysqli_error($conn);    
}

mysqli_close($conn);
?>