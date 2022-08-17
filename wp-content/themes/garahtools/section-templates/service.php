<?php
global $section_id;

$garahtools_section = get_post($section_id);
$garahtools_section_title = $garahtools_section->post_title;
$garahtools_section_content = $garahtools_section->post_content;


$garahtools_section_meta = get_post_meta($section_id, 'garahtools_section_service_metabox', true);

if ($garahtools_section_meta) :

    $garahtools_services = $garahtools_section_meta['services'];

?>


    <div class="section-full p-t80 p-b50 bg-white">
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
                <div class="row justify-content-center">


                    <!-- COLUMNS -->
                    <?php
                    $count = 0;
                    foreach ($garahtools_services as $garahtools_service) :
                        $count++;
                    ?>
                        <div class="col-lg-4 col-md-6 m-b30 animate_line">
                            <div class="wt-box service-box-1-new bg-white cardbg">
                                <div class="wt-icon-box-wraper-new">
                                    <div class="icon-xl inline-icon">
                                        <span class="icon-cell site-text-primary"><i class="<?php echo esc_attr($garahtools_service['icon']); ?>"></i></span>
                                    </div>
                                    <div class="wt-icon-number-new"><span>0<?php echo $count; ?></span></div>
                                </div>

                                <div class="
                        service-box-title-new
                        title-style-2
                        site-text-secondry
                      ">
                                    <h3 class="s-title-one"><?php echo esc_html($garahtools_service['title']); ?></h3>
                                </div>

                                <div class="service-box-content-new">
                                    <p>
                                        <?php echo wp_kses_post($garahtools_service['content']); ?>
                                    </p>
                                </div>
                                <div class="cardbg-pic" style="background-image: url(<?php echo esc_url($garahtools_service['image']); ?>)"></div>
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