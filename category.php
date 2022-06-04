<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../../../favicon.ico">
		<title>Blog Template for Bootstrap</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<!-- Custom styles for this template -->
		<link href="blog.css" rel="stylesheet">
		<style>
		.card-img {
		border-bottom-left-radius: 0px;
		border-bottom-right-radius: 0px;
		}
		.card-title {
		margin-bottom: 0.3rem;
		}
		.cat {
		display: inline-block;
		margin-bottom: 1rem;
		}
		.fa-users {
		margin-left: 1rem;
		}
		.card-footer {
		font-size: 0.8rem;
		}
		/*navbar*/
		.bg-custom-1 {
		background-color: #85144b;
		}
		.bg-custom-2 {
		background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
		}
		/*footer*/
		ul {
		margin: 0px;
		padding: 0px;
		}
		.footer-section {
		background: #151414;
		position: relative;
		}
		.footer-cta {
		border-bottom: 1px solid #373636;
		}
		.single-cta i {
		color: #ffc107;
		font-size: 30px;
		float: left;
		margin-top: 8px;
		}
		.cta-text {
		padding-left: 15px;
		display: inline-block;
		}
		.cta-text h4 {
		color: #fff;
		font-size: 20px;
		font-weight: 600;
		margin-bottom: 2px;
		}
		.cta-text span {
		color: #757575;
		font-size: 15px;
		}
		.footer-content {
		position: relative;
		z-index: 2;
		}
		.footer-pattern img {
		position: absolute;
		top: 0;
		left: 0;
		height: 330px;
		background-size: cover;
		background-position: 100% 100%;
		}
		.footer-logo {
		margin-bottom: 30px;
		}
		.footer-logo img {
		max-width: 200px;
		}
		.footer-text p {
		margin-bottom: 14px;
		font-size: 14px;
		color: #fff;
		line-height: 28px;
		}
		.footer-social-icon span {
		color: #fff;
		display: block;
		font-size: 20px;
		font-weight: 700;
		font-family: 'Poppins', sans-serif;
		margin-bottom: 20px;
		}
		.footer-social-icon a {
		color: #fff;
		font-size: 16px;
		margin-right: 15px;
		}
		.footer-social-icon i {
		height: 40px;
		width: 40px;
		text-align: center;
		line-height: 38px;
		border-radius: 50%;
		}
		.facebook-bg{
		background: #3B5998;
		}
		.twitter-bg{
		background: #55ACEE;
		}
		.google-bg{
		background: #DD4B39;
		}
		.footer-widget-heading h3 {
		color: #fff;
		font-size: 20px;
		font-weight: 600;
		margin-bottom: 40px;
		position: relative;
		}
		.footer-widget-heading h3::before {
		content: "";
		position: absolute;
		left: 0;
		bottom: -15px;
		height: 2px;
		width: 50px;
		background: #ffc107;
		}
		.footer-widget ul li {
		display: inline-block;
		float: left;
		width: 50%;
		margin-bottom: 12px;
		}
		.footer-widget ul li a:hover{
		color: #ffc107;
		}
		.footer-widget ul li a {
		color: #fff;
		text-transform: capitalize;
		}
		.subscribe-form {
		position: relative;
		overflow: hidden;
		}
		.subscribe-form input {
		width: 100%;
		padding: 14px 28px;
		background: #2E2E2E;
		border: 1px solid #2E2E2E;
		color: #fff;
		}
		.subscribe-form button {
		position: absolute;
		right: 0;
		background: #ffc107;
		padding: 13px 20px;
		border: 1px solid #ffc107;
		top: 0;
		}
		.subscribe-form button i {
		color: #fff;
		font-size: 22px;
		transform: rotate(-6deg);
		}
		.copyright-area{
		background: #202020;
		padding: 25px 0;
		}
		.copyright-text p {
		margin: 0;
		font-size: 14px;
		color: #878787;
		}
		.copyright-text p a{
		color: #ffc107;
		}
		.footer-menu li {
		display: inline-block;
		margin-left: 20px;
		}
		.footer-menu li:hover a{
		color: #ffc107;
		}
		.footer-menu li a {
		font-size: 14px;
		color: #878787;
		}
		ul, li {
		list-style: none;
		}
		h5{
		margin: 0;
		}
		h3{
		color: #2996bd;
		margin: 10px 0px 15px;
		padding-bottom:10px;
		padding-left: 10px;
		border-left: 5px solid #32aae1;
		}
		.sidebar.widget {
		/*background: #f2f2f2;*/
		border: 1px solid #ddd;
		padding: 10px 20px;
		}
		.sidebar.widget ul {
		margin: 0px;
		padding: 0;
		overflow: hidden;
		}
		.sidebar.widget ul li {
		overflow: hidden;
		font-size: 14px;
		margin-bottom: 20px;
		border-bottom: 1px dashed #ddd;
		padding-bottom: 20px
		}
		.sidebar-thumb{
		float: left;
		overflow: hidden;
		margin-right: 15px;
		}
		.sidebar-thumb img{
		background: #fff;
		border: 1px dashed #e0e0e0;
		padding: 6px;
		height: 75px;
		width: 75px;
		-webkit-border-radius: 100px;
		-moz-border-radius: 100px;
		border-radius: 100px;
		}
		.sidebar-content h5{
		font-size: 16px;
		cursor: pointer;
		line-height: 24px;
		}
		.sidebar-content h5 a:hover{
		color: #2996bd;
		}
		.sidebar-content h5 a{
		color: #202020;
		outline: 0 none;
		text-decoration: none;
		font-weight: bold
		}
		.sidebar-meta{
		margin-top: 10px;
		}
		.sidebar-meta span{
		color: #2e2e2e;
		}
		.sidebar-meta span.time{
		margin-right: 10px;
		}
		.sidebar-meta span i{
		color: #2996bd
		}
		</style>
	</head>
