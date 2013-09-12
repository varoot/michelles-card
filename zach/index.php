<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Zach</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet/less" type="text/css" href="style.less">
	<script src="../js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="../js/vendor/less-1.4.2.min.js"></script>
</head>
<body>
	<div>♥</div>
	<!-- <div>❤</div> -->

	<!-- Javascript below -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
	<script src="../js/plugins.js"></script>
	<script>
		$(function() {
			var topDoc = $(top.document);

			var changeColor = function () {
				var hex = Math.floor(Math.random() * 0xffffff)
				document.body.style.background = '#'+ ('00000' + hex.toString(16)).slice(-6)
				document.body.style.color = '#' + ('00000' + (0xffffff - hex).toString(16)).slice(-6)
				
				setTimeout(changeColor, 1000)
			}

			changeColor();
		})
	</script>
</body>
</html>
