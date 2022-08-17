<?php
global $section_id;

$garahtools_section = get_post($section_id);
$garahtools_section_title = $garahtools_section->post_title;
$garahtools_section_content = $garahtools_section->post_content;
$garahtools_section_bg = get_the_post_thumbnail_url($section_id, 'full');


$garahtools_section_meta = get_post_meta($section_id, 'garahtools_section_about_metabox', true);

if ($garahtools_section_meta) :

    $garahtools_about_year_title = $garahtools_section_meta['about-year-title'];
    $garahtools_about_year_icon  = $garahtools_section_meta['about-year-icon'];
    $garahtools_signature        = $garahtools_section_meta['signature'];
    $garahtools_about_accordians = $garahtools_section_meta['about'];

?>

    <div class="section-full p-t80 p-b50 bg-no-repeat bg-center bg-white">
        <div class="about-section-three">
            <div class="container">
                <div class="section-content">
                    <div class="row justify-content-center d-flex">
                        <div class="col-lg-6 col-md-12 m-b30">
                            <div class="about-max-three">
                                <div class="about-max-three-media">
                                    <img src="<?php echo esc_url($garahtools_section_bg); ?>" alt="" />
                                </div>
                                <div class="about-three">
                                    <div class="about-year">
                                        <div class="about-year-info">
                                            <span class="icon-md p-t10">
                                                <i class="<?php echo esc_attr($garahtools_about_year_icon); ?>"></i>
                                            </span>
                                            <h3 class="wt-tilte">
                                                <?php echo esc_html($garahtools_about_year_title); ?>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 m-b30">
                            <div class="about-section-three-right">
                                <!-- TITLE START-->
                                <div class="left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                        <div class="sep-leaf-left"></div>
                                        <div><?php echo esc_html($garahtools_section_title); ?></div>
                                        <div class="sep-leaf-right"></div>
                                    </div>
                                    <h2><?php echo wp_kses_post($garahtools_section_content); ?></h2>
                                </div>
                                <!-- TITLE END-->

                                <!-- Accordian -->
                                <div class="wt-accordion acc-bg-gray m-b50 about-section-three-acc" id="accordion">

                                    <?php
                                    if ($garahtools_about_accordians) :
                                        $count = 0;
                                        foreach ($garahtools_about_accordians as $garahtools_about_accordian) :
                                            $count++;
                                    ?>
                                            <div class="panel wt-panel">
                                                <div class="acod-head <?php echo ($count == 1) ? 'acc-actives' : ''; ?>" id="heading<?php echo $count; ?>">
                                                    <h5 class="acod-title">
                                                        <a data-toggle="collapse" href="#collapse<?php echo $count; ?>" aria-expanded="<?php echo ($count == 1) ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $count; ?>">
                                                            <?php echo esc_html($garahtools_about_accordian['title']);?>
                                                            <span class="indicator"><i class="fa"></i></span>
                                                        </a>
                                                    </h5>
                                                </div>

                                                <div id="collapse<?php echo $count; ?>" class="collapse <?php echo ($count == 1) ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $count; ?>" data-parent="#accordion">
                                                    <div class="acod-content p-tb15">
                                                        <?php echo wp_kses_post($garahtools_about_accordian['content']); ?>
                                                    </div>
                                                </div>
                                            </div>

                                    <?php
                                        endforeach;
                                    endif;
                                    ?>


                                </div>

                                <div class="ab-three-info d-flex justify-content-between">
                                    <img src="<?php echo esc_url($garahtools_signature); ?>" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>