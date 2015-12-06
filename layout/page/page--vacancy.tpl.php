<?php include ($directory."/layout/inc/medium-menu.php"); ?>
<div id="wrapper">
	<?php include ($directory."/layout/inc/header.php"); ?>
	<section id="content">
		<div class="site-container">
			<div class="content-center">
				<div class="sections-menu page-section">
					<?php $block = module_invoke('menu', 'block_view', 'menu-sections-menu'); print render($block['content']); ?>
				</div>
				<?php if ($title): ?><h1 class="page-title">Вакансии</h1><?php endif; ?>
				<div class="vacancy-top-text static-text">
					<?php $block = module_invoke('block', 'block_view', '5'); print render($block['content']); ?>
				</div>
				<h2 class="page-title"><?php print $title; ?></h2>
				<?php $block = module_invoke('system', 'block_view', 'main'); print render($block['content']); ?>
			</div>
		</div>
		<?php include ($directory."/layout/inc/map.php"); ?>
	</section>
</div>
<?php include ($directory."/layout/inc/footer.php"); ?>