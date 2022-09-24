<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php echo bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
  <meta name="keywords" content="create website, learn programming, programming courses, programming tutorials, web development, html, web design, learn web development, free programming courses, wordpress">
  <meta name="description" content="<?php bloginfo('description'); ?>"> 
  <meta name="robots" content="index, follow" />
  <meta name="language" content="English" />  
  <meta name="google" content="translate" />  
  <link rel="canonical" href="https://www.edgarsblog.com/">
  <link rel="icon" type="image/png" href="<?php echo bloginfo('template_url');?>/assets/images/programming.png">
<!-- 	fonts  -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/b216491558.js" crossorigin="anonymous"></script>

  	<?php 
     wp_head(); 
    ?>

</head>
<body>

	 <nav>
		 <div class="logo">
		 	<a href="https://www.edgarsblog.com/"><?php the_custom_logo();?><?php the_author();?></a>
		 </div>
	 
		 
		

		

		<div id="myNav" class="overlay">
		
			<a href="#" class="closebtn" onclick="closeNav()">✕</a>
			<div class="overlay-content" id="linking">
			<ul><li>
			<?php 
		 
		 wp_nav_menu( [
			'theme_location'  => 'mobile-menu',
			'menu'            => 'Main',
			'container'       => '',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'overlay',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<div class="overlay-content">%3$s</div>',
			'depth'           => 1,
			'walker'          => '',
		] );
		 
		 ?></li></ul>
			</div>
		</div>
		  
		<a href="#" class="toggle-button" onclick="openNav()">
			<span class="bar1"></span>
			<span class="bar2"></span>
			<span class="bar3"></span>
		</a>
		 
		<div class="navbar-links">
		<?php
			wp_nav_menu(
				array(
			'theme_location'  => 'top-menu',
			'menu'            => 'Main',
			'container'       => '',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'navbar-links',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="" class="navbar-links">%3$s</ul>',
			'depth'           => 1,
			'walker'          => '',
				)
				);
		
		?>
		
		</div>
		
		
			
		
	</nav>
	
	<img src="<?php background_image(); ?>" alt="">
	
	  

	


  






