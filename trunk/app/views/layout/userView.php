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
    		    <div class="banner"></div>
    		</div>
            
	        <div class="nav_corporate">
            
            <div class="nnav_corporate_text"><a href="#">&gt;&gt; click here to visit our global web site &lt;&lt;</a></div>
            </div>
<div class="nav">
    			<!-- Main navigation -->
    			<ul id="jsddm">
				    <li><a href="<?php echo BASE_PATH.'home'.DS; ?>" title="Home" >Home</a></li>
				    <li><a class="menu_border" href="<?php echo BASE_PATH.'who-we-are'.DS; ?>" title="Who we are" >Who we are</a></li>
				    <li><a class="menu_border" href="<?php echo BASE_PATH.'our-goals'.DS; ?>" title="Our goals" >Our goals</a></li>
				    <li>
				    	<a class="menu_border" href="<?php echo BASE_PATH.'our-projects'.DS; ?>" title="Our projects" >Our projects</a>
				    	<ul>
				            <li><a href="#">&nbsp;&nbsp;Retail Park Pancevo&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
				            <li><a href="#">&nbsp;&nbsp;Zvezdara&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
				            
				        </ul>
			       </li>
				    <li><a class="menu_border" href="<?php echo BASE_PATH.'news'.DS; ?>" title="News" >News</a></li>
					<li><a class="menu_border" href="<?php echo BASE_PATH.'contact'.DS; ?>" title="Contact" >Contact</a></li>
				</ul>
	  </div>
    			
	  <div class="lang_srb"><img src="<?php echo IMAGE_PATH.'main_flag_srb.jpg';?>" alt="" title="" /></div>
            <div class="lang_eng"><img src="<?php echo IMAGE_PATH.'main_flag_eng.jpg';?>" alt="" title="" /></div>
    		
            
            <div class="content_bg">
            	<div class="news">
            		<div class="news_title"><span class="plavi_text">Latest</span> news</div>
                		<div class="latest_news">
                			<div class="news_date">24-05-2010</div>
                			<div class="news_text_title">Zvezdara</div>
                			<div class="news_text">Residential and commercial project, 250 apartments. Construction starts in September 2010! <a href="#">More...</a></div>
                        
                	    	<div class="news_break"></div>
                		</div>
                        <div class="latest_news">
                			<div class="news_date">24-05-2010</div>
                			<div class="news_text_title">First Retail Park in Serbia</div>
                			<div class="news_text">Located on 7,3 ha, envisaged construction of total 30.000 m2 GBA with 700 parking places <a href="#">More...</a></div>
                		</div>
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