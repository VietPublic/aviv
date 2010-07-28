<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $title;?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
		
        <!-- Default css -->
        <?php echo css('default.css');?>
        <?php if(isset($css)) echo css($css);?>
        <?php echo css('jquery.lightbox-0.5.css');?>

        <!-- jQuery library 1.3.1. -->
        <?php echo js('jquery-1.3.1.js');?>
		<?php echo js('jquery.lightbox-0.5.min.js');?>
		
        <!-- Default js -->
        <?php echo js('default.js');?>

        <?php if(isset($js)) echo js($js); ?>
       
</head>
    
    <body>
    <div class="main">
   	<div class="wraper">
   		  <div class="header">
    			
    			<!-- Main header -->
    			<div class="logo"></div>
    		    <div class="banner">
    		      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="642" height="250">
                    <param name="movie" value="../../../public/images/header.swf" />
                    <param name="quality" value="high" />
                    <embed src="../../../public/images/header.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="642" height="250"></embed>
  		        </object>
    		    </div>
	  </div>
            
	        <div class="nav_corporate">
            
            <div class="nnav_corporate_text"><a href="#">&gt;&gt; <?php echo $lang['click here to visit our global web site'];?> &lt;&lt;</a></div>
            </div>
<div class="nav">
    			<!-- Main navigation -->
    			<ul id="jsddm">
				    <li><a href="<?php echo BASE_PATH.$lng.DS; ?>" title="<?php echo $lang['Home']; ?>" ><?php echo $lang['Home']; ?></a></li>
				    <li><a class="menu_border" href="<?php echo BASE_PATH.'who-we-are'.DS.$lng.DS; ?>" title="<?php echo $lang['Who we are']; ?>" ><?php echo $lang['Who we are']; ?></a></li>
				    <li><a class="menu_border" href="<?php echo BASE_PATH.'our-goals'.DS.$lng.DS; ?>" title="<?php echo $lang['Our goals']; ?>" ><?php echo $lang['Our goals']; ?></a></li>
				    <li>
				    	<a class="menu_border" href="javascript:;" title="<?php echo $lang['Our projects']; ?>" ><?php echo $lang['Our projects']; ?></a>
				    	<ul>
				            <li><a href="<?php echo BASE_PATH.'our-projects'.DS.'retail-park-pancevo'.DS.$lng.DS; ?>">Retail Park Pancevo</a></li>
<li><a href="<?php echo BASE_PATH.'our-projects'.DS.'zvezdara'.DS.$lng.DS; ?>">Zvezdara</a></li>
</ul>
		          </li>
				    <li><a class="menu_border" href="<?php echo BASE_PATH.'news'.DS.$lng.DS; ?>" title="<?php echo $lang['News']; ?>" ><?php echo $lang['News']; ?></a></li>
					<li><a class="menu_border" href="<?php echo BASE_PATH.'contact'.DS.$lng.DS; ?>" title="<?php echo $lang['Contact']; ?>" ><?php echo $lang['Contact']; ?></a></li>
				</ul>
	  </div>
    			
	  <div class="lang_srb">
	  	<a href="<?php echo BASE_PATH.'sr'.DS;?>">
	  		<img src="<?php echo IMAGE_PATH.'main_flag_srb.jpg';?>" alt="" border="0" title="" />	 	</a>	 </div>
    <div class="lang_eng">
     	<a href="<?php echo BASE_PATH.'en'.DS;?>">
     		<img src="<?php echo IMAGE_PATH.'main_flag_eng.jpg';?>" alt="" border="0" title="" />     	</a>     </div>
    		
            
<div class="content_bg">
            	<div class="news">
					<?php if(!isset($dontShow)):?>
            		<div class="news_title">
            			<span class="plavi_text"><?php echo $lang['Latest'];?></span> <?php echo $lang['news'];?></div>
            			<?php 
            			$latest = getLatestNews();
            			if(isset($latest) && !empty($latest)):
            			$newsNum = 0;
            			foreach($latest as $l):
            			?>
                		<div class="latest_news">
                			<div class="news_date">
                				<?php 
                				$date = explode(" ", $l['modif']);
                				echo $date[0];
                				?>
                			</div>
                			<div class="news_text_title"><?php echo $l['title_'.$lng];?></div>
                			<div class="news_text">
                				<?php echo substr($l['content_'.$lng], 0, 200)."...";?>
                				<a href="<?php echo BASE_PATH.'news'.DS.$l['id'].DS.$lng.DS; ?>">More...</a>
                			</div>
                			<?php if($newsNum == 1):?><div class="news_break"></div><?php endif;?>
                		</div>
                		<?php 
                		$newsNum++;
                		endforeach;
                		endif;
                		?>
                	<?php endif;?>
			  </div>
              
    		
    			<div class="content">
    				<?php include('app'.DS.VIEW_PATH.DS.$controller.DS.$action.'View.php'); ?>	
    			</div>
      </div>
   	</div>
<div class="footer">
            	<div class="footer_copyright">Content copyright ©2010 Aviv Arlon Serbia</div>
                <div class="designBy">site by:
                  <br />
                  <span class="bluedesigns">Blue Designs</span></div>
      </div>
    </div>
</body>
</html>