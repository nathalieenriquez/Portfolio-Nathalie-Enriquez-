<?php
include_once "../dbConfig/dbConnection.php";

if (isset($_POST['about_desc']) && isset($_FILES['about_img'])) {
    $about_desc = $_POST['about_desc'];

    if ($_FILES['about_img']['error'] === 0) {
        $file = $_FILES['about_img'];
        $filename = basename($file['name']);
        $targetDir = "../assets/uploaded/";
        $targetFile = $targetDir . $filename;

        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            $stmt = $conn->prepare("UPDATE about SET about_desc = ?, about_img = ? WHERE ID = 1");
            $stmt->bind_param("ss", $about_desc, $filename);
            
            if ($stmt->execute()) {
                echo "Data updated successfully!";
            } else {
                echo "Error: " . $stmt->error;
            }
        } else {
            echo "Error moving the uploaded file.";
        }
    } else {
        echo "Error with the uploaded file.";
    }
} else {
}

?>
