var getSlides = function(){
	$.ajax({
			type: 'GET',
			cache: true,
			url: 'data/slides.json',
			dataType: 'json',
			beforeSend: function(){
				$('.flexslider').empty().append('<img src="img/loader.gif" />');
			},
			success: function (data){
				$('.flexslider').empty();

				var output = '<ul class="slides">';
					
					$.each(data, function(key, val){
						output += '<li>';
						output += '<img src="'+val.image_url+'"/>';
						output += '</li>';
					});
				output += '</ul>';
				//console.log(output);
				$('.flexslider').html(output);
			},
			error: function(data){
				console.log('error finding slides ' + data);
			}
	});	
};
