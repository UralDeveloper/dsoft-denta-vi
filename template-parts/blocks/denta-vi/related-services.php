<?php

/**
 * Block template file: template-parts/blocks/denta-vi/related-services.php
 *
 * Denta Vi Related Services Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'denta-vi-related-services-' . $block['id'];
if (! empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-denta-vi-related-services services-details-overview';
if (! empty($block['className'])) {
    $classes .= ' ' . $block['className'];
}
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
    <div class="row">
        <?php $block_devi_soputstvuyushhie_uslugi = get_field('block_devi-soputstvuyushhie_uslugi'); ?>
        <?php if ($block_devi_soputstvuyushhie_uslugi) : ?>
            <?php foreach ($block_devi_soputstvuyushhie_uslugi as $post_id) : ?>
                <?php
                $thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
                $title = get_the_title($post_id);
                $permalink = get_permalink($post_id);
                ?>

                <div class="col-lg-6 col-md-6">
                    <div class="single-gallery">
                        <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($title); ?>">

                        <div class="content">
                            <h3>
                                <a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a>
                            </h3>

                            <div class="icon">
                                <a href="<?php echo esc_url($permalink); ?>"><i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>