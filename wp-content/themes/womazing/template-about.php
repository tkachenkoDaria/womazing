<?php

/*
* Template name: About page
*/

 get_header();

?>


    <!-- Breadcrumb -->
    <section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="shop-title"><?= $redux ['about-heading']; ?></h1>
                    <ul class="breadcrumb d-none d-lg-block">
                    <?php echo wpcourses_breadcrumb( ); ?>
                        <!-- <li class="breadcrumb__list">
                            <a href="# " class="breadcrumb__item">Главная</a>
                        </li>
                            <li class="breadcrumb__list active">
                                <span>О бренде</span>
                            </li> -->
                    </ul>
                </div>
            </div>
        </div>
</section>
<!-- End breadcrumb -->

<!-- Idea and woman -->
<section class="about">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-lg-5">
                <img class="about-img" src="<?= $redux["about-photo-one"] ["url"]; ?>" alt="the girl">
                <!-- ./img/about-one.jpg -->
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="concept">
                    <h3 class="concept__title"><?= $redux ['about-title-one']; ?></h3>

                        
                    <p class="concept__desc"><?= $redux ['about-desc-one']; ?></p>
                        
                    <p class="concept__desc"><?= $redux ['about-desc-two']; ?></p>
                       
                </div>
            </div>
        </div>
    </div>
</section>
<!--End idea and woman -->

<!-- The magic is in the details -->
<section class="about about_details">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-lg-5 order-lg-1">
                <img class="about-img about-img_position" src="<?= $redux["about-photo-two"] ["url"]; ?>" alt="the girl">
                <!-- ./img/about-two.jpg -->
            </div>
            <div class="col-lg-7">
                <div class="concept">
                    <h3 class="concept__title"><?= $redux ['about-title-two']; ?></h3>
                        
                    <p class="concept__desc"><?= $redux ['about-one-desc']; ?></p>
                       
                    
                    <p class="concept__desc"><?= $redux ['about-two-desc']; ?></p>
                       
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button class="btn btn-concept" onclick="document.location='<?= $redux ['about-link'] [1]; ?>'" type="button"><?= $redux ['about-link'] [0]; ?></button>
            </div>
        </div>
    </div>
</section>
<!--End the magic is in the details -->



<?php get_footer() ?>