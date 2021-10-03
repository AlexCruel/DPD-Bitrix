<?php

include '../settings.php';
include '../classes/class_serviceCost.php';

// DELIVERY COST
$cost = new ServiceCost();
$ret = $cost->getServiceCost();
$mass = $cost->stdToArray($ret);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Service Cost</title>
</head>

<body>
    <div>
        <h1>Стоимость доставки</h1>
        <div>
            <table class="table table-hover">
                <tr class="thead-dark">
                    <th>Код сервиса</th>
                    <th>Название</th>
                    <th>Стоимость</th>
                    <th>Количество дней доставки</th>
                </tr>
                <?php
                foreach ($mass as $key) {
                    foreach ($key as $keys) { ?>
                        <tr>
                            <td><?= $keys['serviceCode'] ?></td>
                            <td><?= $keys['serviceName'] ?></td>
                            <td><?= $keys['cost'] ?> BYN</td>
                            <td><?= $keys['days'] ?></td>
                        </tr>
                <?php }
                }
                ?>
            </table>
        </div>
        <a href="../dpd_test.php" type="button" class="btn btn-primary">Назад</a>
    </div>
</body>

</html>