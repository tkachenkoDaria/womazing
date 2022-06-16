<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<!-- Breadcrumb -->
    <section class="breadcrumbs breadcrumbs_section">
    <div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="shop-title"><?= $product->get_name();?></h1>
                <ul class="breadcrumb d-none d-lg-block">
				<?php woocommerce_breadcrumb();?>
                </ul>
            </div>
        </div>
    </div>
    </section>
    <!-- End breadcrumb -->

    <!--One item page -->
    <section >
    <div class="one-item" <?php wc_product_class( '', $product ); ?>>
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-12 col-lg-6">
                <img  class="sweatshirts" <?php echo $product->get_image('full');?>
            </div>
            <div class="col-12 col-lg-5 offset-lg-1">
                <div class="wrapper-price">
                    <?= do_action( 'woocommerce_after_shop_loop_item_title' ) ?>
                     <!-- <span class="price price_value">$ <?= $product->get_price()?></span>
                
                    <span class="price price_discount"><?= $product->get_variation_price()?></span> -->
                </div>
                    <?php woocommerce_template_single_add_to_cart() ?>
                </div>
            </div>
        </div>
    </section>
<!-- End one item page -->

<!-- Related Products -->
    <section class="related-products">
        <div class="container">
            <div class="row">
                <h2 class="related-product">Связанные товары</h2>
                 <?php 
                    echo do_shortcode('[product_category per_page="2" orderby="rand" order="desc" category="all"]');
                ?>
            </div>
        </div>
    </section>
    <!--End Related Products -->
	
    
    
    <?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
