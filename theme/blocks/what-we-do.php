<div class="w-full bg-yellow-50">
  <div class="py-40 px-40 max-sm:px-12 flex max-sm:flex-col items-center justify-between gap-4">
    <div class="w-1/2 max-sm:w-full flex flex-col gap-5">
      <h1 class="what-we-do text-4xl font-semibold text-blue-950">
        <?php the_sub_field('what_we_do_title')?>
      </h1>
      <p>
      <?php the_sub_field('what_we_do_description')?>
      </p>
    </div>
    <div class="w-1/2 max-sm:w-full">
      <?php if( get_sub_field('what_we_do_image') ): ?>
          <img class="" src="<?php the_sub_field('what_we_do_image'); ?>" />
      <?php endif; ?>
    </div>
  </div>
</div>