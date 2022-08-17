<?php

global $section_id;

$garahtools_section = get_post($section_id);
$garahtools_section_title = $garahtools_section->post_title;
$garahtools_section_content = $garahtools_section->post_content;


$garahtools_section_meta = get_post_meta($section_id, 'garahtools_section_callus_metabox', true);


if ($garahtools_section_meta) :

    $garahtools_callus_list = $garahtools_section_meta['callus'];
?>

    <div class="section-full p-t80 p-b50 bg-gray-light">
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer text-center">
                <div class="wt-small-separator site-text-primary">
                    <div class="sep-leaf-left"></div>
                    <div><?php echo esc_html($garahtools_section_title); ?></div>
                    <div class="sep-leaf-right"></div>
                </div>
                <h2><?php echo wp_kses_post($garahtools_section_content); ?></h2>
            </div>
            <!-- TITLE END-->

            <div class="section-content">
                <div class="icon-circle-box-outer bg-white p-a30 m-b30">
                    <div class="row justify-content-center">

                        <?php
                        $count = 0;
                        foreach ($garahtools_callus_list as $garahtools_callus_single) :
                            $count++;
                        ?>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="icon-circle-box v-icon-effect">
                                    <div class="wt-icon-box-wraper center">
                                        <div class="icon-md icon-circle">
                                            <span class="icon-cell">
                                                <i class="<?php echo esc_attr($garahtools_callus_single['icon']); ?> v-icon"></i>
                                            </span>
                                        </div>
                                        <div class="icon-content relative">
                                            <h4 class="wt-tilte"><?php echo esc_html($garahtools_callus_single['title']); ?></h4>
                                            <span class="icon-count-number"><?php echo $count; ?></span>
                                            <p><?php echo esc_html($garahtools_callus_single['info']); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
endif;
?>