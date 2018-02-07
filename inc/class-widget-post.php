<?php

if (!defined('ABSPATH')) {
    exit;
}

class Custom_New_Post_Widget extends WC_Widget_Vien_An
{

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->widget_cssclass = '';
        $this->widget_description = 'Hiển thị bài viết mới nhất';
        $this->widget_id = 'custom_new_post_widget';
        $this->widget_name = 'Bài viết mới nhất';
        $this->settings = array(
            'title' => array(
                'type' => 'text',
                'std' => __('Tin mới nhất', 'woocommerce'),
                'label' => __('Title', 'woocommerce'),
            ),
            'number' => array(
                'type' => 'number',
                'step' => 1,
                'min' => 1,
                'max' => '',
                'std' => 6,
                'label' => __('Số bài viết hiển thị ', 'woocommerce'),
            ),
        );

        parent::__construct();
    }

    /**
     * Output widget.
     *
     * @see WP_Widget
     *
     * @param array $args
     * @param array $instance
     */

    public function get_posts($args, $instance)
    {
        $number = !empty($instance['number']) ? absint($instance['number']) : $this->settings['number']['std'];
        $query_args = array(
            'posts_per_page' => $number,
            'post_status' => 'publish',
            'post_type' => 'post',
            'order' => 'desc',
        );
        return new WP_Query(apply_filters('woocommerce_products_widget_query_args', $query_args));
    }

    public function widget($args, $instance)
    {
        if ($this->get_cached_widget($args)) {
            return;
        }
        ob_start();

        ?>
        <div class="small-12">
            <h2>

                <?php
                $this->widget_start($args, $instance);
                ?>
            </h2>
        </div>

        <section class="row multi-post">
            <div class="row small-up-2 medium-up-3 large-up-6 small-12">
                <?php

                if (($post = $this->get_posts($args, $instance)) && $post->have_posts()) {
                    while ($post->have_posts()) {
                        $post->the_post();
                        get_template_part('template-parts/post/new-post-content');
                    }
                }
                ?>

            </div>
        </section>
        <?php
        echo $this->cache_widget($args, ob_get_clean());
    }
}
