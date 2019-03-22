<?php
	  
	  if(!empty($_POST['s1']))
	  {   $nam=$_POST['name'];
          $ema=$_POST['email'];	  
	      $psw=$_POST['password'];
		  $cou=$_POST['course'];
		  $fil=$_FILES['file']['name'];
		  
		  $s="insert into files(name,email,password,course,file)values('$nam','$ema','$psw','$cou','$fil')";
		  $con=mysqli_connect("127.0.0.1","root","","hackathon");
		  if($con)
		  {
			  mysqli_query($con,$s);
//			  move_uploaded_file($_FILES['file']['tmp_name'],"fi/".$fil);
		  }
	  }
	
	?>


<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">

</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Ping us anytime:</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>+919779914422</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>sshishir349@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="signupnew.php">Register</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="index.php">
								<img src="icons/logo.png" style="height: 200px; width: 200px;">

								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="courses.php">Courses</a></li>
									
									
									<li><a href="contact.php">Contact</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

								<!-- Hamburger -->

								
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Home</a></li>
				<li class="menu_mm"><a href="about.php">About</a></li>
				<li class="menu_mm"><a href="courses.php">Courses</a></li>
				
				
				<li class="menu_mm"><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>
	
	<br><br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	


<section>
<div class="container">
<div class="row">
<div class="col-sm-10">

	 <form action="upload.php" method="post">
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="firstname">Teacher Name</label>
                    <input type="text" class="form-control" name="name" id="firstname" placeholder="Firstname" required="">
                </div>
                <div class="form-group">
                    <label for="lastname">Email</label>
                    <input type="text" class="form-control" name="email" id="lastname" placeholder="" required="">
                </div>
                
                <div class="form-group">
                    <label for="lastname">Password</label>
                    <input type="password" class="form-control" name="password" id="lastname" placeholder="" required="">
                </div>
                
                  <div class="form-group">
                    <label for="Country">Course</label>
                    <select id="country" name="course" autocomplete="country" class="form-control"> 
                    <option value="" selected="selected">(select)</option>
                    <option >Computer Science</option>
                    <option >Mechanical</option>
                    <option >Electronics</option>
                    <option >Physics</option>
                    <option >Chemistry</option>
                    <option >Analytics</option>
                    <option >Maths</option>
           <option >Electrical</option>
               <option >Business</option>
               <option >Law</option>
               <option >English</option>
                </select>
                </div> 
                 
                <div class="form-group">
                    <label>Upload File</label>
                    <input type="file" class="form-control" id="email" name="filesave" placeholder="File" required="">
                </div>
                <input type="submit" class="btn btn-success" name="s1">
            
            </div>
           
                
                 
                
        </form>
 

</div>
</div>
</section>
<br>
<br>










	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

						<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: sshishir349@gmail.com</li>
											<li>Phone:  +(91) 9779914422</li>
											<li>Room:504-A Boys Hostel:4, Lovely Professional University, Phagwara, Punjab, 144411</li>
										</ul>
									</div>
								</div>
								
						  </div>

								<div class="col-lg-3 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">Contact Us</div>
									<div class="footer_links_container">
										<ul>
											<li><a href="index.php">Home</a></li>
											<li><a href="about.php">About</a></li>
											<li><a href="contact.php">Contact</a></li>
										
											<li><a href="courses.php">Courses</a></li>
										
											<li><a href="gallery.php">Gallery</a></li>
											<li><a href="faq.php">FAQs</a></li>
										</ul>
									</div>
								</div>
								
							</div>


						
						</div>
					</div>
				</div>
			</div>


		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/masonry/masonry.js"></script>
<script src="plugins/video-js/video.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/blog.js"></script>
</body>
</html>