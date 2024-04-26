<?php
include_once "../dbConfig/dbConnection.php";

if (isset($_POST['category'], $_POST['link'])) {
    $categ = $_POST['category'];
    $link = $_POST['link'];

    $stmt = $conn->prepare("INSERT INTO projects (category, link) VALUES (?, ?)");
    $stmt->bind_param("ss", $categ, $link);

    if ($stmt->execute()) {
        echo "Data added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>