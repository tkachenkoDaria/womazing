<?php

/*
* Template name: Contacts page
*/

 get_header();

global $redux;

?>

<!-- Breadcrumb -->
<section class="breadcrumbs">
<div class="container">
<div class="row">
    <div class="col-12">
        <h1 class="shop-title"><?= $redux ['contacts-heading']; ?></h1>
            <ul class="breadcrumb d-none d-lg-block">
            <?php echo wpcourses_breadcrumb( ); ?>
                <!-- <li class="breadcrumb__list">
                    <a href="# " class="breadcrumb__item">Главная</a>
                </li>
                    <li>
                        <span class="breadcrumb__list active">Контакты</span>
                    </li> -->
            </ul>
        </div>
    </div>
</div>
</section>
<!-- End breadcrumb -->

<!-- Map -->
<section class="location">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php 
               echo do_shortcode('[wpgmza id="1"]')
                ?>
                <!-- <div class="map" id="map"></div> -->
            </div>
        </div>
    </div>
</section>
<!--End map -->

<!-- Contact -->
<section class="contact-map">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="contact">
                    <p class="contact__info"><?= $redux ['contacts-title-one']; ?></p>
                    <a href="<?= $redux ['footer-tel'] [0]; ?>" class="contact__desc contact__desc_color"><?= $redux ['footer-tel'] [1]; ?></a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="contact">
                    <p class="contact__info contact__info_margin"><?= $redux ['contacts-title-two']; ?></p>
                    <a href="<?= $redux ['footer-email'] [0]; ?>" class="contact__desc contact__desc_color"><?= $redux ['footer-email'] [1]; ?></a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="contact">
                    <p class="contact__info contact__info_margin"><?= $redux ['contacts-title-three']; ?></p>
                    <p class="contact__desc"><?= $redux ['contacts-desc-three']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End contact -->

<!-- Contact-form -->
<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5">
                 <h3 class="call-back__title call-back__title_contact"><?= $redux ['contacts-form']; ?></h3>
                    

                <?php echo do_shortcode ('[contact-form-7 id="70" title="Контактная форма 1"]'); ?>

                <!-- <form action="#" class="call-back d-flex flex-column">
                   
                    <input type="text" name="firstName" class="call-back__input call-back__input_contact" placeholder="Имя">
                    <input type="email" name="email" class="call-back__input call-back__input_contact" placeholder="E-mail">
                    <input type="tel" name="phone" class="call-back__input call-back__input_contact" placeholder="Телефон">
                
                    <textarea class="call-back__input-textarea" type="text" placeholder="Сообщение" name="textarea" cols="30" rows="5"></textarea>
                
                    <button class="btn call-back__btn call-back__btn_contact" type="submit">Отправить</button>
                </form> -->
            </div>
        </div>
        <!-- Successfully-sent  -->
                <span class="successfully-sent">Сообщение успешно отправлено</span>
    </div>
</section>
<!--End contact-form -->






<?php get_footer() ?>