<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $title;?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
		
        <!-- Default css -->
        <?php echo css('cms.css');?>
        <!-- jQuery library 1.3.1. -->
        <?php echo js('jquery-1.3.1.js');?>
        <!-- Default js -->
        <?php echo js('login.js');?>
        <link href="../../../public/css/cms.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
	   	<!-- start header -->
		<div id="header">
			<h1>CMS admin panel</h1>
			<p>design by Dusan Novakovic :-)</p>
		</div>
		<!-- end header -->
	
		<!-- start page -->
		<div id="page">
        	
			<!-- start content -->
				<div id="content">
					<?php include('app'.DS.VIEW_PATH.DS.$controller.DS.$action.'View.php'); ?>	
				</div>
             
           
		</div>
	</body>
</html>