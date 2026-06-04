<?php
    global $primary_color, $secondary_color, $tertiary_color, $extra_light_color, $body_text_color, $hover_color_footer;
    $primary_color = get_field( 'primary_color', 'option' );
    $secondary_color = get_field( 'secondary_color', 'option' );
    $tertiary_color = get_field( 'tertiary_color', 'option' );
    $extra_light_color = get_field( 'extra_light_color', 'option' );
    $body_text_color = get_field( 'body_text_color', 'option' );
    $hover_color_footer = get_field( 'hover_color_footer', 'option' );
?>



.owl-dots .owl-dot.active span, .owl-dots .owl-dot span:hover{background:<?php echo $primary_color; ?>;}

p{color: <?php echo $body_text_color; ?>;}

.yellow{background: <?php echo $tertiary_color ; ?>;}

.light-clr{background: <?php echo $extra_light_color ; ?>;}





.quote-inner-btn,.pricing_box a.booknow{background-color: <?php echo $primary_color; ?>;}



a{color: <?php echo $secondary_color; ?>;}


.home header .header-nav nav .header-btn .common-btn{background-color: <?php echo $primary_color; ?>;border: 2px solid <?php echo $primary_color; ?>;}

.home header .header-nav nav .header-btn.sign-btn .common-btn{border: 1px solid <?php echo $primary_color; ?>;}

.home header.sticky .header-nav nav .header-btn .common-btn{background-color: <?php echo $primary_color; ?>;}

.home header .header-nav nav .header-btn .common-btn:hover{background: <?php echo $secondary_color; ?>;}

