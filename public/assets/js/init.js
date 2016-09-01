(function($){

	//Basics module
	var basicsAPI = (function($){
		//Put  here all the basic js logic to run in all pages
		var init = function(){
			$('.button-collapse').sideNav();
		    $('.carousel.carousel-slider').carousel({full_width: true});
		    window.setInterval(function(){$('.carousel').carousel('next')},10000)
		    
		    $('body').materialScrollTop({
		     // OPTIONS HERE

		    });

		}
		
		return {
			init: init
		}

	}(jQuery));

   $(function(){
   		basicsAPI.init();
   }); 

})(jQuery); // end of jQuery name space


