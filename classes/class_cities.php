<?php

// function stdToArray($obj)
// {
//     $rc = (array)$obj;

//     foreach ($rc as $key => $item) {
//         $rc[$key] = (array)$item;

//         foreach ($rc[$key] as $keys => $items) {
//             $rc[$key][$keys] = (array)$items;
//         }
//     }

//     return $rc;
// }

// $ret = 'saf';

// function findCity($id_city)
// {
//     include 'settings.php';

//     $client = new SoapClient("$server[0]geography2?wsdl");

//     $arData['auth'] = array(
//         'clientNumber' => $MY_NUMBER,
//         'clientKey' => $MY_KEY
//     );

//     $arRequest['request'] = $arData;

//     $ret = $client->getCitiesCashPay($arRequest);

//     return $ret;

// }

// $city = 'Екатеринбург';
// $findCity = (array)findCity($city);
// $mass = stdToArray($findCity);

// echo '<pre>';
// // print_r($findCity);

// $cityClass = new City();
// $cityClass->regPropsCity($mass, $city);
// $cityClass->echoPropsCity();

// echo '</pre>';

?>