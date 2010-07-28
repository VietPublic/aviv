<div class="post">
	<h2 class="title">Our projects &raquo; View existing</h2>
	<p class="byline"><small>All about our projects</small></p>
	<div class="entry">
	<?php if(isset($projects) && !empty($projects)):?>
    <table cellpadding="0" cellspacing="0" width="100%">
		<tbody>
			<tr>
				<th>Date</th>
				<th>Title <img src="<?php echo IMAGE_PATH.'sr.png';?>" alt="" title="" /></th>
				<th>Title <img src="<?php echo IMAGE_PATH.'en.png';?>" alt="" title="" /></th>
				<th align="right" valign="middle">Action</th>
			</tr>
			<?php 
				$num = 0;
				foreach($projects as $n):?>
			<tr class="<?php echo (++$num%2==0?"even":"odd");?>">
				<td valign="middle"><?php echo $n['modif'];?></td>
				<td valign="middle"><?php echo $n['title_sr'];?></td>
				<td valign="middle"><?php echo $n['title_en'];?></td>
				<td align="right" valign="middle">
					<a href="<?php echo BASE_PATH.'cms'.DS.'projects'.DS.$n['id'].DS.'show'.DS; ?>" class="j_view" title="View" ><!-- view --></a>
					<a href="<?php echo BASE_PATH.'cms'.DS.'projects'.DS.$n['id'].DS.'edit'.DS; ?>" class="j_edit" title="Edit"><!-- edit --></a>
					<a href="<?php echo BASE_PATH.'cms'.DS.'projects'.DS.$n['id'].DS.'delete'.DS; ?>" class="j_delete" title="Delete <?php echo $n['title_sr'];?>?" ><!-- delete --></a>	
				</td>
			</tr>
			<?php endforeach;?>
		  </tbody>
		</table>
	<?php else:?>
	<div class="noResults">
		No projects in system
	</div>
	<?php endif;?>
    </div>
</div>
