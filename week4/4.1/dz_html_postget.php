<?php

if (isset($_GET['age'])) {
    var_dump($_GET['age']);
    echo "<br>";
}

if (isset($_GET['nation'])) {
    var_dump($_GET['nation']);
    echo "<br>";
}

if (isset($_GET['country'])) {
    var_dump($_GET['country']);
    echo "<br>";
}

?>

<!-- дописать не хватающих атрибутов -->
<form method="get">
    Имя: <input type="text" name="name">
    <button type="submit">отправить</button>
</form>
?>

