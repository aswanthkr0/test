<?php 
$a=$_GET["var"];
$con=mysqli_connect("localhost","root","","db_my");
$query="select * from tbl_test where id='$a'";
$result=mysqli_query($con, $query);
$row=mysqli_fetch_array($result);
if(!$row)
{ printf('no column');exit();}
if(isset($_POST["submit+"]))
{
$i=$_GET["iid"];
$n=$_GET["name"];
$c=$_GET["country"];
$g=$_GET["gender"];
$s=$_GET["status"];
$con=mysqli_connect("localhost","root","","db_my");
$qry="update tbl_test set name='$n',country='$c', gender='$g', status='$s' where id=$i";
mysqli_query($con, $qry);
}
 
?>
<form >
<input name="iid" type="hidden" value="<?php echo $row["id"]?>">
name<input name="name" type="text" value="<?php echo $row["name"]?>">
country<select name="country"> 

<option value="india" <?php if ($row["country"]=="india"){?> selected<?php }?>>India</option>
<option value="chaina" <?php if ($row["country"]=="chaina"){?> selected<?php }?>>Chaina</option>
<option value="brazil" <?php if ($row["country"]=="brazil"){?> selected<?php }?>>Brazil</option>
</select>

gender<input name="gender" type="radio" value="male" <?php if($row["gender"]=="male"){ ?>checked<?php }?>>male 
<input name="gender" type="radio" value="female" <?php if($row["gender"]=="female"){ ?>checked<?php }?>> female
 status<input type="text" value="<?php echo $row["status"]?>">
<input name="status" type="submit" value="UPDATE" >
</form>
