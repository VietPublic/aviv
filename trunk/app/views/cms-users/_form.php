<table cellpadding="0" cellspacing="0" width="100%">
	<tbody>
		<tr>
			<th style="width: 200px;">Firstname:</th>
			<td>
			  <input type="text" name="users[firstname]" value="<?php echo @$user['firstname'];?>" class="j_required" style="width: 350px;" />
			  <span>*</span>
			</td>
		</tr>
		<tr>
			<th>Lastname:</th>			
		  	<td>
				<input type="text" name="users[lastname]" value="<?php echo @$user['lastname'];?>" class="j_required" style="width: 350px;" />
				<span>*</span>
	     	</td>
	     </tr>
	     <tr>
	     	<th>Username:</th>
		  	<td>
				<input type="text" name="users[username]" value="<?php echo @$user['username'];?>" class="j_required" style="width: 350px;" <?php if(isset($params['id']) && !empty($params['id'])):?>disabled="disabled"<?php endif;?> />
				<span>*</span>
		 	</td>
		 </tr>
		 <tr>
			<th>Password:</th>
		  	<td>
				<input type="password" name="users[password]" <?php if(!isset($params['id'])):?>class="j_required"<?php endif;?> style="width: 350px;" />
		  		<?php if(!isset($params['id'])):?><span>*</span><?php endif;?>
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
