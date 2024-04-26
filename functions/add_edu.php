<?php
include_once "../dbConfig/dbConnection.php";

if (isset($_POST['level'], $_POST['school'],  $_POST['course'], $_POST['date_from'], $_POST['date_to'])) {
    $level = $_POST['level'];
    $school = $_POST['oolool'];
    $course = $_POST['course'];
    $d_from = $_POST['date_from'];
    $d_to = $_POST['date_to'];

    $stmt = $conn->prepare("INSERT INTO education (level, school, course, date_from, date_to) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $level, $school, $course, $d_from, $d_to);

    if ($stmt->execute()) {
        echo "Data added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>