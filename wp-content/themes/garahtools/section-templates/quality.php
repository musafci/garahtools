<?php
global $section_id;

$garahtools_section = get_post($section_id);
$garahtools_section_title = $garahtools_section->post_title;
$garahtools_section_content = $garahtools_section->post_content;


$garahtools_section_meta = get_post_meta($section_id, 'garahtools_section_quality_metabox', true);

if ($garahtools_section_meta) :

    $garahtools_quality_video_image = $garahtools_section_meta['image'];
    $garahtools_quality_video_link  = $garahtools_section_meta['link'];
    $garahtools_qualities = $garahtools_section_meta['qualities'];

?>
    <div class="section-full p-t80">
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
        </div>

        <div class="section-content quality-section-outer bg-gray-light">
            <div class="container">
                <div class="quality-section-content">
                    <div class="counter-outer">
                        <div class="row justify-content-center">

                            <?php
                            foreach ($garahtools_qualities as $garahtools_quality) :
                            ?>
                                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                                    <div class="wt-icon-box-wraper center bg-gray-light p-a20">
                                        <h2 class="counter site-text-primary m-b0"><?php echo esc_html($garahtools_quality['counter']); ?></h2>
                                        <span class="site-text-secondry title-style-2"><?php echo esc_html($garahtools_quality['counter_title']); ?></span>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>

                <div class="quality-video2-section p-t20 p-b80">
                    <div class="quality-video2">
                        <img src="<?php echo esc_url($garahtools_quality_video_image); ?>" alt="" />
                        <a href="<?php echo esc_attr($garahtools_quality_video_link); ?>" class="mfp-video play-now">
                            <i class="icon fa fa-play"></i>
                            <span class="ripple"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>