var overlay = $('.overlay');
setTimeout(function(){
	overlay.fadeOut(700);
}, 300);

//get single blog post id
menuToggle();

function getPostId(){
	var id = location.search.slice(location.search.indexOf('=')+1);
	return id;
}
var id = getPostId();
if(!id){
	window.location = '../index.html';
} else {
	$.ajax({
	type: 'GET',
	cache: true,
	url: '../dash/blog/single_post/'+id,
	dataType: 'json',
	beforeSend: function(){
	$('#post').empty().append('<img src="../img/loader.gif" />');
	},
	success: function (data){
	$('#post').empty();

	var output = '<div class="single_post">';  

	$.each(data, function(key, val){
	console.log(key, val);
	if(key == "error" ){output += "<div class=\"error\"> Well, this sucks... couldn't find that post. Not sure where it went, but it isn't here... :-/  </div>";
	}else{
		output += '<h2>'+val.post_title+'</h2>';
		output += '<img src="../'+val.post_image_url+'" />';
		output += val.post_content;
	}
	});

	output += '</div>';
	$('#post').html(output);
	},
	error: function(data){
	//alert('Whoopsies! There was a problem. You\'ll be redirected back to the home page now.');
	//window.location = '../index.html';
	}
});
}

