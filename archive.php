<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DSoft_-_Denta
 */

get_header();
?>
<div class="page-banner-area">
	<div class="container">
		<div class="page-banner-content">
			<h2><?php the_archive_title(); ?></h2>
			<?php custom_breadcrumbs(); ?>
		</div>
	</div>
</div>

<section class="blog-area pt-100 pb-100">
	<div class="container">

		<div class="row">
			<?php if (have_posts()) :
				while (have_posts()) :
					the_post();
					get_template_part('template-parts/content', 'posts-list');
				endwhile;
			?>
				<div class="col-lg-12 col-md-12">
					<div class="pagination-area">
						<?php
						// Получаем текущую пагинацию
						$big = 999999999; // уникальное число для замены
						$pagination_links = paginate_links(array(
							'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
							'format'    => '?paged=%#%',
							'current'   => max(1, get_query_var('paged')),
							'total'     => $wp_query->max_num_pages,
							'type'      => 'array',
							'prev_text' => "<i class='flaticon-left-arrow'></i>",
							'next_text' => "<i class='flaticon-right-arrow'></i>",
						));

						if ($pagination_links) : ?>
							<?php foreach ($pagination_links as $link) : ?>
								<?php if (strpos($link, 'current') !== false) : ?>
									<span class="page-numbers current" aria-current="page"><?php echo strip_tags($link); ?></span>
								<?php else : ?>
									<?php echo str_replace('page-numbers', 'page-numbers', $link); ?>
								<?php endif; ?>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
			<?php
			else :
				get_template_part('template-parts/content', 'none');
			endif; ?>
		</div>
	</div>
</section>
<?php
get_footer();
