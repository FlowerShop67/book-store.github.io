<?php
include 'connect.php';
$id = $_GET['id'] ?? 0;

if ($id) {
    mysqli_query($conn, "DELETE FROM books WHERE id = $id");
}
header("Location: edit_delete.php");
?>
