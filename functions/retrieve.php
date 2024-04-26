<?php
include_once "../dbConfig/dbConnection.php";

// Retrieve data for home
$firstName = '';
$lastName = '';
$description = '';

$query_home = "SELECT first_name, last_name, description FROM home";

if ($stmt_home = $conn->prepare($query_home)) {
    $stmt_home->execute();
    $result = $stmt_home->get_result();
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $firstName = $row['first_name'];
        $lastName = $row['last_name'];
        $description = $row['description'];
    } else {
        $errorMessage = "No data found for home";
    }
    $stmt_home->close(); 
} else {
    $errorMessage = "Failed to prepare home query";
}

// Retrieve data for contact header
$title = '';
$c_description = '';

$query_contact = "SELECT title, description FROM contact_header";

if ($stmt_contact = $conn->prepare($query_contact)) {
    $stmt_contact->execute();
    $result = $stmt_contact->get_result();
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $c_description = $row['description'];
    } else {
        $errorMessage = "No data found for contact";
    }
    $stmt_contact->close();
} else {
    $errorMessage = "Failed to prepare contact query";
}

// Retrieve data for contact
$address = '';
$contact_number = '';
$email = '';
$facebook = '';
$linkedIn = '';
$behance = '';

$query_contact = "SELECT address, contact_number, email, facebook, linkedIn, behance FROM contact";

if ($stmt_contact = $conn->prepare($query_contact)) {
    $stmt_contact->execute();
    $result = $stmt_contact->get_result();
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $address = $row['address'];
        $contact_number = $row['contact_number'];
        $email = $row['email'];
        $facebook = $row['facebook'];
        $linkedIn = $row['linkedIn'];
        $behance = $row['behance'];
    } else {
        $errorMessage = "No data found for contact";
    }
    $stmt_contact->close();
} else {
    $errorMessage = "Failed to prepare contact query";
}

// Retrieve data for about me
$about_desc = '';
$about_img = '';

$query_about = "SELECT about_desc, about_img FROM about WHERE ID = ?";

if ($stmt_about = $conn->prepare($query_about)) {
    $id = 1; 
    $stmt_about->bind_param("i", $id); 
    $stmt_about->execute();
    $result = $stmt_about->get_result();
    
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $about_desc = $row['about_desc'];
        $about_img = $row['about_img'];
    } else {
        $errorMessage = "No data found for about me";
    }
    
    $stmt_about->close();
} else {
    $errorMessage = "Failed to prepare about me query";
    $about_desc = '';
    $about_img = 'default_profile.png';
}
// Retrieve data for about me
$about_desc = '';
$about_img = '';

$query_about = "SELECT about_desc, about_img FROM about WHERE ID = ?";

if ($stmt_about = $conn->prepare($query_about)) {
    $id = 1; 
    $stmt_about->bind_param("i", $id); 
    $stmt_about->execute();
    $result = $stmt_about->get_result();
    
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $about_desc = $row['about_desc'];
        $about_img = $row['about_img'];
    } else {
        $errorMessage = "No data found for about me";
    }
    
    $stmt_about->close();
} else {
    $errorMessage = "Failed to prepare about me query";
    $about_desc = '';
    $about_img = 'default_profile.png';
}


// Retrieve data for skills

// $category = '';
// $description = '';

// $query_skills = "SELECT category, description FROM skills";

// if ($stmt_skills = $conn->prepare($query_skills)) {
//     $stmt_skills->execute();
//     $result = $stmt_skills->get_result();
//     if ($result && $result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         $category = $row['category'];
//         $description = $row['description'];
//     } else {
//         $errorMessage = "No data found for skills";
//     }
//     $stmt_skills->close();
// } else {
//     $errorMessage = "Failed to prepare skill query";
// }

// Retrieve data for affiliations

// $organization = '';
// $position = '';
// $date_from = '';
// $date_to = '';


// $query_affiliations = "SELECT affiliations, description FROM affiliations";

// if ($stmt_affiliations = $conn->prepare($query_affiliations)) {
//     $stmt_affiliations->execute();
//     $result = $stmt_affiliations->get_result();
//     if ($result && $result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         $organization = $row['organization'];
//         $position = $row['position'];
//         $date_from = $row['date_from'];
//         $date_to = $row['date_to'];
//     } else {
//         $errorMessage = "No data found for affiliations";
//     }
//     $stmt_affiliations->close();
// } else {
//     $errorMessage = "Failed to prepare affiliation query";
// }



//retrieve data for service_header
// $title = '';
// $description = '';

// $query_about = "SELECT title, description FROM about WHERE ID = ?";

// if ($stmt_about = $conn->prepare($query_about)) {
//     $id = 1; 
//     $stmt_about->bind_param("i", $id); 
//     $stmt_about->execute();
//     $result = $stmt_about->get_result();
//     if ($result && $result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         $title = $row['title'];
//         $description = $row['description'];
//     } else {
//         $errorMessage = "No data found for about me";
//     }
//     $stmt_about->close();
// } else {
//     $errorMessage = "Failed to prepare about me query";
// }

// $conn->close(); 
?>
