<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
	<title><?php echo $title ?></title>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<link rel="icon"  type="image/png"   href="<?php echo base_url(); ?>public/images/favicon.ico">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
	<link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet" type="text/css"  />
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/sitewide.js"></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>public/scripts/respond.min.js'></script>
</head>
<body>
	<div id="banner">actively learning web technologies ... extending my capabilities ... discussing and sharing interesting techniques ... developing new competencies ... discovering useful skill sets...faster every day, more efficient every hour</div>
	<div id="wrapper">
		<header>
			<nav id="sitenav">
				<a href="<?php echo base_url(); echo index_page();?>/home" title="Home">Home</a>
				<a href="<?php echo base_url(); echo index_page();?>/useful" title="Useful">Useful</a>
				<a href="<?php echo base_url(); echo index_page();?>/sites" title="Work">Work</a>
				<a href="<?php echo base_url(); echo index_page();?>/user/registration" title="Features">Features</a>
				<a href="<?php echo base_url(); echo index_page();?>/user/logout" title="Logout">Logout</a>
			</nav>
		</header>
