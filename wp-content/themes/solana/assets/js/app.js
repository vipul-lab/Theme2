// 

// $(".toggle").click(function () {
//     $(".toggle").toggleClass("closeMenu");
//     $(".main-menu").toggleClass("show-menu");
// });




document.addEventListener("DOMContentLoaded", () => {
    setTimeout(function () {
  const $tables = $(".tableWidth");
  if (!$tables.length) return;

  const colCount = $tables.first().find("tr:first td").length;
  const maxWidths = Array(colCount).fill(0);

  // Step 1: find max width per column
  $tables.each(function () {
    $(this).find("tr").each(function () {
      $(this).find("td").each(function (index) {
        maxWidths[index] = Math.max(maxWidths[index], $(this).outerWidth());
      });
    });
  });

  // Step 2: apply widths to all tables
  $tables.each(function () {
    $(this).find("tr").each(function () {
      $(this).find("td").each(function (index) {
        $(this).css("width", maxWidths[index] + "px");
      });
    });
  });
}, 3000); // ⏱️ 3 seconds delay
});




document.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");
  if (!body) return;

  window.addEventListener("scroll", () => {
    if (window.scrollY) {
      body.classList.add("headerSticky");
    } else {
      body.classList.remove("headerSticky");
    }
  });
});


// Testimonial Slider Js

$('.testimonial-slider').owlCarousel({
    loop:true,
    margin:10,
	dots:false,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$('.cleaning-plan_slider').owlCarousel({
    loop:false,
    margin:30,
	dots:true,
    nav:false,
    navText: [
        '<svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.7848 2.06704L2.19531 10.6566L10.7848 19.2461" stroke="#0964CD" stroke-width="3.17337" stroke-linecap="round" stroke-linejoin="round"/></svg>',
        '<svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.21524 2.06704L10.8047 10.6566L2.21524 19.2461" stroke="#0964CD" stroke-width="3.17337" stroke-linecap="round" stroke-linejoin="round"/></svg>'
    ],
    responsive:{
        0:{
            items:1,
        },
        576:{
            items:2
        },
        992:{
            mouseDrag:false,
            items:3,
        },
    }
})
$('.image-comparison_slider').owlCarousel({
    loop:true,
    margin:25,
	dots:true,
    nav:false,
    mouseDrag:false,
    navText: [
        '<svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.7848 2.06704L2.19531 10.6566L10.7848 19.2461" stroke="#0964CD" stroke-width="3.17337" stroke-linecap="round" stroke-linejoin="round"/></svg>',
        '<svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.21524 2.06704L10.8047 10.6566L2.21524 19.2461" stroke="#0964CD" stroke-width="3.17337" stroke-linecap="round" stroke-linejoin="round"/></svg>'
    ],
    responsive:{
        0:{
            items:1,
            touchDrag:false
        },
        576:{
            items:2
        },
        992:{
            items:3,
        },
    }
})

$('.team-section_slider').owlCarousel({
    loop:false,
    margin:10,
	dots:false,
    nav:true,
    navText: [
        '<svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.7848 2.06704L2.19531 10.6566L10.7848 19.2461" stroke="#0964CD" stroke-width="3.17337" stroke-linecap="round" stroke-linejoin="round"/></svg>',
        '<svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.21524 2.06704L10.8047 10.6566L2.21524 19.2461" stroke="#0964CD" stroke-width="3.17337" stroke-linecap="round" stroke-linejoin="round"/></svg>'
    ],
    
    responsive:{
        0:{
            items:1,
        },
        576:{
            items:1.9999
        },
        992:{
            mouseDrag:false,
            items:4,
        },
    }
})

// Our Work Slider Js
$('.our-work-slider').owlCarousel({
    loop:true,
    margin:30,
	dots:false,
    nav:true,
    navText: [
        '<svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.7848 2.06704L2.19531 10.6566L10.7848 19.2461" stroke="#0964CD" stroke-width="3.17337" stroke-linecap="round" stroke-linejoin="round"/></svg>',
        '<svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.21524 2.06704L10.8047 10.6566L2.21524 19.2461" stroke="#0964CD" stroke-width="3.17337" stroke-linecap="round" stroke-linejoin="round"/></svg>'
    ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2.999
        }
    }
})


$('.photo-gallery-slider').owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayHoverPause: false,
    autoplayTimeout: 3500,
    autoplaySpeed: 3500,
    slideTransition: 'linear', 
    navText: [
        '<i class="fa-solid fa-circle-arrow-left"></i>',
        '<i class="fa-solid fa-circle-arrow-right"></i>'
    ],
    responsive: {
        0: {
            items: 1,
            nav: true,
            autoplay: false
        },
        576:{
            items: 2,
            nav: true,
            autoplay: false
        },
        768: {
            items: 2.5
        },
        992: {
            items: 4.5
        }
    }
});

