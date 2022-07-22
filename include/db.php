<?php
    define('DB_HOST', 'localhost' );
    define('DB_USER', 'root' );
    define('DB_PASSWORD', 'root' );
    define('DB_NAME', 'telegram_bot' );

    $mysql = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($mysql->connect_error) {
        exit('Ошибка подключения к БД');
    }
    $mysql->set_charset('UTF8');

?>
