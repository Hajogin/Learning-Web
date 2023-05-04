<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Итоговая работа по разделу №4</title>
</head>
<body>
<form action="form.php" method="post">
    <div class="form-item">
        <label>
            ФИО<br>
            <input type="text" name="fullName">
        </label><br>
        <label>
            Адрес<br>
            <input type="text" name="address">
        </label><br>
        <label>Город</label>
        <select name="cities[]">
            <option>Москва</option>
            <option>Екатеринбург</option>
            <option>Тюмень</option>
            <option>Сочи</option>
            <option>Владивосток</option>
        </select>
        <br>
    </div>
    <span>Дополнительные опции</span>
    <div class="chechbox-form">
        <label>
            <input type="checkbox" name="additional_options[]" value="Обед">
            Обед
        </label>
        <label>
            <input type="checkbox" name="additional_options[]" value="Спальное место">
            Спальное место
        </label>
        <label>
            <input type="checkbox" name="additional_options[]" value="Такси">
            Такси
        </label>
    </div>
    <button>Отправить</button>
</form>
</body>
</html>

