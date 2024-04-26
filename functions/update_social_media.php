<?php
include_once "../dbConfig/dbConnection.php"; 

if (isset($_POST['facebook'], $_POST['linkedIn'], $_POST['behance'])) {
    $facebook =$_POST['facebook'];
    $linkedIn =$_POST['linkedIn'];
    $behance =$_POST['behance'];

    $stmt = $conn->prepare("UPDATE contact SET facebook = ?, linkedIn = ?, behance = ? WHERE id = 1");
    $stmt->bind_param("sss", $facebook, $linkedIn, $behance);

    if ($stmt->execute()) {
        echo "Contact information updated successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Required data is missing.";  
}

$conn->close();
?>
