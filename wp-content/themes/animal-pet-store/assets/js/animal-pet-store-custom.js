/**
  * Theme Js file.
**/

jQuery('document').ready(function($){
  setTimeout(function () {
    jQuery(".loader").fadeOut("slow");
  },1000);
});

jQuery(function($){
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {
      $('#return-to-top').fadeIn(200);
    } else {
      $('#return-to-top').fadeOut(200);
    }
  });
  $('#return-to-top').click(function() {
    $('body,html').animate({
      scrollTop : 0
    }, 500);
  });
});

// dropdown category
jQuery(document).ready(function(){
  jQuery(".category-dropdown").hide();
  
  jQuery("button.category-btn").click(function(){
    jQuery(".category-dropdown").toggle();
  });

  // Handle focus using Tab and Shift+Tab
  jQuery(".category-btn, .category-dropdown").on("keydown", function(e) {
    var dropdownItems = jQuery(".category-dropdown").find("a"); // Assuming dropdown items are represented by <a> tags
    
    if (e.keyCode === 9) { // Tab key
      if (!e.shiftKey && document.activeElement === dropdownItems.last().get(0)) {
        e.preventDefault();
        jQuery(".category-btn").focus();
      } else if (e.shiftKey && document.activeElement === dropdownItems.first().get(0)) {
        e.preventDefault();
        jQuery(".category-btn").focus();
      }
    }
  });
});

// ===== Product ====

jQuery('document').ready(function(){
  var owl = jQuery('#product .owl-carousel');
    owl.owlCarousel({
    margin:20,
    nav: true,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots:false,
    navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 2
      },
      1200: {
        items: 3
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});

// ===== Mobile responsive Menu ====

function animal_pet_store_menu_open_nav() {
  jQuery(".sidenav").addClass('open');
}
function animal_pet_store_menu_close_nav() {
  jQuery(".sidenav").removeClass('open');
}

jQuery(window).scroll(function() {
  var data_sticky = jQuery('.innermenuboxupper').attr('data-sticky');

  if (data_sticky == "true") {
    if (jQuery(this).scrollTop() > 1){
      jQuery('.innermenuboxupper').addClass("stick_head");
    } else {
      jQuery('.innermenuboxupper').removeClass("stick_head");
    }
  }
});
