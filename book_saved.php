<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>บันทึกสำเร็จ</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-image: url('https://images.unsplash.com/photo-1513475382585-d06e58bcb0ca?auto=format&fit=crop&w=1470&q=80');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
    .bg-overlay {
      background-color: rgba(255, 255, 255, 0.95);
    }
  </style>
</head>
<body class="text-gray-800 font-sans">
  <div class="min-h-screen flex items-center justify-center">
    <div class="bg-overlay p-8 rounded-lg shadow-xl max-w-lg w-full text-center">
      <h1 class="text-3xl font-bold text-green-600 mb-4">✅ บันทึกหนังสือสำเร็จ!</h1>
      <div class="text-left space-y-2 text-lg">
        <p><strong>ชื่อหนังสือ:</strong> <?= htmlspecialchars($_GET['title'] ?? '-') ?></p>
        <p><strong>ผู้แต่ง:</strong> <?= htmlspecialchars($_GET['author'] ?? '-') ?></p>
        <p><strong>ประเภท:</strong> <?= htmlspecialchars($_GET['category'] ?? '-') ?></p>
        <p><strong>สถานะ:</strong> <?= htmlspecialchars($_GET['status'] ?? '-') ?></p>
      </div>
      <div class="mt-6">
        <a href="index.html" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded shadow">
          🏠 กลับหน้าหลัก
        </a>
      </div>
    </div>
  </div>
</body>
</html>