// Hmblog slider //
$('.hmservice-slider').owlCarousel({
    loop:true,
    margin:25,
    dots:true,
    mouseDrag:false,
    nav:false,
    navText: [
        '<svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.7848 2.06704L2.19531 10.6566L10.7848 19.2461" stroke="#0964CD" stroke-width="3.17337" stroke-linecap="round" stroke-linejoin="round"/></svg>',
        '<svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.21524 2.06704L10.8047 10.6566L2.21524 19.2461" stroke="#0964CD" stroke-width="3.17337" stroke-linecap="round" stroke-linejoin="round"/></svg>'
    ],
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2
        },
        992:{
            items:3
        }
    }
})


// Hmblog slider //
// $('.hmblog-slider').owlCarousel({
//     loop:true,
//     margin:25,
//     dots:false,
//     mouseDrag:false,
//     nav:true,
//     navText: [
//         '<svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.7848 2.06704L2.19531 10.6566L10.7848 19.2461" stroke="#0964CD" stroke-width="3.17337" stroke-linecap="round" stroke-linejoin="round"/></svg>',
//         '<svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.21524 2.06704L10.8047 10.6566L2.21524 19.2461" stroke="#0964CD" stroke-width="3.17337" stroke-linecap="round" stroke-linejoin="round"/></svg>'
//     ],
//     responsive:{
//         0:{
//             items:1
//         },
//         576:{
//             items:2
//         },
//         992:{
//             items:3
//         }
//     }
// })

$(document).ready(function() {
  $(".menu-item-has-children > a").each(function() {
    var $this = $(this);
    var arrowIcon = $('<span class="dropdown-symbol"><i class="fa-solid fa-angle-down"></i></span>');
    $this.append(arrowIcon);
  });
  $(".menu-item-has-children > a").click(function(event) {
    var $target = $(event.target);
    if ($target.closest(".dropdown-symbol").length) {
      event.preventDefault();

      var subMenu = $(this).closest("li.menu-item").children("ul.sub-menu");

      $(this).toggleClass("dropdown-active");

      // Toggle the sub-menu visibility
      subMenu.slideToggle('fast');
    }
  });
  $(document).click(function(event) {
    if (!$(event.target).closest('.menu-item-has-children').length) {
      $(".menu-item-has-children > a").removeClass("dropdown-active");
      $(".menu-item-has-children ul.sub-menu").slideUp('fast');
    }
  });

});



// Image comparison start

document.querySelectorAll('[data-component="image-comparison-slider"]').forEach(imageComparisonSlider => {
    
    function setSliderState(e, element) {
        const sliderRange = element.querySelector('[data-image-comparison-range]');

        if (e.type === 'input') {
            sliderRange.classList.add('image-comparison__range--active');
            return;
        }

        sliderRange.classList.remove('image-comparison__range--active');
        element.removeEventListener('mousemove', moveSliderThumb);
    }



    function moveSliderRange(e, element) {
        const value = e.target.value;
        const slider = element.querySelector('[data-image-comparison-slider]');
        const imageWrapperOverlay = element.querySelector('[data-image-comparison-overlay]');

        slider.style.left = `${value}%`;
        imageWrapperOverlay.style.width = `${value}%`;

        element.addEventListener('mousemove', e => moveSliderThumb(e, element));
        setSliderState(e, element);
    }

    function init(element) {
        const sliderRange = element.querySelector('[data-image-comparison-range]');

        if (!('ontouchstart' in window)) {
            sliderRange.addEventListener('mouseup', e => setSliderState(e, element));
            sliderRange.addEventListener('mousedown', e => moveSliderThumb(e, element));
        }

        sliderRange.addEventListener('input', e => moveSliderRange(e, element));
        sliderRange.addEventListener('change', e => moveSliderRange(e, element));
    }

    init(imageComparisonSlider);
});

// Image comparison end


// Initialize Owl Carousel for mobile/tablet screens (991px or less)
$(document).ready(function() {
    function initializeOwlCarousel() {
        if (window.innerWidth <= 991) {
            if (!$('.hmblog-slider').hasClass('owl-carousel')) {
                $('.hmblog-slider').addClass('owl-carousel').owlCarousel({
                    loop: true,
                    autoplay: true,
                    margin: 30,
                    nav: false,
                    items: 3,
                    responsive : {
                    0 : {
                        items: 1,
                        margin: 20
                    },
                    576 : {
                        items: 2,
                        margin: 20
                    }
                }
                });
            }
        } else {
            if ($('.hmblog-slider').hasClass('owl-carousel')) {
                $('.hmblog-slider').trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
            }
        }
    }
    initializeOwlCarousel();
    $(window).resize(function() {
        initializeOwlCarousel();
    });
});