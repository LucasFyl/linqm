/*jshint -W117 */
/*jslint latedef:false*/
/* jshint unused:false */
var isMobile = false; //initiate as false

$(document).ready(function(){
	'use strict';

 	initPage();
 	window.onresize = resize;
 });

// Page load event
function initPage(){
	'use strict';

	// detectMobile();
	hideLoader();

	// temp :
	$('.menu-trigger').click(function(){
		$('#menu').toggleClass('hide');
		$('.menu-trigger').removeClass('black').addClass('white');
	})

	if ( $('main.default').length ) {
		$('.menu-trigger').addClass('black');
		landingAnimDefault();
	}
	if ( $('main.landing').length ) {
		$('.menu-trigger').addClass('white');
		landingAnimLanding();
	}

	if ( $('main.gallery').length ) {
		initGallery();
	}
}

function initGallery() {
	'use strict';

	var content = $('.gallery-content');
	var nav = $('.gallery-nav ul');

	content.slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		dots: false,
		autoplay: true,
		prevArrow: '<a href="#" class="arrow top"></a>',
		nextArrow: '<a href="#" class="arrow bottom"></a>',
		appendArrows: $('.gallery-nav'),
		asNavFor: nav
	});

	nav.slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: content,
		dots: false,
		centerMode: false,
		focusOnSelect: true,
		draggable: false
	});
}
function detectMobile(){
	'use strict';

	// device detection
	if( $('.isMobile').is(':visible') ) {
	 	isMobile = true;
	 	TweenMax.set('html',{overflowX:'hidden',position:'relative'});
	}

	if (isMobile === true) {
		console.log('isMobile:',isMobile);
	} else {
		console.log('isMobile:',isMobile);
	}

}
function hideLoader(){
	'use strict';

	var loaderTl = new TimelineMax();

	loaderTl.to('#loader-wrap section.white', 1.5, {width:'100%',ease:Linear.easeNone}, "+=1")
			.set('#loader-wrap', {width:'100%',right:0,left:'initial'})
			.to('#loader-wrap', 1, {width:0,ease:Linear.easeNone}, "+=0.5")
			.to('#loader-wrap .logo', 0.4, {opacity:0}, "-=1")
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

	landingTl.staggerFromTo('.landing h1, .landing h2', 0.5, {y:50}, {y:0,opacity:1,ease:Power1.easeOut}, 0.2)
			 .to('h3.logo', 0.5, {opacity:1})
			 .fromTo('.menu-trigger, .contact-link', 0.5, {y:-20}, {y:0,opacity:1,ease:Power2.easeOut})
			 .to('a.btn', 0.5, {opacity:1}, "+=0.5");

	setTimeout(function(){landingTl.play();}, 3500);
}
function landingAnimDefault() {
	'use strict';


}