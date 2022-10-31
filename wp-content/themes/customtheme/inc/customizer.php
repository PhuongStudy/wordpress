<?php 
    function wpb_customize_register($wp_cusomize){
        // Showcase section
        $wp_cusomize -> add_section('showcase', array(
            'title' => __('Showcase', 'wpbootstrap'),
            'description' => sprintf(__('Options for showcase', 'wpbootstrap')),
            'priority' => 130
        ));

        // Image
        $wp_cusomize -> add_setting('showcase_image', array(
            'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
            'type' => 'theme_mod'
        ));

        $wp_cusomize -> add_control(new WP_Customize_Image_Control($wp_cusomize, 'showcase_image', array(
            'label' => __('Showcase Image', 'wpbootstrap'),
            'section' => 'showcase',
            'setting' => 'showcase_image',
            'priority' => 1

        )));
        // Heading
        $wp_cusomize -> add_setting('showcase_heading', array(
            'default' => _x('Custom Bootstrap Wordpress Theme', 'wpbootstrap'),
            'type' => 'theme_mod'
        ));

        $wp_cusomize -> add_control('showcase_heading', array(
            'label' => __('Heading', 'wpbootstrap'),
            'section' => 'showcase',
            'priority' => 2
        ));

        // Text
        $wp_cusomize -> add_setting('showcase_text', array(
            'default' => _x('This is mostly typography and not a lot of structural elements, except for the couple of float alignments, plus the responsive design block at the end.', 'wpbootstrap'),
            'type' => 'theme_mod'
        ));

        $wp_cusomize -> add_control('showcase_text', array(
            'label' => __('Text', 'wpbootstrap'),
            'section' => 'showcase',
            'priority' => 3
        ));

        // Button Url
        $wp_cusomize -> add_setting('btn_url', array(
            'default' => _x('http://test.com', 'wpbootstrap'),
            'type' => 'theme_mod'
        ));

        $wp_cusomize -> add_control('btn_url', array(
            'label' => __('Button URL', 'wpbootstrap'),
            'section' => 'showcase',
            'priority' => 4
        ));
        // Button Text
        $wp_cusomize -> add_setting('btn_text', array(
            'default' => _x('Read more', 'wpbootstrap'),
            'type' => 'theme_mod'
        ));

        $wp_cusomize -> add_control('btn_text', array(
            'label' => __('Button Text', 'wpbootstrap'),
            'section' => 'showcase',
            'priority' => 5
        ));
    }

    add_action('customize_register', 'wpb_customize_register');