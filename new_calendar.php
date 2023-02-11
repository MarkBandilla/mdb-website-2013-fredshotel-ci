<?php

$filename = "pricing/pricing_bcd_12pax.csv";

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
$jan = array();
$feb = array();
$mar = array();
$apr = array();
$may = array();
$jun = array();
$jul = array();
$aug = array();
$sep = array();
$oct = array();
$nov = array();
$dec = array();

foreach($formattedArr as $key => $new)
{
	array_push($jan, $new[1]);
	array_push($feb, $new[2]);
	array_push($mar, $new[3]);
	array_push($apr, $new[4]);
	array_push($may, $new[5]);
	array_push($jun, $new[6]);
	array_push($jul, $new[7]);
	array_push($aug, $new[8]);
	array_push($sep, $new[9]);
	array_push($oct, $new[10]);
	array_push($nov, $new[11]);
	array_push($dec, $new[12]);
}

$tmp = array(" ",$jan, $feb, $mar, $apr, $may, $jun, $jul, $aug, $sep, $oct, $nov, $dec);

?>