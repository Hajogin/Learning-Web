<?php
//function hello() {
//    echo "Привет! <br>";
//}
//hello();
//hello();
//hello();
//hello();
//
//$user_name = "Елена";
//function hello_name($name) {
//    echo "Привет, $name <br>";
//}
//hello_name("Иван");
//hello_name("Дмитрий");
//hello_name("Сергей");
//hello_name($user_name);

//function hello_name($name, $age) {
//    echo "Имя: $name<br> Возраст: $age<br>";
//}
//
//hello_name("Иван", 20);
//hello_name("Сергей", 30);
//hello_name("Елена", 18);

//function fun_sum($a, $b) {
//    $sum = $a + $b;
//    return $sum;
//}
//
//$result = fun_sum(10, 11);
//echo $result;

//function fun_sum($a, $b) {
//    $sum = $a + $b;
////    echo "$sum<br>";
//    return $sum;
//}
//
//$result = fun_sum(5, 6);
//if ($result === null) {
//    echo "result равен null";
//}
//else {
//    echo "result не равен null";
//}


//$arrayNumber = [1, -14, 57, 0, -3, -4, 13 ];
//foreach ($arrayNumber as $value) {
//    if ($value>0) {
//        echo "$value, ";
//    }
//}
function showArray($arr)
{
    foreach ($arr as $value) {
        echo "$value, ";
    }
}
function positiveNumber($number) {
    if ($number > 0){
        return true;
    }else {
        return false;
    }
}

$arrayNumber = [];

for ($i=0; $i < 100; $i++) {
    $arrayNumber[] = random_int(-50, 50);
}
echo "<h2>Массив</h2>";

showArray($arrayNumber);

echo "<h2>Массив только положительных элементов</h2>";

showArray(array_filter($arrayNumber, "positiveNumber"));

?>