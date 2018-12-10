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

<div style="width: 900px">
<table border="2">
<tr><td  style="font-size:30px"><b>Category</b></td></tr>



<?php


$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);

while($data=mysqli_fetch_array($result))
{
	   
		echo "<tr><td><a href='subcategory.php?catid=$data[category_id]'>$data[category_name]</a></tr></td>";

}
mysqli_close($cn);
?>
</table>
</div>


</body>
</html>