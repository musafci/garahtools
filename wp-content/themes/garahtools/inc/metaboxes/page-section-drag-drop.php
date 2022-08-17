<?php

$page_id = 0;
if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
    $page_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
}

$current_page_template = get_post_meta($page_id, '_wp_page_template', true);

if (in_array($current_page_template, array('template-parts/landing.php'))) {

    // Control core classes for avoid errors
    if (class_exists('CSF')) {


        // Set a unique slug-like ID
        $prefix = 'garahtools_page_sections_drag_and_drop';


        // Create a metabox
        CSF::createMetabox($prefix, array(
            'title'     => __('Sections', 'garahtools'),
            'post_type' => 'page',
            'context'   =>  'normal',
            'priority'  =>  'default',
        ));


        // Create a section
        CSF::createSection($prefix, array(
            'title'     =>  '',
            'icon'      =>  '',
            'fields'    => array(
                array(
                    'id'              =>  'sections',
                    'title'             =>  __('Select sections', 'garahtools'),
                    'type'              =>  'group',
                    'button_title'      =>  __('New Section', 'garahtools'),
                    'accordion_title_prefix'   =>  __('Section:', 'garahtools'),
                    'fields'            =>  array(
                        array(
                            'id'        =>  'section',
                            'title'     =>  __('Select sections', 'garahtools'),
                            'placeholder'  => 'Select an option',
                            'type'      =>  'select',
                            'options'   =>  'post',
                            'query_args' =>  array(
                                'post_type' =>  'section',
                                'posts_per_page'    =>  -1,
                            )
                        )
                    )
                ),
            )
        ));
    }
}
