<?php
htmlspecialchars($_GET["url"]) or die("No url provided"); 
echo "embed " .  htmlspecialchars($_GET["url"]) . "!" . "<br>";
echo "<iframe src=\"" .  htmlspecialchars($_GET["url"]) . "title=\"Target Iframe\"  width=\"900\"
    height=\"600\"> </iframe>";
?>


