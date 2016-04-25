<?php 

	include 'header.php';

?>

		<div class="c-wrapper">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="images/website_banner_1.png" alt="Chania">
					</div>
					<div class="item">
						<img src="images/website_banner_2.png" alt="Chania">
					</div>
					<div class="item">
						<img src="images/website_banner_3.png" alt="Chania">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<!-- START THE FEATURETTES -->
		<div id="about">
			<hr class="featurette-divider">
			<div class="row featurette">
				<div class="col-md-7">
					<h2 class="featurette-heading text-center">Bio</h2>
					<p class="lead text-center">Raakmo is a DJ / Producer out of the Chicago area.  Whether it be in one of Chicago's packed clubs or a 3,000 person pool party in Daytona Beach, Raakmo always provides the audience with his high energy and captivating music.  When he's not DJing, his passion for music doesn't slow down.  As a talented producer, Raakmo applies his passion and knowledge for music in the studio.  Whether it be hard house, jungle terror, trap, or hardstyle, his melodic, hard hitting, and unique sounds have captured the attention of many big players in the music industry, gaining their support by being featured on their podcasts and live sets.  With a stash of new music ready for release along with a busy schedule of upcoming live shows, Raakmo is on the rise and is taking the music game by storm. </p>
				</div>
				<div class="col-md-5">
					<img class="featurette-image img-fluid center-block" src="images/evil_olive_dj.png" alt="Image Load Failed">
				</div>
			</div>
			<hr class="featurette-divider">
			<!-- <div class="row featurette">
				<div class="col-md-7 col-md-push-5">
					<h2 class="featurette-heading text-center">Genres</h2>
					<p class="lead text-center">Hard House &middot; Jungle Terror &middot; Trap &middot; Hard and Epic Sounds</p>
				</div>
				<div class="col-md-5 col-md-pull-7">
					<img class="featurette-image img-fluid center-block" src="images/raakmo_44_inverse.png" alt="Image Load Failed">
				</div>
			</div>
			<hr class="featurette-divider"> -->
			<!-- <div class="row featurette">
				<div class="col-md-7">
					<h2 class="featurette-heading text-center">Collaborations</h2>
					<p class="lead text-center">Junkie Kid &middot; VOVIII &middot; UNEEK</p>
				</div>
				<div class="col-md-5">
					<img class="featurette-image img-fluid center-block" src="images/collab-.png" alt="Image Load Failed">
				</div>
			</div>
		    <hr class="featurette-divider"> -->
		    <!-- /END THE FEATURETTES -->
		</div>

		<a class="anchor" id="media_link"></a>
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