<?php
   date_default_timezone_set('UTC');
   $datex = date("Y-m-d");


   $record = $datex + "\r\n";
   $fp = fopen('access.logs', 'a');
   fwrite($fp, $record);
   fclose($fp);
?>

<?php
date_default_timezone_set("America/New_York");
echo "Today is " . date("Y-m-d") . "<br>";
echo "The time is " . date("h:i:sa");
?>
