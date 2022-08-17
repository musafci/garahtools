<?php
global $section_id;

$garahtools_section = get_post($section_id);
$garahtools_section_title = $garahtools_section->post_title;
$garahtools_section_content = $garahtools_section->post_content;

$garahtools_section_meta = get_post_meta($section_id, 'garahtools_section_testimonial_metabox', true);

if ($garahtools_section_meta) :

    $garahtools_testimonials = $garahtools_section_meta['testimonials'];

?>


    <div class="section-full p-t80 p-b50 bg-no-repeat bg-center bg-white" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/bg-map.png)">
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                    <div class="sep-leaf-left"></div>
                    <div><?php echo esc_html($garahtools_section_title); ?></div>
                    <div class="sep-leaf-right"></div>
                </div>
                <h2><?php echo wp_kses_post($garahtools_section_content); ?></h2>
            </div>
            <!-- TITLE END-->

            <div class="testimonial-slider-two">
                <div class="
                  testimonial-carousel-5
                  owl-carousel owl-theme owl-btn-bottom-center
                ">
                    <?php
                    foreach ($garahtools_testimonials as $garahtools_testimonial) :
                    ?>
                        <div class="item">
                            <div class="testimonial-slider-content clearfix">
                                <div class="testimonial-5 clearfix">
                                    <div class="testimonial-text shadow-sm">
                                        <div class="testimonial-paragraph">
                                            <div class="quote-left"></div>
                                            <p>
                                                <?php echo wp_kses_post($garahtools_testimonial['content']); ?>
                                            </p>
                                        </div>
                                        <div class="testimonial-detail">
                                            <h4 class="testimonial-name"><?php echo esc_html($garahtools_testimonial['title']); ?></h4>
                                        </div>
                                        <div class="testimonial-detail">
                                            <span class="testimonial-position"><?php echo esc_html($garahtools_testimonial['designation']); ?></span>
                                        </div>
                                    </div>
                                    <div class="testimonial-pic-block">
                                        <div class="testimonial-pic">
                                            <img src="<?php echo esc_url($garahtools_testimonial['image']); ?>" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>

                </div>
            </div>
        </div>
    </div>

<?php
endif;
?>