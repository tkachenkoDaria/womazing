</main>
<?php

global $redux;

?>
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-5 col-md-4 col-lg-3  ">
                <div class="footer-info">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo footer-info__logo"><?php the_custom_logo();?></a>
                    <p class="footer-info__copyright"><?= $redux ['footer-cprt']; ?></p>
                    <a href="<?= $redux ['politics-link'] [1]; ?>" class="footer-info__link"><?= $redux ['politics-link'] [0]; ?></a> <span class="d-block"></span>
                    <a href="<?= $redux ['offer-link'] [1]; ?>" class="footer-info__link"><?= $redux ['offer-link'] [0]; ?></a>
                </div>
            </div>
    <!-- Footer-menu mobi-->
            <div class="col-3 offset-1 d-md-block d-sm-none d-lg-none">
                <nav class="menu-header menu-header_footer d-flex flex-column">
					<?php
			wp_nav_menu(
				array(
					'menu'              => 'Подвал mobi_vers', 
					'theme_location' => 'Подвал mobi_vers',
					'menu_id'        => 'menu-3',
                    // 'menu_class'     => 'navigation d-flex justify-content-center',
				)
			);
			?>
                </nav>
            </div>
     <!-- End footer-menu  mobi-->

<!-- Footer-menu desc-->
            <div class="col-lg-5 d-none d-lg-block">
                <nav class="menu-header">
				<?php
			wp_nav_menu(
				array(
					'menu'              => 'Подвал desc', 
					'theme_location' => 'Подвал desc',
					'menu_id'        => 'menu-2',
                    'menu_class'     => 'navigation d-flex justify-content-center',
				)
			);
			?>
                </nav>
            </div>
<!--End footer-menu -->
            <div class="col-5 col-md-3 col-lg-2 offset-2 offset-md-1 offset-lg-2 ">
                <div class="connection">
                    <p class="connection__wrap">
                        <a href="<?= $redux ['footer-tel'] [0]; ?>" class="connection__numder number"><?= $redux ['footer-tel'] [1]; ?></a>
                    </p>
                   <p class="connection__wrap">
                       <a href="<?= $redux ['footer-email'] [0]; ?>" class="connection__email"><?= $redux ['footer-email'] [1]; ?></a>
                    </p>
                </div>
                    <div class="social d-flex justify-content-end align-items-center">
                    <!--noindex-->  
						<a href="<?= $redux ['footer-instagram']; ?>" rel="nofollow noopener noreferrer" target="_blank" class="social__instagram" style='background-image: url("<?php echo $redux['instagram-icon']['url']; ?>");'></a>
					<!--/noindex-->

                    <!--noindex-->  
						<a href="<?= $redux ['footer-facebook']; ?>" rel="nofollow noopener noreferrer" target="_blank" class="social__facebook" style='background-image: url("<?php echo $redux['facebook-icon']['url']; ?>");'></a>
					<!--/noindex-->

                    <!--noindex-->  
						<a href="<?= $redux ['footer-twitter']; ?>" rel="nofollow noopener noreferrer" target="_blank" class="social__twitter" style='background-image: url("<?php echo $redux['twitter-icon']['url']; ?>");'></a>
					<!--/noindex-->
                    </div>
                    <img class="visa-mastercard" src="<?= $redux ['footer-visa'] ['url']; ?>" 
					alt="visa-mastercard"> 
                    <!-- /wp-content/themes/womazing/assets/img/visa-mastercard.png -->
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
