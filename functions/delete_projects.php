<?php
include_once "../dbConfig/dbConnection.php";

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $stmt = $conn->prepare("DELETE FROM projects WHERE ID = ?");
    $stmt->bind_param("i",$id);

    if ($stmt->execute()) {
        echo "Data deleted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>