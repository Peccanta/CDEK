<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Функция для очистки данных
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Проверка данных
    $name = test_input($_POST["name"]);
    $inn = test_input($_POST["inn"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);

    // Валидация имени
    if (!preg_match("/^[a-zA-Zа-яА-ЯёЁ\s]+$/u", $name)) {
        die("Неверный формат имени");
    }

    // Валидация ИНН (для физических лиц в России ИНН состоит из 12 цифр)
    if (!preg_match("/^\d{12}$/", $inn)) {
        die("Неверный формат ИНН");
    }

    // Валидация email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Неверный формат Email");
    }

    // Валидация номера телефона (пример для российских номеров телефона)
    if (!preg_match("/^\+?[78][-(]?\d{3}\)?[- ]?\d{3}[- ]?\d{2}[- ]?\d{2}$/", $phone)) {
        die("Неверный формат номера телефона");
    }

    // Отправка email
    $to = "example@mail.ru";
    $subject = "Заключение договора (сообщение с формы обратной связи)";
    $message = "Имя: $name\nИНН: $inn\nEmail: $email\nНомер телефона: $phone";
    $headers = "From: notification@site.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Сообщение успешно отправлено!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
} else {
    echo "Ошибка при отправке формы.";
}
?>
