<div class="post">
	<h2 class="title">System administration &raquo; View existing news</h2>
	<p class="byline"><small>All news in the system</small></p>
  <div class="entry">
    <table cellpadding="0" cellspacing="0" width="100%">
			<tbody>
				<tr>
					<th width="15%">News date</th>
					<th width="21%">News Title</th>
				  	<th width="35%">News Text</th>
				  <th width="16%">News title image</th>
				  <th width="13%" align="right" valign="middle">Action</th>
			  </tr>
				
				<tr class="<?php echo (++$num%2==0?"even":"odd");?>">
				  <td valign="middle">datum vesti</td>
				  <td valign="middle">naslov vesti</td>
				  <td>prva recenica vesti sa linkom koji otvara div sa celim textom</td>
				  <td align="center" valign="middle">link koji otvara sliku u divu</td>
				  <td align="right" valign="middle">	<a href="javascript:;" class="j_edit" title="Edit"><!-- edit --></a>
						<a href="javascript:;" class="j_delete" title="Delete"><!-- delete --></a>	</td>
			  </tr>
				<tr class="<?php echo (++$num%2==0?"even":"odd");?>">
					<td valign="middle">24.07.2010</td>
					<td valign="middle">news title djfkdljf das</td>
					<td>Bla bd;oas dash;asld asdskdj as <a href="#">Click to se whole text</a></td>
					<td align="center" valign="middle"><a href="#">Click to see image</a></td>
	  <td align="right" valign="middle">
						<a href="javascript:;" class="j_edit" title="Edit"><!-- edit --></a>
						<a href="javascript:;" class="j_delete" title="Delete"><!-- delete --></a>					</td>
			  </tr>
		  </tbody>
			<tfoot>
				<tr>
					<td colspan="4">
						<button type="button" style="margin-right: 20px;">Save</button>					</td>
				</tr>
			</tfoot>
		</table>
  </div>
</div>
