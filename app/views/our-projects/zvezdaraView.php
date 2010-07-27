<div class="main_content">
  	
  	<div class="page_title">
		<?php echo $page['title_'.$lng];?>
	</div>
	
  	<div style="clear: both;"><!-- empty --><br/></div>
  	
  	<div class="text_box_regular">
		<?php echo $page['content_'.$lng];?>
	</div>
  
  	<div style="clear: both;"><!-- empty --><br/></div>
  	
  	<?php if(isset($page['other']) && !empty($page['other'])):?>
  	<div class="text_break"></div>
  	
  	<div class="projects_imgs">
  		<?php foreach($page['other'] as $o):?>
  		<div class="imgs">
  			<a href="<?php echo BASE_PATH.UPLOAD_PATH.'zvezdara'.DS.$o['id']."-".$o['image'];?>" title="<?php echo $o['image'];?>">
  				<img src="<?php echo BASE_PATH.UPLOAD_PATH.'zvezdara'.DS.'thumb'.DS.$o['id']."-".$o['image'];?>" border="0" />
  			</a>
  		</div>
  		<?php endforeach;?>
  	</div>
  	<?php endif;?>
</div>
