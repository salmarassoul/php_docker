<?php include 'config.php'; ?>
<h2>Liste des utilisateurs</h2>
<a href="create.php">Ajouter utilisateur</a><br><br>

<table border="1" cellpadding="10">
<tr><th>ID</th><th>Nom</th><th>Actions</th></tr>

<?php
$stmt = $conn->query("SELECT * FROM users");
while($row = $stmt->fetch()){
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>
                <a href='edit.php?id={$row['id']}'>Modifier</a> |
                <a href='delete.php?id={$row['id']}'>Supprimer</a>
            </td>
          </tr>";
}
?>
</table>
