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
      <p class="follow">follow me...</p>
    </div>

    <div class="front-nav">
      
      <div class="projects-box">
      <p class="the-x-1-t">X</p>
        <div class="vl-front-1"></div>
        <p class="the-x-1">X</p>
          <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" rel="portfolio">
            <h2 class="project-h2">the projects</h2>
          </a>
      </div>
  
      <div class="person-box">
      <p class="the-x-2-t">X</p>
      <div class="vl-front-2"></div>
      <p class="the-x-2" >X</p>
        <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" rel="about">
        <h2 class="person-h2">the person</h2>
        </a>
      </div>
    </div> <!-- end front nav --> 

		</main><!-- #main -->
	</div><!-- #primary -->
