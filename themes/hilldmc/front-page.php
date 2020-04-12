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
      <a href="#the-projects" class="the-x-1-t">X</a>
        <div class="vl-front-1"></div>
          <a href="<?php echo esc_url( home_url( '/projects' ) ); ?>" rel="projects">
          <p class="the-x-1">X</p>  
          <h2 id="the-projects" class="project-h2">the projects</h2>
          </a>
      </div>
  
      <div class="person-box">
      <a href="#the-person" class="the-x-2-t">X</a>
      <div class="vl-front-2"></div>
        <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" rel="about">
        <p class="the-x-2" >X</p>
        <h2 id="the-person" class="person-h2">the person</h2>
        </a>
      </div>
    </div> <!-- end front nav --> 

		</main><!-- #main -->
	</div><!-- #primary -->
  <?php get_footer(); ?>