<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "absence_dbp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");

if (isset($_GET['password'])) {
    $password = $_GET['password'];
    $correct_password = "1051620244";

    if ($password === $correct_password) {
        $tables = ["absences"];
        foreach ($tables as $table) {
            do {
                $sql = "DELETE FROM $table LIMIT 1000";
                $conn->query($sql);
            } while ($conn->affected_rows > 0);
        }
        echo "غیبت‌ها با موفقیت پاک شدند.";
    } else {
        echo "رمز عبور اشتباه است.";
    }
}

$conn->close();
?>
