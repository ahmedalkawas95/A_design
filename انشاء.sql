<?php
$host = 'sql12.freemysqlhosting.net'; // اسم السيرفر (محليًا localhost)
$dbname = 'sql12758100'; // اسم قاعدة البيانات
$username = 'sql12758100'; // اسم المستخدم
$password = 'EHrtMQ5Mif'; // كلمة المرور (اتركها فارغة إذا كنت تستخدم XAMPP)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "تم الاتصال بقاعدة البيانات بنجاح!";
} catch (PDOException $e) {
    die("خطأ في الاتصال: " . $e->getMessage());
}
?>
