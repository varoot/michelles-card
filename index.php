<?php
	$webteam = array('bo', 'varoot', 'pandrew', 'rachel', 'sj', 'ian', 'david', 'phil', 'kevwu', 'qi', 'zach', 'kevchang', 'chris', 'matt');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Michelle's Card</title>
	<meta name="description" content="We love you :)">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
	<div class="card-floater">Hello, World</div>
	<div class="card-main">
		<ul>
			<li><div class="card-block card-dear">Dear Michelle</div>
		<?php
		shuffle($webteam);
		for ($i = 0; $i < count($webteam); $i++)
		{
			if ($i > 0 and $i % 5 == 4)
			{
				echo '</ul><ul>';
			}
			echo '<li><iframe class="card-block" src="'.$webteam[$i].'/" scrolling="no"></iframe>';
		}
		?>
		</ul>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
	<script src="js/plugins.js"></script>
</body>
</html>
