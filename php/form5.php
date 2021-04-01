<?php

$formNum = $_POST["formnum"];

if ($_POST["user-agreement"]) {
  $uAgr = "
    <table>
        <tr>
            <td><strong>Я погоджуюсь з правилами оплати та доставки товару</strong></td>
        </tr>
    </table>
    ";
}


$mail = "vvpalchin@gmail.com";
$subject = "Технічний проект Форми";
$text = "
    <h1>Форма № " . $formNum . "</h1>
    <table border='0' cellpadding='0' cellspacing='0'>
        <tr>
            <td align='right' style='padding-right: 10px;'>Ім’я:</td>
            <td>" . $_POST["name-05"] . "</td>
        </tr>
        <tr>
            <td align='right' style='padding-right: 10px;'>Email:</td>
            <td>" . $_POST["email-05"] . "</td>
        </tr>
        <tr>
            <td align='right' style='padding-right: 10px;'>Телефон:</td>
            <td>" . $_POST["phone-05"] . "</td>
        </tr>
        <tr>
            <td align='right' style='padding-right: 10px;'>Країна:</td>
            <td>" . $_POST["country-05"] . "</td>
        </tr>
        <tr>
            <td align='right' style='padding-right: 10px;'>Адреса:</td>
            <td>" . $_POST["city-05"] . "</td>
        </tr>
        <tr>
            <td align='right' style='padding-right: 10px;'>Місто:</td>
            <td>" . $_POST["msg-04"] . "</td>
        </tr>
        <tr>
            <td align='right' style='padding-right: 10px;'>Будинок:</td>
            <td>" . $_POST["num-house-05"] . "</td>
        </tr>
        <tr>
            <td align='right' style='padding-right: 10px;'>Поштовий індекс:</td>
            <td>" . $_POST["postcode-05"] . "</td>
        </tr>
    </table>
    " . $uAgr . "
";
mail($mail, $subject, $text, "Content-type: text/html; charset=utf-8 \r\n");
header("Location: ../index.html");
exit;
