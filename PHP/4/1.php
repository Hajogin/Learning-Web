<meta charset="utf-8">
<?php
// Виды кавычек
//$string = "Привет";
//$string_1 = 'мир!';
//
//echo "$string <br>";
//echo '$string_1';

//$string = "Hollo World!";
//echo $string[0]; // Получим первый символ Н

//$string = "Мама мыла раму";
//$search = "м";
//$position = mb_strpos($string, $search);
//echo "$position";

//$string = "Мама мыла раму";
//$search = "м";
//$position = mb_strrpos($string, $search);
//echo "$position";

//$string = "   Hello   ";
//$result = trim($string);
//echo $result[0];

//$string = "Мама Мыла Раму";
//$result = mb_strtolower($string);
//echo $result;

//$string = "Мама Мыла Раму";
//$result = mb_strtoupper($string);
//echo $result;

//$string = "Привет, мир!";
//$result = mb_strlen($string);
//echo $result;

//$string = "Привет, мир!";
////$result = mb_substr($string, 3);
//$result = mb_substr($string, 2, 5);
//echo $result;

//$string = "Мама Мыла раму";
//$result = str_replace("ма", "па", $string);
//echo $result;

//$string = "Мама мыла раму мылом. Папа маме помогал!";
//$result = substr_count($string, "М");
//echo $result;

//$string = "Hello World!";
//$result = strrev($string);
//echo $result;

$name1 = "Иван";
$name2 = "Петр";
$name3 = "Василий";
$name4 = "Дмитрий";

//$message1 = "<p>Добрый день, $name1!</p>";
//$message2 = "<p>Добрый день, $name2!</p>";
//$message3 = "<p>Добрый день, $name3!</p>";
//$message4 = "<p>Добрый день, $name4!</p>";
//
//echo $message1;
//echo $message2;
//echo $message3;
//echo $message4;

// Рефакторинг 1 (упрощение записи кода)
//$message = "<p>Добрый день, $name1!</p>";
//$message = $message."<p>Добрый день, $name2!</p>";
//$message = $message."<p>Добрый день, $name3!</p>";
//$message = $message."<p>Добрый день, $name4!</p>";

//echo $message;

// Рефакторинг 2
$message = "<p>Добрый день, $name1!</p>";
$message .= "<p>Добрый день, $name2!</p>";
$message .= "<p>Добрый день, $name3!</p>";
$message .= "<p>Добрый день, $name4!</p>";

echo $message;


?>