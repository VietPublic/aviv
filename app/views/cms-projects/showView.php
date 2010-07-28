<div class="post">
	<h2 class="title">Our projects &raquo; View details</h2>
	<p class="byline"><small>All about this project</small></p>
	<div class="back"> &lt;&lt; <a href="<?php echo BASE_PATH.'cms'.DS.'projects'.DS; ?>">Back</a></div>
	<div class="entry">
    <table cellpadding="0" cellspacing="0" width="100%">
		<tbody>
			<tr>
				<th style="width: 200px;">
					<p>
						Title
						<img src="<?php echo IMAGE_PATH.'sr.png';?>" alt="" title="" />
					</p>
				</th>
				<td><?php echo $project['title_sr'];?></td>
			</tr>
			<tr>
				<th>
					<p>
						First text box
						<img src="<?php echo IMAGE_PATH.'sr.png';?>" alt="" title="" />
					</p>
				</th>
				<td><?php echo $project['content_sr'];?></td>
			</tr>
			<tr>
				<th>
					<p>
						Second text box
						<img src="<?php echo IMAGE_PATH.'sr.png';?>" alt="" title="" />
					</p>
				</th>
				<td><?php echo $project['content2_sr'];?></td>
			</tr>
			<tr>
				<th>
					<p>
						Title
						<img src="<?php echo IMAGE_PATH.'en.png';?>" alt="" title="" />
					</p>
				</th>
				<td><?php echo $project['title_en'];?></td>
			</tr>
			<tr>
				<th>
					<p>
						First text box
						<img src="<?php echo IMAGE_PATH.'en.png';?>" alt="" title="" />
					</p>
				</th>
				<td><?php echo $project['content_en'];?></td>
			</tr>
			<tr>
				<th>
					<p>
						Second text box
						<img src="<?php echo IMAGE_PATH.'en.png';?>" alt="" title="" />
					</p>
				</th>
				<td><?php echo $project['content2_en'];?></td>
			</tr>
			  <?php if(isset($project['other']) && !empty($project['other'])):?>
		     <tr>
		     	<th>Other images</th>
			  	<td>
			  		<table cellpadding="0" cellspacing="0" width="100%">
			  			<tbody>
			  				<?php 
			  						$column = 0;
			  						foreach($project['other'] as $n):?>
			  				<?php if($column == 0):?>
			  				<tr>
			  				<?php endif;?>
			  					<td>
			  						<img src="<?php echo BASE_PATH.UPLOAD_PATH.$project['link'].DS.'thumb'.DS.$n['id']."-".$n['image']; ?>" alt="" title="" />			
			  					</td>
			  				<?php if($column < 3):
			  						$column++;
			  					  else:
			  					  	$column = 0;
			  				?>
			  				</tr>
			  				<?php endif;?>
							<?php endforeach;?>
							<?php 
								if($column < 3){
									for($i = $column; $i < 3; $i++){
									echo "<td><!-- empty --></td>";
									}
								echo "</tr>";
							}?>
						</tbody>
			  		</table>
				</td>
			 </tr>
			 <?php endif;?>
		</tbody>
	</table>
    </div>
</div>
