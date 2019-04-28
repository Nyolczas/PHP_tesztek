<?php
// beír egy sort a file-ba.

function writeCsv( $line ) {
    $path = 'data.csv';
    $file = file_get_contents($path);
    $file.= "\n".$line;  
    file_put_contents($path,$file);  
}
// beír egy sort a file-ba.
writeCsv('2019.03.04.;230;359');

// tömbbé alakítja az adatot.
 if (($handle = fopen('data.csv', 'r')) !== FALSE) { // Check the resource is valid
     while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) { // Check opening the file is OK!
         print_r($data); // Array
   }
     fclose($handle);
 }