<?php

// Control core classes for avoid errors
if (class_exists('CSF')) {


    // Set a unique slug-like ID
    $prefix = 'garahtools_header_options';


    // Create options
    CSF::createOptions($prefix, array(
        'menu_title'        => __('Header Options', 'garahtools'),
        'menu_slug'         => 'garahtools-header-options',
        'framework_title'   => __('Garahtools Theme Options <small>by eHalum</small>', 'garahtools'),
        'theme'             => 'light',
    ));



    // Create a section
    CSF::createSection($prefix, array(
        'title'  => __('Topbar', 'garahtools'),
        'fields' => array(
            array(
                'id'    => 'date',
                'type'  => 'text',
                'title' => __('Date', 'garahtools'),
            ), array(
                'id'    => 'time',
                'type'  => 'text',
                'title' => __('Time', 'garahtools'),
            ), array(
                'id'    => 'phone',
                'type'  => 'text',
                'title' => __('Phone', 'garahtools'),
            ), array(
                'id'    => 'email',
                'type'  => 'text',
                'title' => __('Email', 'garahtools'),
            ),

        )
    ));


    // Create a section
    CSF::createSection($prefix, array(
        'title'  => __('Logo', 'garahtools'),
        'fields' => array(
            array(
                'id'           => 'logo',
                'type'         => 'upload',
                'title'        => __('Garahtools Logo', 'garahtools'),
                'library'      => 'image',
                'placeholder'  => 'http://',
                'button_title' => 'Add Logo',
                'remove_title' => 'Remove Logo',
            )

        )
    ));


    // Create a section
    CSF::createSection($prefix, array(
        'title'  => __('Header Info', 'garahtools'),
        'fields' => array(
            array(
                'id'        => 'info',
                'type'      => 'group',
                'title'     => __('Header Info', 'garahtools'),
                'button_title'  => __('Add New Info', 'garahtools'),
                'fields'    => array(
                    array(
                        'id'        =>  'title',
                        'title'     =>  __('Info Title', 'garahtools'),
                        'type'      =>  'text',
                    ), array(
                        'id'        =>  'content',
                        'title'     =>  __('Info Content', 'garahtools'),
                        'type'      =>  'text',
                    ), array(
                        'id'        =>  'icon',
                        'title'     =>  __('Info Icon Name', 'garahtools'),
                        'type'      =>  'text',
                    )
                )
            ),

        )
    ));



    // Create a section
    CSF::createSection($prefix, array(
        'title'  => __('Footer', 'garahtools'),
        'fields' => array(
            array(
                'id'    => 'copyrights-text',
                'type'  => 'text',
                'title' => __('Copyrights Text', 'garahtools'),
            ), array(
                'id'    => 'company',
                'type'  => 'text',
                'title' => __('Company Name', 'garahtools'),
            ),
        )
    ));
}
