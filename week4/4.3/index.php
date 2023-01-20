<?php
/*
вывести здесь то что пришло из формы (как угодно)
не забудьте проверить isset
*/

$none = 0;
if(isset($_POST['student'])) {
    foreach ($_POST['student'] as $std) {
        if ($std != '')
        {
            $none +=1;
        }
    }

    if ($none > 0) {
        foreach ($_POST['student'] as $std) {
            echo "Student Name: $std<br>";
        }
    }
    else{
        echo "You must select at least one student.<br>";
    }

}







?>

<!-- Задайте правильное название в атрибуте name, чтобы данные из этой формы отправились как массив -->
<form method="post">
    <div>
        Первый ученик:<br> ФИО: <input type="text" name="student[]">
    </div>
    <hr>
    <div>
        Второй ученик:<br> ФИО: <input type="text" name="student[]">
    </div>
    <hr>
    <div>
        Третий ученик:<br> ФИО: <input type="text" name="student[]">
    </div>
    <hr>
    <div>
        Четвертый ученик:<br> ФИО: <input type="text" name="student[]">
    </div>
    <hr>

    <button type="submit">отправить</button>
</form>
