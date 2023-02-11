<?php

$file_name = $_FILES["file"]["name"];
$type = $_FILES["file"]["type"];
$tmp = $_FILES["file"]["tmp_name"];

if (move_uploaded_file($tmp, "pricing/" . $file_name))
{
	echo "file upload successful ";
	echo "redirecting in " . "<span> 3 </span>";
}
else
{
	die("Error");
}

?>

<script src = "assets/js/jquery-1.10.1.min.js"></script>
<script>
$(function()
{
	var timer = 3;
	setInterval(function()
	{
		timer = timer - 1;
		$('span').html(timer);

		if (timer == 0)
		{
			window.location.href = "freds.com.ph/baguio/page/admin";
		}
	}, 1000);
})
</script>