<?php
/*
Template Name: Career Template
Template Post Type: careers
*/
get_header();
?>
<section class="inner-banner-section section-spacing">
  <div class="inner-banner">
    <div class="inner-banner-content">
      <div class="inner-banner-text">
        <h1><?php echo the_title(); ?></h1>
      </div>
    </div>
    <div class="inner-banner-img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></div>
  </div>
</section>
<section class="career-detail-section section-spacing">
  <div class="container">
    <div class="career-heading">
      <h2><?php echo get_field("position_type"); ?></h2>
    </div>
    <div class="career-detail-row">
      <div class="row">
        <div class="col-lg-4">
          <div class="position-box">
            <div class="single-career-post-box">
              <h2><?php echo the_title(); ?></h2>
              <h4>Exp.: <?php echo get_field("experience"); ?></h4>
              <p>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.99 0C4.47 0 0 4.48 0 10C0 15.52 4.47 20 9.99 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 9.99 0ZM10 18C5.58 18 2 14.42 2 10C2 5.58 5.58 2 10 2C14.42 2 18 5.58 18 10C18 14.42 14.42 18 10 18ZM10.5 5H9V11L14.25 14.15L15 12.92L10.5 10.25V5Z" fill="#585858"/>
                </svg>
                <?php echo get_field("job_type"); ?></p>
              <p>
                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 10C6.9 10 6 9.1 6 8C6 6.9 6.9 6 8 6C9.1 6 10 6.9 10 8C10 9.1 9.1 10 8 10ZM14 8.2C14 4.57 11.35 2 8 2C4.65 2 2 4.57 2 8.2C2 10.54 3.95 13.64 8 17.34C12.05 13.64 14 10.54 14 8.2ZM8 0C12.2 0 16 3.22 16 8.2C16 11.52 13.33 15.45 8 20C2.67 15.45 0 11.52 0 8.2C0 3.22 3.8 0 8 0Z" fill="#585858"/>
                </svg>
                <?php echo get_field("location"); ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="about-role-content"> <?php echo get_field("job_description"); ?>
            <div class="apply-btn"> <a href="<?php echo get_field("button_link"); ?>" class="common-btn"><?php echo get_field("button_text"); ?></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>
