<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package DSoft_-_Denta
 */

get_header();
?>
<section class="error-area ptb-100">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="error-content">
					<img src="<?php echo esc_url(get_template_directory_uri());  ?>/assets/images/404.png" alt="error">

					<h3><?php esc_html_e('Упс! Эта страница не найдена.', 'dsoft-denta'); ?></h3>
					<p>Страница, которую вы ищете, могла быть удалена, ее название изменилось или она временно недоступна.</p>

					<a href="<?php echo esc_url(home_url('/')); ?>" class="default-btn"><?php esc_html_e('На главную', 'dsoft-denta'); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
