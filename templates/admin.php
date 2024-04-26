    <?php
        require_once "../functions/update_home.php"; 
        require_once "../functions/update_about.php";
        require_once "../functions/retrieve.php";

        // Your PHP code to fetch data from the database
        $category = '';
        $description = '';

        $skill_query = "SELECT * FROM skills";
        $res_skills = $conn->query($skill_query);

        $org = '';
        $pos = '';
        $from = '';
        $to = '';

        $aff_query = 'SELECT * FROM affiliations';
        $res_aff = $conn->query($aff_query);

        $level = '';
        $school = '';
        $course = '';
        $d_from = '';
        $d_to = '';

        $edu_query = 'SELECT * FROM education';
        $res_edu = $conn->query($edu_query);

        $ser_title = '';
        $ser_desc = '';

        $ser_query = 'SELECT * FROM service_header';
        $res_ser = $conn->query($ser_query);

        $serv_categ = '';
        $serv_descp = '';

        $serv_query = 'SELECT * FROM services';
        $res_serv = $conn->query($serv_query);

        $proj_title = '';
        $proj_desc = '';

        $proj_query = 'SELECT * FROM project_header';
        $res_proj = $conn->query($proj_query);

        $proj_categ = '';
        $proj_link = '';

        $projects_query = 'SELECT * FROM projects';
        $res_projects = $conn->query($projects_query);
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.0/css/boxicons.min.css">
        <link rel="stylesheet" href="../assets/css/adminStyle.css">

        <title>Admin</title>

        <style>
            body {
                background-color: #f5f7fa;
                padding-left: 280px; 
                padding-right: 28px; 
                padding-top: 3rem;
                box-sizing: border-box;
            }

            ::-webkit-scrollbar {
                width: 5px;
            }

            ::-webkit-scrollbar-track {
                box-shadow: inset 0 0 5px grey;
                border-radius: 10px;
            }

            ::-webkit-scrollbar-thumb {
                background: #ba5036;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
    <div class="sidenav">
        <div class="logo-container">
            <img src="../assets/images/NE-w.png" style="width: 35px; height: auto; margin-right: 4px;">
            <span class="logo-name">ADMIN PANEL</span>
        </div>
            <a href="#home" class="active" onclick="changeSection('home')"><i class="fa-solid fa-house" style="font-size: 15px; width: 20px;"></i> <span class="link-text">Home</span></a>
            <a href="#about" onclick="changeSection('about')"><i class="fa-solid fa-user" style="font-size: 15px; width: 20px;"></i> <span class="link-text">About</span></a>
            <a href="#services" onclick="changeSection('services')"><i class="fa-solid fa-wrench" style="font-size: 15px; width: 20px;"></i> <span class="link-text">Services</span></a>
            <a href="#projects" onclick="changeSection('projects')"><i class="fa-solid fa-box" style="font-size: 15px; width: 20px;"></i> <span class="link-text">Projects</span></a>
            <a href="#contact" onclick="changeSection('contact')"><i class="fa-solid fa-address-card" style="font-size: 15px; width: 20px;"></i> <span class="link-text">Contact</span></a>
        <div style="margin-top: 14rem;">
            <a href="../templates/index.php" onclick="changeSection('portfolio')"><i class="fa-solid fa-file" style="font-size: 15px; width: 20px;"></i> <span class="link-text">Portfolio</span></a>
        </div>
    </div>

<div class="container">
    <form action="" method="POST">
            <section id="home">
        <h1 class="title">Home</h1>
            <div class="description">
                <div class="row form-labels">
                    <div class="col">
                        <p>First Name</p>
                        <input type="text" class="form-control" value="<?php echo htmlspecialchars($firstName); ?>" aria-label="First name" readonly>
                    </div>
                    <div class="col">
                        <p>Last Name</p>
                        <input type="text" class="form-control" value="<?php echo htmlspecialchars($lastName); ?>" aria-label="Last name" readonly>
                    </div>
                </div>
                <br>
                <div class="form-floating form-labels">
                    <div class="col">
                        <p>Description</p>
                        <textarea class="form-control" rows="3" aria-label="Description" readonly><?php echo htmlspecialchars($description); ?></textarea>
                    </div>
                </div>
                <br>
                <br>
                <p class="form-labels">Upload CV</p>
                <div class="input-group mb-3 form-labels">
                    <input type="file" class="form-control" id="inputGroupFile02" disabled>
                </div>
                <div class="row justify-content-end mt-3">
                    <div class="col-auto">
                        <button type="button" class="btn-save edit-btn" style="margin-right: .5rem">Edit</button>
                        <button type="button" class="btn-save save-btn">Save</button>
                    </div>
                </div>
            </div>
    </section>
    </form>

    <section id="about" style="margin-bottom: 2rem">
        <form action="" method="POST" enctype="multipart/form-data">
            <h1 class="title">About Me</h1>
            <div class="description">
                <div class="row form-labels">
                    <div class="col-2" style="display: flex; flex-direction: column; align-items: center; text-align: center; ">
                        <div class="imageWrapper">
                            <img class="image" src="../assets/uploaded/<?php echo $about_img; ?>">
                        </div>
                        <label for="file-upload" class="file-upload">Choose File
                            <input type="file" name="about_img" id="file-upload" class="file-input">
                        </label>
                    </div>
                    <div class="col">
                        <p>Description</p>
                        <textarea name="text" class="form-control" rows="8" style="width: 100%;" placeholder="Enter description" aria-label="about_desc"><?php echo htmlspecialchars($about_desc); ?></textarea>
                    </div>
                </div>
                <div class="row justify-content-end mt-3">
                    <div class="col-auto">
                        <button type="button" class="btn-save" style="margin-right: .5rem">Edit</button>
                        <button type="button" class="btn-save about_desc-save">Save</button>
                    </div>
                </div>
            </div>
        </form>
        
        <div class="description">
            <div class="row form-labels">
                <div class="col">
                    <h4 style="font-weight: 600; color: #ba5036">Skills</h4>
                </div>
                <div class="col d-flex justify-content-end align-items-center">
                    <i class="fa-solid fa-circle-plus add" style="margin-right: .5rem; color: #ba5036; font-size: 20px; cursor: pointer;" onclick="addSkillField()"></i>
                </div>
            </div>
            <form id="skillsForm" action="" method="POST">

            <?php
            if ($res_skills && $res_skills->num_rows > 0) {
                while ($row = $res_skills->fetch_assoc()) {
                    $id = $row['id'];
                    $category = $row['category'];
                    $description = $row['description'];

                    // Echo the HTML for each row
                    echo '
                    <div class="row form-labels">
                        <div style="display: flex; justify-content: space-evenly; margin-top: 1rem">
                            <div class="col">
                                <p>Skill Category</p>
                                <input type="text" class="form-control" style="width: 90%;" placeholder="Enter skill category" aria-label="Skill category" name="skill_categ[]" value="' . htmlspecialchars($category) . '">
                            </div>
                            <div class="col">
                                <p>Skill Description</p>
                                <input type="text" class="form-control" style="width: 90%;" placeholder="Enter skill description" aria-label="Skill description" name="skill_desc[]" value="' . htmlspecialchars($description) . '">
                            </div>
                            <div style="display: flex; justify-content: space-between">
                                <i class="fa-solid fa-trash delete-skills" style="margin-top: 3rem; color: #ba5036; font-size: 20px; cursor: pointer;" data-id="' . $id . '"></i>
                                <i class="fa-solid fa-pencil" style="margin-top: 3rem; margin-left: 1.5rem; margin-top: 3rem; color: #ba5036; font-size: 20px; cursor: pointer;" data-id="' . $id . '"></i>
                            </div>
                        </div>
                    </div>';
                }
            }
            ?>

                <div id="additionalSkills"></div>
                <div class="row justify-content-end mt-3 form-labels">
                    <div class="col-auto d-flex align-items-center">
                        <button type="button" class="btn-save btn-skills">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="description">
            <div class="row form-labels">
                <div class="col">
                    <h4 style="font-weight: 600; color: #ba5036">Affiliations</h4>
                </div>
                <div class="col d-flex justify-content-end align-items-center">
                    <i class="fa-solid fa-circle-plus add" style="margin-right: .5rem; color: #ba5036; font-size: 20px; cursor: pointer;" onclick="addAffiliationField()"></i>
                </div>
            </div>
            <form id="affiliationsForm">
                <?php
                    if($res_aff && $res_aff->num_rows > 0){
                        while ($row = $res_aff->fetch_assoc()){
                            $id = $row['id'];
                            $org = $row['organization'];
                            $pos = $row['position'];
                            $from = $row['date_from'];
                            $to = $row['date_to'];

                            echo '
                            <div class="row form-labels form-aff">
                                <div style="display: flex; justify-content: space-evenly; margin-top: 1rem">
                                    <div class="col">
                                        <p>Organization/Institution</p>
                                        <input type="text" class="form-control" style="width: 90%" placeholder="Enter organization/institution" aria-label="Skill category" name="aff_org[]" value="' . htmlspecialchars($org) . '">
                                    </div>
                                    <div class="col">
                                        <p>Position</p>
                                        <input type="text" class="form-control" style="width: 90%" placeholder="Enter position" aria-label="Skill description" name="aff_pos[]" value="' . htmlspecialchars($pos) . '">
                                    </div>
                                    <div class="col-2">
                                        <p>From</p>
                                        <input type="date" class="form-control" style="width: 90%" aria-label="Select year" name="aff_from[]" value="' . htmlspecialchars($from) . '">
                                    </div>
                                    <div class="col-2">
                                        <p>To</p>
                                        <input type="date" class="form-control" style="width: 90%" aria-label="Select year" name="aff_to[]" value="' . htmlspecialchars($to) . '">
                                    </div>
                                    <div style="display: flex; justify-content: space-between">
                                        <i class="fa-solid fa-trash delete-aff" style="margin-top: 3rem; color: #ba5036; font-size: 20px; cursor: pointer;" data-id="' . $id . '"></i>
                                        <i class="fa-solid fa-pencil edit-aff" style="margin-top: 3rem; margin-left: 1.5rem; margin-top: 3rem; color: #ba5036; font-size: 20px; cursor: pointer;" data-id="' . $id . '"></i>
                                    </div>
                                </div>
                             </div>';
                        }
                    }
                ?>
                <div id="additionalAffiliations"></div>
                <div class="row justify-content-end mt-3 form-labels">
                    <div class="col-auto d-flex align-items-center">
                        <button type="button" class="btn-save btn-aff">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="description">
            <div class="row form-labels">
                <div class="col">
                    <h4 style="font-weight: 600; color: #ba5036">Education</h4>
                </div>
                <div class="col d-flex justify-content-end align-items-center">
                    <i class="fa-solid fa-circle-plus add" style="margin-right: .5rem; color: #ba5036; font-size: 20px; cursor: pointer;" onclick="addEducationField()"></i>
                </div>
            </div>
            <form id="educationForm">
                <?php
                    if ($res_edu && $res_edu->num_rows > 0) {
                        while ($row = $res_edu->fetch_assoc()){
                            $id = $row['id'];
                            $level = $row['level'];
                            $school = $row['school'];
                            $course = $row['course'];
                            $d_from = $row['date_from'];
                            $d_to = $row['date_to'];

                            echo '
                            <div class="row form-labels">
                            <div style="display: flex; justify-content: space-evenly; margin-top: 1rem">
                                <div class="col">
                                    <p>Education Level</p>
                                    <select id="educationLevel" style="width: 90%;" class="form-select" onchange="toggleFields()" name="education[]">
                                        <option selected>Select education level</option>
                                        <option value="primary">Primary</option>
                                        <option value="secondary">Secondary</option>
                                        <option value="tertiary">Tertiary</option>
                                    </select>
                                </div>
                                <div class="col" id="schoolField">
                                    <p>School</p>
                                    <input type="text" class="form-control" style="width: 90%;" disabled placeholder="Enter school" name="education[]" value="' . htmlspecialchars($school) . '">
                                </div>
                                <div class="col" id="strandField">
                                    <p>Strand</p>
                                    <select id="strand" class="form-select" style="width: 90%;" onchange="toggleFields()" name="education[]">
                                        <option selected>Select strand</option>
                                        <option value="STEM">STEM (Science, Technology, Engineering, and Mathematics)</option>
                                        <option value="HUMMS">HUMSS (Humanities and Social Science)</option>
                                        <option value="ABM">ABM (Accountancy, Business and Management Strand)</option>
                                        <option value="GAS">GAS (General Academic Strand)</option>
                                    </select>
                                </div>
                                <div class="col" id="courseField">
                                    <p>Course</p>
                                    <input type="text" class="form-control" style="width: 90%;" placeholder="Enter course" name="education[]">
                                </div>
                                <div class="col-2" id="fromField">
                                    <p>From</p>
                                    <input type="date" class="form-control" style="width: 90%;" aria-label="Select year" name="education[]">
                                </div>
                                <div class="col-2" id="toField">
                                    <p>To</p>
                                    <input type="date" class="form-control" style="width: 90%;" aria-label="Select year" name="education[]">
                                </div>
                                <div style="display: flex; justify-content: space-between">
                                    <i class="fa-solid fa-trash delete-educ" style="margin-top: 3rem; color: #ba5036; font-size: 20px; cursor: pointer;" data-id="' . $id . '"></i>
                                    <i class="fa-solid fa-pencil edit-educ" style="margin-top: 3rem; margin-left: 1.5rem; margin-top: 3rem; color: #ba5036; font-size: 20px; cursor: pointer;" data-id="' . $id . '"></i>
                                </div>
                            </div>
                            ';
                        }
                    }
                ?>
            </div>
                <div id="additionalEducation"></div>
                <div class="row justify-content-end mt-3 form-labels">
                    <div class="col-auto d-flex align-items-center">
                        <button type="button" class="btn-save">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section id="services" style="margin-bottom: 2rem">
        <h1 class="title">Services</h1>

        <div class="description">
            <form action="" method="POST">
                <?php
                    if ($res_ser && $res_ser->num_rows > 0){
                        while ($row = $res_ser->fetch_assoc()){
                            $id = $row['id'];
                            $ser_title = $row['title'];
                            $ser_desc = $row['description'];

                            echo '
                            <div class="form-floating form-labels form-ser">
                                <div class="col">
                                    <p>Title</p>
                                    <input type="text" class="form-control" placeholder="Enter title" aria-label="title-ser" value="' . htmlspecialchars($ser_title) . '">
                                </div>
                                <br>
                                <div class="col">
                                    <p>Description</p>
                                    <textarea name="text" class="form-control" rows="3" style="width: 100%;" placeholder="Enter description" aria-label="description-ser">' . htmlspecialchars($ser_desc) . '</textarea>
                                </div>
                                <div class="row justify-content-end mt-3 form-labels">
                                    <div class="col-auto">
                                        <button type="button" class="btn-save btn-ser">Save</button>
                                    </div>
                                </div>
                            </div>
                            ';
                        }
                    }
                ?>
            </form>
        </div>

        <div class="description">
            <div class="row form-labels">
                <div class="col">
                    <h4 style="font-weight: 600; color: #ba5036">Services</h4>
                </div>
                <div class="col d-flex justify-content-end align-items-center">
                    <i class="fa-solid fa-circle-plus add" style="margin-right: .5rem; color: #ba5036; font-size: 20px; cursor: pointer;" onclick="addServiceField()"></i>
                </div>
            </div>
            <form id="serviceForm">
                <?php
                    if ($res_serv && $res_serv->num_rows > 0){
                        while ($row = $res_serv->fetch_assoc()){
                            $id = $row['id'];
                            $serv_categ = $row['category'];
                            $serv_descp = $row['description'];

                            echo '
                            <div class="row form-labels form-serv" style="margin-top: 2rem">
                            <div class="col-2" style="display: flex; flex-direction: column; align-items: center; text-align: center; ">
                                <div class="imageWrapper">
                                    <img class="image" src="../assets/images/default_profile.png">
                                </div>
                                <label for="file-upload" class="file-upload">Choose File
                                    <input type="file" id="file-upload" class="file-input">
                                </label>
                            </div>
                            <div class="col">
                                <p>Service Category</p>
                                <input type="text" class="form-control" placeholder="Enter service category" aria-label="Skill category" name="categServ[]" value="' . htmlspecialchars($serv_categ) . '">
                                <br>
                                <p>Service Description</p>
                                <input type="text" class="form-control" placeholder="Enter service description" aria-label="Skill description" name="descServ[]" value="' . htmlspecialchars($serv_descp) . '">
                                <div style="margin-top: 1.5rem">
                                    <button type="button" class="btn-save edit-serv" style="margin-right: .5rem" data-id="' . $id . '">Save Edit</button>
                                    <button type="button" class="btn-save delete-serv" style="margin-right: .5rem" data-id="' . $id . '">Delete</button>
                                </div>
                            </div>
                        </div>
                            ';
                        }
                    }
                ?>
                <div id="additionalService"></div>
                <div class="row justify-content-end mt-3 form-labels">
                    <div class="col-auto d-flex align-items-center">
                        <button type="button" class="btn-save save-serv">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section id="projects" style="margin-bottom: 2rem">
        <h1 class="title">Projects</h1>
        <div class="description">
                <?php
                    if ($res_proj && $res_proj->num_rows > 0){
                        while ($row = $res_proj->fetch_assoc()){
                            $proj_title = $row['title'];
                            $proj_desc = $row['description'];
                            echo '
                                <div class="form-floating form-labels form-proj_header">
                                    <div class="col">
                                        <p>Title</p>
                                        <input type="text" class="form-control" placeholder="Enter title" aria-label="projTitle" value="' . htmlspecialchars($proj_title) . '">
                                    </div>
                                    <br>
                                    <div class="col">
                                        <p>Description</p>
                                        <textarea name="text" class="form-control" rows="3" style="width: 100%;" placeholder="Enter description" aria-label="projDesc">' . htmlspecialchars($proj_desc) . '</textarea>
                                    </div>
                                    <div class="row justify-content-end mt-3 form-labels">
                                        <div class="col-auto">
                                            <button type="button" class="btn-save edit-header-proj">Save</button>
                                        </div>
                                    </div>
                                </div>
                            ';
                        }
                    }
                ?>
        </div>

        <?php
            if ($res_projects && $res_projects->num_rows > 0){
                while ($row = $res_projects->fetch_assoc()){
                    $id = $row['id'];
                    $proj_categ = $row['category'];
                    $proj_link = $row['link'];

                    echo '
                    <div class="description">
                        <div class="row form-labels">
                            <div class="col">
                                <h4 style="font-weight: 600; color: #ba5036">Project</h4>
                            </div>
                            <div class="col d-flex justify-content-end align-items-center">
                                <i class="categ fa-solid fa-circle-plus add" style="margin-right: .5rem; color: #ba5036; font-size: 20px; cursor: pointer;" onclick="addProjectField()"></i>
                            </div>
                        </div>  
                        <form id="projectForm">
                            <div class="form-floating form-labels form-projects">
                                <div class="row">
                                    <div class="col">
                                        <p>Project Category</p>
                                        <input type="text" class="form-control new-proj" placeholder="Enter project category" aria-label="title" name="projectCategory[]" value="' . htmlspecialchars($proj_categ) . '">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-between align-items-center mt-3">
                                        <div>
                                            <p>Project Link</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control new-proj" placeholder="Enter project link" aria-label="title" name="projectLink[]" value="' . htmlspecialchars($proj_link) . '">
                                    </div>
                                </div>
                                <div id="additionalProjects"></div>
                                <div class="row justify-content-end mt-3 form-labels">
                                    <div class="col-auto d-flex align-items-center">
                                        <button type="button" class="btn-save btn-proj-edit" style="margin-right: .5rem" data-id="' . $id . '">Save Edit</button>
                                        <div>
                                            <i class="fa-solid fa-trash btn-proj-delete" style="margin-left: 1rem; margin-top: .5rem; color: #ba5036; font-size: 20px; cursor: pointer;" data-id="' . $id . '"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    ';
                }
            }
        ?>
    </section>

    <section id="contact" style="margin-bottom: 2rem">
        <h1 class="title">Contact</h1>
        <form class="description" action="../functions/update_contact_header.php" method="post">
            <div class="form-floating form-labels">
                <div class="col">
                    <p>Title</p>
                    <input type="text" class="form-control" name="title" placeholder="Enter title" aria-label="title" value="<?php echo $title; ?>">
                </div>
                <br>
                <div class="col">
                    <p>Description</p>
                    <textarea class="form-control" name="description" rows="3" style="width: 100%;" placeholder="Enter description" aria-label="Description"><?php echo $c_description; ?></textarea>
                </div>
                <div class="row justify-content-end mt-3 form-labels">
                    <div class="col-auto">
                        <button type="button" class="btn-save edit-btn" style="margin-right: .5rem">Edit</button>
                        <button type="submit" class="btn-save">Save</button>
                    </div>
                </div>
            </div>
        </form>

        <div class="description">
            <h4 class="category-subtitle">Contact Information</h4>
            <form class="form-floating form-labels" action="../functions/update_contact_link.php" method="post">
                <div class="col">
                    <p>Address</p>
                    <input type="text" class="form-control" name="address" placeholder="Enter address" aria-label="title" value="<?php echo $address; ?>">
                </div>
                <br>
                <div class="col">
                    <p>Contact Number</p>
                    <input type="text" class="form-control" name="contact_number" placeholder="Enter contact number" aria-label="title" value="<?php echo $contact_number; ?>">
                </div>
                <br>
                <div class="col">
                    <p>Email Address</p>
                    <input type="email" class="form-control" name="email" placeholder="Enter email address" aria-label="title" value="<?php echo $email; ?>">
                </div>
                <div class="row justify-content-end mt-3 form-labels">
                    <div class="col-auto">
                        <button type="button" class="btn-save" style="margin-right: .5rem">Edit</button>
                        <button type="submit" class="btn-save">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="description">
            <h4 class="category-subtitle">Social Media Links</h4>
            
            <form class="form-floating form-labels" action="../functions/update_social_media.php" method="post">
                <div class="col">
                    <p>Facebook</p>
                    <input type="text" class="form-control" name="facebook" placeholder="Enter link" aria-label="title" value="<?php echo $facebook; ?>">
                </div>
                <br>
                <div class="col">
                    <p>LinkedIn</p>
                    <input type="text" class="form-control" name="linkedIn" placeholder="Enter link" aria-label="title" value="<?php echo $linkedIn; ?>">
                </div>
                <br>
                <div class="col">
                    <p>Behance</p>
                    <input type="text" class="form-control" name="behance" placeholder="Enter link" aria-label="title" value="<?php echo $linkedIn; ?>">
                </div>
                <div class="row justify-content-end mt-3 form-labels">
                    <div class="col-auto">
                        <button type="button" class="btn-save" style="margin-right: .5rem">Edit</button>
                        <button type="submit" class="btn-save">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        //sidenav
        function changeSection(sectionId) {
            var sidenavLinks = document.querySelectorAll('.sidenav a');
            sidenavLinks.forEach(function(link) {
                link.classList.remove('active');
            });
            
            var activeLink = document.querySelector('.sidenav a[href="#' + sectionId + '"]');
            activeLink.classList.add('active');
            
            var sections = document.querySelectorAll('section');
            sections.forEach(function(section) {
                section.style.display = 'none';
            });
            
            var targetSection = document.getElementById(sectionId);
            targetSection.style.display = 'block';

            event.preventDefault();
        }

        //hide nonehome
        document.addEventListener('DOMContentLoaded', function() {
            var sections = document.querySelectorAll('section:not(#home)');
            sections.forEach(function(section) {
                section.style.display = 'none';
            });
        });

        // home- edit
        document.addEventListener('DOMContentLoaded', function() {
        const editButton = document.querySelector('.edit-btn');
        const saveButton = document.querySelector('.save-btn');
        const formControls = document.querySelectorAll('.form-control');
        const fileInput = document.getElementById('inputGroupFile02');

        function makeEditable() {
            formControls.forEach(control => {
                control.removeAttribute('readonly');
                control.style.backgroundColor = 'white';
            });
            saveButton.disabled = false;
            editButton.disabled = true;
            fileInput.disabled = false;
        }

        function makeUneditable() {
            formControls.forEach(control => {
                control.setAttribute('readonly', true);
                control.style.backgroundColor = 'white'; 
            });
            saveButton.disabled = true;
            editButton.disabled = false;
            fileInput.disabled = true;
        }

        function saveData() {
            const first_name = document.querySelector('input[aria-label="First name"]').value;
            const last_name = document.querySelector('input[aria-label="Last name"]').value;
            const description = document.querySelector('textarea[aria-label="Description"]').value;

            const formData = new FormData();
            formData.append('first_name', first_name);
            formData.append('last_name', last_name);
            formData.append('description', description);

            // AJAX request to update the data
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '../functions/update_home.php', true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    alert(xhr.responseText);
                    makeUneditable(); 
                } else {
                    alert("Error: " + xhr.statusText);
                }
            };

            xhr.send(formData);
        }

        editButton.addEventListener('click', makeEditable); 
        saveButton.addEventListener('click', saveData); 
    });

        //Edit or Add About Me
        document.addEventListener('DOMContentLoaded', function () {
            const saveButton = document.querySelector('.about_desc-save');

            function saveData() {
                const about_desc = document.querySelector('textarea[aria-label="about_desc"]').value;
                const about_img = document.querySelector('input[name="about_img"]').files[0]; 
                const formData = new FormData();
                formData.append('about_desc', about_desc);
                formData.append('about_img', about_img);

                const xhr = new XMLHttpRequest();
                xhr.open('POST', '../functions/update_about.php', true);
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        alert(xhr.responseText);
                    } else {
                        alert("Error: " + xhr.statusText);
                    }
                };

                xhr.send(formData); 
            }

            saveButton.addEventListener('click', saveData);
        });


        //Edit Skills
        document.addEventListener('DOMContentLoaded', function(){
            const editIcons = document.querySelectorAll('.fa-pencil');

            function updateSkill(icon) {
                const container = icon.closest('.form-labels');

                if (container) {
                    // Find input fields within the container
                    const categoryInput = container.querySelector('input[name="skill_categ[]"]');
                    const descriptionInput = container.querySelector('input[name="skill_desc[]"]');

                    // Check if both input fields are found
                    if (categoryInput && descriptionInput) {
                        const category = categoryInput.value;
                        const description = descriptionInput.value;

                        // Get the ID from the clicked icon's data-id attribute
                        const id = icon.getAttribute('data-id');

                        // Proceed with the update process
                        const formData = new FormData();
                        formData.append('id', id);
                        formData.append('category', category);
                        formData.append('description', description);

                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', '../functions/update_skills.php', true);
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                alert(xhr.responseText);
                            }
                        };
                        xhr.send(formData);
                    } else {
                        console.error('Input fields not found');
                    }
                } else {
                    console.error('Parent container not found');
                }
            }

            editIcons.forEach(function(icon){
                icon.addEventListener('click', function(){
                    updateSkill(icon);
                });
            });
        });

        //Add Skills
        document.addEventListener('DOMContentLoaded', function(){
            const addButton = document.querySelector('.btn-skills');

            function saveData(){
                // Select all input fields with the names "skill_categ[]" and "skill_desc[]"
                const categoryInputs = document.querySelectorAll('input[name="skill_categ[]"]');
                const descriptionInputs = document.querySelectorAll('input[name="skill_desc[]"]');

                // Initialize arrays to store the values for newly added rows
                const newCategories = [];
                const newDescriptions = [];

                // Loop through each input field to extract values
                categoryInputs.forEach(function(input, index){
                    // Check if the row is newly added
                    const isNewRow = input.classList.contains('new-row');
                    if (isNewRow) {
                        newCategories.push(input.value);
                        newDescriptions.push(descriptionInputs[index].value);
                    }
                });

                // Send data for each pair of category and description for newly added rows
                for (let i = 0; i < newCategories.length; i++) {
                    const categoryInput = newCategories[i];
                    const descriptionInput = newDescriptions[i];

                    const formData = new FormData();
                    formData.append('category', categoryInput);
                    formData.append('description', descriptionInput);

                    const xhr = new XMLHttpRequest();
                    xhr.open('POST', '../functions/add_skills.php', true);
                    xhr.send(formData);
                }
                alert('Data saved successfully!');
            }
            addButton.addEventListener('click', saveData);
        });

        //Delete Skills
        document.addEventListener('DOMContentLoaded', function(){
            const deleteIcons = document.querySelectorAll('.delete-skills');

            function deleteSkill(icon) {
                // Find the parent container of the clicked icon
                const container = icon.closest('.form-labels');

                if (container) {
                    // Get the ID from the clicked icon's data-id attribute
                    const id = icon.getAttribute('data-id');

                    // Proceed with the delete process
                    const confirmation = confirm("Are you sure you want to delete this skill?");
                    if (confirmation) {
                        // Send AJAX request to delete.php
                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', '../functions/delete_skills.php', true);
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                alert(xhr.responseText);
                                container.remove();
                            }
                        };
                        xhr.send('id=' + id);
                    }
                }
            }

            deleteIcons.forEach(function(icon){
                icon.addEventListener('click', function(){
                    deleteSkill(icon);
                });
            });
        });

        //Edit Affiliations
        document.addEventListener('DOMContentLoaded', function(){
            const editAff = document.querySelectorAll('.edit-aff');

            function updateAff(icon) {
                const containerAff = icon.closest('.form-aff');

                if (containerAff) {
                    // Find input fields within the container
                    const orgInput = containerAff.querySelector('input[name="aff_org[]"]');
                    const posInput = containerAff.querySelector('input[name="aff_pos[]"]');
                    const fromInput = containerAff.querySelector('input[name="aff_from[]"]');
                    const toInput = containerAff.querySelector('input[name="aff_to[]"]');

                    // Check if both input fields are found
                    if (orgInput && posInput && fromInput && toInput) {
                        const org = orgInput.value;
                        const pos = posInput.value;
                        const from = fromInput.value;
                        const to = toInput.value;

                        // Get the ID from the clicked icon's data-id attribute
                        const id = icon.getAttribute('data-id');

                        // Proceed with the update process
                        const formData = new FormData();
                        formData.append('id', id);
                        formData.append('organization', org);
                        formData.append('position', pos);
                        formData.append('date_from', from);
                        formData.append('date_to', to);

                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', '../functions/update_aff.php', true);
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                alert(xhr.responseText);
                            }
                        };
                        xhr.send(formData);
                    } else {
                        console.error('Input fields not found');
                    }
                } else {
                    console.error('Parent container not found');
                }
            }

            editAff.forEach(function(icon){
                icon.addEventListener('click', function(){
                    updateAff(icon);
                });
            });
        });

        //Add Affiliations
        document.addEventListener('DOMContentLoaded', function(){
            const addButton = document.querySelector('.btn-aff');

            function saveAff(){
                // Select all input fields with the names "skill_categ[]" and "skill_desc[]"
                const orgInput = document.querySelectorAll('input[name="aff_org[]"]');
                const posInput = document.querySelectorAll('input[name="aff_pos[]"]');
                const fromInput = document.querySelectorAll('input[name="aff_from[]"]');
                const toInput = document.querySelectorAll('input[name="aff_to[]"]');

                // Initialize arrays to store the values for newly added rows
                const newOrg = [];
                const newPos = [];
                const newFrom = [];
                const newTo = [];

                // Loop through each input field to extract values
                orgInput.forEach(function(input, index){
                    // Check if the row is newly added
                    const isNewRow = input.classList.contains('new-aff');
                    if (isNewRow) {
                        newOrg.push(input.value);
                        newPos.push(posInput[index].value);
                        newFrom.push(fromInput[index].value);
                        newTo.push(toInput[index].value);
                    }
                });

                // Send data for each pair of category and description for newly added rows
                for (let i = 0; i < newOrg.length; i++) {
                    const orgInput = newOrg[i];
                    const posInput = newPos[i];
                    const fromInput = newFrom[i];
                    const toInput = newTo[i];

                    const formData = new FormData();
                    formData.append('organization', orgInput);
                    formData.append('position', posInput);
                    formData.append('date_from', fromInput);
                    formData.append('date_to', toInput);

                    const xhr = new XMLHttpRequest();
                    xhr.open('POST', '../functions/add_aff.php', true);
                    xhr.send(formData);
                }
                alert('Data saved successfully!');
            }
            addButton.addEventListener('click', saveAff);
        });

        //Delete Affiliations
        document.addEventListener('DOMContentLoaded', function(){
            const deleteIcons = document.querySelectorAll('.delete-aff');

            function deleteAff(icon) {
                const container = icon.closest('.form-labels');

                if (container) {
                    const id = icon.getAttribute('data-id');

                    const confirmation = confirm("Are you sure you want to delete this affiliation?");
                    if (confirmation) {
                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', '../functions/delete_aff.php', true);
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                alert(xhr.responseText);
                                container.remove();
                            }
                        };
                        xhr.send('id=' + id);
                    }
                }
            }

            deleteIcons.forEach(function(icon){
                icon.addEventListener('click', function(){
                    deleteAff(icon);
                });
            });
        });

        //Edit Education
        document.addEventListener('DOMContentLoaded', function(){
            const editIcons = document.querySelectorAll('.fa-educ');

            function updateSkill(icon) {
                const container = icon.closest('.form-labels');

                if (container) {
                    // Find input fields within the container
                    const categoryInput = container.querySelector('input[name="skill_categ[]"]');
                    const descriptionInput = container.querySelector('input[name="skill_desc[]"]');

                    // Check if both input fields are found
                    if (categoryInput && descriptionInput) {
                        const category = categoryInput.value;
                        const description = descriptionInput.value;

                        // Get the ID from the clicked icon's data-id attribute
                        const id = icon.getAttribute('data-id');

                        // Proceed with the update process
                        const formData = new FormData();
                        formData.append('id', id);
                        formData.append('category', category);
                        formData.append('description', description);

                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', '../functions/update_skills.php', true);
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                alert(xhr.responseText);
                            }
                        };
                        xhr.send(formData);
                    } else {
                        console.error('Input fields not found');
                    }
                } else {
                    console.error('Parent container not found');
                }
            }

            editIcons.forEach(function(icon){
                icon.addEventListener('click', function(){
                    updateSkill(icon);
                });
            });
        });

        //Edit Service Header
        document.addEventListener('DOMContentLoaded', function(){
            const saveButton = document.querySelector('.btn-ser');

            function saveData(){
                const desc_ser = document.querySelector('textarea[aria-label="description-ser"]').value;
                const title_ser = document.querySelector('input[aria-label="title-ser"]').value;

                const formData = new FormData();
                formData.append('title', title_ser);
                formData.append('description', desc_ser);

                const xhr = new XMLHttpRequest();
                xhr.open('POST', '../functions/update_service_header.php', true);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        alert(xhr.responseText);
                    }
                };
                xhr.send(formData);
            }
            saveButton.addEventListener('click', saveData);
        });

        //Edit Services
        document.addEventListener('DOMContentLoaded', function(){
            const editServ = document.querySelectorAll('.edit-serv');

            function updateAff(icon) {
                const containerServ = icon.closest('.form-serv');

                if (containerServ) {
                    // Find input fields within the container
                    const categInput = containerServ.querySelector('input[name="categServ[]"]');
                    const descInput = containerServ.querySelector('input[name="descServ[]"]');

                    // Check if both input fields are found
                    if (categInput && descInput ) {
                        const categ = categInput.value;
                        const desc = descInput.value;

                        // Get the ID from the clicked icon's data-id attribute
                        const id = icon.getAttribute('data-id');

                        // Proceed with the update process
                        const formData = new FormData();
                        formData.append('id', id);
                        formData.append('category', categ);
                        formData.append('description', desc);

                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', '../functions/update_service.php', true);
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                alert(xhr.responseText);
                            }
                        };
                        xhr.send(formData);
                    } else {
                        console.error('Input fields not found');
                    }
                } else {
                    console.error('Parent container not found');
                }
            }

            editServ.forEach(function(icon){
                icon.addEventListener('click', function(){
                    updateAff(icon);
                });
            });
        });

        //Add Services
        document.addEventListener('DOMContentLoaded', function(){
            const addButton = document.querySelector('.save-serv');

            function saveServ(){
                // Select all input fields with the names "skill_categ[]" and "skill_desc[]"
                const categInput = document.querySelectorAll('input[name="categServ[]"]');
                const descInput = document.querySelectorAll('input[name="descServ[]"]');

                // Initialize arrays to store the values for newly added rows
                const newCateg = [];
                const newDesc = [];

                // Loop through each input field to extract values
                categInput.forEach(function(input, index){
                    // Check if the row is newly added
                    const isNewRow = input.classList.contains('new-serv');
                    if (isNewRow) {
                        newCateg.push(input.value);
                        newDesc.push(descInput[index].value);
                    }
                });

                // Send data for each pair of category and description for newly added rows
                for (let i = 0; i < newCateg.length; i++) {
                    const categInput = newCateg[i];
                    const descInput = newDesc[i];

                    const formData = new FormData();
                    formData.append('category', categInput);
                    formData.append('description', descInput);

                    const xhr = new XMLHttpRequest();
                    xhr.open('POST', '../functions/add_service.php', true);
                    xhr.send(formData);
                }
                alert('Data saved successfully!');
            }
            addButton.addEventListener('click', saveServ);
        });

        //Delete Services
        document.addEventListener('DOMContentLoaded', function(){
            const deleteServs = document.querySelectorAll('.delete-serv');

            function deleteServ(icon) {
                // Find the parent container of the clicked icon
                const containerAff = icon.closest('.form-serv');

                if (containerAff) {
                    // Get the ID from the clicked icon's data-id attribute
                    const id = icon.getAttribute('data-id');

                    // Proceed with the delete process
                    const confirmation = confirm("Are you sure you want to delete this row?");
                    if (confirmation) {
                        // Send AJAX request to delete.php
                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', '../functions/delete_service.php', true);
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                alert(xhr.responseText);
                                containerAff.remove();
                            }
                        };
                        xhr.send('id=' + id);
                    }
                }
            }

            deleteServs.forEach(function(icon){
                icon.addEventListener('click', function(){
                    deleteServ(icon);
                });
            });
        });

        //Edit Project Header
        document.addEventListener('DOMContentLoaded', function(){
            const saveButton = document.querySelector('.edit-header-proj');

            function saveData(){
                const desc_proj = document.querySelector('textarea[aria-label="projDesc"]').value;
                const title_proj = document.querySelector('input[aria-label="projTitle"]').value;

                const formData = new FormData();
                formData.append('title', desc_proj);
                formData.append('description', title_proj);

                const xhr = new XMLHttpRequest();
                xhr.open('POST', '../functions/update_project_header.php', true);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        alert(xhr.responseText);
                    }
                };
                xhr.send(formData);
            }
            saveButton.addEventListener('click', saveData);
        });

        //Edit Projects
        document.addEventListener('DOMContentLoaded', function(){
            const editProject = document.querySelectorAll('.btn-proj-edit');

            function updateProj(icon) {
                const containerProj = icon.closest('.form-projects');

                if (containerProj) {
                    // Find input fields within the container
                    const categInput = containerProj.querySelector('input[name="projectCategory[]"]');
                    const linkInput = containerProj.querySelector('input[name="projectLink[]"]');

                    // Check if both input fields are found
                    if (categInput && linkInput ) {
                        const categ = categInput.value;
                        const link = linkInput.value;

                        // Get the ID from the clicked icon's data-id attribute
                        const id = icon.getAttribute('data-id');

                        // Proceed with the update process
                        const formData = new FormData();
                        formData.append('id', id);
                        formData.append('category', categ);
                        formData.append('link', link);

                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', '../functions/update_projects.php', true);
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                alert(xhr.responseText);
                            }
                        };
                        xhr.send(formData);
                    } else {
                        console.error('Input fields not found');
                    }
                } else {
                    console.error('Parent container not found');
                }
            }

            editProject.forEach(function(icon){
                icon.addEventListener('click', function(){
                    updateProj(icon);
                });
            });
        });

        //Add Projects
        document.addEventListener('DOMContentLoaded', function(){
            const addButton = document.querySelector('.btn-proj-add');

            function saveProj(){
                // Select all input fields with the names "skill_categ[]" and "skill_desc[]"
                const categInput = document.querySelectorAll('input[name="projectCategory[]"]');
                const linkInput = document.querySelectorAll('input[name="projectLink[]"]');

                // Initialize arrays to store the values for newly added rows
                const newCateg = [];
                const newLink = [];

                // Loop through each input field to extract values
                categInput.forEach(function(input, index){
                    // Check if the row is newly added
                    const isNewRow = input.classList.contains('new-proj');
                    if (isNewRow) {
                        newCateg.push(input.value);
                        newLink.push(linkInput[index].value);
                    }
                });

                // Send data for each pair of category and description for newly added rows
                for (let i = 0; i < newCateg.length; i++) {
                    const categInput = newCateg[i];
                    const linkInput = newLink[i];

                    const formData = new FormData();
                    formData.append('category', categInput);
                    formData.append('link', linkInput);

                    const xhr = new XMLHttpRequest();
                    xhr.open('POST', '../functions/add_projects.php', true);
                    xhr.send(formData);
                }
                alert('Data saved successfully!');
            }
            addButton.addEventListener('click', saveProj);
        });

        //Delete Services
        document.addEventListener('DOMContentLoaded', function(){
            const deleteProjs = document.querySelectorAll('.btn-proj-delete');

            function deleteProj(icon) {
                // Find the parent container of the clicked icon
                const containerProj = icon.closest('.form-projects');

                if (containerProj) {
                    // Get the ID from the clicked icon's data-id attribute
                    const id = icon.getAttribute('data-id');

                    // Proceed with the delete process
                    const confirmation = confirm("Are you sure you want to delete this row?");
                    if (confirmation) {
                        // Send AJAX request to delete.php
                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', '../functions/delete_projects.php', true);
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                alert(xhr.responseText);
                                containerProj.remove();
                            }
                        };
                        xhr.send('id=' + id);
                    }
                }
            }

            deleteProjs.forEach(function(icon){
                icon.addEventListener('click', function(){
                    deleteProj(icon);
                });
            });
        });

        //about me - add photo
        document.querySelectorAll('.file-input').forEach(function(input) {
            input.addEventListener('change', function() {
                var curElement = this.parentNode.parentNode.querySelector('.image');
                var file = this.files[0];
                var reader = new FileReader();

                reader.onload = function (e) {
                    curElement.src = e.target.result;
                };

                reader.readAsDataURL(file);
            });
        });

        //about me - add
        function addSkillField() {
            const skillCount = document.querySelectorAll('input[name^="skills"]').length / 2 + 1;
            const newSkillField = `
                <br>
                <div class="row form-labels">
                <div style="display: flex">
                        <div class="col">
                            <input type="text" class="form-control new-row" style="width: 90%;" placeholder="Enter skill category" aria-label="Skill category" name="skill_categ[]">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control new-row" style="width: 90%;" placeholder="Enter skill description" aria-label="Skill description" name="skill_desc[]">
                        </div>
                        <div style="display: flex; justify-content: space-between">
                            <i class="fa-solid fa-trash" style="color: #ba5036; font-size: 20px; cursor: pointer;"></i>
                            <i class="fa-solid fa-pencil" style="margin-left: 1.5rem; color: #ba5036; font-size: 20px; cursor: pointer;"></i>
                        </div>
                    </div>
                </div>
            `;
            document.getElementById('additionalSkills').insertAdjacentHTML('beforeend', newSkillField);
        }
 
        function addAffiliationField() {
            const affiliationCount = document.querySelectorAll('input[name^="affiliations"]').length / 2 + 1;
            const newAffiliationField = `
                <br>
                <div class="row form-labels">
                    <div style="display: flex">
                        <div class="col">
                            <p>Organization/Institution</p>
                            <input type="text" class="form-control new-aff" style="width: 90%;" placeholder="Enter organization/institution" ${affiliationCount} name="aff_org[]">
                        </div>
                        <div class="col">
                            <p>Position</p>
                            <input type="text" class="form-control new-aff" style="width: 90%;" placeholder="Enter position" ${affiliationCount} name="aff_pos[]">
                        </div>
                        <div class="col-2">
                            <p>From</p>
                            <input type="date" class="form-control new-aff" style="width: 90%;" aria-label="Select year" ${affiliationCount} name="aff_from[]">
                        </div>
                        <div class="col-2">
                            <p>To</p>
                            <input type="date" class="form-control new-aff" style="width: 90%;" aria-label="Select year" ${affiliationCount} name="aff_to[]">
                        </div>
                        <div style="display: flex; justify-content: space-between">
                            <i class="fa-solid fa-trash delete-aff" style="margin-top: 3rem; color: #ba5036; font-size: 20px; cursor: pointer;" data-id="' . $id . '"></i>
                            <i class="fa-solid fa-pencil edit-aff" style="margin-top: 3rem; margin-left: 1.5rem; margin-top: 3rem; color: #ba5036; font-size: 20px; cursor: pointer;" data-id="' . $id . '"></i>
                        </div>
                    </div>
                </div>
            `;
            document.getElementById('additionalAffiliations').insertAdjacentHTML('beforeend', newAffiliationField);
        }

        function addEducationField() {
            const educationCount = document.querySelectorAll('input[name^="education"]').length / 2 + 1;
            const uniqueId = 'education_' + educationCount;
            const newEducationField = `
            <br>
                <div class="row form-labels">
                <div style="display: flex; justify-content: space-evenly; margin-top: 1rem">
                    <div class="col" style="margin-top: 2.5rem;">
                        <select id="${uniqueId}" class="form-select" style="width: 90%;" onchange="toggleFields('${uniqueId}')" name="education[]">
                            <option selected>Select education level</option>
                            <option value="primary">Primary</option>
                            <option value="secondary">Secondary</option>
                            <option value="tertiary">Tertiary</option>
                        </select>
                    </div>
                    <div class="col" id="schoolField_${uniqueId}">
                        <p>School</p>
                        <input type="text" class="form-control" style="width: 90%;" placeholder="Enter school" name="education[]">
                    </div>
                    <div class="col" id="strandField_${uniqueId}">
                        <p>Strand</p>
                        <select class="form-select" style="width: 90%;" onchange="toggleFields('${uniqueId}')" name="education[]">
                            <option selected>Select strand</option>
                            <option value="STEM">STEM (Science, Technology, Engineering, and Mathematics)</option>
                            <option value="HUMMS">HUMSS (Humanities and Social Science)</option>
                            <option value="ABM">ABM (Accountancy, Business and Management Strand)</option>
                            <option value="GAS">GAS (General Academic Strand)</option>
                        </select>
                    </div>
                    <div class="col" id="courseField_${uniqueId}">
                        <p>Course</p>
                        <input type="text" class="form-control" style="width: 90%;" placeholder="Enter course" name="education[]">
                    </div>
                    <div class="col-2" id="fromField_${uniqueId}">
                        <p>From</p>
                        <input type="date" class="form-control" style="width: 90%;" aria-label="Select year" name="education[]">
                    </div>
                    <div class="col-2" id="toField_${uniqueId}">
                        <p>To</p>
                        <input type="date" class="form-control" style="width: 90%;" aria-label="Select year" name="education[]">
                    </div>
                    <div style="display: flex; justify-content: space-between">
                        <i class="fa-solid fa-trash delete-educ" style="margin-top: 3rem; color: #ba5036; font-size: 20px; cursor: pointer;" data-id="' . $id . '"></i>
                        <i class="fa-solid fa-pencil edit-educ" style="margin-top: 3rem; margin-left: 1.5rem; margin-top: 3rem; color: #ba5036; font-size: 20px; cursor: pointer;" data-id="' . $id . '"></i>
                    </div>
                </div>
                </div>
            `;
            document.getElementById('additionalEducation').insertAdjacentHTML('beforeend', newEducationField);
        }

        function toggleFields(uniqueId) {
            var educationLevel;
            var schoolField;
            var strandField;
            var courseField;
            var fromField;
            var toField;

            if (uniqueId) {
                educationLevel = document.getElementById('educationLevel_' + uniqueId).value;
                schoolField = document.getElementById('schoolField_' + uniqueId);
                strandField = document.getElementById('strandField_' + uniqueId);
                courseField = document.getElementById('courseField_' + uniqueId);
                fromField = document.getElementById('fromField_' + uniqueId);
                toField = document.getElementById('toField_' + uniqueId);
            } else {
                educationLevel = document.getElementById('educationLevel').value;
                schoolField = document.getElementById('schoolField');
                strandField = document.getElementById('strandField');
                courseField = document.getElementById('courseField');
                fromField = document.getElementById('fromField');
                toField = document.getElementById('toField');
            }

            if (educationLevel === 'primary') {
                schoolField.disabled = false;
                strandField.disabled = false;
                courseField.disabled = false;
                fromField.disabled = false;
                toField.disabled = false;
            } else if (educationLevel === 'secondary') {
                schoolField.disabled = false;
                strandField.disabled = false;
                courseField.disabled = false;
                fromField.disabled = false;
                toField.disabled = false;
            } else if (educationLevel === 'tertiary') {
                schoolField.disabled = false;
                strandField.disabled = true;
                courseField.disabled = false;
                fromField.disabled = false;
                toField.disabled = false;
            }
        }

        //services - add
        function addServiceField() {
            const serviceCount = document.querySelectorAll('input[name^="service"]').length / 2 + 1;
            const newServiceField = `
                <br>
                <div class="row form-labels form-serv" style="margin-top: 2rem">
                    <div class="col-2" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                        <div class="imageWrapper">
                            <img class="image" src="../assets/images/default_profile.png">
                        </div>
                        <label for="file-upload" class="file-upload">Choose File
                            <input type="file" id="file-upload" class="file-input">
                        </label>
                    </div>
                    <div class="col">
                        <p>Service Category</p>
                        <input type="text" class="form-control new-serv" placeholder="Enter service category" aria-label="Skill category" name="categServ[]">
                        <br>
                        <p>Service Description</p>
                        <input type="text" class="form-control new-serv" placeholder="Enter service description" aria-label="Skill description" name="descServ[]">
                        <div style="margin-top: 1.5rem">
                            <button type="button" class="btn-save btn-serv" style="margin-right: .5rem" data-id="' . $id . '">Edit</button>
                            <button type="button" class="btn-save delete-serv" style="margin-right: .5rem" data-id="' . $id . '">Delete</button>
                        </div>
                    </div>
                </div>
            `;
            document.getElementById('additionalService').insertAdjacentHTML('beforeend', newServiceField);
        }
        
        //projects - add project category
        function addProjectField() {
            const projectCount = document.querySelectorAll('.project-section').length + 2;
            const newProjectField = `
                <div class="description project-section">
                    <div class="row form-labels form-project">
                        <div class="col">
                            <h4 style="font-weight: 600; color: #ba5036">Project ${projectCount}</h4>
                        </div>
                        <div class="col d-flex justify-content-end align-items-center">
                            <i class="fa-solid fa-circle-plus add categ" style="margin-right: .5rem; color: #ba5036; font-size: 20px; cursor: pointer;" onclick="addProjectField()"></i>
                        </div>
                    </div>  
                    <form id="projectForm">
                        <div class="form-floating form-labels form-projects">
                            <div class="row">
                                <div class="col">
                                    <p>Project Category</p>
                                    <input type="text" class="form-control new-proj" placeholder="Enter project category" aria-label="title" name="projectCategory[]">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <p>Project Link</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control new-proj" placeholder="Enter project link" aria-label="title" name="projectLink[]">
                                </div>
                            </div>
                            <div id="additionalProjects${projectCount}"></div>
                            <div class="row justify-content-end mt-3 form-labels">
                                <div class="col-auto d-flex align-items-center">
                                    <button type="button" class="btn-save btn-proj-edit" style="margin-right: .5rem" data-id="' . $id . '">Save Edit</button>
                                    <button type="button" class="btn-save btn-proj-add">Save</button>
                                    <div>
                                        <i class="fa-solid fa-trash btn-proj-delete" style="margin-left: 1rem; margin-top: .5rem; color: #ba5036; font-size: 20px; cursor: pointer;" data-id="' . $id . '"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            `;

            const newProjectContainer = document.createElement('div');
            newProjectContainer.classList.add('project-section');
            newProjectContainer.innerHTML = newProjectField;

            const projectsContainer = document.getElementById('projects');
            projectsContainer.insertAdjacentElement('beforeend', newProjectContainer);
        }

        //projects - add project link
        function addProjectLink(projectNumber) {
            const newProjectField = `
                <div class="row mt-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Enter project link" aria-label="title" name="projectLink[]">
                    </div>
                </div>
            `;
            const additionalProjects = document.getElementById(`additionalProjects${projectNumber}`);
            additionalProjects.insertAdjacentHTML('beforeend', newProjectField);
        }
    </script>

    </body>
    </html>
