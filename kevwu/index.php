<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kevin Wu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet/less" type="text/css" href="style.less">
	<link rel="stylesheet" type="text/css" href="jquery.tzineClock/jquery.tzineClock.css" />
	<script src="../js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="../js/vendor/less-1.4.2.min.js"></script>
	<style>
		#fancyClock {
			cursor: pointer;
		}

		#overlay, #overlay2, #overlay3, #overlay4 {
			display: none;
			height: 250px;
			font-size: 12px;
		}

		#countdown {
			font-size: 12px;
		}
	</style>
</head>
<body>
	<div style='border:2px dashed green; width: 160px; height: 160px; padding: 4px'>
		<div id='countdown'>Counting down the seconds till when you come back...</div>
		<div id='fancyClock' style="height:50px; width: 160px"></div>
		<div id='overlay'>Miss</div>
		<div id='overlay2'>You</div>
		<div id='overlay3'>Already!</div>
	</div>		

	<!-- Javascript below -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
	<script src="jquery.tzineClock/jquery.tzineClock.js"></script>
	<script src="../js/plugins.js"></script>
	<script>
		// $(function() {
		// 	var topDoc = $(top.document);
		// })
		$(document).ready(function(){
			$('#fancyClock').tzineClock();
			$('#fancyClock').hover(function(){
				$('#fancyClock').css('background-color', '#fefdf2');
				$('.clock').css('background-color', '#fefdf2');
				$('.clock .bg, .clock .front').css('background-color', '#fefdf2');

			}, function () {
				$('#fancyClock').css('background-color', '#edece1');
				$('.clock').css('background-color', '#edece1');
				$('.clock .bg, .clock .front').css('background-color', '#edece1');
			});
			$('#fancyClock').click(function() {
				$('#overlay').fadeIn().delay(0).fadeOut('slow');
				$('#overlay2').delay(1000).fadeIn().delay(0).fadeOut('slow');
				$('#overlay3').delay(2000).fadeIn().delay(3000).fadeOut('slow');
			});
		});
	</script>
</body>
</html>
