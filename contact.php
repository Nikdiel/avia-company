<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avia company</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>

    <?php include "header.html" ?>

    <main>
    

    <!-- Секция контактов -->
    <section>
        <h2>Контакты</h2>
        <div class="contact-info">
            <h3>Наш адрес</h3>
            <p>г. Москва, ул. Пушкина, д. 10</p>

            <h3>Телефон</h3>
            <p>+7 (495) 123-45-67</p>

            <h3>Электронная почта</h3>
            <p><a href="mailto:info@avia-company.com">info@avia-company.com</a></p>

            <h3>Часы работы</h3>
            <p>Понедельник — Пятница: 9:00 — 18:00</p>
            <p>Суббота — Воскресенье: выходной</p>
        </div>

        <div class="contact-form">
            <h3>Свяжитесь с нами</h3>
            <form action="/submit-contact" method="POST">
                <label for="name">Ваше имя</label>
                <input type="text" id="name" name="name" placeholder="Введите ваше имя" required>

                <label for="email">Ваш email</label>
                <input type="email" id="email" name="email" placeholder="Введите ваш email" required>

                <label for="message">Сообщение</label>
                <textarea id="message" name="message" placeholder="Введите ваше сообщение" rows="5" required></textarea>

                <button type="submit">Отправить</button>
            </form>
        </div>
    </section>

    </main>

    
    <?php include "footer.html" ?>
    

    <script src="js/.js"></script>
</body>
</html>