<?php
htmlspecialchars($_GET["url"]) or die("No url provided"); 
echo "embed " .  htmlspecialchars($_GET["url"]) . "!" . "<br>";
echo "<iframe src=\"" .  htmlspecialchars($_GET["url"]) . "title=\"Target Iframe\"></iframe>";
?>


