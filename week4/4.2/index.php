<?php


$name = $_POST['name'] ?? '';
$age = $_POST['age'] ?? '';
$nation = $_POST['nation'] ?? '';
$job = $_POST['job'] ?? '';
if (!empty($name) && !empty($age) && !empty($nation) && !empty($job)) {
    if (!is_numeric($age)) {
        $age = '';
        echo 'введите в поле возраст число';
    } else {
        echo "Привет {$name}, твой возраст: {$age}, your nation: {$nation}, your job: {$job}";
    }
}
?>


<form method="post">
    Имя: <input type="text" name="name" value="<?= $name ?>">
    Возраст: <input type="text" name="age" value="<?= $age ?>">
    Nation: <input type="text" name="nation" value="<?= $nation ?>">
    Job: <input type="text" name="job" value="<?= $job ?>">
    <button type="submit">отправить</button>
</form>
