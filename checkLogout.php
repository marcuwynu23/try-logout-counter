<?php
// function to check if the saved logout time passed the limit days which is 45 days
function checkDayLimit($time)
{
	$setlogouttime = $time * 1000;
	$now = time() * 1000;
	$remaining_days = floor(($now - $setlogouttime) / 86400000);
	$day_limit = 45;
	return $remaining_days > $day_limit;
}


function getDayRaimaining($time)
{
	$setlogouttime = $time * 1000;
	$now = time() * 1000;
	$remaining_days = floor(($now - $setlogouttime) / 86400000);
	return $remaining_days;
}
