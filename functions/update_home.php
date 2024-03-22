<?php
include_once "../dbConfig/dbConnection.php";

if (isset($_POST['first_name'], $_POST['last_name'], $_POST['description'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("UPDATE home SET first_name = ?, last_name = ?, description = ? WHERE ID = 1");
    $stmt->bind_param("sss", $first_name, $last_name, $description);

    if ($stmt->execute()) {
        echo "Data updated successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
    