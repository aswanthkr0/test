<table border='1'>
<tr>
<th>NAME</th>
<th>COUNTRY</th>
<th>GENDER</th>
<th>STATUS</th>
</tr>
<?php 
$con=mysqli_connect("localhost","root","","db_my");
$query="select * from tbl_test";
$result=mysqli_query($con, $query);

while($row=mysqli_fetch_array($result))
{
    
    echo '<tr><td>'.$row["name"].'</td><td>'.$row["country"].'</td><td>'.$row["gender"].'</td><td>'.$row["status"].'</td><td><a href="test_edit.php?var='.$row['id'].'"> CHANGE </a></td></tr>';
}
?>
</table>
