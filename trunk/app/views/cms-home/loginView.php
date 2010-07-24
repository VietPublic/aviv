<div class="post">
	<h2 class="title">Login</h2>
	<p class="byline"><small>Your current IP address is: <?php echo $_SERVER['REMOTE_ADDR'];?></small></p>
	<div class="entry">
		<form name="form" action="<?php echo BASE_PATH.'cms'.DS.'submit'.DS; ?>" method="post">
			<table cellpadding="0" cellspacing="0" style="width: 400px; padding: 10px;">
				<tbody>
					<tr>
						<td>
							<p class="byline" style="margin:0px;">Username</p>
						</td>
						<td>
							<input type="text" name="login[username]" value="" id="username" class="j_required" />
						</td>
					</tr>
					<tr>
						<td>
							<p class="byline" style="margin:0px;">Password</p>
						</td>
						<td>
							<input type="password" name="login[password]" value="" id="password" class="j_required" />
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td><!-- empty --></td>
						<td><button type="button">Login</button></td>
					</tr>
				</tfoot>
			</table>
		</form>
	</div>
</div>