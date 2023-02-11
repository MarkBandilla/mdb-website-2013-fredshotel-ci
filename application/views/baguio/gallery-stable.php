<!DOCTYPE html>
<html lang="en">
<head>
	<link href="<?= base_url(); ?>styles.css" rel="stylesheet" type="text/css" media="screen">
	<script src="<?= base_url(); ?>js/jquery-1.10.1.min.js"></script>
	<title>Freds.com.ph - BaguioGallery</title>
</head>
<body>
<div class="wrapper">
	<div id="header">
		<img src="<?= base_url(); ?>images/logo.png" style="float: left;"/>
		<ul id="menu">
			<li><a href="<?= base_url(); ?>baguio">Home</a></li>
			<li><a class="cold" href="<?= base_url(); ?>baguio/page/gallery">Gallery</a></li>
			<li><a href="<?= base_url(); ?>baguio/page/contact">Contact</a></li>
			<li><a href="<?= base_url(); ?>baguio/page/location">Location</a></li>
			<li class="separator"></li>
			<li><a href="<?= base_url(); ?>baguio/page/roomrates">Unit Rate</a></li>
		</ul><!-- .menu -->
		<div class="clear"></div>
	</div><!-- #header -->
		<div id="content">
			<div class="left">
				<select id="unit">
					<option value="A">Unit A</option>
					<option value="B">Unit B</option>
					<option value="C">Unit C</option>
					<option value="D">Unit D</option>
				</select>
				<ul class="thumbs">
					
				</ul><!-- .thumbs -->
				
			</div><!-- .left -->
			<div class="right">
				<img id="fullview" src="<?= base_url(); ?>images/full/A/A_1_full.JPG" />
			</div><!--.right -->
			<div class="clear"></div>			
		</div><!-- #content -->
	<div id="footer" style="background: #ececec; text-align: center; width: 100%; padding: 20px 0px;">
		<h2>8 Greenwater Village, Baguio City, Philippines</h2>
	</div><!-- #footer -->
</div><!-- .wrapper -->
	<script>
		$("#unit").change(function(){			
			//alert($("#unit").val());
			var unit = $(this).val()
			//alert(unit);
			
			loadthumb(unit);
			return false;
		})
		
		function loadthumb(unit) {
			//alert(unit);
			switch (unit) {
				case ("A"):
					//alert("Unit A");
					$(".thumbs").load('<?= base_url(); ?>baguio/gallery/thumb_a');
				break;
				case "B":
					//alert("Unit B");
					$(".thumbs").load('<?= base_url(); ?>baguio/gallery/thumb_b');
				break;
				case "C":
					//alert("Unit C");
					$(".thumbs").load('<?= base_url(); ?>baguio/gallery/thumb_c');
				break;
				case "D":
					//alert("Unit D");
					$(".thumbs").load('<?= base_url(); ?>baguio/gallery/thumb_d');
				break;
				default:
					//alert("Unit A");
					$(".thumbs").load('<?= base_url(); ?>baguio/gallery/thumb_a');
				break;
			}
		}
		loadthumb("A");
	</script>
</body>
</html>

