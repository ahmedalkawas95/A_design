<?php
include 'db_connection.php'; // استدعاء ملف الاتصال

$sql = "SELECT * FROM projects"; // استعلام لاسترجاع جميع المشاريع
$stmt = $pdo->query($sql);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<div>";
    echo "<h2>" . $row['title'] . "</h2>";
    echo "<p>" . $row['description'] . "</p>";
    echo "<img src='" . $row['image_url'] . "' alt='Project Image'>";
    echo "</div>";
}
?>
