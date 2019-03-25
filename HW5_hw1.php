<?php
header("Content-Type:text/html; charset=big5");
date_default_timezone_set("Asia/Taipei");
$thisYear = date("Y-m-d H:i:s");
$dateStr = "2016-11-03 21:35:00"; 
$timestamp = strtotime($dateStr);
$timestamp1 = strtotime($thisYear);
echo "現在時間為：" . $thisYear . "<br />";
echo "另一時間為：" . $dateStr . "<br />";
echo "相差秒數為：" . ($timestamp1 - $timestamp) . "<br />";
echo "相差分鐘數為：" . ($timestamp1 - $timestamp)/ (60) . "<br />";
echo "相差小時數為：" . ($timestamp1 - $timestamp)/ (60*60) . "<br />";
echo "相差天數為：" . ($timestamp1 - $timestamp)/ (60*60*24) . "<br />";
?>