<body>
	<nav class="navbar navbar-dark bg-info navbar-expand-sm">
		<a class="navbar-brand" href="#">
			<img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/logo_white.png" width="30" height="30" alt="logo">
			BlogYoun
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbar-list-4">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Best</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Catalogue</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Classification</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Content</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Digital</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Email</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Library</a>
				</li>
			</ul>
		</div>
	</nav>
		
		<div class="blog-header mt-5">
			<div class="container">
        <div class=""><i class="fa fa-home text-info"></i> 
        <a href="#" class="text-secondary text-decoration-none">home</a><a href="#" class="text-secondary text-decoration-none">/Hotel</a>
      </div>
				<h1 class="blog-title mt-2">Hotel</h1>
				<p class="lead blog-description">An example blog template built with Bootstrap.</p>
			</div>
		</div>

<div class="container">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-8 blog-main">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 blog-main">
					<div class="card">
						<img class="card-img img-responsive" src="https://content.r9cdn.net/res/images/horizon/ui/seo/common/seo_hotels.jpg?v=aeb8c67f83d5b9fd53ca97055fc8402800bf3ce4&cluster=4" alt="Bologna" height="250">
						<div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
							<div class="views"><i class="fa fa-user text-info"></i> Admin</div>
							<div class="stats">
								<i class="fa fa-clock-o text-info"></i> Oct 20, 12:45PM
							</div>
						</div>

						<div class="card-body">
							<h4 class="card-title">Pasta with Prosciutto</h4>
							<p class="card-text text-l">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="#" class="btn btn-sm btn-info">Read More</a>
						</div>
						
					</div>
					</div><!-- /.blog-main -->
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 blog-main">
						<div class="card">
							<img class="card-img" src="https://content.r9cdn.net/res/images/horizon/ui/seo/common/seo_hotels.jpg?v=aeb8c67f83d5b9fd53ca97055fc8402800bf3ce4&cluster=4" alt="Bologna" height="250">
							<div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
							<div class="views"><i class="fa fa-user text-info"></i> Admin</div>
							<div class="stats">
								<i class="fa fa-clock-o text-info"></i> Oct 20, 12:45PM
							</div>
						</div>
							<div class="card-body">
								<h4 class="card-title">Pasta with Prosciutto</h4>
								<p class="card-text text-l">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
								<a href="#" class="btn btn-sm btn-info">Read More</a>
							</div>
							
						</div>
						</div><!-- /.blog-main -->
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 blog-main">
							<div class="card">
								<img class="card-img" src="https://content.r9cdn.net/res/images/horizon/ui/seo/common/seo_hotels.jpg?v=aeb8c67f83d5b9fd53ca97055fc8402800bf3ce4&cluster=4" alt="Bologna" height="250">
								<div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
							<div class="views"><i class="fa fa-user text-info"></i> Admin</div>
							<div class="stats">
								<i class="fa fa-clock-o text-info"></i> Oct 20, 12:45PM
							</div>
						</div>
								<div class="card-body">
									<h4 class="card-title">Pasta with Prosciutto</h4>
									<p class="card-text text-l">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.</p>
									<a href="#" class="btn btn-sm btn-info">Read More</a>
								</div>
								
							</div>
							</div><!-- /.blog-main -->
							<div class="col-12 col-sm-12 col-md-12 col-lg-12 blog-main">
								<div class="card">
									<img class="card-img" src="https://content.r9cdn.net/res/images/horizon/ui/seo/common/seo_hotels.jpg?v=aeb8c67f83d5b9fd53ca97055fc8402800bf3ce4&cluster=4" alt="Bologna" height="250">
									<div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
							<div class="views"><i class="fa fa-user text-info"></i> Admin</div>
							<div class="stats">
								<i class="fa fa-clock-o text-info"></i> Oct 20, 12:45PM
							</div>
						</div>
									<div class="card-body">
										<h4 class="card-title">Pasta with Prosciutto</h4>
										<p class="card-text text-l">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.</p>
										<a href="#" class="btn btn-sm btn-info">Read More</a>
									</div>
									
								</div>
								</div><!-- /.blog-main -->
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 blog-main">

									<div class="card">
										<div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
							<div class="views"><i class="fa fa-user text-info"></i> Admin</div>
							<div class="stats">
								<i class="fa fa-clock-o text-info"></i> Oct 20, 12:45PM
							</div>
						</div>
										<div class="card-body">
											<h4 class="card-title">Pasta with Prosciutto</h4>
											<p class="card-text text-l">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua.</p>
											<a href="#" class="btn btn-sm btn-info">Read More</a>
										</div>
										
									</div>
									</div><!-- /.blog-main -->
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 blog-main">
										<div class="card">
											<img class="card-img" src="https://content.r9cdn.net/res/images/horizon/ui/seo/common/seo_hotels.jpg?v=aeb8c67f83d5b9fd53ca97055fc8402800bf3ce4&cluster=4" alt="Bologna" height="250">
											<div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
							<div class="views"><i class="fa fa-user text-info"></i> Admin</div>
							<div class="stats">
								<i class="fa fa-clock-o text-info"></i> Oct 20, 12:45PM
							</div>
						</div>
											<div class="card-body">
												<h4 class="card-title">Pasta with Prosciutto</h4>
												<p class="card-text text-l">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua.</p>
												<a href="#" class="btn btn-sm btn-info">Read More</a>
											</div>
											
										</div>
										</div><!-- /.blog-main -->
										<div class="col-12 col-sm-12 col-md-12 col-lg-12 blog-main">
											<div class="card">
												<img class="card-img" src="https://content.r9cdn.net/res/images/horizon/ui/seo/common/seo_hotels.jpg?v=aeb8c67f83d5b9fd53ca97055fc8402800bf3ce4&cluster=4" alt="Bologna" height="250">
												<div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
							<div class="views"><i class="fa fa-user text-info"></i> Admin</div>
							<div class="stats">
								<i class="fa fa-clock-o text-info"></i> Oct 20, 12:45PM
							</div>
						</div>
												<div class="card-body">
													<h4 class="card-title">Pasta with Prosciutto</h4>
													<p class="card-text text-l">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.</p>
													<a href="#" class="btn btn-sm btn-info">Read More</a>
												</div>
												
											</div>
											</div><!-- /.blog-main -->
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 blog-main">
												<div class="card">
													<img class="card-img" src="https://content.r9cdn.net/res/images/horizon/ui/seo/common/seo_hotels.jpg?v=aeb8c67f83d5b9fd53ca97055fc8402800bf3ce4&cluster=4" alt="Bologna" height="250">
													<div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
							<div class="views"><i class="fa fa-user text-info"></i> Admin</div>
							<div class="stats">
								<i class="fa fa-clock-o text-info"></i> Oct 20, 12:45PM
							</div>
						</div>
													<div class="card-body">
														<h4 class="card-title">Pasta with Prosciutto</h4>
														<p class="card-text text-l">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua.</p>
														<a href="#" class="btn btn-sm btn-info">Read More</a>
													</div>
													
												</div>
												</div><!-- /.blog-main -->
											</div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center mb-3">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
										</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-4 ">
	<div class="sidebar widget">
		<h3>Recent Post</h3>
		<ul>
			<li>
				<div class="sidebar-thumb">
					<img class="animated rollIn" src="https://content.r9cdn.net/res/images/horizon/ui/seo/common/seo_hotels.jpg?v=aeb8c67f83d5b9fd53ca97055fc8402800bf3ce4&cluster=4" alt="" />
					</div><!-- .Sidebar-thumb -->
					<div class="sidebar-content">
						<h5 class="animated bounceInRight"><a href="#">The Complete Guide to Medium for Marketers</a></h5>
						</div><!-- .Sidebar-thumb -->
						<div class="sidebar-meta">
							<span class="time" ><i class="fa fa-clock-o"></i> Aug 27, 2015</span>
							<!-- <span class="comment"><i class="fa fa-comment"></i> 10 comments</span> -->
							</div><!-- .Sidebar-meta ends here -->
							</li><!-- .Li ends here -->
							<li>
								<div class="sidebar-thumb">
									<img class="animated rollIn" src="https://content.r9cdn.net/res/images/horizon/ui/seo/common/seo_hotels.jpg?v=aeb8c67f83d5b9fd53ca97055fc8402800bf3ce4&cluster=4" alt="" />
									</div><!-- .Sidebar-thumb -->
									<div class="sidebar-content">
										<h5 class="animated bounceInRight"><a href="#">The Complete Guide to Medium for Marketers</a></h5>
										</div><!-- .Sidebar-thumb -->
										<div class="sidebar-meta">
											<span class="time" ><i class="fa fa-clock-o"></i> Aug 27, 2015</span>
											<!-- <span class="comment"><i class="fa fa-comment"></i> 10 comments</span> -->
											</div><!-- .Sidebar-meta ends here -->
											</li><!-- .Li ends here -->
											<li>
												<div class="sidebar-thumb">
													<img class="animated rollIn" src="https://content.r9cdn.net/res/images/horizon/ui/seo/common/seo_hotels.jpg?v=aeb8c67f83d5b9fd53ca97055fc8402800bf3ce4&cluster=4" alt="" />
													</div><!-- .Sidebar-thumb -->
													<div class="sidebar-content">
														<h5 class="animated bounceInRight"><a href="#">The Complete Guide to Medium for Marketers</a></h5>
														</div><!-- .Sidebar-thumb -->
														<div class="sidebar-meta">
															<span class="time" ><i class="fa fa-clock-o"></i> Aug 27, 2015</span>
															<!-- <span class="comment"><i class="fa fa-comment"></i> 10 comments</span> -->
															</div><!-- .Sidebar-meta ends here -->
															</li><!-- .Li ends here -->
															</ul><!-- .Ul ends here -->
															</div><!-- .Widget ends here -->
															<div class="sidebar widget mt-5">
																<h3>Categories</h3>
																<ul class="">
																	<li>
																		<div class="sidebar-meta">
																			<span class="time" ><i class="fa fa-angle-right"></i><a href="#" class="text-dark text-decoration-none"> Home</a></span>
																		</div>
																	</li>
																	<li>
																		<div class="sidebar-meta">
																			<span class="time" ><i class="fa fa-angle-right"></i><a href="#" class="text-dark text-decoration-none"> about</a></span>
																		</div>
																	</li>
																	<li>
																		<div class="sidebar-meta">
																			<span class="time" ><i class="fa fa-angle-right"></i><a href="#" class="text-dark text-decoration-none"> services</a></span>
																		</div>
																	</li>
																	<li>
																		<div class="sidebar-meta">
																			<span class="time" ><i class="fa fa-angle-right"></i><a href="#" class="text-dark text-decoration-none"> portfolio</a></span>
																		</div>
																	</li>
																	<li>
																		<div class="sidebar-meta">
																			<span class="time" ><i class="fa fa-angle-right"></i><a href="#" class="text-dark text-decoration-none"> Expert Team</a></span>
																		</div>
																	</li>
																	<li>
																		<div class="sidebar-meta">
																			<span class="time" ><i class="fa fa-angle-right"></i><a href="#" class="text-dark text-decoration-none"> Contact us</a></span>
																		</div>
																	</li>
																</ul>
																</div><!-- .Widget ends here -->
																</div><!-- .Col ends here -->
																</div><!-- /.row -->
																</div><!-- /.container -->
																<footer class="footer-section mt-5 bg-info">
																	<div class="container">
																		<div class="footer-content pt-5 pb-5">
																			<div class="row">
																				<div class="col-xl-4 col-lg-4 mb-50">
																					<div class="footer-widget">
																						<div class="footer-logo">
																							<a href="index.html"><img src="https://i.ibb.co/QDy827D/ak-logo.png" class="img-fluid" alt="logo"></a>
																						</div>
																						<div class="footer-text">
																							<p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
																							elit,Lorem ipsum dolor sit amet.</p>
																						</div>
																						<div class="footer-social-icon">
																							<span>Follow us</span>
																							<a href="#"><i class="fa fa-facebook-f facebook-bg"></i></a>
																							<a href="#"><i class="fa fa-twitter twitter-bg"></i></a>
																							<a href="#"><i class="fa fa-google-plus google-bg"></i></a>
																						</div>
																					</div>
																				</div>
																				<div class="col-xl-4 col-lg-4 col-md-6 mb-30">
																					<div class="footer-widget">
																						<div class="footer-widget-heading">
																							<h3>Useful Links</h3>
																						</div>
																						<ul>
																							<li><a href="#">Home</a></li>
																							<li><a href="#">about</a></li>
																							<li><a href="#">services</a></li>
																							<li><a href="#">portfolio</a></li>
																							<li><a href="#">Contact</a></li>
																							<li><a href="#">About us</a></li>
																							<li><a href="#">Our Services</a></li>
																							<li><a href="#">Expert Team</a></li>
																							<li><a href="#">Contact us</a></li>
																							<li><a href="#">Latest News</a></li>
																						</ul>
																					</div>
																				</div>
																				<div class="col-xl-4 col-lg-4 col-md-6 mb-50">
																					<div class="footer-widget">
																						<div class="footer-widget-heading">
																							<h3>Subscribe</h3>
																						</div>
																						<div class="footer-text mb-25">
																							<p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
																						</div>
																						<div class="subscribe-form">
																							<form action="#">
																								<input type="text" placeholder="Email Address">
																								<button><i class="fa fa-telegram"></i></button>
																							</form>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="copyright-area">
																		<div class="container">
																			<div class="row">
																				<div class="col-xl-6 col-lg-6 text-center text-lg-left">
																					<div class="copyright-text">
																						<p>Copyright &copy; 2018, All Right Reserved <a href="https://codepen.io/anupkumar92/">Tecyoun</a></p>
																					</div>
																				</div>
																				<div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
																					<div class="footer-menu">
																						<ul>
																							<li><a href="#">Home</a></li>
																							<li><a href="#">Terms</a></li>
																							<li><a href="#">Privacy</a></li>
																							<li><a href="#">Policy</a></li>
																							<li><a href="#">Contact</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</footer>
																<!-- Bootstrap core JavaScript
																================================================== -->
																<!-- Placed at the end of the document so the pages load faster -->
																<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
																<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
																<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
																<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
																<script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
															</body>
														</html>