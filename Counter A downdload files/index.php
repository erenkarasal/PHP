<?php
$myFile = "counter.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);

$theData++;

$myFile = "sayac.txt";
$fh = fopen($myFile, 'w') or die("data is not counted");
fwrite($fh, $theData);
fclose($fh);

header("Location: ********");
?>