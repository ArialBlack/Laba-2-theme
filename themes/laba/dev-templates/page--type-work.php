<?php if ( !empty($node) ) {
	$style = "";
	if ($node->field_cover) {
		$img_url = drupal_basename($node->field_cover['und'][0]['uri']);
		$path =  drupal_basename($img_url);
	}
}?>

<div id="ip-container" class="ip-container">
	<!--(bake parts/preloader.php)-->

	<div class="ip-main">
		<section id="cd-intro">
			<div id="cd-intro-background" style="background-image: url('/sites/default/files/<?php print $img_url;?>')"></div>
			<div id="cd-intro-tagline">
				<a id="main-content"></a>
				<?php print render($title_prefix); ?>
				<h1><?php print $node->field_short_name['und'][0]['value']; ?></h1>
				<?php print render($title_suffix); ?>
				<h2><?php print $node->title; ?></h2>

				<?php print render(field_view_field('node', $node, 'field_intro', array('label'=>'hidden')));  ?>
			</div>
		</section>

		<main class="cd-content">
			<div class="cd-container container">
				<?php print $messages; ?>
				<?php if (!empty($tabs)): ?>
					<?php print render($tabs); ?>
				<?php endif; ?>
				<?php if (!empty($page['help'])): ?>
					<?php print render($page['help']); ?>
				<?php endif; ?>
				<?php if (!empty($action_links)): ?>
					<ul class="action-links"><?php print render($action_links); ?></ul>
				<?php endif; ?>
				<?php print render($page['content']); ?>
			</div>
		</main>
				
	</div>
</div><!-- /container -->



