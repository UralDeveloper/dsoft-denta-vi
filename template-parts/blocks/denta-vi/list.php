<?php
/**
 * Block template file: template-parts/blocks/denta-vi/list.php
 *
 * Denta Vi List Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'denta-vi-list-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-denta-vi-list';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>



<ul id="<?php echo esc_attr( $id ); ?>" class="services-details-list <?php echo esc_attr( $classes ); ?>">
    <?php $text = get_field( 'block_devi-list' ); ?>
    <?php
        $list = split_by_newline($text);
        foreach ($list as $item => $value) {
            echo '<li><i class="flaticon-check"></i>' . $value . '</li>';
        }
    ?>
</ul>