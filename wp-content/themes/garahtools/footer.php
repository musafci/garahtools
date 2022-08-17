</div>
<!-- CONTENT END -->

<!-- FOOTER START -->
<footer class="site-footer footer-large footer-dark text-white footer-style3">
    <!-- FOOTER BLOCKES START -->
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <?php
                    if (is_active_sidebar('footer-one')) {
                        dynamic_sidebar('footer-one');
                    }
                    ?>
                </div>

                <div class="col-lg-3 col-md-6">
                    <?php
                    if (is_active_sidebar('footer-two')) {
                        dynamic_sidebar('footer-two');
                    }
                    ?>
                </div>


                <div class="col-lg-3 col-md-6">
                    <?php
                    if (is_active_sidebar('footer-three')) {
                        dynamic_sidebar('footer-three');
                    }
                    ?>
                </div>


                <div class="col-lg-3 col-md-6">
                    <?php
                    if (is_active_sidebar('footer-four')) {
                        dynamic_sidebar('footer-four');
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>

    <!-- FOOTER COPYRIGHT -->


    <?php
    $garahtools_options = get_option('garahtools_header_options');

    $garahtools_copyrights_text     =   $garahtools_options['copyrights-text'];
    $garahtools_company             =   $garahtools_options['company'];
    ?>



    <div class="footer-bottom">
        <div class="container">
            <div class="wt-footer-bot-left d-flex justify-content-between">

                <?php if (!empty($garahtools_copyrights_text) || !empty($garahtools_company)) : ?>
                    <span class="copyrights-text"><?php echo esc_html($garahtools_copyrights_text); ?>
                        <span class="site-text-primary"><?php echo esc_html($garahtools_company); ?></span>
                    </span>
                <?php endif; ?>

                <ul class="copyrights-nav">
                    <?php
                    if (is_active_sidebar('footer-menu')) {
                        dynamic_sidebar('footer-menu');
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->



<!-- Get In Touch -->
<div class="contact-slide-hide bg-cover bg-no-repeat" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/bg-7.jpg)">
    <div class="contact-nav">
        <a href="javascript:void(0)" class="contact_close">&times;</a>
        <div class="contact-nav-form">
            <div class="contact-nav-info bg-white p-a30 bg-center bg-no-repeat" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/bg-map2.png)">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="contact-nav-media-section">
                            <div class="contact-nav-media">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/self-pic.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="m-b30">
                            <!-- TITLE START -->
                            <h2 class="m-b30"><?php _e('Get In Touch', 'garahtools') ?></h2>
                            <!-- TITLE END -->
                            <?php echo do_shortcode('[contact-form-7 id="128" title="Request a Quote"]'); ?>
                        </div>
                        <div class="contact-nav-inner text-black">
                            <!-- TITLE START -->
                            <h2 class="m-b30"><?php _e('Contact Info', 'garahtools'); ?></h2>
                            <!-- TITLE END -->
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <div class="wt-icon-box-wraper left icon-shake-outer">
                                        <div class="icon-content">
                                            <h4 class="m-t0"><?php _e('Phone number', 'garahtools'); ?></h4>
                                            <p><?php _e('00966 502318297', 'garahtools'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="wt-icon-box-wraper left icon-shake-outer">
                                        <div class="icon-content">
                                            <h4 class="m-t0"><?php _e('Email address', 'garahtools'); ?></h4>
                                            <p><?php _e('garahtools@gmail.com', 'garahtools'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="wt-icon-box-wraper left icon-shake-outer">
                                        <div class="icon-content">
                                            <h4 class="m-t0"><?php _e('Address info', 'garahtools'); ?></h4>
                                            <p><?php _e('Shop No 81, Near Gate No 3, Souk Al Sagar, Haraj Al Sawaryk, Jeddah, Saudi Arabia', 'garahtools'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- BUTTON TOP START -->
<button class="scroltop">
    <span class="fa fa-angle-up relative" id="btn-vibrate"></span>
</button>
</div>



<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="loader">
            <span class="block-1"></span>
            <span class="block-2"></span>
            <span class="block-3"></span>
            <span class="block-4"></span>
            <span class="block-5"></span>
            <span class="block-6"></span>
            <span class="block-7"></span>
            <span class="block-8"></span>
            <span class="block-9"></span>
            <span class="block-10"></span>
            <span class="block-11"></span>
            <span class="block-12"></span>
            <span class="block-13"></span>
            <span class="block-14"></span>
            <span class="block-15"></span>
            <span class="block-16"></span>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->


<!-- JAVASCRIPT  FILES ========================================= -->
<?php wp_footer(); ?>


</body>

</html>