<?php //krumo ($fields);  ?>
<div class="reviews-list-item_img">
	<?php print $fields['field_rev_photo']->content; ?>
</div>
<div class="reviews-list-item_text">
	<div class="reviews-list-item_text-title">
		<?php print $fields['title']->content; ?>
	</div>
	<?php print $fields['body']->content; ?>
</div>
