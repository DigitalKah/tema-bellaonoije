<?php
add_action( 'customize_register', function( $wp_customize ) {

  //Redes Sociais
	$wp_customize->add_section( 'tema-redes-sociais' , array(
    'title'      => "Redes Sociais",
		'priority'   => 40,
    ) );

    //Twitter
    $wp_customize->add_setting( 'social-twitter', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ) );
    $wp_customize->add_control( 'social-twitter', array(
        'label'    => "Twitter",
        'description' => '',
        'section'  => 'tema-redes-sociais',
        'type' => 'text',
    ) );

    //Facebook
    $wp_customize->add_setting( 'social-facebook', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ) );
    $wp_customize->add_control( 'social-facebook', array(
        'label'    => "Facebook",
        'description' => '',
        'section'  => 'tema-redes-sociais',
        'type' => 'text',
    ) );

    //Instagram
    $wp_customize->add_setting( 'social-instagram', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ) );
    $wp_customize->add_control( 'social-instagram', array(
        'label'    => "Instagram",
        'description' => '',
        'section'  => 'tema-redes-sociais',
        'type' => 'text',
    ) );

    //Linkedin
    $wp_customize->add_setting( 'social-linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ) );
    $wp_customize->add_control( 'social-linkedin', array(
        'label'    => "Linkedin",
        'description' => '',
        'section'  => 'tema-redes-sociais',
        'type' => 'text',
    ) );

    //Cabeçalho
    $wp_customize->add_section( 'tema-cabecalho' , array(
        'title'      => "Cabeçalho",
        'priority'   => 40,
    ) );

    //Logo
    $wp_customize->add_setting( 'header-logo', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo-header',
            array(
                'label'      => "Logo",
                'section'    => 'tema-cabecalho',
                'settings'   => 'header-logo',
            )
        )
    );

    //Rodapé
    $wp_customize->add_section( 'tema-rodape' , array(
        'title'      => "Rodapé",
        'priority'   => 40,
    ) );
    
    //Logo
    $wp_customize->add_setting( 'rodape-logo', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));    
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo-rodape',
            array(
                'label'      => "Logo",
                'section'    => 'tema-rodape',
                'settings'   => 'rodape-logo',
            )
        )
    );

    //Copy
    $wp_customize->add_setting( 'rodape-copy', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ) );
    $wp_customize->add_control( 'rodape-copy', array(
        'label'    => "Texto Copy",
        'description' => '',
        'section'  => 'tema-rodape',
        'type' => 'text',
    ) );

    //Copy Mobile
    $wp_customize->add_setting( 'rodape-copy-mobile', array(
        'default'           => '',
        'sanitize_callback' => 'wp_filter_nohtml_kses'
    ) );
    $wp_customize->add_control( 'rodape-copy-mobile', array(
        'label'    => "Texto Copy Mobile",
        'description' => '',
        'section'  => 'tema-rodape',
        'type' => 'text',
    ) );

});