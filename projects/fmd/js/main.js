$(document).ready(function(){
    tinymce.init({selector:'textarea'});


    // edit form - onclick show the text input for editing.
    $('.table-data > p').click(function(){

    	$(this).hide().next('input').show();

    });


}); // end Main

