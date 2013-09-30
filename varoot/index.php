<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Varoot</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="jquery.mCustomScrollbar.css">
	<link rel="stylesheet/less" type="text/css" href="style.less?v=5">
	<script src="../js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="../js/vendor/less-1.4.2.min.js"></script>
</head>
<body>
	<div class="content" data-pages="3">
		<div class="layer" data-height="576">
			<img src="layer0.jpg" width="192" height="576">
		</div>
		<div class="layer" data-height="768">
			<img src="layer1.png" width="192" height="768">
		</div>
		<div class="layer" data-height="1152">
			<img src="layer2.png" width="192" height="1152">
		</div>
		<div class="layer" data-height="1536">
			<img src="layer3.png" width="192" height="1536">
		</div>
		<div class="layer" data-height="1728">
			<img src="layer4.png" width="192" height="1728">
		</div>
	</div>
	<div class="nav">
		<div>
			<button id="btn-up"><span>▲</span></button>
		</div>
		<div>
			<button id="btn-down"><span>▼</span></button>
		</div>
	</div>

	<!-- Javascript below -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
	<script src="../js/plugins.js"></script>
	<script src="jquery.mousewheel.min.js"></script>
	<script src="jquery.transit.min.js"></script>
	<script>
		$(function() {
			var content = $('.content').first();
			var currentPage = 0;
			var pageHeight = 192;
			var numPages = +content.data('pages');

			function scrollToPage(page) {
				if (page < 0 || page >= numPages) return;
				
				content.find('.layer').each(function(i,e) {
					var l = $(e);
					var h = +l.data('height');
					var top = page*(h - pageHeight)/(numPages-1);
					l.transition({top: -top}, 800, 'easeInOutCubic');
				});

				currentPage = page;
			}

			$('#btn-up').click(function() {
				scrollToPage(currentPage - 1);
			});
			$('#btn-down').click(function() {
				scrollToPage(currentPage + 1);
			});

			$('body').mousewheel(function(event, delta, deltaX, deltaY) {
				scrollToPage(currentPage - deltaY);
			});
		})
	</script>
</body>
</html>