.home header .header-nav nav .header-btn .common-btn:hover{background: #fff;color: <?php echo $primary_color; ?>;}

.home header .header-nav nav .header-btn.sign-btn .common-btn:hover{border: 1px solid <?php echo $primary_color; ?>;background: <?php echo $primary_color; ?>;color: #fff;}

.home header.sticky .header-nav nav .header-btn.sign-btn .common-btn{border-color: <?php echo $secondary_color; ?>;}

.home header.sticky .header-nav nav .header-btn .common-btn:hover{background: <?php echo $secondary_color; ?>;border-color: transparent;color: #fff;}


.home-page-header.main-menu li > a{color: #fff;}

.home-page-header.main-menu .sub-menu li a{color: <?php echo $secondary_color; ?>;}

.main-menu li > a{color: <?php echo $secondary_color; ?>;}

.sticky .main-menu .current_page_item > a{color: <?php echo $primary_color; ?>;}

.sticky .home-page-header.main-menu li a:hover{color: <?php echo $primary_color; ?>;}

.sub-menu li a:hover{background: <?php echo $secondary_color; ?>;color: #fff;}

.sticky .home-page-header.main-menu .sub-menu li a:hover{color: #fff;}

.home-page-header.main-menu .sub-menu li a:hover{color: #fff;}

.sub-menu li a{color: <?php echo $secondary_color; ?>;}

.sub-menu .current-menu-item a{background: <?php echo $secondary_color; ?>;color: #fff;}

.main-menu .current_page_ancestor > a{color: <?php echo $primary_color; ?>;}

.sticky .main-menu .current_page_ancestor > a{color: <?php echo $primary_color; ?>;}

.common-btn{background: <?php echo $primary_color; ?>;color: #fff;}

.common-btn:hover ,.pricing_box a.booknow:hover{background: <?php echo $secondary_color; ?>;}



.home-banner-secction::before{background: <?php echo $secondary_color; ?>;}

.home-banner-content .home-content_right .common-btn{border-color:<?php echo $primary_color; ?>;}

.home-banner-content .home-content_right .common-btn:hover{background:<?php echo $primary_color; ?>;}



.about-company .about-inner p:first-child{color: <?php echo $primary_color; ?>;}



.mobile-book-section{background: <?php echo $extra_light_color; ?>;}

.mobile-image-block::before{background-color: <?php echo $primary_color?>;}

.contact-us-section_common .contact-us-section_inner .contact-us-section_detail h4{color: <?php echo $primary_color?>;}

.decade-cleaning-section.section-spacing .heighlight-box{background: <?php echo $tertiary_color; ?> ;}

.contact-us-section_icon svg path{fill: <?php echo $primary_color?>;}

.solid-btn.reverse{background: <?php echo $secondary_color; ?> ;}

.solid-btn.reverse:hover{background:#fff; color:<?php echo $primary_color; ?>; }

.hero-review-main .hero-review__inner{background-color: <?php echo $primary_color; ?>;}

.top-tire-cleaning-content{background: <?php echo $extra_light_color; ?>;}

.top-tire-cleaning-content:hover{background: <?php echo $primary_color; ?>;}

.top-tire-cleaning-content .top-tire-cleaning-content-link{color: <?php echo $primary_color; ?>;}

.top-tire-cleaning-content:hover .top-tire-cleaning-content-link{color: #fff;}







.work-inner .company_rating-rate{color: <?php echo $primary_color; ?>;}



.blog-list-detail a:hover h3, .blog-list-detail a:hover{color:<?php echo $primary_color; ?>;}

.blog-list-detail a:hover svg path{fill:<?php echo $primary_color; ?>;}

.our-service-gurantee-section{background-color: <?php echo $extra_light_color; ?>;}

.border-btn{color: <?php echo $secondary_color; ?>;border-color:<?php echo $secondary_color; ?>;}

.border-btn:hover{background: <?php echo $secondary_color; ?>;color: #fff;}

.pricing_box{background: transparent;border-color:<?php echo $primary_color; ?>;}

.pricing_box li{color: <?php echo $body_text_color; ?>;}

.image-comparison__thumb{background-color: <?php echo $primary_color; ?>;}

.testimonial-slider-section,.cleaning-plan .cleaning-plan_slider .owl-stage-outer .owl-stage .owl-item:nth-child(2n) .item .pricing_box{background-color: <?php echo $primary_color; ?>;}

.join-community-section{background-color: #171C26;}



.cta-section{background-color: <?php echo $primary_color; ?>;}

.solid-btn:hover{background-color: <?php echo $secondary_color; ?>;}

.solid-btn{background: <?php echo $primary_color; ?>;}

.our-work-speaks .our-work-speaks-content p{color: <?php echo $primary_color; ?>;}

.our-work-slider .owl-prev span, .our-work-slider .owl-next span{background: <?php echo $primary_color; ?>;}

.our-work-slider .owl-prev span:hover, .our-work-slider .owl-next span:hover{background: <?php echo $secondary_color; ?>;color: <?php echo $primary_color; ?>;}

.inner-banner-section{background-color: <?php echo $secondary_color; ?>;}

.service-list-section{background-color: <?php echo $extra_light_color; ?>;}

.heighlight-box:hover{background: <?php echo $tertiary_color; ?>;}

.services-template .inner-banner-text .common-btn:hover{background: #fff;color: <?php echo $secondary_color; ?>;}



.company-rating{background-color: <?php echo $tertiary_color; ?>;}





.why-choose-move-in-out-section{background-color: <?php echo $tertiary_color; ?>;}

.our-cleaning-process-box .our-cleaning-process-icon::before{background-color: <?php echo $tertiary_color;?>;}

.why-choose-service-box .why-choose-service-icon::before{background-color: <?php echo $primary_color; ?>;}

.why-choose_images-container .why-choose_imgae--label .why-choose_image--label-text span{color: <?php echo $primary_color; ?>;}

.why-choose-us .why-choose_inner .why-choose-us_content-main .why-choose-us_sm-title{color: <?php echo $primary_color; ?>;}





.home_page--blog-item .home_page--blog-content a{color: <?php echo $primary_color; ?>;}

.home_page--blog-item .home_page--blog-content a:hover{color: <?php echo $secondary_color; ?>;}

.home_page-highlighted--blog-item .home_page-highlighted--blog-item-details a{color: <?php echo $primary_color; ?>;}

.home_page-highlighted--blog-item .home_page-highlighted--blog-item-details a:hover{color: <?php echo $secondary_color; ?>;}

.home_page-highlighted--blog-item .home_page-highlighted--blog-item-details a:hover svg path{fill: <?php echo $secondary_color; ?>;}

.blog-list-detail.home_page--blog-content a:hover svg path{fill: <?php echo $secondary_color; ?>;}



.photo-gallery-section{background-color: <?php echo $secondary_color;?>;}

.photo-gallery-heading p{color: <?php echo $primary_color;?>;}



footer{background-color: <?php echo $secondary_color; ?>;}

footer a:hover{color: <?php echo $hover_color_footer; ?>;}

footer .copy-right-div{background-color: <?php echo $secondary_color; ?>;}

.why-choose-service-section,.team-section .team-section_inner{ background-color: <?php echo $tertiary_color; ?>; }

.pricing_box.bg a.booknow{background: #fff;color: <?php echo $primary_color; ?>;}

.pricing_box.bg a.booknow:hover{background: <?php echo $secondary_color; ?>;color: #fff; }



.contact-us-section_common.no-gap{background: <?php echo $tertiary_color; ?>;}



.owl-nav button{background: <?php echo $primary_color; ?> !important;}

.owl-nav button:hover{background: <?php echo $secondary_color; ?> !important;}



.move-in-out-include-list svg circle{fill: <?php echo $primary_color; ?>;}

.table-content{background-color: <?php echo $extra_light_color; ?>;}

.table-content-list svg rect{fill: <?php echo $primary_color; ?>;}

.move-in-out-include-list svg path{fill: <?php echo $primary_color; ?>;}



.photo-gallery-slider .owl-nav button:hover{background: #fff !important;}

.photo-gallery-slider .owl-nav button:hover svg path{stroke: <?php echo $primary_color; ?>;}

.single-career-post-row .accordion-item{background: <?php echo $extra_light_color; ?>;}

.social-media a:hover svg path{fill: <?php echo $primary_color; ?>;}

.contact-us_detail-inner .contact-us_detail-inner-bg{background: <?php echo $secondary_color; ?>;}


footer .current_page_item > a{color:<?php echo $primary_color; ?>;}



@media only screen and (max-width: 1199px) {

.home header .header-nav nav .header-btn.sign-btn .common-btn{border-color: transparent;background: transparent;}

.home header .header-nav nav .header-btn.sign-btn .common-btn:hover,

.home header.sticky .header-nav nav .header-btn.sign-btn .common-btn{border-color: transparent;background: transparent;}

.closeMenu .toggle-icon::before,

.closeMenu .toggle-icon::after{background-color: <?php echo $primary_color; ?>;}

.toggle-icon{background: <?php echo $primary_color; ?>;}

.closeMenu .toggle-icon{background: <?php echo $primary_color; ?>;}

.toggle-icon::before, .toggle-icon::after{background: <?php echo $primary_color; ?>;}

header nav .main-menu li.current-menu-item > a{color: <?php echo $primary_color; ?>;}

.sub-menu li a:hover{color: <?php echo $primary_color; ?>;background: transparent;}

header nav .main-menu li.current_page_ancestor > a{color:<?php echo $primary_color; ?>;}

.header-btn.sign-btn .common-btn:hover{color: <?php echo $primary_color; ?>;}

.main-menu li a:hover{color:<?php echo $primary_color; ?>;}


.home-page-header.main-menu .sub-menu li a{color: #fff;}

.home-page-header.main-menu .sub-menu li a:hover{color:<?php echo $primary_color; ?>;}

.sticky .home-page-header.main-menu li a{color: #fff;}

.sticky .home-page-header.main-menu .sub-menu li a:hover{color:<?php echo $primary_color; ?>;}


}