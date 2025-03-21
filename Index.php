<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

        <form method=post action="studentlogin.php">
            <table border=1>
                <tr>
                    <th>studentroll</th>
                 <td>  <input type="text" placeholder=enter-your-rollnumbrer name=stid></td>
                </tr>
                <tr>
                    <th>student name</th>
                 <td>  <input type="text" placeholder=enteryourname name=stname></td>
                </tr>
                <tr>
                    <th>studentdob</th>
                 <td>  <input type="text" placeholder="Date of birth"name=stdob></td>
                </tr>
                <tr>
                    <th>studentadd</th>
                 <td>  <input type="text" placeholder="address" name=stadd></td>
                </tr>
                <tr>
                    <td> </td>
                    <td><input type=submit value= submit name=sbtn></td>
                    <td><input type="reset" value="reset"></td>

                 </tr>
            </table>
        </form>
        <?php
        if(isset($_POST['sbtn']))
        {   $stid=$_POST['stid'];
            $stname=$_POST['stname'];
            $stdob=$_POST['stdob'];
            $stadd=$_POST['stadd'];
            $mycon=mysqli_connect("localhost","root","","studentdata");
        $sql="insert into stdata values(?,?,?,?)";
        $n=$mycon->prepare($sql);
        $n->bind_param("isss",$stid,$stname,$stdob,$stadd);
        $n->execute();
       
        }
        echo"<form method=post action=search.php>";
       echo" <table border=1>";
       echo" <tr><th>if you want serch data press enter</th><td><input type=submit value=enter ></td></tr></table>";
       echo"</form>";
        ?>
    </center>
    
</body>
</html>
