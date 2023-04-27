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

$string = "Hello World!";
$result = strrev($string);
echo $result;

?>