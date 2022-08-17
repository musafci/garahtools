<?php

// Control core classes for avoid errors
if (class_exists('CSF')) {

  //
  // Set a unique slug-like ID
  $prefix = 'garahtools_section_slider_metabox';


  //
  // Create a metabox
  CSF::createMetabox($prefix, array(
    'title'     => __('Slider Extra Attributes', 'garahtools'),
    'post_type' =>  'slider',
    'context'   =>  'normal',
    'priority'  =>  'default'
  ));

  //
  // Create a section
  CSF::createSection($prefix, array(
    'title'  => '',
    'icon'  =>  '',
    'fields' => array(
      array(
        'id'           => 's-image',
        'type'         => 'upload',
        'title'        => __('Slider Small Image', 'garahtools'),
        'library'      => 'image',
        'placeholder'  => 'http://',
        'button_title' => 'Add Image',
        'remove_title' => 'Remove Image',
      ),
    )
  ));
}
