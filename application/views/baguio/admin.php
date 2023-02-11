<!DOCTYPE html>
<html>
<head>
	<link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="screen">
	<link href="<?= base_url(); ?>fancybox/source/jquery.fancybox.css?v=2.1.5" rel="stylesheet"type="text/css" media="screen" />
	<title>Freds.com.ph - Admin</title>
	
</head>
<body>

<!--<a href = "assets/img/gradient_blue.png" class = "fancybox"> <img src = "assets/img/left.png" width = "25px"> </a>-->

<div id = "wrapper">
<div id = "top">
		<table id = "table1" cellspacing = "10">
			<tr>
				<td> Unit Choice </td>
				<td> <select id = "uchoice">
						 <option value = "pricing_a">Unit A</option>
						 <option value = "pricing_bcd">Unit B</option>
						 <option value = "pricing_bcd">Unit C</option>
						 <option value = "pricing_bcd">Unit D</option>
					</select>
				</td>
			</tr>
			<tr>
				<td> No. of persons </td>
				<td> <select id = "pax">
						<option value = "8pax"> 8 persons or less </option>
						<option value = "12pax"> 10 - 12 persons </option>
					</select>
				</td>
			</tr>
		</table>

		<span>&nbsp;&nbsp;Additional Heads </span>
		<table id = "table2" cellspacing = "12">
			<tr>
				<td> 0 </td>
				<td> 1 </td>
				<td> 2 </td>
				<td> 3 </td>
			</tr>
			<tr>
				<td> <input type = "radio" name = "add" value = "0" class = "add" checked> </td>
				<td> <input type = "radio" name = "add" value = "1" class = "add"> </td>
				<td> <input type = "radio" name = "add" value = "2" class = "add"> </td>
				<td> <input type = "radio" name = "add" value = "3" class = "add"> </td>
			</tr>
		</table>
</div> <!-- end of top -->

<div id = "prev-next">
	<img src = "<?= base_url(); ?>assets/img/left.png" id = "prev" width = "35">
	<img src = "<?= base_url(); ?>assets/img/right.png" id = "next" width = "35">
</div>

<!--<div id = "weeks"> <li>Sun</li> <li>Mon</li> <li>Tue</li> <li>Wed</li> <li>Thu</li> <li>Fri</li> <li>Sat</li> </div>-->
<div id='calendar'>
	<?php //require_once('calendar.php'); ?>
</div>
<!--<p id = "NoD"> No. of days <input type = "text" disabled = "true" id = "NoDs"> </p>-->
<div id = "right">
	<span id="UhD"> Details </span> <br>
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

	<div id = "right-content">
		<div id="right-details">
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
		</div><!-- right-details -->
		<div id="right-includes">
			<div id = "inc">
				 <h4> Includes </h4>
			<ul>
				<li> TV </li>
				<li> Microwave </li>
				<li> Stove </li>
				<li> Fully Furnished </li>
			</ul>
		</div><!-- right-includes -->
	</div>
	
	
	</div>
	<div style="clear: both; width: 100px; margin: auto;">
		<button id = "print">Make printable PDF file </button>
	</div>
	
	</div>
	
	
</div>

</div> <!-- end of wrapper  -->
<br><br>

<div id="adminonly">
	<h1>Admin Options</h1>
	<br><br>
	<div id = "form-upload">
	<form action = "<?= base_url(); ?>upload.php" method = "post" enctype = "multipart/form-data">
		<input type = "file" id = "upload" name = "file" accept = "text/csv"><br><br>
		<input type = "submit" value = "Upload Template">
	</form>
	</div><!-- form-upload -->
	<div id = "form-download">
		<a href = "<?= base_url(); ?>download.php">Download Excel Template </a>
	</div>
	<div style="clear: both;"></div>
</div>

<input type = "hidden" id = "final_arr">

<script src = "<?= base_url(); ?>assets/js/jquery-1.10.1.min.js"></script>
<script src = "<?= base_url(); ?>assets/js/view_calendar.js"></script>
<script src = "<?= base_url(); ?>fancybox/source/jquery.fancybox.js?v=2.1.5"></script>

<script>

$(function()
{
	// login
	var user = "fredsphilippines";
	var pass = "7432177";
	var input = prompt("Please Enter Username:","");
	if (input!=null && input!="") {
		if (input == user) {
			var input2 = prompt("Please Enter Password:","");
			if (input2!=null && input2!="") {
				if(input2 == pass) {
					
				} else {
					alert('Incorrect Password!');
					window.location.replace("https://localhost/freds/CI/baguio");
				}
			} else {
				alert('Log-in Canceled');
				window.location.replace("https://localhost/freds/CI/baguio");
			}
		} else {
			alert('Incorrect Username!');
			window.location.replace("https://localhost/freds/CI/baguio");
		}
	} else {
		alert('Log-in Canceled');
		window.location.replace("https://localhost/freds/CI/baguio");
	}
	
	
	var choice = $('#uchoice').val();
	var pax = $('#pax').val();
	var pricing = choice + "_" + pax;

	$('#UcH').html('Unit A');
	$('#UhD').html('Unit A');
	$('#newNoD').html('0');
	$('#Rat').val(0);
	$('#AdH').html('0');

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

			window.location.href = "<?= base_url(); ?>print.php?dat=" + final_arr + "&total=" + $('#Rat').val() + "&heads=" + $('#AdH').html() + "&unit=" + $('#UcH').html() + "&persons=" + $("#pax>option:selected").text() + "&personstotal=" + $('#RatHidOrig').val() + "&total=" + $('#Rat').val();
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