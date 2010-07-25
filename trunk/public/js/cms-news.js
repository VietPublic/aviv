$(document).ready(function(){
	
	//Add browse button
	$("#add_image").click(function(){
		
		var currentNum = parseInt($("#number").val());
		var html = "<input type='file' name='file[" + currentNum + "]' style='margin-left: 20px;' /> <a href='javascript:;' class='remove_image' onClick='javascript: removeImage(\"" + currentNum + "\");' id='remove-" + currentNum + "' >remove</a>";
		$("#another").append(html);
		$("#number").val(currentNum + 1);
	});
	
	
});

//Remove browse image
function removeImage(id){
	//Remove elements
	$("input[name='file[" + id + "]']").remove();
	$("#remove-" + id).remove();
	$("#img-name-" + id).remove();
}