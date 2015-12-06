<?php //krumo ($fields);  ?>
<div class="programms-list-item_info">
	<div class="programms-list-item_info-title">
		<div class="programms-list-item_info-title-label">Программа</div>
		<div class="programms-list-item_info-title-name">
			<?php print $fields['title']->content; ?>
		</div>
	</div>
	<div class="programms-list-item_info-img">
		<?php print $fields['field_programm_img']->content; ?>
	</div>
	<div class="programms-list-item_info-counts">
		<div class="programms-list-item_info-counts-text">
			<?php print $fields['field_programm_price']->content; ?>	
		</div>
		<div class="programms-list-item_info-counts-but">
			<?php print $fields['view_node']->content; ?>
		</div>
	</div>
</div>