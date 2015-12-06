<div class="open-static-content static-text">
	<?php print render($content['body'][0]); ?>
</div>
<?php $block = module_invoke('views', 'block_view', 'gallery-block_2'); print render($block['content']); ?>
