//The home Page js module
export default homeAPI = (function($){

	var initClientsCarousel = function(){
		$("#owl-clients").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]

        });
	}

	var init = function(){
		initClientsCarousel();
	}

	return {
		init: init
	}

}(jQuery));
