<?php
/*
 Template Name: Sign In/Up
*/
get_header();
?>
<?php if (!empty($iframe)) : ?>
<section class="contact-us-section" style="line-height: 0;">
  <?php echo $iframe; ?>
</section>
<?php else : ?>
<p class="font-bold text-center text-lg">Login form is not available right now.</p>
<?php endif; ?>
<?php get_footer(); ?>