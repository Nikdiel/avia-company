<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avia company</title>
    <link rel="stylesheet" href="css/account.css">
</head>
<body>

    <?php include "header.html" ?>
    
    <main>

    <!-- Секция личного кабинета -->
    <section>
        <h2>Личный кабинет</h2>
        <div class="profile-info">
            <h3>Информация о пользователе</h3>
            <p><strong>ФИО:</strong> Иванов Иван Иванович</p>
            <p><strong>Email:</strong> ivanov@example.com</p>
            <p><strong>Телефон:</strong> +7 (900) 123-45-67</p>
        </div>

        <div class="action-links">
            <h3>Действия</h3>
            <a href="/my-flights">Мои рейсы</a>
            <a href="">Обновить информацию</a>
            <a href="/logout">Выйти</a>
        </div>

        <h3>История бронирований</h3>
        <table>
            <thead>
                <tr>
                    <th>Рейс</th>
                    <th>Дата вылета</th>
                    <th>Дата прибытия</th>
                    <th>Город отправления</th>
                    <th>Город прибытия</th>
                    <th>Цена</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>SU123</td>
                    <td>2024-12-25</td>
                    <td>2024-12-25</td>
                    <td>Москва</td>
                    <td>Санкт-Петербург</td>
                    <td>4500 руб.</td>
                </tr>
                <tr>
                    <td>SU456</td>
                    <td>2024-12-30</td>
                    <td>2024-12-30</td>
                    <td>Сочи</td>
                    <td>Москва</td>
                    <td>6000 руб.</td>
                </tr>
            </tbody>
        </table>
    </section>

    
    </main>

    
    <?php include "footer.html" ?>

    <script src="js/.js"></script>
</body>
</html>