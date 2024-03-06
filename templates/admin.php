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
        
        <title>MyAdmin</title>

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
                background-color: #ba5036;
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
                margin-bottom: 10px;
            }

            .sidenav a:hover {
                background-color: #cc8c6a; 
            }

            .sidenav .active {
                background-color: #cc8c6a; 
                margin-bottom: 10px;
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

            .description {
                align-items: center;
                padding: 20px;
                border: 1px solid rgba(0, 0, 0, 0.4);
                border-radius: 10px;
                width: 100%;
                margin: 0 auto;
                margin-top: 20px;
                border-color: #ba5036;

            }

            .containers {
                height: 270px;
                position: relative;
                max-width: 320px;
                margin: auto;
            }

            .containers .imageWrapper {
                border: 1px solid rgba(0, 0, 0, 0.4);
                width: 70%;
                padding-bottom: 70%;
                border-radius: 50%;
                overflow: hidden;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .containers .imageWrapper img {
                height: 105%;
                width: initial;
                max-height: 100%;
                max-width: initial;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .file-upload-container { 
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                font-family: 'Montserrat', sans-serif;
            }

            .file-upload {
                background-color: #ffb48c;
                margin: 10px;
                text-align:center;
                font-size:14px;
                border: 1px solid rgba(0, 0, 0, 0.4);
                padding: 10px;
                border-radius: 10px;
                display:flex;
                align-items: center;
                justify-content: center;
                font-family: 'Montserrat', sans-serif;
                transition: all 0.2s ease;

                &:hover{
                    background: transparent;
                }
            }

            .file-upload input.file-input {
                position: absolute;
                top: 0;
                right: 0;
                margin: 0;
                padding: 0;
                font-size: 20px;
                cursor: pointer;
                opacity: 0;
                filter: alpha(opacity=0);
            }

            .btn-save {
                background-color: #ffb48c;
                border-color: #ba5036;
                border-radius: 10px;
                padding-left: 20px;
                padding-right: 20px;
                padding-top: 8px;
                padding-bottom: 8px;
                color: black;
            }

            .btn-save:hover {
                background-color: transparent;
                border-color: #ba5036;
                color: #2f2f2f;

            }

            .logo-container {
                display: flex; 
                align-items: center; 
                margin-bottom: 20px; 
                margin-top: 20px;
            }

            .logo-name {
                font-size: 16px; 
                font-family: 'Montserrat', 
                sans-serif; font-weight: 500;
            }

            .title {
                font-family: 'Montserrat', sans-serif; 
                font-weight: 600; 
                color: #ba5036;
            }
            
            .form-labels {
                font-family: 'Montserrat', sans-serif;
            }
        </style>
    </head>
    <body>
    <div class="sidenav">
    <div class="logo-container">
        <img src="../assets/images/NE-w.png" style="width: 35px; height: auto; margin-right: 4px;">
        <span class="logo-name">ADMIN PANEL</span>
    </div>
    <a href="#home" class="active" onclick="changeSection('home')"><i class="fa-solid fa-user" style="font-size: 15px; width: 20px;"></i> <span class="link-text">Home</span></a>
    <a href="#about" onclick="changeSection('about')"><i class="fa-solid fa-user" style="font-size: 15px; width: 20px;"></i> <span class="link-text">About</span></a>
    <a href="#services" onclick="changeSection('services')"><i class="fa-solid fa-wrench" style="font-size: 15px; width: 20px;"></i> <span class="link-text">Services</span></a>
    <a href="#projects" onclick="changeSection('projects')"><i class="fa-solid fa-box" style="font-size: 15px; width: 20px;"></i> <span class="link-text">Projects</span></a>
    <a href="#contact" onclick="changeSection('contact')"><i class="fa-solid fa-address-card" style="font-size: 15px; width: 20px;"></i> <span class="link-text">Contact</span></a>
</div>

<div class="container">
    <section id="home">
        <h1 class="title">Home</h1>
        <div class="row">
            <div class="description">
                <div class="row form-labels">
                    <div class="col">
                        <p>First Name</p>
                        <input type="text" class="form-control" placeholder="Enter first name" aria-label="First name">
                    </div>
                    <div class="col">
                        <p>Last Name</p>
                        <input type="text" class="form-control" placeholder="Enter last name" aria-label="Last name">
                    </div>
                </div>
                <br>
                <div class="form-floating form-labels">
                    <div class="col">
                        <p>Description</p>
                        <textarea name="text" class="form-control" rows="3" style="width: 100%;" placeholder="Enter description" aria-label="Description"></textarea>
                    </div>
                </div>
                <br>
                <br>
                <p class="form-labels">Upload CV</p>
                <div class="input-group mb-3 form-labels">
                    <input type="file" class="form-control" id="inputGroupFile02">
                </div>
                <br>
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <button type="button" class="btn-save">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <h1 class="title">About Me</h1>
        <div class="description">
            <div class="form-floating form-labels">
                <div class="col">
                    <p>Description</p>
                    <textarea name="text" class="form-control" rows="3" style="width: 100%;" placeholder="Enter description" aria-label="Description"></textarea>
                </div>
            </div>
        </div>
        
        <div class="description">
            <h4>Skills</h4>
            <form id="skillsForm">
                <div class="row form-labels">
                    <div class="col">
                        <p>Skill Category</p>
                        <input type="text" class="form-control" placeholder="Enter skill category" aria-label="Skill category" name="skills[]">
                    </div>
                    <div class="col">
                        <p>Skill Description</p>
                        <input type="text" class="form-control" placeholder="Enter skill description" aria-label="Skill description" name="skills[]">
                    </div>
                </div>
                <div id="additionalSkills"></div>
                <div class="row form-labels">
                    <div class="col text-end">
                        <button type="button" class="btn btn-save mt-3" onclick="addSkillField()">Add another</button>
                        <!-- <button type="submit" class="btn btn-success mt-3">Save</button> -->
                    </div>
                </div>
            </form>
        </div>

        <div class="description">
            <h4>Affiliations</h4>
            <form id="affiliationsForm">
                <div class="row form-labels">
                    <div class="col">
                        <p>Organization/Institution</p>
                        <input type="text" class="form-control" placeholder="Enter organization/institution" aria-label="Skill category" name="affiliations[]">
                    </div>
                    <div class="col">
                        <p>Position</p>
                        <input type="text" class="form-control" placeholder="Enter position" aria-label="Skill description" name="affiliations[]">
                    </div>
                    <div class="col-2">
                        <p>From</p>
                        <input type="date" class="form-control" aria-label="Select year" name="affiliations[]">
                    </div>
                    <div class="col-2">
                        <p>To</p>
                        <input type="date" class="form-control" aria-label="Select year" name="affiliations[]">
                    </div>
                </div>
                <div id="additionalAffiliations"></div>
                <div class="row form-labels">
                    <div class="col text-end">
                        <button type="button" class="btn btn-save mt-3" onclick="addAffiliationField()">Add another</button>
                        <!-- <button type="submit" class="btn btn-success mt-3">Save</button> -->
                    </div>
                </div>
            </form>
        </div>

        <div class="description">
            <h4>Education</h4>
            <form id="educationForm">
            <div class="row form-labels">
                <div class="col">
                    <p>Education Level</p>
                    <select id="educationLevel" class="form-select" onchange="toggleFields()" name="education[]">
                        <option selected>Select education level</option>
                        <option value="primary">Primary</option>
                        <option value="secondary">Secondary</option>
                        <option value="tertiary">Tertiary</option>
                    </select>
                </div>
                <div class="col" id="schoolField" style="display: none;">
                    <p>School</p>
                    <input type="text" class="form-control" placeholder="Enter school" name="education[]">
                </div>
                <div class="col" id="strandField" style="display: none;">
                    <p>Strand</p>
                    <select id="strand" class="form-select" onchange="toggleFields()" name="education[]">
                        <option selected>Select strand</option>
                        <option value="1">STEM (Science, Technology, Engineering, and Mathematics)</option>
                        <option value="2">HUMSS (Humanities and Social Science)</option>
                        <option value="3">ABM (Accountancy, Business and Management Strand)</option>
                        <option value="4">GAS (General Academic Strand)</option>
                    </select>
                </div>
                <div class="col" id="courseField" style="display: none;">
                    <p>Course</p>
                    <input type="text" class="form-control" placeholder="Enter course" name="education[]">
                </div>
                <div class="col-2" id="fromField" style="display: none;">
                    <p>From</p>
                    <input type="date" class="form-control" aria-label="Select year" name="education[]">
                </div>
                <div class="col-2" id="toField" style="display: none;">
                    <p>To</p>
                    <input type="date" class="form-control" aria-label="Select year" name="education[]">
                </div>
            </div>
                <div id="additionalEducation"></div>
                <div class="row form-labels">
                    <div class="col text-end">
                        <button type="button" class="btn btn-save mt-3" onclick="addEducationField()">Add another</button>
                        <!-- <button type="submit" class="btn btn-success mt-3">Save</button> -->
                    </div>
                </div>
            </form>
        </div>
        <br>
    </section>
</div>

    <section id="services">
        <h1 class="title">Services</h1>

        <div class="description">
            <div class="form-floating form-labels">
                <div class="col">
                    <p>Title</p>
                    <input type="text" class="form-control" placeholder="Enter title" aria-label="title">
                </div>
                <br>
                <div class="col">
                    <p>Description</p>
                    <textarea name="text" class="form-control" rows="3" style="width: 100%;" placeholder="Enter description" aria-label="Description"></textarea>
                </div>
            </div>
        </div>

        <div class="description">
            <h4>Services</h4>
            <div class="form-floating form-labels">
                <div class="col">
                    <p>Add Service</p>
                    <input type="text" class="form-control" placeholder="Enter title" aria-label="title">
                </div>
                <br>
                <div class="col">
                    <p>Description</p>
                    <textarea name="text" class="form-control" rows="3" style="width: 100%;" placeholder="Enter description" aria-label="Description"></textarea>
                </div>
            </div>
        </div>
    </section>

    <section id="projects">
        <h1 class="title">Projects</h1>
    </section>

    <section id="contact">
        <h1 class="title">Contact</h1>
    </section>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    $(document).ready(function() {
        $('section').not('#home').hide();
    });

    function changeSection(sectionId) {
        $('.sidenav a').removeClass('active');
        $('.sidenav a[href="#' + sectionId + '"]').addClass('active');
        $('section').hide();
        $('#' + sectionId).show();
    }

    function addSkillField() {
        const skillCount = document.querySelectorAll('input[name^="skills"]').length / 2 + 1;
        const newSkillField = `
            <br>
            <div class="row form-labels">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Enter skill category" aria-label="Skill category ${skillCount}" name="skills[]">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Enter skill description" aria-label="Skill description ${skillCount}" name="skills[]">
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
                <div class="col">
                    <p>Organization/Institution</p>
                    <input type="text" class="form-control" placeholder="Enter organization/institution" ${affiliationCount} name="affiliations[]">
                </div>
                <div class="col">
                    <p>Position</p>
                    <input type="text" class="form-control" placeholder="Enter position" ${affiliationCount} name="affiliations[]">
                </div>
                <div class="col-2">
                    <p>From</p>
                    <input type="date" class="form-control" aria-label="Select year" ${affiliationCount}>
                </div>
                <div class="col-2">
                    <p>To</p>
                    <input type="date" class="form-control" aria-label="Select year" ${affiliationCount}>
                </div>
            </div>
        `;
        document.getElementById('additionalAffiliations').insertAdjacentHTML('beforeend', newAffiliationField);
    }

    function toggleFields() {
        var educationLevel = document.getElementById('educationLevel').value;
        var schoolField = document.getElementById('schoolField');
        var strandField = document.getElementById('strandField');
        var courseField = document.getElementById('courseField');
        var fromField = document.getElementById('fromField');
        var toField = document.getElementById('toField');

        if (educationLevel === 'primary') {
            schoolField.style.display = 'block';
            strandField.style.display = 'none';
            courseField.style.display = 'none';
            fromField.style.display = 'block';
            toField.style.display = 'block';
        } else if (educationLevel === 'secondary') {
            schoolField.style.display = 'block';
            strandField.style.display = 'block';
            courseField.style.display = 'none';
            fromField.style.display = 'block';
            toField.style.display = 'block';
        } else if (educationLevel === 'tertiary') {
            schoolField.style.display = 'block';
            strandField.style.display = 'none';
            courseField.style.display = 'block';
            fromField.style.display = 'block';
            toField.style.display = 'block';
        }
    }

    function addEducationField() {
        const educationCount = document.querySelectorAll('input[name^="education"]').length / 2 + 1;
        const newEducationField = `
            <br>
            <div class="row form-labels">
                <div class="col">
                    <select id="educationLevel" class="form-select" onchange="toggleFields()" name="education[]">
                        <option selected>Select education level</option>
                        <option value="primary">Primary</option>
                        <option value="secondary">Secondary</option>
                        <option value="tertiary">Tertiary</option>
                    </select>
                </div>
                <div class="col" id="schoolField" style="display: none;">
                    <p>School</p>
                    <input type="text" class="form-control" placeholder="Enter school" name="education[]">
                </div>
                <div class="col" id="strandField" style="display: none;">
                    <p>Strand</p>
                    <select id="strand" class="form-select" onchange="toggleFields()" name="education[]">
                        <option selected>Select strand</option>
                        <option value="1">STEM (Science, Technology, Engineering, and Mathematics)</option>
                        <option value="2">HUMSS (Humanities and Social Science)</option>
                        <option value="3">ABM (Accountancy, Business and Management Strand)</option>
                        <option value="4">GAS (General Academic Strand)</option>
                    </select>
                </div>
                <div class="col" id="courseField" style="display: none;">
                    <p>Course</p>
                    <input type="text" class="form-control" placeholder="Enter course" name="education[]">
                </div>
                <div class="col-2" id="fromField" style="display: none;">
                    <p>From</p>
                    <input type="date" class="form-control" aria-label="Select year" name="education[]">
                </div>
                <div class="col-2" id="toField" style="display: none;">
                    <p>To</p>
                    <input type="date" class="form-control" aria-label="Select year" name="education[]">
                </div>
            </div>
        `;
        document.getElementById('additionalEducation').insertAdjacentHTML('beforeend', newEducationField);
    }
    </script>

    </body>
    </html>
