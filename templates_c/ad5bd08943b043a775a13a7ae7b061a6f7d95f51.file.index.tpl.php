<?php /* Smarty version Smarty-3.1.12, created on 2012-10-07 15:39:58
         compiled from "templates/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:716285730507163187c0dd9-98012711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad5bd08943b043a775a13a7ae7b061a6f7d95f51' => 
    array (
      0 => 'templates/admin/index.tpl',
      1 => 1349609996,
      2 => 'file',
    ),
    'e42794c2a7b8df708b9ca9952b7970763dfc7074' => 
    array (
      0 => '/var/www/mans/templates/admin/main.tpl',
      1 => 1349609928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '716285730507163187c0dd9-98012711',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_507163187f48c9_89845097',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507163187f48c9_89845097')) {function content_507163187f48c9_89845097($_smarty_tpl) {?><!DOCTYPE html>
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
						
<legend>Admin panel</legend>

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

<?php }} ?>