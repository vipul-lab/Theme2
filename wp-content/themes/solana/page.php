<?php get_header(); ?>
<?php
$selected_pages = get_field('page_banner', 'option');
$current_page_id = get_the_ID();
if ($selected_pages && in_array($current_page_id, array_column($selected_pages, 'ID'))):
?>
<section class="bg-primary text-white text-center py-10 sm:py-14 md:py-18 lg:py-20 xl:py-24 2xl:py-28">
  <div class="container">
    <h1 class="font-bold"><?php the_title(); ?></h1>
</div>
</section>
<?php endif; ?>

<div class="container content-area pt-8 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24 pb-8 md:pb-12 lg:pb-18 xl:pb-20 2xl:pb-24"><?php the_content(); ?></div>

<?php get_footer(); ?>