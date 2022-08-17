<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
</head>


<?php
$garahtools_options = get_option('garahtools_header_options');

$garahtools_date    =   $garahtools_options['date'];
$garahtools_time    =   $garahtools_options['time'];
$garahtools_phone   =   $garahtools_options['phone'];
$garahtools_email   =   $garahtools_options['email'];

$garahtools_info    =   $garahtools_options['info'];

$garahtools_logo    =   $garahtools_options['logo'];

if (empty($garahtools_logo)) {
    $garahtools_logo =  get_template_directory_uri() . '/assets/images/logo-2.png';
}
?>

<body <?php body_class(); ?>>

    <div class="page-wraper">
        <!-- HEADER START -->
        <header class="site-header header-style-1 mobile-sider-drawer-menu">
            <!-- SITE Search -->
            <div id="search-toggle-block">
                <!-- <div id="search"> -->
                    <!-- <form role="search" id="searchform" action="" method="get" class="radius-xl">
                        <div class="input-group">
                            <input class="form-control" value="" name="q" type="search" placeholder="Type to search" />
                            <span class="input-group-append">
                                <button type="button" class="search-btn">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form> -->
                    <?php
                    if (is_active_sidebar('shop')) {
                        dynamic_sidebar('shop');
                    }
                    ?>
                <!-- </div> -->
            </div>

            <div class="top-bar site-bg-secondry">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <div class="wt-topbar-left d-flex flex-wrap align-content-start">
                            <ul class="wt-topbar-info e-p-bx text-white">
                                <?php if (!empty($garahtools_date) || !empty($garahtools_time)) : ?>
                                    <li>
                                        <span><?php echo esc_html($garahtools_date); ?></span>
                                        <span><?php echo esc_html($garahtools_time); ?></span>
                                    </li>
                                <?php endif; ?>

                                <?php if (!empty($garahtools_phone)) : ?>
                                    <li><i class="fa fa-phone"></i><?php echo esc_html($garahtools_phone); ?></li>
                                <?php endif; ?>

                                <?php if (!empty($garahtools_email)) : ?>
                                    <li><i class="fa fa-envelope"></i><?php echo esc_html($garahtools_email); ?></li>
                                <?php endif; ?>

                            </ul>
                        </div>

                        <div class="wt-topbar-right d-flex flex-wrap align-content-center">
                            <div class="header-search">
                                <a href="javascript:;" class="header-search-icon"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container header-middle clearfix">
                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo esc_url($garahtools_logo); ?>" alt="" />
                        </a>
                    </div>
                </div>

                <?php if ($garahtools_info) : ?>
                    <div class="header-info">
                        <ul>
                            <?php
                            foreach ($garahtools_info as $garahtools_info_item) :
                            ?>
                                <li>
                                    <div class="icon-md">
                                        <span class="icon-cell"><i class="<?php echo esc_attr($garahtools_info_item['icon']); ?>"></i></span>
                                    </div>
                                    <div class="icon-content">
                                        <strong><?php echo esc_html($garahtools_info_item['title']); ?></strong>
                                        <span><?php echo esc_html($garahtools_info_item['content']); ?></span>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

            </div>

            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar">
                    <div class="container clearfix">
                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>

                        <!-- MAIN Vav -->
                        <div class="
                  nav-animation
                  header-nav
                  navbar-collapse
                  collapse
                  d-flex
                  justify-content-center
                ">
                            <?php
                            wp_nav_menu(
                                array(
                                    'menu'  =>  'top-menu',
                                    'menu_id'   => 'top-menu',
                                    'theme_location'    =>  'top-menu',
                                    'menu_class'    =>  'nav navbar-nav'
                                )
                            );
                            ?>
                        </div>

                        <div class="header-nav-request">
                            <a href="#" class="contact-slide-show">Request a Quote <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER END -->