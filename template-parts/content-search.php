<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DSoft_-_Denta
 */

?>

<div id="post-<?php the_ID(); ?>" class="col-lg-4 col-md-6">
	<div class="single-blog">
		<?php if (get_the_post_thumbnail_url()) : ?>
		<div class="blog-image">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
			</a>

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
			<!-- <div class="tag-two"><a href="blog.html"></a></div> -->
		</div>
		<?php endif; ?>
		<div class="blog-content">
			<h3>
				<a href="<?php the_permalink(); ?>""><?php the_title(); ?></a>
			</h3>
			<?php
			// Обрезать текст из get_content() до 160 символов и отчистить от тегов
			$content = get_the_content();
			$content = substr($content, 0, 160);
			$content = strip_tags($content);
			$content = substr($content, 0, strrpos($content, ' '));
			echo '<p>' . $content . '</p>';
			?>
			<a href="<?php the_permalink(); ?>" class="blog-btn">Подробнее</a>
		</div>
	</div>
</div>