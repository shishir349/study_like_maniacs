<!DOCTYPE HTML>
<html>
<head>
<title>show</title>
</head>
<body>
<?php

  $s="select * from files where course='Mechanical Engineering' ";
  $con=mysqli_connect("127.0.0.1","root","","sakshi"); 
  if($con)
		{
			$rs=mysqli_query($con,$s);
			while($fr=mysqli_fetch_array($rs))
			{
				$a=$fr[0];
				$b=$fr[1];
				$c=$fr[2];
				$d=$fr[3];
				$e=$fr[4];
?>

<form action="show.php" method="post" enctype="multipart/form-data">
   <table>
     <tr>   <td><?php echo $a; ?></td>
	        <td><?php echo $b; ?></td>
	        <td><?php echo $c; ?></td>
			<td><?php echo $d; ?></td>
			<td><?php echo $e; ?></td>
	</tr>		
   </table>

</form>
  <?php	}
	}
	?>
	</body>
	</html>
