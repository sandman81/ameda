jQuery(document).ready(function($) {

	$('.page-video-content_video .media-youtube-player').attr('id', 'video');

	$.datepicker.regional['ru'] = {
	closeText: 'Закрыть',
	prevText: '<Пред',
	nextText: 'След>',
	currentText: 'Сегодня',
	monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
	'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
	monthNamesShort: ['Января','Февраля','Марта','Апреля','Мая','Июня',
	'Июля','Августа','Сентября','Октября','Ноября','Декабря'],
	dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
	dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
	dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
	weekHeader: 'Не',
	dateFormat: 'dd M в',
	firstDay: 1,
	isRTL: false,
	showMonthAfterYear: false,
	yearSuffix: ''
	};
	$.datepicker.setDefaults($.datepicker.regional['ru']);

	$.timepicker.regional['ru'] = {
		timeOnlyTitle: 'Выберите время',
		timeText: 'Время визита',
		hourText: 'ч.',
		minuteText: 'мин.',
		secondText: 'Секунды',
		millisecText: 'Миллисекунды',
		timezoneText: 'Часовой пояс',
		currentText: 'Сейчас',
		closeText: 'Закрыть',
		timeFormat: 'HH:mm',
		amNames: ['AM', 'A'],
		pmNames: ['PM', 'P'],
		isRTL: false
	};
	$.timepicker.setDefaults($.timepicker.regional['ru']);
	
	
    $('.front-actions_list').carousel({
		carouselWidth: 1180,
		carouselHeight: 313,
		frontWidth: 579,
		frontHeight: 313,
		hMargin: 0.85, 
    	vMargin: 0.6,
		left: 0, 
    	right: 0, 
    	top: 0, 
    	bottom: 0, 
    	backZoom: 0.5, 
    	reflectionHeight: 0.2,
    	backOpacity: 0.4,
		autoplay: true,
		directionNav: true
	});

	$('.front-page-content_video-but .fancybox-video').text('смотреть видео о клинике');

	$('.page-reviews .view-filters .views-widget-filter-views_hst_filter').each(function(index, el) {
		var label = $(this).find('label').text();
		$(this).find('.form-item-select-reviews-page-hst-filter-4 .form-select option:first').text(label);
		$(this).find('.views-hst-filter .form-type-select:not(.form-item-select-reviews-page-hst-filter-4) .form-select option:first').text('Выберите заболевание');
	});

	$('.page-reviews .view-filters .views-widget-filter-views_hst_filter .views-hst-filter').append('<div class="hidden-select">Выберите заболевание</div>');

	$('.page-faq .view-filters .views-widget-filter-views_hst_filter').each(function(index, el) {
		var label = $(this).find('label').text();
		$(this).find('.form-item-select-faq-page-hst-filter-4 .form-select option:first').text(label);
		$(this).find('.views-hst-filter .form-type-select:not(.form-item-select-faq-page-hst-filter-4) .form-select option:first').text('Выберите заболевание');
	});

	$('.page-faq .view-filters .views-widget-filter-views_hst_filter .views-hst-filter').append('<div class="hidden-select">Выберите заболевание</div>');

	$(".form-select").chosen({
	    disable_search: true,
	    width: "100%"
	});

	$('.order-form-date label').after('<div class="order-form-date_desc"></div>');

	var myControl=  {
	create: function(tp_inst, obj, unit, val, min, max, step){
		$('<input class="ui-timepicker-input" value="'+val+'">')
			.appendTo(obj)
			.spinner({
				min: min,
				max: max,
				step: step,
				change: function(e,ui){ // key events
						// don't call if api was used and not key press
						if(e.originalEvent !== undefined)
							tp_inst._onTimeChange();
						tp_inst._onSelectHandler();
					},
				spin: function(e,ui){ // spin events
						tp_inst.control.value(tp_inst, obj, unit, ui.value);
						tp_inst._onTimeChange();
						tp_inst._onSelectHandler();
					}
			});
		return obj;
		},
		options: function(tp_inst, obj, unit, opts, val){
			if(typeof(opts) == 'string' && val !== undefined)
				return obj.find('.ui-timepicker-input').spinner(opts, val);
			return obj.find('.ui-timepicker-input').spinner(opts);
		},
		value: function(tp_inst, obj, unit, val){
			if(val !== undefined)
				return obj.find('.ui-timepicker-input').spinner('value', val);
			return obj.find('.ui-timepicker-input').spinner('value');
		}
	};

	$('.order-form-date-field').datetimepicker({
		hourMin: 8,
		hourMax: 20,
		controlType: myControl,
        showOn: "button",
        buttonImage: "/sites/all/themes/ameda/img/cal-but.png",
        buttonImageOnly: true,
		onSelect: function(selectedDate) {
	    	$(this).prev('.order-form-date_desc').text(selectedDate);
	  	}
	});

	$('.ui-datepicker').click(function(event) {
		event.stopPropagation();
	});

	$('.order-form-date img').click(function(event) {
		$(this).prev('.order-form-date-field').toggleClass('active');
		return false;
	});

	$('body').click(function(event){
        $('.order-form-date-field').removeClass('active');
    });

    $('.preim-list-item').prepend('<i class="preim-list-item-icon"></i>');

    $('.preim-list').owlCarousel({
	    loop: true,
	    margin: 0,
	    nav: true,
	    mouseDrag: false,
	    dots: false,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:2
	        },
	        850:{
	            items:3
	        },
	        1100:{
	            items:4,
	            nav: false
	        }
	    }
	});

	$('.doctors-list-item-img').each(function(index, el) {
		$(this).find('a').wrapInner('<span class="doctors-list-item-img-full"><span class="doctors-list-item-img-full-text"></span></span>');
		var img = $(this).find('img');
		$(this).find('a').prepend(img);
	});	 

	 $('.front-doctors-slider').each(function(index, element) {
        if($(this).find('.doctors-list-item').length > 3){
           $(this).owlCarousel({
		    loop: true,
		    margin: 0,
		    nav: true,
		    mouseDrag: false,
		    dots: false,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:2
		        },
		        850:{
		            items:3
		        },
		        1100:{
		            items:4,
		            nav: false
		        }
		    }
		});
       }
    });

	 $('.front-doctors-slider').each(function(index, element) {
        if($(this).find('.doctors-list-item').length > 2){
           $(this).owlCarousel({
		    loop: true,
		    margin: 0,
		    nav: true,
		    mouseDrag: false,
		    dots: false,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:2
		        },
		        1100:{
		            items:3,
		            nav: false
		        }
		    }
		});
       }
    });

	$('.front-doctors-slider').each(function(index, element) {
        if($(this).find('.doctors-list-item').length > 1){
           $(this).owlCarousel({
		    loop: true,
		    margin: 0,
		    nav: true,
		    mouseDrag: false,
		    dots: false,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:2,
		            nav: false
		        }
		    }
		});
       }
    });

    $('.about-doctors-slider').each(function(index, element) {
        if($(this).find('.doctors-list-item').length > 1){
           $(this).owlCarousel({
		    loop: true,
		    margin: 0,
		    nav: true,
		    mouseDrag: false,
		    dots: false,
		    responsive:{
		        0:{
		            items:1
		        },
		        767:{
		            items:2
		        },
		        1100:{
		            items:3
		        },
		        1180:{
		        	loop: false,
		        	margin: 20,
		        	autoWidth: true,
		            items:4,
		            nav: false
		        }
		    }
		});
       }
    });

    $('.doc-serts-content_list').each(function(index, element) {
        if($(this).find('a').length > 3){
           $(this).owlCarousel({
		    loop: true,
		    margin: 90,
		    nav: true,
		    mouseDrag: false,
		    dots: false,
		    responsive:{
		        0:{
		            items:1
		        },
		        700:{
		            items:2
		        },
		        1100:{
		            items:3
		        },
		        1180:{
		            items:4,
		            nav: false
		        }
		    }
		});
       }
    });

    $('.reviews-slider').each(function(index, element) {
        if($(this).find('.reviews-list-item').length > 1){
           $(this).owlCarousel({
		    loop: true,
		    margin: 0,
		    nav: true,
		    mouseDrag: false,
		    dots: false,
		    responsive:{
		        0:{
		            items: 1
		        },
		        1180:{
		            items: 2,
		            margin: 100,
		            nav: false
		        }
		    }
		});
       }
    });

    $('.front-actions_list-sm-list').owlCarousel({
	    loop: true,
	    margin: 0,
	    items: 1,
	    nav: true,
	    mouseDrag: false,
	    dots: false
	});



	$('.bottom-map-locations-list-item.item-1').click(function(event) {
		$('.location-map-1').addClass('active').siblings('.bottom-map_full-map-content').removeClass('active');
	});

	$('.bottom-map-locations-list-item.item-2').click(function(event) {
		$('.location-map-2').addClass('active').siblings('.bottom-map_full-map-content').removeClass('active');
	});

	$('.bottom-map-locations-list-item.item-3').click(function(event) {
		$('.location-map-3').addClass('active').siblings('.bottom-map_full-map-content').removeClass('active');
	});

	$('.bottom-map-locations-list-item.item-4').click(function(event) {
		$('.location-map-4').addClass('active').siblings('.bottom-map_full-map-content').removeClass('active');
	});

	$('.advice-list-item').append('<div class="advice-list-item_name">горячие консультации</div>');

	$('.page-video-content_poster').each(function(index, el) {
		var srcImg = $(this).find('img').attr('src');		
		$(this).css('background-image', 'url("' + srcImg + '")');
		$(this).css('background-repeat', 'no-repeat');
		$(this).css('background-position', 'center');
		$(this).css('background-size', 'cover');
		$(this).find('img').remove();
	});

	$('.page-video-content_poster-but').click(function(event) {
		$(this).closest('.page-video-content_poster').fadeOut(200);
		$(this).closest('.page-video-content_poster').siblings('.page-video-content_video').fadeIn(200);
	});

	$('.open-doctor-top_content-info-full-but').click(function(event) {
		$(this).siblings('.open-doctor-top_content-info-text').addClass('open');
	});

	$('.open-section-top_services').autocolumnlist();

	$('.price-list-item-cat').each(function(index, el) {
		$(this).wrap('<div class="price-list-row"></div>');
	});
	$('.price-list-row').each(function(index, el) {
		var list = $(this).next('.price-list-item');
		$(this).append(list);
	});

	$('.price-list-item-cat').each(function(index, el) {
		$(this).wrapInner('<div class="price-list-item-cat_title"></div>');
		$(this).append('<div class="price-list-item-cat_button"><div class="price-list-item-cat_button-text visible">развернуть</div><div class="price-list-item-cat_button-text hidden">свернуть</div></div>');
	});

	$('.price-list-item-cat').click(function(event) {
		$(this).toggleClass('active');
		$(this).next('.price-list-item').slideToggle(200);
	});

	$('.price-list-item-content-title').click(function(event) {
		$(this).toggleClass('active');
		$(this).next('.price-list-item-content-list').slideToggle(200);
	});

	$('.vacancy-list-item_title').each(function(index, el) {
		$(this).wrapInner('<div class="vacancy-list-item_title_title"></div>');
		$(this).append('<div class="vacancy-list-item_title_button"><div class="vacancy-list-item_title_button-text visible">развернуть</div><div class="vacancy-list-item_title_button-text hidden">свернуть</div></div>');
	});

	$('.vacancy-list-item_title').click(function(event) {
		$(this).toggleClass('active');
		$(this).next('.vacancy-list-item_text').slideToggle(200);
	});

	$('.faq-list-item_bottom-votes').each(function(index, el) {
		var count = $(this).find('.is-useful-yes .count').text();
		function parseNum(str){ return parseFloat(String(str).match(/-?\d+(?:\.\d+)?/g, '') || 0, 10); }
		var count2 = parseNum(count);
		$(this).find('.faq-list-item_bottom-votes-count span').text(count2);
	});

    $('.faq-list-item_bottom-votes-count').each(function() {
        var txt = $(this).find('span').text();
        if (txt == 1)
            $(this).find('i').text('посетитель считает этот ответ полезным');
        else
            $(this).find('i').text('посетителей считают этот ответ полезным');
    });

    $('.header-menu_main-menu > .menu > li > .menu > li > a, .sections-menu > .menu > li > .menu > li > a').wrapInner('<span></span>');

    $('.header-menu_main-menu > .menu > li.expanded').hover(
        function() {
            $(this).find(' > .menu').stop(false, true).slideDown(200);
        },
        function() {     
            $(this).find(' > .menu').stop(false, true).slideUp(200);
        }
    );

    $('.gallery-content a').append('<i></i>');

    $('.gallery-view-but_button').click(function(event) {
    	var hiddenList = $('.gallery-hidden').html();
    	$(this).closest('.gallery-view-but').remove();
    	$('.gallery-hidden').remove();
    	$('.gallery-content').append(hiddenList);
    	$(".fancybox").fancybox();
    });

    $('.header-content_buttons-call-popup, .order-form-popup, .header-content_order').click(function(event){
        event.stopPropagation();
    });

	$('.header-content_buttons .menu li.last a').click(function(event){
        event.preventDefault();
        $(this).toggleClass('current');
        $('.header-content_buttons-call-popup').slideToggle(200);
        return false;
    });

    $('body').click(function(event){
        $('.header-content_buttons-call-popup').slideUp(200);
        $('.header-content_buttons .menu li.last a').removeClass('current');
    });

    $('.header-content_tel .menu li a').click(function(event){
        event.preventDefault();
        $(this).toggleClass('current');
        $('.header-content_order').slideToggle(200);
        return false;
    });

    $('body').click(function(event){
        $('.header-content_order').slideUp(200);
        $('.header-content_tel .menu li a').removeClass('current');
    });

    $('.header-content_buttons .menu li.first a').click(function(event){
        event.preventDefault();
        $(this).addClass('current');
        $('.vizov-popup-content').addClass('active');
        return false;
    });

    $('body, .order-form-popup_closed').click(function(event){
        $('.vizov-popup-content').removeClass('active');
        $('.header-content_buttons .menu li.first a').removeClass('current');
    });

    $('.open-section-top_banner-title').each(function(index, el) {
    	var title = $(this).clone();
    	$(this).next('.open-section-top_banner-text').prepend(title);
    });

    //open faq popup
	$('.faq-top-box_button').click(function(event){
        $('.faq-popup-content').addClass('active');
        return false;
    });

    $('body, .order-form-popup_closed').click(function(event){
        $('.faq-popup-content').removeClass('active');
    });
    //open faq popup end

    //open medium left menu
    $('.sections-menu > .menu > li > a').click(function(event) {
    	event.preventDefault();
    	var menu = $(this).next('.menu').clone();
    	$('.med-dropdown-menu_content').html(menu);
    	$('.med-dropdown-menu').addClass('open');
    });

    $('.header-content_button-menu').click(function(event) {
    	var menu = $('.header-menu_main-menu > .menu').clone();
    	$('.med-dropdown-menu_content').html(menu);
    	$('.med-dropdown-menu').addClass('open');
    	$('.med-dropdown-menu_content > .menu > .first > a').hide();
    });

    $('.med-dropdown-menu_back').click(function(event) {
    	$(this).closest('.med-dropdown-menu').removeClass('open');
    });
    //open medium left menu end



    
    //ajax functions

    $(document).ajaxComplete(function(){

		$('.page-reviews .view-filters .views-widget-filter-views_hst_filter').each(function(index, el) {
			var label = $(this).find('label').text();
			$(this).find('.form-item-select-reviews-page-hst-filter-4 .form-select option:first').text(label);
			$(this).find('.views-hst-filter .form-type-select:last .form-select option:first').text('Выберите заболевание');
		});

		$('.page-reviews .view-filters .views-widget-filter-views_hst_filter .views-hst-filter').append('<div class="hidden-select">Выберите заболевание</div>');

		$('.page-faq .view-filters .views-widget-filter-views_hst_filter').each(function(index, el) {
			var label = $(this).find('label').text();
			$(this).find('.form-item-select-faq-page-hst-filter-4 .form-select option:first').text(label);
			$(this).find('.views-hst-filter .form-type-select:not(.form-item-select-faq-page-hst-filter-4) .form-select option:first').text('Выберите заболевание');
		});

		$('.page-faq .view-filters .views-widget-filter-views_hst_filter .views-hst-filter').append('<div class="hidden-select">Выберите заболевание</div>');

    	$(".form-select").chosen({
		    disable_search: true,
		    width: "100%"
		});

		$('.order-form-date label').after('<div class="order-form-date_desc"></div>');

		$('.order-form-date-field').datetimepicker({
			hourMin: 8,
			hourMax: 20,
			controlType: myControl,
	        showOn: "button",
	        buttonImage: "/sites/all/themes/ameda/img/cal-but.png",
	        buttonImageOnly: true,
			onSelect: function(selectedDate) {
		    	$(this).prev('.order-form-date_desc').text(selectedDate);
		  	}
		});

		$('.order-form-date-field').each(function(index, el) {
			var curDate = $(this).attr('value');
			$(this).closest('.order-form-date').find('.order-form-date_desc').text(curDate);
		});	    

		
		$('.doctors-list-item-img').each(function(index, el) {
			$(this).find('a').wrapInner('<span class="doctors-list-item-img-full"><span class="doctors-list-item-img-full-text"></span></span>');
			var img = $(this).find('img');
			$(this).find('a').prepend(img);
		});	 

		$('.reviews-form_file-item').each(function(index, el) {
			$(this).find('.form-file').attr('id', 'file-upload');
			$(this).find('label').attr('for', 'file-upload');
		});

		$('.faq-list-item_bottom-votes').each(function(index, el) {
			var count = $(this).find('.is-useful-yes .count').text();
			function parseNum(str){ return parseFloat(String(str).match(/-?\d+(?:\.\d+)?/g, '') || 0, 10); }
			var count2 = parseNum(count);
			$(this).find('.faq-list-item_bottom-votes-count span').text(count2);
		});

		$('.faq-list-item_bottom-votes-count').each(function() {
	        var txt = $(this).find('span').text();
	        if (txt == 1)
	            $(this).find('i').text('посетитель считает этот ответ полезным');
	        else
	            $(this).find('i').text('посетителей считают этот ответ полезным');
	    });
		
        
        
    });

    //ajax functions end
	    
	    
	    
		
		
		
		
		
		
		




});










