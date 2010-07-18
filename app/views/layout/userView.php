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
    </head>
    
    <body>
    	<div class="wraper">
    		<div class="header">
    			
    			<!-- Main header -->
    			Ovde ide ceo header
    		</div>
    		<div class="nav">
    			
    			<!-- Main navigation -->
				<a href="<?php echo BASE_PATH.'home'.DS; ?>" title="Home" >Home</a>
		    	<a href="<?php echo BASE_PATH.'who-we-are'.DS; ?>" title="Who we are" >Who we are</a>
		    	<a href="<?php echo BASE_PATH.'our-goals'.DS; ?>" title="Our goals" >Our goals</a>
		    	<a href="<?php echo BASE_PATH.'our-projects'.DS; ?>" title="Our projects" >Our projects</a>
		    	<a href="<?php echo BASE_PATH.'news'.DS; ?>" title="News" >News</a>
		    	<a href="<?php echo BASE_PATH.'contact'.DS; ?>" title="Contact" >Contact</a>
    		</div>
    		
    		<div class="news">
    			Ovde idu vesti
    		</div>
    		
    		<div class="content">
    			<?php include('app'.DS.VIEW_PATH.DS.$controller.DS.$action.'View.php'); ?>	
    		</div>

			<div class="footer">
				Ovde ide footer
			</div>
    	</div>
    </body>
</html>