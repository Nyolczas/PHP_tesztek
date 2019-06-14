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
$first = true;
 if (($handle = fopen('data.csv', 'r')) !== FALSE) { // Check the resource is valid
    echo ('<table>'); 
     while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) { // Check opening the file is OK!
        echo('<tr>');
        if($first) {
            foreach ($data as $value) {
                echo('<th>'.$value.'</th>');
            }
            $first=false;
        } else {
            foreach ($data as $value) {
                echo('<td>'.$value.'</td>');
            }
        }
        echo('</tr>');
         //print_r($data); // Array
   }
   echo ('</table>'); 
     fclose($handle);
 }