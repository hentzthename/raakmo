<?php 

	include 'header.php';

?>

	<div class="container">
		<div class="jumbotron">
	        <center><h1 class="display-2">SoundCloud</h1></center>
	        <iframe id="sc-widget" src="https://w.soundcloud.com/player/?url=/raakmo" width="100%" height="500" scrolling="no" frameborder="no"></iframe>
	    </div>
	</div>

	<div class="container">
		<div class="jumbotron">
	        <center><h1 class="display-2">Twitter</h1></center>
	        <a class="twitter-timeline" href="https://twitter.com/RAAKMO" data-widget-id="712330125447208960">Tweets by @RAAKMO</a>
	    </div>
	</div>


	<div class="container">
		<div class="jumbotron">
	        <center><h1 class="display-2">Facebook</h1></center>
	        	<div class="fb-page" data-href="https://www.facebook.com/Raakmo" data-tabs="timeline" data-width="500" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
	    </div>
	</div>

	<div class="container">
		<div class="jumbotron">
	        <center><h1 class="display-2">Instagram</h1></center>
	        	<script src="http://snapwidget.com/js/snapwidget.js"></script>
				<iframe src="http://snapwidget.com/bd/?u=cmFha21vbXVzaWN8aW58MjAwfDN8MXx8eWVzfDIwfGZhZGVJbnxvblN0YXJ0fHllc3x5ZXM=&ve=220316" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>
		</div>
	</div>
	<script>
		// Added JS directly to page due to errors having it global
		(function(){
		    var widgetIframe = document.getElementById('sc-widget'),
		        widget       = SC.Widget(widgetIframe);

		    widget.bind(SC.Widget.Events.READY, function() {
		        widget.bind(SC.Widget.Events.PLAY, function() {
		          	// get information about currently playing sound
		          	widget.getCurrentSound(function(currentSound) {
		            	//console.log('sound ' + currentSound.get('') + 'began to play');
		          	});
		        });
		        // get current level of volume
		        widget.getVolume(function(volume) {
		          	//console.log('current volume value is ' + volume);
		        });
		        // set new volume level
		        widget.setVolume(50);
		        // get the value of the current position
		    });

		}());
	</script>

<?php 

	include 'footer.php';

?>