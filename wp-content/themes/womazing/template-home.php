<?php

/*
* Template name: Home page
*/

 get_header('home');

global $redux;

?>

    <!-- Slider left -->
    <section class="season">
        <div class="container">
            <div class="row justify-content-lg-between align-items-lg-end">
                <div class="col-12 col-lg-6">
                    <div class="slider">
                        <!-- Slider text one -->
                        <div class="offer  ">
                            <h1 class="offer__title">
                            <?php
                            echo $redux ["home-one-text"];
                            ?>
                             <span class="offer__span"> </span> 
                        </h1>
                            <p class="offer__text">
                            <?php
                            echo $redux ["home-one-desc"];
                            ?>
                          </p>
                            <div class="offer-button d-flex align-items-center ">
                                <a href="#new-collection" class="offer-btn__next"></a>
                                <button type="button" onclick="document.location='<?= $redux ['home-one-link']; ?>'" class="btn offer__btn">Открыть магазин</button>
                            </div>
                            <div class="offer-btn d-none">
                                <button type="button" class="offer-btn__slider"></button>
                                <button type="button" class="offer-btn__slider"></button>
                                <button type="button" class="offer-btn__slider"></but>
                            </div>
                        </div>

                        <!-- Slider text two -->
                            <div class="offer  ">
                                <h1 class="offer__title">
                                <?php
                            echo $redux ["home-two-text"];
                            ?>
                                </h1>
                                <p class="offer__text">
                                <?php
                            echo $redux ["home-two-desc"];
                            ?>
                                </p>
                                <div class="offer-button d-flex align-items-center">
                                    <a href="#new-collection" class="offer-btn__next"></a>
                                    <button type="button"  onclick="document.location='<?= $redux ['home-two-link']; ?>'" class="btn offer__btn">Открыть магазин</button>
                                </div>
                                <div class="offer-btn d-none">
                                    <button type="button" class="offer-btn__slider"></button>
                                    <button type="button" class="offer-btn__slider"></button>
                                    <button type="button" class="offer-btn__slider"></button>
                                </div>
                            </div>

                        <!-- Slider text three -->
                        <div class="offer ">
                            <h1 class="offer__title">
                            <?php
                            echo $redux ["home-three-text"];
                            ?>
                            </h1>
                            <p class="offer__text">
                            <?php
                            echo $redux ["home-three-desc"];
                            ?>
                            </p>
                            <div class="offer-button  d-flex align-items-center">
                                <a href="#new-collection" class="offer-btn__next"></a>
                                <button type="button"  onclick="document.location='<?= $redux ['home-three-link']; ?>'"  class="btn offer__btn">Открыть магазин</button>
                            </div>
                            <div class="offer-btn d-none">
                                <button type="button" class="offer-btn__slider"></button>
                                <button type="button" class="offer-btn__slider"></button>
                                <button type="button" class="offer-btn__slider"></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider photo right -->
                <div class="col-12 col-lg-5 ">
                    <div class="model-slider justify-content-lg-end">
                      <div class="slider-photo">
                      <?php

                            $image_ids = explode(',', $redux['home-gallery-list']);
                            $gallery = [];

                            foreach ($image_ids as $image_id) {
                                $gallery[] = wp_get_attachment_url($image_id);
                            }

                            ?>
                          <!-- one photo -->
                          <div class="slider-wrapp">
                              <img src="<?= $gallery[0] ?>" alt="" class="model">
                          </div>
                          <!-- two photo -->
                          <div class="slider-wrapp">
                            <img src="<?= $gallery[1] ?>" alt="" class="model">
                        </div>
                        <!-- three photo -->
                        <div class="slider-wrapp">
                            <img src="<?= $gallery[2] ?>" alt="" class="model">
                        </div>
                      </div>
                        <img src="<?= $redux["home-media-left"] ["url"]; ?>" alt="" class=" model-left d-none d-lg-block">
                        <img src="<?= $redux["home-media-right"] ["url"]; ?>" alt="" class="model-right d-none d-lg-block">
                    </div>
                </div>
        </div>
    </section>
<!-- Slider end -->

    <!-- New collection -->
    <section class="collection">
        <div class="container">
            <div class="row">
            <div class="col-12">
                <h2 class="new-collection" id="new-collection">Новая коллекция</h2>
            </div>
        </div>
        <?php 
 echo do_shortcode('[recent_products per_page="3" ]');
?>
        <div class="row">
            <div class="col-12">
                <button type="button"  onclick="document.location='/shop'" class="btn btn-ghost" >Открыть магазин</button>
            </div>
        </div>
        </div>
        
    </section>
 <!--End new collection -->

    <!-- What is important to us -->
<section class="important">
    <div class="container">
        <div class="row">
            <!-- Quality -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="dignity">
                    <img src="<?= $redux["important-icon"] ["url"]; ?>" class="dignity-icon" alt="icon">
                    <h3 class="dignity__title"><?= $redux ['important-text']; ?></h3>
                    <p class="dignity__desc"><?= $redux ['important-desc']; ?></p>
                </div>
            </div>
            <!-- Speed -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="dignity">
                    <img src="<?= $redux["dignity-icon"] ["url"]; ?>" class="dignity-icon" alt="icon">
                    <h3 class="dignity__title"><?= $redux ['dignity-text']; ?></h3>
                    <p class="dignity__desc"><?= $redux ['dignity-desc']; ?></p>
                </div>
            </div>
            <!-- A responsibility -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="dignity dignity_md">
                    <img src="<?= $redux["responsibility-icon"] ["url"]; ?>" class="dignity-icon" alt="icon">
                    <h3 class="dignity__title"><?= $redux ['responsibility-text']; ?></h3>
                    <p class="dignity__desc"><?= $redux ['responsibility-desc']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End important to us -->

<!-- Dream Team Womazing -->
<section class="command">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="slider-title"><?= $redux ['commands-title']; ?></h2>
                    
            </div>
        </div>
            <div class="row align-items-center">
                <div class="col-12 col-xl-9">
                    <!-- Slider-commands -->
                        <?php

                            $image_sliders = explode(',', $redux['commands-gallery-list']);
                            $photo = [];

                            foreach ($image_sliders as $image_slider) {
                                $photo[] = wp_get_attachment_url($image_slider);
                            }

                            ?>
                        <div class="slider-wrapper">
                            <div class="photo-gallery">
                                <img src="<?= $photo[0] ?>" alt="gallery-one">
                            </div>
                            <div class="photo-gallery ">
                                <img src="<?= $photo[1] ?>" alt="gallery-two">
                            </div>
                            <div class="photo-gallery">
                                <img src="<?= $photo[2] ?>" alt="gallery-three">
                            </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3">
                    <div class="person-command">
                        <h3 class="person-command__title"><?= $redux ['commands-text-title']; ?></h3>
                        <p class="person-command__desc"><?= $redux ['commands-desc'] [0]; ?></p>
                        <p class="person-command__desc"><?= $redux ['commands-desc'] [1]; ?></p>
                        <a href="<?= $redux ['commands-link'] [0]; ?>" class="person-command__link"><?= $redux ['commands-link'] [1];?></a>
                    </div>
                </div>
            </div>
    </div>
</section>
<!--End dream Team Womazing -->





<?php get_footer() ?>