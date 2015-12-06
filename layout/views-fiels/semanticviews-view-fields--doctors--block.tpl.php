<?php //krumo ($fields);  ?>
<div class="doctors-list-item-img">
	<?php print $fields['field_doc_photo']->content; ?>
	<?php print $fields['view_node']->content; ?>
</div>
<div class="doctors-list-item-title">
	<?php print $fields['title']->content; ?>
</div>
<div class="doctors-list-item-special">
	<?php print $fields['field_doc_special']->content; ?>
</div>
<div class="doctors-list-item-work">
	<div class="doctors-list-item-work-label">
		<?php print $fields['field_doc_work']->label; ?>
	</div>
	<div class="doctors-list-item-work-count">
		<?php print $fields['field_doc_work']->content; ?>
	</div>
</div>







