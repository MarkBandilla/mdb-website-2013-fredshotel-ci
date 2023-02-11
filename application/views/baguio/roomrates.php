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
			<li><a href="<?= base_url(); ?>baguio/page/gallery">Facilities</a></li>
			<li><a href="<?= base_url(); ?>baguio/page/contact">Contact</a></li>
			<li><a href="<?= base_url(); ?>baguio/page/location">Location</a></li>
			<li class="separator"></li>
			<li><a class="cold selected" href="<?= base_url(); ?>baguio/page/roomrates">Unit Rate</a></li>
		</ul><!-- .menu -->
		<div class="clear"></div>
	</div><!-- #header -->
	<div id="content">
		<br><br>
		<div id="left">
			
			<div id="calendar-container" >
				
				<div id="calendar"></div>
				<div id = "prev-next" style="position:absolute; width: 485px; margin: -5px 5px;">
					<a href="" id="prevs" class="left"><img src="<?= base_url(); ?>images/left.png" width="35"></a>
					<a href="" id="nexts" class="right"><img src="<?= base_url(); ?>images/right.png" width="35"></a>
				<div class="clear"></div>
				</div>
			</div><!-- #calendar-container -->
		</div><!-- #left -->


		<div id="right">
			<h1 id="UhD">Unit A</h1>
			<table id="selection">
				<tr>
					<td>Unit Choice</td>
					<td>
						<select id = "uchoice">
							 <option value = "pricing_a">Unit A</option>
							 <option value = "pricing_bcd">Unit B</option>
							 <option value = "pricing_bcd">Unit C</option>
							 <option value = "pricing_bcd">Unit D</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>No. of persons</td>
					<td>
						<select id = "pax">
							<option value = "8pax"> 8 persons or less </option>
							<option value = "12pax"> 10 - 12 persons </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Additional Heads</td>
					<td>
						<input type = "radio" name = "add" value = "0" class = "add first" checked> 0
						<input type = "radio" name = "add" value = "1" class = "add"> 1
						<input type = "radio" name = "add" value = "2" class = "add"> 2
						<input type = "radio" name = "add" value = "3" class = "add"> 3
					</td>
				</tr>
			</table><!-- #selection -->
			<div id = "fancybox">
				<ul id = "fancybox0">
					<li> <a href = "<?= base_url(); ?>images/Unit A/_MG_9338.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit A/_MG_9338_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit A/_MG_9340.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit A/_MG_9340_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit A/_MG_9356.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit A/_MG_9356_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit A/_MG_9380.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit A/_MG_9380_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit A/_MG_9390.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit A/_MG_9390_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit A/_MG_9401.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit A/_MG_9401_thumb.jpg"> </a> </li>
				</ul>

				<ul id = "fancybox1">
					<li> <a href = "<?= base_url(); ?>images/Unit B/_MG_9209.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit B/_MG_9209_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit B/_MG_9230.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit B/_MG_9230_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit B/_MG_9278.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit B/_MG_9278_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit B/_MG_9314.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit B/_MG_9314_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit B/_MG_9460.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit B/_MG_9460_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit B/_MG_9480.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit B/_MG_9480_thumb.jpg"> </a> </li>
				</ul>

				<ul id = "fancybox2">
					<li> <a href = "<?= base_url(); ?>images/Unit C/_MG_9504.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit C/_MG_9504_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit C/_MG_9520.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit C/_MG_9520_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit C/_MG_9537.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit C/_MG_9537_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit C/_MG_9560.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit C/_MG_9560_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit C/_MG_9571.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit C/_MG_9571_thumb.jpg"> </a> </li>
				</ul>

				<ul id = "fancybox3">
					<li> <a href = "<?= base_url(); ?>images/Unit D/_MG_9581.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit D/_MG_9581_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit D/_MG_9606.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit D/_MG_9606_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit D/_MG_9610.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit D/_MG_9610_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit D/_MG_9623.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit D/_MG_9623_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit D/_MG_9643.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit D/_MG_9643_thumb.jpg"> </a> </li>
					<li> <a href = "<?= base_url(); ?>images/Unit D/_MG_9646.JPG" class = "small_image"> <img src = "<?= base_url(); ?>images/Unit D/_MG_9646_thumb.jpg"> </a> </li>
				</ul>
			</div><!-- #fancybox -->
			<div class="clear"></div>

			<div id="left" style="width: 270px;">
				<table cellspacing = "10">
					<tr>
						<td> No of days: </td>
						<td id = "newNoD"> </td>
					</tr>
					<tr>
						<td> Add. Heads: </td>
						<td id = "AdH"> </td>
					</tr>
					<tr>
						<td> Unit choice: </td>
						<td id = "UcH">  </td>
					</tr>
					<tr>
						<td> Rates: </td>
						<td> P <input type = "text" id = "Rat" disabled = "true"> </td>
						<input type = "hidden" id = "RatHid">
						<input type = "hidden" id = "RatHidOrig">
					</tr>
				</table>
			</div><!-- left -->
			<div id="right" style="width: 150px; padding: 5px;">
				<div id = "inc">
					 <h4> Includes </h4>
					<ul>
						<li> TV </li>
						<li> Microwave </li>
						<li> Stove </li>
						<li> Fully Furnished </li>
					</ul>
				</div><!-- inc -->
			</div><!-- right -->
			<div class="clear"></div>
			<button id = "print" style="padding: 10px 20px; float: right; margin-top: 50px;">Make printable PDF file </button>
		</div><!-- #right -->
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
	
	$('#nexts').click(function()
	{
		top = top -467;
		
		$('#move').animate({
			top: top
		});
		return false;
	})

	$('#prevs').click(function()
	{
		top = top + 467;
		
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