<?php
include_once "../dbConfig/dbConnection.php";

if (isset($_POST['organization'], $_POST['position'], $_POST['date_from'], $_POST['date_to'])) {
    $org = $_POST['organization'];
    $pos = $_POST['position'];
    $from = $_POST['date_from'];
    $to = $_POST['date_to'];

    $stmt = $conn->prepare("INSERT INTO affiliations (organization, position, date_from, date_to) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $org, $pos, $from, $to);

    if ($stmt->execute()) {
        echo "Data added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>