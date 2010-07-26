<div class="post">
	<h2 class="title">System administration &raquo; View existing news</h2>
	<p class="byline"><small>All news in the system</small></p>
  <div class="entry">
  <?php if(isset($news) && !empty($news)):?>
    <table cellpadding="0" cellspacing="0" width="100%">
		<tbody>
			<tr>
				<th width="15%">Date</th>
				<th width="21%">Title</th>
				<th width="35%">Content</th>
				<th width="16%">Main image</th>
				<th width="13%" align="right" valign="middle">Action</th>
			</tr>
			<?php 
				$num = 0;
				foreach($news as $n):?>
			<tr class="<?php echo (++$num%2==0?"even":"odd");?>">
				<td valign="middle"><?php echo $n['modif'];?></td>
				<td valign="middle"><?php echo $n['title_sr'];?></td>
				<td><?php echo (strlen($n['content_sr'] > 50)? substr($n['content_sr'], 0, 50)."..." : $n['content_sr']);?></td>
				<td align="center" valign="middle">
					<img src="<?php echo BASE_PATH.UPLOAD_PATH.'news'.DS.'thumb'.DS.$n['id']."-".$n['main_image']; ?>" alt="" title="" />
				</td>
				<td align="right" valign="middle">
					<a href="<?php echo BASE_PATH.'cms'.DS.'news'.DS.$n['id'].DS.'show'.DS; ?>" class="j_view" title="View" ><!-- view --></a>
					<a href="<?php echo BASE_PATH.'cms'.DS.'news'.DS.$n['id'].DS.'edit'.DS; ?>" class="j_edit" title="Edit"><!-- edit --></a>
					<a href="<?php echo BASE_PATH.'cms'.DS.'news'.DS.$n['id'].DS.'delete'.DS; ?>" class="j_delete" title="Delete <?php echo $n['title_sr'];?>?" ><!-- delete --></a>	
				</td>
			</tr>
			<?php endforeach;?>
		  </tbody>
		</table>
	<?php else:?>
	<div class="noResults">
		No news in system
	</div>
	<?php endif;?>
  </div>
</div>
