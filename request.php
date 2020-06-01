<?php


date_default_timezone_set('UTC');
   $ip = $_SERVER['REMOTE_ADDR'];
   $datex = date("F j, Y, g:i a");


   $record = $datex + "\n";
   $fp = fopen('access.logs', 'a');
   fwrite($fp, $record);
   fclose($fp);
?>
