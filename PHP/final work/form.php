<?php
header('Content-Type: text/html; charset=utf-8');

if (isset($_COOKIE['count']))
{
    $count = $_COOKIE['count']+1;
}
else
{
    $count = 1;
}
setcookie('count', $count, time()+3600);


$fullName = "";
$address = "";
$cities = [];
$additional_options = [];

if (isset($_POST['fullName'])) {
    $fullName = $_POST ['fullName'];
}
if (isset($_POST['address'])) {
    $address = $_POST ['address'];
}
if (isset($_POST['cities'])) {
    $cities = $_POST ['cities'];
}
if (isset($_POST['additional_options'])) {
    $additional_options = $_POST ['additional_options'];
}
?>

<h2>Ваше ФИО: <?= $fullName; ?></h2>
<h2>Ваш адрес: <?= $address; ?> </h2>
<h2>Ваш город: </h2>
<?php
foreach ($cities as $city) {
    echo "$city";
}
?>
<h2>Дополнительные опции которые понадобятся: </h2>
<?php
foreach ($additional_options as $option) {
    echo "$option<br>";
}

?>
<h2>С Вами просматривают это направление: <?= $count; ?></h2>