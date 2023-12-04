<?php
include "dbconn.php";

$update="UPDATE series SET name='EBIN' WHERE id=5";

if(mysqli_query($conn,$update)) {
    echo "<b><br>RECORD UPDATED SUCCESSFULLY</b><br><br>";
}

else {
    echo "<b><br>COULD NOT UPDATE</b>".mysqli_error($conn);   
}

mysqli_close($conn);
?>