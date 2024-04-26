<?php
include_once "../dbConfig/dbConnection.php";

if (isset($_POST['id'], $_POST['organization'], $_POST['position'], $_POST['date_from'], $_POST['date_to'])) {
    $id = $_POST['id'];
    $org = $_POST['organization'];
    $pos = $_POST['position'];
    $from = $_POST['date_from'];
    $to = $_POST['date_to'];

    $stmt = $conn->prepare("UPDATE affiliations SET organization = ?, position = ?, date_from = ?, date_to = ? WHERE ID = ?");
    $stmt->bind_param("ssssi", $org, $pos, $from, $to, $id);

    if ($stmt->execute()) {
        echo "Data updated successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>
