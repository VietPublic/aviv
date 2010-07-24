<table cellpadding="0" cellspacing="0" width="100%">
	<tbody>
		<tr>
			<th style="width: 200px;">Firstname:</th>
			<td>
			  <input type="text" name="users[firstname]" value="<?php echo @$firstname;?>" class="j_required" style="width: 350px;" />
			  <span>*</span>
			</td>
		</tr>
		<tr>
			<th>Lastname:</th>			
		  	<td>
				<input type="text" name="users[lastname]" value="<?php echo @$lastname;?>" class="j_required" style="width: 350px;" />
				<span>*</span>
	     	</td>
	     </tr>
	     <tr>
	     	<th>Username:</th>
		  	<td>
				<input type="text" name="users[username]" value="<?php echo @$username;?>" class="j_required" style="width: 350px;" />
				<span>*</span>
		 	</td>
		 </tr>
		 <tr>
			<th>Password:</th>
		  	<td>
				<input type="text" name="users[password]" class="j_required" style="width: 350px;" />
		  	</td>
	  	</tr>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="2">
				<button type="button">Submit</button>
			</td>
		</tr>
	</tfoot>
</table>