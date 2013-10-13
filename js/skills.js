var getSkills = function() {
	$.ajax({
		type: 'GET',
		cache: true,
		url: 'data/skills.json',
		dataType: 'json',
		beforeSend: function(){
			$('#update_skills').empty().append('<img src="img/loader.gif" />');
		},
		success: function (data){
			$('#update_skills').empty();

			var output = '<ul>';
				
				$.each(data, function(key, val){
					output += '<li class="skill_item">';
					output += '<img src="'+val.icon_url+'"/>';
					output += '<h3>'+val.skill_name+'</h3>';
					output += '<p>'+val.description+'</p>';
					output += '</li>';
				});

			output += '</ul>';
			$('#update_skills').html(output);
		},
		error: function(data){
			console.log('error finding portfolio' + data);
		}
	});
};

