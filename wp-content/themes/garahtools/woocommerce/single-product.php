<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

get_header('shop');
?>

<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/banner/5.jpg);">
	<div class="overlay-main site-bg-secondry opacity-07"></div>
	<div class="container">
		<div class="wt-bnr-inr-entry">

			<div class="banner-title-outer">
				<div class="banner-title-name">
					<?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
						<h2 class="site-text-primary woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h2>
					<?php endif; ?>
				</div>
			</div>
			<!-- BREADCRUMB ROW -->

			<div>
				<ul class="wt-breadcrumb breadcrumb-style-2">
					<?php do_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20); ?>
				</ul>
			</div>

			<!-- BREADCRUMB ROW END -->
		</div>
	</div>
</div>

<div class="section-full p-t80 p-b80">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<?php
				/**
				 * woocommerce_before_main_content hook.
				 *
				 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
				 * @hooked woocommerce_breadcrumb - 20
				 */
				remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
				do_action('woocommerce_before_main_content');
				?>

				<?php while (have_posts()) : ?>
					<?php the_post(); ?>

					<?php wc_get_template_part('content', 'single-product'); ?>

				<?php endwhile; // end of the loop. 
				?>

				<?php
				/**
				 * woocommerce_after_main_content hook.
				 *
				 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
				 */
				do_action('woocommerce_after_main_content');
				?>

				<?php
				/**
				 * woocommerce_sidebar hook.
				 *
				 * @hooked woocommerce_get_sidebar - 10
				 */

				//do_action('woocommerce_sidebar');
				?>

			</div>
		</div>
	</div>
</div>


<?php
get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
