<?php
// =================== kávékülönlegességek ===================
$kavekul = array(
    array('Kelet varázsa',
        '(kardamomos macchiato)',
        450),

    array('Juharszirupos Latte',
        '',
        590),

    array('Kókuszos tejeskávé tejszínhabbal',
        '(házi kókusz sziruppal)',
        650),

    array('Karamellás Latte tejszínhabbal',
        '(házi karamell sziruppal és öntettel)',
        680),

    array('Nana kedvence',
        '(habos kakaó kávéval)',
        650),

    array('Mogyorókrémes Latte tejszínhabbal',
        '(nagy adag Nutellával és házi csokiöntettel)',
        730),

    array('Növényi tej',
        '',
        '+ 100'),

);

foreach ($kavekul as $kave) {
    echo
        '<hr>
        <div class="row">
            <div class="col-9 balrazar">
                <p class="menu-tetel">' . $kave[0] . '</p>
                <p class="menu-magyarazat">' . $kave[1] . '</p>
            </div>
            <div class="col-3 jobbrazar">' . $kave[2] . '</div>
        </div>';
}
