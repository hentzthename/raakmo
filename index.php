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
						<img src="images/carousel_1.jpg" alt="Chania">
					</div>
					<div class="item">
						<img src="images/carousel_2.jpg" alt="Chania">
					</div>
					<div class="item">
						<img src="images/carousel_3.jpg" alt="Chania">
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
					<p class="lead text-center">RAAKMO &middot; DJ/Producer &middot; Chicago &middot; 2,200+ SoundCloud Followers </p>
				</div>
				<div class="col-md-5">
					<img class="featurette-image img-fluid center-block" src="images/chicago_skyline.png" alt="Image Load Failed">
				</div>
			</div>
			<hr class="featurette-divider">
			<div class="row featurette">
				<div class="col-md-7 col-md-push-5">
					<h2 class="featurette-heading text-center">Genres</h2>
					<p class="lead text-center">Hard House &middot; Jungle Terror &middot; Trap &middot; Hard and Epic Sounds</p>
				</div>
				<div class="col-md-5 col-md-pull-7">
					<img class="featurette-image img-fluid center-block" src="images/raakmo_44_inverse.png" alt="Image Load Failed">
				</div>
			</div>
			<hr class="featurette-divider">
			<div class="row featurette">
				<div class="col-md-7">
					<h2 class="featurette-heading text-center">Collaborations</h2>
					<p class="lead text-center">Junkie Kid &middot; VOVIII &middot; UNEEK</p>
				</div>
				<div class="col-md-5">
					<img class="featurette-image img-fluid center-block" src="images/collab-.png" alt="Image Load Failed">
				</div>
			</div>
		    <hr class="featurette-divider">
		    <!-- /END THE FEATURETTES -->
		</div>

<?php 

	include 'footer.php';

?>