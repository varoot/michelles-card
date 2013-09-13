<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Matt</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" type="text/css" href="../matt/normalize.css">
	<link rel="stylesheet/less" type="text/css" href="style.less">
	<script src="../js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="../js/vendor/less-1.4.2.min.js"></script>
</head>
<style>
	div
	{
	width:192px;
	height:192px;
	/*background:red;*/
	animation:myfirst 20s;
	-webkit-animation:myfirst 20s; /* Safari and Chrome */
	animation-iteration-count: infinite;
	-webkit-animation-iteration-count:infinite;
	}

	@keyframes myfirst
	{
		0%   {background:red;}
		20%  {background:yellow;}
		45%  {background:blue;}
		70%  {background:green;}	
		100% {background:red;}
	}

	@-webkit-keyframes myfirst /* Safari and Chrome */
	{
		0%   {background:red;}
		20%  {background:yellow;}
		45%  {background:blue;}
		70%  {background:green;}
		100% {background:red;}
	}
</style>
<body>
	<div>
		<!-- Your message here -->
		It's been a blessing to have you in web team! 
		<br /><br />
		I hope you'll remember everything that God has taught you in Ann Arbor when you go back to Korea! Stay faithful to Jesus, because He'll stay faithful to you! Be safe, and don't stress out too much :)
		<br /><br />
		Don't miss us too much! God bless~
		<br /><br />
		PS. Hover over this block!
	</div>

	<!-- Javascript below -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
	<script src="../js/plugins.js"></script>
	<script>
		$(function() {
			var topDoc = $(top.document);
		})
	</script>
</body>
</html>
