<div class="post">
	<h2 class="title">System administration &raquo; View details</h2>
	<p class="byline"><small>All about this news</small></p>
	<div class="back"> &lt;&lt; <a href="<?php echo BASE_PATH.'cms'.DS.'news'.DS; ?>">Back</a></div>
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
				<td><?php echo $news['title_sr'];?></td>
			</tr>
			<tr>
				<th>
					<p>
						Content
						<img src="<?php echo IMAGE_PATH.'sr.png';?>" alt="" title="" />
					</p>
				</th>
				<td><?php echo $news['content_sr'];?></td>
			</tr>
			<tr>
				<th>
					<p>
						Title
						<img src="<?php echo IMAGE_PATH.'en.png';?>" alt="" title="" />
					</p>
				</th>
				<td><?php echo $news['title_en'];?></td>
			</tr>
			<tr>
				<th>
					<p>
						Content
						<img src="<?php echo IMAGE_PATH.'en.png';?>" alt="" title="" />
					</p>
				</th>
				<td><?php echo $news['content_en'];?></td>
			</tr>
			<tr>
				<th>Main image</th>			
			  	<td><img src="<?php echo BASE_PATH.UPLOAD_PATH.'news'.DS.'thumb'.DS.$news['id']."-".$news['main_image']; ?>" alt="" title="" /></td>
			  </tr>
			  <?php if(isset($news['other']) && !empty($news['other'])):?>
		     <tr>
		     	<th>Other images</th>
			  	<td>
			  		<table cellpadding="0" cellspacing="0" width="100%">
			  			<tbody>
			  				<?php 
			  						$column = 0;
			  						foreach($news['other'] as $n):?>
			  				<?php if($column == 0):?>
			  				<tr>
			  				<?php endif;?>
			  					<td>
			  						<img src="<?php echo BASE_PATH.UPLOAD_PATH.'news'.DS.'thumb'.DS.$n['news_id']."-".$n['id']."-".$n['image']; ?>" alt="" title="" />			
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
