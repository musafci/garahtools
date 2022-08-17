<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>
<li <?php wc_product_class('', $product); ?>>

	<?php
	$garahtools_products_link = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);
	?>

	<a href="<?php echo esc_url($garahtools_products_link); ?>">

		<div class="wt-box wt-product-box block-shadow  overflow-hide">

			<div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
				<?php do_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10); ?>
				<!-- <div class="overlay-bx">
				<div class="overlay-icon">
					<a href="javascript:void(0);">
						<i class="fa fa-cart-plus wt-icon-box-xs"></i>
					</a>
					<a class="mfp-link" href="javascript:void(0);">
						<i class="fa fa-heart wt-icon-box-xs"></i>
					</a>
				</div>
			</div> -->
			</div>
			<div class="wt-info  text-center">
				<div class="p-a20 bg-white">
					<h3 class="wt-title">
						<?php do_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10); ?>
					</h3>

					<span class="price">
						<ins>
							<span>
								<span class="Price-currencySymbol">
									<?php do_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10); ?>
								</span>
							</span>
						</ins>
					</span>

				</div>
			</div>

		</div>
	</a>

	<?php

	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	// do_action('woocommerce_before_shop_loop_item');


	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	// do_action('woocommerce_before_shop_loop_item_title');


	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	// do_action('woocommerce_shop_loop_item_title');

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	// do_action('woocommerce_after_shop_loop_item_title');

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	// do_action('woocommerce_after_shop_loop_item');

	?>
</li>