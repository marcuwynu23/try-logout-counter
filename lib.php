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

function getMilliRaimaining($time)
{
	$setlogouttime = $time * 1000;
	$now = time() * 1000;
	$dayConsume = floor(($now - $setlogouttime) / 86400000);
	$remaining_days = 45 - $dayConsume;
	echo "remaining_days: ".  $remaining_days;
}


function getDateByTime($time)
{
	$settime = date("Y-m-d H:i:s", $time);
	$after = $time + 45*86400;
	$aftertime = date("Y-m-d H:i:s", $after);

	echo "settime: " . $settime;
	echo "<br>";
	echo "current time: " . date("Y-m-d H:i:s",time());
	echo "<br>";
	echo "aftertime: " . $aftertime;
}
