<?php
/**
 * The template for displaying about page.
 *
 * @package hilldmc_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header class="page-header-projects">
				<div class="page-header-container">
					<div class ="home-nav">
						<a class="the-x-1-p" href="<?php echo esc_url( home_url( '/' ) ); ?>">X</a>
						<div class="vl-home-1"></div>
						<a class="the-x-2-a" href="<?php echo esc_url( home_url( '/projects' ) ); ?>">X</a>
					</div>
					<div class="header-box">
						<h1>about me</h1>
					</div>
				</div>
			</header>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		<div class="contact-box">
			<div class="contact-container">
				<h3>know me better</h3>
				<div class="social-icons">
					<a href="https://www.linkedin.com/in/hillarydmclean" target="_blank"><i class="fab fa-linkedin"></i></a>
					<a href="https://github.com/hillmclean" target="_blank"><i class="fab fa-github-square"></i></a>
					<a href="mailto:hillary@hilldmc.com" target="_blank"><i class="fas fa-envelope"></i></a>
				</div>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
