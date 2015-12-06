<?php include ($directory."/layout/inc/medium-menu.php"); ?>
<div id="wrapper">
	<?php include ($directory."/layout/inc/header.php"); ?>
	<section id="content">
		<div class="site-container">
			<div class="content-center">
				<div class="sections-menu page-section">
					<?php $block = module_invoke('menu', 'block_view', 'menu-sections-menu'); print render($block['content']); ?>
				</div>
				<div class="reviews-top-box">
					<?php if ($title): ?><h1 class="page-title">
						<span class="reviews-top-box_title-def"><?php print $title; ?></span>
						<span class="reviews-top-box_title-med">Отзывы пациентов</span>
					</h1><?php endif; ?>	
					<button class="reviews-top-box_button">оставить отзыв</button>
				</div>
				<?php $block = module_invoke('system', 'block_view', 'main'); print render($block['content']); ?>
				<div class="reviews-form">
		        	<h3 class="reviews-form_title">
		        		<?php $block = module_invoke('webform', 'block_view', 'client-block-29'); print render($block['subject']); ?>
		        	</h3>
		        	<?php $block = module_invoke('webform', 'block_view', 'client-block-29'); print render($block['content']); ?>
		        </div>
			</div>
		</div>
		<?php include ($directory."/layout/inc/map.php"); ?>
	</section>
</div>
<?php include ($directory."/layout/inc/footer.php"); ?>