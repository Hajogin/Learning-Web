<?php
// Рефакторинг 2. Использование массивоа
//$names = ["Иван", "Петр","Василий", "Дмитрий"];
//
//$message = "<p>Добрый день, $names[0]!</p>";
//$message .= "<p>Добрый день, $names[1]!</p>";
//$message .= "<p>Добрый день, $names[2]!</p>";
//$message .= "<p>Добрый день, $names[3]!</p>";
//
//echo $message;

//Рефакторинг 3. Использование цикла
//$names = ["Иван", "Петр","Василий", "Дмитрий", "Ольга"];
//foreach ($names as $name) {
//    echo "<p>Добрый день, $name!</p>";
//}

//Рефакторинг 4. Дополнительная информация о пользователях
$users = [
    ["lastname" =>"Иван", "middlename" =>"Иванович", "firstname" =>"Иванов"],
    ["lastname" =>"Петр", "middlename" =>"Петрович", "firstname" =>"Петров"],
    ["lastname" =>"Василий", "middlename" =>"Васильевич", "firstname" =>"Васильев"],
    ["lastname" =>"Дмитрий", "middlename" => "Дмитриевич", "firstname" =>"Дмитриев"],
    ["lastname" =>"Ольга", "middlename" => "Олеговна", "firstname" =>"Ольгина"],
];
foreach ($users as $user) {
    $lName = mb_substr($user['lastname'], 0, 1);
    $mName = mb_substr($user['middlename'], 0, 1);
    echo "<p>Добрый день, $user[firstname] $lName.$mName. !</p>";
}

//Рефакторинг 5. Использование функций
// 1. Название функции глагол или словосочетание глагол + существительное

function helloUsers($users) {
    foreach ($users as $user) {
        $lName = mb_substr($user['lastname'], 0, 1);
        $mName = mb_substr($user['middlename'], 0, 1);
        echo "<p>Добрый день, $user[firstname] $lName.$mName. !</p>";
    }
}


$users = [
    ["lastname" =>"Иван", "middlename" =>"Иванович", "firstname" =>"Иванов"],
    ["lastname" =>"Петр", "middlename" =>"Петрович", "firstname" =>"Петров"],
    ["lastname" =>"Василий", "middlename" =>"Васильевич", "firstname" =>"Васильев"],
    ["lastname" =>"Дмитрий", "middlename" => "Дмитриевич", "firstname" =>"Дмитриев"],
    ["lastname" =>"Ольга", "middlename" => "Олеговна", "firstname" =>"Ольгина"],
];

helloUsers($users);

unset($users[0]);

echo "<p>Пользователи после удаления одного</p>";

helloUsers($users);
helloUsers($users);


?>