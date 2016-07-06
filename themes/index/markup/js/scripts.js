$(document).ready(function(){

	$('.gallery-modal').fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none'
	});

	$('.modal-trigger').fancybox({
		padding : 0,
    	wrapCSS: 'form-modal-wrap'
	});

	$('.modal-filter-btn').fancybox({
		padding : 0,
    	wrapCSS: 'modal-form-filter',
    	helpers : {
	        overlay : {
	            css : {
	                'background' : 'rgba(0, 0, 0, 0.2)'
	            }
	        }
	    }
	});

	if($(window).width() < 768){
		$('.filter-title').on('click', function(e){
			e.preventDefault();
			if($(this).hasClass('active')){
				$(this).next().slideUp(function(){$(this).prev().removeClass('active')});
			}
			else{
				$(this).next().slideDown(function(){$(this).prev().addClass('active')});
				$('.filter-title.active').next().slideUp();
			}			
		});	
	}	

	$(document).on('click', '.modal-filter-btn', function(){
		$('.modal-form-filter .fancybox-outer').append("<div class='modal-filter-btns'><a href='#' class='cancel-btn'>Отмена</a><a href='#' class='show-btn'>Показать</a></div>");
	});

	$('.checkbox-more-btn').on('click', function(e){
		e.preventDefault();
		if($(this).hasClass('active')){
			$(this).removeClass('active').text('Показать все');
			$('.hide-checkbox-block').slideUp();
		}
		else{
			$(this).addClass('active').text('Свернуть');
			$('.hide-checkbox-block').slideDown();
		}
	});

	$(".tel-input").mask("+7(999) 999-99-99");

	if($('.range-slider').length > 0){
		$(".range-slider").slider({
			min: 0,
			max: 1000,
			values: [0,1000],
			range: true,
			stop: function(event, ui) {
				jQuery(".minCost").val(jQuery(".range-slider").slider("values",0));
				jQuery(".maxCost").val(jQuery(".range-slider").slider("values",1));
		    },
		    slide: function(event, ui){
				jQuery(".minCost").val(jQuery(".range-slider").slider("values",0));
				jQuery(".maxCost").val(jQuery(".range-slider").slider("values",1));
		    }
		});
	}
	
	if($('.modal-range-slider').length > 0){
		$(".modal-range-slider").slider({
			min: 0,
			max: 1000,
			values: [0,1000],
			range: true,
			stop: function(event, ui) {
				jQuery(".minCost").val(jQuery(".modal-range-slider").slider("values",0));
				jQuery(".maxCost").val(jQuery(".modal-range-slider").slider("values",1));
		    },
		    slide: function(event, ui){
				jQuery(".minCost").val(jQuery(".modal-range-slider").slider("values",0));
				jQuery(".maxCost").val(jQuery(".modal-range-slider").slider("values",1));
		    }
		});
	}

	if($('.product-gallery').length > 0){
		if($(window).width() > 767){
			var galSlider = $('.product-gallery').lightSlider({
				gallery:true,
				item:1,
				vertical:true,
				verticalHeight:400,
				vThumbWidth:124,
				thumbItem:4,
				thumbMargin:15,
				slideMargin:0,
				loop:true
			});  
		}
		else{
			var galSlider = $('.product-gallery').lightSlider({
				gallery:true,
				item:1,
				vertical:false,
				verticalHeight:400,
				vThumbWidth:124,
				thumbItem:4,
				thumbMargin:15,
				slideMargin:0,
				loop:true
			});  
		}
	}
	
	$('#goToPrevSlide').click(function(e){
		e.preventDefault();
        galSlider.goToPrevSlide(); 
    });
    $('#goToNextSlide').click(function(e){
    	e.preventDefault();
        galSlider.goToNextSlide(); 
    });

	$('.main-slider').owlCarousel({
		items: 1,
	    loop: true,
	    nav: true,
	    dots: true
	});

	$('.cat-menu-slider').owlCarousel({
		items: 8,
		margin: 25,
	    loop: true,
	    nav: true,
	    dots: true,
		responsive:{
	        0:{
	            items:2
	        },
	        480:{
	        	items:3
	        },
	        767:{
	            items:4
	        },
	        1000:{
	            items:6
	        }
	    }
	});

	$('.top-sale-slider').owlCarousel({
		items: 4,
		margin: 45,
	    loop: true,
	    nav: true,
	    dots: true,
		responsive:{
	        0:{
	            items:1
	        },
	        480:{
	        	items:2
	        },
	        767:{
	            items:3
	        },
	        1000:{
	            items:4
	        }
	    }
	});
	
	$('.clients-slider').owlCarousel({
		items: 4,
		margin: 45,
	    loop: true,
	    nav: true,
	    dots: true,
		responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:2
	        },
	        767:{
	            items:3
	        },
	        1000:{
	            items:4
	        }
	    }
	});

	$('.catalog-item-slider').owlCarousel({
		items: 1,
	    loop: true,
	    nav: true,
	    dots: false
	});

	// Adaptive header menu toggle
	$('.header-menu-toggle-btn').on('click', function(e){
        e.preventDefault();
        $('body, html').addClass('lockscroll');
    });
	$('.close-adaptive-menu').on('click', function(e){
        e.preventDefault();
        $('body, html').removeClass('lockscroll');
    });

    //Fade alerts on click
	$('.alert span').on('click', function(){
		$(this).parent().fadeOut();
	});

	// Tabs
	$('.tabs-list a').on('click', function(e){
    	e.preventDefault();

    	if ($(this).hasClass('active')) return false;
    	var obj = $(this).closest('.tabs-wrap'),
            indexEl = obj.find('.tabs-list a.active').index();

		obj.find('.tabs-list a').eq(indexEl).removeClass('active');
        $(this).addClass('active');
        obj.find('.tabs-content-item').eq(indexEl).hide();
        obj.find('.tabs-content-item').eq($(this).index()).fadeIn();
    });


	function initMap() {
		var myLatLng = {lat: 55.755130, lng: 37.617278};
		var map = new google.maps.Map(document.getElementById('contact-map'), {
			center: myLatLng,
			scrollwheel: false,
			zoom: 12
		});
		var marker = new google.maps.Marker({
			map: map,
			position: myLatLng,
			title: ''
		});
	}

	if($('#contact-map').length > 0){
		initMap();	
	}
   	    	
});