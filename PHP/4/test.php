<?php
//echo "Привет мир!";
//$name = 'Иван';
//
//$str = "Привет \"$name!\"";
//echo $str;

//$str = "Шла Саша по шоссе";
////$str[0] = "D";
//echo $str;
//echo "<br>";
//
//for ($i = 0; $i < strlen($str); $i++){
////    echo $str[$i];
//    echo mb_substr($str, $i, 1);
//    echo "<br>";
//}

// Вывести на экран первые 5 слов из текста
$fullText = "Дана входная строка со словами. Измените порядок слов в обратном порядке. Словом считается любая последовательность НЕ пробельных символов. Входная строка не содержит пробелов в начале и конце. Каждое слово отделено от другого одним пробелом.";
$indexZero = 0;
$countZero = 0;

for ($i=0; $i < strlen($fullText); $i++) {
    if (mb_substr($fullText, $i, 1) == " ") {
        $countZero++;
        $indexZero =$i;
        if ($countZero===10) {
            break;
        }
    }
}
 echo mb_substr($fullText, 0, $indexZero);
?>