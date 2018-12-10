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

<table align="center" style="font-size: 30px" height="90px">
<tr><td><b>Special Offer</b></td></tr>
</table>

<table border="1" align="center">
<tr><td align="center"><b>Offer List</b></td></tr>
<tr><td align="center" valign="top" style="padding-top:10px;">
<table border="0" align="center" width="95%" >
<tr><td style="font-size:15px; padding:5px; font-weight:bold;">ID</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Special Offer Title</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Offername</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Detail</td>
</tr>




<?php


$s="select * from specialoffer";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'>
		$data[0]</td>
	    <td>$data[1]</td>
		<td s>$data[2]</td>
		<td>$data[3]</td>
	
	
		</tr>";
}
mysqli_close($cn);
?>



</body>
</html>