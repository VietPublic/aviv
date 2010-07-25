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
						<a href="javascript:;" class="j_edit" title="Edit"><!-- edit --></a>
						<a href="javascript:;" class="j_delete" title="Delete"><!-- delete --></a>
					</td>
			  </tr>
			  <?php endforeach;?>
		  </tbody>
			<tfoot>
				<tr>
					<td colspan="4">
						<button type="button" style="margin-right: 20px;">Save</button>
					</td>
				</tr>
			</tfoot>
		</table>
		<?php else:?>
		<div class="noResults">No data at the moment</div>
		<?php endif;?>
  </div>
</div>
