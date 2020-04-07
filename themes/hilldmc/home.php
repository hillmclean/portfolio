<?php
/**
 * The template for posts
 *
 * @package hilldmc_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main-projects" role="main">

	

			<header class="page-header-projects">
				<div class="page-header-container">
					<div class ="home-nav">
						<a class="the-x-1-p" href="<?php echo esc_url( home_url( '/' ) ); ?>">X</a>
						<div class="vl-home-1"></div>
					</div>
					<div class="header-box">
						<h1>the projects</h1>
					</div>
				</div>
			</header>

				<?php
				$args = array( 
					'post_type' => 'post',
				);
				$blog_posts = get_posts( $args ); 
				?>

		<div class="projects-grid" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php foreach($blog_posts as $post): setup_postdata ($post); ?>
			

			<div class="project-info">
					<h2><?php the_title() ?></h2>
					</a>
					<p><?php the_content() ?></p>
				<a class="button" href="<?php the_field('link')?>" target="_blank">View Repo</a>
			</div>

			<div class="project-img">
			<?php echo the_post_thumbnail()?>
			</div>

	
			<?php endforeach; ?>
			<?php  wp_reset_postdata(); ?>
		</div> 	<!-- projects-grid -->

		</main><!-- #main -->
	</div><!-- #primary -->
