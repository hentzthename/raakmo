<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Theme Template for Bootstrap</title>

	<!-- Custom styles for this template -->
	<link href="/css/theme.css" rel="stylesheet">

	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.css" rel="stylesheet">
	<!-- Bootstrap theme -->
	<!-- <link href="/css/bootstrap-theme.min.css" rel="stylesheet"> -->

	<!-- Soundcloud plugin -->
	<script src="https://w.soundcloud.com/player/api.js" type="text/javascript"></script>

	<!-- Twitter plugin -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

	<!-- Facebook plugin -->
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body role="document">

	<!-- Fixed navbar -->
	<nav class="navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header center-block">
				<img class="navbar-brand" src="/images/RAAKMO_TEXT.png">
			</div>
			<div id="navbar" class="navbar-collapse collapse">
			<!-- Commented out navbar options until the other pages are functional -->
				<ul class="nav navbar-nav">
			    	<li class="active"><a href="/index.php">Home</a></li>
			    	<li><a href="/media.html">Media</a></li>
			    	<li><a href="/events.html">Events</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a id="media_icons" href="https://www.facebook.com/Raakmo/" target="_blank"><img src="/images/media/facebook.png"></a></li>
					<li><a id="media_icons" href="https://soundcloud.com/raakmo" target="_blank"><img src="/images/media/soundcloud.png"></a></li>
					<li><a id="media_icons" href="https://twitter.com/raakmo" target="_blank"><img src="/images/media/twitter.png"></a></li>
					<li><a id="media_icons" href="https://www.instagram.com/raakmomusic/" target="_blank"><img src="/images/media/insta.png"></a></li>
				</ul>
			</div>
		</div>
	</nav>


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
					<img src="/images/carousel_1.jpg" alt="Chania">
				</div>
				<div class="item">
					<img src="/images/carousel_2.jpg" alt="Chania">
				</div>
				<div class="item">
					<img src="/images/carousel_3.jpg" alt="Chania">
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
					<img class="featurette-image img-fluid center-block" src="/images/chicago_skyline.png" alt="Image Load Failed">
				</div>
			</div>

		<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-7 col-md-push-5">
					<h2 class="featurette-heading text-center">Genres</h2>
					<p class="lead text-center">Hard House &middot; Jungle Terror &middot; Trap &middot; Hard and Epic Sounds</p>
				</div>
			<div class="col-md-5 col-md-pull-7">
				<img class="featurette-image img-fluid center-block" src="/images/raakmo_44_inverse.png" alt="Image Load Failed">
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
		
	<div id="footer" class="footer">
		Business Inquiries: raakmomusic@gmail.com
	</div>

	<!-- <form id="footer" class="footer form-horizontal" role="form" method="post" action="index.php">
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
			</div>
		</div>
		<div class="form-group">
			<label for="message" class="col-sm-2 control-label">Message</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="4" name="message"></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<! Will be used to display an alert to the user>
			</div>
		</div>
	</form> -->

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>

	<script src="/js/jquery-1.12.1.js"></script>
	<script src="/js/bootstrap.js"></script>
	<script src="https://w.soundcloud.com/player/api.js" type="text/javascript"></script>
	<script src="/js/custom.js"></script>
</body>
</html>
