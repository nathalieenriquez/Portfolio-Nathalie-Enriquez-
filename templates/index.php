<?php
    require_once "../functions/retrieve.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/indexStyle.css">

    <title>Nathalie Enriquez | Web Portfolio</title>

    <style>
        body {
            background-color: #2f2f2f;
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
      </style>
</head>
<body>
    <div class="container">
        <header style="position: fixed; top: 0; left: 0; right: 0; background-color: #2f2f2f; z-index: 1000; padding-bottom: 20px; padding-top: 30px;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <img src="../assets/images/NE-w.png" width="8%">
                    </div>
                    <div class="col">
                        <nav class="navbar" style="font-family: 'Montserrat', sans-serif; font-weight: 500; font-size: 14px;">
                            <a href="#home" class="nav-link">Home</a>
                            <a href="#about" class="nav-link">About</a>
                            <a href="#services" class="nav-link">Services</a>
                            <a href="#projects" class="nav-link">Projects</a>
                            <a href="#contact" class="nav-link">Contact</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div> 

    <section id="home"  style="padding: 4rem 0; padding-bottom: 0;"> 
        <div class="container" style="margin-top: 1.5rem;">
            <div class="row">
                <div class="col-lg-6" style="margin-top: 12rem;">
                    <p style="color: white ; font-weight: 400; font-family: 'Montserrat', sans-serif; font-size: 30px; margin-bottom: 10px;">Hello, it's</p>
                    <p style="color: white; font-family: 'Montserrat', sans-serif; font-size: 55px; font-weight: 600; margin-top: -20px; color: #ffb48c;"><?php echo $firstName;?> <?php echo $lastName;?></p>
                    <p style="color: white; font-weight: 400; font-family: 'Montserrat', sans-serif; margin-top: -5px;">&nbsp;<span style="color: #ffb48c; font-weight: bold;">—</span> <?php echo $description;?></p> 
                    <!-- <button onclick="downloadCV()" style="font-family: 'Montserrat', sans-serif; font-size: 12px; margin-left: 10px; margin-top: 50px; border: 1px solid #ffb48c; border-radius: 10px; background-color: #202020; color: #fff; padding: 10px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#ffb48c'; this.style.color='white';" onmouseout="this.style.backgroundColor='#202020'; this.style.color='#fff';">Download CV</button> -->
                </div>
                <div class="col-lg-6">
                    <img src="../assets/images/11.png" class="img-fluid" alt="Nathalie Enriquez">
                </div>
            </div>
        </div>
    </section>

    <section id="about" style="background-color: #202020; padding: 4rem 0;">
        <div class="container" style="margin-top: 4.5rem; margin-bottom: 4.5rem;">
            <div class="row">
               <div class="col-lg-5">
                    <img src="../assets/uploaded/<?php echo $about_img; ?>" class="sidebar-image" style="width: 350px; height: auto; border-radius: 10px;" alt="About Me Image">
                </div>

                <div class="col-lg-6">
                    <h1 style="color: #ffb48c; font-family: 'Montserrat', sans-serif; font-weight: 600;">About Me</h1>
                    <p style="color: white; font-weight: 300; font-size: 12px; font-family: 'Montserrat', sans-serif;"><?php echo $about_desc;?></p>

                    <nav>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="#skills" onclick="toggleSection('skills', event)" style="color: white; font-weight: 500; font-size: 15px; font-family: 'Montserrat', sans-serif; margin-right: 2rem;">Skills</a>            
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#affiliations" onclick="toggleSection('affiliations', event)" style="color: white; font-weight: 500; font-size: 15px; font-family: 'Montserrat', sans-serif; margin-right: 2rem;">Affiliations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#education" onclick="toggleSection('education', event)" style="color: white; font-weight: 500; font-size: 15px; font-family: 'Montserrat', sans-serif;">Education</a>
                            </li>
                        </ul>
                    </nav>

                    <!-- <section id="skills" style="display: block;">
                        <div class="container"> -->
                    <?php
                    include_once "../dbConfig/dbConnection.php";

                    $query = "SELECT * FROM skills";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result && $result->num_rows > 0) {
                        echo '<section id="skills" style="display: block;">';
                        echo '<div class="container">';

                        while ($row = $result->fetch_assoc()) {
                            $category = $row['category'];
                            $description = $row['description'];

                            echo '<p style="color: #ffb48c; font-weight: 600; font-size: 12px; font-family: \'Montserrat\', sans-serif; padding-top: 1rem;">' . $category . '</p>';
                            echo '<ul style="list-style-type: none; padding-left: 0; margin-top: -.8rem;">';
                            echo '<li style="color: white; font-weight: 500; font-size: 12px; font-family: \'Montserrat\', sans-serif;">&#8226; ' . $description . '</li>';
                            echo '</ul>';
                        }

                        echo '</div>';
                        echo '</section>';

                        $result->free_result(); // Free the result set
                    } else {
                        $errorMessage = "No data found";
                    }

                    $query = "SELECT * FROM affiliations";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result && $result->num_rows > 0) {
                        echo '<section id="affiliations" style="display: none;">';
                        echo '<div class="container">';

                        while ($row = $result->fetch_assoc()) {
                            $organization = $row['organization'];
                            $position = $row['position'];
                            $date_from = $row['date_from'];
                            $year_from = DateTime::createFromFormat('Y-m-d', $date_from)->format('Y');
                            $date_to = $row['date_to'];
                            $year_to = DateTime::createFromFormat('Y-m-d', $date_to)->format('Y');

                            echo '<p style="color: #ffb48c; font-weight: 600; font-size: 12px; font-family: \'Montserrat\', sans-serif; padding-top: 1rem;">' . $organization . '</p>';
                            echo '<ul style="list-style-type: none; padding-left: 0; margin-top: -.8rem;">';
                            echo '<li style="color: white; font-weight: 500; font-size: 12px; font-family: \'Montserrat\', sans-serif;">&#8226; ' . $position . ' <span>(' . $year_from . ' - ' . $year_to . ')</span></li>';
                            echo '</ul>';
                        }

                        echo '</div>';
                        echo '</section>';

                        $result->free_result(); // Free the result set
                    } else {
                        $errorMessage = "No data found";
                    }

                    $query = "SELECT * FROM education";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result && $result->num_rows > 0) {
                        echo '<section id="education" style="display: none;">';
                        echo '<div class="container">';

                        while ($row = $result->fetch_assoc()) {
                            $level = $row['level'];
                            $school = $row['school'];
                            $course = $row['course'];
                            $year_from = DateTime::createFromFormat('Y-m-d', $date_from)->format('Y');
                            $date_to = $row['date_to'];
                            $year_to = DateTime::createFromFormat('Y-m-d', $date_to)->format('Y');

                            echo '<p style="color: #ffb48c; font-weight: 600; font-size: 12px; font-family: \'Montserrat\', sans-serif; padding-top: 1rem;">' . $level . '</p>';
                            echo '<ul style="list-style-type: none; padding-left: 0; margin-top: -.8rem;">';
                            echo '<li style="color: white; font-weight: 700; font-size: 12px; font-family: \'Montserrat\', sans-serif;">&#8226; ' . $school . '</li>';
                            echo '<li style="color: white; font-weight: 500; font-size: 12px; font-family: \'Montserrat\', sans-serif; padding-left: 6px;">&#8226; ' . $course . '</li>';
                            echo '<li style="color: white; font-weight: 500; font-size: 12px; font-family: \'Montserrat\', sans-serif; padding-left: 6px;">&#8226; ' . $position . ' <span>(' . $year_from . ' - ' . $year_to . ')</span></li>';


                            echo '</ul>';
                        }

                        echo '</div>';
                        echo '</section>';

                        $result->free_result(); // Free the result set
                    } else {
                        $errorMessage = "No data found";
                    }

                    // $stmt->close();
                    // $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </section>

        <section id="services" style="padding: 4rem 0;">
            <div class="container" style="margin-top: 3rem; margin-bottom: 3rem;">
                <div class="row">
                    <?php
                    $query = "SELECT * FROM service_header";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result && $result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $title = $row['title'];
                        $description = $row['description'];
                        
                        echo '<div class="col-md-12">';
                        echo '<p style="color: #ffb48c; font-family: \'Montserrat\', sans-serif; font-weight: 600; text-align: center; font-size: 14px;">SERVICES</p>';
                        echo '<h1 style="color: white; font-family: \'Montserrat\', sans-serif; font-weight: 600; text-align: center; margin-top: -14px;">' . $title . '</h1>';
                        echo '<p style="color: white; font-family: \'Montserrat\', sans-serif; text-align: center; padding-bottom: 2rem; font-size: 12px;">' . $description . '</p>';
                        echo '</div>';
                        
                        $result->free_result(); 
                    } else {
                        $errorMessage = "No data found";
                    }

                    $query = "SELECT * FROM services";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result && $result->num_rows > 0) {
                        $counter = 0; 

                        while ($row = $result->fetch_assoc()) {
                            $category = $row['category'];
                            $description = $row['description'];

                            if ($counter % 2 == 0) {
                                echo '<div class="row">';
                            }

                            echo '<div class="col-md-6">';
                            echo '<div class="graphic" style="background-color: #202020; font-family: \'Montserrat\', sans-serif; font-size: 12px; color: white; padding: 2rem; border-radius: 10px; text-align: center; position: relative;">';
                            echo '<i class="fa-solid fa-pen-nib" style="font-size: 5rem; padding-bottom: 15px; padding-top: 15px;"></i>';
                            echo '<h4 style="color: #ffb48c; font-weight: 600;">' . $category . '</h4>';
                            echo '<p>' . $description . '</p>';
                            echo '</div>';
                            echo '</div>';

                            if ($counter % 2 != 0 || $counter == $result->num_rows - 1) {
                                echo '</div>';
                            }

                            $counter++;
                        }

                        $result->free_result(); 
                    } else {
                        $errorMessage = "No data found";
                    }
                    ?>                    
                </div>
            </div>
        </section>

    <section id="projects" style="background-color: #202020; padding: 4rem 0;">
        <div class="container" style="margin-top: 4.5rem; margin-bottom: 4.5rem;">
            <div class="col-md-12">
            <?php
                $query = "SELECT * FROM project_header";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result && $result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $title = $row['title'];
                    $description = $row['description'];
                    
                    echo '<p style="color: #ffb48c; font-family: \'Montserrat\', sans-serif; font-weight: 600; text-align: center; font-size: 14px;">PROJECTS</p>';
                    echo '<h1 style="color: white; font-family: \'Montserrat\', sans-serif; font-weight: 600; text-align: center; margin-top: -14px;">' . $title . '</h1>';
                    echo '<p style="color: white; font-family: \'Montserrat\', sans-serif; text-align: center; padding-bottom: 3rem; font-size: 12px;">' . $description . '</p>';
                    
                    $result->free_result(); 
                } else {
                    $errorMessage = "No data found";
            }
            ?>
            <h3 style="color: white; font-family: 'Montserrat', sans-serif; font-weight: 600; text-align: center; padding-bottom: 1rem;">Graphic Designs</h3>
                <?php
                    $sql = "SELECT * FROM projects";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo '<div class="row">';

                        $count = 0;

                        while ($row = $result->fetch_assoc()) {
                            $link = $row['link']; 

                            echo '
                            <div class="col-md-4">
                                <div class="graphic-design-tile" style="background-color: #2f2f2f; padding: 2rem; margin-bottom: 2rem; border-radius: 10px;">
                                  <a href="' . htmlspecialchars($link) . '" target="_blank"> <img src="../assets/images/try.jpg" style="width: 100%; aspect-ratio: auto;"></a>
                                </div>
                            </div>';

                            $count++; 

                                if ($count % 3 == 0) {
                                    echo '</div><div class="row">'; 
                                }
                            }

                            if ($count % 3 != 0) {
                                echo '</div>';
                            }
                        } else {
                            echo 'No projects found.';
                        }
                    ?>

            </div>

            <div class="col-md-12" style="margin-top: 5rem;">
                <h3 style="color: white; font-family: 'Montserrat', sans-serif; font-weight: 600; text-align: center; padding-bottom: 1rem;">UI/UX Designs</h3>
                <?php
                    $sql = "SELECT * FROM projects";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo '<div class="row">';

                        $count = 0;

                        while ($row = $result->fetch_assoc()) {
                            $link = $row['link']; 

                            echo '
                            <div class="col-md-4">
                                <div class="graphic-design-tile" style="background-color: #2f2f2f; padding: 2rem; margin-bottom: 2rem; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                    <a href=' . htmlspecialchars($link) . '" style="font-size: 12px; font-family: \'Montserrat\', sans-serif; font-weight: 500; text-align: center; color: white; text-decoration: none;" target="_blank">
                                    Mr. & Ms. WMSU 2023 Congratulatory Post</a>
                                </div>
                            </div>';

                            $count++; 

                                if ($count % 3 == 0) {
                                    echo '</div><div class="row">'; 
                                }
                            }

                            if ($count % 3 != 0) {
                                echo '</div>';
                            }
                        } else {
                            echo 'No projects found.';
                        }
                    ?>
            </div>
        </div>
    </section>

    <section id="contact" style="padding: 4rem 0;">
        <div class="container" style="margin-top: 2.5rem;">
        
        <?php
            $query = "SELECT * FROM contact_header";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $title = $row['title'];
                $description = $row['description'];
                
                echo '<p style="color: #ffb48c; font-family: \'Montserrat\', sans-serif; font-weight: 600; text-align: start; font-size: 14px;">CONTACT</p>';
                echo '<h1 style="color: white; font-family: \'Montserrat\', sans-serif; font-weight: 600; text-align: start; margin-top: -14px;">' . $title . '</h1>';
                echo '<p style="color: white; font-family: \'Montserrat\', sans-serif; text-align: start; padding-bottom: 3rem; font-size: 12px;">' . $description . '</p>';
                
                $result->free_result(); // Free the result set
            } else {
                $errorMessage = "No data found";
            }
            ?>
            <div class="row">
                <div class="col-md-6">
                    <div style="color: white; font-family: 'Montserrat', sans-serif; font-weight: 400; text-align: start;">
                        <!-- <p style="color: white; padding-bottom: .5rem; font-size: 16px;">PERSONAL INFORMATION</p> -->
                        <p>
                            <i class="fas fa-map-marker-alt" style="color: #ffb48c; font-size: 20px; width: 25px; display: inline-block;"></i> 
                            <span style="margin-left: 10px; font-size: 14px;"><?php echo $address;?></span>
                        </p>
                        <p>
                            <i class="fas fa-phone-alt" style="color: #ffb48c; font-size: 20px; width: 25px; display: inline-block;"></i> 
                            <span style="margin-left: 10px; font-size: 14px;"><?php echo $contact_number;?></span>
                        </p>
                        <p>
                            <i class="fas fa-envelope" style="color: #ffb48c; font-size: 20px; width: 25px; display: inline-block;"></i> 
                            <span style="margin-left: 10px; font-size: 14px;"><?php echo $email;?></span>
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div style="color: white; font-family: 'Montserrat', sans-serif; font-weight: 400; text-align: start;">
                        <!-- <p style="color: white; padding-bottom: .5rem; font-size: 16px;">LINKS</p> -->
                        <p>
                            <i class="fab fa-facebook-f" style="color: #ffb48c; font-size: 20px; width: 25px; display: inline-block;"></i> 
                            <a href="" target="_blank" style="margin-left: 10px; font-size: 14px; text-decoration: none; color: white;"><?php echo $facebook;?></a>
                        </p>
                        <p>
                            <i class="fa-brands fa-linkedin-in" style="color: #ffb48c; font-size: 20px; width: 25px; display: inline-block;"></i>  
                            <a href="" target="_blank" style="margin-left: 10px; font-size: 14px; text-decoration: none; color: white;"><?php echo $linkedIn;?></a>
                        </p>
                        <p>
                            <i class="fa-brands fa-behance" style="color: #ffb48c; font-size: 20px; width: 25px; display: inline-block;"></i>  
                            <a href="" target="_blank" style="margin-left: 10px; font-size: 14px; text-decoration: none; color: white;"><?php echo $behance;?></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <hr style="border-top: 1px solid #ffb48c; margin-bottom: 1rem;">
        <p style="color: white; text-align: center; font-family: 'Montserrat', sans-serif; font-size: 12px; margin-bottom: 1.5rem;">&copy; 2024 Nathalie Enriquez | Web Portfolio. All Rights Reserved.</p>
    </footer>
    
    
    <div class="top-up" id="topUpBtn" onclick="scrollToTop()"><i class="fas fa-chevron-up"></i></div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        //topup
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

        //about me - navbars
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
        
        //download cv
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
