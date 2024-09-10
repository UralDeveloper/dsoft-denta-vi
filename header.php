<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DSoft_-_Denta
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<!-- Start Preloader Area -->
	<div class="preloader">
		<div class="loader">
			<div class="sbl-half-circle-spin"></div>
		</div>
	</div>
	<!-- End Preloader Area -->

	<!-- Start Top Header Area -->
	<div class="top-header-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12">
					<ul class="top-header-information">
						<li>
							<i class='bx bxs-map'></i>
							35 West Dental Street, California 1004
						</li>

						<li>
							<i class='bx bx-envelope-open'></i>
							<a href="mailto:support@grin.com">support@grin.com</a>
						</li>
					</ul>
				</div>

				<div class="col-lg-6 col-md-12">
					<ul class="top-header-optional">
						<li>
							<a href="https://www.facebook.com/" target="_blank">
								<i class='bx bxl-facebook'></i>
							</a>
							<a href="https://twitter.com/?lang=en" target="_blank">
								<i class='bx bxl-twitter'></i>
							</a>
							<a href="https://www.linkedin.com/" target="_blank">
								<i class='bx bxl-linkedin'></i>
							</a>
							<a href="https://www.instagram.com/" target="_blank">
								<i class='bx bxl-instagram'></i>
							</a>
						</li>

						<li class="languages-list">
							<select>
								<option value="1">English</option>
								<option value="2">العربيّة</option>
								<option value="3">Deutsch</option>
								<option value="3">Português</option>
								<option value="3">简体中文</option>
							</select>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End Top Header Area -->

	<!-- Start Middle Header Area -->
	<div class="middle-header-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4 col-md-12">
					<div class="middle-header">
						<h1>
							<a href="index.html">Grin</a>
						</h1>
					</div>
				</div>

				<div class="col-lg-8 col-md-12">
					<ul class="middle-header-content">
						<li>
							<i class="flaticon-emergency-call"></i>
							Call Today
							<span><a href="tel:088123654987">+088 123 654 987</a></span>
						</li>

						<li>
							<i class="flaticon-wall-clock"></i>
							Open Hour
							<span>09:00 AM to 18:00 PM</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End Middle Header Area -->

	<!-- Start Navbar Area -->
	<div class="navbar-area">
		<div class="main-responsive-nav">
			<div class="container">
				<div class="main-responsive-menu">
					<div class="logo">
						<a href="index.html">
							<img src="assets/images/logo.png" class="main-logo" alt="logo">
							<img src="assets/images/logo-2.png" class="white-logo" alt="logo">
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="main-navbar">
			<div class="container">
				<nav class="navbar navbar-expand-md navbar-light">
					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="#" class="nav-link">
									Home
									<i class='bx bx-caret-down'></i>
								</a>

								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="index.html" class="nav-link">Child Care Hospital</a>
									</li>

									<li class="nav-item">
										<a href="index-2.html" class="nav-link">Hospital Services</a>
									</li>

									<li class="nav-item">
										<a href="index-3.html" class="nav-link">Diagnostic Center</a>
									</li>

									<li class="nav-item">
										<a href="index-4.html" class="nav-link">Dental Tourism</a>
									</li>

									<li class="nav-item">
										<a href="index-5.html" class="nav-link">Skin Care Hospital</a>
									</li>

									<li class="nav-item">
										<a href="index-6.html" class="nav-link">Eye Care Hospital</a>
									</li>

									<li class="nav-item">
										<a href="index-7.html" class="nav-link">Covid 19 Vaccination Center</a>
									</li>

									<li class="nav-item">
										<a href="index-8.html" class="nav-link">Hospital Website</a>
									</li>
									<li class="nav-item">
										<a href="index-9.html" class="nav-link">Eye Care Hospital Slider</a>
									</li>
									<li class="nav-item">
										<a href="index-10.html" class="nav-link">Video Home</a>
									</li>
									<li class="nav-item">
										<a href="index-11.html" class="nav-link">Emergency & Trauma Care</a>
									</li>
									<li class="nav-item">
										<a href="index-12.html" class="nav-link">Orthopedic Care</a>
									</li>
								</ul>
							</li>

							<li class="nav-item">
								<a href="about-us.html" class="nav-link">About Us</a>
							</li>

							<li class="nav-item">
								<a href="#" class="nav-link">
									Dentist
									<i class='bx bx-caret-down'></i>
								</a>

								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="dentist.html" class="nav-link">Dentist</a>
									</li>

									<li class="nav-item">
										<a href="dentist-details.html" class="nav-link">Dentist Details</a>
									</li>
								</ul>
							</li>

							<li class="nav-item">
								<a href="#" class="nav-link">
									Services
									<i class='bx bx-caret-down'></i>
								</a>

								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="services.html" class="nav-link">Services</a>
									</li>

									<li class="nav-item">
										<a href="services-details.html" class="nav-link">Services Details</a>
									</li>
								</ul>
							</li>

							<li class="nav-item">
								<a href="#" class="nav-link">
									Pages
									<i class='bx bx-caret-down'></i>
								</a>

								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="about-us.html" class="nav-link">About Us</a>
									</li>

									<li class="nav-item">
										<a href="appointment.html" class="nav-link">Appointment</a>
									</li>

									<li class="nav-item">
										<a href="pricing.html" class="nav-link">Pricing</a>
									</li>

									<li class="nav-item">
										<a href="#" class="nav-link">
											Shop
											<i class='bx bx-chevron-down'></i>
										</a>

										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="products.html" class="nav-link">Products</a>
											</li>
											<li class="nav-item">
												<a href="cart.html" class="nav-link">Cart</a>
											</li>
											<li class="nav-item">
												<a href="checkout.html" class="nav-link">Checkout</a>
											</li>
											<li class="nav-item">
												<a href="product-details.html" class="nav-link">Product Details</a>
											</li>
										</ul>
									</li>

									<li class="nav-item">
										<a href="testimonials.html" class="nav-link">Testimonials</a>
									</li>

									<li class="nav-item">
										<a href="gallery.html" class="nav-link">Gallery</a>
									</li>

									<li class="nav-item">
										<a href="login.html" class="nav-link">Login</a>
									</li>

									<li class="nav-item">
										<a href="register.html" class="nav-link">Register</a>
									</li>

									<li class="nav-item">
										<a href="faq.html" class="nav-link">FAQ</a>
									</li>

									<li class="nav-item">
										<a href="error-404.html" class="nav-link">404 Error</a>
									</li>

									<li class="nav-item">
										<a href="terms-of-service.html" class="nav-link">Terms of Service</a>
									</li>

									<li class="nav-item">
										<a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
									</li>

									<li class="nav-item">
										<a href="coming-soon.html" class="nav-link">Coming Soon</a>
									</li>
								</ul>
							</li>

							<li class="nav-item">
								<a href="#" class="nav-link active">
									Blog
									<i class='bx bx-caret-down'></i>
								</a>

								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="blog.html" class="nav-link">Blog</a>
									</li>

									<li class="nav-item">
										<a href="blog-details.html" class="nav-link active">Blog Details</a>
									</li>
								</ul>
							</li>

							<li class="nav-item">
								<a href="contact-us.html" class="nav-link">Contact Us</a>
							</li>
						</ul>

						<div class="others-options d-flex align-items-center">
							<div class="option-item">
								<div class="search-btn">
									<a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">
										<i class="flaticon-search"></i>
									</a>
								</div>
							</div>

							<div class="option-item">
								<div class="navbar-btn">
									<a href="appointment.html" class="default-btn">Book Appointment</a>
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>

		<div class="others-option-for-responsive">
			<div class="container">
				<div class="dot-menu">
					<div class="inner">
						<div class="circle circle-one"></div>
						<div class="circle circle-two"></div>
						<div class="circle circle-three"></div>
					</div>
				</div>

				<div class="container">
					<div class="option-inner">
						<div class="others-options d-flex align-items-center">
							<div class="option-item">
								<div class="search-btn">
									<a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">
										<i class="flaticon-search"></i>
									</a>
								</div>
							</div>

							<div class="option-item">
								<div class="navbar-btn">
									<a href="appointment.html" class="default-btn">Book Appointment</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Navbar Area -->

	<!-- Search Modal -->
	<div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-bs-dismiss="modal">
						<i class='bx bx-x'></i>
					</button>
				</div>

				<div class="modal-body">
					<form class="modal-search-form">
						<input type="search" class="search-field" placeholder="Search...">

						<button type="submit"><i class='bx bx-search-alt'></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Search Modal -->