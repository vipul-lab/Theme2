<?php
/*
 Template Name: Services
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

<?php
$args = array(
    'post_type' => 'services',
    'posts_per_page' => -1
);

$services = new WP_Query($args);

if ($services->have_posts()) :
    while ($services->have_posts()) : $services->the_post();
?>

<div class="even:bg-primary-light py-16 group">
  <div class="container grid grid-cols-1 md:grid-cols-12 gap-5 md:gap-10">

    <div class="md:group-odd:order-2 md:col-span-4">
      <?php echo get_the_post_thumbnail(get_the_ID(), 'full', [
          'class' => 'rounded-[30px] max-w-full'
      ]); ?>
    </div>

    <div class="md:group-odd:order-1 flex flex-col justify-center md:col-span-8">
        <h2 class="text-primary font-bold mb-4"><?php the_title(); ?></h2>
        <?php the_content(); ?>

        <div class="mt-7.5">
            <a href="<?php the_permalink(); ?>" class="kt-btn kt-btn-secondary solid-btn">
                Learn More
            </a>
        </div>
    </div>

  </div>
</div>

<?php
    endwhile;
    wp_reset_postdata();
endif;
?>



<?php get_footer(); ?>
