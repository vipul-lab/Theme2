<?php
/*
Template Name: Services Template
Template Post Type: services
*/
get_header(); ?>
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





<?php if( have_rows('services_section') ): ?>
<?php while( have_rows('services_section') ): the_row(); ?>


<?php if( get_row_layout() == 'banner_section' ): ?>
<?php
    $display = get_sub_field('display');
    if($display):
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $image = get_sub_field('image');
    $link = get_sub_field('link');
    $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing);
?>
    <section class="bg-primary text-white relative">
        <span class="bg-no-repeat bg-right bg-cover hidden lg:block h-full w-1/2 absolute right-0" style="background-image:url('<?php echo $image ?>');"></span>
        <div class="container grid lg:grid-cols-2">
            <div class="flex flex-col justify-center py-10 lg:py-15 lg:pr-15">
                <h1 class="font-bold mb-2"><?php echo $title ?></h1>
                <div class="space-y-2.5">
                    <?php echo $description ?>
                </div>
                <div class="mt-5">
                    
                    <?php if( $link ): ?>
                        <a class="kt-btn kt-btn-secondary" href="<?php echo esc_url($link['url']); ?>">
                            <?php echo esc_html($link['title']); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php endif; ?>


<?php if( get_row_layout() == 'section1' ): ?>
<?php
    $display = get_sub_field('display');
    if($display):
    $title = get_sub_field('title');
    $image = get_sub_field('image');
    $link = get_sub_field('link');
    $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing);
?>
<section class="pt-8 pb-8 md:pt-12 md:pb-12 lg:pt-18 lg:pb-18 xl:pt-20 xl:pb-20 2xl:pt-24 2xl:pb-24">
    <div class="container">
        <div class="flex flex-col md:flex-row md:justify-between justify-center gap-2 mb-4 md:mb-8 xl:mb-12.5">
            <h2 class="text-primary font-bold"><?php echo $title ?></h2>
            <div>
                <?php if( $link ): ?>
                    <a class="kt-btn kt-btn-secondary text-nowrap" href="<?php echo esc_url($link['url']); ?>">
                        <?php echo esc_html($link['title']); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 xl:gap-12.5">
            <div>
                <img class="size-full object-cover rounded-[30px]" src="<?php echo $image ?>" alt="">
            </div>
            <div class="bg-primary-light p-8 xl:p-16.5 rounded-[30px]">
                <ul class="space-y-9">
                    <?php
                  while ( have_rows( "list" ) ) {
                  the_row();
                  $list_title = get_sub_field( "list_title" );
                ?>
                    <li class="text-black relative pl-7.5">
                        <i class="fa-solid fa-circle-chevron-right text-secondary absolute left-0 top-1"></i>
                        <?php echo $list_title ?>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>
<?php endif; ?>



<?php if( get_row_layout() == 'section2' ): ?>
<?php
    $display = get_sub_field('display');
    if($display):
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing);
?>

<section class="pt-8 pb-8 md:pt-12 md:pb-12 lg:pt-18 lg:pb-18 xl:pt-20 xl:pb-20 2xl:pt-24 2xl:pb-24 bg-[#DCE5D8]">
  <div class="container">
    <h2 class="text-primary mb-4 font-bold text-center"><?php echo $title ?></h2>
    <p class="text-center mb-4 lg:mb-10"><?php echo $description ?></p>
      <div class="grid grid-cols-1 xl:grid-cols-3 gap-4 lg:gap-7.5">
          <?php
            while ( have_rows( "box" ) ) {
            the_row();
            $image = get_sub_field( "image" );
            $title = get_sub_field( "title" );
            $description = get_sub_field( "description" );
          ?>
          <div class="border border-black rounded-[30px] p-5 lg:p-9 md:flex xl:block md:gap-10">
            <div class="relative inline-block lg:mb-8 mb-4 flex-none">
              <span class="w-12.5 h-36 bg-secondary/30 absolute rotate-45 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-full"></span>
              <img class="relative z-1" src="<?php echo $image ?>" alt="">
            </div>
            <div>
                <p class="font-bold text-2xl mb-4 text-primary">
                <?php echo $title ?>
                </p>
                <p><?php echo $description ?></p>
            </div>
          </div>
          <?php } ?>
      </div>
  </div>
</section>

<?php endif; ?>
<?php endif; ?>



<?php if( get_row_layout() == 'section3' ): ?>
<?php
    $display = get_sub_field('display');
    if($display):
    $left_title = get_sub_field('left_title');
    $description = get_sub_field('description');
    $image = get_sub_field('image');
    $right_title = get_sub_field('right_title');
    $right_subtitle = get_sub_field('right_subtitle');
    $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing);
