<div class="post">
	<h2 class="title">System administration &raquo; <?php echo ucfirst(@$_GET['p']); ?></h2>
	<p class="byline"><small>All about this page</small></p>
	<div class="entry">
	<form name="form" action="<?php echo BASE_PATH.'cms'.DS.'projects'.DS.'submit'.DS.'?p='.$_GET['p']; ?>" method="post" enctype="multipart/form-data" >
    <table cellpadding="0" cellspacing="0" width="100%">
	<tbody>
		<tr>
			<th style="width: 100px;">
				<p>
				Page title
				<img src="<?php echo IMAGE_PATH.'sr.png'; ?>" alt="" title="" />
				</p>
			</th>
			<td>
				<input type="text" name="project[title_sr]" value="<?php echo $project['title_sr'];?>" style="width: 380px;" class="j_required"/>
				<span>*</span>	
			</td>
		</tr>
		<tr>
			<th>
				<p>
				Page content
				<img src="<?php echo IMAGE_PATH.'sr.png'; ?>" alt="" title="" />
				</p>
			</th>			
			<td>
			<textarea name="project[content_sr]" cols="60" rows="10"><?php echo $project['content_sr'];?></textarea>
			</td>
        </tr>
        <tr>
			<th style="width: 200px;">
				<p>
				Page title
				<img src="<?php echo IMAGE_PATH.'en.png'; ?>" alt="" title="" />
				</p>
			</th>
			<td>
				<input type="text" name="project[title_en]" value="<?php echo $project['title_en'];?>" style="width: 380px;"  class="j_required" />
				<span>*</span>
			</td>
		</tr>
		<tr>
			<th>
				<p>
				Page content
				<img src="<?php echo IMAGE_PATH.'en.png'; ?>" alt="" title="" />
				</p>
			</th>			
			<td>
			<textarea name="project[content_en]" cols="60" rows="10"><?php echo $project['content_en'];?></textarea>
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
		  						<img src="<?php echo BASE_PATH.UPLOAD_PATH.$_GET['p'].DS.'thumb'.DS.$p['id']."-".$p['image']; ?>" alt="" title="" />
		  					</td>
		  					<td>
		  						<a href="<?php echo BASE_PATH.'cms'.DS.'projects'.DS.$p['id'].DS.'delete'.DS.'?p='.$_GET['p'];?>" class="j_delete" title="Delete <?php echo $p['image']; ?>?"><!-- delete --></a>
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
			  <button type="submit" style="margin-right: 75px;">Submit</button>
			</td>
	  </tr>
	</tfoot>
	</table>
	</form>
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
    
    </div>
</div>
