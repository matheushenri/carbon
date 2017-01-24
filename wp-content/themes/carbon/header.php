<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php if( is_front_page() ) { bloginfo('name'); echo ' | '; bloginfo( 'description' ); } else { the_title(); } ?></title>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/logotipo-agencia-carbon-01.png" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="top-bar">
		<div class="wrapper">
			<div class="inner">
				<div>Fale conosco: <a href="tel:+551925152955">19 2515.2955</a> | <a href="mailto:falecom@agenciacarbon.com.br">falecom@agenciacarbon.com.br</a></div>
				<div>Siga-nos nas redes: 
					<ul>
						<li>
							<a href="#">f</a>
						</li>
						<li>
							<a href="#">in</a>
						</li>
						<li>
							<a href="#">ins</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<header id="main-header">
		<div class="wrapper">
			<div class="inner">
				<div>
					<figure>
						<a href="<?php echo site_url(); ?>">
						<object type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/assets/images/logotipo-agencia-carbon-01.svg" class="logo"></object>
						</a>
					</figure>
				</div>
				<div class="nav-container">
					<nav id="main-nav">
						<?php wp_nav_menu( 'main_menu' ); ?>
					</nav>
				</div>
			</div>
		</div>
	</header>