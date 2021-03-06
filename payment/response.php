<?php 

echo '<h1>testing response from server</h1>';

/**
 * Testing return from CIC
 * Example : 
 * TPE=1234567&date=05%2f12%2f2006%5fa%5f11%3a55%3a23&montant=62%
 * 2e75EUR&reference=ABERTYP00145&MAC=e4359a2c18d86cf2e4b0e646016
 * c202e89947b04&texte-libre=LeTexteLibre&code-
 * retour=paiement&cvx=oui&vld=1208&brand=VI&status3ds=1&numauto=
 * 010101&originecb=FRA&bincb=010101&hpancb=74E94B03C22D786E0F2C2
 * CADBFC1C00B004B7C45&ipclient=127%2e0%2e0%2e1&originetr=FRA&ver
 * es=Y&pares=Y
 * url_retour_ok
 * 
 * TPE=6740945&date=06%2f02%2f2018%5fa%5f19%3a12%3a23&montant=748EUR
 * &reference=000000010+%2d+test+retest
 * &MAC=0567BAB589F9DE95881BE15630A7ED32906CC32E
 * &texte-libre=CARTEVISA
 * &code-retour=payetest&cvx=oui
 * &vld=1219&brand=VI
 * &status3ds=4
 * &numauto=000000
 * &originecb=FRA
 * &bincb=000001
 * &hpancb=1E70711279EBA3DFBBD0C445A26FAA19B9E461FB
 * &ipclient=92%2e146%2e10%2e218&originetr=FRA&veres=&pares=&modepaiement=CB
 */ 

$post_vars = array(
    "TPE" => '6740945',
    "date" => '06%2f02%2f2018%5fa%5f19%3a12%3a23',
    "montant" => '748EUR',
    "reference" => '000000014+%2d+test+retest',
    "MAC" => '0567BAB589F9DE95881BE15630A7ED32906CC32E',
    "text-libre" => 'CARTEVISA',
    "code-retour" => 'payetest', //payetest paiement Annulation
    "cvx" => 'oui',
    "vld" => '1219', // date validite
    "brand" => 'VI', // visa... AM CB MC VI na
    'status3ds' => '4',
    'numauto' => '',
    'ipclient' => '92%2e146%2e10%2e218',
    'originetr' => 'FRA',
    'veres' => 'Y',
    'pares' => 'Y'
    
);

/*
MAC:d5f49745c11a464b084e2c48e7fff4f59538374d
PBX_DEVISE:978
TPE:6740945
date:09/02/2018:16:11:58
lgue:FR
mail:cacomme@hotmail.com
montant:184EUR
reference:000000014 - test retest
societe:mcbl
texte-libre:CARTEVISA
url_retour:https://motoculture-saintmartindeseignanx.fr/pbxep/payment/ipn/?reference=000000014 - test retest
url_retour_err:https://motoculture-saintmartindeseignanx.fr/pbxep/payment/failed/?reference=000000014 - test retest?reference=000000014 - test retest
url_retour_ok:https://motoculture-saintmartindeseignanx.fr/pbxep/payment/success/?reference=000000014 - test retest

*/
$ch = curl_init();

//curl_setopt($ch, CURLOPT_URL,"http://testmagento.com/pbxep/payment/success/");
curl_setopt($ch, CURLOPT_URL,"https://motoculture-saintmartindeseignanx.fr/pbxep/payment/ipn/");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

// in real life you should use something like:
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( $post_vars));

// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);

curl_close ($ch);

// further processing ....
echo $server_output;