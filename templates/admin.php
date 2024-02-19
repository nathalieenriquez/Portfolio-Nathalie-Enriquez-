<?php
    require_once "../functions/upload.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Admin (Portfolio-NE)</title>

    <style>
        body {
            background-color: #f5f7fa;
        }

        .sidenav {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #2f2f2f;
            padding-top: 20px; 
            padding-left: 20px;
            padding-right: 20px;
            box-sizing: border-box;
        }

        .sidenav a {
            padding: 12px 15px;
            text-decoration: none;
            font-size: 13px;
            font-family: 'Montserrat', sans-serif;
            color: white;
            display: block;
            border-radius: 10px;
        }

        .sidenav a:hover {
            background-color: #cc8c6a; 
        }
        
        .link-text {
            margin-left: 10px; 
            display: inline-block; 
        }

        .logo-container {
            display: flex;
            align-items: center;
            padding: 9px;
        }

        .logo-container img {
            width: 20px; 
            height: auto;
        }

        .logo-name {
            font-size: 18px;
            color: white;
        }

        .section {
            display: none;
        }

        .section.active {
            display: block;
        }
    </style>
</head>
<body>
<div class="sidenav">
    <div class="logo-container" style="display: flex; align-items: center; margin-bottom: 15px;">
        <img src="../assets/images/NE-w.png" style="width: 35px; height: auto; margin-right: 4px;">
        <span class="logo-name" style="font-size: 15px; font-family: 'Montserrat', sans-serif; font-weight: 500;">Nathalie Enriquez</span>
    </div>
    <a href="#about" class="active"><i class="fa-solid fa-user" style="font-size: 15px; width: 20px;"></i> <span class="link-text">About</span></a>
    <a href="#services"><i class="fa-solid fa-wrench" style="font-size: 15px; width: 20px;"></i> <span class="link-text">Services</span></a>
    <a href="#projects"><i class="fa-solid fa-box" style="font-size: 15px; width: 20px;"></i> <span class="link-text">Projects</span></a>
    <a href="#contact"><i class="fa-solid fa-address-card" style="font-size: 15px; width: 20px;"></i> <span class="link-text">Contact</span></a>
</div>

<div class="container" style="margin-top: 3rem; margin-left: 280px;">
    <div id="about" class="section active">
        <h1 style="font-family: 'Montserrat', sans-serif; font-weight: 600;">About Me</h1>
        <p>This is the about section content.</p>
    </div>
</div>


</body>
</html>
