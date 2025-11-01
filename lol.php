<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма заказа</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"> <!-- Подключите ваш основной файл стилей -->
</head>
<body>
    <section class="order-form">
        <div class="container">
            <h2>Форма заказа</h2>
            <form action="lol.php" method="POST" class="form">
                <label for="tarif">Тариф:</label>
                <select name="tarif" id="tarif" required>
                    <option value="">Выберите тариф</option>
                    <option value="Комфорт">Комфорт</option>
                    <option value="Эконом">Эконом</option>
                </select>
                
                <label for="time">Время:</label>
                <input type="time" name="time" id="time" required>
                
                <input type="submit" value="Отправить" class="submit-button">
            </form>
        </div>
    </section>


    <?php
$link = mysqli_connect('localhost', 'root', '', 'aleksandrov');


if(!empty($_POST)){
    $tarif = $_POST['tarif'];
$time = $_POST['time'];
$status = 'в ожидании'; // Статус по умолчанию

// SQL-запрос для вставки данных
$sql = "INSERT INTO application (tarif, time, status) VALUES ('$tarif', '$time', '$status')";

$result = mysqli_query($link, $sql);
}
// Получаем данные из формы

?>

</body>
</html>
