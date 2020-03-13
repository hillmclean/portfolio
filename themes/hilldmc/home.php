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
				<h1>the projects</h1>
			</header>

				<?php
				$args = array( 
					'post_type' => 'post',
				);
				$blog_posts = get_posts( $args ); 
				?>

		<div class="projects-grid" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php foreach($blog_posts as $post): setup_postdata ($post); ?>
			
			<div class="project-img">
			<?php echo the_post_thumbnail()?>
			</div>
				
			<div class="project-info">
					<a href="<?php the_permalink()?>">
					<h2><?php the_title() ?></h2>
					</a>
					<p><?php the_content() ?></p>
				<button class="journal-button"><a class="button-text" href="<?php the_permalink()?>">Read Entry</a>
				</button>
			</div>

	
			<?php endforeach; ?>
			<?php  wp_reset_postdata(); ?>
		</div> 	<!-- projects-grid -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
