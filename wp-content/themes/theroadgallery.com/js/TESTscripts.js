// custom scripts
$(window).scroll(function() {


var windowPosY = $(this).scrollTop();


	if (windowPosY > 100) { //use `this`, not `document`
        $('.header').css({ 'height':'0' }); 
        $('.scroller-box').delay(2000).css({ 'opacity': '0', 'top':'60px' });
    } else {
        $('.scroller-box').delay(2000).css({ 'opacity': '1', 'top':'-60px' });
        $('.header').css({ 'height':'100' });
    }


	if (windowPosY > 400) { //use `this`, not `document`
        $('.topbutton').css({ 'opacity':'1' }); 
        $('.sidebar').css({ 'opacity':'1','display':'block' });  
    } else {
        $('.topbutton').css({ 'opacity':'0' }); 
        $('.sidebar').css({ 'opacity':'0','display':'none' }); 
    }


  if($(window).scrollTop() + $(window).height() > $(document).height() - 200) {
      $('.sidebar').css({ 'opacity':'0', 'display':'none' }); 
   }


});

$( window ).load(function() {
    $('.scroller-box').delay(2000).css({ 'opacity': '1' }); 
    $('.homepage-container').css({ 'margin': '550px auto 0' }); 

});

$(document).ready(function(){


  $('#menu-icon').click(function() {
    $('.nav.mobile').toggleClass('display-menu');
  });


	$("a#toTop").click(function() {
        $("html, body").animate({scrollTop: 0}, 1500);
     });

	
		
	$('.flexslider').flexslider({
      animation: "slide",
      controlNav: false,
      directionNav: true,
      slideshowSpeed: 7000,
      animationSpeed: 1200

     });

  $('.flexslider2').flexslider({
      animation: "slide",
      controlNav: false,
      directionNav: true,
      slideshowSpeed: 12000,
      animationSpeed: 1200
      /*pauseOnHover: true*/
     });

  $('.flexslider2').css(/*{ 'max-height': '1000px' }*/); 



	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		var dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
	}






});