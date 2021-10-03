<?php

include '../classes/class_cities.php';

$cities = new Cities('BY');
$ret = $cities->findCities();
$mass = $cities->stdToArray($ret);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cities Cash Pay</title>
</head>

<body>
    <p><a href="../dpd_test.php" type="button" class="btn btn-danger">Главное меню</a></p>
    <table class="table table-hover">
        <tr class="thead-dark">
            <th>Код города</th>
            <th>Страна</th>
            <th>Регион</th>
            <th>Населенный пункт</th>
        </tr>
        <?php
        foreach ($mass as $key) {
            foreach ($key as $keys) { ?>
                <tr>
                    <td><?= $keys['cityId'] ?></td>
                    <td><?= $keys['countryName'] ?></td>
                    <td><?= $keys['regionName'] ?></td>
                    <td><?= $keys['abbreviation'], " ", $keys['cityName'] ?></td>
                </tr>
        <?php  }
        }
        ?>
    </table>
</body>

</html>