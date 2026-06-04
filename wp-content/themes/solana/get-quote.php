<?php
/*
 Template Name: Get Quote
*/
get_header();
?>

<?php
function paddingClasses($spacing){
    $section_classes = '';
    if ($spacing) {
        $classes = [];
        if (!empty($spacing['spacing_top'])) {
            $classes[] = 'pt-8 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24';
        }
        if (!empty($spacing['spacing_bottom'])) {
            $classes[] = 'pb-8 md:pb-12 lg:pb-18 xl:pb-20 2xl:pb-24';
        }
        $section_classes = implode(' ', $classes);
    }
    return $section_classes;
}?>



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
  $description_data = get_field('description_data');
  if($description_data && $description_data['display']):
    $description = $description_data['description'];
    $spacing = $description_data['spacing'];
    $section_classes = paddingClasses($spacing);
  ?>
<section class="<?php echo esc_attr($section_classes); ?>">
  <div class="container">
    <?php echo $description; ?>
  </div>
</section>
<?php endif; ?>


<?php 
$iframe_data = get_field('iframe_data');
if($iframe_data && $iframe_data['display']):
  $iframe  = $iframe_data['iframe'];
  $height  = $iframe_data['iframe_height'];
  $spacing = $iframe_data['spacing'];
  $section_classes = paddingClasses($spacing);
?>
  <?php if($iframe): ?>
  <div class="<?php echo esc_attr($section_classes); ?>">
    <iframe width="100%" style="height: <?php echo $height ? $height . 'px' : '400px'; ?>;" src="<?php echo $iframe; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>
<?php endif; ?>
<?php endif; ?>
<?php get_footer(); ?>
