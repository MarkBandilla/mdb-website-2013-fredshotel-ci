<!DOCTYPE html>
<html lang="en">
<head>
	<link href="<?= base_url(); ?>styles.css" rel="stylesheet" type="text/css" media="screen">
	<link href="<?= base_url(); ?>fancybox/source/jquery.fancybox.css?v=2.1.5" rel="stylesheet"type="text/css" media="screen" />
	<script src="<?= base_url(); ?>js/jquery-1.10.1.min.js"></script>
	<title>Freds.com.ph - Baguio</title>
</head>
<body>
<div class="wrapper">
	<div id="header">
		<img src="<?= base_url(); ?>images/logo.png" style="float: left;"/>
		
		<ul id="menu">
			<li><a class="cold selected" href="<?= base_url(); ?>baguio">Home</a></li>
			<li><a href="<?= base_url(); ?>baguio/page/gallery">Facilities</a></li>
			<li><a href="<?= base_url(); ?>baguio/page/contact">Contact</a></li>
			<li><a href="<?= base_url(); ?>baguio/page/location">Location</a></li>
			<li class="separator"></li>
			<li><a href="<?= base_url(); ?>baguio/page/roomrates">Unit Rate</a></li>
		</ul><!-- .menu -->
		<div class="clear"></div>
	</div><!-- #header -->
	<script>
	$(function(){
		$('#features img:gt(0)').hide();
		setInterval(function(){$('#features :first-child').fadeOut().next('img').fadeIn().end().appendTo('#features');}, 3000);
	});
	</script>
	<div id="content">
		<!--img src="<?= base_url(); ?>images/Exterior/Exterior1.jpg" /-->
		<br>
		<div id="features">
			<img src="<?= base_url(); ?>images/Exterior/Extr1.jpg" style="display: inline;">
			<img src="<?= base_url(); ?>images/Exterior/Extr2.jpg" style="display: none;">
			<img src="<?= base_url(); ?>images/Exterior/Extr3.jpg" style="display: none;">
			<img src="<?= base_url(); ?>images/Exterior/Extr4.jpg" style="display: none;">
		</div><!-- features -->
		<div id="welcome">
			<div class="left">
				<h2 class="warm">Welcome</h2>
				<div class="left" style="padding: 20px 0px; width: 220px;">
					<img src="<?= base_url(); ?>images/welcome_image.jpg" >
				</div><!-- left -->
				<div class="right" style="width: 340px; padding-top: 10px;">
					<p style="color: #8bc7c9; font: normal 12px/200% 'verdana';"><span style="color: white;"></p>
					<div class="btn"><a href="<?= base_url(); ?>baguio/page/location"><img src="<?= base_url(); ?>images/location_btn.jpg"></img></a></div>
				</div><!-- right -->
			</div><!-- left -->
			<div class="right">
				<a href="<?= base_url(); ?>baguio/page/roomrates"><img src="<?= base_url(); ?>images/calendar.jpg" style="margin: 20px;"></a>
			</div><!-- right -->
		</div><!-- welcome -->
		
		<div class="clear"></div>
		
		<div id="facilities">
			<h2 class="warm" style="padding: 20px 0px;">Our Facility:</h2>
			<ul>
				<li class="first"><h2>Rooms</h2><a href="<?= base_url(); ?>baguio/page/gallery"><img src="<?= base_url(); ?>images/facilities/rooms.jpg"></a></li>
				<li><h2>Kitchen</h2><a href="<?= base_url(); ?>baguio/page/gallery"><img src="<?= base_url(); ?>images/facilities/kitchen.jpg"></a></li>
				<li><h2>Living Room</h2><a href="<?= base_url(); ?>baguio/page/gallery"><img src="<?= base_url(); ?>images/facilities/living.jpg"></a></li>
				<li class="last"><h2>Bath Room</h2><a href="<?= base_url(); ?>baguio/page/gallery"><img src="<?= base_url(); ?>images/facilities/bath.jpg"></a></li>
				<div class="clear"></div>
			</ul><!-- facilities -->
			<br>
			<div>
			<p style="float: left; margin-top: 10px; font-family: verdana;"></p>
			<div class="btn"><a href="<?= base_url(); ?>baguio/page/gallery"><img src="<?= base_url(); ?>images/facility_btn.jpg" style="margin-top: 0px;"></img></a></div>
			<div class="clear"></div>
			</div>
			<br>
		</div>
		<br>
	</div><!-- #content -->
	<div id="footer" style="background: #ececec; text-align: center; width: 100%; padding: 20px 0px;">
		<h2>8 Greenwater Village, Baguio City, Philippines</h2>
	</div><!-- #footer -->
</div><!-- .wrapper -->



</body>
</html>