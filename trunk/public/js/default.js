$(document).ready(function(){

	$('#jsddm > li').bind('mouseover', jsddm_open);
	$('#jsddm > li').bind('mouseout',  jsddm_timer);

	//Lightbox
	$(".projects_imgs a").lightBox();
	
	/** ALL FORMS **/
	$("input[type='button']").click(function(){
		
		var allOk = true;
		//Go through all inputs with id
		$("input[type='text']").each(function(){
			if($(this).attr('id') && $(this).val() == $(this).attr("defaultValue")){
				$(this).addClass('j_warning');
				allOk = false;
			}else $(this).removeClass('j_warning');
		});
		
		if(allOk){
			//Set form
			$("form").submit();
		}
	});
	
	//Set/reset input fields
	$("input[type='text'],textarea").each(function(){
		$(this).focus(function(){
			if($(this).val() == $(this).attr("defaultValue")) $(this).val('');
		});
	});
	$("input[type='text'],textarea").each(function(){
		$(this).blur(function(){
			if($(this).val() == '') $(this).val($(this).attr("defaultValue"));
		});
	});

});

document.onclick = jsddm_close;

var timeout    = 500;
var closetimer = 0;
var ddmenuitem = 0;

function jsddm_open(){  
	jsddm_canceltimer();
	jsddm_close();
	ddmenuitem = $(this).find('ul').css('visibility', 'visible');
}

function jsddm_close(){  
	if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');
}

function jsddm_timer(){  
	closetimer = window.setTimeout(jsddm_close, timeout);
}

function jsddm_canceltimer(){  
	if(closetimer){  
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}