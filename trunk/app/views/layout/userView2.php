<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $title;?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
		
        <!-- Default css -->
        <?php echo css('default.css');?>
        <?php if(isset($css)) echo css($css);?>

        <!-- jQuery library 1.3.1. -->
        <?php echo js('jquery-1.3.1.js');?>

        <!-- Default js -->
        <?php echo js('default.js');?>

        <?php if(isset($js)) echo js($js); ?>
        <link href="../../../public/css/default.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" language="JavaScript1.2" src="stm31.js"></script>
    </head>
    
    <body>
    	<div class="wraper">
    		<div class="header">
    			
    			<!-- Main header -->
    			<div class="logo"></div>
    		    <div class="banner"></div>
    		</div>
            
	        <div class="nav_corporate"></div>
          <div class="nav">
    			
    			<!-- Main navigation -->
                <div class="btn_Home"><a href="<?php echo BASE_PATH.'home'.DS; ?>" title="Home" >Home</a></div>
		    	<div class="btn_WhoWeAre"><a href="<?php echo BASE_PATH.'who-we-are'.DS; ?>" title="Who we are" >Who we are</a></div>
		    	<div class="btn_OurGoals"><a href="<?php echo BASE_PATH.'our-goals'.DS; ?>" title="Our goals" >Our goals</a></div>
		    	<div class="btn_OurProjects"><a href="<?php echo BASE_PATH.'our-projects'.DS; ?>" title="Our projects" >Our projects</a></div>
		    	<div class="btn_News"><a href="<?php echo BASE_PATH.'news'.DS; ?>" title="News" >News</a></div>
		    	<div class="btn_Contact"><a href="<?php echo BASE_PATH.'contact'.DS; ?>" title="Contact" >Contact</a></div>    		</div>
    		
    		<div class="lang_srb"><img src="<?php echo IMAGE_PATH.'main_flag_srb.jpg';?>" /></div>
            <div class="lang_eng"><img src="<?php echo IMAGE_PATH.'main_flag_eng.jpg';?>" /></div>
    		
            
            <div class="content_bg">
            	<div class="news">
            		<div class="news_title"><span class="plavi_text">Latest</span> news</div>
                		<div class="latest_news">
                			<div class="news_date">24-05-2010</div>
                			<div class="news_text_title">Naslov vesti</div>
                			<div class="news_text">Content Residential and commercial project, 250 apartments. Construction starts in September 2010!</div>
                        
                	    	<div class="news_break"></div>
                		</div>
			  </div>
              
    		
    			<div class="content">
    				<?php include('app'.DS.VIEW_PATH.DS.$controller.DS.$action.'View.php'); ?>	
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