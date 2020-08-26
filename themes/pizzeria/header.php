<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<?php wp_head(); ?>
</head>
<body>
	
<header class="site-header">
	<div class="contenedor">
		<div class="logo">
			<a href="<?php echo esc_url( home_url('/') ); ?>">
				<img src="<?php echo get_template_directory_uri() ?>/img/logo.svg">
			</a>
		</div>
		<div class="informacion-header">
			<div class="redes-sociales">
				<?php 
				$arg = array(
					'theme_location' => 'redes-sociales',
					'container' => 'nav',
					'container_class' => 'sociales',
					'link_before' => '<span class="sr-text">',
					'link_after' => '</span>'
				);
					 wp_nav_menu($arg);
					 ?>
			</div> <!-- redes sociales -->
			
		</div><!-- informacion header -->
	</div>
</header>
<div class="menu-principal">
	<div class="contenedor">
		<?php 
			$arg =  array(
			'theme_location' =>'header-menu',
			'container' => 'nav',
			'container_class' => 'menu-sitio',
			'container_id' => 'menu'
			  );
			 wp_nav_menu( $arg );
		  ?>
	</div>
</div>
