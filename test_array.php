<?php

$shit = $_GET['dat'];

$exps = explode(",", $shit);

foreach($exps as $exp)
{
	$each = explode("/", $exp);
	echo "P " . number_format($each[1], 2) . "<br>";
}
?>