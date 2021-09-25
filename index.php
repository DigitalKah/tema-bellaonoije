<?php 

the_post();

get_header();

?>
  <section class="home__box-features">
    <div class="container">
      <div class="box-features__content text-center">
        <img src="<?php the_field('home_imagem_destaque'); ?>" alt="<?php the_field('home_imagem_destaque_alt'); ?>" class="box-features__img">			
      </div>
    </div>
	</section>

  <section class="home__banner--bottom">
    
    <?php wptutsplus_home_page_banner('bottom'); ?>    
    <?php get_action_buttons('bottom')?>
      
  </section>
<?php 
get_footer();