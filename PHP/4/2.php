<?php
$str = "11 222 3333 4444";

$countCharInWord = 0;

for ($i=mb_strlen($str)-1; $i >=0; $i--) {
//    echo mb_substr($str, $i,1)."<br>";
    if (mb_substr($str, $i,1) == " ") {
        echo mb_substr($str, $i+1, $countCharInWord). " ";
        $countCharInWord = 0;
    }
    else {
        $countCharInWord++;
    }
}
echo mb_substr($str, 0, $countCharInWord);

?>