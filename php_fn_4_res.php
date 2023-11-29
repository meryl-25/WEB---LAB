<?php
        if(isset($_POST['s1']))
        {
            $num1=$_POST['t1'];
            $num2=$_POST['t2'];
            $result=$num1+$num2;
        }
 ?>
                  
 <html>
    <head>
        <title>
            Table 2
        </title>
    </head>
    <body>
    <center>
        <table border="1" height="150" width="250">
            <tr>
                <th colspan="10" height="60"> <h2>SUM OF NUMBERS</h2> </th>
            </tr>
            
            <tr>
                <th>FIRST NO:</th>
                <td align="center"> <?php echo $num1; ?> </td>
            <tr>
                
            <tr>
                <th>SECOND NO:</th>
                <td align="center">  <?php echo $num2; ?>  </td>
            </tr>
            
            <tr>
                <th>RESULT</th>
                <td align="center"> <?php echo $result; ?> </td>
            </tr>
            
            
                 


            </tr>
        </table>
    </center>
    </body>
</html>
