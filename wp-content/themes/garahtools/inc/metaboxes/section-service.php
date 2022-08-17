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

        if ('service' == $section_type) {

            // Control core classes for avoid errors
            if (class_exists('CSF')) {


                // Set a unique slug-like ID
                $prefix = 'garahtools_section_service_metabox';

                // Create a metabox
                CSF::createMetabox($prefix, array(
                    'title'     => __('Service Section Other Attributes', 'garahtools'),
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
                            'id'        => 'services',
                            'type'      => 'group',
                            'title'     => __('Service', 'garahtools'),
                            'button_title'  => __('Add New Service', 'garahtools'),
                            'fields'    => array(
                                array(
                                    'id'        =>  'title',
                                    'title'     =>  __('Service Title', 'garahtools'),
                                    'type'      =>  'text',
                                ), array(
                                    'id'        =>  'content',
                                    'title'     =>  __('Service Content', 'garahtools'),
                                    'type'      =>  'textarea',
                                ), array(
                                    'id'        =>  'icon',
                                    'title'     =>  __('Service Icon', 'garahtools'),
                                    'type'      =>  'text',
                                ), array(
                                    'id'           => 'image',
                                    'type'         => 'upload',
                                    'title'        => __('Service Image', 'garahtools'),
                                    'library'      => 'image',
                                    'placeholder'  => 'http://',
                                    'button_title' => 'Add Service Image',
                                    'remove_title' => 'Remove Service Image',
                                )
                            )
                        ),

                    )
                ));
            }
        }
    }
}
