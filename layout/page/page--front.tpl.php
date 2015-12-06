 <?php include ($directory."/layout/inc/medium-menu.php"); ?>
 <div id="wrapper">
	<?php include ($directory."/layout/inc/header.php"); ?>
	<section id="content">
		<div class="front-top-content">
			<div class="content-center">
				<div class="front-top-content_content">
					<div class="sections-menu">
						<?php $block = module_invoke('menu', 'block_view', 'menu-sections-menu'); print render($block['content']); ?>
					</div>
				</div>
				<div class="front-top-content_med">
					<div class="sections-menu">
						<?php $block = module_invoke('menu', 'block_view', 'menu-sections-menu'); print render($block['content']); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="front-actions">
			<div class="content-center">
				<?php $block = module_invoke('views', 'block_view', 'advice-block_1'); print render($block['content']); ?>
			</div>
		</div>
		<div class="fornt-middle-content">
			<div class="content-center">
				<div class="front-page-content">
		        	<?php $block = module_invoke('system', 'block_view', 'main'); print render($block['content']); ?>
		        </div>
		        <div class="front-page-programm">
		        	<?php $block = module_invoke('views', 'block_view', 'programms-block_1'); print render($block['content']); ?>
		        </div>
		        <div class="order-form">
		        	<h3 class="order-form_title">
		        		<?php $block = module_invoke('webform', 'block_view', 'client-block-3'); print render($block['subject']); ?>
		        	</h3>
		        	<?php $block = module_invoke('webform', 'block_view', 'client-block-3'); print render($block['content']); ?>
		        </div>
	        </div>
		</div>
		<div class="front-preim-content">
			<div class="front-preim-content_video">
				 <!-- Start EasyHtml5Video.com BODY section -->
				<style type="text/css">.easyhtml5video .eh5v_script{display:none}</style>
				<script src="eh5v.files/html5video/html5ext.js" type="text/javascript"></script>
				<!-- End EasyHtml5Video.com BODY section -->
				<video id="video" class="front-preim-content_video-file" autoplay loop muted poster>
		            <source src="/sites/default/files/ameda-video.webm" type="video/webm">
		            <source src="/sites/default/files/ameda-video.mp4" type="video/mp4">
		            <source src="/sites/default/files/ameda-video.ogv" type="video/ogv">
		        </video>
			</div>
			<div class="content-center">
				<?php $block = module_invoke('views', 'block_view', 'preim-block'); print render($block['content']); ?>
			</div>
		</div>
		<div class="front-doctors">
			<div class="content-center">
				<h2 class="front-doctors_title">
					<?php $block = module_invoke('views', 'block_view', 'doctors-block'); print render($block['subject']); ?>
				</h2>
				<?php $block = module_invoke('views', 'block_view', 'doctors-block'); print render($block['content']); ?>
			</div>
		</div>
		<?php include ($directory."/layout/inc/map.php"); ?>
	</section>
</div>
<?php include ($directory."/layout/inc/footer.php"); ?>