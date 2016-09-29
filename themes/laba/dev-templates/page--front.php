<div id="ip-container" class="ip-container">
	<!--(bake parts/preloader.php)-->

	<?php
		$block = block_load('laba', 'frontworksblock');
		$block_content = _block_render_blocks(array($block));
		$build = _block_get_renderable_array($block_content);
		print drupal_render($build);
	?>


</div>