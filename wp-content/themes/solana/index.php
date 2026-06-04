<?php
get_header();
?>
<?php if (is_single()){ ?>



<section class="bg-primary text-white relative">
    <span class="bg-no-repeat bg-right bg-cover hidden lg:block h-full w-1/2 absolute right-0" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></span>
    <div class="container grid lg:grid-cols-2">
        <div class="flex flex-col justify-center py-10 lg:py-15 lg:pr-15">
            <h2 class="font-bold mb-2"><?php the_title(); ?></h2>
        </div>
    </div>
</section>


<section class="pt-8 pb-8 md:pt-12 md:pb-12 lg:pt-18 lg:pb-18 xl:pt-20 xl:pb-20 2xl:pt-24 2xl:pb-24">
  <div class="container">
    <h2 class="font-semibold text-[#0E1117] mb-8"><?php echo get_field("blog_details_title") ?></h2>
    <div class="blog-inner_page-content-details">
      <?php echo get_field("blog_details_description") ?>
    </div>
    <div class="pt-7 border-t border-t-gray-200 flex items-center justify-between text-black">
      <?php
        $prev_post = get_next_post();
        $next_post = get_previous_post();
      ?>
      <span>
      <?php if (!empty($prev_post)): ?>
        <a href="<?php echo get_permalink($prev_post->ID); ?>">
          <i class="fa-solid fa-arrow-left-long"></i> Prev
        </a>
        <?php endif; ?>
      </span>
      <span>
      <?php if (!empty($next_post)): ?>
      <a href="<?php echo get_permalink($next_post->ID); ?>">
        Next <i class="fa-solid fa-arrow-right-long"></i>
      </a>
      <?php endif; ?>
      </span>
</section>
 <?php } else { ?>
 <section class="bg-primary text-center py-10 sm:py-14 md:py-18 lg:py-20 xl:py-24 2xl:py-28">
    <h1 class="text-white font-bold"><?php the_title(); ?></h1>
</section>


<section class="innerpages">
  <div class="container">
    <?php the_content(); ?>
  </div>
</section>
 <?php } ?>
<?php get_footer(); ?>