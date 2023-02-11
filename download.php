<?php

$zip = new ZipArchive();
$filename = "pricing.zip";

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("cannot open <$filename>\n");
}

$zip->addFile($thisdir . "pricing/pricing_a_12pax.csv");
$zip->addFile($thisdir . "pricing/pricing_a_8pax.csv");
$zip->addFile($thisdir . "pricing/pricing_bcd_8pax.csv");
$zip->addFile($thisdir . "pricing/pricing_bcd_12pax.csv");

$zip->close();

header("Location: pricing.zip");

?>