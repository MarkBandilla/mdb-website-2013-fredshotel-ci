<!DOCTYPE html>
<html lang="en">
<head>
	<link href="<?= base_url(); ?>styles.css" rel="stylesheet" type="text/css" media="screen">
	<link href="<?= base_url(); ?>fancybox/source/jquery.fancybox.css?v=2.1.5" rel="stylesheet"type="text/css" media="screen" />
	<title>Freds.com.ph - Location</title>
</head>
<body>
<div class="wrapper">
	<input type="hidden" id="final_arr">
	<div id="header">
		<img src="<?= base_url(); ?>images/logo.png" style="float: left;"/>
		<ul id="menu">
			<li><a href="<?= base_url(); ?>baguio">Home</a></li>
			<li><a href="<?= base_url(); ?>baguio/page/gallery">Gallery</a></li>
			<li><a href="<?= base_url(); ?>baguio/page/contact">Contact</a></li>
			<li><a href="<?= base_url(); ?>baguio/page/location">Location</a></li>
			<li class="separator"></li>
			<li><a class="cold" href="<?= base_url(); ?>baguio/page/roomrates">Unit Rate</a></li>
		</ul><!-- .menu -->
		<div class="clear"></div>
	</div><!-- #header -->
	<div id="content">
		<div class="clear"></div>
	</div><!-- #content -->
	<div id="footer" style="background: #ececec; text-align: center; width: 100%; padding: 20px 0px;">
		<h2>8 Greenwater Village, Baguio City, Philippines</h2>
	</div><!-- #footer -->
</div><!-- .wrapper -->

<script src="<?= base_url(); ?>js/jquery-1.10.1.min.js"></script>
<script src ="<?= base_url(); ?>js/view_calendar.js"></script>
<script src ="<?= base_url(); ?>fancybox/source/jquery.fancybox.js?v=2.1.5"></script>

<script>
$(function()
{
	var choice = $('#uchoice').val();
	var pax = $('#pax').val();
	var pricing = choice + "_" + pax;

	$('#UcH').html('Unit A');
	$('#UhD').html('Unit A');
	$('#newNoD').html('0');
	$('#Rat').val(0);
	$('#AdH').html('0');
	
	var top = 0;
	
$('#next').click(function()
	{
		top = top -311.1;
		
		$('#move').animate({
			top: top
		});
		return false;
	})

	$('#prev').click(function()
	{
		top = top + 311.1;
		
		$('#move').animate({
			top: top
		});
		return false;
	})
		
	$('#calendar').load("<?= base_url(); ?>calendar.php?pricing=" + pricing);

	$('#uchoice').change(function()
	{
		$('#Rat').val(0);
		$('#newNoD').html('0');

		text = $("#uchoice>option:selected").text();
		
		choice = $(this).val();
		pricing = choice + "_" + pax;
		
		$('#calendar').load("<?= base_url(); ?>calendar.php?pricing=" + pricing);
		$('#UcH').html(text);
		$('#UhD').html(text);

		var rad = $("input[name=add]:checked").val() * 300;

		$('#Rat').val(rad);
		
		$('#right').css({"display":"block"});
	})

	$('#pax').change(function()
	{
		pax = $(this).val();
		pricing = choice + "_" + pax;

		$('#calendar').load("<?= base_url(); ?>calendar.php?pricing=" + pricing);

		$('#Rat').val(0);
		$('#newNoD').html('0');

		var rad = $("input[name=add]:checked").val() * 300;

		$('#Rat').val(rad);
		
		$('#right').css({"display":"block"});
	})

	$('.add').change(function()
	{
		var ratrat = $('#RatHidOrig').val();
		var per = $(this).val() * 300;

		$('#Rat').val(ratrat*1 + per*1);

		$('#AdH').html($(this).val());
		
		$('#right').css({"display":"block"});
	})

	$('.small_image').fancybox();

	$('#print').click(function()
	{
		if ($('#RatHidOrig').val() != 0)
		{
			var final_arr = $('#final_arr').val();
			var location = "<?= base_url(); ?>print.php?dat=" + final_arr + "&total=" + $('#Rat').val() + "&heads=" + $('#AdH').html() + "&unit=" + $('#UcH').html() + "&persons=" + $("#pax>option:selected").text() + "&personstotal=" + $('#RatHidOrig').val() + "&total=" + $('#Rat').val();
			//alert(location);
			window.location.href = location;
		}
		else
		{
			alert("Select a date")
		}
		/*
		$.ajax
		({
			url: "test_array.php",
			type: "POST",
			data: {dat:final_arr},
			success: function(html)
			{
				alert(html);
			}
		})

		var dates =
		{
			"Aug": 6500
		};

		var pota = JSON.stringify(dates);

		$.ajax
		({
			url: "test_array.php",
			type: "POST",
			data: {dat:pota},
			success: function(html)
			{
				//alert(html);
			}
		})

		console.log($('#final_arr').val());

		//console.log($('#Rat').val());
		//console.log($('#AdH').html());
		*/
	})
})
</script>


</body>
</html>