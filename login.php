<?php
session_start();
	
	if(!empty($_POST['s3']))
	{
		$usd2=$_POST['username'];
				$ps2=$_POST['password'];

	$s="select * from registration where uid='$usd2' and pwd='$ps2'";	
		$con=mysqli_connect("127.0.0.1","root","","hackathon"); 
		if($con)
		{
			$rs=mysqli_query($con,$s);
			$fr=mysqli_fetch_row($rs);
			$us=$fr[1];
			$ps=$fr[2];
			if($usd2==$us && $ps2==$ps)
			{
				$_SESSION['uid']=$us;
				header("Location:courses.php");
			}
			else{
				echo "<script>alert('invalid id')</script>";
			}
		
		}
	}
	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
	.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
	.bg{
		background-image: url(giphy1.gif);
	}
	</style>

</head>
<br><br><br><br><br><br><br><br><br><br>
<body class="bg">

<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" action="login.php" method="post">
			<fieldset>
				<h2 style="color: aqua";>Please Sign In</h2>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="text" name="username" id="email" class="form-control input-lg" placeholder="Username" required>
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
				</div>
				<span class="button-checkbox">
					<button type="button" class="btn" data-color="info">Remember Me</button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
					<a href="" class="btn btn-link pull-right">Forgot Password?</a>
				</span>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" name="s3" value="Sign In">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<a href="signupnew.php" class="btn btn-lg btn-primary btn-block">Register</a>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<a href="upload.php" class="btn btn-lg btn-danger btn-block">Upload the document</a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

</div>
</body>
</html>