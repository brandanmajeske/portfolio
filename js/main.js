$(document).ready(function(){

var overlay = $('.overlay');
setTimeout(function(){
	overlay.fadeOut(1000);
}, 1000);

setTimeout(function(){
	 $('.flexslider').flexslider({
	    animation: "slide"
	  });

	 $('.flexslider').append('<div class="welcome_msg"><h1>Hello &amp; <br />Welcome</h1></div>');


},200);

 //scrollTo
 $('.main_navigation > li > a').click(function(e){
	$('html, body').scrollTo(this.hash, this.hash);
	e.preventDefault();	
/*	$('.main_navigation >li').removeClass('active');
	$(this).parent('li').addClass('active');*/
 });

menuToggle();
getSlides();
getPortfolio();
getSkills();
getBlog();
showCaptions();
scrollery();
svgCheck();

}); // end doc ready
