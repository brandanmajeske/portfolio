var scrollery = function(){
//timeout required for the ajax elements to be loaded  
setTimeout(function(){
	$('.section').each(function(i) {
	var position = $(this).position();
	console.log(position);
	console.log('min: ' + position.top + ' / max: ' + parseInt(position.top + $(this).height()));
	$(this).scrollspy({
		min: position.top,
		max: position.top + $(this).height() - 50,
		onEnter: function(element, position) {
			//if(console) console.log('entering ' +  element.id);
			var nav_item = $('#nav_'+element.id);
				$('.main_navigation >li').removeClass('active');
				$(nav_item).addClass('active');
		},
		onLeave: function(element, position) {
			if(console) console.log('leaving ' +  element.id);
		//	$('body').css('background-color','#eee');
		}
	});
	});	
}, 500);

};