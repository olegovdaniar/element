<?php

// Ниже имена знаменитостей и их возраст
$nameAndAges = [
    'Tom Hiddleston' => 41,
    'Arnold Schwarzenegger' => 75,
    'Tom Cruise' => 60,
    'Brad Pitt' => 58,
    'Tom Hanks' => 66,
    'Johnny Depp' => 59,
    'Leonardo DiCaprio' => 48,
    'Will Smith' => 54,
    'Dwayne Johnson' => 50,
    'Hugh Jackman' => 54,
    'Robert Downey Jr.' => 57,
    'Chris Evans' => 41,
    'Jackie Chan' => 68,
    'Jason Momoa' => 43,
    'Samuel L. Jackson' => 73,
    'Al Pacino' => 82,
];


// Задачи с этим массивом:
echo "1.1 сделать сортировку по возрасту, молодые в начале массива";
echo "<br>";
//asort($nameAndAges);
//$tmpArray = [];
//foreach ($nameAndAges as $name => $age) {
//    $tmpArray[] = $name . ' - ' . $age;
//}
//echo "<ul><li>" . implode("</li><li>", $tmpArray) . "</li></ul><hr>";
asort($nameAndAges);
$arrlength = count($nameAndAges);
foreach($nameAndAges as $x => $x_value)
	{
		echo "Ключ=" . $x . ", Значение=" . $x_value;
		echo "<br>";
	}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";












echo "1.2 сделать сортировку по возрасту, молодые в конце массива";
echo "<br>";
// здесь ваш код
//...
//echo "<ul><li>" . implode("</li><li>", $nameAndAges) . "</li></ul><hr>";
arsort($nameAndAges);
$arrlength = count($nameAndAges);
foreach($nameAndAges as $x => $x_value)
	{
		echo "Ключ=" . $x . ", Значение=" . $x_value;
		echo "<br>";
	}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo "1.3 сделать сортировку по имени, от A до Z"; 
echo "<br>";
// здесь ваш код
//...
//echo "<ul><li>" . implode("</li><li>", array_keys($nameAndAges)) . "</li></ul><hr>";
ksort($nameAndAges);
$arrlength = count($nameAndAges);
foreach($nameAndAges as $x => $x_value)
	{
		echo "Ключ=" . $x . ", Значение=" . $x_value;
		echo "<br>";
	}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



echo "1.4 сделать сортировку по имени, от Z до A"; 
echo "<br>";
// здесь ваш код
//...
//echo "<ul><li>" . implode("</li><li>", array_keys($nameAndAges)) . "</li></ul><hr>";

krsort($nameAndAges);
$arrlength = count($nameAndAges);
foreach($nameAndAges as $x => $x_value)
	{
		echo "Ключ=" . $x . ", Значение=" . $x_value;
		echo "<br>";
	}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



//-------------------------------------------------------------

$jsonString = '{"menu": {
  "id": "file",
  "value": "File",
  "popup": {
    "menuitem": [
      {"value": "New", "onclick": "CreateNewDoc()"},
      {"value": "Open", "onclick": "OpenDoc()"},
      {"value": "Close", "onclick": "CloseDoc()"}
    ]
  }
}}';
$jsonArray = [];

echo "2. Преобразовать JSON строку в массив и вывести" . "<br>";
// здесь ваш код
$jsonArray = json_decode($jsonString, true);
//var_dump($jsonArray);
// вывод массива

echo '<pre>';
print_r($jsonArray);
echo '</pre>';

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//-------------------------------------------------------------

$integers = [60,43,20,53,7,38,56,7,56,23,13,54,33,39,48,21,12,53,10,20,23,27,4,35,17,55,9,54,52,54,11,1,26,39,35,15,56,59,9,53,20,53,47,42,12,10,23,58,9,54];
echo "3.1 Вывести все числа из массива, между 22 и 35" . "<br>"; 
// здесь ваш код
foreach($integers as $value) {
    if ($value >= 22 and $value <= 35){
        echo $value;
        echo ' ';
    }
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//echo '...';


echo "3.2 Вывести среднеарифметическое значение из массива чисел" . "<br>";
$sum = 0;
$arrlength = count($integers);
foreach($integers as $value) {
    $sum+=$value;
    }
$arif = $sum / $arrlength;

echo $arif;

echo "<br>";
echo "<br>";


//var_dump(array_sum($integers)/count($integers));
//echo '...';
