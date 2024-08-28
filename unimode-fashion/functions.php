<?php

// 登録済みのjQueryを解除して、登録し直す
function remove_default_jquery()
{
    // 管理画面でないなら
    if (!is_admin()) {
        wp_deregister_script('jquery');

        wp_enqueue_script('jquery', get_template_directory_uri() . '/jquery-3.2.1.min.js', array(), 3.2, true);
        wp_enqueue_script('my-stylesheet', get_stylesheet_uri());
    }
}


add_action('wp_enqueue_scripts', 'remove_default_jquery');
