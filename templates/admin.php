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
            padding-left: 280px; 
            padding-right: 28px; 
            padding-top: 3rem;
            box-sizing: border-box;
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

        .rectangle {
            background-color:#f5f6f7;
            padding: 20px;
            /* box-shadow: 0 1px 5px rgba(0, 0, 0, 0.16); */
            border: 1px solid rgba(0, 0, 0, 0.4);
            border-radius: 10px;
            width: 100%;
            margin: 0 auto;
            margin-top: 20px;
        }

        .upload-image {
            background-color: #f5f5ed;
            width: 150px;
            height: 200px;
            border: 1px solid #ccc;
            border-radius: 10px;
            display: inline-block;
            cursor: pointer;
            margin-right: 20px;
        }

        .description-box {
            display: inline-block;
            vertical-align: top;
        }

        .title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .description-input {
            background-color: #f5f5ed;
            width: 100%;
            height: 165px;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px;
            box-sizing: border-box;
            resize: none;
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

<div class="container">
    <div id="about">
        <h1 style="font-family: 'Montserrat', sans-serif; font-weight: 600;">About Me</h1>
    </div>

    <div class="rectangle">
        <div class="upload-image" onclick="document.getElementById('imageInput').click()">
            <img src="uploadimage.png" style="width: 100px; height: 100px">
            <input type="file" id="imageInput" style="display: none;">
        </div>
        <div class="description-box">
            <div class="title">Description</div>
            <textarea class="description-input"></textarea>
        </div>
    </div>
</div>


</body>
</html>
