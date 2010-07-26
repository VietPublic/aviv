<div class="post">
	<h2 class="title">Contacts</h2>
	<p class="byline"><small>All filled in forms</small></p>
	<div class="entry">
		<?php if(isset($contact) && !empty($contact)):?>
	  	<table cellpadding="0" cellspacing="0" width="100%">
			<tbody>
				<tr>
					<th width="50">Date</th>
					<th>Content</th>
					<th width="50">Action</th>
				</tr>
				<?php foreach($contact as $c):?>
				<tr class="odd">
					<td><?php echo $c['modif'];?></td>
					<td><?php echo $c['content'];?></td>
					<td>
						<a href="<?php echo BASE_PATH.'cms'.DS.'contact'.DS.$c['id'].DS.'delete'.DS; ?>" class="j_delete" title="Delete contact ?"><!-- delete --></a>
					</td>
			  </tr>
			  <?php endforeach;?>
		  </tbody>
		</table>
		<?php else:?>
		<div class="noResults">
			There are no contacts here 
		</div>
		<?php endif;?>
  </div>
</div>
