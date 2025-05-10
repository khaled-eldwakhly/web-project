<?php
$servername = "localhost";  // أو "127.0.0.1"
$username = "root";  // اسم المستخدم الافتراضي في XAMPP هو "root"
$password = "";  // XAMPP مش بيكون فيه كلمة سر افتراضيًا
$dbname = "restaurant";  // خليها اسم قاعدة البيانات بتاعتك

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
