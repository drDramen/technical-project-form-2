<?php

$formNum = $_POST["formnum"];

$mail = "vvpalchin@gmail.com";
$subject = "Технічний проект Форми";
$text = "
    <h1>Форма № ".$formNum."</h1>
    <table border='1' cellpadding='4' cellspacing='0'>
        <tr>
            <td>Ім’я</td>
            <td>".$_POST["name-04"]."</td>
        </tr>
        <tr>
            <td>Пароль</td>
            <td>".$_POST["password"]."</td>
        </tr>
        <tr>
            <td>Місто</td>
            <td>".$_POST["city-04"]."</td>
        </tr>
        <tr>
            <td>Стать</td>
            <td>".$_POST["gender-04"]."</td>
        </tr>
        <tr>
            <td>Фото</td>
            <td>".$_POST["foto"]."</td>
        </tr>
        <tr>
            <td>Коментарій</td>
            <td>".$_POST["msg-04"]."</td>
        </tr>
    </table>
";
mail ($mail,$subject,$text,"Content-type: text/html; charset=utf-8 \r\n");
header("Location: ../index.html");
    exit;
?>
