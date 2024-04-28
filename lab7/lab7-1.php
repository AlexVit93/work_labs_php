<?php
$align = 'left';
$valign = 'top';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $align = isset($_POST['align']) ? $_POST['align'] : 'left';
    $valign = isset($_POST['valign']) ? $_POST['valign'] : 'top';
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица с выбором расположения текста</title>
    <style>
        .label{
            text-align: center;
            font-weight: bold;
        }
        body .form-group{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 10px;
        }
        input[type="submit" i]{
            margin-top: 1vw;
        }
    </style>
</head>
<body>
<div class="form-group">
<table width="100px" height="100px" border="1">
    <tr>
        <td align="<?= $align; ?>" valign="<?= $valign; ?>">Текст</td>
    </tr>
</table>
</div>

<form action="<?=$_SERVER["PHP_SELF"]; ?>" method="post">
<p class="label">Выберите горизонтальное расположение:</p>
<div class="form-group">
    <input type="radio" name="align" value="left" <?= $align == 'left' ? 'checked' : ''; ?>>Слева
    <input type="radio" name="align" value="center" <?= $align == 'center' ? 'checked' : ''; ?>>По центру
    <input type="radio" name="align" value="right" <?= $align == 'right' ? 'checked' : ''; ?>>Справа
    <br>
    <p class="label">Выберите вертикальное расположение:</p>
    <input type="checkbox" name="valign" value="top" <?= $valign == 'top' ? 'checked' : ''; ?>>Сверху
    <input type="checkbox" name="valign" value="middle" <?= $valign == 'middle' ? 'checked' : ''; ?>>Посередине
    <input type="checkbox" name="valign" value="bottom" <?= $valign == 'bottom' ? 'checked' : ''; ?>>Снизу
    <br>
    <input type="submit" value="Выполнить">
</form>
</div>

</body>
</html>
