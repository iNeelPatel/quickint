<?php
$timestamp = date("d-m-Y - H:i:s");
$datastring = $_GET["data1"];
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = $timestamp . " - ".$data1."\n";
fwrite($myfile, $txt);
fclose($myfile);
echo $txt;
?>
