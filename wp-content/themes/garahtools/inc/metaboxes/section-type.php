<?php

// Control core classes for avoid errors
if (class_exists('CSF')) {

    //
    // Set a unique slug-like ID
    $prefix = 'garahtools_section_type_metabox';

    //
    // Create a metabox
    CSF::createMetabox($prefix, array(
        'title'     => __('Section Type', 'meal'),
        'post_type' => 'section',
        'context'   =>  'normal',
        'priority'  =>  'default',
    ));

    //
    // Create a section
    CSF::createSection($prefix, array(
        'title'     =>  '',
        'icon'      =>  '',
        'fields'    => array(
            array(
                'id'  =>  'type',
                'title' =>  __('Select section type', 'garahtools'),
                'type'  => 'select',
                'options'   =>  array(
                    'callus'        =>  __('Call Us', 'garahtools'),
                    'about'         =>  __('About', 'garahtools'),
                    'project'       =>  __('Project', 'garahtools'),
                    'service'       =>  __('Service', 'garahtools'),
                    'quality'       =>  __('Quality', 'garahtools'),
                    'team'          =>  __('Team', 'garahtools'),
                    'testimonial'   =>  __('Testimonials', 'garahtools'),
                )
            ),

        )
    ));
}
