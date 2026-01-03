<?php
include 'config.php';
$id = $_GET['id'];
$conn->exec("DELETE FROM users WHERE id=$id");
header("Location: index.php");
?>