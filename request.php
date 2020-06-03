<?php
   date_default_timezone_set('UTC');
   $datex = date("Y-m-d");


/*   $record = $datex . "\r\n";

   file_put_contents('access.logs', $record, FILE_APPEND)
   $fp = fopen('access.logs', 'a');
   fwrite($fp, $record);
   fclose($fp);*/
?>

<?php
date_default_timezone_set('UTC');
//$datex = date("Y-m-d");
echo "Today is " . date("Y-m-d") . "<br>";
echo "The time is " . date("h:i:sa") . "<br>";
echo  $datex . "<br>"
//$header = "Header:";
foreach (getallheaders() as $name => $value) {
       $header .= $name . ":" . $value . "-----"
}
echo $header
?>
