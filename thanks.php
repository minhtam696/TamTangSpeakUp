<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="initial-scale=1, width=device-width, minimum-scale=1" />
		<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<title>
			SPEAK UP
		</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="js/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
		<link href="js/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media="print" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<!-- End Style Code -->
		<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/moment.min.js"></script>
		<script type="text/javascript" src="js/fullcalendar/fullcalendar.min.js"></script>
		<!--[if lt IE 10]>
		<script type="text/javascript" src="js/html5shiv.min.js"></script>
		<script type="text/javascript" src="js/respond.min.js"></script>
		<![endif]-->
		<!-- End Scripts Code -->
	</head>
	<body>
		<div class="container-fluid">
			<section class="container" id="main">
				<div class="clearfix row">
					<div class="clearfix">
						<header id="header">
							<a href="index.php">
								<img src="img/logo.png" alt="" title="" />
							</a>
							<div class="pull-right visible-xs">
								<a href="tel:84123456" class="h3" style="color: #fff">
									090 123 456
								</a>
							</div>
						</header>
						<div class="clearfix">
							<div id="Carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
								<ol class="carousel-indicators hidden">
									<li data-target="#Carousel" data-slide-to="0" class="active"></li>
									<li data-target="#Carousel" data-slide-to="1"></li>
								</ol>

								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<img src="img/banner0.jpg" alt="" class="img-responsive" />
									</div>
									
								</div>
								<div class="hidden">
									<a class="left carousel-control" href="#Carousel" role="button" data-slide="prev">
										<span class="fa fa-chevron-left" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" href="#Carousel" role="button" data-slide="next">
										<span class="fa fa-chevron-right" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="clearfix text-center" style="background: #ffa200;">
				<br/>
				<h4>
					Cảm ơn bạn đã tham gia chương trình này, chúng tôi sẽ liên lạc trong thời gian sớm nhất.
				</h4>
				
				<a href="index.php" target="_blank" style="color: #fff;">
					<i class="fa fa-home fa-2x"></i>
				</a>
				<br/>
			</section>
			<footer id="footer" class="clearfix">
				<div class="text-center">
					&copy; 2016 Speak Up. All rights reserved.	
				</div>
				<div id="right_actions">
					<ul>
						<li class="facebook">
							<a target="_blank" href="#">
								<i class="fa fa-2x fa-facebook"></i>
							</a>
						</li>
						<li class="twitter">
							<a target="_blank" href="#">
								<i class="fa fa-2x fa-twitter"></i>
							</a>
						</li>
						<li class="instagram">
							<a target="_blank" href="#">
								<i class="fa fa-2x fa-instagram"></i>
							</a>
						</li>
						<li class="youtube">
							<a target="_blank" href="#">
								<i class="fa fa-2x fa-youtube"></i>
							</a>
						</li>
					</ul>
				</div>
				<div id="hotline" class="text-center visible-xs">
					<a role="button" onclick="scrollToDiv('#formContact')" class="btn btnRegister"style="padding: 6px 40px 6px 15px;">
						liên hệ ngay
					</a>
					<h5>
						<!--<u>hotline</u>: 0-->
					</h5>
				</div>
			</footer>
			<script>
				$(document).ready(function(){
						$('html,body').animate(
							{
								scrollTop: $('#footer').offset().top - 15
							}, 1000);
					});
			</script>
		</div>
	</body>
</html>