<?php 

    add_action( 'wp_enqueue_scripts', function() {

        wp_enqueue_style('font-api', 'https://fonts.googleapis.com');
        wp_enqueue_style('font-static', 'https://fonts.gstatic.com');
        wp_enqueue_style('font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
        // wp_enqueue_style('icon', get_template_directory_uri() . '/src/assets/icons/main_icon_small.png');
        wp_enqueue_style('reset', get_template_directory_uri() . '/src/css/reset.css');
        wp_enqueue_style('adaptive', get_template_directory_uri() . '/src/css/adaptive.css');
        wp_enqueue_style('style', get_template_directory_uri() . '/src/css/style.css');


        function add_type_attribute($tag, $handle, $src) {
            if ( 'main' !== $handle ) {
                return $tag;
            }

            $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
            return $tag;
        }

        add_filter('script_loader_tag', 'add_type_attribute' , 10, 3);

        wp_enqueue_script('header-scroll', get_template_directory_uri() . '/src/js/modules/headerScroll.js', array(), false, true);
        wp_enqueue_script('goods-slider', get_template_directory_uri() . '/src/js/modules/goodsSlider.js', array(), false, true);
        wp_enqueue_script('anchors', get_template_directory_uri() . '/src/js/modules/anchors.js', array(), false, true);
        wp_enqueue_script('info-slider', get_template_directory_uri() . '/src/js/modules/infoSlider.js', array(), false, true);
        wp_enqueue_script('main', get_template_directory_uri() . '/src/js/script.js', array('info-slider'), false, true);
    });


    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');

?>