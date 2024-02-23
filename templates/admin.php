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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.0/css/boxicons.min.css">
    
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

        .personal {
            display: flex;
            align-items: center;
            background-color: #f5f6f7;
            padding: 20px;
            border: 1px solid rgba(0, 0, 0, 0.4);
            border-radius: 10px;
            width: 100%;
            margin: 0 auto;
            margin-top: 20px;
        }

        .upload-image {
            background-color: #f5f7f5;
            width: 150px;
            height: 200px;
            border: 1px solid #ccc;
            border-radius: 10px;
            display: flex; /* Apply flexbox */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            cursor: pointer;
            margin-right: 20px;
            overflow: hidden; /* Hide overflow */
        }

        .upload-image img {
            max-width: 100%; /* Maximum width */
            max-height: 100%; /* Maximum height */
            display: block;
            margin: auto; /* Center image */
        }

        .description-box {
            flex-grow: 1; /* Take remaining space */
        }

        .description-box p {
            font-size: 14px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .description-input {
            background-color: #f5f7f5;
            width: calc(100% - 150px - 20px); /* Adjust width */
            height: 165px;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px;
            box-sizing: border-box;
            resize: none;
        }

        .rectangle {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            width: auto;
            display: inline-block; /* Adjust display property */
            margin-bottom: 10px; /* Add margin bottom */
        }

        #imageInput {
            display: none;
        }

        #chooseImageBtn {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 16px;
            display: block; /* Make label a block element */
        }

        #chooseImageBtn:hover {
            background-color: #e0e0e0;
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

    <div class="personal">
        <div class="rectangle" style="margin-right: 15px;">
            <input type="file" id="imageInput" name="image" accept="image/*">
            <label for="imageInput" id="chooseImageBtn">Choose Image</label>
        </div>
        <div class="description-box">
            <p>Description</p>
            <textarea class="description-input"></textarea>
        </div>
    </div>
</div>

<script>
    document.getElementById('imageInput').addEventListener('change', function() {
        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function(e) {
            // Create an image element
            var img = document.createElement('img');
            img.src = e.target.result;
            img.style.maxWidth = '100%';
            // Append the image to the description box
            document.querySelector('.description-box').appendChild(img);
        };
        // Read the uploaded file as a data URL
        reader.readAsDataURL(file);
    });
</script>

</body>
</html>
