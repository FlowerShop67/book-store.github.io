<?php
include 'connect.php';

$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);

$books = [];
while ($row = mysqli_fetch_assoc($result)) {
  $books[] = $row;
}

header('Content-Type: application/json');
echo json_encode($books);
?>



