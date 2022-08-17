<?php
global $section_id;

$garahtools_section = get_post($section_id);
$garahtools_section_title = $garahtools_section->post_title;
$garahtools_section_content = $garahtools_section->post_content;


$garahtools_section_meta = get_post_meta($section_id, 'garahtools_section_team_metabox', true);

if ($garahtools_section_meta) :

    $garahtools_teams = $garahtools_section_meta['teams'];

?>

    <div class="section-full p-t80 p-b50 bg-white arc2-team-wrapper">
        <div class="container">
            <div class="section-content">
                <!-- TITLE START-->
                <div class="section-head center wt-small-separator-outer text-center">
                    <div class="wt-small-separator site-text-primary">
                        <div class="sep-leaf-left"></div>
                        <div><?php echo esc_html($garahtools_section_title); ?></div>
                        <div class="sep-leaf-right"></div>
                    </div>
                    <h2>
                        <?php echo wp_kses_post($garahtools_section_content); ?>
                    </h2>
                </div>
                <!-- TITLE END-->

                <div class="section-content">
                    <div class="row justify-content-center">
                        <?php
                        foreach ($garahtools_teams as $garahtools_team) :
                        ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                                <div class="wt-team-arc2 wt-team-arc2-no-border">
                                    <div class="wt-media">
                                        <img src="<?php echo esc_url($garahtools_team['image']); ?>" alt="" />
                                        <div class="team-social-center">
                                            <ul class="team-social-icon">
                                                <li>
                                                    <a href="<?php echo esc_attr($garahtools_team['google']); ?>" class="fa fa-google"></a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo esc_attr($garahtools_team['facebook']); ?>" class="fa fa-facebook"></a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo esc_attr($garahtools_team['twitter']); ?>" class="fa fa-twitter"></a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo esc_attr($garahtools_team['linkedin']); ?>" class="fa fa-linkedin"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="wt-info bg-gray-light p-a20">
                                        <div class="team-detail text-center">
                                            <h4 class="m-t0"><?php echo esc_html($garahtools_team['name']); ?></h4>
                                            <p><?php echo esc_html($garahtools_team['designation']); ?></p>
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
    </div>

<?php
endif;
?>