<?php
if ( function_exists( 'get_field' ) ):
    $calltoactionsection = get_field( 'call_to_action_section', 'option' );
$call_to_action_section_title = $calltoactionsection[ 'call_to_action_section_title' ];
$call_to_action_section_tagline = $calltoactionsection[ 'call_to_action_section_tagline' ];
$call_to_action_section_call = $calltoactionsection[ 'call_to_action_section_call' ];
$call_to_action_section_number = $calltoactionsection[ 'call_to_action_section_number' ];
$call_to_action_section_button_text = $calltoactionsection[ 'call_to_action_section_button_text' ];
$call_to_action_section_button_link = $calltoactionsection[ 'call_to_action_section_button_link' ];
?>
<section class="pt-8 pb-8 md:pt-12 md:pb-12 lg:pt-18 lg:pb-18 xl:pt-20 xl:pb-20 2xl:pt-24 2xl:pb-24 bg-secondary">
  <div class="container grid grid-cols-1 lg:grid-cols-2 gap-4">
      <div>
        <h2 class="font-bold text-white mb-4"><?php echo $call_to_action_section_title; ?></h2>
        <p class="text-white"><?php echo $call_to_action_section_tagline; ?></p>
      </div>
      <div class="flex items-center gap-2 lg:justify-end [&_ul:grid] [&_ul:grid-cols-1] [&_ul:sm:grid-cols-2] [&_ul:md:grid-cols-3]">
        <a href="tel:<?php echo clean_phone_number($call_to_action_section_number); ?>" class="kt-btn bg-white text-primary">
          <?php echo $call_to_action_section_call; ?>
        </a>
        <a href="<?php echo $call_to_action_section_button_link; ?>" class="kt-btn kt-btn-primary">
          <?php echo $call_to_action_section_button_text; ?>
        </a>
      </div>
  </div>
</section>
<?php endif; ?>
</div>
<!-- main-wrapper-end-div -->
<footer class="bg-primary pt-16">
  <div class="container flex flex-col sm:grid sm:grid-cols-2 lg:flex lg:flex-row gap-4 justify-between">
    <?php
      if ( function_exists( 'get_field' ) ):
      $websitelogoarea = get_field( 'website_logo_area', 'option' );
      $footer_logo_link = $websitelogoarea[ 'footer_logo_link' ];
      $website_footer_logo = $websitelogoarea[ 'website_footer_logo' ];
      $website_footer_content = $websitelogoarea[ 'website_footer_content' ];
    ?>
    <div>
      <a class="mb-4 inline-block" href="<?php echo $footer_logo_link; ?>">
        <img src="<?php echo $website_footer_logo; ?>" alt="">
      </a>
      <p class="text-xs text-white max-w-60"><?php echo $website_footer_content; ?></p>
      <div class="lg:mt-20 mt-4 flex lg:gap-8 gap-2">
        <?php $facebook = get_field('facebook', 'option'); if($facebook != NULL) { ?>
        <a class="hover:text-white" href="<?php echo $facebook; ?>" target="_blank"><i class="fa-brands fa-facebook text-3xl"></i> </a>
        <?php } ?>
        <?php $instagram = get_field('instagram', 'option'); if($facebook != NULL) { ?>
        <a class="hover:text-white" href="<?php echo $instagram; ?>" target="_blank"> <i class="fa-brands fa-instagram text-3xl"></i> </a>
        <?php } ?>
      </div>
    </div>
    <?php endif; ?>
    <div>
      <p class="text-base sm:text-lg lg:text-xl xl:text-2xl font-bold mb-2 lg:mb-4 text-white"><?php echo $footer_section_title = get_field('footer_section_title', 'option'); ?></p>
      <ul class="flex flex-col gap-4 text-white">
        <?php $website_email_address = get_field('website_email_address', 'option'); if($website_email_address != NULL){ ?>
        <li>
          <a class="flex gap-4 items-center" href="mailto:<?php echo $website_email_address; ?>">
            <i class="fa-solid fa-envelope"></i>
            <?php echo $website_email_address; ?>
          </a>
        </li>
        <?php } ?>
        <?php $website_contact_number = get_field('website_contact_number', 'option'); if($website_contact_number != NULL){ ?>
        <li>
          <a class="flex gap-4 items-center" href="tel:<?php echo clean_phone_number($website_contact_number); ?>">
          <i class="fa-solid fa-phone"></i>
          <?php echo $website_contact_number; ?>
        </a>
      </li>
        <?php } ?>
        <?php $website_business_address = get_field('website_business_address', 'option'); if($website_business_address != NULL){ ?>
        <li>
          <a class="flex gap-4 items-center" href="<?php echo get_field( 'website_business_address_link', 'option' );; ?>" target="_blank">
            <i class="fa-solid fa-location-dot"></i>
            <?php echo $website_business_address; ?>
          </a>
        </li>
        <?php } ?>
      </ul>
    </div>
    <div>
      <?php
      $locations = get_nav_menu_locations();
      $menu_id = isset( $locations[ 'footer-menu' ] ) ? $locations[ 'footer-menu' ] : null;
      if ( $menu_id ) {
          $menu = wp_get_nav_menu_object( $menu_id );
          echo '<p class="text-base sm:text-lg lg:text-xl xl:text-2xl font-bold mb-2 lg:mb-4 text-white">' . esc_html( $menu->name ) . '</p>';
      } ?>
      <ul class="text-white flex flex-col gap-1">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'footer-menu',
                'container' => false,
                'items_wrap' => '%3$s',
            )
        );
        ?>
      </ul>
    </div>
    <?php
      if ( function_exists( 'get_field' ) ):
      $businesstimingarea = get_field( 'business_timing_area', 'option' );
      $section_title_4 = $businesstimingarea[ 'section_title_4' ];
      $business_timing = $businesstimingarea[ 'business_timing' ];
    ?>
    <div>
      <p class="text-base sm:text-lg lg:text-xl xl:text-2xl font-bold mb-2 lg:mb-4 text-white"><?php echo $section_title_4; ?></p>
      <p class="text-white flex flex-col gap-2">
        <?php echo $business_timing; ?>
      </p>
    </div>
    <?php endif; ?>
  </div>
  <div class="py-5 border-t border-t-white/50 text-white text-center mt-16">
      <?php echo $footer_copyright_area = get_field('footer_copyright_area', 'option'); ?>
  </div>
</footer>
<?php wp_footer(); ?>
</body></html>