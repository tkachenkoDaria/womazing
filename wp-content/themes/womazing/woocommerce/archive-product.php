<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( );







/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );
?>

<!-- Breadcrumb -->
<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?><h1 class="shop-title"><?php woocommerce_page_title(); ?></h1><?php endif; ?>
                    <ul class="breadcrumb d-none d-lg-block">
                    <?php woocommerce_breadcrumb();?>
                    </ul>
                </div>
            </div>
        </div>
</section>
<!-- End breadcrumb -->

<!-- Navigation shop -->
<section class="navigation-shop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <?php echo do_shortcode ('[yith_wcan_filters slug="draft-preset"]'); ?>
            </div>
        </div>
            <!-- Number of goods -->
            <div class="row">
                <div class="col-12 ">
                    <div class="wrapp-wo d-flex">
                    <?php woocommerce_result_count()?>
                    <?php woocommerce_catalog_ordering()?>
                    </div>
            </div>
            
            
        
    <!-- new-cart-one row -->
                    <?php 
                    if ( wc_get_loop_prop( 'total' ) ) {
                        while ( have_posts() ) {
                            the_post();

                            global $product;

        ?>
                <div class="col-12 col-md-6 col-lg-4">
                     <div class="new-cart">
                        <div class="new-cart__item">
                        <?php echo $product->get_image('full');?>
                            <!-- <img src="./img/new-car-one.jpg" class="new-cart__img" alt="Футболка"> -->
                               <a class="new-cart__overlay" href="<?= $product->get_permalink()?>"></a>
                        </div>
                         <a class="new-cart__title" href="<?= $product->get_permalink() ?>">
                            <h4> <?= $product->get_name();?></h4>
                                <!-- Футболка USA -->
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
                
        <?php


                        }
                    }
                    ?>
                

    
    <!-- Number of goods -->
        <div class="col-12">
        <?php woocommerce_result_count()?>
        </div>
        </div>
    <!-- Pagination -->
    <div class="row">
        <div class="col-12">
            <div class="pagination ">
                <?php woocommerce_pagination()?>
            </div>
    </div>
    </div>
    </div>
    </section>


<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( '' );
