<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    $to = 'info@yankee.kz';
    $name = $_POST['name'];
    $from = $_POST['email'];
    $message = $_POST['message'];

    require_once "SendMailSmtp.php"; // подключаем класс
    $mailSMTP = new SendMailSmtpClass('info@yankee.kz', 'z6f4opl56vb', 'mail.yankee.kz', 'info@yankee.kz'); // создаем экземпляр класса
    // $mailSMTP = new SendMailSmtpClass('логин', 'пароль', 'хост', 'имя отправителя');
    // заголовок письма
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
    $headers .= "From: $from\r\n"; // от кого письмо
    $result = $mailSMTP->send($to, $name, $message, $headers); // отправляем письмо
    // $result = $mailSMTP->send('Кому письмо', 'Тема письма', 'Текст письма', 'Заголовки письма');
    if ($result === true) {
        echo "Письмо успешно отправлено";
    } else {
        echo "Письмо не отправлено. Ошибка: " . $result;
    }
}
else{
    header("Location: http://yankee.kz");
}
