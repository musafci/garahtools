<?php

define('GARAHTOOLS_CUSTOMIZER_CONFIG_ID', 'garahtools_customizer_settings');
define('GARAHTOOLS_CUSTOMIZER_PANEL_ID', 'garahtools_customizer_panel');

if (class_exists('Kirki')) {

    //Config
    Kirki::add_config(GARAHTOOLS_CUSTOMIZER_CONFIG_ID, array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod',
    ));

    //Panel
    Kirki::add_panel(GARAHTOOLS_CUSTOMIZER_PANEL_ID, array(
        'priority'    => 40,
        'title'       => esc_html__('Garahtools', 'garahtools'),
        'description' => esc_html__('Garahtools Settings', 'garahtools'),
    ));

    //Homepage Section
    Kirki::add_section('garahtools_homepage', array(
        'title'          => esc_html__('Homepage Settings', 'garahtools'),
        'panel'          => GARAHTOOLS_CUSTOMIZER_PANEL_ID,
        'priority'       => 160,
        'active_callback' => function () {
            return is_page_template('template-parts/landing.php');
        }
    ));



    //Callus Switcher
    Kirki::add_field(GARAHTOOLS_CUSTOMIZER_CONFIG_ID, [
        'type'        => 'switch',
        'settings'    => 'garahtools_callus_display',
        'label'       => esc_html__('Display Callus Section', 'garahtools'),
        'section'     => 'garahtools_homepage',
        'default'     => 'on',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__('Display', 'garahtools'),
            'off' => esc_html__('Hide', 'garahtools'),
        ],
    ]);
    Kirki::add_field(GARAHTOOLS_CUSTOMIZER_CONFIG_ID, [
        'type'     => 'text',
        'settings' => 'simple_homepage_categories_title',
        'label'    => esc_html__('Simpleshop Categories Title', 'garahtools'),
        'section'  => 'garahtools_homepage',
        'default'  => esc_html__('Shop By Category', 'garahtools'),
        'priority' => 10,
        'active_callback'   =>  [
            [
                'setting'  =>  'garahtools_callus_display',
                'operator'  =>  '==',
                'value'     =>  true
            ]
        ]
    ]);
    Kirki::add_field(GARAHTOOLS_CUSTOMIZER_CONFIG_ID, [
        'type'     => 'text',
        'settings' => 'simple_homepage_categories_column_no',
        'label'    => esc_html__('Simpleshop Categories Column No', 'garahtools'),
        'section'  => 'garahtools_homepage',
        'default'  => 3,
        'priority' => 10,
        'active_callback'   =>  [
            [
                'setting'  =>  'garahtools_callus_display',
                'operator'  =>  '==',
                'value'     =>  true
            ]
        ]
    ]);
    Kirki::add_field(GARAHTOOLS_CUSTOMIZER_CONFIG_ID, [
        'type'     => 'switch',
        'settings' => 'simple_homepage_display_sub_category_number',
        'label'    => esc_html__('Simpleshop Display Sub Category Number', 'garahtools'),
        'section'  => 'garahtools_homepage',
        'default'  => 1,
        'priority' => 10,
        'choices'     => [
            'on'  => esc_html__('Display', 'garahtools'),
            'off' => esc_html__('Hide', 'garahtools'),
        ],
        'active_callback'   =>  [
            [
                'setting'  =>  'garahtools_callus_display',
                'operator'  =>  '==',
                'value'     =>  true
            ]
        ]
    ]);



    // //Product Switcher
    // Kirki::add_field(GARAHTOOLS_CUSTOMIZER_CONFIG_ID, [
    //     'type'        => 'switch',
    //     'settings'    => 'simple_homepage_display_products',
    //     'label'       => esc_html__('Display Product Section', 'garahtools'),
    //     'section'     => 'garahtools_homepage',
    //     'default'     => 'on',
    //     'priority'    => 10,
    //     'choices'     => [
    //         'on'  => esc_html__('Display', 'garahtools'),
    //         'off' => esc_html__('Hide', 'garahtools'),
    //     ],
    // ]);
    // Kirki::add_field(GARAHTOOLS_CUSTOMIZER_CONFIG_ID, [
    //     'type'     => 'text',
    //     'settings' => 'simple_homepage_products_title',
    //     'label'    => esc_html__('Simpleshop Product Title', 'garahtools'),
    //     'section'  => 'garahtools_homepage',
    //     'default'  => esc_html__('New Arrival', 'garahtools'),
    //     'priority' => 10,
    //     'active_callback'   =>  [
    //         [
    //             'setting'   =>  'simple_homepage_display_products',
    //             'operator'  =>  '==',
    //             'value'     =>  true
    //         ]
    //     ]
    // ]);
    // Kirki::add_field(GARAHTOOLS_CUSTOMIZER_CONFIG_ID, [
    //     'type'     => 'text',
    //     'settings' => 'simple_homepage_products_sub_title',
    //     'label'    => esc_html__('Simpleshop Product Sub-Title', 'garahtools'),
    //     'section'  => 'garahtools_homepage',
    //     'default'  => esc_html__('', 'garahtools'),
    //     'priority' => 10,
    //     'active_callback'   =>  [
    //         [
    //             'setting'   =>  'simple_homepage_display_products',
    //             'operator'  =>  '==',
    //             'value'     =>  true
    //         ]
    //     ]
    // ]);





    // //Promo Switcher
    // Kirki::add_field(GARAHTOOLS_CUSTOMIZER_CONFIG_ID, [
    //     'type'        => 'switch',
    //     'settings'    => 'simple_homepage_display_promo',
    //     'label'       => esc_html__('Display Promo Section', 'garahtools'),
    //     'section'     => 'garahtools_homepage',
    //     'default'     => 'on',
    //     'priority'    => 10,
    //     'choices'     => [
    //         'on'  => esc_html__('Display', 'garahtools'),
    //         'off' => esc_html__('Hide', 'garahtools'),
    //     ],
    // ]);
    // Kirki::add_field(GARAHTOOLS_CUSTOMIZER_CONFIG_ID, [
    //     'type'     => 'text',
    //     'settings' => 'simple_homepage_promo_title',
    //     'label'    => esc_html__('Simpleshop Promo Title', 'garahtools'),
    //     'section'  => 'garahtools_homepage',
    //     'default'  => esc_html__('SALE', 'garahtools'),
    //     'priority' => 10,
    //     'active_callback'   =>  [
    //         [
    //             'setting'  =>  'simple_homepage_display_promo',
    //             'operator'  =>  '==',
    //             'value'     =>  true
    //         ]
    //     ]
    // ]);
    // Kirki::add_field(GARAHTOOLS_CUSTOMIZER_CONFIG_ID, [
    //     'type'     => 'text',
    //     'settings' => 'simple_homepage_promo_sub_title',
    //     'label'    => esc_html__('Simpleshop Promo Sub-Title', 'garahtools'),
    //     'section'  => 'garahtools_homepage',
    //     'default'  => esc_html__('Up to 50% off', 'garahtools'),
    //     'priority' => 10,
    //     'active_callback'   =>  [
    //         [
    //             'setting'  =>  'simple_homepage_display_promo',
    //             'operator'  =>  '==',
    //             'value'     =>  true
    //         ]
    //     ]
    // ]);
    // Kirki::add_field(GARAHTOOLS_CUSTOMIZER_CONFIG_ID, [
    //     'type'     => 'text',
    //     'settings' => 'simple_homepage_promo_link',
    //     'label'    => esc_html__('Simpleshop Promo Link', 'garahtools'),
    //     'section'  => 'garahtools_homepage',
    //     'default'  => esc_html__('in store and online', 'garahtools'),
    //     'priority' => 10,
    //     'active_callback'   =>  [
    //         [
    //             'setting'  =>  'simple_homepage_display_promo',
    //             'operator'  =>  '==',
    //             'value'     =>  true
    //         ]
    //     ]
    // ]);




    // //Popular Product Switcher
    // Kirki::add_field(GARAHTOOLS_CUSTOMIZER_CONFIG_ID, [
    //     'type'        => 'switch',
    //     'settings'    => 'simple_homepage_display_popular_products',
    //     'label'       => esc_html__('Display Popular Product Section', 'garahtools'),
    //     'section'     => 'garahtools_homepage',
    //     'default'     => 'on',
    //     'priority'    => 10,
    //     'choices'     => [
    //         'on'  => esc_html__('Display', 'garahtools'),
    //         'off' => esc_html__('Hide', 'garahtools'),
    //     ],
    // ]);
    // Kirki::add_field(GARAHTOOLS_CUSTOMIZER_CONFIG_ID, [
    //     'type'     => 'text',
    //     'settings' => 'simple_homepage_popular_products_title',
    //     'label'    => esc_html__('Simpleshop Popular Product Title', 'garahtools'),
    //     'section'  => 'garahtools_homepage',
    //     'default'  => esc_html__('Popular Product', 'garahtools'),
    //     'priority' => 10,
    //     'active_callback'   =>  [
    //         [
    //             'setting'  =>  'simple_homepage_display_popular_products',
    //             'operator'  =>  '==',
    //             'value'     =>  true
    //         ]
    //     ]
    // ]);


    // //Offer Section Switcher
    // Kirki::add_field(GARAHTOOLS_CUSTOMIZER_CONFIG_ID, [
    //     'type'        => 'switch',
    //     'settings'    => 'simple_homepage_display_offer',
    //     'label'       => esc_html__('Display Offer Section', 'garahtools'),
    //     'section'     => 'garahtools_homepage',
    //     'default'     => 'on',
    //     'priority'    => 10,
    //     'choices'     => [
    //         'on'  => esc_html__('Display', 'garahtools'),
    //         'off' => esc_html__('Hide', 'garahtools'),
    //     ],
    // ]);

    // //Flickr Section Switcher
    // Kirki::add_field(GARAHTOOLS_CUSTOMIZER_CONFIG_ID, [
    //     'type'        => 'switch',
    //     'settings'    => 'simple_homepage_display_flickr',
    //     'label'       => esc_html__('Display Offer Section', 'garahtools'),
    //     'section'     => 'garahtools_homepage',
    //     'default'     => 'on',
    //     'priority'    => 10,
    //     'choices'     => [
    //         'on'  => esc_html__('Display', 'garahtools'),
    //         'off' => esc_html__('Hide', 'garahtools'),
    //     ],
    // ]);
    // Kirki::add_field(GARAHTOOLS_CUSTOMIZER_CONFIG_ID, [
    //     'type'     => 'text',
    //     'settings' => 'simple_homepage_flickr_title',
    //     'label'    => esc_html__('Simpleshop Flickr Title', 'garahtools'),
    //     'section'  => 'garahtools_homepage',
    //     'default'  => esc_html__('Simple Shop on Flickr', 'garahtools'),
    //     'priority' => 10,
    //     'active_callback'   =>  [
    //         [
    //             'setting'  =>  'simple_homepage_display_flickr',
    //             'operator'  =>  '==',
    //             'value'     =>  true
    //         ]
    //     ]
    // ]);
}
