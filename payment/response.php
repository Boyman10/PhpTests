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
 */ 

$post_vars = array(
    "TPE" => '6740945',
    "date" => '29/01/2018:07:55:54',
    "montant" => '105',
    "reference" => '000000001',
    "MAC" => 'EF285A8FEAF0E4D19ED0365A0C49F72AC247D692',
    "text-libre" => '',
    "code-retour" => 'payetest', //payetest paiement Annulation
    "cvx" => 'oui',
    "vld" => '1208', // date validite
    "brand" => 'VI', // visa... AM CB MC VI na
    'status3ds' => '-1',
    'numauto' => '',
    'ipclient' => '',
    'originetr' => 'FRA',
    'veres' => 'Y',
    'pares' => 'Y'
    
);

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