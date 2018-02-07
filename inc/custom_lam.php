<?php
/**
 * Created by PhpStorm.
 * User: comficker
 * Date: 2/7/18
 * Time: 19:18
 */

register_sidebar(array(
    'name' => __('Banner trên cùng', 'twentyseventeen'),
    'id' => 'banner-top',
    'description' => __('Add widgets here to appear in your footer.', 'twentyseventeen'),
    'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="wrap">',
    'after_widget' => '</div></section>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
));
register_sidebar(array(
    'name' => __('Đăng ký theo dõi', 'twentyseventeen'),
    'id' => 'subscribe-form',
    'description' => __('Add widgets here to appear in your footer.', 'twentyseventeen'),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
));