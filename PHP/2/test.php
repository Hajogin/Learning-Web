<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Переменные в РНР</title>
</head>
<body>
    <h1>Переменные в РНР</h1>
    <?php
//    Правила наименования переменных:
//    1. Существительное имя
//    2. Английский язык (без транслита)
//    3. Начинается со строчного символа $Name $name
//    4. Название должно отражать содержимое. Лучше длинное название, но более конкретное
//    5. По возможности использовать словосочетания $name -> $userName (используется верблюжья нотация)

    $nameNumber = 12;
    $nameNumberTwo = $nameNumber;
    echo "Hello world! - $nameNumber, $nameNumberTwo";
    ?>
    <?php
    echo "<b> Это другой фрагмент php</b><br>";

    ?>
</body>
</html>