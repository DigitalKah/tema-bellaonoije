<?php 

the_post();

get_header();

if ( is_front_page() ) { ?>

  <section class="home__box-features">
    <div class="container">
      <div class="box-features__content text-center">
        <img src="<?php the_field('home_imagem_destaque'); ?>" alt="<?php the_field('home_imagem_destaque_alt'); ?>" class="box-features__img">			
      </div>
    </div>
	</section>

  <hr class="divider d-none d-lg-block">
  <h2 class="page-content__title"><?php the_field('conteudo_titulo'); ?></h2>
  <hr class="divider d-block d-lg-none mb-5">

  <section class="content">
    <div class="container">      
      <div class="content__post-features">        

        <?php

        $args = array (
          'post_type' => 'post',
          'numberposts'	=> 3,
          'orderby'	=> 'post_date',
          'order'		=> 'ASC'
        );
        $my_posts = new WP_Query ( $args );
        $contador = 0;          

        while ( $my_posts->have_posts() ) : $my_posts->the_post();

          $a_classe = '';
          $b_classe = ''; 

          if ($contador == 1){
            $a_classe = 'order--1';
            $b_classe = 'order--2'; 
          }

          ?>
          <div class="row m-auto"> 
            <div class="<?php echo $b_classe . ' col-lg-5 mobile___order--2' ?>">
              <div class="post-features__img text-center py-4">
                <a href="<?php echo get_permalink() ?>">
                  <img src="<?php the_field('post_imagem') ?>" alt="">
                </a>              
              </div>
            </div>
            <div class="<?php echo $a_classe . ' col-lg-7 d-flex flex-column justify-content-center mobile___order--1' ?>">
              <div class="post-features__data text-center text-lg-left">
                <div class="row m-auto">
                  <div class="col-12 order--2">
                    <a href="<?php echo get_permalink() ?>">
                      <h2><?php the_title() ?></h2>
                    </a>
                  </div>
                  <div class="col-12 order--1">
                    <a href="<?php echo get_permalink() ?>">
                      <h3><?php the_field('post_subtitulo') ?></h3>
                    </a>
                  </div>
                  <div class="col-12 order--3">
                    <a href="<?php echo get_permalink() ?>">
                    <h4><?php echo get_the_excerpt()?></h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          
          <?php 

          $contador ++;
        endwhile;
        wp_reset_query(); 
        wp_reset_postdata(); ?>

      </div>
    </div>
  </section>

  <section class="home__banner--bottom">

    <?php wptutsplus_home_page_banner('bottom'); ?>    
    <?php get_action_buttons('bottom')?>
      
  </section>
<?php } else { ?>
    <div class="post__content">
    <div class="container">
      <div class="row m-auto py-5">
        <div class="col-lg-4">
          <img src="<?php the_field('post_imagem') ?>" alt="<?php the_field('post_imagem_alt') ?>">
        </div>
        <div class="col-lg-8">
          <h1 class="text-dark"><?php the_title() ?></h1>
          <?php the_content(); ?>
          <h4><?php echo get_the_excerpt()?></h4>
        </div>
      </div>
    </div>
  </div>
<?php }
get_footer();