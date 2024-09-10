<?php
/**
 * Категория блоков для ACF Denta-Vi
 */
function register_denta_vi_block_category( $categories ) {
    $categories[] = array(
        'slug'  => 'denta-vi',
        'title' => __( 'Denta-Vi', 'denta_vi' ),
        'icon'  => 'smiley',
        'order'  => 1,
    );

    return $categories;
}
add_filter( 'block_categories_all', 'register_denta_vi_block_category', 10, 2 );


/**
 * Регистрация блоков из JSON
 */
function register_acf_blocks_from_json() {
    // Путь к вашему JSON-файлу с блоками
    $json_file = get_stylesheet_directory() . '/inc/custom/acf-blocks.json';
    
    // Проверка, существует ли файл
    if ( file_exists( $json_file ) ) {
        // Получаем содержимое файла
        $json_data = file_get_contents( $json_file );
        
        // Преобразуем JSON в массив
        $blocks = json_decode( $json_data, true );
        
        // Проверяем, есть ли блоки в массиве
        if ( is_array( $blocks ) ) {
            foreach ( $blocks as $block ) {
                // Регистрация каждого блока из JSON
                if( function_exists('acf_register_block_type') ) {
                    acf_register_block_type(array(
                        'name'              => sanitize_title( $block['slug'] ),
                        'title'             => __( $block['name'], 'text-domain' ),
                        'description'       => __( $block['description'], 'text-domain' ),
                        'category'          => $block['category'],
                        'icon'              => $block['icon'],
                        'keywords'          => $block['keywords'],
                        'render_template'   => 'template-parts/blocks/denta-vi/' . $block['render_template'] . '.php',
                    ));
                }
            }
        }
    }
}
add_action('acf/init', 'register_acf_blocks_from_json');
