<meta charset="utf-8">
<?php
// Циклы

//for ($i=1; $i < 10; $i++)
//{
// echo "Квадрат числа $i равен" . " " . $i *$i . "<br>";
//}

//for ($i=1; $i < 10; $i++)
//{
//    $result = $i * $i;
//
//    if ($result > 80)
//    {
//        break;
//    }
//    echo "Квадрат числа $i равен $result <br>";
//}

for ($i=1; $i < 10; $i++)
{
    if ($i == 5)
    {
        continue;
    }
    echo "Квадрат числа $i равен" . " " . $i * $i . "<br>";
}


?>