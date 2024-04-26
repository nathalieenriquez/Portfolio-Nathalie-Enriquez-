<?php
include_once "../dbConfig/dbConnection.php";

if (isset($_POST['title'], $_POST['description'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("UPDATE contact_header SET title = ?, description = ? WHERE ID = 1");
    $stmt->bind_param("ss", $title, $description);

    if ($stmt->execute()) {
        echo "Data updated successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>