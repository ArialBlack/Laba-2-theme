<a id="showMenu" class="logo navbar-btn pull-left" href="" title="Меню">
	<img src="/sites/all/themes/laba/images/menu.png" alt="Меню" />
</a>

<div id="perspective" class="perspective effect-laydown">
	<div id="perspective-container">
		<div id="perspective-wrapper"><!-- wrapper needed for scroll -->

			<div id="ip-container" class="ip-container">
				<header class="preloader text-center">
					<img src="<?php print $base_path ;?>sites/all/themes/laba/images/logo-ani.gif" width="420" height="368">
					<p><?php print t("Loading, please wait..."); ?></p>
				</header>


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
	</nav>
</div><!-- /perspective -->