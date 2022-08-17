<?php
// Template Name: Landing Page
get_header();
?>

<!-- CONTENT START -->
<div class="page-content">

    <!-- SLIDER START -->
    <?php
    get_template_part('section-templates/slider');
    ?>
    <!-- SLIDER END -->


    <?php
    $meal_current_page_id = get_the_ID();
    $meal_page_meta = get_post_meta($meal_current_page_id, 'garahtools_page_sections_drag_and_drop', true);

    if ($meal_page_meta) {
        $meal_page_sections = $meal_page_meta['sections'];

        foreach ($meal_page_sections as $meal_page_section) :
            $section_id    =   $meal_page_section['section'];
            $meal_section_meta = get_post_meta($section_id, 'garahtools_section_type_metabox', true);
            $meal_section_type = $meal_section_meta['type'];

            echo get_template_part('section-templates/' . $meal_section_type);

        endforeach;
    }
    ?>

<?php get_footer(); ?>