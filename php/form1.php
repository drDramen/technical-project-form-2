<?php

$formNum = $_POST["formnum"];



$mail = "vvpalchin@gmail.com";
$subject = "Технічний проект Форми";
$text = "
    <h1>Форма № ".$formNum."</h1>
    <table border='1' cellpadding='4' cellspacing='0'>
        <tr>
            <td>Ім’я</td>
            <td>".$_POST["name"]."</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>".$_POST["email"]."</td>
        </tr>
        <tr>
            <td>Місто</td>
            <td>".$_POST["city-01"]."</td>
        </tr>
        <tr>
            <td>Повідомлення</td>
            <td>".$_POST["msg"]."</td>
        </tr>
    </table>

";
mail ($mail,$subject,$text,"Content-type: text/html; charset=utf-8 \r\n");
?>
