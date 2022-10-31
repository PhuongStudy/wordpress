<?php 
// Register Nav walker class_alias
    require_once('class-wp-bootstrap-navwalker.php');

    // Theme Support
    function wpb_theme_setup(){
        add_theme_support('post-thumbnails');

        // Nav menus
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));

        // Post Formats
        add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
    }

    add_action('after_setup_theme', 'wpb_theme_setup');

    add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
    /**
     * Use namespaced data attribute for Bootstrap's dropdown toggles.
     *
     * @param array    $atts HTML attributes applied to the item's `<a>` element.
     * @param WP_Post  $item The current menu item.
     * @param stdClass $args An object of wp_nav_menu() arguments.
     * @return array
     */
    function prefix_modify_nav_menu_args( $args ) {
        return array_merge( $args, array(
            'walker' => new WP_Bootstrap_Navwalker(),
        ) );
    }
    add_filter( 'wp_nav_menu_args', 'prefix_modify_nav_menu_args' );

    function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
        if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
            if ( array_key_exists( 'data-toggle', $atts ) ) {
                unset( $atts['data-toggle'] );
                $atts['data-bs-toggle'] = 'dropdown';
            }
        }
        return $atts;
    }

    function slug_provide_walker_instance( $args ) {
        if ( isset( $args['walker'] ) && is_string( $args['walker'] ) && class_exists( $args['walker'] ) ) {
            $args['walker'] = new $args['walker'];
        }
        return $args;
    }
    add_filter( 'wp_nav_menu_args', 'slug_provide_walker_instance', 1001 );

    function set_excerpt_length (){
        return 50;
    }

    add_filter( 'excerpt_length', 'set_excerpt_length' );

    // Widget locations
    function wpb_init_widgets($id){
        register_sidebar(array(
            'name'=> 'Sidebar',
            'id' => 'sidebar',
            'description'    => '',
            'class'          => '',
            'before_widget'  => '<div id="%1$s" class="widget %2$s sidebar-module">',
            'after_widget'   => "</div>\n",
            'before_title'   => '<h4 class="widget-title">',
            'after_title'    => "</h4>\n",
            'before_sidebar' => '',
            'after_sidebar'  => '',
            'show_in_rest'   => false,
        ));
        register_sidebar(array(
            'name'=> 'Box1',
            'id' => 'box1',
            'before_widget'  => '<div id="%1$s" class="widget %2$s box">',
            'after_widget'   => "</div>\n",
            'before_title'   => '<h2>',
            'after_title'    => "</h2>\n",
        ));
        register_sidebar(array(
            'name'=> 'Box2',
            'id' => 'box2',
            'before_widget'  => '<div id="%1$s" class="widget %2$s box">',
            'after_widget'   => "</div>\n",
            'before_title'   => '<h2>',
            'after_title'    => "</h2>\n",
        ));
        register_sidebar(array(
            'name'=> 'Box3',
            'id' => 'box3',
            'before_widget'  => '<div id="%1$s" class="widget %2$s box">',
            'after_widget'   => "</div>\n",
            'before_title'   => '<h2>',
            'after_title'    => "</h2>\n",
        ));
    }

    add_action('widgets_init', 'wpb_init_widgets');

    // Customizer file
    require get_template_directory(). '/inc/customizer.php';