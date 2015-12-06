<?php if ($rows): ?>
	<div class="gallery-content">
  		<?php print $rows; ?>
  	</div>
<?php endif; ?>
<div class="gallery-view-but">
	<button class="gallery-view-but_button">смотреть еще</button>
</div>
<?php $block = module_invoke('views', 'block_view', 'gallery-block_1'); print render($block['content']); ?>

