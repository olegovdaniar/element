<?php

// Написать функцию, внутри сделать вывод даты
function call_date1()
{
date_default_timezone_set('UTC');
return date('m.d.y');
}

echo "Написать функцию, внутри сделать вывод даты" . '<br>';
echo call_date1() . '<br>';


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

//  Написать функцию с одним параметром. Параметр - это шаблон для функции date (первый параметр).
//  Внутри функции сделать вывод даты, вставив в функцию date тот параметр,
//  который отправили в функцию.Написать функцию с одним параметром.
//  Параметр - это шаблон для функции date (первый параметр).
//  Внутри функции сделать вывод даты, вставив в функцию date тот параметр, который отправили в функцию. сделать вывод даты
function call_date2($arg)
        {
date_default_timezone_set('UTC');
        return date($arg);
        }

echo "Vtoroe zadanie:" . '<br>';
echo call_date2('Y-m-d H:i:s') . '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo "Tret'e zadanie:" . '<br>';
function third($arg)
{
if ($arg % 2 == 0)
{
return true;
}
else return false;
}

$y = third(47);
if ($y == true)
{
echo 'true';
}
else echo 'false';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


echo "Chetvertoe zadanie:" . '<br>';
function election($age)
        {
if ($age >= 18)
        {
return 'Vy vzrosliy, mozhete golosovat';
        }
elseif (18 - $age == 1 OR 18 - $age == 2 OR 18 - $age == 3 OR 18 - $age == 4)
{
return 'chtoby mozhno bylo golosovat ostalos ' . 18 - $age . ' goda';
}
else return 'chtoby mozhno bylo golosovat ostalos ' . 18-$age . ' let';
        }

echo election(16);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';



echo '<br>' . "Chetvertoe zadanie:";

function test(...$intValues)
{
$max=0;
foreach ($intValues as $n)
{
if ($n > $max)
{
$max = $n;
}
}
return $max;
}

echo '<br>' . test(5, 2, 10, 3, 100, 20);
?>
