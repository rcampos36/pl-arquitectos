<section class="bg-blue-800 relative">
  <div class="py-80 max-sm:py-40 flex flex-col items-center justify-center w-full gap-4">
    <h1 class="text-white font-bold text-3xl"><?php the_sub_field('contact_title')?></h1>
    <a href="mailto:<?php the_sub_field('contact_link')?>" class="text-5xl max-sm:text-3xl text-center text-orange-500 font-semibold px-20 max-sm:px-10 leading-12">
    <?php the_sub_field('contact_description')?>
    </a>
  </div>
</section>