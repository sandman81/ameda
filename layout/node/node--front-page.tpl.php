<div class="front-page-content_video-but">
	<?php $block = module_invoke('views', 'block_view', 'front_video-block'); print render($block['content']); ?>
</div>
<div class="front-page-content_text static-text">
	<?php print render($content['body'][0]); ?>
</div>