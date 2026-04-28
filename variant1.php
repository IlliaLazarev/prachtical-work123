<?php
$name = "";
$email = "";
$message = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    if ($name == "") {
        $error = "Введіть ім'я";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Неправильний email";
    }
    elseif (strlen($message) < 20) {
        $error = "Повідомлення занадто коротке";
    }
    else {
        echo "Повідомлення відправлено!";
    }
}
?>

<form method="post">
    Ім'я:<br>
    <input type="text" name="name" value="<?php echo $name ?>"><br><br>

    Email:<br>
    <input type="text" name="email" value="<?php echo $email ?>"><br><br>

    Повідомлення:<br>
    <textarea name="message"><?php echo $message ?></textarea><br><br>

    <button>Відправити</button>
</form>

<p style="color:red;"><?php echo $error ?></p>
