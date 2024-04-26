<?php
include_once "../dbConfig/dbConnection.php";  // Ensure this path is correct

$response = "";  // Initialize the response variable

if (isset($_POST['address'], $_POST['contact_number'], $_POST['email'])) {
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("UPDATE contact SET address = ?, contact_number = ?, email = ? WHERE id = 1");
    $stmt->bind_param("sss", $address, $contact_number, $email);

    if ($stmt->execute()) {
        $response = "Contact information updated successfully!";  // Set the success message
    } else {
        $response = "Error updating contact: " . $stmt->error;  // Set the error message
    }

    $stmt->close();
} else {
    $response = "Required data is missing.";  // Set the error message if POST data is missing
}

$conn->close();

echo $response;  // Return the response text
?>
