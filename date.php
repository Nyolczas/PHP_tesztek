<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php date</title>
</head>
<body>
<?php
    echo "<p>Hányadika van ma? : <b> (". date('d').")</b></p>"; 
    echo "<p>Hányadik hónap van most? : <b>(". date('m').")</b></p>"; 
    echo "<p>Melyik évet írjuk? : <b>(". date('Y').")</b></p>"; 
    echo "<p>Milyen nap van ma? : <b>(". date('l').")</b></p>"; 

    echo "<h1>A mai dátum : ". date('Y. m. d.')."</h1>";
    
    echo "<p>Hány óra van Greenwich-ben? : <b>(". date('h').")</b></p>"; 
    echo "<p>Délelőtt <em>(am)</em>,  vagy délután <em>(pm)</em>? : <b>(". date('a').")</b></p>"; 
    echo "<p>Hány perc? : <b>(". date('i').")</b></p>"; 
    echo "<p>Másodperc? : <b>(". date('s').")</b></p>"; 

    echo "<h3>A pontos idő a hülye angoloknál: ". date('h:i:sa')."</h3>";

    //Set time zone
    date_default_timezone_set('Europe/Budapest');
    echo "<h2>A magyar idő : ". date('H:i:s')."</h2>"; //24 órás formátum: H

    $timestamp = mktime(2, 8, 8, 7, 2, 1975); //óra, perc, másodperc, hónap, nap, év
    echo "<p>timestamp: $timestamp </p>";

    echo "<h2>A születésnapom: ". date('Y. m. d.', $timestamp);

    $timestamp2 = strtotime('20:37:08 06/17/2019');
    echo "<h4>". date('Y.m.d. H:i:s', $timestamp2)."-kor írtam ezt a kódot timestamp-ból generálva.</h4>";

    $timestamp3 = strtotime('yesterday');
    echo "<p> yesterday : ". date('Y. m. d.', $timestamp3)."</p>";

    $timestamp4 = strtotime('tomorrow');
    echo "<p> tomorrow : ". date('Y. m. d.', $timestamp4)."</p>";

    $timestamp5 = strtotime('next Sunday');
    echo "<p> next Sunday : ". date('Y. m. d.', $timestamp5)."</p>";

    $timestamp6 = strtotime('+4 Days');
    echo "<p> +4 Days : ". date('Y. m. d.', $timestamp6)."</p>";

    $timestamp7 = strtotime('+2 Weeks');
    echo "<p> +2 Weeks : ". date('Y. m. d.', $timestamp7)."</p>";

    $timestamp8 = strtotime('+3 Months');
    echo "<p> +3 Months : ". date('Y. m. d.', $timestamp8)."</p>";
    
?>
<button><H1><a href="https://php.net/manual/en/function.date.php" target="blank">További leírások a php doksiban:</a></H1></button>

</body>
</html>