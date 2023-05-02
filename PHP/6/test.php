<?php 
if (isset($_POST['x'])) {
	$x = $_POST['x'];
} else {
	$x = 0;
}
if (isset($_POST['y'])) {
	$y = $_POST['y'];
} else {
	$y = 0;
}


echo "Сумма х и у = ".($x+$y);

?>

<p><a href="?x=10&y=50">Найти сумму 10 и 50</a></p>
<p><a href="?x=100&y=50">Найти сумму 100 и 50</a></p>
<p><a href="?x=1&y=5">Найти сумму 1и 5</a></p>

<form action="" method="post">
	<label>
		Введите число Х
		<input type="number" name="x">
	</label>
	<label>
		Введите число У
		<input type="number" name="y">
	</label>
	<button>Посчитать сумму</button>
</form>