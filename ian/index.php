<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ian Lai</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet/less" type="text/css" href="style.less">
	<script src="../js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="../js/vendor/less-1.4.2.min.js"></script>
</head>
<body>
	<div>
		<canvas id="canvasRegn" width="192" height="192"></canvas>
	</div>

	<!-- Javascript below -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
	<script src="../js/plugins.js"></script>
	<script>
		$(function() {
			var topDoc = $(top.document);
		})
		var ctx;
		var imgBg;
		var imgDrops;
		var width = 192;
		var height = 192;
		var imageSize = 50;
		var x = 0;
		var y = 0;
		var noOfDrops = 40;
		var fallingDrops = [];

		function draw() {
			// Clear background before redrawing
			ctx.clearRect (0, 0, width, height);
			for (var i=0; i< noOfDrops; i++)
			{
				ctx.drawImage (fallingDrops[i].image, fallingDrops[i].x, fallingDrops[i].y); //The rain drop

				fallingDrops[i].y += fallingDrops[i].speed; //Set the falling speed
				if (fallingDrops[i].y > height) {  //Repeat the raindrop when it falls out of view
					fallingDrops[i].y = -imageSize //Account for the image size
					fallingDrops[i].x = Math.random() * (width + imageSize) - imageSize;    //Make it appear randomly along the width    
				}			
			}
		}

		function setup() {
			var canvas = document.getElementById('canvasRegn');

			if (canvas.getContext) {
				ctx = canvas.getContext('2d');
				setInterval(draw, 36);
				for (var i = 0; i < noOfDrops; i++) {
					var fallingDr = new Object();
					fallingDr["image"] =  new Image();
					if(i%10)
						fallingDr.image.src = 'cookie.png';
					else
						fallingDr.image.src = 'cake.png';	

					fallingDr["x"] = Math.random() * (width + imageSize) - imageSize;
					fallingDr["y"] = Math.random() * height - (imageSize / 2);
					if(i%10)
						fallingDr["speed"] = 3 + Math.random() * 5;
					else
						fallingDr["speed"] = 3 + Math.random() * 2;
					fallingDrops.push(fallingDr);
				}
			}
		}
		setup();
	</script>
</body>
</html>
