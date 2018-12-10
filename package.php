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


<table align="center">
    <tr><td align="center" style="font-size: 25px"><b>Packages</b></td></tr>
    
    <tr>
    <td><table width="400px" height="90px">

    <?php
    $s="select * from package where package.subcategory='" . $_GET["subcatid"] ."'";
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

	 }

        ?>
        <td>

        <table border="2" align="center">

        <tr><td align="center"><?php echo $data[1]; ?></td></tr>
        <tr><td><a href="detail.php?pid=<?php echo $data[0]; ?>">Package Detail</font></a></td></tr>
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
        </td>
        </tr>
</table>

        

</body>
</html>