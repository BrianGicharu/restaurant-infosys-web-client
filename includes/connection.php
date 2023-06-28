<?php

include_once('settings.php');

try {
    $pdo = new PDO("mysql:host=".HOST.";dbname=".DB, USER, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}