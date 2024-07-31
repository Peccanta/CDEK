<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СДЭК | Курьерская доставка для компаний и интернет-магазинов</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="content">

        <div class="loop-wrapper">
            <div class="mountain"></div>
            <div class="hill"></div>
            <div class="tree"></div>
            <div class="tree"></div>
            <div class="tree"></div>
            <div class="rock"></div>
            <div class="truck"></div>
            <div class="wheels"></div>
        </div>

        <img src="logo.png" alt="СДЭК | Работаем всегда!" class="logotip">

        <h1>КУРЬЕРСКАЯ ДОСТАВКА ДЛЯ КОМПАНИЙ<br>И ИНТЕРНЕТ-МАГАЗИНОВ</h1>
        <ul>
            <li>Быстрая доставка в короткие сроки</li>
            <li>Надежный сервис и широкая география</li>
            <li>Экономьте до 40% на доставке с договором СДЭК</li>
            <li>Договор с юр.лицом, ИП и самозанятым за 15 минут!</li>
        </ul>

        <button id="openModalBtn">ЗАКЛЮЧИТЬ ДОГОВОР</button>
    </div>


    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form id="contactForm">
                <h2 align="center">ЗАКЛЮЧИТЬ ДОГОВОР</h2>

                <label for="name">Имя:</label><br>
                <input type="text" id="name" name="name" placeholder="Александр" required><br><br>

                <label for="inn">ИНН:</label><br>
                <input type="text" id="inn" name="inn" placeholder="123456789012" required><br><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" placeholder="example@mail.ru" required><br><br>

                <label for="phone">Номер телефона:</label><br>
                <input type="text" id="phone" name="phone" placeholder="+7(999)-999-99-99" required><br><br>

                <input type="submit" value="ОТПРАВИТЬ">
            </form>
            <p id="responseMessage" align="center"></p>
        </div>
    </div>


    <script src="scripts.js"></script>
    <script src="jquery.js"></script>
</body>

</html>