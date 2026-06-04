<?php
/* Template Name: Careers */
get_header();
?>


<?php
$selected_pages = get_field('page_banner', 'option');
$current_page_id = get_the_ID();
if ($selected_pages && in_array($current_page_id, array_column($selected_pages, 'ID'))):
?>
<section class="bg-primary text-white text-center py-10 sm:py-14 md:py-18 lg:py-20 xl:py-24 2xl:py-28">
  <div class="container">
    <h1 class="font-bold"><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
  </div>
</section>
<?php endif; ?>


<section class="pt-8 pb-8 md:pt-12 md:pb-12 lg:pt-18 lg:pb-18 xl:pt-20 xl:pb-20 2xl:pt-24 2xl:pb-24">
  <div class="container">
    <h2 class="font-bold text-black mb-10">Open Positions</h2>
    <div data-kt-accordion="true" data-kt-accordion-expand-all="true" class="kt-accordion flex flex-col gap-5">
      <?php
        $loop = new WP_Query( array( 'post_type' => 'careers' ) );
        if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ): $loop->the_post();
        $exprerience = get_field( 'experience', get_the_ID() );
        $job_type = get_field( 'job_type', get_the_ID() );
        $job_location = get_field( 'location', get_the_ID() );
        $i++;
        ?>

        <div data-kt-accordion-item="true" class="bg-primary-light rounded-[30px] p-7 active">
          
          <div id="accordion_toggle_<?= $i ?>" data-kt-accordion-toggle="true" aria-controls="accordion_content_<?= $i ?>" class="flex flex-col cursor-pointer">
            <div class="flex items-center justify-between text-[#202020] font-medium text-2xl mb-2">
                <span><?php echo get_the_title(); ?></span>
                <span>
                  <?php if($exprerience != NULL){ ?>
                    Exp.: <?php echo $exprerience; ?>
                  <?php } ?>
                </span>
            </div>
            <div class="flex items-center justify-between text-[#585858] text-base">
              <span>
                <?php if($job_location != NULL){ ?>
                <i class="fa-solid fa-location-dot"></i>
                <?php echo $job_location; ?>
                <?php } ?>
              </span>
              <span>
                <?php if($job_type != NULL){ ?>
                  <i class="fa-regular fa-clock"></i>
                  <?php echo $job_type; ?>
                <?php } ?>
              </span>
            </div>
          </div>

          <div class="kt-accordion-content" aria-labelledby="accordion_toggle_<?= $i ?>" id="accordion_content_<?= $i ?>">
            <div class="border-t border-t-black/20 pt-4 mt-4">
              <div class="editerData">
                <?php echo get_field("job_description"); ?>
              </div>
              <a href="<?php echo get_field("button_link"); ?>" class="kt-btn kt-btn-secondary mt-4">
                <?php echo get_field("button_text"); ?>
              </a>
            </div>
          </div>

        </div>
      <?php ?>

      <?php endwhile; wp_reset_postdata(); } ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
