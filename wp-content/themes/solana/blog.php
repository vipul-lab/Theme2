<?php
/*
 Template Name: Blog
*/

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

<section class="pt-8 pb-8 md:pt-12 md:pb-12 lg:pt-18 lg:pb-18 xl:pt-20 xl:pb-20 2xl:pt-24 2xl:pb-24 bg-[#FCFCFC]">
    <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php
        $loop = new WP_Query( array( 'post_type' => 'post' ) );
        if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ): $loop->the_post();
        $post_date = get_the_date( 'F j, Y', get_the_ID() );
      ?>
      <div class>
        <a href="<?php the_permalink(); ?>">
          <img src="<?php echo get_the_post_thumbnail_url( get_the_ID()); ?>" alt="">
        </a>
        <div class="p-8 bg-white">
          <p class="text-[#252525]/20"><?php echo $post_date; ?></p>
          <p class="text-[#0E1117] text-xl font-semibold mb-4">
            <a href="<?php the_permalink(); ?>">
                <?php echo get_the_title(); ?>
            </a>
          </p>
          <a href="<?php the_permalink(); ?>" class="text-[#252525]">Read More <i class="fa-solid fa-angle-right"></i></a>
        </div>
      </div>
      <?php endwhile; wp_reset_postdata(); } ?>
    </div>
</section>

<?php get_footer(); ?>