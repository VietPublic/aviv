<div class="post">
	<h2 class="title">System administration &raquo; <?php echo ucfirst(@$_GET['p']); ?></h2>
	<p class="byline"><small>All about this page</small></p>
	<div class="entry">
	<form name="form" action="<?php echo BASE_PATH.'cms'.DS.'pages'.DS.'submit'.DS.'?p='.$_GET['p']; ?>" method="post" enctype="multipart/form-data" >
    <table cellpadding="0" cellspacing="0" width="100%">
	<tbody>
		<tr>
			<th style="width: 200px;">
				<p>
				Page title
				<img src="<?php echo IMAGE_PATH.'sr.png'; ?>" alt="" title="" />
				</p>
			</th>
			<td>
				<input type="text" name="page[title_sr]" value="<?php echo $page['title_sr'];?>" style="width: 380px;" class="j_required"/>
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
			<textarea name="page[content_sr]" cols="60" rows="10"><?php echo $page['content_sr'];?></textarea>
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
				<input type="text" name="page[title_en]" value="<?php echo $page['title_en'];?>" style="width: 380px;"  class="j_required" />
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
			<textarea name="page[content_en]" cols="60" rows="10"><?php echo $page['content_en'];?></textarea>
			</td>
        </tr>
		 <tr>
			<th>Page Gallery</th>
		  	<td>
		  		<table cellpadding="0" cellspacing="0" width="90%" id="other">
		  			<tbody>
						<?php if(isset($page['other']) && !empty($page['other'])):?>
		  				<?php foreach($page['other'] as $p):?>
		  				<tr>
		  					<td>
		  						<img src="<?php echo BASE_PATH.UPLOAD_PATH.$_GET['p'].DS.'thumb'.DS.$p['id']."-".$p['image']; ?>" alt="" title="" />
		  					</td>
		  					<td>
		  						<a href="<?php echo BASE_PATH.'cms'.DS.'pages'.DS.$p['id'].DS.'delete'.DS.'?p='.$_GET['p'];?>" class="j_delete" title="Delete <?php echo $p['image']; ?>?"><!-- delete --></a>
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
		theme : "simple",
		extended_valid_elements : "img[class=myclass|!src|border:0|alt|title|width|height]",
		invalid_elements : "strong,b,em,i"
	});
</script>
    
    </div>
</div>
