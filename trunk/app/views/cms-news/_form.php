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
		  		<div style="margin-left: 20px;"><b>[</b><?php echo @$news['main_image'];?><b>]</b></div>
		  		<?php endif;?>
				<input type="file" name="main_image" class="j_required" style="margin-left: 20px;" />
				<span>*</span>
		 	</td>
		 </tr>
		 <tr>
	     	<th>Other image(s):</th>
		  	<td>
				<?php 
						$num = 0;
				if(isset($params['id']) && !empty($params['id'])):?>
				<?php if(isset($news['other']) && !empty($news['other'])):?>
				<?php foreach($news['other'] as $o):?>
				<div style="margin-left: 20px;" id="img-name-<?php echo $num; ?>"><b>[</b><?php echo @$o['image'];?><b>]</b></div>
				<input type="file" name="file[<?php echo $num;?>]" style="margin-left: 20px;" />
				<?php if($num == 0):?><a href="javascript:;" id="add_image" >add another</a>
				<?php else:?>
				<a href="javascript:;" class="remove_image" id="remove-<?php echo $num; ?>" onclick="javascript: removeImage('<?php echo $num; ?>');">remove</a>
				<?php endif; ?>
				<?php 
						$num++;
						endforeach; ?>	
				<input type="hidden" value="<?php echo $num;?>" id="number" />			
				<div id="another"><!-- load --></div>
				<?php else:?>
				<input type="file" name="file[0]" style="margin-left: 20px;" />
				<input type="hidden" value="1" id="number" />
				<a href="javascript:;" id="add_image" >add another</a>
				<div id="another"><!-- load --></div>
				<?php endif;?>
				<?php else:?>
				<input type="file" name="file[0]" style="margin-left: 20px;" />
				<input type="hidden" value="1" id="number" />
				<a href="javascript:;" id="add_image" >add another</a>
				<div id="another"><!-- load --></div>
				<?php endif;?>
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
