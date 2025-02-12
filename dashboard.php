<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="icon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typifo - Smart Online Text Editor</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
      body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(135deg, #eef2f7, #d7e0f9);
    color: #333;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 40px;
    background: linear-gradient(135deg, #4f93f6, #5a61f6);
    color: white;
}

.header h1 {
    font-size: 22px;
    margin: 0;
}

.header .user-actions {
    display: flex;
    align-items: center;
    gap: 15px;
}

.header .user-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #4f93f6;
    font-size: 16px;
    font-weight: bold;
}

.header button {
    background: #ff6b6b;
    border: none;
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.header button:hover {
    background: #ff4a4a;
}

.hero {
    text-align: center;
    padding: 60px 20px;
    background: linear-gradient(135deg, #5a61f6, #4f93f6);
    color: white;
    border-bottom-left-radius: 50px;
    border-bottom-right-radius: 50px;
}

.hero h1 {
    font-size: 48px;
    margin: 0;
}

.hero p {
    font-size: 20px;
    margin-top: 10px;
}

.container {
    max-width: 960px;
    margin: 40px auto;
    padding: 20px;
}

.project-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.project-card {
    background: white;
    border-radius: 16px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
    position: relative;
}

.project-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
}

.project-card .icon {
    font-size: 32px;
    color: #5a61f6;
    margin-bottom: 10px;
}

.project-card h3 {
    font-size: 20px;
    color: #333;
}

.project-card p {
    font-size: 14px;
    color: #777;
}

.project-card .delete-button {
    background: #ff6b6b;
    border: none;
    color: white;
    padding: 8px 16px;
    border-radius: 8px;
    cursor: pointer;
    position: absolute;
    bottom: 20px;
    right: 20px;
}

.create-button {
    display: block;
    margin: 30px auto;
    padding: 15px 40px;
    font-size: 20px;
    background: linear-gradient(135deg, #4f93f6, #5a61f6);
    color: white;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: background 0.3s, transform 0.2s;
}

.create-button:hover {
    background: linear-gradient(135deg, #5a61f6, #4f93f6);
    transform: translateY(-5px);
}

.footer {
    text-align: center;
    padding: 20px;
    background: #f1f3f8;
    color: #333;
}

.footer a {
    color: #4f93f6;
    text-decoration: none;
    font-weight: 600;
}




.modal {
display: none; 
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: rgba(0, 0, 0, 0.5);
justify-content: center;
align-items: center;
z-index: 1000;
}


.modal-content {
background: white;
padding: 20px;
border-radius: 10px;
max-width: 400px;
width: 90%;
box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.modal-input {
display: block;
width: 90%;
margin: 10px 0;
padding: 10px;
border-radius: 5px;
border: 1px solid #ccc;
}

.modal-actions {
display: flex;
justify-content: space-between;
margin-top: 20px;
}

.cancel-button,
.save-button {
background: #4f93f6;
border: none;
color: white;
padding: 10px 20px;
border-radius: 5px;
cursor: pointer;
}

.cancel-button {
background: #ff6b6b;
}

.cancel-button:hover {
background: #ff4a4a;
}

.save-button:hover {
background: #3b7bd8;
}




 
.modal {
display: none; 
position: fixed;
z-index: 1000;
left: 0;
top: 0;
width: 100%;
height: 100%;
overflow: auto;
background-color: rgba(0, 0, 0, 0.5); /* Black background with opacity */
justify-content: center;
align-items: center;
}

.modal-content {
background-color: #ffffff;
margin: auto;
padding: 20px;
border-radius: 10px;
max-width: 500px;
box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
position: relative;
text-align: left;
animation: fadeIn 0.3s;
}

.close-button {
position: absolute;
top: 10px;
right: 10px;
font-size: 24px;
font-weight: bold;
color: #ff4757;
cursor: pointer;
}

.close-button:hover {
color: #ff1e2d;
}

@keyframes fadeIn {
from {
opacity: 0;
transform: scale(0.9);
}
to {
opacity: 1;
transform: scale(1);
}
}

.dropdown-menu {
    display: none; /* Hidden by default */
    position: absolute;
    top: 60px;
    right: 20px;
    background: white;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    width: 150px;
    text-align: left;
    overflow: hidden;
}

.dropdown-menu a {
    display: block;
    padding: 10px 15px;
    color: #333;
    text-decoration: none;
    font-size: 14px;
    transition: background 0.2s ease;
}

.dropdown-menu a:hover {
    background: #f4f4f4;
    color: #000;
}

.user-actions {
    position: relative;
}

.user-avatar {
    position: relative;
    cursor: pointer;
}
.confirmation-modal {
    display: flex;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.confirmation-modal .modal-content {
    background: white;
    padding: 20px;
    border-radius: 10px;
    width: 400px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.confirmation-modal .modal-actions {
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
}

.confirmation-modal .cancel-button,
.confirmation-modal .delete-button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.confirmation-modal .cancel-button {
    background: #ccc;
    color: #333;
}

.confirmation-modal .delete-button {
    background: #ff6b6b;
    color: white;
}

.confirmation-modal .cancel-button:hover {
    background: #bbb;
}

.confirmation-modal .delete-button:hover {
    background: #ff4a4a;
}


  
    </style>
</head>
<body>
    <div class="header">
        <h1>TYPIFO</h1>
        
    </div>

    <div class="hero">
        <h1>Welcome to Your Dashboard</h1>
        <p>Create and manage your projects easily</p>
    </div>

    <div class="container">
        <div class="project-list">
        </div>
        <button class="create-button">Create New Project</button>
    </div>
      <div id="createProjectModal" class="modal">
    <div class="modal-content">
        <h2 style="
    text-align: center;
">Create New Project</h2>
        <form id="createProjectForm">
            <input
                type="text"
                id="projectName"
                placeholder="Project Name"
                required
                class="modal-input"
            />
            <select id="projectLanguage" required class="modal-input"    style="
    width: 160px;
    border-radius: 20px;
    margin-left: 162px;
    margin-top: 43px;
    margin-bottom: 36px;
">
                <option value="" disabled selected>Select Language</option>
                <option value="en-US">English</option>
                <option value="ar-SA">Arabic</option>
            </select>
           
            <div class="modal-actions">
                <button type="button" class="cancel-button" onclick="closeModal()">Cancel</button>
                <button type="submit" class="save-button">Save</button>
            </div>
        </form>
    </div>
</div>


<div class="footer">
    <p>
        <a href="#" id="privacyPolicyLink">Privacy Policy</a> |
        <a href="#" id="Improvements">Improvements</a> |
        Created by <a href="mailto:info@typifo.com">Firas Nouri</a>
    </p>
</div>

<div id="improvementsModal" class="modal">
    <div class="modal-content">
        <span class="close-button" id="closeImprovementsModal">&times;</span>
        <h2>A Note from Firas</h2>
        <p>
            <strong>Typifo</strong> began as a passion project, inspired during a metro ride home. In just three hours, I developed this foundational version, which uses local storage for basic document management.
        </p>
        <p>
            I am currently working on a major update, set to launch early next year, that will introduce real-time collaborative editing. This update will allow users to create and manage projects collaboratively, with an emphasis on performance, speed, and security.
        </p>
        <p>
            While the collaborative features are nearing completion, I am dedicating extra effort to ensure a seamless, lag-free experience. Additionally, because authentication and shared project functionality involve handling sensitive data, I am meticulously refining these aspects to guarantee robust security and user trust.
        </p>
        <p style="text-align: center; font-weight: bold;">– Firas</p>
    </div>
</div>


<div id="privacyPolicyModal" class="modal">
    <div class="modal-content">
        <span class="close-button" id="closePrivacyModal">&times;</span>
        <h2>Privacy Policy - Typifo</h2>
        <p>
            Welcome to <strong>Typifo</strong>. Your privacy and data security are our priorities! Here's how we handle your files:
        </p>
        <ul>
            <li>
                <strong>Local Storage Only:</strong> All files you create or edit are stored locally in your browser using a technology called <em>localStorage</em>. Your files never leave your device.
            </li>
            <li>
                <strong>Browser-Specific Access:</strong> Your documents are tied to the browser and device you're using. For example, a file created on this browser won't be accessible on another device or browser.
            </li>
            <li>
                <strong>File Permanence:</strong> Files are saved until you clear your browser's localStorage or manually delete them. Clearing your browser data will permanently delete your documents.
            </li>
            <li>
                <strong>No Third-Party Access:</strong> Typifo does not transmit, store, or share your files or personal data with any external servers or third parties.
            </li>
        </ul>
        <p>
            By using Typifo, you agree to store your files locally in your browser. To ensure your data is secure, we recommend downloading backups of your files and securing your device.
        </p>
        <p>
            For questions or concerns, contact us at <a style="
    text-decoration: none;
" href="mailto:info@typifo.com">info@typifo.com</a>.
        </p>
        <p style="text-align: center; font-weight: bold;">- Firas</p>
    </div>
</div>



<div id="improvementsModal" class="modal">
    <div class="modal-content">
        <span class="close-button" id="closeImprovementsModal">&times;</span>
        <h2>A Note from Firas</h2>
<p>
    <strong>Typifo</strong> began as a passion project, inspired during a metro ride home. In just three hours, I developed this foundational version, which uses local storage for basic document management.
</p>
<p>
    I am currently working on a major update, set to launch early next year, that will introduce real-time collaborative editing. This update will allow users to create and manage projects collaboratively, with an emphasis on performance, speed, and security.
</p>
<p>
    While the collaborative features are nearing completion, I am dedicating extra effort to ensure a seamless, lag-free experience. Additionally, because authentication and shared project functionality involve handling sensitive data, I am meticulously refining these aspects to guarantee robust security and user trust.
</p>
<p style="text-align: center; font-weight: bold;">– Firas</p>
  
    </div>
</div>
  
<script> 
document.addEventListener("DOMContentLoaded", () => {
    const privacyPolicyModal = document.getElementById("privacyPolicyModal");
    const privacyPolicyLink = document.getElementById("privacyPolicyLink");
    const closePrivacyPolicyModal = document.getElementById("closePrivacyModal");

    privacyPolicyLink.addEventListener("click", (event) => {
        event.preventDefault();
        privacyPolicyModal.style.display = "flex";
    });

    closePrivacyPolicyModal.addEventListener("click", () => {
        privacyPolicyModal.style.display = "none";
    });

    window.addEventListener("click", (event) => {
        if (event.target === privacyPolicyModal) {
            privacyPolicyModal.style.display = "none";
        }
    });

    const improvementsModal = document.getElementById("improvementsModal");
    const improvementsLink = document.getElementById("Improvements");
    const closeImprovementsModal = document.getElementById("closeImprovementsModal");

    improvementsLink.addEventListener("click", (event) => {
        event.preventDefault();
        improvementsModal.style.display = "flex";
    });

    closeImprovementsModal.addEventListener("click", () => {
        improvementsModal.style.display = "none";
    });

    window.addEventListener("click", (event) => {
        if (event.target === improvementsModal) {
            improvementsModal.style.display = "none";
        }
    });
}); 
document.addEventListener('DOMContentLoaded', () => {
    const createButton = document.querySelector(".create-button");
    const modal = document.getElementById("createProjectModal");
    const projectForm = document.getElementById("createProjectForm");
    const projectList = document.querySelector(".project-list");
    let projects = JSON.parse(localStorage.getItem("projects")) || [];

    function displayProjects() {
    projectList.innerHTML = '';

    const projects = JSON.parse(localStorage.getItem("projects")) || [];

    if (projects.length === 0) {
        projectList.innerHTML = '<p style="text-align:center;">No projects available. Create one!</p>';
        return;
    }

    projects.forEach(project => {
        const projectCard = document.createElement('div');
        projectCard.className = 'project-card';
        projectCard.innerHTML = `
            <div class="icon">📄</div>
            <h3>${project.name}</h3>
            <p>${project.type || "Personal"}</p>
            <button class="delete-button" title="Delete this project">Delete</button>
        `;

        projectCard.addEventListener('click', (e) => {
            if (e.target.classList.contains('delete-button')) return;

            const targetPage = project.language === "ar-SA" ? "ArabicPage.php" : "EnglishPage.php";
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = targetPage;
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'docId';
            input.value = project.id;
            form.appendChild(input);
            document.body.appendChild(form);
            form.submit();
        });

        projectCard.querySelector('.delete-button').addEventListener('click', (e) => {
            e.stopPropagation();
            deleteProject(project.id);
        });

        projectList.appendChild(projectCard);
    });
} 
function deleteProject(id) {
    const confirmationModal = document.createElement('div');
    confirmationModal.className = 'confirmation-modal';
    confirmationModal.innerHTML = `
        <div class="modal-content">
            <h2>Are you sure you want to delete this project?</h2>
            <p>Once confirmed, The project will be permanently deleted.</p>
            <input
                type="text"
                id="deleteConfirmationInput"
                placeholder="Type DELETE to confirm"
                style="margin-top: 10px; padding: 10px; width: 85%; border-radius: 5px; border: 1px solid #ccc;"
            />
            <div class="modal-actions">
                <button class="cancel-button" id="cancelDeleteButton">Cancel</button>
                <button class="delete-button" id="confirmDeleteButton">Delete</button>
            </div>
        </div>
    `;
    document.body.appendChild(confirmationModal);

    document.getElementById('cancelDeleteButton').addEventListener('click', () => {
        closeConfirmationModal();
    });

    document.getElementById('confirmDeleteButton').addEventListener('click', () => {
        const input = document.getElementById('deleteConfirmationInput').value.trim().toUpperCase();
        if (input === 'DELETE') {
            processDelete(id);
        } else {
            if (!document.querySelector('.error-message')) {
                const modalContent = document.querySelector('.modal-content');
                const errorText = document.createElement('p');
                errorText.className = 'error-message';
                errorText.style.color = 'red';
                modalContent.appendChild(errorText);
            }
        }
    });

    function closeConfirmationModal() {
        confirmationModal.remove();
    }
}
 
function processDelete(id) {
    const projectToDelete = projects.find(project => project.id === id);
    const archivedProjects = JSON.parse(localStorage.getItem('archivedProjects')) || [];
    archivedProjects.push({ ...projectToDelete, archiveDate: new Date().toISOString() });
    localStorage.setItem('archivedProjects', JSON.stringify(archivedProjects));

    projects = projects.filter(project => project.id !== id);
    localStorage.setItem('projects', JSON.stringify(projects));

    displayProjects();

    document.querySelector('.confirmation-modal').remove();

    const successMessage = document.createElement('p');
    successMessage.textContent = 'Project successfully deleted';
    successMessage.style.color = 'green';
    document.body.appendChild(successMessage);

    setTimeout(() => {
        successMessage.remove();
    }, 3000);
} 
document.getElementById("createProjectForm").addEventListener("submit", (e) => {
    e.preventDefault(); 

    const name = document.getElementById("projectName").value.trim();
    const language = document.getElementById("projectLanguage").value;
    const typeInput = document.querySelector('input[name="projectType"]:checked');
    const type = typeInput ? typeInput.value : "Personal"; // Default to "Standard" for non-premium users

    if (!name || !language) {
        alert("Please fill in all required fields.");
        return;
    }

    const newProject = {
        id: crypto.randomUUID(),
        name,
        language,
        type,
    };

    const projects = JSON.parse(localStorage.getItem("projects")) || [];
    projects.push(newProject);
    localStorage.setItem("projects", JSON.stringify(projects));

    displayProjects();

    document.getElementById("createProjectForm").reset();
    closeModal();
});
 
    createButton.addEventListener("click", () => {
        modal.style.display = "flex";
    });

    window.closeModal = () => {
        modal.style.display = "none";
        projectForm.reset();
    };

    modal.addEventListener("click", (e) => {
        if (e.target === modal) closeModal();
    });

    displayProjects();
});
  
</script>

</body>
</html>