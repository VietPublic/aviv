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
		<h1>AVIV ARLON</h1>
	
		<p> Superior Construction Since 1963</p>
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
								<h2>Categories</h2>
	
								<ul>
									<li><a href="#">Aliquam liberonare</a></li>
									<li><a href="#">Consectetuer adipiscing</a></li>
									<li><a href="#">Metusin  pellentesque</a></li>
									<li><a href="#">Suspendisse  maurisres</a></li>
									<li><a href="#">Urnanet  molestie semper</a></li>
	
									<li><a href="#">Proin gravida  porttitor</a></li>
								</ul>
							</li>
							<li>
								<h2>Blogroll</h2>
								<ul>
									<li><a href="#">Aliquam liberonare</a></li>
	
									<li><a href="#">Consectetuer adipiscing</a></li>
									<li><a href="#">Metusin  pellentesque</a></li>
									<li><a href="#">Suspendisse  maurisres</a></li>
									<li><a href="#">Urnanet  molestie semper</a></li>
									<li><a href="#">Proin gravida  porttitor</a></li>
								</ul>
	
							</li>
							<li>
								<h2>Archives</h2>
								<ul>
									<li><a href="#">September</a> (23)</li>
									<li><a href="#">August</a> (31)</li>
	
									<li><a href="#">July</a> (31)</li>
									<li><a href="#">June</a> (30)</li>
									<li><a href="#">May</a> (31)</li>
									<li><a href="#">April</a> (30)</li>
	
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