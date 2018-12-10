<!DOCTYPE>
<html>
<head>
<title>Untitled Document</title>
</head>

<body>
<?php
function makeconnection()
{
	$cn=mysqli_connect("localhost","root","","tour");
	if(mysqli_connect_errno())
	{
		echo "connection error".mysqli_connect_error();
	}
	return $cn;
}

$cn=mysqli_connect("localhost","root","","tour");
?>


</body>
</html>