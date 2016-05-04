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
					<div class="col-sm-8">
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
										<div class="move_href">
											<a href="#" class="btn btnRegister btnmore">
												tìm hiểu chương trình học
											</a>
										</div>
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
						<div class="clearfix calendar">
							<h3 class="text-center" style="color: #eb2127">
								Chọn buổi TAILORED COFFEE
							</h3>
							<div id="calendar" class="clearfix"></div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="div_contact">
							<div id="formContact" class="col-sm-12">
								<header class="text-center">
									<h3>đăng ký</h3>
									<p class="h5">
										THAM GIA TAILORED COFFEE
									</p>
								
								</header>
								<form>
									<div class="clearfix" style="padding-top:15px;">
										<div class="form-group">
											<label for="txtFirstName">
												&nbsp;&nbsp;Họ
											</label>
											<input type="text" name="txtFirstName" id="txtFirstName" class="form-control" required/>
										</div>
										<div class="form-group">
											<label for="txtLastName">
												&nbsp;&nbsp;Tên
											</label>
											<input type="text" name="txtLastName" id="txtLastName" class="form-control" required/>
										</div>
										<div class="form-group">
											<label for="txtPhone">
												&nbsp;&nbsp;Số điện thoại
											</label>
											<input type="number" min="0" name="txtPhone" id="txtPhone" class="form-control" required/>
										</div>
										<div class="form-group">
											<label for="txtEmail">
												&nbsp;&nbsp;Email
											</label>
											<input type="email" name="txtEmail" id="txtEmail" class="form-control" required/>
										</div>
										<div class="form-group">
											<label for="txtSchool">
												&nbsp;&nbsp;Chọn trường
											</label>
											<select id="txtSchool" class="form-control" required>
												<option value="">
													Chọn trường
												</option>
												<option value="SUV-Cao Thắng-HCM">
													SUV-Cao Thắng-HCM
												</option>
											</select>
										</div>
										<div class="form-group">
											<label for="txtDate">
												&nbsp;&nbsp;Ngày tham dự
											</label>
											<input type="text" name="txtDate" id="txtDate" class="form-control" placeholder="Vui lòng chọn lịch bên trái" disabled required/>
										</div>
										<div class="form-group">
											<div class="checkbox">
												<label><input type="checkbox">Cho phép xử lý các dữ liệu cá nhân cho mục đích tiếp thị</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox">Đồng ý nhận thông tin thương mại qua e-mail</label>
											</div>
										</div>
									</div>
									<div class="clearfix text-center">
										<button type="submit" class="btn btnRegister" style="width: 100%">
											GỬI THÔNG TIN
										</button>
									</div>
								</form>
							</div>
						</div>
						<div class="clearfix">
							<div id="information">
								Chi tiết
							</div>
						</div>
					</div>
				</div>
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
		</div>
		<script type="text/javascript" src="js/speakup.js"></script>
	</body>
</html>