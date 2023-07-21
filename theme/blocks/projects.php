<div id="projects" class="w-full pt-20">
  <div class="featured-projects flex max-sm:flex-col">
    <div class="w-[50%] max-sm:w-full relative">
      <?php if( get_sub_field('project_image') ): ?>
          <img class=" object-cover h-full object-right" src="<?php the_sub_field('project_image'); ?>" />
      <?php endif; ?>
      <a href="http://camposville.vercel.app" target="_blank" class="overlay absolute bg-red-600 top-0 left-0 w-full h-full">
        <div class="overlay-content flex flex-col items-center justify-center h-full text-white gap-4 px-4">
          <h4 class="text-1xl"><?php the_sub_field('project_title')?></h4>  
          <h1 class="text-4xl uppercase"><?php the_sub_field('project_description')?></h1>
          <button href="<?php the_sub_field('project_link')?>" class=" text-white"><?php the_sub_field('project_link_text')?></button>
        </div>
      </a>
    </div>
    <div class="right-projects flex w-[50%] max-sm:flex-col max-sm:w-full">
      <div class="flex flex-col overflow-hidden">

        <div class="flex h-80 max-sm:h-full max-sm:flex-col">
          <div class="relative">
            <?php if( get_sub_field('right_project_image_1') ): ?>
              <img class=" object-cover h-full" src="<?php the_sub_field('right_project_image_1'); ?>" />
            <?php endif; ?>
            <a href="<?php the_sub_field('right_project_link_1'); ?>" target="_blank" class="overlay 
              absolute <?php the_sub_field('right_project_1_class'); ?>  top-0 left-0 w-full h-full">
              <div class="overlay-content flex flex-col items-center justify-center h-full text-white gap-4 px-4">
                <h1 class="text-2xl text-center uppercase"><?php the_sub_field('project_title_1')?></h1>  
                <h4 class="text-1xl"><?php the_sub_field('right_project_description_1')?></h4>
                <button class=" text-white"><?php the_sub_field('right_project_link_1_text')?></button>
              </div>
            </a>
          </div>
          <div class="relative">
            <?php if( get_sub_field('right_project_image_2') ): ?>
              <img class=" object-cover h-full" src="<?php the_sub_field('right_project_image_2'); ?>" />
            <?php endif; ?>
            <a href="<?php the_sub_field('right_project_link_2'); ?>" target="_blank" class="overlay 
              absolute <?php the_sub_field('right_project_2_class'); ?>  top-0 left-0 w-full h-full">
              <div class=" overlay-content flex flex-col items-center justify-center h-full text-white gap-4 px-4">
                <h1 class="text-2xl text-center uppercase"><?php the_sub_field('right_project_title_2')?></h1>  
                <h4 class="text-1xl"><?php the_sub_field('right_project_description_2')?></h4>
                <button class=" text-white"><?php the_sub_field('right_project_link_text_2')?></button>
              </div>
            </a>
          </div>
        </div>

        <div class="w-full relative">
          <?php if( get_sub_field('right_project_image_3') ): ?>
            <img class=" object-cover h-full object-right" src="<?php the_sub_field('right_project_image_3'); ?>" />
          <?php endif; ?>
          <a href="<?php the_sub_field('right_project_link_3'); ?>" target="_blank" class="overlay 
            absolute <?php the_sub_field('right_project_3_class'); ?>  top-0 left-0 w-full h-full">
            <div class="overlay-content flex flex-col items-center justify-center h-full text-white gap-4">
              <h1 class="text-4xl text-center"><?php the_sub_field('right_project_title_3')?></h1>  
              <h4 class="text-1xl"><?php the_sub_field('right_project_description_3')?></h4>
              <button class=" text-white"><?php the_sub_field('right_project_link_3_text')?></button>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="flex max-sm:flex-col flex-wrap relative">
      <?php

      // Check rows existexists.
      if( have_rows('rest_of_projects') ):

          // Loop through rows.
          while( have_rows('rest_of_projects') ) : the_row(); ?>
          <div class="lower-projects w-1/3 max-sm:w-full relative">
              <?php if( get_sub_field('lower_project_image') ): ?>
              <img class=" object-cover h-full" src="<?php the_sub_field('lower_project_image'); ?>" />
              <?php endif; ?>
              <a href="<?php the_sub_field('lower_project_link'); ?>"   target="_blank" class="overlay 
                absolute <?php the_sub_field('lower_project_bg_class'); ?>  top-0 left-0 w-full h-full">
                <div class="overlay-content flex flex-col items-center justify-center h-full text-white gap-4 px-4">
                  <h1 class="text-2xl text-center uppercase"><?php the_sub_field('lower_project_title')?></h1>  
                  <h4 class="text-1xl"><?php the_sub_field('lower_project_description')?></h4>
                  <button class=" text-white"><?php the_sub_field('lower_project_link_text')?></button>
                </div>
              </a>
            </div>
          <?php
          // End loop.
          endwhile;

      // No value.
      else :
          // Do something...
      endif; ?>
          
          
    </div>
</div>