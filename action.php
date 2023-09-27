<!DOCTYPE html>
<html>
<head>
    <title>Обработчик формы</title>
</head>
<body>

<h2>Результаты отправки формы</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $имя = $_POST["имя"];
    $email = $_POST["email"];
    $пароль = $_POST["пароль"];
    $пол = $_POST["пол"];
    $интересы = $_POST["интересы"];
    $комментарий = $_POST["комментарий"];

    echo "<p>Имя: $имя</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Пароль: $пароль</p>";
    echo "<p>Пол: $пол</p>";
    echo "<p>Интересы: $интересы</p>";
    echo "<p>Комментарий: $комментарий</p>";
} else {
    echo "Данные не были отправлены.";
}
?>

</body>
</html>
