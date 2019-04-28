<?php
$date = $_POST["date"];
$d1 = $_POST["d1"];
$d2 = $_POST["d2"];

$myfile = fopen("data.csv", "w") or die("Unable to open file!");
$txt = $myfile."\n".$date.";".$d1.";".$d2;
fwrite($myfile, $txt);
fclose($myfile);