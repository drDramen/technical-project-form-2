<?php
/*$firstWord="Hello";
$secondWord="World";
echo ($firstWord." ".$secondWord);*/

$mail="vvpalchin@gmail.com";
$subj="Перший лист";
$text="
    <h1 style='color: red;'>Привіт ".$_POST["name"]."</h1>
    <p>це твоє перше поштове повідомлення надіслане за допомогою <strong style='font-style: italic;'>PHP</strong></p>
    <p>Город: ".$_POST["city-01"]."</p>
";
mail ($mail,$subj,$text,"Content-type: text/html; charset=utf-8 \r\n");
echo ("Done");

?>
