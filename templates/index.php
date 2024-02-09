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

    <title>Portfolio (Nathalie Enriquez)</title>

    <style>
        body {
            background-color: #0f0f0f;
            /* 5e2012 */
        }

        body::-webkit-scrollbar-track {
        background: var(--scrollbarBG);
        }

        body::-webkit-scrollbar-thumb {
            background-color: var(--thumbBG);
            border-radius: 6px;
            border: 3px solid var(--scrollbarBG);
        }

        .navbar a {
            color: white;
            position: relative;
            transition: color 0.3s;
        }

        .navbar a::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: white;
            transition: width 0.5s;
        }

        .navbar a:hover::after {
            width: 100%;
        }

        .navbar a:hover {
            color: #ddd; /* Change color on hover */
        }

      </style>
</head>
<body>
    <div class="container" style="margin-top: 2rem;">
        <header class="header">
            <div class="row align-items-center">
                <div class="col">
                    <a href="{% url 'home' %}">
                    <img src="../assets/images/NE-w.png"
                        width="7%"
                        alt=""/>
                    </a>                
                </div>
                <div class="col">
                    <nav class="navbar">
                        <a href="#home" class="nav-link" style="color: white; text-decoration: none; font-size: 14px; font-weight: 500; font-family: 'Montserrat', sans-serif;">Home</a>
                        <a href="#contact" class="nav-link" style="color: white; text-decoration: none; font-size: 14px; font-weight: 500; font-family: 'Montserrat', sans-serif;">About</a>
                        <a href="#services" class="nav-link" style="color: white; text-decoration: none; font-size: 14px; font-weight: 500; font-family: 'Montserrat', sans-serif;">Services</a>
                        <a href="#about" class="nav-link" style="color: white; text-decoration: none; font-size: 14px; font-weight: 500; font-family: 'Montserrat', sans-serif;">Contact</a>
                    </nav>
                </div>
                    <div class="follow" style="text-align: center;">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                        <a href="#" class="fab fa-instagram"></a> 
                    </div>
            </div>
    </header>
    <!-- <form action="../functions/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <button type="submit">Upload</button>
    </form> -->

</div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>

    </script>
</body>
</html>
