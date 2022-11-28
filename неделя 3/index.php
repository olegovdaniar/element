<?php
echo 'Задание №1' . '<br>';
date_default_timezone_set('Europe/London');
echo 'Europe/London: ' . date('H:i:s d.m.Y') . '<br>';
date_default_timezone_set('Europe/Paris');
echo 'Europe/Paris: ' . date('H:i:s d.m.Y') . '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo 'Задание №2' . '<br>';
echo 'Дата моего дня рождения: ' . '<br>';
echo date('d-m-Y', mktime(0, 0, 0, 2, 22, 1999));
echo '<br>';
echo 'Текущая дата: ' . '<br>';
echo date('d-m-Y') . '<br>';
echo 'Разница в днях: ' . '<br>';
echo $dateDiff = date_diff(new DateTime(), new DateTime('1999-02-22'))->days;
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo 'Задание №3' . '<br>';
echo 'Текущая дата: ' . '<br>';
echo date('d-m-Y') . '<br>';
echo 'Дата нового Года: ' . '<br>';
echo date('d-m-Y', mktime(0, 0, 0, 1, 1, 2023));
echo 'Разница в днях: ' . '<br>';
echo $dateDiff = date_diff(new DateTime('2023-01-01'), new DateTime())->days;

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


echo 'Задание №4' . '<br>';
$day_for_rand = rand(10, 100);
$new_day= strval($day_for_rand) . ' days';
echo $day_for_rand . '<br>';
$date = date_create(date('d-m-Y'));
date_modify($date, $new_day);
echo date_format($date, 'd.m.Y');

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


echo 'Задание №5' . '<br>';

$birthday_human = '1995-05-20'; //Дата рождения
$age = floor( ( time() - strtotime($birthday_human) ) / (60 * 60 * 24 * 365.25) ); //Формула
echo $age; //27
?>
