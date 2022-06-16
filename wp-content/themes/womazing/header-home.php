<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Womazing
 */

?>
<!doctype html>
<html <?php language_attributes();?> >
<head>
	<meta charset="<?php bloginfo( 'charset' );?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Включай новый сезон с WOMAZING">
    <meta name="keywords" content="магазин-онлай, купить одежду, пальто, свитшоты, кардиганы, толстовки">
	<meta property="og:title" content="WOMAZING">
    <meta property="og:description" content="Включай новый сезон с WOMAZING">
    <meta property="og:type" content="article">
    <meta property="og:image" content="#">
	<meta property="og:site_name" content="WOMAZING">
	<meta name="theme-color" content="#f0ebeb">
    <link rel="apple-touch-icon" href="./assets/img/apple-touch.png">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
    <!-- Header Start -->
    <header class="header">
        <div class="container">
            <div class="row">
        <!-- Logo -->
            <div class="menu-desc d-flex align-items-lg-center justify-content-md-between">
                <div class="col-2">
                 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><?php the_custom_logo();?></a>
            </div>
        <!-- Desc-menu -->
            <div class="col-md-6 ">
                <nav class="menu-header ">
                        <!-- <ul class="navigation d-flex justify-content-center "> -->
                     <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
                    'menu_class'     => 'navigation d-flex justify-content-center',
				)
			);
			?>
                </nav>
            </div>
            <div class="col-lg-3 d-flex align-items-lg-center justify-content-lg-end ">
                <button type="button"  class="phone-icon"></button>
                <a href="tel:+74958235412" class="number">+7 (495) 823-54-12</a>
                <a href="/cart" class="basket"> 
                    <span class="basket-total">
                        <p class="basket-total-number"> <?php echo count_item_in_cart(); ?></p>
                    </span>
                </a>
            </div>
            </div>
            </div>
<!-- End desc-menu -->

             <!-- Mobile Menu -->
            <div class="row">
                <div class="menu-mobi d-flex justify-content-between align-items-center d-lg-none ">
                    <div class="col-3">
                        <div class="menu-mobi-logo d-none">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo logo_mobi"><?php the_custom_logo();?></a>
                       </div>
                    </div>
                    <div class="col-5 offset-1 d-flex align-items-center justify-content-center">
                        <button type="button" class="phone-icon"></button>
                        <a href="tel:+74958235412" class="number number-mobi ">+7 (495) 823-54-12</a>
                        
                        <a href="/cart" class="basket"> 
                            <span class="basket-total">
                                <p class="basket-total-number"> <?php echo count_item_in_cart(); ?></p>
                            </span>
                        </a>
                    </div>
                    <div class="col-2 offset-1">
                       <div class="menu-mobi-hamburger d-lg-none">
                           <button type="button" class="hamburger"></button>
                        <nav class="menu-header menu-mobi-header">
                        <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',

                    'menu_class'        => 'navigation navigation_mobi d-flex justify-content-center',
				)
			);
			?>
                            <button type="button" class="mobi-menu-close"></button>
                        </nav>
                       </div>
                    </div>
                </div>
            </div>
        </div>
<!--End mobile Menu -->

    <!-- Modal window one -->
        <div class="row">
            <div class="col-12">
                <div class="wrapper-modal" id="wrapper-modal">
                <div class="overlay" id="overlay"></div>
                    <div class="modal-window">
                        <form action="" id="form-book" class="call-back  call-back_modal form-book_header form-val d-flex flex-column">
                            <button type="button" class="close"></button>
                            <h3 class="call-back__title">Заказать обратный звонок</h3>
                            <input type="text" name="firstName" class="call-back__input" placeholder="Имя">
                            <input type="email" name="email" class="call-back__input" placeholder="E-mail">
                            <input type="tel" name="phone" class="call-back__input" placeholder="Телефон">
                            <button class="btn call-back__btn select-btn button-form" type="submit">Заказать звонок</button>
                        </form>
                    </div>
                    <div class="successfully ">
                            <h3 class="successfully__title">Отлично! Мы скоро вам перезвоним.</h3>
                            <button class="btn btn-ghost btn-ghost_modal" type="button">Закрыть</button>
                        </div>
                </div>
    <!-- Modal window two -->
                <!-- <div class="wrapper-modal-two" id="wrapper-modal">
                <div class="overlay" id="overlay"></div>
                    <div class="modal-window">
                        
                    </div>
                </div> -->
            </div> 
        </div>
    <!-- End modal window  -->
    </header>
<!-- Header End -->
<main>
    