<?php


date_default_timezone_set('UTC');
   $ip = $_SERVER['REMOTE_ADDR'];
   $datex = date(DATE_RFC2822);
   $header = "";
   foreach (getallheaders() as $name => $value) {
       $header = $header + $name + ":" + $value + "-----"
   }

   $record = $datex "  ---  " + $header + "\n";
   $fp = fopen('access.log', 'a');
   fwrite($fp, $record);
   fclose($fp);
?>
