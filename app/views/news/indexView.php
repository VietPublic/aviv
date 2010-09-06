<link href="../../../public/css/default.css" rel="stylesheet" type="text/css" />

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
   	
   	<div style="clear: both; "></div>
   	
   	<!-- Start Navigation menu -->
    <div class="pagination">
    <?php
	/*****************************************************************************************************/
    //						START NAVIGATION																//
    $range = SHOW_PER_PAGE/2;
   // if not on page 1, don't show back links
   if ($page > 1):?>

   	<!-- Link to first page -->
   	<a class="link first" href="<?php echo BASE_PATH.'news'.DS.$lng.DS.'?page=1';?>"><?php echo $lang['First'];?></a>
	<?php $prevpage = $page - 1;?>

   	<!-- Link to previous page (from current) -->
    <a class="link previous" href="<?php echo BASE_PATH.'news'.DS.$lng.DS.'?page='.$prevpage; ?>"><?php echo $lang['Previous'];?></a>
	<?php
    endif;

    // loop to show links to range of pages around current page
    for ($x = ($page - $range); $x < (($page + $range) + 1); $x++):
	    // if it's a valid page number...
	    if (($x > 0) && ($x <= $totalpages)):
		    // if we're on current page...
		    if ($x == $page):?>
		
		    <!-- Current page -->
		    <strong class="link current"><?php echo $x;?></strong>
		    <?php else: ?>
		    <!-- Other links -->
		    <a class="link other" href="<?php echo BASE_PATH.'news'.DS.$lng.DS.'?page='.$x;?>"><?php echo $x;?></a>
		    <?php endif;?>
	   	<?php endif;
	endfor;

	// if not on last page, show forward and last page links
    if ($page != $totalpages):
    // get next page
    $nextpage = $page + 1;?>

    <!-- Link to next page -->
    <a class="link next" href="<?php echo BASE_PATH.'news'.DS.$lng.DS.'?page='.$nextpage;?>"><?php echo $lang['Next'];?></a>

    <!-- Link to last page -->
    <a class="link last" href="<?php echo BASE_PATH.'news'.DS.$lng.DS.'?page='.$totalpages;?>"><?php echo $lang['Last'];?></a>

    <?php endif; ?>

    </div>
</div>