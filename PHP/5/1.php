<?php

//$number = [1, 2, 3, 4];
//print_r($number);

//$number = [1, 4, 9, 16];
//echo $number[0];

//$number = [1, 4, 9, 16];
//$number[] = 25;
//print_r($number);

//$number = [1, 4, 9, 16];
//$number = [0=>1, 2=>4, 7=>9, 12=>16];
//print_r($number);

//$users = ["Иван", "Петр", "Сергей"];
//$num = count($users);
//for ($i=0; $i < $num; $i++) {
//    echo "$users[$i]<br>";
//}
//$users = [1=>"Дмитрий", 4=>"Петр", 8=>"Сергей"];
//foreach ($users as $element) {
//    echo "$element <br>";
//}
//$users = [1=>"Дмитрий", 4=>"Петр", 8=>"Сергей"];
//foreach ($users as $key => $element) {
//    echo "$key - $element <br>";
//}
//$countries = ["Германия" => "Берлин", "Франция" => "Париж", "Россия" => "Москва"];
//echo $countries["Франция"];

//$countries = ["Германия" => "Берлин", "Франция" => "Париж", "Россия" => "Москва"];
//$countries["Китай"] = "Пекин";
//echo $countries["Китай"];

//$countries = ["Германия" => "Берлин", "Франция" => "Париж", "Россия" => "Москва"];
//foreach ($countries as $key => $value) {
//    echo "$key : $value<br>";
//}


$user = [
    "name" => "Иванов Иван Иванович",
    "age" => 25,
    "address" => "г. Москва, ул. Академика Королева",
    "sex" => "мужской"
];
//echo "Пользователь: $user[name], возраст: $user[age], $user[address]";

foreach ($user as $key => $value) {
    echo "$value, ";
}








?>