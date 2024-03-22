<?php
include_once "../dbConfig/dbConnection.php";

    //retrieve data for home
    $firstName = '';
    $lastName = '';
    $description = '';

    $query = "SELECT first_name, last_name, description FROM home";
    $result = $conn->query($query);

if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $firstName = $row['first_name'];
        $lastName = $row['last_name'];
        $description = $row['description'];
    } else {
        $errorMessage = "No data found";
    }

    // retrieve data for contact
    $title = '';
    $contact_description = '';
    $address = '';
    $contact_number = '';
    $email = '';
    $facebook = '';
    $linkedIn = '';
    $behance = '';

    $query = "SELECT title, contact_description, address, contact_number, email, facebook, linkedIn, behance FROM contact";
    $result = $conn->query($query);

if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $title = $row['title'];
        $contact_description = $row['contact_description'];
        $address = $row['address'];
        $contact_number = $row['contact_number'];
        $email = $row['email'];
        $facebook = $row['facebook'];
        $linkedIn = $row['linkedIn'];
        $behance = $row['behance'];
    } else {
        $errorMessage = "No data found";
    }

    $conn->close();
?>
