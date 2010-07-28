<table cellpadding="0" cellspacing="0" width="100%">
	<tbody>
		<tr>
			<th style="width: 100px; vertical-align: top;">Title:</th>
			<td>
				<img src="<?php echo IMAGE_PATH.'sr.png'; ?>" alt="" title="" />
			  	<input type="text" name="news[sr][title]" value="<?php echo @$news['title_sr'];?>" class="j_required" style="width: 330px;" />
			  	<span>*</span>
			  	<div style="clear: both;" ><br/></div>
			  	<img src="<?php echo IMAGE_PATH.'en.png'; ?>" alt="" title="" />
			  	<input type="text" name="news[en][title]" value="<?php echo @$news['title_en'];?>" class="j_required" style="width: 330px;" />
			  	<span>*</span>
			</td>
		</tr>
		<tr>
			<th style="vertical-align: top;">Content:</th>			
		  	<td>
		  		<img src="<?php echo IMAGE_PATH.'sr.png'; ?>" alt="" title="" />
				<textarea name="news[sr][content]" rows="" cols="" style="width: 343px; height: 50px;" ><?php echo @$news['content_sr'];?></textarea>
				<div style="clear: both;" ><br/></div>
			  	<img src="<?php echo IMAGE_PATH.'en.png'; ?>" alt="" title="" />
			  	<textarea name="news[en][content]" rows="" cols="" style="width: 343px; height: 50px;" ><?php echo @$news['content_en'];?></textarea>
	     	</td>
	     </tr>
	     <tr>
	     	<th>Main image:</th>
		  	<td>
		  		<?php if(isset($news['main_image']) && !empty($news['main_image'])):?>
		  			<table cellpadding="0" cellspacing="0" style="margin-left: 10px;">
						<tbody>
							<tr>
								<td width="50%">
									<strong><?php echo $news['main_image'];?></strong>
								</td>
								<td>
									<a href="<?php echo BASE_PATH.'cms'.DS.'news'.DS.$params['id'].DS.'delete'.DS.'?q=main_image'; ?>" class="j_delete" title="Delete <?php echo $news['main_image']; ?> ?"><!-- delete --></a>
								</td>
							</tr>
						</tbody>
					</table>
		  		<?php else:?>
				<input type="file" name="main_image" class="j_required" style="margin-left: 20px;" />
				<span>*</span>
				<?php endif;?>
		 	</td>
		 </tr>
		 <tr>
	     	<th>Other image(s):</th>
		  	<td>
				<?php if(isset($params['id']) && !empty($params['id'])):?>
				<?php if(isset($news['other']) && !empty($news['other'])):?>
					<table cellpadding="0" cellspacing="0" style="margin-left: 10px;">
						<tbody>
					<?php foreach($news['other'] as $o):?>
							<tr>
								<td width="50%">
									<strong><?php echo $o['image'];?></strong>
								</td>
								<td>
									<a href="<?php echo BASE_PATH.'cms'.DS.'news'.DS.$params['id'].DS.'delete'.DS.$o['id'].DS.'?q=other'; ?>" class="j_delete" title="Delete <?php echo $news['main_image']; ?> ?"><!-- delete --></a>
								</td>
							</tr>
					<?php endforeach; ?>
						</tbody>
					</table>	
				<?php endif;?>
				<?php endif;?>
				<input type="file" name="file[0]" style="margin-left: 20px;" />
				<input type="hidden" value="1" id="number" />
				<a href="javascript:;" id="add_image" >add another</a>
				<div id="another"><!-- load --></div>
		 	</td>
		 </tr>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="2" align="right">
			  <button type="submit" style="margin-right: 75px;">Submit</button>
			</td>
	  </tr>
	</tfoot>
</table>
 <script type="text/javascript">
 tinyMCE.init({
	 mode : "textareas",
	 theme : "advanced",
	 plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
	 theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,fontselect,fontsizeselect",
	 theme_advanced_buttons2 : "cut,copy,paste,|,bullist,numlist,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|forecolor,backcolor",
	 theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,media,|,fullscreen",
	 theme_advanced_toolbar_location : "top",
	 theme_advanced_toolbar_align : "left",
	 theme_advanced_statusbar_location : "bottom",
	 theme_advanced_resizing : true,
	 extended_valid_elements : "a[name|href|target|title|onclick],img[class|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name],hr[class|width|size|noshade],font[face|size|color|style],span[class|align|style]",
	 template_external_list_url : "example_template_list.js",
	 use_native_selects : true
	 });
</script>