?>
<section class="pt-8 pb-8 md:pt-12 md:pb-12 lg:pt-18 lg:pb-18 xl:pt-20 xl:pb-20 2xl:pt-24 2xl:pb-24">
    <div class="container grid grid-cols-1 lg:grid-cols-2 gap-4 xl:gap-12.5">
      <div>
          <h2 class="font-bold text-primary mb-4"><?php echo $title ?></h2>
          <p><?php echo $description ?></p>
          <div class="text-center">
            <img class="max-w-full inline-block rounded-[30px] mt-10" src="<?php echo $image ?>" alt="">
          </div>
      </div>
      <div class="bg-primary-light p-8 lg:p-15 rounded-[30px]">
          <h2 class="font-bold text-primary"><?php echo $right_title ?></h2>
          <p class="font-bold text-primary lg:text-2xl mb-8 uppercase"><?php echo $right_subtitle ?></p>
          <ul class="flex flex-col gap-3">
              <?php
                while ( have_rows( "list" ) ) {
                the_row();
                $list_title = get_sub_field( "list_title" );
              ?>
              <li class="text-black lg:text-2xl flex gap-5">
                <i class="fa-solid fa-square-check text-secondary mt-1"></i>
                <?php echo $list_title ?>
              </li>
              <?php } ?>
          </ul>
      </div>
    </div>
</section>
<?php endif; ?>
<?php endif; ?>


<?php if( get_row_layout() == 'section4' ): ?>
<?php
    $display = get_sub_field('display');
    if($display):
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing);
?>
<section class="pt-8 pb-8 md:pt-12 md:pb-12 lg:pt-18 lg:pb-18 xl:pt-20 xl:pb-20 2xl:pt-24 2xl:pb-24 bg-tertiary">
    <div class="container">
        <div class="max-w-267.5 mx-auto mb-10">
          <h2 class="text-primary font-bold mb-4 text-center"><?php echo $title ?></h2>
          <p class="text-center"><?php echo $description ?></p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 xl:gap-7.5">
            <?php
              while ( have_rows( "box" ) ) {
              the_row();
              $image = get_sub_field( "image" );
              $title = get_sub_field( "title" );
            ?>
            <div class="rounded-[30px] overflow-hidden before:bg-black/40 before:absolute before:inset-0 relative before:size-full before:block">
                <img class="size-full object-cover" src="<?php echo $image ?>" alt="">
                <span class="text-lg lg:text-xl xl:text-[32px] font-bold text-white absolute top-1/2 -translate-y-1/2 w-full p-5 text-center"><?php echo $title ?></span>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php endif; ?>


<?php if( get_row_layout() == 'services_checklist_section' ): ?>
<?php
    $display = get_sub_field('display');
    if($display):
    $services_checklist_title = get_sub_field("services_checklist_title");
    $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing);
?>

