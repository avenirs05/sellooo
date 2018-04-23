<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/parts/head.php'; ?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/parts/modal.php'; ?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/parts/footer.php'; ?>

<div class="thank-you container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="thank-you__text-content text-center">
                <span>Спасибо за обращение! С вами свяжутся в ближайшее время!</span><br>
                <span>Вернуться на <a href="index.php">Главную.</a></span>
            </div>
        </div>
    </div>
</div>

<?php // require_once 'footer.php'; ?>

<?php 

// print_r($_POST);

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$to = 'info@sellooo.ru, domosed365365@gmail.com';
$subject = "Заявка с сайта sellooo.ru";


$message = '<html>
                <head>
                </head>
                    <body>
                    <strong>Тема: заявка с сайта sellooo.ru</strong><br><br><br>' .
                    '<b>Имя:</b> ' . $_POST['name'] . '<br><br>' .
                    '<b>Телефон:</b> ' . $_POST['phone'] . '<br><br>' .
                    '<b>Email:</b> ' . $_POST['email'] . '<br><br>' .
                    '<b>Сообщение:</b> ' . $_POST['message'] . '<br><br>' .  
                    '</body>
            </html>';

mail($to, $subject, $message, $headers);
exit();


?>


