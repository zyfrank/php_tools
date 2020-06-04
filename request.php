<?php
   date_default_timezone_set('UTC');

   $headersStr = "";
   $headers =  getallheaders();
   foreach($headers as $key=>$val){
      $headersStr .= $key . ': ' . $val . "\n";
   }
   $record =  date("Y-m-d") . '  ' . date("h:i:sa") . ":::::\n" . $headersStr . "\n\r";
   file_put_contents('access.logs', $record, FILE_APPEND)
?>

<?php
   date_default_timezone_set('UTC');
   echo "Today is " . date("Y-m-d") . "<br>";
   echo "The time is " . date("h:i:sa") . "<br>";
?>
