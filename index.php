<?php
printf("№1: Округлите значение");
echo "<br>";
printf("3.65 => 3.7");
echo "<br>";
printf("6.65 => 6.6");
echo "<br>";
printf("-11.54 => -11.5");
echo "<br>";
echo "<br>";
printf("№1: Ответы:");
echo "<br>";
printf(round(3.65, 1));
echo "<br>";
printf(round(6.65, 1, PHP_ROUND_HALF_DOWN));
echo "<br>";
printf(round(-11.54, 1, PHP_ROUND_HALF_UP));
echo "<br>";
echo "<br>";







printf("Задание №2:");
echo "<br>";
$A = rand(0, 10);
printf("Переменная А=$A");
echo "<br>";
$B = rand(0, 0);
printf("Переменная В=$B");
echo "<br>";
$PLUS = 1;
$MINUS = 2;
$MULTIPLICATION = 3;
$DIVISION = 4;
$MOD = 5;
$operator = rand(1, 5);
$val = -555;
if ($operator == 1)
    printf("Переменная operator=$operator операция сложения");
else if ($operator == 2)
    printf("Переменная operator=$operator операция вычетания");
else if ($operator == 3)
    printf("Переменная operator=$operator операция умножения");
else if ($operator == 4)
    printf("Переменная operator=$operator операция деления");
else if ($operator == 5)
    printf("Переменная operator=$operator операция деления по модулю");

echo "<br>";
if ($operator == 1) {
   echo "ответ: {$A} + {$B} = " . $val = $A + $B;
}
else if ($operator == 2) {
    echo "ответ: {$A} - {$B} = " . $val = $A - $B ;
}
else if ($operator == 3) {
    echo "ответ: {$A} * {$B} = " . $val = $A * $B ;
}
else if ($operator == 4 ) {
    if ($B != 0) {
        echo "ответ: {$A} / {$B} = " . $val = $A / $B ;
    }
    else {
        printf("ответ: {$A} / {$B} = На ноль делить нельзя!");
    }
}
else if ($operator == 5) {
    if ($B != 0) {
        echo "ответ: {$A} % {$B} = " . $val = $A % $B ;
    }
    else {
        printf("ответ: На ноль делить нельзя!");
    }
}
echo "<br>";
echo "<br>";
echo "<br>";








printf("Задание №3:");
define("ROCK", "1");
define("PAPER", "2");
define("SCISSORS", "3");
$ANNA = rand(1,3);
$AKERKE = rand(1,3);
if ($ANNA == 1) {
    printf("ANNA: Камень");
}
else if ($ANNA == 2) {
    printf("ANNA: Бумага");
}
else if ($ANNA == 3) {
    printf("ANNA: Ножницы");
}
echo "<br>";
if ($AKERKE == 1) {
    printf("AKERKE: Камень");
}
else if ($AKERKE == 2) {
    printf("AKERKE: Бумага");
}
else if ($AKERKE == 3) {
    printf("AKERKE: Ножницы");
}
echo "<br>";
if ($ANNA == $AKERKE) {
    echo "Ничья";
}
else if ($ANNA == ROCK and $AKERKE == PAPER){
    echo "Выиграл игрок AKERKE";
}
else if ($ANNA == ROCK and $AKERKE == SCISSORS){
    echo "Выиграл игрок ANNA";
}
else if ($ANNA == PAPER and $AKERKE == ROCK){
    echo "Выиграл игрок ANNA";
}
else if ($ANNA == PAPER and $AKERKE == SCISSORS){
    echo "Выиграл игрок AKERKE";
}
else if ($ANNA == SCISSORS and $AKERKE == ROCK){
    echo "Выиграл игрок AKERKE";
}
else if ($ANNA == SCISSORS and $AKERKE == PAPER){
    echo "Выиграл игрок ANNA";
}
echo "<br>";
echo "<br>";






printf("Задание №4:");
echo "<br>";
$Q = rand(0, 10);
$W = rand(0, 10);
printf("Первая переменная:". $Q);
echo "<br>";
printf("Первая переменная:". $W);
echo "<br>";
echo "<br>";
$Q = $Q + $W;
$W = $Q - $W;
$Q = $Q - $W;
printf("Первая переменная:". $Q);
echo "<br>";
printf("Первая переменная:". $W);







echo "<br>";
echo "<br>";
printf("Задание №5:");
echo "<br>";
$String = "Олегов Данияр Айдарулы";
echo "<br>" . $String;
$String = mb_convert_case($String, MB_CASE_UPPER, "UTF-8");
echo "<br>" . $String;
$String = mb_convert_case($String, MB_CASE_LOWER, "UTF-8");
echo "<br>" . $String;



echo "<br>";
echo "<br>";
printf("Задание №6:");
$text= "elementSchool@gmail.com";
$splits = explode("@", $text);
echo "<br>" . $splits[0];
echo "<br>" . $splits[1];


echo "<br>";
echo "<br>";
printf("Задание №7:");
$text1 = "Время голосования на выборах изменили в трех городах Казахстана";
echo "<br>" . $text1;
$splits = explode(" ", $text1);
$arr1 = str_split($text1, 1);
echo "<br>";
$count = 1;
for ($i = 0; $i <= strlen($text1) - 1; $i++){
    if ($arr1[$i] == " "){
        $count++;
    }
}
$buff = $splits[0];
$splits[0] = $splits [$count-1];
$splits [$count-1] = $buff;
$text1="";
for ($i = 0; $i <= $count-1; $i++){
    $text1 .= $splits[$i]." ";
}
echo "<br>" . $text1;


echo "<br>";
echo "<br>";
printf("Задание №8:");

?>
<form method='get' action='postget.php' id = form1>
    <input name = 'age'>
</form>
<button type="submit" form="form1" value="Submit">Submit</button>


<form method='post' action='postget.php' id = form2>
    <input name = 'age'>
</form>
<button type="submit" form="form2" value="Submit">Submit</button>



