$(function()
{
	var choice = $('#uchoice').val();
	var pax = $('#pax').val();
	var pricing = choice + "_" + pax;

	$('#uchoice').change(function()
	{
		$('#fancybox ul').hide();
		var fancy = $(this)[0].selectedIndex;
		$('#fancybox' + fancy).show();
	})

	$('.small_image').fancybox();
	$('#fancybox0').show();

	$('#UcH').html('Unit A');
	$('#UhD').html('Unit A');
	$('#newNoD').html('0');
	$('#Rat').val(0);
	$('#AdH').html('0');

	$('#calendar').load("calendar.php?pricing=" + pricing);

	$('#uchoice').change(function()
	{
		$('#Rat').val(0);
		$('#newNoD').html('0');

		text = $("#uchoice>option:selected").text();

		choice = $(this).val();
		pricing = choice + "_" + pax;

		$('#calendar').load("calendar.php?pricing=" + pricing);
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

		$('#calendar').load("calendar.php?pricing=" + pricing);

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


	var top = 0;
	var start = 0;

	$('#next').click(function()
	{
		if (start != 12)
		{
			start = start + 1;
			top = top -311.1;
			$('#move').animate({
			top: top
		});
		}
	})

	$('#prev').click(function()
	{
		if (start != 0)
		{
			start = start - 1;
			top = top + 311.1;
			$('#move').animate({
			top: top
		});
		}
	})

	$('#print').click(function()
	{
		if ($('#RatHidOrig').val() != 0)
		{
			var final_arr = $('#final_arr').val();

			window.location.href = "print.php?dat=" + final_arr + "&total=" + $('#Rat').val() + "&heads=" + $('#AdH').html() + "&unit=" + $('#UcH').html() + "&persons=" + $("#pax>option:selected").text() + "&personstotal=" + $('#RatHidOrig').val() + "&total=" + $('#Rat').val();
		}
		else
		{
			alert("Select a date")
		}
	})
})