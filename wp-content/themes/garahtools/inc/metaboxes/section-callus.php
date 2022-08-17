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

    if ('callus' == $section_type) {

      // Control core classes for avoid errors
      if (class_exists('CSF')) {


        // Set a unique slug-like ID
        $prefix = 'garahtools_section_callus_metabox';



        // Create a metabox
        CSF::createMetabox($prefix, array(
          'title'     => __('Call Us Section Other Attributes', 'garahtools'),
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
              'id'        => 'callus',
              'type'      => 'group',
              'title'     => __('Call Us Info', 'garahtools'),
              'button_title'  => __('Add New Info', 'garahtools'),
              // 'accordion_title_prefix' => __('Info:', 'garahtools'),
              'fields'    => array(
                array(
                  'id'        =>  'title',
                  'title'     =>  __('Title', 'garahtools'),
                  'type'      =>  'text',
                ), array(
                  'id'        =>  'icon',
                  'title'     =>  __('Icon Name', 'garahtools'),
                  'type'      =>  'text',
                ), array(
                  'id'        =>  'info',
                  'title'     =>  __('Info', 'garahtools'),
                  'type'      =>  'text',
                )
              )
            ),

          )
        ));
      }
    }
  }
}
