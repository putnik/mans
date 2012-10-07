<!DOCTYPE html>
<html lang="srp">
	<head>
		<meta charset="utf-8">
		<title>Admin panel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<link href="static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
			.sidebar-nav {
				padding: 9px 0;
			}
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="#">Admin panel</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span2">
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							<li class="nav-header">Menu</li>
							<li><a href="docs.php">Documents</a></li>
							<li><a href="issues.php">Issue types</a></li>
							<li><a href="insts.php">Institutions</a></li>
							<li><a href="cities.php">Cities</a></li>
						</ul>
					</div>
				</div>
				<div class="span10">
					<div class="well">
						{block name="content"}{/block}
					</div>
				</div>
			</div>

			<hr>

			<footer>
				<p></p>
			</footer>

		</div><!--/.fluid-container-->

		<!-- Javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="static/js/jquery.min.js"></script>
		<script src="static/bootstrap/js/bootstrap.min.js"></script>

	</body>
</html>

