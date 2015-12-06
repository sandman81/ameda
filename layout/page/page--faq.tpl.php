<?php include ($directory."/layout/inc/medium-menu.php"); ?>
<div id="wrapper">
	<?php include ($directory."/layout/inc/header.php"); ?>
	<section id="content">
		<div class="site-container">
			<div class="content-center">
				<div class="sections-menu page-section">
					<?php $block = module_invoke('menu', 'block_view', 'menu-sections-menu'); print render($block['content']); ?>
				</div>
				<div class="faq-top-box">
					<?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>	
					<button class="faq-top-box_button">задать свой вопрос</button>
				</div>
				<?php $block = module_invoke('system', 'block_view', 'main'); print render($block['content']); ?>
			</div>
		</div>
		<?php include ($directory."/layout/inc/map.php"); ?>
	</section>
</div>
<?php include ($directory."/layout/inc/footer.php"); ?>
<div class="overlay-bg faq-popup-content">
    <div class="order-form-popup">
        <div class="order-form-popup_title">
            <?php $block = module_invoke('webform', 'block_view', 'client-block-65'); print render($block['subject']); ?>
        </div>
        <?php $block = module_invoke('webform', 'block_view', 'client-block-65'); print render($block['content']); ?>
        <i class="order-form-popup_closed"></i>
    </div>
</div>