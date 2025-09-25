<?php
add_filter( 'big_image_size_threshold', '__return_false' );
add_theme_support('post-thumbnails');
add_image_size('rectangle_a', 2560, 1440, true);
add_image_size('rectangle_b', 1280, 720, true);
add_image_size('portrait_a', 1080, 1920, true);
add_image_size('portrait_b', 410, 620, true);
add_image_size('square', 1080, 1080, true);




    add_action( 'wp_ajax_nopriv_get_my_data', 'get_my_data_callback' );
    add_action( 'wp_enqueue_scripts', 'my_ajax_scripts' );
    function my_ajax_scripts() {
        wp_enqueue_script( 'my-ajax-script', plugin_dir_url( __FILE__ ) . 'js/my-ajax-script.js', array( 'jquery' ), '1.0', true );
        wp_localize_script( 'my-ajax-script', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
    }
    function get_my_data_callback() {
        global $wpdb;
        $sql = "SELECT post_title, ID FROM {$wpdb->prefix}posts WHERE post_type = 'post' AND post_status = 'publish' LIMIT 5";
        $results = $wpdb->get_results( $sql );
        echo json_encode( $results );
        die();
    }

?>