<div class="bottom-map">
	<div class="content-center">
		<div class="bottom-map-locations">
			<?php $block = module_invoke('views', 'block_view', 'locations-block'); print render($block['content']); ?>
		</div>
	</div>
	<div class="bottom-map_full-map">
		<div class="bottom-map_full-map-content location-all-map active">
			<?php $block = module_invoke('views', 'block_view', 'map-block'); print render($block['content']); ?>
		</div>
		<div class="bottom-map_full-map-content location-map-1">
			<?php $block = module_invoke('views', 'block_view', 'map-block_1'); print render($block['content']); ?>
		</div>
		<div class="bottom-map_full-map-content location-map-2">
			<?php $block = module_invoke('views', 'block_view', 'map-block_2'); print render($block['content']); ?>
		</div>
		<div class="bottom-map_full-map-content location-map-3">
			<?php $block = module_invoke('views', 'block_view', 'map-block_3'); print render($block['content']); ?>
		</div>
		<div class="bottom-map_full-map-content location-map-4">
			<?php $block = module_invoke('views', 'block_view', 'map-block_4'); print render($block['content']); ?>
		</div>
	</div>
</div>