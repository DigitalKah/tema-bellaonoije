<?php 

the_post();

get_header();

?>
 <section class="home__banner--bottom">
    <?php wptutsplus_home_page_banner('bottom'); ?>
    
    <?php get_action_buttons('bottom')?>
      
  </section>
<?php 
get_footer();