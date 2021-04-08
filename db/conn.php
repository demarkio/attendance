<?php 
    // Development Connection
    $host = 'localhost'; // 127.0.0.1 = localhost
    $port= '8080';
    $db = 'attendance_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    // Live Database Connection
    // $host = 'localhost'; // 127.0.0.1 = localhost
    // $port= '8080';
    // $db = 'attendance_db';
    // $user = 'root';
    // $pass = '';
    // $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);

    $user->insertUser("admin","password");
?>