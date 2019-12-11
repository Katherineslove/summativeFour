<?php
function mytheme_customize_register($wp_customize) {

    //---------------SERVICES SECTION------------------
    $wp_customize->add_section( '2019servicesBackground' , array(
        'title'      => __( 'Services Section Menu', '2019stJohn' ),
        'priority'   => 35,
    ) );
    $wp_customize->add_setting( '2019servicesBackgroundDisplay' , array(
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'2019_servicesBackgroundDisplay',array(
        'label'      => __('Services Background Image', '2019stJohn' ),
        'section'    => '2019servicesBackground',
        'settings'   => '2019servicesBackgroundDisplay',
        'context'    => '2019_servicesBackgroundDisplay'
    )));


    $wp_customize->add_setting( '2019servicesHeading' , array(
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'2019_servicesHeading',array(
        'label'      => __('Services Title', '2019stJohn' ),
        'section'    => '2019servicesBackground',
        'settings'   => '2019servicesHeading',
        'type'       => 'text',
        'context'    => '2019_servicesHeading'
    )));

    $wp_customize->add_setting( '2019servicesColourTitle' , array(
        'transport'   => 'refresh',
        'default' => '#ffffff'
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'2019_servicesColourTitle',array(
        'label'      => __('Services Title', '2019stJohn' ),
        'section'    => '2019servicesBackground',
        'settings'   => '2019servicesColourTitle',
        'context'    => '2019_servicesColourTitle'
    )));

    //-----------------FOOTER TEXT AREA------------------
    $wp_customize->add_section( '2019footerTEXT' , array(
       'title'      => __( 'Footer Info', '1902Custom' ),
       'priority'   => 30,
   ) );

   $wp_customize->add_setting( '2019footerMessage' , array(
       'default'   => '© 2019 St John New Zealand',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, '2019_footerTEXTControl', array(
     'label'      => __( 'Footer Message', '2019stJohn' ),
     'section'    => '2019footerTEXT',
     'settings'   => '2019footerMessage',
   ) ) );
}

add_action('customize_register', 'mytheme_customize_register');

function mytheme_customize_css(){
    ?>
    <style type="text/css">
    .headerImage {
        background-image: url(<?php echo get_theme_mod('2019headerImageDisplay'); ?>);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 50vh;
    }

    .servicesSection {
        background-image: url(<?php echo get_theme_mod('2019servicesBackgroundDisplay'); ?>);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .servicesHeading {
        position: relative;
        <?php echo get_theme_mod('2019servicesHeading'); ?>);
    }

    .servicesTitle {
        color: <?php echo get_theme_mod('2019servicesColourTitle', '#000000');?> !important;
    }

    .aboutImage {
        background-image: url(<?php echo get_theme_mod('2019aboutImageDisplay'); ?>);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 50vh;
    }

    .contactImage {
        background-image: url(<?php echo get_theme_mod('2019contactImageDisplay'); ?>);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 50vh;
    }
    </style>
    <?php
}

add_action('wp_head', 'mytheme_customize_css');

?>
