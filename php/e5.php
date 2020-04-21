<?php

$y1 = 1980;
$m1 = 2;
$d1 = 11;

$y2 = date("Y");
$m2 = date("m");
$d2 = date("d");

$time1 = mktime(0, 0, 0, $m1, $d1, $y1);
$time2 = mktime(0, 0, 0, $m2, $d2, $y2);

if($time1 > $time2)
{
    $delay = $time1 - $time2;
}
else
{
    $delay = $time2 - $time1;
}



$seconds = $delay;
$hours = $delay / 3600;
$days = $delay / 3600 / 24;
$years = $delay / 3600 / 24 / 365;

echo "Seconds: $seconds <br>";
echo "Hours: $hours <br>";
echo "Days: $days <br>";
echo "Years: $years <br>";

?>