<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/3dstyle.css">
	<link rel="stylesheet" href="css/vstyle.css">
	<link rel="stylesheet" href="css/style-me.css">
	<script src="js/modernizr.js"></script>

	<title>Pathways</title>
</head>
<body>
<div id="overlay"> Pathways | Loading... </div>
<div id="god" data-parallax="scroll" data-image-src="img/bg3.jpg" style="min-height: 100vh;">
	<header class="cd-header">
		<a class="cd-logo">Pathways</a>
		<a class="cd-3d-nav-trigger">
			Menu
			<span></span>
		</a>
	</header>
	
	<main>
		<div class="port" id="port-home">
			<?php include('feed.php'); ?>
		</div>
		<div class="port" id="port-event">
				<div id="einfo" class="info">
				<p>Pathways came into being to give a well deserving farewell to the people who spent their valuable time in shaping our future - our teachers...</p><br>
					<center><div class="jRCG1"></div></center>
					<br>
					<p>And now, here goes the story of how Pathways came into being! </p><br>
					<center><img src="img/strip.png" class="img-responsive" /></center>
				</div>
		</div>
		<div class="port" id="port-gallery">
			<?php include('gallery.php'); ?>
		</div>
		<div class="port" id="port-contact">
			<div id="cinfo" class="info">
				Facebook: <a href="http://facebook.com/events/1733173413619934">Event Pathways</a><br><br>
				Mobile: +91-8574560500<br><br>
				E-mail: anubhav.ssd@gmail.com<br>
			</div>
		</div>
	</main>
	
	<nav class="cd-3d-nav-container">
		<ul class="cd-3d-nav">
			<li>
				<a name="home">Home</a>
			</li>

			<li>
				<a name="event">The Event</a>
			</li>

			<li>
				<a name="gallery">Gallery</a>
			</li>
			<li>
				<a name="contact">Contact</a>
			</li>
		</ul>
		<span class="cd-marker color-1"></span>	
	</nav>
	</div>
	 <footer>
		<center><a href="http://twitter.com/xprilion">&copy; Anubhav Singh | @xprilion</a></center>
	</footer> 
	<input style="display: none;" type="number" id="eve" value="0"></input>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/3d.js"></script>
<script src="js/v.js"></script>
<script src="js/script-me.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/snapGallery.js"></script>
<script src="js/jRCarousel.min.js"></script>

<img style="display: none;" src="img/t/skj2.jpg" />
<img style="display: none;" src="img/t/mp2.jpg" />
<img style="display: none;" src="img/t/ps2.jpg" />
<img style="display: none;" src="img/t/at2.jpg" />
<img style="display: none;" src="img/t/ng2.jpg" />
<img style="display: none;" src="img/t/sn2.jpg" />
<img style="display: none;" src="img/bg3.jpg" />
<img style="display: none;" src="img/strip.png" />
</body>
</html>