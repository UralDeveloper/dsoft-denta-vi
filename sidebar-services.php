<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DSoft_-_Denta
 */

if (! is_active_sidebar('sidebar-1')) {
	return;
}
?>
<aside class="widget-area">
	<?php get_search_form(); ?>

	<?php random_three_posts_widget() ?>

	<div class="widget widget_categories">
		<h3 class="widget-title">Категории услуг</h3>
		<?php custom_services_category_list(); ?>
	</div>

	<?php custom_tag_list() ?>
</aside>