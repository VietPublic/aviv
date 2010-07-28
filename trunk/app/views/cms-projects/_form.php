<table cellpadding="0" cellspacing="0" width="100%">
	<tbody>
		<tr>
			<th style="width: 100px; vertical-align: top;">Link name:</th>
			<td>
			  	<input style="margin-left: 20px; width: 330px;" type="text" name="project[link]" <?php if(isset($params['id'])):?>disabled="disabled"<?php endif;?> value="<?php echo @$project['link'];?>" class="j_required" style="width: 330px;" />
			  	<span>*</span>
			</td>
		</tr>
		<tr>
			<th style="width: 100px; vertical-align: top;">Project name:</th>
			<td>
				<img src="<?php echo IMAGE_PATH.'sr.png'; ?>" alt="" title="" />
			  	<input type="text" name="project[title_sr]" value="<?php echo @$project['title_sr'];?>" class="j_required" style="width: 330px;" />
			  	<span>*</span>
			  	<div style="clear: both;" ><br/></div>
			  	<img src="<?php echo IMAGE_PATH.'en.png'; ?>" alt="" title="" />
			  	<input type="text" name="project[title_en]" value="<?php echo @$project['title_en'];?>" class="j_required" style="width: 330px;" />
			  	<span>*</span>
			</td>
		</tr>
		<tr>
			<th style="vertical-align: top;">First text box:</th>			
		  	<td>
		  		<img src="<?php echo IMAGE_PATH.'sr.png'; ?>" alt="" title="" />
				<textarea name="project[content_sr]" rows="" cols="" style="width: 343px; height: 50px;" ><?php echo @$project['content_sr'];?></textarea>
				<div style="clear: both;" ><br/></div>
			  	<img src="<?php echo IMAGE_PATH.'en.png'; ?>" alt="" title="" />
			  	<textarea name="project[content_en]" rows="" cols="" style="width: 343px; height: 50px;" ><?php echo @$project['content_en'];?></textarea>
	     	</td>
	     </tr>
	     <tr>
			<th style="width: 100px; vertical-align: top;">Link for video:</th>
			<td>
			  	<input style="margin-left: 20px; width: 330px;" type="text" name="project[video]" value="<?php echo @$project['video'];?>" class="j_required" style="width: 330px;" />
			  	<span>*</span>
			</td>
		</tr>
	     <tr>
			<th style="vertical-align: top;">Second text box:</th>			
		  	<td>
		  		<img src="<?php echo IMAGE_PATH.'sr.png'; ?>" alt="" title="" />
				<textarea name="project[content2_sr]" rows="" cols="" style="width: 343px; height: 50px;" ><?php echo @$project['content2_sr'];?></textarea>
				<div style="clear: both;" ><br/></div>
			  	<img src="<?php echo IMAGE_PATH.'en.png'; ?>" alt="" title="" />
			  	<textarea name="project[content2_en]" rows="" cols="" style="width: 343px; height: 50px;" ><?php echo @$project['content2_en'];?></textarea>
	     	</td>
	     </tr>
		 <tr>
			<th>Page Gallery</th>
		  	<td>
		  		<table cellpadding="0" cellspacing="0" width="90%" id="other">
		  			<tbody>
						<?php if(isset($project['other']) && !empty($project['other'])):?>
		  				<?php foreach($project['other'] as $p):?>
		  				<tr>
		  					<td>
		  						<img src="<?php echo BASE_PATH.UPLOAD_PATH.$project['link'].DS.'thumb'.DS.$p['id']."-".$p['image']; ?>" alt="" title="" />
		  					</td>
		  					<td>
		  						<a href="<?php echo BASE_PATH.'cms'.DS.'projects'.DS.$p['id'].DS.'delete-image'.DS;?>" class="j_delete" title="Delete <?php echo $p['image']; ?>?"><!-- delete --></a>
		  					</td>
		  				</tr>
		  				<?php endforeach; ?>
						<?php endif;?>
						<tr>
							<td>
								<input type="file" name="file[0]" />
							</td>
							<td>
								<a href="javascript:;" id="add_image" >add another</a>
								<input type="hidden" name="number" value="1" />
							</td>
						</tr>
		  			</tbody>
		  		</table>
			</td>
	  	</tr>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="2" align="right">
			  <button type="submit" style="margin-right: 75px;">Create</button>
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