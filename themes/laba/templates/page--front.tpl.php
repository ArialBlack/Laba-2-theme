<div id="ip-container" class="ip-container">
	<header class="preloader">
		<img src="<?php print $base_path ;?>sites/all/themes/laba/images/logo-ani.gif" width="420" height="368"> 
	</header>


	<?php
		$block = block_load('laba', 'frontworksblock');
		$block_content = _block_render_blocks(array($block));
		$build = _block_get_renderable_array($block_content);
		print drupal_render($build);
	?>


</div>