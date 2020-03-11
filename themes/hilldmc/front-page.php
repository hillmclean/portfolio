<?php
/**
 * The template for displaying front-page.
 *
 * @package hilldmc_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="title-box">
        <h1 class="front-title">hillary mclean</h1>
      </div>


    <div class="red-box-front">
    </div>

    <div class="front-nav">
      <div class="projects-box">
      <p class="the-x">X</p>
        <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" rel="portfolio">
          <h2>the projects</h2>
        </a>
      </div>
    

      <div class="person-box">
      <p class="the-x" >X</p>
        <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" rel="about">
        <h2>the person</h2>
        </a>
      </div>
    </div> <!-- end front nav --> 

		</main><!-- #main -->
	</div><!-- #primary -->
