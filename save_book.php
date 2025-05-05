<?php
$host = 'localhost';
$db   = 'book_rental';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
  $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
  die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $e->getMessage());
}

$title = $_POST['title'] ?? '';
$author = $_POST['author'] ?? '';
$category = $_POST['category'] ?? '';
$status = $_POST['status'] ?? 'ว่างให้เช่า';

if ($title && $author && $category && $status) {
  $stmt = $pdo->prepare("INSERT INTO books (title, author, category, status) VALUES (?, ?, ?, ?)");
  $stmt->execute([$title, $author, $category, $status]);

  header("Location: book_saved.php?title=" . urlencode($title) . "&author=" . urlencode($author) . "&category=" . urlencode($category) . "&status=" . urlencode($status));
  exit;
} else {
  echo "กรุณากรอกข้อมูลให้ครบถ้วน";
}
?>
