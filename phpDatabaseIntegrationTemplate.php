<?php
// Connecting to a database using PDO
$host = 'localhost';
$db = 'testdb';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Fetching data
$sql = "SELECT first_name, last_name FROM students";
$stmt = $pdo->query($sql);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['first_name'] . " " . $row['last_name'] . "<br>";
}

// Using prepared statements
$id = 1;
$sql = "SELECT first_name, last_name FROM students WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$student = $stmt->fetch(PDO::FETCH_ASSOC);
echo "Student: " . $student['first_name'] . " " . $student['last_name'];
?>
