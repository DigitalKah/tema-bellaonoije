<?php
//Customize
$logo_header = get_theme_mod( 'header-logo' );

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>

    <!-- Google Web Fonts
    ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@400;600&family=Roboto:wght@700&display=swap" rel="stylesheet">

		<meta charset="utf-8">
		<title><?php bloginfo('name');?></title>
		
    <meta name="description" content="Food app Bella Onojie">
		<meta property="og:type" content="website"/>
		<meta property="og:title" content="<?php bloginfo('name');?>"/>
		<meta property="og:description" content="Food app Bella Onojie"/>
		<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
		<meta property="og:image" content=""/>

		<meta name="viewport" content="width=device-width, initial-scale=1">		

		<?php wp_head(); ?>
	</head>
	<body>

    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->
    <header>      
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <div class="container">

            <!-- - - - - - - - - - - - Logo - - - - - - - - - - - - - -->
            <a class="header__logo" title="Bella Onojie" href="<?php bloginfo('url'); ?>">
              <img src="<?php echo $logo_header ?>" alt="Bella Onojie" class="header__logo">            
            </a>
            <!-- - - - - - - - - - - end Logo - - - - - - - - - - - - -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Botão de Menu Mobile">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">                
                <?php
                  $args = array(
                    'menu' => 'principal',
                    'container' => 'ul',
                    'theme_location' => 'menu-principal',
                    'menu_class' => 'navbar-nav ml-auto',                  			                
                  );
                  wp_nav_menu( $args );
                ?>                
            </div>
          </div><!-- end Container -->
        </nav>
        <!-- - - - - - - - - - - - end Navigation - - - - - - - - - - - - - -->      
    </header>
    <!-- - - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Main - - - - - - - - - - - - - - - - -->    
