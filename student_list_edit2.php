<?php 
$a=$_POST["username"];
$b=$_POST["class"];
$c=$_POST["id"];
$con=mysqli_connect("localhost","root","","db_my");
echo $query="update tbl_reg set username='$a',password='$b' where id='$c'";
mysqli_query($con, $query);

?>