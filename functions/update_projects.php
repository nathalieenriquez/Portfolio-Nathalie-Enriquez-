<?php
include_once "../dbConfig/dbConnection.php";

if (isset($_POST['id'], $_POST['category'], $_POST['link'])) {
    $id = $_POST['id'];
    $categ = $_POST['category'];
    $link = $_POST['link'];

    $stmt = $conn->prepare("UPDATE projects SET category = ?, link = ? WHERE ID = ?");
    $stmt->bind_param("ssi", $categ, $link, $id);

    if ($stmt->execute()) {
        echo "Data updated successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>