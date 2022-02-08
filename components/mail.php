<?php
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$email = 'somemail@company.com';
$subject = 'Заявка на консультацию';

$name = $_POST['name'];
$mobilePhone = $_POST['mobilePhone'];
$problem = $_POST['problem'];

$message = 'Поступила заявка на консультацию.<br>'. 'Имя: ' . $name . '.<br>' . 'Телефон: ' . $mobilePhone . '.<br>' .

            'Вопрос/Проблема: ' . $problem;

mail($email, $subject, $message, $headers);