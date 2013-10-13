var getPortfolio = function(){
	$.ajax({
			type: 'GET',
			cache: true,
			url: 'data/portfolio.json',
			dataType: 'json',
			beforeSend: function(){
				$('#update_portfolio').empty().append('<img src="img/loader.gif" />');
			},
			success: function (data){
				$('#update_portfolio').empty();

				var output = '<ul>';
					
					$.each(data, function(key, val){
						output += '<li class="portfolio_item">';
						output += '<img src="'+val.image_url+'"/>';
						output += '<div class="portfolio_caption">';
						output += '<h3>'+val.name+'</h3>';
						output += '<p>'+val.description+'</p>';
						output += '</div>';
						output += '</li>';
					});

				output += '</ul>';
				$('#update_portfolio').html(output);
			},
			error: function(data){
				console.log('error finding portfolio' + data);
			}
	});	
};
