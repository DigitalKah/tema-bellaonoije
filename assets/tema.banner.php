<?php

function wptutsplus_create_post_type() {
  $labels = array(
		'name' => __( 'Banners' ),
		'singular_name' => __( 'Banner' ),
		'add_new' => __( 'Novo banner' ),
		'add_new_item' => __( 'Adicionar novo' ),
		'edit_item' => __( 'Editar banner' ),
		'new_item' => __( 'Novo banner' ),
		'view_item' => __( 'Ver banner' ),
		'search_items' => __( 'Procurar banners' ),
		'not_found' =>  __( 'Banner não encontrado' ),
		'not_found_in_trash' => __( 'No banners found in Trash' ),
	);
	$args = array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail',
			'page-attributes'
		),
		'taxonomies' => array( 'post_tag', 'category'),
	);
	register_post_type( 'banner', $args );
}
add_action( 'init', 'wptutsplus_create_post_type' );

function wptutsplus_home_page_banner($local) {
	$query = new WP_Query( array(
		'post_type' => 'banner',
		'tax_query' => array (
			array (
				'taxonomy' => 'category',
				'field'   => 'slug',
				'terms'  => $local
			)
		),
	));

	if ( $query->have_posts() ) {  
		while ( $query->have_posts() ) : $query->the_post();

		switch ($local) {
				case 'top': imprime_banner_top();
					break;
				case 'bottom': imprime_banner_bottom();
					break;
		}									
		endwhile;					
		}
	wp_reset_postdata();
}

function imprime_banner_top(){
	?>
		<style>
			.banner{
				background: #FAFAFA;
				min-height:90%;			
			}
			@media (min-width:992px){
				.banner{
					background: url('<?php the_field('imagem_fundo'); ?>') center no-repeat;
					background-size: cover;
				}
			}
		</style>
		<div id="post-<?php the_ID(); ?>" <?php post_class( 'banner pb-4 px-3' ); ?>>
			<div class="text-content">
				<div class="row m-auto">
					<div class="col-12 order--2">
						<h1>
							<?php the_field('banner_topo_destaque'); ?> </br>								
							<?php the_field('banner_topo_destaque_parte_2'); ?>
						</h1>
					</div>
					<div class="col-12 order--1">
						<h3 class="order-1"><?php the_field('banner_topo_titulo'); ?></h3>
					</div>
				</div>									
				<h4><?php the_field('banner_topo_subtitulo'); ?></h4>
			</div>	
		<?php 		
}

function imprime_banner_bottom(){
	?>	

		<style>
			.home__banner--bottom .banner{
				background: #252B42;
				min-height:500px;			
			}
			@media (min-width:992px){
				.home__banner--bottom .banner{
					background: url('<?php the_field('banner_bottom_imagem'); ?>') center no-repeat;
					background-size: cover;
				}
			}
		</style>

		<div id="post-<?php the_ID(); ?>" <?php post_class( 'banner py-5 px-3' ); ?>>
			<div class="text-content">
				<h2><?php the_field('banner_bottom_titulo'); ?></h2>
				<h4 class="d-none d-lg-block"><?php the_field('banner_bottom_subtitulo'); ?></h4>
				<h4 class="d-block d-lg-none"><?php the_field('banner_bottom_subtitulo_mobile'); ?></h4>
			</div>				
	<?php 	
}