
<?php

$pricing = $_GET['pricing'];

$filename = "pricing/". $pricing .".csv";

if (($handle = fopen($filename, "r")) !== FALSE)
{
    $key = 0;    // Set the array key.
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
    {
        $count = count($data);  //get the total keys in row
        //insert data to our array
        for ($i=0; $i < $count; $i++)
        {
            $formattedArr[$key][$i] = $data[$i];
        }
        $key++;
    }
    fclose($handle);
}
$jan = array();$feb = array();$mar = array();$apr = array();$may = array();$jun = array();$jul = array();$aug = array();$sep = array();$oct = array();$nov = array();$dec = array();

foreach($formattedArr as $key => $new)
{
	array_push($jan, $new[1]);array_push($feb, $new[2]);array_push($mar, $new[3]);array_push($apr, $new[4]);array_push($may, $new[5]);
	array_push($jun, $new[6]);array_push($jul, $new[7]);array_push($aug, $new[8]);array_push($sep, $new[9]);array_push($oct, $new[10]);
	array_push($nov, $new[11]);array_push($dec, $new[12]);
}

$tmp = array(" ",$jan, $feb, $mar, $apr, $may, $jun, $jul, $aug, $sep, $oct, $nov, $dec);

echo "<div id = 'move'>";
$start = strtotime("now");
$end = strtotime("now +13 months");

$_start = strtotime("now -1 months");
$_date = date("Y-m-01", $_start);
$_year = date("Y", $_start);
$_month = date("m", $_start);

$_days = cal_days_in_month(CAL_GREGORIAN, $_month, $_year);

$nos = $_days;

while($start < $end)
{
	$price = date("n", $start);
	$ctr = 0;
	$date = date("Y-m-01", $start);
	$year = date("Y", $start);
	$month = date("m", $start);

	$days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
	$nodays = date("N", strtotime($date));

	if ($nodays == 7)
	{
		$nodays = 0;
	}

	echo "<p> <div class = 'months'>";

	echo "<div class = 'weeks'>";
	echo "<center id = 'title'>". date('F Y', strtotime($date)) ."</center>";
	echo "<hr><br>";
	echo "<li>S</li> <li>M</li> <li>T</li> <li>W</li> <li>T</li> <li>F</li> <li>S</li>";
	echo "</div>"; //weeks

	echo "<div class = 'days'>";

	$past_days = $nos - $nodays+1;

	for($y=$past_days;$y<=$nos;$y++)
	{
		echo "<li class = 'nodays'>" . $y . "</li>";
	}

	for($x=1;$x<=$days;$x++)
	{
		$val = $tmp[$price][$x];
		$alt_month = date('M', strtotime($date));
		$alt_year = date('Y', strtotime($date));
		$alt_date = $alt_month . " " . $x . " " . $alt_year;

		echo "<li class = 'daynum' value = '$val' alt = '$alt_date'>" . $x . "<br> <i>P $val</i>" . "</li>";
	}

	for($z=$days;$z<42-$nodays;$z++)
	{
		$ctr = $ctr + 1;
		echo "<li class = 'nodays'>" . $ctr . "</li>";
	}
	echo "</div> </div> </p>";

	$nos = $days;

	$start = strtotime("+1 month", $start);
}
echo "</div>";
?>


<script>
var clicks = 0;
var index1;
var index2;
var days = 0;
var tval = 0;

$('.days').on("click", ".daynum", function()
{
	clicks = clicks + 1;

	if (clicks == 1)
	{
		index1 = $(this).index(".daynum");
		$(this).addClass('highlight');
	}
	else if (clicks == 2)
	{
		var alt_combi = [];
		var rad = $("input[name=add]:checked").val() * 300;

		index2 = $(this).index(".daynum");
		$(this).addClass('highlight');

		for(index1;index1<=index2;index1++)
		{
			var val = 0;
			days = days + 1;
			$('.daynum').eq(index1).addClass('highlight');

			val = $('.daynum').eq(index1).val();
			tval = tval + val;

			var alt_date = $('.daynum').eq(index1).attr('alt');

			var combi = alt_date+"/"+val;

			alt_combi.push(combi);
		}

		$('#final_arr').val(alt_combi);

		$('#newNoD').html(days);
		$('#Rat').val(tval + rad);
		$('#RatHidOrig').val(tval);
		$('#RatHid').val(tval + rad);
	}
	else if (clicks == 3)
	{
		tval = 0;
		days = 0;
		clicks = 0;

		var rad = $("input[name=add]:checked").val() * 300;
		$('#RatHid').val(0);
		$('#RatHidOrig').val(0);
		$('.daynum').removeClass('highlight');
		$('#newNoD').html("0");
		$('#Rat').val(0 + rad);
	}
})
</script>