<?php
   date_default_timezone_set('UTC');
   $datex = date("Y-m-d");


   $record = $datex + "\r\n";
   $fp = fopen('access.logs', 'a');
   fwrite($fp, $record);
   fclose($fp);
?>
