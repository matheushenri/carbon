<?php get_header(); ?>

	<section id="slideshow">
		<?php echo do_shortcode('[smartslider3 slider=1]'); ?>
	</section>
	<section id="services">
		<div class="wrapper">
			<header class="header-title">
				<div class="title">
				    <h2>O que fazemos</h2>
				</div>
				<div class="description">
					Branding pra gente não é apenas criar uma marca bonita. É mais do que isso, é gerir a marca, acompanhar seu crescimento.
				</div>
			</header>
			<?php
			
			$branding = get_post(20);
			$title = $branding->post_title;
			$excerpt = $branding->post_excerpt;
	
			?>			
			<div class="boxes">
				<div class="box">
					<i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding-icon.png"></i>
					<div class="inner-box">
						<h3><?php echo $title; ?></h3>
						<p><?php echo $excerpt; ?></p>
					</div>
				</div>
				<div class="box">
					<i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding-icon.png"></i>
					<div class="inner-box">		
						<h3>propaganda</h3>
						<p>A propaganda tem formatos e meios variados, pode ser de papel numa revista, num spot de rádio, ou num banner web num site.
						<br><br>
						Saber onde a sua marca deve estar é nosso trabalho. É nosso dever saber qual o veículo mais apropriado e como, de que forma, ela vai conversar com o público  propaganda tem formatos e meios variados, pode ser de papel numa revista, num spot de rádio, ou num banner web num site.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>