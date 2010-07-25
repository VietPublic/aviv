$(document).ready(function(){
	
	$("#username").focus();
	
	//Required fields
	$("button[type='submit']").click(function(){
		
		var allOk = true;
		//Go through all textarea
		$("textarea").each(function(){
			if($(this).hasClass('j_required') && $(this).val().length <= 0){
				$(this).addClass('j_warning');
				allOk = false;
			}else $(this).removeClass('j_warning');
		});
		
		//Go through all inputs with id
		$("input[type='text'], input[type='password']").each(function(){
			if($(this).hasClass('j_required') && $(this).val().length <= 0){
				$(this).addClass('j_warning');
				allOk = false;
			}else $(this).removeClass('j_warning');
		});
		
		
		if(allOk){
			//Set form
			$("form").submit();
		}
	});
});