<table cellpadding="0" cellspacing="0" width="100%">
	<tbody>
		<tr>
			<th style="width: 200px; vertical-align: top;">Title:</th>
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
				<textarea name="news[sr][content]" rows="" cols="" class="j_required" style="width: 343px; height: 50px;" ><?php echo @$news['content_sr'];?></textarea>
				<span>*</span>
				<div style="clear: both;" ><br/></div>
			  	<img src="<?php echo IMAGE_PATH.'en.png'; ?>" alt="" title="" />
			  	<textarea name="news[en][content]" rows="" cols="" class="j_required" style="width: 343px; height: 50px;" ><?php echo @$news['content_en'];?></textarea>
			  	<span>*</span>
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
