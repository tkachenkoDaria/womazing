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

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="col-12 col-md-6 col-lg-4">
<div class="new-cart">
   <div class="new-cart__item">
   <?php echo $product->get_image('full');?>
		  <a class="new-cart__overlay new-cart__overlay_group" href="<?= $product->get_permalink()?>"></a>
   </div>
	<a class="new-cart__title" href="<?= $product->get_permalink() ?>">
	   <h4> <?= $product->get_name();?></h4>
   </a>
   <div class="prices prices_margin">
   <?= do_action( 'woocommerce_after_shop_loop_item_title' ) ?>
	   <!-- <span class="price price_discount"><?= $product->get_sale_price()?></span>
		-->
	   <!-- $229 -->
	   <!-- <span class="price price_value">$ <?= $product->get_price()?></span> -->
	  
	   <!-- >$129 -->
   </div>
</div>
</div>