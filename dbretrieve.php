<?php
 include "dbconn.php";
 
 $select="SELECT * FROM series";
 $retval=mysqli_query($conn,$select);
  
 if(mysqli_num_rows($retval)>0) {
   
     echo "<table border='1'>
    <tr>
         <th>Id</th>
         <th>Name</th>
    </tr>";
     
     while($row=mysqli_fetch_assoc($retval)) {
         
         echo "<tr>
                     <td>".$row['id']."</td>
                     <td>".$row['name']."</td><br>
               </tr>";
        
     }
 }
 else {
     echo "<b><br>NO RESULTS FOUND</b>";
 }
?>