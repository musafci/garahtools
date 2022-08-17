<?php
global $section_id;

$garahtools_section = get_post($section_id);
$garahtools_section_title = $garahtools_section->post_title;
$garahtools_section_content = $garahtools_section->post_content;


$garahtools_section_meta = get_post_meta($section_id, 'garahtools_section_project_metabox', true);

if ($garahtools_section_meta) :

    $garahtools_projects = $garahtools_section_meta['projects'];

?>


    <div class="section-full p-t80 p-b80 bg-gray-light">
        <div class="container">
            <div class="wt-separator-two-part">
                <div class="row wt-separator-two-part-row">
                    <div class="col-lg-8 col-md-7 wt-separator-two-part-left">
                        <!-- TITLE START-->
                        <div class="section-head left wt-small-separator-outer">
                            <div class="wt-small-separator site-text-primary">
                                <div class="sep-leaf-left"></div>
                                <div><?php echo esc_html($garahtools_section_title); ?></div>
                                <div class="sep-leaf-right"></div>
                            </div>
                            <h2><?php echo wp_kses_post($garahtools_section_content); ?></h2>
                        </div>
                        <!-- TITLE END-->
                    </div>
                    <div class="
                    col-lg-4 col-md-5
                    wt-separator-two-part-right
                    text-right
                  ">
                        <!-- <a href="javascript:;" class="site-button site-btn-effect">More Detail</a> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="section-content">
            <div class="container-fluid">
                <div class="projects-slider-two">
                    <div class="
                    owl-carousel
                    projects-carousel-two
                    owl-btn-vertical-center
                  ">
                        <!-- COLUMNS -->
                        <?php
                        $count = 0;
                        foreach ($garahtools_projects as $garahtools_project) :
                            $count++;
                        ?>
                            <div class="item">
                                <div class="projects-two-info bg-white">
                                    <div class="wt-media img-reflection">
                                        <img src="<?php echo esc_url($garahtools_project['image']); ?>" alt="" />
                                    </div>
                                    <h3 class="wt-tilte m-t0" data-title="0<?php echo $count; ?>">
                                        <a href="javascript:;"><?php echo esc_html($garahtools_project['title']) ?></a>
                                    </h3>
                                </div>
                            </div>

                        <?php
                        endforeach;
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
endif;
?>