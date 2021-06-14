<?php
include "connection1.php";
if(!isset($_GET['id'])) '||' empty($_GET['id']){
	header("location: day 6 form without theme.php")
}

$editid = $_GET['id'];

$edittq = mysqli_query($link,"SELECT * FROM tb1_student where id='{$editid}'");
$editdata = mysqli_fetch_array($edittq);

if($_POST)
{
	$st_name = $_POST['name'];
	$st_gender = $_POST['gender'];
	$st_dob = $_POST['dob'];
	$st_email = $_POST['email'];
	$st_mobile = $_POST['mobile'];
	$st_address = $_POST['address'];
	$st_password = $_POST['password'];
	$st_area = $_POST['area'];
	$st_pincode= $_POST['pincode'];
	$st_blodgroup = $_POST['blodgroup'];
	
	$uq = mysqli_query($link,"UPDATE INTO tb1_student values('$st_name','$st_gender','$st_dob','$st_email','$st_mobile','$st_address','$st_password','$st_area','$st_pincode','$st_blodgroup')");
	if($uq)
    {
	echo "<script> alert('record updated');window.location='day 6 form without theme.php';</script>";
    }
}
?>

<html>
<body>
<form method="post">
Name : <input type="text" value="<?php echo $editdata['st_name'];?>" name="name" />
<br>
Gender : <select value="<?php echo $editdata['st_gender'];?>"  name="gender">
<option> Male</option>
<option> Female</option>
</select>
<br>
DOB : <input type="number" value="<?php echo $editdata['st_dob'];?>" name="dob" /><br>
Email-id : <input type="text"  value="<?php echo $editdata['st_email'];?>"  name="email" /><br>
Mobile : <input type="number" value="<?php echo $editdata['st_mobile'];?>" name="mobile" /><br>
Address : <input type="text" value="<?php echo $editdata['st_address'];?>"  name="address" /><br>
Password : <input type="text" value="<?php echo $editdata['st_password'];?>"  name="password" /><br>
Area : <input type="text" value="<?php echo $editdata['st_area'];?>"  name="area" /><br>
Pincode : <input type="text" value="<?php echo $editdata['st_pincode'];?>"  name="pincode" /><br>
Blood group : <input type="text" value="<?php echo $editdata['st_blodgroup'];?>"  name="blodgroup" /><br>
<input type="submit"/>
