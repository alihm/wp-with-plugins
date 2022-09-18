<?php
if (!function_exists('chromenews_front_page_main_section')) :
    /**
     * Banner Slider
     *
     * @since ChromeNews 1.0.0
     *
     */
    function chromenews_front_page_main_section()
    {
        $chromenews_enable_main_slider = chromenews_get_option('show_main_news_section');





        $chromenews_banner_layout = 'layout-aligned';
        $chromenews_banner_background = chromenews_get_option('main_banner_background_section');

        $chromenews_layout_class = 'aft-banner-' . $chromenews_banner_layout;

        $chromenews_banner_background_color = chromenews_get_option('select_main_banner_background_color');
        $chromenews_layout_class .= ' aft-banner-' . $chromenews_banner_background_color;

        $chromenews_main_banner_order = chromenews_get_option('select_main_banner_order_3');
        $chromenews_layout_class .= ' aft-banner-' . $chromenews_main_banner_order;

        $chromenews_main_banner_url = '';

        if (!empty($chromenews_banner_background)) {
            $chromenews_banner_background = absint($chromenews_banner_background);
            $chromenews_main_banner_url = wp_get_attachment_url($chromenews_banner_background);
            $chromenews_layout_class .= ' data-bg';
        }

?>



        <section class="aft-blocks aft-main-banner-section banner-carousel-1-wrap bg-fixed  chromenews-customizer <?php echo esc_attr($chromenews_layout_class); ?>" data-background="<?php echo esc_attr($chromenews_main_banner_url); ?>">
            

            <?php do_action('chromenews_action_banner_exclusive_posts'); ?>

            <?php if ($chromenews_enable_main_slider) : ?>
                <div class="container-wrapper">
                    <div class="aft-main-banner-wrapper">
                        <?php
                        
                        chromenews_get_block('main-layout-aligned', 'banner');
                        ?>
                    </div>
                </div>
            <?php endif; ?>

        </section>
        <?php
    }
endif;
add_action('chromenews_action_front_page_main_section', 'chromenews_front_page_main_section', 40);
