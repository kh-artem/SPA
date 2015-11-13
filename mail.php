<?php

$recepient = "artem.khudashchov@gmail.com";
$sitename = "Slovave";

$name = trim($_GET["name"]);
$email = trim($_GET["email"]);
$subject = trim($_GET["subject"]);
$message = trim($_GET["yourMessage"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nEmail: $email \nТема: $subject \nСообщение: $message";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>