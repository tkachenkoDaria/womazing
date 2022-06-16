<?php


if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {

    function womazing_add_woocommerce_support()
    {
        add_theme_support('woocommerce');
    }

    add_action('after_setup_theme', 'womazing_add_woocommerce_support');

}

remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20);
/**
     * Change several of the breadcrumb defaults
     */
    add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
    function jk_woocommerce_breadcrumbs() {
        return array(
                'delimiter'   => '<li class="breadcrumb__item">',
                'wrap_before' => '<ul class="breadcrumb d-none d-lg-block" itemprop="breadcrumb">',
                'wrap_after'  => '</ul>',
                'before'      => ' <li class="breadcrumb__list"> <span class="breadcrumb__list active">',
                'after'       => '</li> </span> ',
                'home'        => _x( 'Главная', 'breadcrumb', 'woocommerce' ),
            );
        }

        // Показано из n товаров
        remove_action('woocommerce_before_shop_loop','woocommerce_result_count',20);

        //Sidebar
        remove_action('woocommerce_sidebar','woocommerce_get_sidebar',10);

        //Сортировка
        remove_action('woocommerce_before_shop_loop','woocommerce_catalog_ordering',30);

        //Пагинация
        remove_action('woocommerce_after_shop_loop','woocommerce_pagination',10);

        // Пагинация (фильтр стрелки)
        add_filter( 'woocommerce_pagination_args', function ( $args ) {
            $args['prev_text'] = ''; // ваша стрелка
            $args['next_text'] = '<button type="button" class="pagination__next"></button>'; // ваша стрелка
        
            return $args;
        } );

        // Изменение текста в кнопке В корзину
        add_filter( 'woocommerce_product_single_add_to_cart_text', 'tb_woo_custom_cart_button_text' );
        add_filter( 'woocommerce_product_add_to_cart_text', 'tb_woo_custom_cart_button_text' );
            function tb_woo_custom_cart_button_text() {
                    return __( 'Добавить в корзину', 'woocommerce' );
            }




        //     add_filter( 'woocommerce_output_related_products_args', 'change_number_of_related_products' );

        // function change_number_of_related_products( $args ) {
        // $args['posts_per_page'] = 2; // количество выводимых похожих товаров
        // $args['columns']        = 1;    // количесто столбцов
        // return $args;
        // }


        // Убирает в корзине вариации товара
        add_filter( 'woocommerce_product_variation_title_include_attributes', 'custom_product_variation_title', 10, 2 );
        function custom_product_variation_title($should_include_attributes, $product){
            $should_include_attributes = false;
            return $should_include_attributes;
        }


        // Меняет названия кнопки Разместить заказ
        add_filter( 'woocommerce_order_button_text', 'truemisha_order_button_text' );
        
        function truemisha_order_button_text( $button_text ) {
            return 'Разместить заказ';
        }



        //Текст политики
        remove_action('woocommerce_checkout_terms_and_conditions','wc_checkout_privacy_policy_text',20);



       //Хуки из страиницы одного товара
       remove_action('woocommerce_before_single_product_summary','woocommerce_show_product_sale_flash',10);

       remove_action('woocommerce_before_single_product_summary','woocommerce_show_product_images',20);

       remove_action('woocommerce_single_product_summary','woocommerce_template_single_title',5);

       remove_action('woocommerce_single_product_summary','woocommerce_template_single_rating',10);

       remove_action('woocommerce_single_product_summary','woocommerce_template_single_price',10);

       remove_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt',20);

       remove_action('woocommerce_single_product_summary','woocommerce_template_single_add_to_cart',30);

       remove_action('woocommerce_single_product_summary','woocommerce_template_single_meta',40);

       remove_action('woocommerce_single_product_summary','woocommerce_template_single_sharing',50);

       remove_action('woocommerce_after_single_product_summary','woocommerce_output_product_data_tabs',10);

       remove_action('woocommerce_after_single_product_summary','woocommerce_upsell_display',15);

       remove_action('woocommerce_after_single_product_summary','woocommerce_output_related_products',20);



    // Количество товаров в корзине
        function count_item_in_cart() {
            $count = 0;
            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                $count++;
            }
            return $count;
        }
