<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    $name = isset($_POST['name']) ? $_POST['name'] : 'Аноним';

    $positive_questions = [3, 9, 10, 13, 14, 19];
    $negative_questions = [1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18];

    foreach ($_POST as $key => $value) {
        if ($value === 'yes') {
            if (in_array(substr($key, -1), $positive_questions)) {
                $score++;
            }
        } elseif ($value === 'no') {
            if (in_array(substr($key, -1), $negative_questions)) {
                $score++;
            }
        }
    }

    if ($score > 15) {
        $result = "У Вас покладистый характер";
        $image = "./img/first.png"; 
    } elseif ($score >= 8) {
        $result = "Вы не лишены недостатков, но с вами можно ладить";
        $image = "./img/second.png"; 
    } else {
        $result = "Вашим друзьям можно посочувствовать";
        $image = "./img/third.png"; 
    }

    echo "<h1>Результат анкетирования: $name</h1>";
    echo "<p>$result</p>";
    echo "<img src='$image' alt='Результат'>";
} else {
    echo "Анкета не была отправлена!";
}


