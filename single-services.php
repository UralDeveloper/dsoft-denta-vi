<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DSoft_-_Denta
 */

get_header();
?>

<!-- Start Page Banner -->
<div class="page-banner-area">
	<div class="container">
		<div class="page-banner-content">
			<h1><?php the_title(); ?></h1>
			<?php custom_breadcrumbs(); ?>
		</div>
	</div>
</div>

<section class="services-details-area ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<?php while (have_posts()) :
					the_post();
					get_template_part('template-parts/content', 'services-single');
				endwhile; ?>
			</div>

			<div class="col-lg-4 col-md-12">
				<?php get_sidebar('services'); ?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
