$(document).ready(function(){

	$('#admin-search').keyup($.debounce(1000, (function(){
		var searchField = $('#admin-search').val();
		var myExp = new RegExp(searchField, "i");
		var space = '  ';
		var noResult = true;
		
		

		//if user hasn't entered a long enough search string, add invalid class to input
		if ($('#admin-search').val().length == 1 || $('#admin-search').val() == ' ' || $('#admin-search').val() == space){
			console.log('less than 2');
			$('#admin-search').addClass('invalid');
		} else {
			$('#admin-search').removeClass('invalid');
		}

		//check if search field is empty or not, if not empty execute the ajax call
		if ($('#admin-search').val().length > 1  && $('#admin-search').val() != space){
					
			$.ajax({
				type: 'GET',
				cache: true,
				url: 'search/displayAll',
				dataType: 'json',
				beforeSend: function(){
					$('#update').empty().append('<img src=\"img/sonic.gif\" />');
					
				},
				success: function (data){
						
						//remove the loader.gif		
						$('#update').empty();
						//declare the output variable - an unordered list used to display results of search 
						var output = '<ul class="clearfix searchresults">';

						//each result found matching the expression will be added to output variable as a line item 
						$.each(data, function(key, val){
						if ((val.division.search(myExp) != -1) || (val.banner_store_number.search(myExp) != -1) || (val.oracle_store_number.search(myExp) != -1) || (val.store_name.search(myExp) != -1) || (val.address.search(myExp) != -1) || (val.city.search(myExp) != -1) || (val.state.search(myExp) != -1)) {
						noResult = false;
						output += '<li class="clearfix">';
						output += '<h3>'+val.store_name+'</h3>';
						output += '<div class="pull-left col-8">';
						output += '<h4> Banner Store Number: '+val.banner_store_number+'</h3>';
						output += '<h4> Oracle Store Number: '+val.oracle_store_number+'</h3>';
						output += '<h4>Banner: '+val.division+'</h6>';
						output += '<p>Month(s) of Schedule: '+val.month_of_schedule+'</p>';
						output += '<p>Week of Schedule: '+val.week_of_schedule+'</p>';
						output += '<p class="text-muted">Address: '+val.address+' &bull; '+val.city+', '+val.state+'</p>';
						output += '<a href="http://brandanmajeske.com/fmd/admin/edit/'+val.id+'"><span class="glyphicon glyphicon-edit"></span> <strong>Edit</strong></a>';
						output += '</div>';
						if(val.special_note){output += '<div class="pull-right col-4">';}
						if(val.special_note){output += '<p class="special_note"><strong><span class="glyphicon glyphicon-asterisk"></span> Special Note:</strong></p>';}
						if(val.special_note){output += '<blockquote>'+val.special_note+'</blockquote>';}
						if(val.special_note){output += '</div>';}						
						output += '</li>';
						}
						});

						// if no search results are found display an error
						if(noResult == true){
							output += '<li><p class="error">Sorry, that search didn\'t find anything!</p></li>';						
						}
						output += '</ul>';
						//animate the results
						$('#update').hide().html(output).animate({
							height: "toggle", opacity: "toggle"} , "fast");
						},
				error: function(data){
				alert('Uh-oh! Something is wrong! That search isn\'t going to work. Please try again later.');
				}

			});// end ajax	

		} // end if 
		else if($('#admin-search').val() == ' '){
			console.log('you search for a space character');
		} else {
			console.log('search string isn\'t long enough');
		}


	}))); //end search

});// end admin-search