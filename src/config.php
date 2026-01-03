<?php
try {
    $conn = new PDO(
        'mysql:host=mysql;dbname=crud_db;charset=utf8',
        'appuser',
        'apppassword'
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion: " . $e->getMessage());
}
?>