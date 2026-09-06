<!--favicon-->
        <link rel="icon" href="assets/images/logo-icon.png" type="image/x-icon"/>
<?php 
if(count($errors)>0): ?>
	<div class="error">
		<?php 
    		foreach ($errors as $error) : ?>
    	<p><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
	<?php endif ?> 
 
