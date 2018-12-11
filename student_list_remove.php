<?php 

echo $ab=$_GET["val1"];
$con=mysqli_connect("localhost","root","","db_my");
$query="delete from tbl_reg where id='$ab'";
mysqli_query($con, $query);
?>