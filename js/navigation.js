var menuToggle = function(){
	var navicon = $('.navicon'),
	       mobileMenu = $('.mobile_navigation > ul');		
	       mobileMenu.slideUp();

	navicon.bind('click', function(e){
		mobileMenu.stop().slideToggle();
		//console.log(navicon.html());

		if(navicon.html() == 'Menu'){
			navicon.html('Close');
			//console.log(navicon.html());	
		} else {
			navicon.html('Menu');
			//console.log(navicon.html());
		}

	});

	 //scrollTo
	 $('.mobile_navigation > ul > li > a').click(function(e){
		$('html, body').scrollTo(this.hash, this.hash);
		e.preventDefault();	
		$('.mobile_navigation > ul >li').removeClass('active');
		$(this).parent('li').addClass('active');
	 });

};