<section class="<?php echo esc_attr($section_classes); ?>">
    <div class="container">
        <?php if($services_checklist_title){ ?>
        <h2 class="text-primary text-center font-bold mb-8">
            <?php echo esc_html($services_checklist_title); ?>
        </h2>
        <?php } ?>
        <?php if( have_rows('services_checklist_heading_area') ): ?>
        <div class="table-responsive">
            <table class="w-full tableWidth">
                <tr class="font-bold text-primary *:px-4 *:py-2">
                <?php
                while ( have_rows('services_checklist_heading_area') ) : the_row();

                $table_heading_title_1 = get_sub_field('table_heading_title_1');
                $table_heading_title_2 = get_sub_field('table_heading_title_2');
                $table_heading_title_3 = get_sub_field('table_heading_title_3');
                $table_heading_title_4 = get_sub_field('table_heading_title_4');
                ?>

                                    <td class="text-left"><?php echo esc_html($table_heading_title_1); ?></td>
                                    <td class="text-center"><?php echo esc_html($table_heading_title_2); ?></td>
                                    <td class="text-center"><?php echo esc_html($table_heading_title_3); ?></td>
                                    <td class="text-center"><?php echo esc_html($table_heading_title_4); ?></td>

                                    <?php endwhile; ?>

                                </tr>
                            </table>
                        </div>

                        <?php endif; ?>


                        <?php if( have_rows('services_checklist_area') ): ?>

                        <div data-kt-accordion="true" class="kt-accordion">

                            <?php 
                $i = 0;
                while( have_rows('services_checklist_area') ): the_row();
                $i++;
                $service_title = get_sub_field('service_title');
                $show_class = ($i == 1) ? 'active' : '';
                $hidden_class = ($i == 1) ? '' : 'hidden';
                ?>
            <div data-kt-accordion-item="true" class="kt-accordion-item <?php echo $show_class; ?>">
                <?php if($service_title){ ?>
                <div id="accordion_toggle_<?php echo $i; ?>" data-kt-accordion-toggle="true"
                    aria-controls="accordion_content_<?php echo $i; ?>"
                    class="kt-accordion-toggle px-4 py-2 border border-[#93A48D] bg-[#93A48D] text-white font-bold text-2xl">
                    <span><?php echo esc_html($service_title); ?></span>
                    <span class="kt-accordion-indicator w-auto! h-auto!">
                        <span class="kt-accordion-indicator-on">
                            <i class="fas fa-chevron-right text-white"></i>
                        </span>
                        <span class="kt-accordion-indicator-off">
                            <i class="fas fa-chevron-down text-white"></i>
                        </span>
                    </span>
                </div>
                <?php } ?>
                <?php if( have_rows('checklist') ): ?>
                <div class="kt-accordion-content <?php echo $hidden_class; ?>"
                    aria-labelledby="accordion_toggle_<?php echo $i; ?>" id="accordion_content_<?php echo $i; ?>">
                    <table class="w-full tableWidth">
                        <tbody>
                            <?php while( have_rows('checklist') ): the_row();
                            $checklist_label = get_sub_field('checklist_label');
                            $checkbox_1 = get_sub_field('checkbox_1');
                            $checkbox_2 = get_sub_field('checkbox_2');
                            $checkbox_3 = get_sub_field('checkbox_3');
                            ?>
                            <tr
                                class="*:px-4 *:py-2 *:font-bold *:text-primary odd:bg-[#93A48D]/10 *:border-l *:border-l-[#D9D9D9] *:last-of-type:border-r *:last-of-type:border-r-[#D9D9D9]">

                                <td><?php echo esc_html($checklist_label); ?></td>

                                <td class="text-center">
                                    <img class="inline-block"
                                        src="<?php echo get_template_directory_uri().'/assets/images/'.($checkbox_1 ? 'check.png':'uncheck.png'); ?>"
                                        alt="">
                                </td>
                                <td class="text-center">
                                    <img class="inline-block"
                                        src="<?php echo get_template_directory_uri().'/assets/images/'.($checkbox_2 ? 'check.png':'uncheck.png'); ?>"
                                        alt="">
                                </td>
                                <td class="text-center">
                                    <img class="inline-block"
                                        src="<?php echo get_template_directory_uri().'/assets/images/'.($checkbox_3 ? 'check.png':'uncheck.png'); ?>"
                                        alt="">
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php endif; ?>
<?php endif; ?>


<?php if( get_row_layout() == 'section6' ): ?>
<?php
    if ( have_rows( "service_includes" ) ) {
    while ( have_rows( "service_includes" ) ) {
    the_row();
    $service_includes_title = get_sub_field( "service_includes_title" );
    $service_includes_tagline = get_sub_field( "service_includes_tagline" );
?>
<section class="pt-8 pb-8 md:pt-12 md:pb-12 lg:pt-18 lg:pb-18 xl:pt-20 xl:pb-20 2xl:pt-24 2xl:pb-24">
    <div class="container">
        <div class="max-w-267.5 mx-auto mb-10 text-center">
            <h2 class="text-primary font-bold mb-4"><?php echo $service_includes_title ?></h2>
            <p><?php echo $service_includes_tagline ?></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-8 xl:gap-12.5">
            <?php
          if ( have_rows( "service_includes_lists" ) ) {
          $background_colors = [ "#C2CFBD", "#DCE5D8" ];
          $counter = 0;
          while ( have_rows( "service_includes_lists" ) ) {
          the_row();
            $service_includes_sub_title = get_sub_field( "service_includes_sub_title" );
            $bg_color = $background_colors[ $counter % count( $background_colors ) ];
            ?>
            <div class="rounded-[30px] p-8 xl:p-15 bg-primary-light">
              <h2 class="text-primary font-bold mb-5"><?php echo $service_includes_sub_title ?></h2>
              <ul class="flex flex-col gap-4 lg:gap-7">
                  <?php
                    while ( have_rows( "service_main_text" ) ) {
                    the_row();
                    $service_includes_sub_text = get_sub_field( "service_includes_sub_text" );
                    $bg_color = $background_colors[ $counter % count( $background_colors ) ];
                  ?>
                  <li class="text-black relative pl-10">
                    <i class="fa-solid fa-check text-secondary absolute left-0 top-1.5"></i>
                    <?php echo $service_includes_sub_text ?>
                  </li>
                  <?php } ?>
              </ul>
            </div>
            <?php $counter++; } } ?>
        </div>
    </div>
</section>
<?php } } ?>
<?php endif; ?>








<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>