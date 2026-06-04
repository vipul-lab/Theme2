<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php the_title(); ?> | <?php echo get_bloginfo(); ?></title>
 <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<?php wp_head(); ?>
<style>
  
<?php
/* ACF Global CSS Variables */
if (function_exists('get_field')) :
    // Get ACF option values
    $primary_color       = get_field('primary_color', 'option');
    $secondary_color     = get_field('secondary_color', 'option');
    $tertiary_color      = get_field('tertiary_color', 'option');
    $extra_light_color   = get_field('extra_light_color', 'option');
    $body_text_color     = get_field('body_text_color', 'option');
    $hover_color_footer  = get_field('hover_color_footer', 'option');
    // Fallback values (IMPORTANT)
    $primary_color      = $primary_color ?: '#334639';
    $secondary_color    = $secondary_color ?: '#788971';
    $tertiary_color     = $tertiary_color ?: '#C2CFBD';
    $extra_light_color  = $extra_light_color ?: '#DCE5D8';
    $body_text_color    = $body_text_color ?: '#333333';
    $hover_color_footer = $hover_color_footer ?: '#ff5722';
 ?>



:root {
    --color-primary: <?php echo esc_html($primary_color); ?>;
    --color-secondary: <?php echo esc_html($secondary_color); ?>;
    --color-tertiary: <?php echo esc_html($tertiary_color); ?>;
    --color-primary-light: <?php echo esc_html($extra_light_color); ?>;
    --body_text: <?php echo esc_html($body_text_color); ?>;
}
</style>
  <?php endif; ?>
</head>
  <body <?php body_class('group/body'); ?>>
  <header class="top-0 z-100 py-3 w-full sticky group-[.headerSticky]/body:shadow <?php echo is_front_page()? 'bg-primary group-[.headerSticky]/body:bg-white': 'bg-white'; ?>">
    <div class="container flex items-center justify-between">
      
      <a href="<?php echo esc_url(home_url('/home')); ?>">
        <img src="<?php echo $website_logo = get_field('website_logo', 'option'); ?>" alt="">
      </a>

      <ul class="main-menu xl:flex items-center gap-4 xl:gap-10 2xl:gap-15 hidden <?php echo is_front_page() ? 'home-page-header' : ''; ?>">
        <?php
        wp_nav_menu(
        array(
          'theme_location' => 'main-menu',
          'container' => false,
          'items_wrap' => '%3$s',
        ));?>
      </ul>

      <div class="xl:hidden" data-kt-drawer-toggle="#drawer">
        <svg class="ham w-14 h-14" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
          <path class="line line-top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
          <path class="line line-middle" d="m 70,50 h -40" />
          <path class="line line-bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
      </div>
      
      <div class="hidden xl:flex items-center gap-2 text-sm xl:text-base">

       

        <?php
        $header_sign_button_display = get_field( 'header_sign_button_display', 'option' );
        $header_sign_button = get_field( 'header_sign_button', 'option' );
        if ( $header_sign_button_display ) {
        if ( $header_sign_button != NULL ) {
        ?>
          <a class="text-lg <?php echo is_front_page()? 'text-white group-[.headerSticky]/body:text-[#323a5b]': '!text-[#323a5b]'; ?>" href="<?php echo get_field('header_sign_button_link', 'option'); ?>">
            <?php echo $header_sign_button; ?>
          </a>
        <?php } } ?>
        <?php
        $header_button_display = get_field( 'header_button_display', 'option' );
        $header_button = get_field( 'header_button', 'option' );
        if ( $header_button_display ) {
        if ( $header_button != NULL ) {
        ?>
        <a href="<?php echo get_field('header_button_link', 'option'); ?>" class="kt-btn kt-btn-secondary"><?php echo $header_button; ?></a>
        <?php } } ?>
        

         <?php
        $call_now_button = get_field( "call_now_button", 'option' );
        if ( $call_now_button ) {
          $button_show = $call_now_button["button_show"];
          $button_title = $call_now_button["button_title"];
          $phone_number = $call_now_button["phone_number"];
        if ( $button_show) { ?>
          <a href="tel:<?php echo $phone_number ?>" class="kt-btn kt-btn-secondary"><?php echo $button_title; ?></a>
        <?php } } ?>

      </div>
  </div>
</header>
<ul class="xl:[--kt-drawer-enable:false] mobilemenu flex flex-col gap-4 p-8 inset-2 xl:hidden <?php echo is_front_page() ? 'home-page-header' : ''; ?>"
  id="drawer"
  data-kt-drawer="true"
  data-kt-drawer-class="kt-drawer kt-drawer-start hidden w-full max-w-[300px] bg-primary! rounded-[20px] text-2xl">
  <?php
  wp_nav_menu(
  array(
    'theme_location' => 'main-menu',
    'container' => false,
    'items_wrap' => '%3$s',
  ));?>
</ul>
  <!-- main-wrapper-start-div -->
  <div class="main-wrapper">