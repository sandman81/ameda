<footer id="footer">
	<div class="content-center">
		<div class="header-content_content footer-content">
			<div class="header-content_logo">
				<img src="/sites/all/themes/ameda/img/footer-logo.png" />
			</div>
        	<div class="header-content_adr">
        		<?php $block = module_invoke('block', 'block_view', '1'); print render($block['content']); ?>
        	</div>
        	<div class="header-content_tel">
        		<div class="header-content_tel-num">
        			<?php $block = module_invoke('block', 'block_view', '3'); print render($block['content']); ?>
        		</div>
        	    <?php $block = module_invoke('menu', 'block_view', 'menu-order-button'); print render($block['content']); ?>
        	</div>
			<div class="header-content_time">
        		<?php $block = module_invoke('block', 'block_view', '2'); print render($block['content']); ?>
        	</div>
			<div class="header-content_buttons">
        		<?php $block = module_invoke('menu', 'block_view', 'menu-top-buttons'); print render($block['content']); ?>
        	</div>
    	</div>
    	<div class="footer-copy">2015 © AMEDA. Все права защищены.</div>
	</div>
</footer>
<div class="overlay-bg vizov-popup-content">
    <div class="order-form-popup">
        <div class="order-form-popup_title">
            <?php $block = module_invoke('webform', 'block_view', 'client-block-63'); print render($block['subject']); ?>
        </div>
        <?php $block = module_invoke('webform', 'block_view', 'client-block-63'); print render($block['content']); ?>
        <i class="order-form-popup_closed"></i>
    </div>
</div>
