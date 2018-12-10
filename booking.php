<!DOCTYPE>
<html>
<head>
<title>Tour</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<link href="style.css" rel="stylesheet">
</head>

<body>

<?php include('function.php'); ?>
<?php include('top.php'); ?>


<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into booking(Packageid,Name,Gender,Mobileno,Email,NoofDays,Child,Adults,Message) values('" . $_REQUEST["pid"] ."','" . $_POST["t1"] ."','" . $_POST["r1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."','" . $_POST["t5"] ."','" . $_POST["t6"] ."','" . $_POST["t7"] ."')";	
	
	
		mysqli_query($cn,$s);
	
	echo "<script>alert('Thank You');</script>";
}
?>



<div>
<table align="center">
<tr><td style="font-size: 30px" align="center">Sign Up for Booking</td></tr>
<tr><td>
<table border="2">
<td>
<table>

<?php

$s="select * from package,category,subcategory where package.category=category.category_id and package.subcategory=subcategory.subcatid and package.packid='" . $_GET["pid"] ."'";

$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
$n=0;
$data=mysqli_fetch_array($result);
mysqli_close($cn);
?>
 
<form method="post" enctype="multipart/form-data">
<tr><td><b>Package Id:</b>&nbsp;&nbsp;&nbsp;<?php echo $data[0];?></td></tr>
<tr><td><b>Pack Name:</b>&nbsp;&nbsp;&nbsp;<?php echo $data[1];?></td></tr>
<tr><td><b>Name:</b></td><td><input type="text" name="t1" required pattern="[a-zA-z1 _]{3,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name"/></td></tr><br/>
<tr><td><b>Gender:</b></td><td><input type="radio" name="r1" value="Male" checked="checked" />Male<input type="radio" name="r1"  value="Female"/>Female</td></tr><br/>
<tr><td><b>Mobile No:</b></td><td><input type="text" name="t2" required pattern="[0-9]{10,12}" title"Please Enter Only numbers between 10 to 12 for Mobile No"/></td></tr><br/>
<tr><td><b>Email:</b></td><td><input type="email" name="t3" required /></td><td><br/>
<tr><td><b>No.of Days:</b></td><td><input type="number" name="t4" required pattern="[1 _]{1,20}" title"Please Enter Only numbers between 1 to 20 for No. oF Days"/></td><td><br/>
<tr><td><b>No. Children:</b></td><td><input type="number" name="t5" required pattern="[1 _]{1,10}" title"Please Enter Only numbers between 1 to 10 for Children"/></td><td><br/>
<tr><td><b>No.of Adults:</b></td><td><input type="number" name="t6" required pattern="[1 _]{1,20}" title"Please Enter Only numbers between 1 to 20 for No.Of Adults"/></td><td><br/>
<tr><td><b>FAQ:</b></td><td><textarea name="t7" required="required"/></textarea></td><td><br/>
<tr><td>&nbsp;</td><td ><input type="submit" value="Submit" name="sbmt" /></td></tr>

</td>
</tr>
</td>
</tr>
</td>
</tr>
</td>
</tr>
</td>
</tr>
</form>
</td></tr>
</table>
</td>
</table>
</td></tr>
</table>

</div>

</div>

</body>
</html>

