// Portfolio items caption animation
var showCaptions = function() {
	var portfolio_item = $('.portfolio_item'),
		blog_post = $('.blog_post');

	$(document).on("mouseover", ".portfolio_item", function(e){
		var that = $(this);
		that.find('.portfolio_caption').css('opacity', 1);
		e.preventDefault();
	});

	$(document).on("mouseout", ".portfolio_item", function(e){
		var that = $(this);
		that.find('.portfolio_caption').css('opacity', 0);
	});

	$(document).on("mouseover", ".blog_post", function(e){
		var that = $(this);
		that.find('.post_caption').css('opacity', 1);
		e.preventDefault();
	});

	$(document).on("mouseout", ".blog_post", function(e){
		var that = $(this);
		that.find('.post_caption').css('opacity', 0);
	});

	if(Modernizr.touch){
		
		setTimeout(function(){
			$('.portfolio_caption').css('opacity', 0.5);
			$('.post_caption').css('opacity', 0.5);
		}, 100);

		$('.mobile_navigation > #nav_home').parent('li').addClass('active');	
	}
};
