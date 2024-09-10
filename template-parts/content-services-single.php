<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DSoft_-_Denta
 */

?>

<?php if (get_the_post_thumbnail_url()) { ?>
	<div class="services-details-image">
		<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
	</div>
<?php } ?>

<?php
the_content(
	sprintf(
		wp_kses(
			__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'dsoft-denta'),
			array(
				'span' => array(
					'class' => array(),
				),
			)
		),
		wp_kses_post(get_the_title())
	)
);
?>