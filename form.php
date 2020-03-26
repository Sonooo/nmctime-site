<!DOCTYPE html>
<html lang="zxx">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>NMC TIME MACHINES - official website</title>
	<link rel="shortcut icon" type="image/png" href="css/img/logo.jpg">
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="nmctime,clocks,time RECORDERS"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);
		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	<!-- Custom-Files -->
	<!-- Bootstrap-Core-Css -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Style-Css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Font-Awesome-Icons-Css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- //Custom-Files -->
	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->
<style>
      body{
        background: #1287A5;
      }
    </style>
</head>
<body>
	<!-- header -->
	<?php include 'header.php';?>
	<!-- //header -->
	<!-- banner -->
	<div class="banner-agile-2">
		<!-- navigation -->
		<?php include 'nav.php';?>
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">ContactForm</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->
	<!-- Contactform -->
	<div class="form-w3l py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Contact<span class="font-weight-bold">Us</span>
			</h3>
			<div class="register-form pt-md-4">
				<form name="cantactform" method="POST" data-netlify="true">
					<div class="styled-input form-group">
						<input type="text" class="form-control" placeholder="Your Name" name="Your name" required="">
					</div>
					
					
					<div class="styled-input form-group">
						<input type="email" class="form-control" placeholder="Your E-mail" name="Email" required="">
					</div>
					<div class="styled-input form-group">
						<input type="text" class="form-control" placeholder="Phone Number" name="Phone" required="">
					</div>
					
					<div class="styled-input">
						<label class="header-admin-form font-weight-bold text-dark my-3">Your Address</label>
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Address" title="Please enter your Address" required="">
						</div>
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Landmark" title="Please enter your Landmark" required="">
						</div>
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="City" title="Please enter your City" required="">
						</div>
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Pin Code" title="Please enter your Pin Code" required="">
						</div>
					</div>
					<div class="form-group">
						<label for="comment">message
						:</label>
						<textarea class="form-control" rows="5" id="comment"></textarea>
					  </div>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>
	<!-- Contactform -->
	<!-- brands -->
	
	<!-- //brands -->
	<!-- footer -->
	<?php include 'footer.php';?>
	<!-- //footer -->
	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/edulearn.js"></script>
	<!-- //Js files -->
</body>
</html>