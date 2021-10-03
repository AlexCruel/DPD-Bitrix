<h1>IT IS DPD</h1>

<?php

include 'settings.php';
include 'classes/class_city.php';

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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Main</title>
</head>

<body>
    <div>
        <form action="methods/getServiceCost.php" method="POST">
            <div class="form-group">
                <label>Город отправки</label>
                <input value="Минск" name="city1" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Введите город">
            </div>
            <div class="form-group">
                <label>Город доставки</label>
                <input value="Пинск" name="city2" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Введите город">
            </div>
            <div class="form-group">
                <label>Вес груза</label>
                <input value="10" name="weight" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Введите город">
            </div>

            <button type="submit button" class="btn btn-primary">Рассчитать</button>
        </form>
    </div>
</body>

</html>