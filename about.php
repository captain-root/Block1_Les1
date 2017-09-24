<?php
$name="Дмитрий";
$secname="Владимирович";
$famaliname="Салтанов";
$email="captain_root@mail.ru";
$city="Тюмень";
$aboutu="ИТиИБ";
if ($name) {
?>
<div>
<h2>Информация обо мне</h2>
<p>Имя: <strong><?= $name ?></strong></p>
<p>Отчество: <strong><?= $secname ?></strong></p>
<p>Фамилия: <strong><?= $famaliname ?></strong></p>
<p>эл.почта: <strong><?= $email ?></strong></p>
<p>Город: <strong><?= $city ?></strong></p>
<p>О себе: <strong><?= $aboutu ?></strong></p>
</div>
<?php } else { ?>
<div><h2>Ошибка - ERROR!</h2></div>
<?php }
