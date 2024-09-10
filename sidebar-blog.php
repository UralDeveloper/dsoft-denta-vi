<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DSoft_-_Denta
 * Functions are in the file inc/custom/functions.php
 */

if (! is_active_sidebar('sidebar-1')) {
	return;
}
?>
<aside class="widget-area">
	<?php get_search_form(); ?>

	<?php random_three_posts_widget() ?>

	<div class="widget widget_categories">
		<h3 class="widget-title">Категории статей</h3>
		<?php custom_category_list(); ?>
	</div>

	<?php custom_tag_list() ?>
</aside>