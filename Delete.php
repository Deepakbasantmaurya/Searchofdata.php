<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <?php
$mycon=mysqli_connect("localhost","root","","studentdata");
       
        session_start();
        $stsid=$_SESSION['userid'];
        echo$stsid;
        $sql="delete from stdata where rollno=?";
        $ps=$mycon->prepare($sql);
        $ps->bind_param("i",$stsid);
        $ps->execute();
        echo"record deleted successfully"
        
     
        ?>

    </center>
</body>
</html>
