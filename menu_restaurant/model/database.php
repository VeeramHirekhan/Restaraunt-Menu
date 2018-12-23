<?php
    $dsn = 'mysql:host=localhost;dbname=prog4db';
    $username = 'ts_user';
    $password = 'pa55word';

    //create connection
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>