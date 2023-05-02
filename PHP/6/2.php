<?php 
$str1 = '';
$str2 = '';
if (!empty($_GET['str1'])) {
	$str1 = $_GET['str1'];
}
if (!empty($_GET['str2'])) {
	$str2 = $_GET['str2'];
}
// Разбиваем строки на массив из символов
$arrayStr1 = str_split($str1);
$arrayStr2 = str_split($str2);

// Сортируем массив
sort($arrayStr1); 
sort($arrayStr2);

// Склеиваем обратно
$str1 = implode($arrayStr1);
$str2 = implode($arrayStr2);

if ($str1 == $str2) {
	echo "Это аннаграммы";
}else {
	echo "Это не аннаграммы";
}

?>

<form action="" method="get">
		<label>
			Строка 1
			<input type="text" name="str1">
		</label>
		<label>
			Строка 2
			<input type="text" name="str2">
		</label>
		<input type="submit" value="Войти">
</form>