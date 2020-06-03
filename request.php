<?php
   date_default_timezone_set('UTC');
   $datex = date("Y-m-d");

   $headersStr = "";
   $headers =  getallheaders();
   foreach($headers as $key=>$val){
      $headersStr .= $key . ': ' . $val . '-----';
   }
   file_put_contents('access.logs', $headersStr, FILE_APPEND)
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
//echo  $datex . "<br>"
$headersStr = "";
$headers =  getallheaders();
foreach($headers as $key=>$val){
  $headersStr .= $key . ': ' . $val . '-----';
}
echo $headersStr . "<br>";
?>
