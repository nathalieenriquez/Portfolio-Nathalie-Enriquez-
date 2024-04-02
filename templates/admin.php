    <?php
        require_once "../functions/update_home.php"; 
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
                        <input type="text" class="form-control" placeholder="Enter first name" aria-label="First name" readonly>
                    </div>
                    <div class="col">
                        <p>Last Name</p>
                        <input type="text" class="form-control" placeholder="Enter last name" aria-label="Last name" readonly>
                    </div>
                </div>
                <br>
                <div class="form-floating form-labels">
                    <div class="col">
                        <p>Description</p>
                        <textarea name="text" class="form-control" rows="3" style="width: 100%;" placeholder="Enter description" aria-label="Description" readonly></textarea>
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
        <h1 class="title">About Me</h1>
        <div class="description">
            <div class="row form-labels">
                <div class="col-2" style="display: flex; flex-direction: column; align-items: center; text-align: center; ">
                    <div class="imageWrapper">
                        <img class="image" src="../assets/images/default_profile.png">
                    </div>
                    <label for="file-upload" class="file-upload">Choose File
                        <input type="file" id="file-upload" class="file-input">
                    </label>
                </div>
                <div class="col">
                    <p>Description</p>
                    <textarea name="text" class="form-control" rows="8" style="width: 100%;" placeholder="Enter description" aria-label="Description"></textarea>
                </div>
            </div>
            <div class="row justify-content-end mt-3">
                <div class="col-auto">
                    <button type="button" class="btn-save" style="margin-right: .5rem">Edit</button>
                    <button type="button" class="btn-save">Save</button>
                </div>
            </div>
        </div>
        
        <div class="description">
            <div class="row form-labels">
                <div class="col">
                    <h4 style="font-weight: 600; color: #ba5036">Skills</h4>
                </div>
                <div class="col d-flex justify-content-end align-items-center">
                    <i class="fa-solid fa-circle-plus add" style="margin-right: .5rem; color: #ba5036; font-size: 20px; cursor: pointer;" onclick="addSkillField()"></i>
                </div>
            </div>
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
                <div class="row justify-content-end mt-3 form-labels">
                    <div class="col-auto d-flex align-items-center">
                        <button type="button" class="btn-save" style="margin-right: .5rem">Edit</button>
                        <button type="button" class="btn-save">Save</button>
                        <div>
                            <i class="fa-solid fa-trash" style="margin-left: 1rem; margin-top: .5rem; color: #ba5036; font-size: 20px; cursor: pointer;"></i>
                        </div>
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
                <div class="row justify-content-end mt-3 form-labels">
                    <div class="col-auto d-flex align-items-center">
                        <button type="button" class="btn-save" style="margin-right: .5rem">Edit</button>
                        <button type="button" class="btn-save">Save</button>
                        <div>
                            <i class="fa-solid fa-trash" style="margin-left: 1rem; margin-top: .5rem; color: #ba5036; font-size: 20px; cursor: pointer;"></i>
                        </div>
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
                <div class="row justify-content-end mt-3 form-labels">
                    <div class="col-auto d-flex align-items-center">
                        <button type="button" class="btn-save" style="margin-right: .5rem">Edit</button>
                        <button type="button" class="btn-save">Save</button>
                        <div>
                            <i class="fa-solid fa-trash" style="margin-left: 1rem; margin-top: .5rem; color: #ba5036; font-size: 20px; cursor: pointer;"></i>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section id="services" style="margin-bottom: 2rem">
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
                <div class="row justify-content-end mt-3 form-labels">
                    <div class="col-auto">
                        <button type="button" class="btn-save" style="margin-right: .5rem">Edit</button>
                        <button type="button" class="btn-save">Save</button>
                    </div>
                </div>
            </div>
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
                <div class="row form-labels">
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
                        <input type="text" class="form-control" placeholder="Enter service category" aria-label="Skill category" name="service[]">
                        <br>
                        <p>Service Description</p>
                        <input type="text" class="form-control" placeholder="Enter service description" aria-label="Skill description" name="service[]">
                    </div>
                </div>
                <div id="additionalService"></div>
                <div class="row justify-content-end mt-3 form-labels">
                    <div class="col-auto d-flex align-items-center">
                        <button type="button" class="btn-save" style="margin-right: .5rem">Edit</button>
                        <button type="button" class="btn-save">Save</button>
                        <div>
                            <i class="fa-solid fa-trash" style="margin-left: 1rem; margin-top: .5rem; color: #ba5036; font-size: 20px; cursor: pointer;"></i>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section id="projects" style="margin-bottom: 2rem">
        <h1 class="title">Projects</h1>
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
                <div class="row justify-content-end mt-3 form-labels">
                    <div class="col-auto">
                        <button type="button" class="btn-save" style="margin-right: .5rem">Edit</button>
                        <button type="button" class="btn-save">Save</button>
                    </div>
                </div>
            </div>
        </div>

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
                <div class="form-floating form-labels">
                    <div class="row">
                        <div class="col">
                            <p>Project Category</p>
                            <input type="text" class="form-control" placeholder="Enter project category" aria-label="title" name="project[]">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <p>Project Link</p>
                            </div>
                            <div>
                                <i class="link fa-solid fa-circle-plus add" style="margin-right: .5rem; color: #ba5036; font-size: 20px; cursor: pointer;" onclick="addProjectLink()"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Enter project link" aria-label="title" name="projectLink[]">
                        </div>
                    </div>
                    <div id="additionalProjects"></div>
                    <div class="row justify-content-end mt-3 form-labels">
                        <div class="col-auto d-flex align-items-center">
                            <button type="button" class="btn-save" style="margin-right: .5rem">Edit</button>
                            <button type="button" class="btn-save">Save</button>
                            <div>
                                <i class="fa-solid fa-trash" style="margin-left: 1rem; margin-top: .5rem; color: #ba5036; font-size: 20px; cursor: pointer;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section id="contact" style="margin-bottom: 2rem">
        <h1 class="title">Contact</h1>
        <form class="description" action="../functions/update_contact.php" method="post">
            <div class="form-floating form-labels">
                <div class="col">
                    <p>Title</p>
                    <input type="text" class="form-control" name="title" placeholder="Enter title" aria-label="title">
                </div>
                <br>
                <div class="col">
                    <p>Description</p>
                    <textarea class="form-control" name="contact_description" rows="3" style="width: 100%;" placeholder="Enter description" aria-label="Description"></textarea>
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

            <form class="form-floating form-labels" action="../functions/update_contact.php" method="post">
                <div class="col">
                    <p>Address</p>
                    <input type="text" class="form-control" name="address" placeholder="Enter address" aria-label="title">
                </div>
                <br>
                <div class="col">
                    <p>Contact Number</p>
                    <input type="text" class="form-control" name="contact_number" placeholder="Enter contact number" aria-label="title">
                </div>
                <br>
                <div class="col">
                    <p>Email Address</p>
                    <input type="email" class="form-control" name="email" placeholder="Enter email address" aria-label="title">
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
            
            <form class="form-floating form-labels" action="../functions/update_contact.php" method="post">
                <div class="col">
                    <p>Facebook</p>
                    <input type="text" class="form-control" name="facebook" placeholder="Enter link" aria-label="title">
                </div>
                <br>
                <div class="col">
                    <p>LinkedIn</p>
                    <input type="text" class="form-control" name="linkedIn" placeholder="Enter link" aria-label="title">
                </div>
                <br>
                <div class="col">
                    <p>Behance</p>
                    <input type="text" class="form-control" name="behance" placeholder="Enter link" aria-label="title">
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

        //home - edit
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
                
                //AJAX - send data to server
                const xhr = new XMLHttpRequest();
                xhr.open('POST', '../functions/update_home.php', true);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        alert(xhr.responseText);
                        makeUneditable();
                    }
                };
                xhr.send(formData);
            }
        
            editButton.addEventListener('click', makeEditable);
            saveButton.addEventListener('click', saveData);
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

        //services - add
        function addServiceField() {
            const serviceCount = document.querySelectorAll('input[name^="service"]').length / 2 + 1;
            const newServiceField = `
                <br>
                <div class="row form-labels">
                    <div class="col-2" style="display: flex; flex-direction: column; align-items: center; text-align: center; ">
                        <div class="imageWrapper">
                            <img class="image" src="../assets/images/default_profile.png">
                        </div>
                        <label for="file-upload" class="file-upload">Choose File
                            <input type="file" id="file-upload" class="file-input">
                        </label>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Enter service category" aria-label="Skill category" name="service[]">
                        <br>
                        <input type="text" class="form-control" placeholder="Enter service description" aria-label="Skill description" name="service[]">
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
                    <div class="row form-labels">
                        <div class="col">
                            <h4 style="font-weight: 600; color: #ba5036">Project ${projectCount}</h4>
                        </div>
                        <div class="col d-flex justify-content-end align-items-center">
                            <i class="fa-solid fa-circle-plus add categ" style="margin-right: .5rem; color: #ba5036; font-size: 20px; cursor: pointer;" onclick="addProjectField()"></i>
                        </div>
                    </div>  
                    <form id="projectForm">
                        <div class="form-floating form-labels">
                            <div class="row">
                                <div class="col">
                                    <p>Project Category</p>
                                    <input type="text" class="form-control" placeholder="Enter project category" aria-label="title" name="project[]">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <p>Project Link</p>
                                    </div>
                                    <div>
                                        <i class="fa-solid fa-circle-plus add link" style="margin-right: .5rem; color: #ba5036; font-size: 20px; cursor: pointer;" onclick="addProjectLink(${projectCount})"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Enter project link" aria-label="title" name="projectLink[]">
                                </div>
                            </div>
                            <div id="additionalProjects${projectCount}"></div>
                            <div class="row justify-content-end mt-3 form-labels">
                                <div class="col-auto d-flex align-items-center">
                                    <button type="button" class="btn-save" style="margin-right: .5rem">Edit</button>
                                    <button type="button" class="btn-save">Save</button>
                                    <div>
                                        <i class="fa-solid fa-trash" style="margin-left: 1rem; margin-top: .5rem; color: #ba5036; font-size: 20px; cursor: pointer;"></i>
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
