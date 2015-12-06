<?php //krumo ($content);  ?>
<div class="contacts-content">
	<div class="contacts-content_row">
		<div class="contacts-content_row-box box-1">
			<?php print render($content['field_cont_adr'][0]); ?>
		</div>
		<div class="contacts-content_row-box box-2">
			<?php print render($content['field_cont_adr'][1]); ?>
		</div>
	</div>
	<div class="contacts-content_row">
		<div class="contacts-content_row-box box-3">
			<?php print render($content['field_cont_adr'][2]); ?>
		</div>
		<div class="contacts-content_row-box box-4">
			<?php print render($content['field_cont_adr'][3]); ?>
		</div>
	</div>
</div>