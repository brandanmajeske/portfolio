var scrollery = function(){
//timeout required for the ajax elements to be loaded  
setTimeout(function(){
	$('.section').each(function(i) {
	var position = $(this).position();
	
	$(this).scrollspy({
		min: position.top,
		max: position.top + $(this).height() - 50,
		onEnter: function(element, position) {
			
			var nav_item = $('#nav_'+element.id);
			var mobile_nav_item = $('#mobile_nav_'+element.id);
				$('.main_navigation > li').removeClass('active');
				$('.mobile_navigation > ul > li').removeClass('active');
				$(nav_item).addClass('active');
				$(mobile_nav_item).addClass('active');

				console.log(mobile_nav_item);


		},
		onLeave: function(element, position) {
			$('.mobile_navigation > li').removeClass('active');
		}
	});
	});


}, 500);

};