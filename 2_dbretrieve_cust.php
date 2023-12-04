<?php
 include "2_dbconn_cust.php";
 
 $select="SELECT * FROM customer";
 $retval=mysqli_query($conn,$select);
  
 if(mysqli_num_rows($retval)>0) {
   
     echo "<table border='1' align='center' width='300' height='200'>
    <tr>
         <th>Customer Id</th>
         <th>Customer Name</th>
         <th>House Name</th>
         <th>Mob No</th>
    </tr>";
     
     while($row=mysqli_fetch_assoc($retval)) {
         
         echo "<tr>
                     <td>".$row['cust_id']."</td>
                     <td>".$row['cust_name']."</td>
                     <td>".$row['house_name']."</td>
                     <td>".$row['mob']."</td><br>
               </tr>";
        
     }
 }
 else {
     echo "<b><br>NO RESULTS FOUND</b>";
 }
?>
