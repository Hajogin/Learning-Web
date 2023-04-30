<meta charset="utf-8">
<?php
$name = null;
$age = null;
if (isset($_POST['post_name'])) {
	$name = $_POST['post_name'];
}
if (isset($_POST['post_age'])) {
	$age = $_POST['post_age'];
}
echo "Имя: $name <br> Возраст: $age";

?>