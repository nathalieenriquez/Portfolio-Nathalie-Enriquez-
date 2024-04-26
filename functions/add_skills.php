<?php
include_once "../dbConfig/dbConnection.php";

if (isset($_POST['category'], $_POST['description'])) {
    $category = $_POST['category'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO skills (category, description) VALUES (?, ?)");
    $stmt->bind_param("ss", $category, $description);

    if ($stmt->execute()) {
        echo "Data added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>