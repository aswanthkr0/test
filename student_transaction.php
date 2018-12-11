STUDENT DETAILS 
<br>
<form method="post">
<input type="text" name="name" placeholder="name">
<br>
<input type="text" name="place" placeholder="place">
<br>
<input type="text" name="subject" placeholder="subject">
<br>
<input type="text" name="class" placeholder="class">
<br>
<input type="submit" value="submit" name="submit">
</form>
<?php 
if(isset($_POST["submit"]))
{
$a= $_POST["name"];
$b= $_POST["place"];
$c= $_POST["subject"];
$d =$_POST["class"];
$con= new mysqli("localhost","root","","db_my");
mysqli_autocommit($con, FALSE);
$query1 ="insert into tbl_personal(name,place)values('$a','$b')";
$query2 ="insert into tbl_academics(subject,class)values('$c','$d')";

mysqli_begin_transaction($con);
$flag=true;
$result1= $con->$query;
if(!$result1)
{
    $flag= false;
}
$result2= mysqli_query($con, $query2);

if(!$result2)
{
    $flag= false;
}
if($flag)
{
    echo "66";
    mysqli_commit($con);
}
else 
{
    echo "6556";
    
    mysqli_rollback($con);
}
}
?>