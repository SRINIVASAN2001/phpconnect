<?php
$n=$_GET['srname'];
$c=$_GET['srclass'];
$con=mysqli_connect("localhost","root","","data");
$sql="INSERT INTO student(studentname,studentclass) values('$n','$c')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo "student data add successfully";
}
else{
    echo "not added";
}
?>