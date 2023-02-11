<!DOCTYPE html>
<html lang="en">
<head>
	<link href="<?= base_url(); ?>styles.css" rel="stylesheet" type="text/css" media="screen">
	<link href="<?= base_url(); ?>fancybox/source/jquery.fancybox.css?v=2.1.5" rel="stylesheet"type="text/css" media="screen" />
	<title>Freds.com.ph - Baguio</title>
</head>
<body>
<div class="wrapper">
	<div id="header">
		<img src="<?= base_url(); ?>images/logo.png" style="float: left;"/>
		<ul id="menu">
			<li><a class="cold" href="<?= base_url(); ?>baguio">Home</a></li>
			<li><a href="<?= base_url(); ?>baguio/page/gallery">Gallery</a></li>
			<li><a href="<?= base_url(); ?>baguio/page/contact">Contact</a></li>
			<li><a href="<?= base_url(); ?>baguio/page/location">Location</a></li>
			<li class="separator"></li>
			<li><a href="<?= base_url(); ?>baguio/page/roomrates">Unit Rate</a></li>
		</ul><!-- .menu -->
		<div class="clear"></div>
	</div><!-- #header -->
	<div id="content">
		<img src="<?= base_url(); ?>images/Exterior/Exterior1.jpg" />
	</div><!-- #content -->
	<div id="footer" style="background: #ececec; text-align: center; width: 100%; padding: 20px 0px;">
		<h2>8 Greenwater Village, Baguio City, Philippines</h2>
	</div><!-- #footer -->
</div><!-- .wrapper -->

<script src="<?= base_url(); ?>js/jquery-1.10.1.min.js"></script>
<script src ="<?= base_url(); ?>js/view_calendar.js"></script>
<script src = "<?= base_url(); ?>fancybox/source/jquery.fancybox.js?v=2.1.5"></script>

</body>
</html>