<a id="showMenu" class="logo navbar-btn pull-left" href="" title="Меню">
	<img src="/sites/all/themes/lab/images/about-devider.png" alt="Меню" />
	<p class="text-center">Меню</p>
</a>

<div id="perspective" class="perspective effect-laydown">
	<div id="perspective-container">
		<div id="perspective-wrapper"><!-- wrapper needed for scroll -->

<div id="ip-container" class="ip-container">
	<!--(bake parts/preloader.php)-->

	<?php
		$block = block_load('laba', 'frontworksblock');
		$block_content = _block_render_blocks(array($block));
		$build = _block_get_renderable_array($block_content);
		print drupal_render($build);
	?>


</div>

</div>
</div>
<nav class="outer-nav left vertical">
	<a href="/" class="icon-home">Головна</a>
	<a href="/works" class="icon-news">Роботи</a>
	<a href="/blog" class="icon-image">Блог</a>
	<a href="/contacts" class="icon-mail">Контакти</a>
	<!--<a href="#" class="icon-upload">Uploads</a>
    <a href="#" class="icon-star">Favorites</a>

    <a href="#" class="icon-lock">Security</a>-->
</nav>
</div><!-- /perspective -->