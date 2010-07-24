$(document).ready(function(){
	
	$(".entry").find("tbody > tr").each(function(){
		
		$(this).mouseover(function(){
			
			//Mouse over
			$(this).addClass("over");
		}).mouseout(function(){
			
			//Mouse out
			$(this).removeClass("over");
		});
	});
		
		
});