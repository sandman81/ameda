<?php //krumo ($fields);  ?>
<div class="faq-list-item_top">
	<div class="faq-list-item_top-text">
		<?php print $fields['body']->content; ?>	
	</div>
	<div class="faq-list-item_top-name">
		<?php print $fields['title']->content; ?>
	</div>
	<i class="faq-list-item_top-icon">?</i>
</div>
<div class="faq-list-item_bottom">
	<div class="faq-list-item_bottom-answer">
		<?php print $fields['field_faq_answer']->content; ?>
	</div>
	<div class="faq-list-item_bottom-doc">
		<?php print $fields['field_faq_doc']->content; ?>	
	</div>
	<div class="faq-list-item_bottom-votes">
		<div class="faq-list-item_bottom-votes-count"><span></span> <i>посетителей считают этот ответ полезным</i></div>
		<div class="faq-list-item_bottom-votes-action">
			<div class="faq-list-item_bottom-votes-label">
				<?php print $fields['field_faq_votes_1']->label; ?>
			</div>
			<div class="faq-list-item_bottom-votes-buttons">
				<?php print $fields['field_faq_votes_1']->content; ?>
			</div>
		</div>
	</div>
</div>