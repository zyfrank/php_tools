<?php

date_default_timezone_set('Asia/Kolkata'); // Set your Time Zone Here

   $ip = $_SERVER['REMOTE_ADDR'];
   $datex = date('Y/m/d');
   $timex = date('G:i:s');
   
   $record = $datex + " " + $timex + " " + $ip;
   $fp = fopen('access.log', 'a');
   fwrite($fp, $record);
   fclose($fp);
?>
