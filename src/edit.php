<?php
include 'config.php';
$id = $_GET['id'];

if ($_POST) {
    $name = $_POST['name'];
    $conn->exec("UPDATE users SET name='$name' WHERE id=$id");
    header("Location: index.php");
}

$user = $conn->query("SELECT * FROM users WHERE id=$id")->fetch();
?>

<form method="POST">
    Nom : <input type="text" name="name" value="<?= $user['name'] ?>" required>
    <button type="submit">Modifier</button>
</form>
