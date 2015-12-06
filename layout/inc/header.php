<header id="header">
	<div class="header-content">
		<div class="content-center">
			<div class="header-content_content">
				<div class="header-content_tel-sm">
					<?php $block = module_invoke('block', 'block_view', '6'); print render($block['content']); ?>
				</div>
				<a class="header-content_logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
	            	<img title="<?php print t('Home'); ?>" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
	        	</a>
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
	        		<div class="header-content_buttons-call-popup">
	        			<?php $block = module_invoke('webform', 'block_view', 'client-block-62'); print render($block['content']); ?>
	        		</div>
	        	</div>
	        	<button class="header-content_button-menu"></button>
        	</div>
		</div>	
		<div class="header-content_order">
			<div class="order-form">
	        	<?php $block = module_invoke('webform', 'block_view', 'client-block-64'); print render($block['content']); ?>
	        </div>
		</div>
	</div>
	<div class="header-menu">
		<div class="content-center">
			<div class="header-menu_content">
				<div class="header-menu_main-menu">
					<?php $block = module_invoke('menu', 'block_view', 'main-menu'); print render($block['content']); ?>
				</div>	
				<div class="header-menu_right-but">
					<?php $block = module_invoke('menu', 'block_view', 'menu-kons-button'); print render($block['content']); ?>
				</div>	
			</div>
		</div>	
	</div>
</header>