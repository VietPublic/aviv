
<div class="post">
	<h2 class="title">System administration &raquo; View existing admins</h2>
	<p class="byline"><small>All created admins in system</small></p>
	
<div class="entry">
		<?php if(isset($users) && !empty($users)):?>
  		<table cellpadding="0" cellspacing="0" width="100%">
			<tbody>
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
				  	<th>Username</th>
					<th>Creation date</th>
					<th>Action</th>
				</tr>
				<?php 
					$num = 0;
					foreach($users as $u):?>
				<tr class="<?php echo (++$num%2==0?"even":"odd");?>">
					<td><?php echo $u['firstname'];?></td>
					<td><?php echo $u['lastname'];?></td>
					<td><?php echo $u['username'];?></td>
					<td><?php echo $u['modif'];?></td>
					<td>
						<a href="<?php echo BASE_PATH.'cms'.DS.'users'.DS.$u['id'].DS.'edit'.DS; ?>" class="j_edit" title="Edit"><!-- edit --></a>
						<?php if($u['id'] != $_SESSION['cms']['id']):?><a href="<?php echo BASE_PATH.'cms'.DS.'users'.DS.$u['id'].DS.'delete'.DS; ?>" class="j_delete" title="Delete <?php echo $u['firstname']." ".$u['lastname']; ?>?"><!-- delete --></a><?php endif;?>
					</td>
			  </tr>
			  <?php endforeach;?>
		  </tbody>
		</table>
		<?php else:?>
		<div class="noResults">No data at the moment</div>
		<?php endif;?>
  </div>
</div>
