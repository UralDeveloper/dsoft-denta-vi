<?php
/**
 * Хлебные крошки
 * @function custom_breadcrumbs()
 */
function custom_breadcrumbs() {
    // Не выводим хлебные крошки на главной странице
    if (is_front_page()) {
        return;
    }

    // Начало вывода хлебных крошек
    echo '<ul class="pages-list">';

    // Ссылка на главную страницу
    echo '<li><a href="' . home_url() . '">Главная</a></li>';

    // Если это категория или пост в категории
    if (is_category() || is_single()) {
        $category = get_the_category();
        if (!empty($category)) {
            // Получаем ссылку на категорию
            if (is_single()) {
                echo '<li>';
                echo '<a href="' . get_category_link($category[0]->cat_ID) . '">' . $category[0]->cat_name . '</a>';
                echo '</li>';
            } else {
                echo '<li>' . $category[0]->cat_name . '</li>';
            }
        }
        if (is_single()) {
            // Название поста
            echo '<li>' . get_the_title() . '</li>';
        }
    }

    // Если это страница
    if (is_page() && !is_front_page()) {
        // Если есть родительская страница
        if ($post->post_parent) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb) {
                echo $crumb;
            }
        }
        // Текущая страница
        echo '<li>' . get_the_title() . '</li>';
    }

    // Если это страница архивов
    if (is_archive() && !is_category() && !is_tag() && !is_author()) {
        echo '<li class="current_page_item">' . post_type_archive_title('', false) . '</li>';
    }

    // Если это страница с списком статей
    if (is_home()) {
        echo '<li>' . single_post_title('', false) . '</li>';
    }

    // Если это страница с списком статей
    if (is_tag()) {
        echo '<li class="current_page_item">' . single_tag_title('', false) . '</li>';
    }

    // Если это страница поиска
    if (is_search()) {
        echo '<li>Результаты поиска: "' . get_search_query() . '"</li>';
    }

    // Если это 404 ошибка
    if (is_404()) {
        echo '<li>Страница не найдена</li>';
    }

    echo '</ul>';
}

/**
 * Категории записей
 * Используется в сайдбаре статей
 * @function custom_category_list()
 */
function custom_category_list() {
    // Получаем список категорий
    $categories = get_categories();

    // Начинаем вывод списка
    echo '<ul>';

    // Перебираем категории и выводим каждую в виде ссылки
    foreach ($categories as $category) {
        $category_link = get_category_link($category->term_id);
        $category_name = $category->name;

        echo '<li><a href="' . esc_url($category_link) . '">' . esc_html($category_name) . '</a></li>';
    }

    // Закрываем список
    echo '</ul>';
}

/**
 * Категории услуг
 * Используется в сайдбаре статей
 * @function custom_services_category_list()
 */
function custom_services_category_list() {
    // Получаем список категорий таксономии 'services_category'
    $categories = get_terms(array(
        'taxonomy' => 'services_category',
        'hide_empty' => false,
    ));

    // Проверяем, если есть категории
    if (!empty($categories) && !is_wp_error($categories)) {
        echo '<ul>';

        // Перебираем категории и выводим каждую в виде ссылки
        foreach ($categories as $category) {
            $category_link = get_term_link($category);
            $category_name = $category->name;

            echo '<li><a href="' . esc_url($category_link) . '">' . esc_html($category_name) . '</a></li>';
        }

        echo '</ul>';
    } else {
        // Выводим сообщение, если категорий нет
        echo 'Категорий не найдено.';
    }
}

/**
 * Метки записей
 * Используется в сайдбаре статей
 * @function custom_tag_list()
 */
function custom_tag_list() {
    // Получаем метки записи
    $tags = get_the_tags();

    if ($tags) {
        echo '<div class="tagcloud-wrap">';
		echo '<h3 class="widget-title">Популярные теги</h3>';
            echo '<div class="tagcloud">';
            // Перебираем метки и выводим каждую в виде ссылки
            foreach ($tags as $tag) {
                $tag_link = get_tag_link($tag->term_id);
                $tag_name = $tag->name;

                echo '<a href="' . esc_url($tag_link) . '">' . esc_html($tag_name) . '</a>';
            }
            echo '</div>';
        echo '</div>';
    }
}

/**
 * Форма поиска
 * Используется в сайдбаре статей
 * @function custom_search_form()
 */
function custom_search_form($form) {
    $form = '
    <div class="widget widget_search">
        <form role="search" method="get" class="search-form" action="' . esc_url(home_url('/')) . '">
            <input type="search" class="search-field" placeholder="Поиск..." value="' . get_search_query() . '" name="s">
            <button type="submit"><i class="bx bx-search-alt"></i></button>
        </form>
    </div>';
    
    return $form;
}
add_filter('get_search_form', 'custom_search_form');

/**
 * Случайные записи
 * Используется в сайдбаре статей
 * @function random_three_posts_widget()
 */
function random_three_posts_widget() {
    // Получаем случайные записи
    $args = array(
        'posts_per_page' => 3,
        'orderby' => 'rand',
        'post_status' => 'publish',
    );
    $random_posts = new WP_Query($args);

    if ($random_posts->have_posts()) {
        echo '<div class="widget widget_grin_posts_thumb">';
        echo '<h3 class="widget-title">Популярные статьи</h3>';

        while ($random_posts->have_posts()) {
            $random_posts->the_post();
            
            // Получаем URL миниатюры записи или изображение по умолчанию
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            if (!$thumbnail_url) {
                $thumbnail_url = get_bloginfo( 'template_directory' ) . '/assets/images/path_to_default_image.jpg'; // путь к изображению по умолчанию
            }
            
            echo '<article class="item">';
            echo '<a href="' . get_permalink() . '" class="thumb">';
            echo '<span class="fullimage cover" style="background-image: url(' . esc_url($thumbnail_url) . ');" role="img"></span>';
            echo '</a>';
            echo '<div class="info">';
            echo '<span>' . get_the_date('F j, Y') . '</span>';
            echo '<h4 class="title usmall">';
            echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
            echo '</h4>';
            echo '</div>';
            echo '</article>';
        }

        echo '</div>';
        wp_reset_postdata(); // Сбрасываем данные после завершения цикла
    }
}

/**
 * Разбивка контента по строкам
 */
function split_by_newline($content) {
    return explode("\n", $content);
}

/**
 * Удаление ненужных классов из body_class()
 */
function remove_unwanted_body_classes($classes) {
    // Список классов, которые нужно удалить
    $unwanted_classes = ['single-services'];

    // Фильтруем классы, убирая ненужные
    $classes = array_diff($classes, $unwanted_classes);

    return $classes;
}
add_filter('body_class', 'remove_unwanted_body_classes');
