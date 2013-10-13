var getBlog = function() {
	$.ajax({
		type: 'GET',
		cache: true,
		url: 'data/blog.json',
		dataType: 'json',
		beforeSend: function(){
			$('#update_blog').empty().append('<img src="img/loader.gif" />');
		},
		success: function (data){
			$('#update_blog').empty();

			var output = '<ul>';
				
				$.each(data, function(key, val){
					output += '<li class="blog_post">';
					output += '<a href="'+val.post_url+val.post_id+'"><img src="'+val.post_image_url+'"/>';
					output += '<div class="post_caption">';
					output += '<h3>'+val.post_title+'</h3>';
					output += '<p>'+val.lead_in+'</p>';
					output += '</div>';
					output += '</a></li>';
				});

			output += '</ul>';
			$('#update_blog').html(output);
		},
		error: function(data){
			console.log('error finding blog posts' + data);
		}
	});
};

