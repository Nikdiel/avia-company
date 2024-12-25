<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avia company</title>
    <link rel="stylesheet" href="css/tickets.css">
    <link rel="icon" href="">
</head>
<body>

    <?php include "header.html" ?>


    <main>
    <!-- Секция поиска рейсов по дате -->
    <section class="search-section">
        <h2>Выберите дату для поиска рейсов</h2>
        <input type="date" id="search-date" name="search-date">
    </section>

    sect.race>.raceAll>.raceContainer>h1{Откуда : Куда}+p{Дата вылета: }+p{Дата прибытия}

    <!-- Секция акций -->
    <section class="deals-section">
        <h2>Акции</h2>
        <p>Скидка 20% на рейсы в Европу! Действует до конца месяца.</p>
        <p>Бесплатный багаж для внутренних рейсов на сумму свыше 10,000 руб.</p>
    </section>

    <!-- Секция формы -->
    <section class="form-section">
        <h2>Бронирование рейса</h2>
        <form action="/submit-flight" method="POST">
            <label for="full-name">ФИО</label>
            <input type="text" id="full-name" name="full_name" placeholder="Введите ваше ФИО" required>

            <label for="departure-date">Дата вылета</label>
            <input type="date" id="departure-date" name="departure_date" required>

            <label for="arrival-date">Дата прибытия</label>
            <input type="date" id="arrival-date" name="arrival_date" required>

            <label for="departure-city">Город отправления</label>
            <input type="text" id="departure-city" name="departure_city" placeholder="Введите город отправления" required>

            <label for="arrival-city">Город прибытия</label>
            <input type="text" id="arrival-city" name="arrival_city" placeholder="Введите город прибытия" required>

            <label for="price">Цена</label>
            <input type="number" id="price" name="price" placeholder="Введите цену рейса" required step="0.01">

            <button type="submit">Отправить</button>
        </form>
    </section>
    
    </main>

    <?php include "footer.html" ?>
    
    <script src="js/.js"></script>
</body>
</html>