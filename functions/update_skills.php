<?php
include_once "../dbConfig/dbConnection.php";

if (isset($_POST['id'], $_POST['category'], $_POST['description'])) {
    $id = $_POST['id'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("UPDATE skills SET category = ?, description = ? WHERE ID = ?");
    $stmt->bind_param("ssi", $category, $description, $id);

    if ($stmt->execute()) {
        echo "Data updated successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>