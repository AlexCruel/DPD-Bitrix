<?php

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
    <h1>IT IS DPD</h1>
    <div>
        <a href="pages/page_citiesCashPay.php" type="button" class="btn btn-warning" style="margin-right: 20px;">Города доставки</a>
        <a href="pages/page_pre_serviceCost.php" type="button" class="btn btn-warning">Расчет стоимости</a>
    </div>
    <hr>
    <div>
        <h1>Создать заказ</h1>
        <form>

            <h3 style="color: #C85546">Пункт отправления</h3>
            <div class="form-row form-group">
                <div class="col">
                    <input placeholder="Дата приема груза">
                </div>
                <div class="col">
                    <input placeholder="Город">
                </div>
            </div>
            <div class="form-row form-group">
                <div class="col">
                    <input placeholder="Время приема груза">
                </div>
                <div class="col">
                    <input placeholder="Адрес приема груза">
                </div>
            </div>

            <h3 style="color: #C85546">Груз</h3>
            <div class="form-row form-group">
                <div class="col">
                    <input placeholder="Дата приема груза">
                </div>
                <div class="col">
                    <input placeholder="Город">
                </div>
            </div>
            <div class="form-row form-group">
                <div class="col">
                    <input placeholder="Время приема груза">
                </div>
                <div class="col">
                    <input placeholder="Адрес приема груза">
                </div>
            </div>

            <h3 style="color: #C85546">Заказчик</h3>
            <div class="form-row form-group">
                <div class="col">
                    <input placeholder="ФИО">
                </div>
                <div class="col">
                    <input placeholder="Город">
                </div>
            </div>
            <div class="form-row form-group">
                <div class="col">
                    <input placeholder="Телефон">
                </div>
                <div class="col">
                    <input placeholder="Адрес доставки">
                </div>
            </div>

            <p><button type="submit button" class="btn btn-success">Отправить</button></p>
        </form>
    </div>
</body>

</html>