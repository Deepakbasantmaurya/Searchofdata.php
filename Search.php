<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>

<form method=post action="search.php">
    <table border=1>
        <tr>
            <th>studentroll</th>
         <td>  <input type="text" placeholder=enter-your-rollnumbrer name=stid></td>
        
        </tr>
        <tr>
                    <td> </td>
                    <td><input type=submit value= search name=sbtn></td>
                    <td><input type="reset" value="reset"></td>

                 </tr>
</table>

</form>         
<?php
if(isset($_POST['sbtn']))
{ $id=$_POST['stid'];
   
 $mycon=mysqli_connect("localhost","root","","studentdata");
 $sql="select*from stdata where rollno=".$id;
 $record=$mycon->query($sql);
 $n=mysqli_num_rows($record);
 echo"total record number =".$n;
 if($n>0)
  { session_start();
    $_SESSION['userid']=$id;
   
    echo"<table border=1>";
    echo"<tr><td> stid</td>
                    <td>stname</td>
                    <td>stdob</td>
                    <td>stadd</td> </tr>";
                   
                   
    while($row=mysqli_fetch_assoc($record))
    {
        echo"<tr>";
        echo"<td>".$row['rollno']."</td>";
        echo"<td>".$row['stname']."</td>";
        echo"<td>".$row['st_dob']."</td>";
        echo"<td>".$row['st_add']."</td>";
        echo"<form method=post action=delete.php>";
        echo"<td><input type=submit value= Delete name=delete></td>";
        echo"</form>";

    
}
echo"</table>";

    }
    else
    echo"<font color =red size=5>No record found </font>";
 }
    
    

  ?>  
</body>
</html>
