<?php
include_once "../dbConfig/dbConnection.php";

if (isset($_POST['id'], $_POST['category'], $_POST['description'])) {
    $id = $_POST['id'];
    $categ = $_POST['category'];
    $desc = $_POST['description'];

    $stmt = $conn->prepare("UPDATE services SET category = ?, description = ? WHERE ID = ?");
    $stmt->bind_param("ssi", $categ, $desc, $id);

    if ($stmt->execute()) {
        echo "Data updated successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>