<?php
/**
 * Template Name: Thank you
 *
 * @package theme7
 */
get_header();
?>
<?php
if ( function_exists( 'get_field' ) ) {
    $thankyou = get_field( 'thank_you_page');
    $page_title = $thankyou[ 'page_title' ];
    $page_description = $thankyou[ 'page_description' ];
    $page_image = $thankyou[ 'page_image' ];
    $page_button_text = $thankyou[ 'page_button_text' ];
    $page_button_url = $thankyou[ 'page_button_url' ];
    ?>
<section class="thankyou-page contact-us-section">
  <div class="container">
    <div class="thankyou-innercontent">
      <div class="thankyou-title">
        <?php if($page_title != NULL) {?>
        <h1><?php echo $page_title; ?></span></h1>
        <?php } ?>
      </div>
      <div class="thankyou-descp">
        <?php if($page_description != NULL) {?>
        <h3><?php echo $page_description; ?></h3>
        <?php } ?>
      </div>
      <?php if($page_image != NULL) {?>
      <div class="thankyou-sociallogo"> <img src="<?php echo $page_image; ?>" alt=""> </div>
      <?php } ?>
      <?php if($page_button_text != NULL) {?>
      <div class="thankyou-hmbtn"> <a href="<?php echo $page_button_url; ?>" class="common-btn"><?php echo $page_button_text; ?></a> </div>
      <?php } ?>
    </div>
  </div>
</section>
<?php } ?>
<?php get_footer(); ?>