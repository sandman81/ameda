<?php //krumo ($content);  ?>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>   
<div class="open-programm-top">
	<div class="content-center">
		<div class="static-text">
			<?php print render($content['body'][0]); ?>
		</div>
	</div>
</div>
<div class="page-video-content">
	<div class="page-video-content_poster">
		<?php print render($content['field_programm_video_img'][0]); ?>
		<div class="content-center">
			<div class="page-video-content_poster-desc">
				<?php print render($content['field_programm_video_desc'][0]); ?>	
				<i id="play-button" class="page-video-content_poster-but"></i> 	
			</div>				 
		</div>	
	</div>
	<div class="page-video-content_video">
		<?php print render($content['field_programm_video'][0]); ?>
	</div>
</div>
<div class="programm-middle">
	<div class="content-center">
		<div class="programm-middle_text static-text">
			<?php print render($content['field_programm_middle'][0]); ?>	
		</div>
		<div class="order-form">
        	<h3 class="order-form_title">
        		<?php $block = module_invoke('webform', 'block_view', 'client-block-3'); print render($block['subject']); ?>
        	</h3>
        	<?php $block = module_invoke('webform', 'block_view', 'client-block-3'); print render($block['content']); ?>
        </div>
        <div class="front-doctors">
			<h2 class="front-doctors_title">
				<?php $block = module_invoke('views', 'block_view', 'doctors-block_1'); print render($block['subject']); ?>
			</h2>
			<?php $block = module_invoke('views', 'block_view', 'doctors-block_1'); print render($block['content']); ?>
		</div>

	</div>
</div>
<div class="page-preim-content">
	<div class="content-center">
		<h2 class="page-preim-content_title">
			<?php $block = module_invoke('views', 'block_view', 'preim-block_1'); print render($block['subject']); ?>	
		</h2>
		<?php $block = module_invoke('views', 'block_view', 'preim-block_1'); print render($block['content']); ?>
	</div>
</div>
<div class="open-programm-bottom">
	<div class="content-center">
		<div class="static-text">
			<?php print render($content['field_programm_bottom'][0]); ?>	
		</div>
	</div>
</div>


<script type="text/javascript">
	// https://developers.google.com/youtube/iframe_api_reference

// global variable for the player
var player;

// this function gets called when API is ready to use
function onYouTubePlayerAPIReady() {
  // create the global player from the specific iframe (#video)
  player = new YT.Player('video', {
    events: {
      // call this function when player is ready to use
      'onReady': onPlayerReady
    }
  });
}

function onPlayerReady(event) {
  
  // bind events
  var playButton = document.getElementById("play-button");
  playButton.addEventListener("click", function() {
    player.playVideo();
  });
  
  
}

// Inject YouTube API script
var tag = document.createElement('script');
tag.src = "//www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
</script>


