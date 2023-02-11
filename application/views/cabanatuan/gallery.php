<!DOCTYPE html>
<html lang="en">
<head>
	<link href="<?php echo base_url();?>styles.css" rel="stylesheet" type="text/css" media="screen">
	<link href="<?php echo base_url();?>fancybox/source/jquery.fancybox.css?v=2.1.5" rel="stylesheet"type="text/css" media="screen" />
	<script src="<?php echo base_url();?>js/jquery-1.10.1.min.js"></script>
	<title>Freds.com.ph - Gallery</title>
</head>
<body>
<div class="wrapper">
	<div id="header">
		<img src="<?php echo base_url();?>images/logo_cab.png" style="float: left;"/>
		<ul id="menu">
			<li><a href="<?php echo base_url();?>cabanatuan">Home</a></li>
			<li><a href="<?php echo base_url();?>cabanatuan/page/dining">Dining</a></li>
			<li><a href="<?php echo base_url();?>cabanatuan/page/events">Meeting & Events</a></li>
			<li><a href="<?php echo base_url();?>cabanatuan/page/gallery">Gallery</a></li>
			<li><a href="<?php echo base_url();?>cabanatuan/page/contact">Contact</a></li>
			<li><a href="<?php echo base_url();?>cabanatuan/page/location">Location</a></li>
			<li class="separator"></li>
			<li><a href="<?php echo base_url();?>cabanatuan/page/rates">Rates</a></li>
		</ul><!-- .menu -->
		<div class="clear"></div>
	</div><!-- #header -->
		<div id="content">
			<center>
			<br><br>
			<table width="100%" cellpadding="0">
<tbody>
<tr>
<td rowspan="19"><img src="<?php echo base_url();?>images/gallery/freds-cab-01.jpg" id="fullimg" border="0" alt="" style="float: left;"></td>
</tr>
<tr>
<td>
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td style="text-align: center;"><strong>FACILITIES:</strong></td>
</tr>
<tr>
<td style="text-align: center;">21 Airconditioned rooms</td>
</tr>
<tr>
<td style="text-align: center;">Wifi ready</td>
</tr>
<tr>
<td style="text-align: center;">Cable TVs</td>
</tr>
<tr>
<td style="text-align: center;">Private bathroom plus hot & cold Shower</td>
</tr>
<tr>
<td style="text-align: center;">Business services (email, fax and photocopy)</td>
</tr>
<tr>
<td style="text-align: center;">Round-the-clock parking area security</td>
</tr>
<tr>
<td style="text-align: center;">Full load generator</td>
</tr>
<tr height=50>
<td></td>
</tr>
<tr>
	<td>
		<center>
		<table>
		<tr>
			<td><a href="" class="thumb" fulllink="freds-cab-01.jpg"><img src="<?php echo base_url();?>images/gallery/freds-cab-t01.jpg" /></a></td>
			<td><a href="" class="thumb" fulllink="freds-cab-02.jpg"><img src="<?php echo base_url();?>images/gallery/freds-cab-t02.jpg" /></a></td>
			<td><a href="" class="thumb" fulllink="freds-cab-05.jpg"><img src="<?php echo base_url();?>images/gallery/freds-cab-t05.jpg" /></a></td>
		</tr>
		<tr>
			<td><a href="" class="thumb" fulllink="freds-cab-03.jpg"><img src="<?php echo base_url();?>images/gallery/freds-cab-t03.jpg" /></a></td>
			<td><a href="" class="thumb" fulllink="freds-cab-04.jpg"><img src="<?php echo base_url();?>images/gallery/freds-cab-t04.jpg" /></a></td>
			<td><a href="" class="thumb" fulllink="freds-cab-06.jpg"><img src="<?php echo base_url();?>images/gallery/freds-cab-t06.jpg" /></a></td>
		</tr>
		</table>
		</center>
	</td>
</tr>
</tbody>
</table>
			</center>
			<br><br>
		</div><!-- #content -->
		<div id="footer" style="background: #ececec; text-align: center; width: 100%; padding: 20px 0px;">
			<h2>728 Victoria Subdivision, Bitas, Cabanatuan City, Nueva Ecija, Philippines</h2>
		</div><!-- #footer -->
	</div><!-- .wrapper -->
	
	
<script>
	$('.thumb').click(function(){
		link = $(this).attr('fulllink');
		$('#fullimg').attr('src','<?php echo base_url();?>images/gallery/'+link);
		return false;
	});
</script>
</body>
</html>

