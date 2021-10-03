<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Pre Service Cost</title>
</head>

<body>
    <h1>Рассчитать стоимость</h1>
    <form action="page_serviceCost.php" method="POST">
        <div class="form-group">
            <label>Город отправки</label>
            <input value="Минск" name="cityPickup" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Введите город">
        </div>
        <div class="form-group">
            <label>Город доставки</label>
            <input value="Пинск" name="cityDelivery" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Введите город">
        </div>
        <div class="form-group">
            <label>Вес груза</label>
            <input value="10" name="weight" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Введите город">
        </div>

        <a href="../dpd_test.php" type="button" class="btn btn-primary">Назад</a>
        <button type="submit button" class="btn btn-success">Рассчитать</button>
    </form>
</body>

</html>