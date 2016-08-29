(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.carousel.carousel-slider').carousel({full_width: true});
    window.setInterval(function(){$('.carousel').carousel('next')},10000)
    
    $('body').materialScrollTop({
     // OPTIONS HERE

    });

  }); // end of document ready
})(jQuery); // end of jQuery name space


