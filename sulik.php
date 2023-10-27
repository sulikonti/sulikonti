<?php
$servername = "localhost"; // Имя сервера базы данных
$username = "root"; // Имя пользователя базы данных
$password = ""; // Пароль пользователя базы данных
$dbname = "sulik"; // Имя созданной вами базы данных

// Установка соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение данных из формы
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$specialty = $_POST['specialty'];
$qualification = $_POST['qualification'];
$question = $_POST['question'];

// SQL-запрос для вставки данных в таблицу
$sql = "INSERT INTO users (name, surname, email, city, phone, specialty, qualification, question) VALUES ('$name', '$surname', '$email', '$phone','$city', '$specialty', '$qualification', '$question')";

if ($conn->query($sql) === TRUE) {
    echo "Заявка успешно отправлена";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
