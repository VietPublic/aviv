<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $title;?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
		
        <!-- Default css -->
        <?php echo css('cms.css');?>
        <?php if(isset($css)) echo css($css);?>

        <!-- jQuery library 1.3.1. -->
        <?php echo js('jquery-1.3.1.js');?>
		
        <!-- Default js -->
        <?php echo js('cms.js');?>

        <?php if(isset($js)) echo js($js); ?>
       
    </head>
    
    <body>
   	<!-- start header -->
	<div id="header">
		<div style="float: left;">
			<h1>Aviv Arlon</h1>
			<p> Superior Construction Since 1963</p>
		</div>
		<div style="float: right; margin: 30px 0px 0px 0px;">
			<a style="font-size: 15px; color: #819AB2; font-weight: bold;" href="<?php echo BASE_PATH.'logout'.DS; ?>" >Logout</a>
		</div>
	</div>
	
	<!-- end header -->
	<!-- start page -->
		<div id="page">
			<div id="page-bgtop">
				<div id="page-bgbtm">
					<!-- start content -->
					<div id="content">
						<?php include('app'.DS.VIEW_PATH.DS.$controller.DS.$action.'View.php'); ?>	
					</div>
					<!-- start sidebar -->
					<div id="sidebar">
						<ul>
							<li>
								<h2>System administration</h2>
	
								<ul>
									<li><a href="<?php echo BASE_PATH.'cms'.DS.'users'.DS.'add'.DS; ?>">Add new admin</a></li>
									<li><a href="<?php echo BASE_PATH.'cms'.DS.'users'.DS; ?>">View existing admins</a></li>
								</ul>
							</li>
							<li>
								<h2>News</h2>
								<ul>
									<li><a href="<?php echo BASE_PATH.'cms'.DS.'news'.DS.'add'.DS; ?>">Add new</a></li>
									<li><a href="<?php echo BASE_PATH.'cms'.DS.'news'.DS; ?>">View existing</a></li>
								</ul>
	
							</li>
							<li>
								<h2>Page administration</h2>
								<ul>
									<li><a href="<?php echo BASE_PATH.'cms'.DS.'pages'.DS.'?p=home'; ?>">Home page</a></li>
									<li><a href="<?php echo BASE_PATH.'cms'.DS.'pages'.DS.'?p=who-we-are'; ?>">Who we are page</a></li>
									<li><a href="<?php echo BASE_PATH.'cms'.DS.'pages'.DS.'?p=our-goals'; ?>">Our goals</a></li>
								</ul>
							</li>
							<li>
								<h2>Our projects</h2>
								<ul>
									<li><a href="<?php echo BASE_PATH.'cms'.DS.'projects'.DS.'?p=zvezdara'; ?>">Zvezdara</a></li>
									<li><a href="<?php echo BASE_PATH.'cms'.DS.'projects'.DS.'?p=retail-park-pancevo'; ?>">Retails Park Pancevo</a></li>
	
								</ul>
							</li>
							<li>
								<h2>Contact</h2>
								<ul>
									<li><a href="<?php echo BASE_PATH.'cms'.DS.'contact'.DS; ?>">Sent forms</a></li>
								</ul>
							</li>
						</ul>
					</div>
				<!-- end sidebar -->
				<div style="clear:both">&nbsp;</div>
			</div>
		</div>
	</div>
<div id="footer">
	<p>&copy;2007 All Rights Reserved &nbsp;&bull;&nbsp; Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a> &nbsp;&bull;&nbsp; Icons by <a href="http://www.famfamfam.com/">FAMFAMFAM</a>.</p>
</div>
				
	</body>
</html>