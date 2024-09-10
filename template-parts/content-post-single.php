<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DSoft_-_Denta
 */

?>
<div id="post-<?php the_ID(); ?>" class="blog-details-desc">
	<?php if (get_the_post_thumbnail_url()) : ?>
	<div class="article-image">
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

		<div class="tag"><?php echo get_the_date( 'j M' ); ?></div>
		<?php if (has_category()) :
			$categories = get_the_category();
			$separator = ' ';
			$output = '';
			if ( ! empty( $categories ) ) {
				foreach ( $categories as $category ) {
					$output .= '<div class="tag-two">';
					$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
					$output .= '</div>';
				}
			}
			echo trim( $output, $separator );
		endif; ?>
	</div>
	<?php endif; ?>

	<div class="article-content">
		<?php 
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
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
	</div>
</div>