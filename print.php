<?php

require_once ('dompdf/dompdf_config.inc.php');
$html = "
<style>

@page
{
	margin: 5px;
}
body
{
	font-family: helvetica;
}

.eight
{
	font-size: 18px;
}

img
{
	margin: 10px;
}

#img-container
{
	position: absolute;
	margin-left: 25px;
}

table
{
	position: relative;
	font-size: 15px;
	left: 50px;
	top: 5px;
}

#table1 tr td
{
	padding: 5px;
	width: 115px;
	text-align: center;
}

#table2 tr td
{
	width: 115px;
	padding: 5px;
}

#table-container
{
	position: relative;
	top: 0px;
	margin-left: 715px;
}

h3
{
	text-indent: 26px;
}

.right
{
	text-align: right;
}

</style>";

$url = "www.freds.com.ph/baguio";
$dir = $_GET['unit'];
$persons = $_GET['persons'];
$heads = "+".$_GET['heads'] . " Head(s)";

$persons_total = number_format($_GET['personstotal'], 2);
$heads_total = number_format($_GET['heads'] * 300, 2);
$total = number_format($_GET['total'], 2);

$imgs = scandir("images/$dir");
$imgs_exclude = array(".", "..", ".DS_Store");

$result = array_diff($imgs, $imgs_exclude);

$ctr = 1;
$res = "";

$html = $html . "<h3> &nbsp; $url&nbsp;:&nbsp;$dir </h3><div id = 'img-container'>";

foreach($result as $key => $img)
{
	$find = strpos($img, "_thumb.jpg");

	//if ($find == "")
	if ($find == "")
	{
		if ($ctr == 7)
		{
			break;
		}

		if ($ctr % 2 == 0)
		{
			$ctr = $ctr + 1;
			$res = $res . "<img src = 'images/$dir/$img' width = '315'/> <br>";
		}
		else if ($ctr % 2 != 0)
		{
			$ctr = $ctr + 1;
			$res = $res . "<img src = 'images/$dir/$img' width = '315'/>";
		}
	}
}

$html = $html . $res;
$html = $html . "</div>";

$tr = "";
$shit = $_GET['dat'];
$exps = explode(",", $shit);
foreach($exps as $exp)
{
	$each = explode("/", $exp);
	$each0 = $each[0];
	$each1 = number_format($each[1], 2);

	$tr = $tr .
	"
	<tr>
	<td> $each0 </td>
	<td> P$each1 </td>
	</tr>
	";
}

$html = $html .
"<div id = 'table-container'><table border=1 id = 'table1'>
<tr>
	<td colspan=2><center><img src = 'images/logo.png'><br>Contact: +63 917 856 4400 (globe)</center></td>
</tr>
<tr>
<td> <b> Date </b> </td>
<td> <b> Rate </b> </td>
</tr>
$tr
</table>";

$html = $html .
"
<table id = 'table2'>
<tr>
<td class = 'right'> $persons: </td>
<td> <b>P$persons_total</b> </td>
</tr>

<tr>
<td class = 'right'> $heads:  </td>
<td> <b>P$heads_total</b> </td>
</tr>

<tr>
<td class = 'right'> TOTAL:  </td>
<td> <b class = 'eight'>P$total</b> </td>
</tr>
</table>
</div>
";

$date = date("Y-m-d");
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->set_paper('a4', 'landscape');
$dompdf->render();
$dompdf->stream("Rate" . "(" . $date . ").pdf");

?>