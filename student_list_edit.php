<?php 

echo $ab=$_GET["val2"];
$con=mysqli_connect("localhost","root","","db_my");
$query="select id,username,class from tbl_reg where id='$ab'";
$result=mysqli_query($con, $query);
$row=mysqli_fetch_array($result);
?>
<html>
<head>
<title>
</title>
</head>
<body>
<form action="student_list_edit2.php" method="post">
<input type="text" name="username"  value="<?php echo $row['username'] ?>">

<input type="text" name="class"  value="<?php echo $row['class'] ?>">
<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
<br>

<input type="submit" value="ok">
	
</form>
</body>
</html>