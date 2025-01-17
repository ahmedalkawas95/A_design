<?php
$host = 'localhost'; // اسم السيرفر (محليًا localhost)
$dbname = 'A_Design_DB'; // اسم قاعدة البيانات
$username = 'root'; // اسم المستخدم
$password = ''; // كلمة المرور (اتركها فارغة إذا كنت تستخدم XAMPP)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "تم الاتصال بقاعدة البيانات بنجاح!";
} catch (PDOException $e) {
    die("خطأ في الاتصال: " . $e->getMessage());
}
?>
