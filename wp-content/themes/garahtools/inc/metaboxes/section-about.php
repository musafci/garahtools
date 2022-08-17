<?php

$section_id = 0;

if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
    $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
}


if ('section' != get_post_type($section_id)) {
    return false;
} else {

    $section_meta = get_post_meta($section_id, 'garahtools_section_type_metabox', true);

    if ($section_meta != false) {

        $section_type = $section_meta['type'];

        if ('about' == $section_type) {
            // Control core classes for avoid errors
            if (class_exists('CSF')) {


                // Set a unique slug-like ID
                $prefix = 'garahtools_section_about_metabox';

                // Create a metabox
                CSF::createMetabox($prefix, array(
                    'title'     => __('About Section Other Attributes', 'garahtools'),
                    'post_type' =>  'section',
                    'context'   =>  'normal',
                    'priority'  =>  'default'
                ));



                // Create a section
                CSF::createSection($prefix, array(
                    'title'  => '',
                    'icon'  =>  '',
                    'fields' => array(
                        array(
                            'id'    =>  'about-year-title',
                            'title' =>  __('About Year Title', 'garahtools'),
                            'type'  =>  'text',
                        ), array(
                            'id'    =>  'about-year-icon',
                            'title' =>  __('About Year Icon', 'garahtools'),
                            'type'  =>  'text',
                        ), array(
                            'id'           => 'signature',
                            'type'         => 'upload',
                            'title'        => __('Signature Image', 'garahtools'),
                            'library'      => 'image',
                            'placeholder'  => 'http://',
                            'button_title' => 'Add Signature Image',
                            'remove_title' => 'Remove Signature Image',
                        ), array(
                            'id'        => 'about',
                            'type'      => 'group',
                            'title'     => __('About Accordian', 'garahtools'),
                            'button_title'  => __('Add New Accordian', 'garahtools'),
                            'fields'    => array(
                                array(
                                    'id'        =>  'title',
                                    'title'     =>  __('Accordian Title', 'garahtools'),
                                    'type'      =>  'text',
                                ), array(
                                    'id'        =>  'content',
                                    'title'     =>  __('Accordian Content', 'garahtools'),
                                    'type'      =>  'textarea',
                                )
                            )
                        ),

                    )
                ));
            }
        }
    }
}
