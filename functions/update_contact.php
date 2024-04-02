<?php
include_once "../dbConfig/dbConnection.php";

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // title and desc
    if (isset($_POST['title']) && isset($_POST['contact_description'])) {
        $title = $_POST['title'];
        $contact_description = $_POST['contact_description'];

        $stmt = $conn->prepare("UPDATE contact SET title = ?, contact_description = ? WHERE id = 1");
        $stmt->bind_param("ss", $title, $contact_description);

        if ($stmt->execute()) {
            $stmt->close(); // Close statement here
        }
    }

    // contact info
    if (isset($_POST['address']) && isset($_POST['contact_number']) && isset($_POST['email'])) {
        $address = $_POST['address'];
        $contact_number = $_POST['contact_number'];
        $email = $_POST['email'];

        $stmt = $conn->prepare("UPDATE contact SET address = ?, contact_number = ?, email = ? WHERE id = 1");
        $stmt->bind_param("sss", $address, $contact_number, $email);

        if ($stmt->execute()) {
            $stmt->close(); // Close statement herez
        }
    }

    // social account
    if (isset($_POST['facebook']) && isset($_POST['linkedIn']) && isset($_POST['behance'])) {
        $facebook = $_POST['facebook'];
        $linkedIn = $_POST['linkedIn'];
        $behance = $_POST['behance'];

        $stmt = $conn->prepare("UPDATE contact SET facebook = ?, linkedIn = ?, behance = ? WHERE id = 1");
        $stmt->bind_param("sss", $facebook, $linkedIn, $behance);

        if ($stmt->execute()) {
            $stmt->close(); // Close statement here
            $message = "Data updated successfully!";
        } else {
            $message = "Error: " . $stmt->error;
        }
    }

    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
} 

$conn->close();
?>
