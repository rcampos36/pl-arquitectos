<?php
/**
 * Displays content page
 */
?>

<div id="main" class="main-content">
  <div  class="entry-content-wrapper ">
    
    <?php if( have_rows('home_page_content') ): ?>

    <?php while ( have_rows('home_page_content') ) : the_row();?>
      <?php if (get_row_layout() == 'hero'):?>
          <!-- 	hero block -->
        <?php get_template_part( '/blocks/hero' ); ?>
      <?php endif;?>

      <?php if (get_row_layout() == 'project'):?>
        <!-- 	projects block -->
        <?php get_template_part( '/blocks/projects' ); ?>
      <?php endif;?>

      <?php if (get_row_layout() == 'what_we_do'):?>
        <!-- 	what we do block -->
        <?php get_template_part( '/blocks/what-we-do' ); ?>
      <?php endif;?>

      <?php if (get_row_layout() == 'services'):?>
        <!-- 	services block -->
        <?php get_template_part( '/blocks/services' ); ?>
      <?php endif;?>

    <?php endwhile; endif; ?>




  </div><!-- .entry-content -->
</div>