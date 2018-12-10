<!DOCTYPE>
<html>
<head>
<title>Tour</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<link href="style.css" rel="stylesheet">


<body>
<?php include('function.php'); ?>
<?php include('top.php'); ?>

<table align="center" height="90px" style="font-size: 25px">
<tr><td align="center"><b>Package Details</b></td></tr>
<tr>
<table align="center" border="2" >
<tr><td>

<table>
<?php

$s="select * from package,category,subcategory where package.category=category.category_id and package.subcategory=subcategory.subcatid and package.packid='" . $_GET["pid"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);

$n=0;
$data=mysqli_fetch_array($result);
mysqli_close($cn);
?>
 

<tr><td><b>Package Name:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[1];?></td></tr>
<tr><td><b>Category:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[10];?><br/>
  <b>Subcategory:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[6];?><br/>
  <b>Price:</b>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[4];?></td></tr>

<tr><td height="50px" align="center"><a href="booking.php?pid=<?php echo $data[0];   ?>">
<input type="button" value="Booking" name="sbmt" /></a></td></tr>
</table>
</td>
</tr>
</table>
</td></tr>
</table>

</div>

</div>
</body>
</html>



