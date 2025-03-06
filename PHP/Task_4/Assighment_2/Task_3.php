<?php

date_default_timezone_set("Africa/Cairo");

$date = "1990-10-01";

$targetTimestamp = strtotime($date);


$epochTimestamp = 0; 
$diffInSeconds = $targetTimestamp - $epochTimestamp;

$days = $diffInSeconds / (60 * 60 * 24); 
$years = $days / 365.25; 

$daysFormatted = number_format($days, 1);
$yearsFormatted = number_format($years, 1);

echo "\"From Epoch Time Till $date Is Approximately $daysFormatted Days\"\n";
echo "\"From Epoch Time Till $date Is Approximately $yearsFormatted Years\"\n";
?>
