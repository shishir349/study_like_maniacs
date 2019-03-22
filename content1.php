<?php
session_start();
$us=$_SESSION['uid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Course Details</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="lms project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../lms/styles/bootstrap4/bootstrap.min.css">
<link href="../lms/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../lms/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../lms/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../lms/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../lms/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../lms/styles/course.css">
<link rel="stylesheet" type="text/css" href="../lms/styles/course_responsive.css">
</head>
<body>
<script>
     var clicks = 0;
    function myFunction() {

        clicks += 1;
        document.getElementById("demo").innerHTML = clicks;


    }
</script>
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
									<li><div class="question">Ping us anytime.</div></li>
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
									<div class="login_button"><a href="#">Welcome onboard:<?php echo $us; ?></a></div>
								</div>
								<div class="top_bar_login ml-auto">
									<div class="logout_button"><a href="index.php"><button class="btn btn-danger">Logout</button></a></div>
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
									
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="../lms/index.php">Home</a></li>
									<li><a href="../lms/about.php">About</a></li>
									<li><a href="../lms/courses.php">Courses</a></li>
									
									
									<li><a href="../lms/contact.php">Contact</a></li>
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
				<li class="menu_mm"><a href="../lms/index.php">Home</a></li>
				<li class="menu_mm"><a href="about.php">About</a></li>
				<li class="menu_mm"><a href="courses.php">Courses</a></li>
			
				
				<li class="menu_mm"><a href="../lms/contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="../lms/index.php">Home</a></li>
								<li><a href="../lms/courses.php">Courses</a></li>
								<li>Course Details</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Course -->

	<div class="course">
		<div class="container">
			<div class="row">

				<!-- Course -->
				<div class="col-lg-8">
					
					<div class="course_container">
						<div class="course_title">Dr. Dhirendra Bahuguna</div>
					
						<!-- Course Image -->
						<div class="course_image"><img src="../srpc2/images/data/yogi.jpg" alt=""></div>

						<!-- Course Tabs -->
						<div class="course_tabs_container">
							<div class="tabs d-flex flex-row align-items-center justify-content-start">
								<div class="tab active">Description</div>
								
								<div class="tab">reviews</div>
							</div>
							<div class="tab_panels">

								<!-- Description -->
								<div class="tab_panel active">
									<div class="tab_panel_title"></div>
									<div class="tab_panel_content">
										<div class="tab_panel_text">
											<p>Dr. Dhirenda Bahuguna has worked in many mediums. He began as a legislative assistant in Delhi, became a lab assisstant, and even coached soccer. At the end of the day though, he has never felt quite as fulfilled and satisfied as he does now after arriving home from teaching a class.

Today, as a Computer Science teacher at Lovely Professional University, Punjab lives for the “ah ha” instants students experience in class.

“To see kids think things through, and try and think about something in a way they haven't before, or become a better writer – that to me is very fulfilling,” Hiemstra said. “From a fulfillment standpoint, a bad day of teaching is better than a good day of lobbying.”

During his time as a lab assisstant, he coached soccer and realized how much he enjoyed working with kids and helping them tackle challenges. He enjoyed the sense of discovery and fun that came from working with kids, and soon enrolled in a teacher preparation program at George Mason University in Virginia.

Because he still had a job in D.C., Hiemstra attended school at night, eventually earning his master's degree in education and transitioning to teaching full time.</p>
											</div>
									
										</div>
										<p>Click here to Subscribe</p>

<button onclick="myFunction()" class="btn btn-success fa fa-2x">Subscribe</button><br>

Total Subscribed:<p id="demo"></p>
														</div>
													</div>

												</div>

											</div>
										</div>
									</div>
								</div>
	</div>
								
								<!-- Reviews -->
								<div class="tab_panel tab_panel_3">
									<div class="tab_panel_title">Student Reviews</div>

									<!-- Rating -->
									<div class="review_rating_container">
										<div class="review_rating">
											<div class="review_rating_num">4.5</div>
											<div class="review_rating_stars">
												<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
											</div>
											<div class="review_rating_text">(28 Ratings)</div>
										</div>
										<div class="review_rating_bars">
											<ul>
												<li><span>5 Star</span><div class="review_rating_bar"><div style="width:90%;"></div></div></li>
												<li><span>4 Star</span><div class="review_rating_bar"><div style="width:75%;"></div></div></li>
												<li><span>3 Star</span><div class="review_rating_bar"><div style="width:32%;"></div></div></li>
												<li><span>2 Star</span><div class="review_rating_bar"><div style="width:10%;"></div></div></li>
												<li><span>1 Star</span><div class="review_rating_bar"><div style="width:3%;"></div></div></li>
											</ul>
										</div>
									</div>
									
									<!-- Comments -->
									<div class="comments_container">
										<ul class="comments_list">
											<li>
												<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
													<div class="comment_image"><div><img src="../lms/images/review.jpg" alt=""></div></div>
													<div class="comment_content">
														<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
															<div class="comment_author"><a href="#">Sahil Singh</a></div>
															<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
															<div class="comment_time ml-auto">1 day ago</div>
														</div>
														<div class="comment_text">
															<p>I find the course and study material uploaded by Dr. Dhirendra Bahuguna awesome. His way of explaining is very simpe and interesting.</p>
														</div>
														<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
															<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
															<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
														</div>
													</div>
												</div>
												<ul>
													<li>
														<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
															<div class="comment_image"><div><img src="images/review2.jpeg" alt=""></div></div>
															<div class="comment_content">
																<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
																	<div class="comment_author"><a href="#">Ayushi Patel</a></div>
																	<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
																	<div class="comment_time ml-auto">3 days ago</div>
																</div>
																<div class="comment_text">
																	<p>Professor's study material is very easy to understand and I follow his teaching on a regular basis.</p>
																</div>
																<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
																	<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>25</span></a></div>
																	<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li>
												<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
													<div class="comment_image"><div><img src="images/review3.jpg" alt=""></div></div>
													<div class="comment_content">
														<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
															<div class="comment_author"><a href="#">Aryan Gupta</a></div>
															<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
															<div class="comment_time ml-auto">1 day ago</div>
														</div>
														<div class="comment_text">
															<p>I would love to meet sir in person and attend one of his lectures.</p>
														</div>
														<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
															<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>9</span></a></div>
															<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
<center>
				<!-- Course Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Feature -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Course Download</div>
							<div class="sidebar_feature">
								<div class="course_price">Free</div>

								<!-- Features -->
								<div class="feature_list">

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>C Programming:</span></div>
										<div class="feature_text ml-auto"><a href="rptTimeTableStudent.pdf">Download letures</a></div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Python:</span></div>
										<div class="feature_text ml-auto"><a href="rptTimeTableStudent.pdf">Download letures</a></div>
									</div>

									<!-- Feature -->
									<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Anaconda:</span></div>
										<div class="feature_text ml-auto"><a href="rptTimeTableStudent.pdf">Download letures</a></div>
									</div>

										<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Ruby:</span></div>
										<div class="feature_text ml-auto"><a href="rptTimeTableStudent.pdf">Download letures</a></div>
									</div>
									
										<div class="feature d-flex flex-row align-items-center justify-content-start">
										<div class="feature_title"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>PHP:</span></div>
										<div class="feature_text ml-auto"><a href="rptTimeTableStudent.pdf">Download letures</a></div>
									</div>
</center>
								</div>
							</div>
						</div>
<br>
					<br>
						
	&nbsp;&nbsp;&nbsp;<div class="row">					
<div class="col-sm-6">
	<iframe width="360" height="315" src="https://www.youtube.com/embed/-CpG3oATGIs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>

<div class="col-sm-6">
	<iframe width="360" height="315" src="https://www.youtube.com/embed/-CpG3oATGIs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
	</div>			
	
	<!-- Newsletter -->
	<?php 
	
	if(!empty($_POST['s2']))
	{
		$email=$_POST['mail'];
		
		
		$z="insert into subscription(mailid)values('$email')";
		$con=mysqli_connect("127.0.0.1","root","","hackathon"); 
		if($con)
		{
			mysqli_query($con,$z);
		}
	}		
			
			?>

	<div class="newsletter">
		<div class="newsletter_background" style="background-image:url(../lms/images/newsletter_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<div class="newsletter_content text-lg-left text-center">
							<div class="newsletter_title">sign up for news and offers</div>
							<div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
						</div>

						<!-- Newsletter Form -->
						<div class="newsletter_form_container ml-lg-auto">
							<form action="course.php" method="post" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
								<input type="email" class="newsletter_input" name="mail" placeholder="Your Email" required="required">
								<input type="submit" class="newsletter_button" name="s2" value="Subscribe">
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

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

<script src="../lms/js/jquery-3.2.1.min.js"></script>
<script src="../lms/styles/bootstrap4/popper.js"></script>
<script src="../lms/styles/bootstrap4/bootstrap.min.js"></script>
<script src="../lms/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../lms/plugins/easing/easing.js"></script>
<script src="../lms/plugins/parallax-js-master/parallax.min.js"></script>
<script src="../lms/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="../lms/js/course.js"></script>
</body>
</html>