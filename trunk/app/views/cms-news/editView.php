<div class="post">
	<h2 class="title">News &raquo; Edit existing</h2>
	<p class="byline"><small>Fill in all required fields</small></p>
	<div class="entry">
		<form name="form" action="<?php echo BASE_PATH.'cms'.DS.'news'.DS.$params['id'].DS.'submit'.DS; ?>" method="post" enctype="multipart/form-data" >
			<?php include_once("_form.php");?>					
		</form>
  </div>
</div>
