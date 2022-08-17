<?php
global $post;

$args = [
    'post_type'         =>  'slider',
    'posts_per_page'    =>  -1,
    'post_status'       =>  'publish',
];

$garahtools_sliders = get_posts($args);

// echo '<pre>';
// print_r($garahtools_sliders);
?>

<div class="slider-outer">
    <div class="main-slider style-two default-banner">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <!-- START REVOLUTION SLIDER 5.4.1 -->
                <div id="rev_slider_26_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase" data-source="gallery" style="background: #aaaaaa; padding: 0px">
                    <div id="rev_slider_26_1" class="rev_slider fullscreenbanner tiny_bullet_slider" style="display: none" data-version="5.4.1">
                        <ul>
                            <!-- SLIDE 1 -->

                            <?php
                            $count = 0;
                            if ($garahtools_sliders) :
                                foreach ($garahtools_sliders as $post) :
                                    setup_postdata($post);

                                    $count++;

                                    $garahtools_slider_bg = get_the_post_thumbnail_url(get_the_ID(), 'full');

                                    $garahtools_s_image = get_post_meta(get_the_ID(), 'garahtools_section_slider_metabox', true);

                                    if (isset($garahtools_s_image['s-image'])) {
                                        $garahtools_s_image_url = $garahtools_s_image['s-image'];
                                        $garahtools_s_image_id  = attachment_url_to_postid($garahtools_s_image_url);
                                        $garahtools_s_image     = wp_get_attachment_image_src($garahtools_s_image_id, 'full');
                                    }
                            ?>
                                    <li data-index="rs-<?php echo $count;  ?>" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo esc_url($garahtools_slider_bg); ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" />
                                        <!-- LAYERS -->

                                        <!-- LAYER 1 [ for overlay ] -->
                                        <div class="tp-caption tp-shape tp-shapewrapper" id="slide-73-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
                                            {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                            {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                            ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                            z-index: 2;
                            background-color: rgba(0, 0, 0, 0.5);
                            border-color: rgba(0, 0, 0, 0);
                            border-width: 0px;
                          "></div>

                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption tp-resizeme" id="slide-73-layer-2" data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-150','-150','-200','-200']" data-width="['650','650','620','380']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":300,"speed":750,"sfxcolor":"#ddd","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                            {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','center','center']" data-paddingtop="[10,10,10,10]" data-paddingright="[20,20,20,20]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[20,20,20,20]" style="
                            z-index: 7;
                            font-size: 24px;
                            line-height: 24px;
                            font-weight: 600;
                            color: #ffffff;
                            letter-spacing: 4px;
                            font-family: 'Teko', sans-serif;
                          ">
                                            <?php the_title(); ?>
                                        </div>

                                        <!-- LAYER NR. 3 -->
                                        <div class="tp-caption tp-resizeme" id="slide-73-layer-3" data-x="['left','left','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-100','-120']" data-fontsize="['100','100','60','40']" data-lineheight="['100','100','60','40']" data-width="['700','650','620','380']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":200,"speed":750,"sfxcolor":"#ddd","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                            {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','center','center']" data-paddingtop="[20,20,20,20]" data-paddingright="[20,20,20,20]" data-paddingbottom="[30,30,30,30]" data-paddingleft="[20,20,20,20]" style="
                            z-index: 8;
                            font-weight: 800;
                            color: #ffffff;
                            font-family: 'Teko', sans-serif;
                          ">
                                            <?php the_content(); ?>
                                        </div>

                                        <!-- LAYER NR. 4 -->
                                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-73-layer-5" data-x="['center','center','center','center']" data-hoffset="['500','500','0','0']" data-y="['middle','middle','bottom','bottom']" data-voffset="['0','0','50','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"delay":400,"speed":750,"sfxcolor":"#000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                            {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6">
                                            <img src="<?php echo esc_url($garahtools_s_image[0]); ?>" alt="" data-ww="['1000px','1000px','800px','500px']" data-hh="['480px','480px','450','281']" width="1200" height="675" data-no-retina />
                                        </div>
                                    </li>
                            <?php
                                endforeach;
                                wp_reset_postdata();
                            endif;
                            ?>

                        </ul>
                        <div class="tp-bannertimer" style="height: 10px; background: rgba(0, 0, 0, 0.15)"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>