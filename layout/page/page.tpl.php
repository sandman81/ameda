<?php include ($directory."/layout/inc/medium-menu.php"); ?>
<div id="wrapper">
	<?php include ($directory."/layout/inc/header.php"); ?>
	<section id="content">
		<div class="site-container">
			<div class="content-center">
				<div class="sections-menu page-section">
					<?php $block = module_invoke('menu', 'block_view', 'menu-sections-menu'); print render($block['content']); ?>
				</div>
				<?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
				<?php $block = module_invoke('system', 'block_view', 'main'); print render($block['content']); ?>
			</div>
		</div>
		<?php include ($directory."/layout/inc/map.php"); ?>
	</section>
</div>
<?php include ($directory."/layout/inc/footer.php"); ?>