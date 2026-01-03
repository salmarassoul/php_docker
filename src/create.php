<?php include 'config.php';

if ($_POST) {
    $name = $_POST['name'];
    $conn->exec("INSERT INTO users(name) VALUES('$name')");
    header("Location:index.php");
}
?>

<form method="POST">
    Nom : <input type="text" name="name" required>
    <button type="submit">Ajouter</button>
</form>
