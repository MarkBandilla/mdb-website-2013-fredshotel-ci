$(function()
{
	$('#fancybox0').show();

	$('#uchoice').change(function()
	{
		$('#fancybox ul').hide();
		var fancy = $(this)[0].selectedIndex;
		$('#fancybox' + fancy).show();
	})

	var top = 0;

	$('#next').click(function()
	{
		top = top -311.1;
		$('#move').animate({
			top: top
		});
	})

	$('#prev').click(function()
	{
		top = top + 311.1;
		$('#move').animate({
			top: top
		});
	})
})