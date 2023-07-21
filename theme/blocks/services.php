<div class="px-40 max-sm:px-12 py-40 max-w-7xl mx-auto">
  <div class="flex flex-col items-center mx-auto justify-center w-4/5 max-sm:w-full">
    <h1 class="text-3xl w-full font-normal text-center mb-10">
      <?php the_sub_field('services_description')?>
    </h1>

      <div>
        <h1 class="text-3xl mb-10 mt-10 text-orange-500 font-semibold">What We Use</h1>
      </div>
    <div class="flex flex-wrap min-w-full">
      
      <?php

        // Check rows existexists.
        if( have_rows('skills') ):

            // Loop through rows.
            while( have_rows('skills') ) : the_row();

                // Load sub field value.
                $sub_value = get_sub_field('sub_field');?>
                <p class="w-1/4 text-4xl text-center mb-5 text-slate-700 hover:text-orange-500"><?php the_sub_field('skill')?></p>

            <?php
            // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif; ?>
    </div>
  </div>
</div>