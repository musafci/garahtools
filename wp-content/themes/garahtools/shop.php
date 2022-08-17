<?php get_header(); ?>


<!-- CONTENT START -->
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/5.jpg);">
        <div class="overlay-main site-bg-secondry opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="site-text-primary">Shop</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);">Home</a></li>
                        <li>Shop</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->



    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="section-content">

                <div class="row d-flex justify-content-center">

                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 m-b30">

                        <div class="row">

                            <?php
                            // while (have_posts()) {
                            //     the_post();
                            //     the_content();
                            // }
                            ?>

                            <?php //echo do_shortcode("[products columns=3]"); 
                            ?>

                            <!-- COLUMNS 1 -->
                            <!-- <div class="col-lg-6 col-md-6 m-b30">
                                <div class="wt-box wt-product-box block-shadow  overflow-hide">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                        <img src="images/products/pic-1.jpg" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                </a>
                                                <a class="mfp-link" href="javascript:void(0);">
                                                    <i class="fa fa-heart wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-info  text-center">
                                        <div class="p-a20 bg-white">
                                            <h3 class="wt-title">
                                                <a href="product-detail.html">One Mechanical Tool</a>
                                            </h3>
                                            <span class="price">
                                                <ins>
                                                    <span><span class="Price-currencySymbol">$ </span>49.00</span>
                                                </ins>
                                            </span>


                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        </div>

                    </div>



                    <!-- SIDE BAR START -->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 rightSidebar  m-b30">

                        <aside class="side-bar">

                            <!-- SEARCH -->
                            <div class="widget p-a20">
                                <div class="search-bx">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="news-letter" type="text" class="form-control" placeholder="Write your text">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- RECENT POSTS -->
                            <div class="widget recent-posts-entry p-a20">
                                <div class="text-left m-b30">
                                    <h3 class="widget-title">Recent Posts</h3>
                                </div>
                                <div class="section-content">
                                    <div class="widget-post-bx">
                                        <div class="widget-post clearfix">
                                            <div class="wt-post-media">
                                                <img src="images/blog/recent-blog/pic1.jpg" alt="">
                                            </div>
                                            <div class="wt-post-info">
                                                <div class="wt-post-header">
                                                    <h6 class="post-title"> <a href="#">Loft Office With Vintage Decor For Working</a></h6>
                                                </div>
                                                <div class="wt-post-meta">
                                                    <ul>
                                                        <li class="post-author">26 Feb</li>
                                                        <li class="post-comment">58 Comment</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-post clearfix">
                                            <div class="wt-post-media">
                                                <img src="images/blog/recent-blog/pic2.jpg" alt="">
                                            </div>
                                            <div class="wt-post-info">
                                                <div class="wt-post-header">
                                                    <h6 class="post-title"><a href="#">South African farmers play chicken with tariffs</a></h6>
                                                </div>
                                                <div class="wt-post-meta">
                                                    <ul>
                                                        <li class="post-author">18 Feb</li>
                                                        <li class="post-comment"> 35 Comment</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-post clearfix">
                                            <div class="wt-post-media">
                                                <img src="images/blog/recent-blog/pic3.jpg" alt="">
                                            </div>
                                            <div class="wt-post-info">
                                                <div class="wt-post-header">
                                                    <h6 class="post-title"> <a href="#">Australia’s provider of industry-based research</a> </h6>
                                                </div>
                                                <div class="wt-post-meta">
                                                    <ul>
                                                        <li class="post-author">14 Feb</li>
                                                        <li class="post-comment"> 46 Comment</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Archives -->
                            <div class="widget widget_archives p-a20">
                                <div class="text-left m-b30">
                                    <h3 class="widget-title">Archives</h3>
                                </div>
                                <ul>
                                    <li><a href="javascript:void(0);">December 2019</a></li>
                                    <li><a href="javascript:void(0);">May 2019</a></li>
                                    <li><a href="javascript:void(0);">March 2019</a></li>
                                    <li><a href="javascript:void(0);"> February 2019</a></li>
                                    <li><a href="javascript:void(0);">January 2019</a></li>

                                </ul>
                            </div>

                            <!-- CATEGORY -->
                            <div class="widget widget_services p-a20">
                                <div class="text-left m-b30">
                                    <h3 class="widget-title">Categories</h3>

                                </div>
                                <ul>
                                    <li><a href="javascript:void(0);">Applin</a><span class="badge">28</span></li>
                                    <li><a href="javascript:void(0);">Makeup</a><span class="badge">05</span></li>
                                    <li><a href="javascript:void(0);">Business</a><span class="badge">24</span></li>
                                    <li><a href="javascript:void(0);">Government</a><span class="badge">15</span></li>
                                    <li><a href="javascript:void(0);">Investment</a><span class="badge">20</span></li>
                                    <li><a href="javascript:void(0);">Life</a><span class="badge">15</span></li>
                                    <li><a href="javascript:void(0);">Techniq</a><span class="badge">20</span></li>

                                </ul>
                            </div>

                            <!-- TAGS -->
                            <div class="widget widget_tag_cloud p-a20">
                                <div class="text-left m-b30">
                                    <h3 class="widget-title">Tags</h3>

                                </div>

                                <div class="tagcloud">
                                    <a href="javascript:void(0);">Analytics</a>
                                    <a href="javascript:void(0);">Business </a>
                                    <a href="javascript:void(0);">Consulting</a>
                                    <a href="javascript:void(0);">Solutions </a>
                                    <a href="javascript:void(0);">Development</a>
                                    <a href="javascript:void(0);">Stock</a>
                                    <a href="javascript:void(0);">Finance</a>

                                    <a href="javascript:void(0);">Innovation</a>
                                    <a href="javascript:void(0);">Investing</a>
                                    <a href="javascript:void(0);">Strategic</a>
                                    <a href="javascript:void(0);">Management</a>
                                    <a href="javascript:void(0);">Data </a>
                                    <a href="javascript:void(0);">Planning </a>
                                    <a href="javascript:void(0);">Firm</a>
                                    <a href="javascript:void(0);">Security</a>
                                    <a href="javascript:void(0);">Tax</a>

                                </div>
                            </div>

                            <!-- Social -->
                            <div class="widget p-a20">
                                <div class="widget_social_inks">
                                    <ul class="social-icons social-square social-darkest social-md">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                    </ul>
                                </div>
                            </div>

                        </aside>

                    </div>
                    <!-- SIDE BAR END -->

                </div>
            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->

</div>
<!-- CONTENT END -->



<?php get_footer(); ?>