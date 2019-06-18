(function($) {
  "use strict"; // Start of use strict
  $.nette.init();

  // Toggle the side navigation
  $("#sidebarToggle").on('click', function(e) {
    e.preventDefault();
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    event.preventDefault();
  });
  
  //navbar
var url =location.href;
if(url.indexOf("format")> -1) {
  document.getElementById('formats').classList.add("active");
}
else if(url.indexOf("cl")> -1){
  document.getElementById('cl').classList.add("active");
}
else if(url.indexOf("basic-info")> -1){
  document.getElementById('basic-info').classList.add("active");
}

else if(url.indexOf("register")> -1){
  document.getElementById('register').classList.add("active");
}

else  {
  document.getElementById('dashboard').classList.add("active");
}

})(jQuery); // End of use strict


$(function(){
  if(document.getElementsByClassName('flash').length > 0){
    setTimeout(function()
    { 
      $(".flash").hide(1000);
    }, 2000);  
  }
});


  $('a[data-target="#deleteModal"]').click(function () {
    var data_delete_id = '';
    if (typeof $(this).data('id') !== 'undefined') {
      data_delete_id = $(this).data('id');
    }
    $('#dataDeleteId').val(data_delete_id);
  })
