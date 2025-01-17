<?php
include 'db_connection.php'; // استدعاء ملف الاتصال بقاعدة البيانات

$title = "مشروع تصميم جديد"; // عنوان المشروع
$description = "هذا وصف المشروع المميز."; // وصف المشروع
$image_url = "images/project1.jpg"; // رابط الصورة

$sql = "INSERT INTO projects (title, description, image_url) VALUES (:title, :description, :image_url)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':title' => $title,
    ':description' => $description,
    ':image_url' => $image_url
]);

echo "تمت إضافة المشروع بنجاح!";
?>
