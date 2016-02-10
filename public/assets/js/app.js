$(document).ready(function(){
		
	// nav toggle function

	$(".menu_toggle_container").on("click",function(){
		$(this).toggleClass("menu_opened");
		$(".navbar-brand").toggleClass("menu_opened");
		$(".overlay_menu").toggleClass("menu_opened");
	});

	// riddles
	var $grid = $('#riddles_carousel').imagesLoaded( function() {
		
		var mySwiper = new Swiper ('#riddles_carousel', {
	      speed: 700,
	      nextButton: '.swiper-button-next',
	      prevButton: '.swiper-button-prev',
	      loop: true,
	      grabCursor: true,
	      // initialSlide: 1,
	      touchEventsTarget: 'wrapper',
	      onInit: afterCarousel
	    });     

		function afterCarousel(){

			// var chalkTL = new TimelineMax();
			// var chalkArray = [];
			// for(var i = 1; i < 14; i++) {
			// 	chalkArray.push("#chalk_path_" + i);
			// }

			$(".reveal_answer_btn").on("click",function(){
		    	$(this).parent(".question").toggleClass("show_answer");
		    	$(this).parent().next().toggleClass("show_answer");
		    	$(this).html($(this).html() == 'reveal answer' ? 'hide answer' : 'reveal answer');

		    	// chalkTL.staggerFromTo(chalkArray,0.5,{drawSVG:"0% 0%"},{drawSVG:"0% 100%"},0.1);
		    });
		}
	    

	});

	// about
	particlesJS.load('particles-js', 'public/assets/js/vendor/particles.json', function() {
	  console.log('callback - particles.js config loaded');
	});

	var movementStrength = 50;
	var height = movementStrength / $(window).height();
	var width = movementStrength / $(window).width();

	$("#particles-js").mousemove(function(e){
		var pageX = e.pageX - ($(window).width() / 2);
		var pageY = e.pageY - ($(window).height() / 2);
		var newvalueX = width * pageX * -1 - 25;
		var newvalueY = height * pageY * -1 - 50;
	});

	$("#about").mousemove(function(e){
		var pageX = e.pageX - ($(window).width() / 2);
		var pageY = e.pageY - ($(window).height() / 2);
		var newvalueX = width * pageX * -1 - 25;
		var newvalueY = height * pageY * -1 - 50;
		$('#particles-js').css({"left": newvalueX + "px", "top": newvalueY +"px"});
	});

	// gallery

	// prepare the svg 
	TweenMax.to($(".tile_overlay_path"), 0, {morphSVG:"#close"});

	var $grid = $('.grid').imagesLoaded( function() {
		// init after all images have loaded
		
		$grid.masonry({
			transitionDuration: '0.8s',
			gutter: 30,
			fitWidth: true
		});


		var tl = new TimelineMax();
		var tl2 = new TimelineMax();

		$(".grid-item").hover(function(){

			var currentTileOverlayPath = $(this).find(".tile_overlay_path");
			var currentContent = $(this).find(".overlay_content");
			tl
				.to(currentTileOverlayPath,0.2, {morphSVG:"#open"})
				.to(currentContent,0.1, {alpha: 1})
			;
			
		}, function(){

			var currentTileOverlayPath = $(this).find(".tile_overlay_path");
			var currentContent = $(this).find(".overlay_content");

			setTimeout(function(){ 
				tl2
					.to(currentContent , 0.1, {alpha: 0})
					.to(currentTileOverlayPath , 0.2, {morphSVG:"#close"})
				;
			}, 500);
			
		});

		// fullpage JS init after images are all loaded

		$('#fullpage').fullpage({
			menu: '.overlay_menu ul',
			lockAnchors: true,
	        anchors:['da-riddles', 'da-about', 'da-gallery'],
	        scrollingSpeed: 700,
	        touchSensitivity: 15,
			resize : true,
			scrollOverflow: false,
			responsiveWidth: 992,
			responsiveHeight: 768,
			fixedElements: '.navbar-fixed-top, footer',
		});

		$(".scroll_section_down").on("click",function(){
			$.fn.fullpage.moveSectionDown();
		});

		$(".overlay_menu ul li a").on("click",function(e){
			e.preventDefault();
			var sectionNumber = $(this).parent().index() + 1;
			$.fn.fullpage.moveTo(sectionNumber);
			$(".menu_toggle_container").toggleClass("menu_opened");
			$(".navbar-brand").toggleClass("menu_opened");
			$(".overlay_menu").removeClass("menu_opened");
			$(this).parent().addClass("active").siblings().removeClass("active");
		});

		$(".scroll_to_contact").on("click",function(){
			$.fn.fullpage.moveTo(4);
		});

		
	});

	// form

	$("#name, #message, #email").on("keypress focusout",function() {
		var currentVal = $(this).val();
		// console.log("currentVal: " + currentVal);
		
		if (currentVal != null && currentVal != "") {
			$(this).prev("label").addClass("push_up");
		}
		else {
			$(this).prev("label").removeClass("push_up");
		}
	});

	// Responsive

	var resizeTimer,
		myGallerySwiper;

	$(window).on('load resize', function(e) {

	  clearTimeout(resizeTimer);
	  resizeTimer = setTimeout(function() {
	  	
	     onSiteInit();

	  }, 250);

	});

	function onSiteInit(){
		var isResponsiveMode = $("body").hasClass("fp-responsive");

	  	if (isResponsiveMode) {
	  		//mobile code here

		  	// full page setting
		    $.fn.fullpage.setFitToSection(false);
		    $.fn.fullpage.setAutoScrolling(false);

		    // masonry setting
		    $grid.masonry('destroy');

		    myGallerySwiper = new Swiper ('#gallery_carousel', {
		      speed: 700,
		      nextButton: '.gallery-swiper-button-next',
		      prevButton: '.gallery-swiper-button-prev',
		      loop: true,
		      grabCursor: true,
		    }); 

		} else {//desktop code here
	  		
			// full page setting
		    $.fn.fullpage.setFitToSection(true);
		    $.fn.fullpage.setAutoScrolling(true);

		    // masonry setting
		    myGallerySwiper.destroy(true, true);

		    $('.grid').masonry({
				transitionDuration: '0.8s',
				gutter: 30,
				fitWidth: true
			});

			var tl = new TimelineMax();
			var tl2 = new TimelineMax();

			$(".grid-item").hover(function(){

				var currentTileOverlayPath = $(this).find(".tile_overlay_path");
				var currentContent = $(this).find(".overlay_content");
				tl
					.to(currentTileOverlayPath,0.2, {morphSVG:"#open"})
					.to(currentContent,0.1, {alpha: 1})
				;
				
			}, function(){

				var currentTileOverlayPath = $(this).find(".tile_overlay_path");
				var currentContent = $(this).find(".overlay_content");

				setTimeout(function(){ 
					tl2
						.to(currentContent , 0.1, {alpha: 0})
						.to(currentTileOverlayPath , 0.2, {morphSVG:"#close"})
					;
				}, 500);
				
			});


		}
	}
});

