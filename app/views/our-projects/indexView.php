<div class="main_content">
  <div class="page_title">
  	<span class="plavi_text">
  		<?php 
  		$tmpTitle = explode(" ", @$project['title_'.$lng]);
  		echo "<span class='plavi_text'>".$tmpTitle[0]."</span>";
  		//Show rest
  		for($i=1; $i<count($tmpTitle); $i++) echo $tmpTitle[i];
  		?>
  	</span>
  </div>
  
  <div class="text_box_regular_small">
    <?php echo @$project['content_'.$lng];?>

  </div>
  <div class="movie">
	  <object width="370" height="226"><param name="movie" value="<?php echo @$project['video']; ?>"></param>
	  <param name="allowFullScreen" value="true"></param>
	  <param name="allowscriptaccess" value="always"></param>
	  <embed src="<?php echo @$project['video'];?>" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="370" height="226"></embed></object>
  </div>
  
  <div class="text_break"></div>
  <div class="text_projects">
  		<div class="text_box_regular_small">
		<?php echo @$project['content2_'.$lng];?>
		</div>
</div>
  <div class="image_box_projects">
  <?php if(isset($project['other']) && !empty($project['other'])):?>
  	<?php foreach($project['other'] as $pic):?>
	<div class="project_gallery">  	
	  	<div class="imgs">
	  		<a href="<?php echo BASE_PATH.UPLOAD_PATH.$project['link'].DS.$pic['id']."-".$pic['image'];?>" title="<?php echo $pic['image'];?>">
	  			<img src="<?php echo BASE_PATH.UPLOAD_PATH.$project['link'].DS.'thumb'.DS.$pic['id']."-".$pic['image'];?>" border="0" />
	  		</a>
	  	</div>
		<div class="projects_img_description"><?php echo $project['title_'.$lng];?></div>
	</div>
	<?php endforeach;?>
    <?php endif;?>
    </div>
</div>
