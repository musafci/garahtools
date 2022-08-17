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

        if ('quality' == $section_type) {

            // Control core classes for avoid errors
            if (class_exists('CSF')) {


                // Set a unique slug-like ID
                $prefix = 'garahtools_section_quality_metabox';

                // Create a metabox
                CSF::createMetabox($prefix, array(
                    'title'     => __('Quality Section Other Attributes', 'garahtools'),
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
                            'id'        => 'qualities',
                            'type'      => 'group',
                            'title'     => __('Service', 'garahtools'),
                            'button_title'  => __('Add New Service', 'garahtools'),
                            'fields'    => array(
                                array(
                                    'id'        =>  'counter_title',
                                    'title'     =>  __('Counter Title', 'garahtools'),
                                    'type'      =>  'text',
                                ), array(
                                    'id'        =>  'counter',
                                    'title'     =>  __('Counter', 'garahtools'),
                                    'type'      =>  'text',
                                )
                            )
                        ), array(
                            'id'           => 'image',
                            'type'         => 'upload',
                            'title'        => __('Quality Video Image', 'garahtools'),
                            'library'      => 'image',
                            'placeholder'  => 'http://',
                            'button_title' => 'Add Quality Video Image',
                            'remove_title' => 'Remove',
                        ), array(
                            'id'        =>  'link',
                            'title'     =>  __('Quality Video Link', 'garahtools'),
                            'type'      =>  'text',
                        )

                    )
                ));
            }
        }
    }
}
