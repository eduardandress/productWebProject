//The Products Page js module
var productsAPI = (function($){ 

	var init = function(){

	  $('.rating').barrating({
          theme: 'css-stars',
          showSelectedRating: false
      });
      $('.product-item .description-container').perfectScrollbar();
	}

	return {
		init: init
	}

}(jQuery));