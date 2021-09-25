<?php
//Customize
$logo_rodape = get_theme_mod( 'rodape-logo' );
$rodape_copy = get_theme_mod( 'rodape-copy' );
$rodape_copy_mobile = get_theme_mod( 'rodape-copy-mobile' );

$social_twitter = get_theme_mod('social-twitter');
$social_instagram = get_theme_mod('social-instagram');
$social_facebook = get_theme_mod('social-facebook');
$social_linkedin = get_theme_mod('social-linkedin');

?>
<!-- - - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
<footer>
  <div class="container">
    <div class="row m-auto">
      <div class="col-lg-4 py-3">

        <!-- - - - - - - - - - - - Logo - - - - - - - - - - - - - -->
              <a class="footer__logo d-none d-lg-block" title="Bella Onojie" href="">
                <img src="<?php echo $logo_rodape; ?>" alt="Bella Onojie" class="footer__logo">
              </a>              
              <!-- - - - - - - - - - - end Logo - - - - - - - - - - - - -->

      </div>
      <div class="col-lg-4 py-3 text-center d-flex flex-column justify-content-center">
        <div>				
          <!-- - - - - - - - - - - - Social - - - - - - - - - - - - - -->
          <a class="footer__social-icon twitter" title="Twitter" href="<?php echo $social_twitter ?>">
						<img src="<?php echo  get_stylesheet_directory_uri() . '/assets/img/social-twitter.png' ?>" alt="" role="presentation">
					</a>
					<a class="footer__social-icon facebook" title="Facebook" href="<?php echo $social_facebook ?>">
						<img src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/social-facebook.png' ?>" alt="" role="presentation">
					</a>
					<a class="footer__social-icon instagram d-none d-lg-inline" title="Instagram" href="<?php echo $social_instagram ?>">
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/social-instagram.png' ?>" alt="" role="presentation">
					</a>
          <a class="footer__social-icon linkedin d-inline d-lg-none" title="Linkedin" href="<?php echo $social_linkedin ?>">
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/social-linkedin.png' ?>" alt="" role="presentation">
					</a>
        </div>
        <!-- - - - - - - - - - - end Social - - - - - - - - - - - - -->
      </div>
      <div class="col-lg-4 py-3 d-flex flex-column justify-content-center text-center text-lg-right">
        <div class="footer__copy">
          
          <div class="footer__copy">
						<p class="d-none d-lg-block"><?php echo $rodape_copy; ?></p>
            <p class="d-block d-lg-none"><?php echo $rodape_copy_mobile; ?></p>
					</div>           
            
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- - - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->


<?php wp_footer(); ?>
</body>

</html>