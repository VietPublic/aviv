$(document).ready(function(){
	
	//Add 
	$("#add_image").click(function(){
		var value = $("input[name='number']'").val();
		
		var html = "<tr id='image-" + value + "'>" +
				   		"<td><input type='file' name='file[" + value + "]' /></td>" +
				   		"<td><a href='javascript:;' onclick='javascript: remove_image(\"" + value + "\");' class='remove_image'>remove</a></td>" +
				   	"</tr>";
		//Store new value
		$("input[name='number']'").val(parseInt(value) + 1);
		$("#other > tbody:last").append(html);
	});
});

function remove_image(id){
	
	$("#image-" + id).remove();
}