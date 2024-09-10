<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DSoft_-_Denta
 */

?>

<!-- Start Footer Area -->
<footer class="footer-area pt-100 pb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="single-footer-widget">
					<h2>
						<a href="index.html">Grin</a>
					</h2>
					<p>Lorem ipsum dolor sit amet consectetur elit sed do eiusmod tempor ut labore dolore magna</p>

					<div class="signature">
						<img src="<?php bloginfo( 'template_url' )?>/assets/images/footer/signature.png" alt="image">
					</div>

					<div class="footer-info">
						<img src="<?php bloginfo( 'template_url' )?>/assets/images/footer/footer-1.jpg" alt="image">
						<h4>Dr. Thomas Albin</h4>
						<span>CEO & Founder</span>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6">
				<div class="single-footer-widget">
					<h3>Useful Link</h3>

					<ul class="quick-links">
						<li>
							<a href="about-us.html">About Us</a>
						</li>
						<li>
							<a href="services.html">Dental Services</a>
						</li>
						<li>
							<a href="dentist.html">Dentist</a>
						</li>
						<li>
							<a href="blog.html">Blog</a>
						</li>
						<li>
							<a href="faq.html">FAQs</a>
						</li>
						<li>
							<a href="privacy-policy.html">Privacy Policy</a>
						</li>
						<li>
							<a href="services.html">Pediatrics</a>
						</li>
						<li>
							<a href="services.html">Woman's Health</a>
						</li>
						<li>
							<a href="terms-of-service.html">Terms Of Use</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6">
				<div class="single-footer-widget">
					<h3>News & Blog</h3>

					<div class="footer-widget-blog">
						<article class="item">
							<a href="blog-details.html" class="thumb">
								<span class="fullimage bg1" role="img"></span>
							</a>
							<div class="info">
								<span>By <a href="blog-right-sidebar.html">Daisy Gabriela</a></span>
								<h4><a href="blog-details.html">Dental Hygiene for Children</a></h4>
							</div>
						</article>

						<article class="item">
							<a href="blog-details.html" class="thumb">
								<span class="fullimage bg2" role="img"></span>
							</a>
							<div class="info">
								<span>By <a href="blog-right-sidebar.html">Ronnie Aaron</a></span>
								<h4><a href="blog-details.html">Regular Checkup for Good Teeth</a></h4>
							</div>
						</article>

						<article class="item">
							<a href="blog-details.html" class="thumb">
								<span class="fullimage bg3" role="img"></span>
							</a>
							<div class="info">
								<span>By <a href="blog-right-sidebar.html">Babatunde Jon</a></span>
								<h4><a href="blog-details.html">Teeth Whitening is Now Popular</a></h4>
							</div>
						</article>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6">
				<div class="single-footer-widget">
					<h3>Contact Information</h3>

					<ul class="footer-information">
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

						<li>
							<i class="flaticon-red-cross"></i>
							Our Location
							<span>35 West Dental Street California 1004</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- End Footer Area -->

<!-- Start Copy Right Area -->
<div class="copyright-area">
	<div class="container">
		<div class="copyright-area-content">
			<p>
				© Grin is proudly created by
				<a href="https://hibootstrap.com" target="_blank">
					HiBootstrap
				</a>
			</p>
		</div>
	</div>
</div>
<!-- End Copy Right Area -->

<!-- Start Go Top Area -->
<div class="go-top">
	<i class='bx bx-up-arrow-alt'></i>
</div>

<?php wp_footer(); ?>

</body>

</html>