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
            background-color: #2f2f2f;
            /* 5e2012 */
        }

        ::-webkit-scrollbar {
        width: 5px;
        }

        ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
        background: lightgray;
        border-radius: 10px;
        }

        .navbar a {
            color: white;
            position: relative;
            transition: color 0.3s;
            padding-bottom: 5px;
        }

        .navbar a::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #ffb48c;
            transition: width 0.3s ease-in-out;
        }

        .navbar a:hover::after {
            width: 100%;
        }
        
        .top-up {
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: none;
            cursor: pointer;
            z-index: 1000;
            background-color: #2f2f2f;
            color: #ffb48c;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            font-size: 20px;
            transition: opacity 0.3s;
        }

        .top-up.show {
            display: block;
        }

        .nav-link {
            position: relative;
        }

        .nav-link::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #ffb48c;
            transition: width 0.3s ease-in-out;
        }

        .nav-link:hover::before {
            width: 100%;
        }

        .graphic:hover {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 1px solid #ffb48c;
            border-radius: 10px;
            pointer-events: none;
        }

        .ui-ux:hover {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 1px solid #ffb48c;
            border-radius: 10px;
            pointer-events: none;
        }

      </style>
</head>
<body>
    <div class="container" style="margin-top: 4rem;">
        <header class="header">
            <div class="row align-items-center">
                <div class="col">
                    <img src="../assets/images/NE-w.png"
                        width="7%">
                </div>
                <div class="col">
                    <nav class="navbar">
                        <a href="#home" class="nav-link" style="color: white; text-decoration: none; font-size: 14px; font-weight: 500; font-family: 'Montserrat', sans-serif;">Home</a>
                        <a href="#about" class="nav-link" style="color: white; text-decoration: none; font-size: 14px; font-weight: 500; font-family: 'Montserrat', sans-serif;">About</a>
                        <a href="#services" class="nav-link" style="color: white; text-decoration: none; font-size: 14px; font-weight: 500; font-family: 'Montserrat', sans-serif;">Services</a>
                        <a href="#projects" class="nav-link" style="color: white; text-decoration: none; font-size: 14px; font-weight: 500; font-family: 'Montserrat', sans-serif;">Projects</a>
                        <a href="#contact" class="nav-link" style="color: white; text-decoration: none; font-size: 14px; font-weight: 500; font-family: 'Montserrat', sans-serif;">Contact</a>
                    </nav>
                </div>
            </div>
        </header>

        <div class="row">
            <div class="col-lg-6" style="margin-top: 12rem;">
                <p style="color: white ; font-weight: 400; font-family: 'Montserrat', sans-serif; font-size: 30px; margin-bottom: 10px;">Hello, it's</p>
                <p style="color: white; font-family: 'Montserrat', sans-serif; font-size: 55px; font-weight: 600; margin-top: -20px; color: #ffb48c;">Nathalie Enriquez.</p>
                <p style="color: white; font-weight: 400; font-family: 'Montserrat', sans-serif; margin-top: -5px;">&nbsp;<span style="color: #ffb48c; font-weight: bold;">—</span> A creative graphic and UI/UX designer.</p>
                <button onclick="downloadCV()" style="font-family: 'Montserrat', sans-serif; font-size: 12px; margin-left: 10px; margin-top: 50px; border: 1px solid #ffb48c; border-radius: 10px; background-color: #202020; color: #fff; padding: 10px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#ffb48c'; this.style.color='white';" onmouseout="this.style.backgroundColor='#202020'; this.style.color='#fff';">Download CV</button>
            </div>
            <div class="col-lg-6">
                <img src="../assets/images/11.png" class="img-fluid" alt="Nathalie Enriquez">
            </div>
        </div>
    </div> 

    <section id="about" style="background-color: #202020; padding: 4rem 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="../assets/images/111.png" class="sidebar-image" style="width: 350px; height: auto; border-radius: 10px;">
                </div>

                <div class="col-lg-6">
                    <h1 style="color: #ffb48c; font-family: 'Montserrat', sans-serif; font-weight: 600;">About Me</h1>
                    <p style="color: white; font-weight: 300; font-size: 12px; font-family: 'Montserrat', sans-serif;">I am an Information Technology student with a deep passion for graphic and UI/UX design. With a blend of technical skills and a creative mindset, I strive to create visually captivating designs. I am eager to contribute my skills and bring a fresh perspective to your company.</p>

                    <nav>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="#skills" onclick="toggleSection('skills', event)" style="color: white; font-weight: 500; font-size: 15px; font-family: 'Montserrat', sans-serif; margin-right: 2rem;">Skills</a>                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#affiliations" onclick="toggleSection('affiliations', event)" style="color: white; font-weight: 500; font-size: 15px; font-family: 'Montserrat', sans-serif; margin-right: 2rem;">Affiliations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#education" onclick="toggleSection('education', event)" style="color: white; font-weight: 500; font-size: 15px; font-family: 'Montserrat', sans-serif;">Education</a>
                            </li>
                        </ul>
                    </nav>

                    <section id="skills" style="display: block;">
                        <div class="container">
                            <p style="color: #ffb48c; font-weight: 600; font-size: 12px; font-family: 'Montserrat', sans-serif; padding-top: 1rem;">Graphic Design</p>
                            <ul style="list-style-type: none; padding-left: 0; margin-top: -.8rem;">
                                <li style="color: white; font-weight: 500; font-size: 12px; font-family: 'Montserrat', sans-serif;">&#8226; Adobe Photoshop, Adobe Illustrator, Adobe InDesign</li>
                            </ul>

                            <p style="color: #ffb48c; font-weight: 600; font-size: 12px; font-family: 'Montserrat', sans-serif; padding-top: 1rem;">UI/UX Design</p>
                            <ul style="list-style-type: none; padding-left: 0; margin-top: -.8rem;">
                                <li style="color: white; font-weight: 500; font-size: 12px; font-family: 'Montserrat', sans-serif;">&#8226; Figma, AdobeXD</li>
                            </ul>

                            <p style="color: #ffb48c; font-weight: 600; font-size: 12px; font-family: 'Montserrat', sans-serif; padding-top: 1rem;">Word Processing</p>
                            <ul style="list-style-type: none; padding-left: 0; margin-top: -.8rem;">
                                <li style="color: white; font-weight: 500; font-size: 12px; font-family: 'Montserrat', sans-serif;">&#8226; Microsoft Office Suite Application</li>
                            </ul>

                            <p style="color: #ffb48c; font-weight: 600; font-size: 12px; font-family: 'Montserrat', sans-serif; padding-top: 1rem;">Front-End</p>
                            <ul style="list-style-type: none; padding-left: 0; margin-top: -.8rem;">
                                <li style="color: white; font-weight: 500; font-size: 12px; font-family: 'Montserrat', sans-serif;">&#8226; HTML, CSS, JavaScript</li>
                            </ul>

                            <!-- <p style="color: #ffb48c; font-weight: 600; font-size: 12px; font-family: 'Montserrat', sans-serif; padding-top: 1rem;">Back-End</p>
                            <ul style="list-style-type: none; padding-left: 0; margin-top: -.8rem;">
                                <li style="color: white; font-weight: 500; font-size: 12px; font-family: 'Montserrat', sans-serif;">&#8226; PHP</li>
                            </ul> -->
                        </div>
                    </section>

                    <section id="affiliations" style="display: none;">
                        <div class="container">
                            <p style="color: #ffb48c; font-weight: 600; font-size: 12px; font-family: 'Montserrat', sans-serif; padding-top: 1rem;">WMSU, The New Blazer—Official Yearbook Publication</p>
                            <ul style="list-style-type: none; padding-left: 0; margin-top: -.8rem;">
                                <li style="color: white; font-weight: 500; font-size: 12px; font-family: 'Montserrat', sans-serif;">&#8226; Editor-in-Chief (2023-2024)</li>
                                <li style="color: white; font-weight: 500; font-size: 12px; font-family: 'Montserrat', sans-serif;">&#8226; Junior Editor (2022-2023)</li>
                            </ul>

                            <p style="color: #ffb48c; font-weight: 600; font-size: 12px; font-family: 'Montserrat', sans-serif; padding-top: 1rem;">WMSU, College of Computing Studies - College Student Council</p>
                            <ul style="list-style-type: none; padding-left: 0; margin-top: -.8rem;">
                                <li style="color: white; font-weight: 500; font-size: 12px; font-family: 'Montserrat', sans-serif;">&#8226; Assistant Head of Creatives and Promotions (2021-2023)</li>
                            </ul>

                            <p style="color: #ffb48c; font-weight: 600; font-size: 12px; font-family: 'Montserrat', sans-serif; padding-top: 1rem;">WMSU, Google Developer Club Crimsons</p>
                            <ul style="list-style-type: none; padding-left: 0; margin-top: -.8rem;">
                                <li style="color: white; font-weight: 500; font-size: 12px; font-family: 'Montserrat', sans-serif;">&#8226; Design Lead (2021-2022 and 2023-2024)</li>
                            </ul>

                            <p style="color: #ffb48c; font-weight: 600; font-size: 12px; font-family: 'Montserrat', sans-serif; padding-top: 1rem;">Zamboanga, Google Developer Group</p>
                            <ul style="list-style-type: none; padding-left: 0; margin-top: -.8rem;">
                                <li style="color: white; font-weight: 500; font-size: 12px; font-family: 'Montserrat', sans-serif;">&#8226; Creatives Committee Member (2023-2024)</li>
                            </ul>
                        </div>
                    </section>

                    <section id="education" style="display: none;">
                        <div class="container">
                            <p style="color: #ffb48c; font-weight: 600; font-size: 12px; font-family: 'Montserrat', sans-serif; padding-top: 1rem;">Tertiary</p>
                            <ul style="list-style-type: none; padding-left: 0; margin-top: -.8rem;">
                                <li style="color: white; font-weight: 700; font-size: 12px; font-family: 'Montserrat', sans-serif;">&#8226; Western Mindanao State University</li>
                                <li style="color: white; font-weight: 500; font-size: 12px; font-family: 'Montserrat', sans-serif; padding-left: 6px;"> Bachelor of Science in Information Technology (BSIT)</li>
                                <li style="color: white; font-weight: 500; font-size: 12px; font-family: 'Montserrat', sans-serif; padding-left: 6px;"> (2020-2024)</li>
                            </ul>

                            <p style="color: #ffb48c; font-weight: 600; font-size: 12px; font-family: 'Montserrat', sans-serif; padding-top: 1rem;">Secondary</p>
                            <ul style="list-style-type: none; padding-left: 0; margin-top: -.8rem;">
                                <li style="color: white; font-weight: 700; font-size: 12px; font-family: 'Montserrat', sans-serif;">&#8226; Culianan National High School - SHS</li>
                                <li style="color: white; font-weight: 500; font-size: 12px; font-family: 'Montserrat', sans-serif; padding-left: 6px;">Humanities and Social Sciences (HUMSS)</li>
                                <li style="color: white; font-weight: 500; font-size: 12px; font-family: 'Montserrat', sans-serif; padding-left: 6px;"> (2018-2020)</li>
                            </ul>     

                            <ul style="list-style-type: none; padding-left: 0; margin-top: -.5rem;">
                                <li style="color: white; font-weight: 700; font-size: 12px; font-family: 'Montserrat', sans-serif;">&#8226; Culianan National High School - JHS</li>
                                <li style="color: white; font-weight: 500; font-size: 12px; font-family: 'Montserrat', sans-serif; padding-left: 6px;"> (2014-2018)</li>
                            </ul> 
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <section id="services" style="padding: 4rem 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p style="color: #ffb48c; font-family: 'Montserrat', sans-serif; font-weight: 600; text-align: center; font-size: 14px;">SERVICES</p>
                    <h1 style="color: white; font-family: 'Montserrat', sans-serif; font-weight: 600; text-align: center; margin-top: -14px;">What I am Good At</h1>
                    <p style="color: white; font-family: 'Montserrat', sans-serif; text-align: center; padding-bottom: 2rem; font-size: 12px;">Crafting captivating visuals and intuitive user experiences with a keen eye for aesthetics and a user-centric solutions,<br>we craft engaging designs that elevate your brand's identity and enhance user satisfaction.</p>
                </div>
                <div class="col-md-6">
                    <div class="graphic" style="background-color: #202020; font-family: 'Montserrat', sans-serif; font-size: 12px; color: white; padding: 2rem; border-radius: 10px; text-align: center; position: relative;">
                        <i class="fa-solid fa-pen-nib" style="font-size: 5rem; padding-bottom: 15px; padding-top: 15px;"></i>
                        <h4 style="color: #ffb48c; font-weight: 600;">Graphic Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel urna sed lacus eleifend posuere.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="ui-ux" style="background-color: #202020; font-family: 'Montserrat', sans-serif; font-size: 12px; color: white; padding: 2rem; border-radius: 10px; text-align: center; position: relative;">
                        <i class="fa-solid fa-desktop" style="font-size: 5rem; padding-bottom: 15px; padding-top: 15px;"></i>
                        <h4 style="color: #ffb48c; font-weight: 600;">UI/UX Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel urna sed lacus eleifend posuere.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" style="background-color: #202020; padding: 4rem 0;">
        <div class="container">
            <div class="col-md-12">
                <p style="color: #ffb48c; font-family: 'Montserrat', sans-serif; font-weight: 600; text-align: center; font-size: 14px;">PROJECTS</p>
                <h1 style="color: white; font-family: 'Montserrat', sans-serif; font-weight: 600; text-align: center; margin-top: -14px;">Crafting Solutions, Amplifying Skills</h1>
                <p style="color: white; font-family: 'Montserrat', sans-serif; text-align: center; padding-bottom: 3rem; font-size: 12px;">Embark on a journey of innovation and creativity with our diverse range of projects. From conceptualization<br>to execution, we make solutions that amplify skills and leave a lasting impact.</p>

            <h3 style="color: white; font-family: 'Montserrat', sans-serif; font-weight: 600; text-align: center; padding-bottom: 1rem;">Graphic Designs</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="graphic-design-tile" style="background-color: #2f2f2f; padding: 2rem; margin-bottom: 2rem; border-radius: 10px;">
                            <img src="" style="width: 100%; aspect-ratio: auto;">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="graphic-design-tile" style="background-color: #2f2f2f; padding: 2rem; margin-bottom: 2rem; border-radius: 10px;">
                            <img src="" style="width: 100%; aspect-ratio: auto;">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="graphic-design-tile" style="background-color: #2f2f2f; padding: 2rem; margin-bottom: 2rem; border-radius: 10px;">
                            <img src="" style="width: 100%; aspect-ratio: auto;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12" style="margin-top: 5rem;">
                <h3 style="color: white; font-family: 'Montserrat', sans-serif; font-weight: 600; text-align: center; padding-bottom: 1rem;">UI/UX Designs</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="graphic-design-tile" style="background-color: #2f2f2f; padding: 2rem; margin-bottom: 2rem; border-radius: 10px;">
                            <a href="https://www.behance.net/gallery/191806507/Trez-(Blog-Website-Design)" target="_blank">
                                <img src="" style="width: 100%; aspect-ratio: auto;">
                            </a>
                            <p style="font-size: 12px; font-family: 'Montserrat', sans-serif; font-weight: 500; text-align: center; color: white; margin-top: 1.5rem; margin-bottom: 0;">Trez (Blogsite)</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="graphic-design-tile" style="background-color: #2f2f2f; padding: 2rem; margin-bottom: 2rem; border-radius: 10px;">
                            <a href="https://www.behance.net/gallery/191806175/La-Casa-de-Convivencia-(Cafe-Website-Design)" target="_blank">
                                <img src="" style="width: 100%; aspect-ratio: auto;">
                            </a>
                            <p style="font-size: 12px; font-family: 'Montserrat', sans-serif; font-weight: 500; text-align: center; color: white; margin-top: 1.5rem; margin-bottom: 0;">La Casa de Convivencia (Cafe Website)</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="graphic-design-tile" style="background-color: #2f2f2f; padding: 2rem; margin-bottom: 2rem; border-radius: 10px;">
                            <a href="https://www.behance.net/gallery/191805767/DocuTrack-Document-Tracking-and-Management-System" target="_blank">
                                <img src="" style="width: 100%; aspect-ratio: auto;">
                            </a>
                            <p style="font-size: 12px; font-family: 'Montserrat', sans-serif; font-weight: 500; text-align: center; color: white; margin-top: 1.5rem; margin-bottom: 0;">DocuTrack (Document Tracking and Management System)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" style="padding: 4rem 0;">
        <div class="container">
                <p style="color: #ffb48c; font-family: 'Montserrat', sans-serif; font-weight: 600; text-align: start; font-size: 14px;">CONTACT</p>
                <h1 style="color: white; font-family: 'Montserrat', sans-serif; font-weight: 600; text-align: start; margin-top: -14px;">Ways to Get in Touch</h1>
                <p style="color: white; font-family: 'Montserrat', sans-serif; text-align: start; padding-bottom: 3rem; font-size: 12px;">Connect with us effortlessly through various channels to discuss your needs or inquiries.<br>We're always here to assist you.</p>
        
            <div class="row">
                <div class="col-md-6">
                    <div style="color: white; font-family: 'Montserrat', sans-serif; font-weight: 400; text-align: start;">
                        <!-- <p style="color: white; padding-bottom: .5rem; font-size: 16px;">PERSONAL INFORMATION</p> -->
                        <p>
                            <i class="fas fa-map-marker-alt" style="color: #ffb48c; font-size: 20px; width: 25px; display: inline-block;"></i> 
                            <span style="margin-left: 10px; font-size: 14px;">Culianan, Zamboanga City, Philippines</span>
                        </p>
                        <p>
                            <i class="fas fa-phone-alt" style="color: #ffb48c; font-size: 20px; width: 25px; display: inline-block;"></i> 
                            <span style="margin-left: 10px; font-size: 14px;">+639971749639</span>
                        </p>
                        <p>
                            <i class="fas fa-envelope" style="color: #ffb48c; font-size: 20px; width: 25px; display: inline-block;"></i> 
                            <span style="margin-left: 10px; font-size: 14px;">enriqueznathalie2@gmail.com</span>
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div style="color: white; font-family: 'Montserrat', sans-serif; font-weight: 400; text-align: start;">
                        <!-- <p style="color: white; padding-bottom: .5rem; font-size: 16px;">LINKS</p> -->
                        <p>
                            <i class="fab fa-facebook-f" style="color: #ffb48c; font-size: 20px; width: 25px; display: inline-block;"></i> 
                            <a href="https://www.facebook.com/enriquez.nthl" target="_blank" style="margin-left: 10px; font-size: 14px; text-decoration: none; color: white;">facebook.com/enriquez.nthl</a>
                        </p>
                        <p>
                            <i class="fa-brands fa-linkedin-in" style="color: #ffb48c; font-size: 20px; width: 25px; display: inline-block;"></i>  
                            <a href="https://www.linkedin.com/in/nathalie-enriquez-8065021b7/" target="_blank" style="margin-left: 10px; font-size: 14px; text-decoration: none; color: white;">linkedin.com/in/nathalie-enriquez-8065021b7/</a>
                        </p>
                        <p>
                            <i class="fa-brands fa-behance" style="color: #ffb48c; font-size: 20px; width: 25px; display: inline-block;"></i>  
                            <a href="https://www.behance.net/nathalienrique" target="_blank" style="margin-left: 10px; font-size: 14px; text-decoration: none; color: white;">behance.net/nathalienrique</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <hr style="border-top: 1px solid #ffb48c; margin-bottom: 1rem;">
        <p style="color: white; text-align: center; font-family: 'Montserrat', sans-serif; font-size: 12px; margin-bottom: 1.5rem;">&copy; 2024 Portfolio (Nathalie Enriquez). All Rights Reserved.</p>
    </footer>
    
    
    <div class="top-up" id="topUpBtn" onclick="scrollToTop()"><i class="fas fa-chevron-up"></i></div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        window.addEventListener('scroll', function() {
            var topUpBtn = document.getElementById('topUpBtn');
            if (window.scrollY > window.innerHeight / 2) {
                topUpBtn.classList.add('show');
            } else {
                topUpBtn.classList.remove('show');
            }
        });

        // Function to toggle the visibility of sections
        function toggleSection(sectionId, event) {
            event.preventDefault();
            var sections = ['skills', 'affiliations', 'education'];
            for (var i = 0; i < sections.length; i++) {
                var section = document.getElementById(sections[i]);
                if (sections[i] === sectionId) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            }
        }
        
        function downloadCV() {
            var cvUrl = 'nathalie-enriquez-cv.pdf';
            
            var anchorElement = document.createElement('a');
            anchorElement.href = cvUrl;
            anchorElement.download = 'cv.pdf'; 
            anchorElement.click();
        }            
    </script>
</body>
</html>
