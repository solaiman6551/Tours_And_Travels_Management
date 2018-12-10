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


<div style="width: 200px">
<table border="2px">
<tr><td  style="font-size:30px" align="center"><b>Category</b></td></tr>



<?php


$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);

while($data=mysqli_fetch_array($result))
{
	   
		echo "<tr><td><a href='subcategory.php?catid=$data[category_id]'>$data[category_name]</a></tr></td>";

}
?>
</table>
</div>






<div>
<table align="center">
<tr><td align="center" style="font-size: 25px"><b>Choose the best one you like</b></td></tr>
<tr><td><table width="400px">

<?php

$s="select * from subcategory where Catid='" .$_GET["catid"] . "'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);

$n=0;
while($data=mysqli_fetch_array($result))
{
	
	if($n%3==0)
	{
	?>
<tr>
<?php

	}?>
<td>
<table border="2" width="150px" bordercolor="black">

<tr><td align="center">
<?php echo $data[1];?> 
</td></tr>
<tr><td/></td></tr><br/><br/>
<tr><td align="center"><a href="package.php?subcatid=<?php echo $data[0];?>"><font>View Detail</font></a></td></tr>

</table>
</td>


<?php

if($n%3==2)
{
?>
</tr>

<?php
}
$n=$n+1;
}
mysqli_close($cn);
?>

</table>


</td></tr></table>

</div>

</div>
</body>
</html>