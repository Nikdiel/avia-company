<?php 
    session_start();
    require "connect.php";

    if (isset($_POST['submit'])) { 

        $d_city = $_POST['departure_city'];
        $a_city = $_POST['arrival_city'];
        $d_date = $_POST['departure_date'] ?? null; 
        $min_price = $_POST['min_price'] ?? null;  
        $max_price = $_POST['max_price'] ?? null;  

        $query = "SELECT * FROM `race` WHERE departure_city = ? AND arrival_city = ?";
        $params = [$d_city, $a_city];
        $types = "ss";

        // Добавляем условие для даты, если указана
        if (!empty($d_date)) {
            $query .= " AND departure_date = ?";
            $params[] = $d_date;
            $types .= "s";
        }

        // Добавляем условия для цены, если указаны
        if (!empty($min_price)) {
            $query .= " AND price >= ?";
            $params[] = (int)$min_price;
            $types .= "i";
        }

        if (!empty($max_price)) {
            $query .= " AND price <= ?";
            $params[] = (int)$max_price;
            $types .= "i";
        }

        $stmt = $conn->prepare($query);
        $stmt->bind_param($types, ...$params);

        $stmt->execute();
        $race = $stmt->get_result();
    } else {
        $race = $conn->query("SELECT * FROM `race`"); 
    }
?>

<?php include "header.html" ?>
<link rel="stylesheet" href="css/search.css">


    <main>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div>
                <div class="input-box">
                    <label for="departure_city">Куда:</label>
                    <input type="text" name="departure_city" <?php if (isset($_POST['return'])) {echo "required";}?>>
                </div>
                <div class="input-box">
                    <label for="arrival_city">Откуда:</label>
                    <input type="text" name="arrival_city" <?php if (isset($_POST['return'])) {echo "required";}?>>
                </div>
                <div class="input-box">
                    <label for="departure_date">Дата вылета:</label>
                    <input type="date" name="departure_date">
                </div>
                <div class="input-box">
                    <label>Цена:</label>
                    <div style="display: flex; gap: 5%;">
                        от<input type="text" name="min_price">
                        до<input type="text" name="max_price">
                    </div>
                </div>
            </div>
            <?php
                if (isset($_POST['submit'])) {
                    echo '<button type="submit" name="return">Показать все</button>';
                } 
                if (isset($_POST['return'])) {
                    $race = $conn->query("SELECT * FROM `race`");
                }
            ?>
            <button type="submit" name="submit">Найти</button>
            
        </form>  

        <h1>Возможные варианты</h1>

        <table border="1px">
            <tr>
                <th>Откуда</th>
                <th>Куда</th>
                <th>Дата отправки</th>
                <th>Дата прибытия</th>
                <th>Цена</th>
                <th></th>
            </tr>
            
                <?php
                        if ($race->num_rows > 0) {
                            while ($row = $race->fetch_assoc()) {
                                $departureDate = $row['departure_date'];
                                $departureTime = $row['departure_time'];

                                $arrivalDate = $row['arrival_date'];
                                $arrivalTime = $row['arrival_time'];

                                echo "
                                <tr>
                                    <td>". $row['departure_city']."</td>
                                    <td>". $row['arrival_city']."</td>
                                    <td>". $departureDate . "<br>Время отправки: " . $departureTime ."</td>
                                    <td>". $arrivalDate . "<br>Время посадки: " . $arrivalTime ."</td>
                                    <td>". $row['price']." тг</td>
                                    <td style='display: flex; align-items: center; justify-content: center; padding: 15px;'><a href='book.php?ri=".$row['id']."'>Забронировать</button></td>
                                </tr>
                                ";
                            }
                        } else {
                            echo "Данные не найдены.";
                        }
                        // Освобождение результата
                        $race->free();
                ?>   
        </table>
    </main>

<?php include "footer.html" ?>
