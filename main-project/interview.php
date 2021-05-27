<?php $time = $_GET['time'];?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div id="play-button">
		Start Interview
	</div>
	<div id="subtitle-container">
		
	</div>

	<div id="video-container">
		<video loop src="krenak.mp4" data-start-time="<?php echo $time;?>">
			<track label="English" kind="subtitles" src="captionskrenak.vtt" srclang="en" default>
		</video>
	</div>

	<div id="interview-information">
		<p>
			An interview with <em>Talita Virgínia de Lima</em><br/>
			Recorded on May 27 2021
		</p>
	</div>

	<nav>
		<a href="index.html">Return</a>
	</nav>

	<div class="media-container">
		<div id="media-item-1">
			<img src="media/krenak2.jpg">
		</div>
		<div id="media-item-2">
			<img src="media/krenak1.jpg">
		</div>
		<div id="media-item-3">
			<img src="media/krenak3.jpg">
		</div>
		<div id="media-item-4">
			<video autoplay loop muted playsinline src="media/cut.mp4"></video>
		</div>
	</div>
	<script type="text/javascript" src="script.js"></script>	

</body>
</html>

