<?php

/*
 * Template name: Cart page
 */

get_header();


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
  <!--================Cart Area before LG =================-->
  <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">





    <section class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive  ">
                    <table class="table">
                        <thead class="thead">
                        <tr>
                            <th class="thead__heading" scope="col">Товар</th>
                            <th class="thead__heading thead__heading_price" scope="col">Цена</th>
                            <th class="thead__heading thead__heading_quantity" scope="col">Количество</th>
                            <th class="thead__heading thead__heading_price-total" scope="col">Всего</th>
                          </tr>
                        </thead>
                        <tbody class="tbody-wrap">



                        <?php
                        foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                            $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                            $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                            if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                                $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                                ?>
                                <tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
                                
                                    <td>
                                        <div class="cart-contents d-flex align-items-center">
                                            <?php
                                            echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                                'woocommerce_cart_item_remove_link',
                                                sprintf(
                                                    '<a href="%s" class="remove" aria-label="%s" style="color: #212529;" data-product_id="%s" data-product_sku="%s"><button type="button" class="cart-contents__remove"></button></a>',
                                                    esc_url(wc_get_cart_remove_url($cart_item_key)),
                                                    esc_html__('Remove this item', 'woocommerce'),
                                                    esc_attr($product_id),
                                                    esc_attr($_product->get_sku())
                                                ),
                                                $cart_item_key
                                            );
                                            ?>
                                            <div class="cart-contents__product">
                                            <?php
                                                    $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                                                    if ( ! $product_permalink ) {
                                                        echo $thumbnail; // PHPCS: XSS ok.
                                                    } else {
                                                        printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                                                    }
                                             ?>
                                        </div>
                                            <!-- <div class="media-body"> -->
                                         <p class="cart-contents_name">
                                            <?php
                                            if ( ! $product_permalink ) {
                                                echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                                            } else {
                                                echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                                            }
                                            
                                            ?>
                                        </p>
                                        </div>
                                    </td>
                                    <td class="price-wrap">
                                        <p class="price">$
                                            <?php
                                                echo $_product->get_price();
                                            ?>
                                        </p>
                                    </td>
                                    <td>
                                        <?php
                                        if ($_product->is_sold_individually()) {
                                            $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
                                        } else {
                                            $product_quantity = woocommerce_quantity_input(
                                                array(
                                                    'input_name' => "cart[{$cart_item_key}][qty]",
                                                    'input_value' => $cart_item['quantity'],
                                                    'max_value' => $_product->get_max_purchase_quantity(),
                                                    'min_value' => '0',
                                                    'product_name' => $_product->get_name(),
                                                ),
                                                $_product,
                                                false
                                            );
                                        }

                                        echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
                                        ?>
                                    </td>
                                    <td class="total-wrap">
                                    <p class="price">
                                            <?php
                                            echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                                            ?>
                                        </p>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                    </div>
                </div>







    <!--================Cart Area after LG =================-->

        <div class="d-flex align-items-center justify-content-md-center d-none column">
        <?php
                 echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    'woocommerce_cart_item_remove_link',
                        sprintf(
                            '<a href="%s" class="remove" aria-label="%s" style="color: #212529;" data-product_id="%s" data-product_sku="%s"><button type="button" class="cart-contents__remove"></button></a>',
                            esc_url(wc_get_cart_remove_url($cart_item_key)),
                            esc_html__('Remove this item', 'woocommerce'),
                            esc_attr($product_id),
                            esc_attr($_product->get_sku())
                            ),
                            $cart_item_key
                            );
                            ?>
            
            <!-- <button type="button" class="cart-contents__remove"></button> -->
            
    <div class="cart-contents__product">
        <?php
            $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
            if ( ! $product_permalink ) {
             echo $thumbnail; // PHPCS: XSS ok.
            } else {
            printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
            }
            ?>
    </div>
        <a href="#">
        <?php
            if ( ! $product_permalink ) {
            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
            } else {
            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
            }
            ?>
        </a>
        <p class="price price_md">$<?php echo $_product->get_price();?></p>
        <!-- <div class="product_count">
        <?php
						if ( $_product->is_sold_individually() ) {
							$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
						} else {
							$product_quantity = woocommerce_quantity_input(
								array(
									'input_name'   => "cart[{$cart_item_key}][qty]",
									'input_value'  => $cart_item['quantity'],
									'max_value'    => $_product->get_max_purchase_quantity(),
									'min_value'    => '0',
									'product_name' => $_product->get_name(),
								),
								$_product,
								false
							);
						}
						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?> -->
            <!-- <input class="quantity" type="text" value="1" min="1" max="10"> -->
        <!-- </div> -->

        </div>

    </div>

    <!--================END Cart Area after LG =================-->

            <div class="row">
                <div class="co-12 col-lg-6 d-flex align-items-end">
                    <?php if ( wc_coupons_enabled() ) { ?>
							<input type="text" name="coupon_code" class="cupon" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Введите купон', 'woocommerce' ); ?>" />
                             <button type="submit" class="btn btn-ghost btn-ghost_cupon" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"> Применить купон</button>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
					<?php } ?>  
                </div>
                <div class="col-12 col-lg-4 offset-lg-2 col-xl-3 offset-xl-3">
                <button type="submit" class="btn btn-ghost btn-ghost_renew-cart" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>">Обновить корзину</button>
                <?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
                </div>
            </div>
            <div class="row justify-content-lg-end">
                <div class="col-12 col-lg-7 col-xl-6">
                    <p class="font price_subtotal">Подытог: <span class="font price_subtotal"><?php wc_cart_totals_subtotal_html(); ?></span></p>
                    <div class="d-flex column-sm">
                        <div class="final final_sm d-flex align-items-center">
                        <p class="total-text">Итого:</p>
                        <span class="price price_total"><?php wc_cart_totals_order_total_html();?></span>
                    </div>
                <button class="btn" onclick="document.location='/checkout'" type="button">Оформить заказ</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </form>
      <!--================End Cart Area =================-->



<?php

get_footer();

?>