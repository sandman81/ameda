<?php //krumo ($content);  ?>
<div class="open-doctor-top">
	<div class="content-center">
		<div class="open-doctor-top_content">
			<div class="open-doctor-top_content-doc">
				<div class="doctors-list-item-img">
					<?php print render($content['field_doc_photo'][0]); ?>
				</div>
				<div class="doctors-list-item-work">
					<div class="doctors-list-item-work-label">
						<?php print render($content['field_doc_work']['#title']); ?>
					</div>
					<div class="doctors-list-item-work-count">
						<?php print render($content['field_doc_work'][0]); ?>
					</div>
				</div>
			</div>
			<div class="open-doctor-top_content-info">
				<h1 class="open-doctor-top_content-info-title"><?php print $title; ?></h1>
				<div class="open-doctor-top_content-info-special">
					<?php print render($content['field_doc_special'][0]); ?>
				</div>			
				<div class="open-doctor-top_content-info-text static-text">
					<?php print render($content['body'][0]); ?>
				</div>			
				<button class="open-doctor-top_content-info-full-but">читать далее</button>
			</div>
		</div>
	</div>
</div>
<div class="doc-serts-content">
	<div class="content-center">
		<h2 class="doc-serts-content_title">
			<?php print render($content['field_doc_serts']['#title']); ?>
		</h2>
		<div class="doc-serts-content_list">
			<?php print strip_tags(render($content['field_doc_serts']), '<a><img>'); ?>
		</div>
	</div>
</div>
<div class="open-doc-bottom">
	<div class="content-center">
		<div class="order-form">
        	<h3 class="order-form_title">
        		<?php $block = module_invoke('webform', 'block_view', 'client-block-3'); print render($block['subject']); ?>
        	</h3>
        	<?php $block = module_invoke('webform', 'block_view', 'client-block-3'); print render($block['content']); ?>
        </div>
        <div class="doc-reviews">
        	<h2 class="doc-reviews_title">
        		<?php $block = module_invoke('views', 'block_view', 'reviews-block_1'); print render($block['subject']); ?>	
        	</h2>
        	<?php $block = module_invoke('views', 'block_view', 'reviews-block_1'); print render($block['content']); ?>
        </div>
	</div>
</div>