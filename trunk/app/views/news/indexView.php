
<div class="main_content">

  	<div class="page_title"><span class="plavi_text"><?php echo $lang['News'];?></span></div>
  	
  	<?php if(isset($news) && !empty($news)):?>
  	<?php foreach($news as $n):?>
   	<div class="news_box">
    	<div class="news_image">
    		<a href="news-<?php echo $n['id']; ?>" ><!-- ancor --></a>
        	<div class="news_gallery_top">
	        	<a href="<?php echo BASE_PATH.UPLOAD_PATH.'news'.DS.$n['id']."-".$n['main_image'];?>" title="<?php echo $n['main_image'];?>">
	        		<img src="<?php echo BASE_PATH.UPLOAD_PATH.'news'.DS.'thumb'.DS.$n['id']."-".$n['main_image'];?>" border="0" title="" alt=""/>
	        	</a>
	        	<!-- other -->
	        	<?php if(isset($n['other']) && !empty($n['other'])):?>
	        	<?php foreach($n['other'] as $no):?>
	        		<a style="display: none;" href="<?php echo BASE_PATH.UPLOAD_PATH.'news'.DS.$no['news_id']."-".$no['id']."-".$no['image'];?>" title="<?php echo $no['image'];?>">
		        		<img src="<?php echo BASE_PATH.UPLOAD_PATH.'news'.DS.'thumb'.DS.$no['news_id']."-".$no['id']."-".$no['image'];?>" border="0" title="" alt=""/>
		        	</a>
	        	<?php endforeach;?>
   				<?php endif;?>
          	</div>
          <div class="news_gallery_text"><?php echo $lang['Photo gallery'];?></div>
        </div>
        
      <div class="news_text_area">
   		  	<div class="news_title">
				<!-- title -->
				<?php echo $n['title_'.$lng]; ?>
			</div>
	      	<div class="news_text">
	     	 	<!-- content -->
	      		<?php echo $n['content_'.$lng]; ?>
	      	</div>
   	</div>
    <div class="news_break"></div>
   	</div>
   	<?php endforeach;?>
   	<?php endif;?>
</div>