/*jshint -W117 */
/*jslint latedef:false*/
/* jshint unused:false */
var isMobile = false; //initiate as false
var controller = new ScrollMagic.Controller();


$(document).ready(function(){
	'use strict';

 	initPage();
 	window.onresize = resize;
 });

// Page load event
function initPage(){
	'use strict';

	detectMobile();
	$(document).on('click', '.menu-trigger', setMenu);
	$(document).on('click', '.helper', setMenu);

	if($('body.home').length) {
		hideFullLoader();
	} else {
		hideLoader();
	}

	if($('main.default').length || $('main#gallery').length) {
		$('.menu-trigger').addClass('black');
		$('.helper').addClass('black');
	}

	if ( $('main.default').length ) {
		landingAnimDefault();
		superTitleAnim();
	} else if ( $('main.landing').length ) {
		// landingAnimLanding();
	} else if ( $('main#gallery').length ) {
		initGallery();
	}
}

function initGallery() {
	'use strict';

	if ( !isMobile ) {

		var content = $('.gallery-content');
		var nav = $('.gallery-nav ul');
		var indexNav = $('.index-wrap ul');

		content.slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			fade: true,
			dots: false,
			autoplay: false,
			prevArrow: '<a href="#" class="arrow top"></a>',
			nextArrow: '<a href="#" class="arrow bottom"></a>',
			appendArrows: $('.gallery-nav'),
			asNavFor: nav
			// asNavFor: nav
		});

		nav.slick({
			slidesToShow: 5,
			slidesToScroll: 1,
			asNavFor: content,
			dots: true,
			centerMode: false,
			focusOnSelect: true,
			draggable: false
		});
	} else {
		var content = $('.gallery-mobile .content');
		content.slick({
			arrows: true,
			fade: true,
			dots: false,
			autoplay: false,
			prevArrow: '<a href="#" class="arrow top"></a>',
			nextArrow: '<a href="#" class="arrow bottom"></a>',
			appendArrows: '.counter .arrows'
		});
	}

}
function detectMobile(){
	'use strict';

	// device detection
	if( $('.isMobile').is(':visible') ) {
	 	isMobile = true;
	}

	if (isMobile === true) {
		console.log('isMobile:',isMobile);
	} else {
		console.log('isMobile:',isMobile);
	}

}
function hideFullLoader(){
	'use strict';

	var loaderTl = new TimelineMax();

	loaderTl.to('#loader-wrap section.white', 1, {width:'100%',ease:Power3.easeIn}, "+=1")
			.set('#loader-wrap', {width:'100%',right:0,left:'initial'})
			.to('#loader-wrap', 0.75, {width:0,ease:Power3.easeIn}, "+=0.5")
			.to('#loader-wrap .logo', 0.4, {opacity:0}, "-=0.5")
			.set('#loader-wrap', {display:'none'})
			.timeScale(1.2).play();

}
function hideLoader(){
	'use strict';
	var loaderTl = new TimelineMax();
	loaderTl
		.set('#loader-wrap .white', {opacity:0})
		.to('#loader-wrap', 1, {opacity:0, ease:Power2.easeOut})
		.set('#loader-wrap', {display:'none'})
		.play();
}
function resize() {
	'use strict';
}
function landingAnimLanding() {
	'use strict';

	var landingTl = new TimelineMax({paused:true});

	TweenMax.set('#landing .logo, #landing .text > *, .menu-trigger, .contact-link', {opacity:0});

	landingTl
		.staggerFromTo('.landing h1, .landing h2', 0.5, {y:50}, {y:0,opacity:1,ease:Power1.easeOut}, 0.2)
		.to('h3.logo', 0.5, {opacity:1})
		.fromTo('.menu-trigger, .contact-link', 0.5, {y:-20}, {y:0,opacity:1,ease:Power2.easeOut})
		.to('a.btn, .text .social', 0.5, {opacity:1}, "+=0.5");

	if ($('body.home').length) {
		setTimeout(function(){landingTl.play();}, 3500);
	} else {
		setTimeout(function(){landingTl.play();}, 1000);
	}
}
function landingAnimDefault() {
	'use strict';

	var landingTl = new TimelineMax({paused:true});

	TweenMax.set('.left h1, .left p', {opacity:0});
	TweenMax.set('.super-title', {css:{opacity:0}, y:-50});

	landingTl
		.to('.super-title', 1, {y:0,css:{opacity:0.7}, ease:Power1.easeOut})
		.staggerTo('.left h1, .left p', 0.5, {opacity:1}, 0.2, "-=0.5");

	setTimeout(function(){landingTl.play();}, 1000);
}
function superTitleAnim() {
	'use strict';
	
	var tween = new TweenMax.fromTo('.super-title', 0.25,{css:{opacity:0.7}}, {css:{opacity:0},ease:Linear.easeNone});
	var offset = '-' + $('#trigger').css('padding-top');
	var duration = $('#trigger').outerHeight() - $(window).height();
	
	// console.log(trigger, duration);
	
	var superTitleScene = new ScrollMagic.Scene({
		triggerElement: '#trigger h1',
		triggerHook: 'onLeave',
		duration: duration,
		offset: offset
	}).setTween(tween)
	.addTo(controller);
}
function setMenu() {
	'use strict';

	var menuTl = new TimelineMax({paused:true});

	if ( !$('.menu-trigger').hasClass('menu-open') ) {
		menuTl
			// hide main and set components
			.to('.main .text, .main .left', 0.5, {opacity:0})
			.set('.menu-trigger', {className:'+=is-active'}, '-=0.5')
			.set('#menu nav li', {y:-30, opacity:0})
			.set('#menu .social li', {y:0, opacity:0})
			.set('#menu, .menu-trigger, .contact-link, .helper', {className:'+=menu-open'})
			// display menu step by step
			.to('#menu', 0.75, {opacity:1,ease:Power2.easeInOut})
			.staggerTo('#menu nav li', 0.25, {y:0,opacity:1,ease:Power2.easeOut}, 0.1)
			.to('#menu .social li', 0.25, {opacity:1,ease:Power2.easeOut}, '+=0.5')
			.to('.logo', 0.25, {opacity:1}, '-=0.75')
			.timeScale(1.7).play();
	} else {
		menuTl
			.to('#menu nav li, #menu .social li', 0.3, {y:30,opacity:0,ease:Expo.easeIn})
			.set('.menu-open', {className:'-=menu-open'})
			.set('.menu-trigger', {className:'-=is-active'})
			.to('.main > *', 0.5, {opacity:1})
			.play();
	}
}


