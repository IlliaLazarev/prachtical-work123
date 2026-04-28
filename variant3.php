<?php
$name = "";
$age = "";
$gender = "";
$desc = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $desc = $_POST["desc"];

    if ($name == "") {
        $error = "Введіть ім'я";
    }
    elseif (!is_numeric($age) || $age < 10 || $age > 100) {
        $error = "Вік неправильний";
    }
    elseif ($gender == "") {
        $error = "Оберіть стать";
    }
    elseif ($desc == "") {
        $error = "Напишіть опис";
    }
    else {
        echo "<h3>Дані:</h3>";
        echo "Ім'я: $name <br>";
        echo "Вік: $age <br>";
        echo "Стать: $gender <br>";
        echo "Опис: $desc";
    }
}
?>

<form method="post">
    Ім'я:<br>
    <input type="text" name="name"><br><br>

    Вік:<br>
    <input type="text" name="age"><br><br>

    Стать:<br>
    <input type="radio" name="gender" value="ч"> Ч
    <input type="radio" name="gender" value="ж"> Ж
    <br><br>

    Опис:<br>
    <textarea name="desc"></textarea><br><br>

    <button>Відправити</button>
</form>

<p style="color:red;"><?php echo $error ?></p>
