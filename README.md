# solar-maintenance-system  
Website to register, program and manage the management of solar panels in commercial or residential pv-plants
with the following technologies:   
✅ Frontend: HTML, CSS, JavaScript (Bootstrap)   
✅ Backend: PHP con Apache   
✅ Base de datos: MySQL (to store maintenance history and alerts)   

Features:   
•	Registration of clients and photovoltaic installations.   
•	Maintenance scheduling with email reminders.   
•	Incident registration and fault reports.   
•	Dashboard with summary of upcoming maintenance.  

Project Overview  
Features:  
✅ Client and PV Installation Registration  
✅ Maintenance Scheduling with Email Reminders  
✅ Incident Reporting and Fault Management  
✅ Dashboard with Upcoming Maintenance Summary  

Development Steps:  
🚀 STEP 1: Prepare the Environment  
Setup Local Server before executing the project.  
✅ Option 1: Using XAMPP (Windows/Linux/Mac)  
1️⃣   Download XAMPP 👉 https://www.apachefriends.org/  
2️⃣   Install & Run XAMPP.  
3️⃣   Start in the Control Panel of XAMPP:  
•	Apache (web server)  
•	MySQL (datebase)  
4️⃣   Check if it is working with http://localhost/  

✅ Option 2: Using Docker (more difficult)  
1️⃣   Install Docker Desktop 👉 https://www.docker.com/  
2️⃣   Use a file docker-compose.yml to configure Apache, MySQL & PHP.  
3️⃣   Run the system with:  
sh  
CopyEdit  
docker-compose up -d  

🚀 STEP 2: Create the Datebase in MySQL  
1️⃣   Open phpMyAdmin with http://localhost/phpmyadmin/.  
2️⃣   Create a new database called:  
•	solar_maintenance  
3️⃣   Create the necessary tables importing the script database.sql into MySQL   

🚀 STEP 3: Project Structure  
Create a folder with the name of the project (e.g. solar-maintenance-system) inside the directory htdocs (C:\xampp\htdocs) if you use XAMPP or www for Laragon.    

📂 Project Structure:  
📂 solar-maintenance-system  
│── 📂config  
│   ├──database.php          # Database connection.  
│── 📂public  
│   ├── index.php             # Homepage (Login)  
│   ├── dashboard.php         # Main dashboard  
│   ├── register.php          # Client & PV system registration  
│   ├── schedule.php          # Maintenance scheduling  
│   ├── incidents.php         # Incident reporting  
│   ├── send_reminders.php    # Script to send email reminders  
│── 📂assets  
│   ├── 📂css                  # Custom styles  
│   ├── 📂js                   # JavaScript scripts  
│── 📂includes  
│   ├── header.php            # Navigation bar  
│   ├── footer.php            # Footer  
│── 📂controllers  
│   ├── auth.php              # User authentication    
│   ├── maintenance.php       # Maintenance logic  
│   ├── incidents.php         # Incident logic  
│── 📂sql  
│   ├── database.sql          # MySQL database structure  
└── .htaccess                 # Apache settings  

🚀 STEP 4: Create the Datebase Connection  
📌 Using the file: config.php in folder /config/  

🚀 STEP 5: Create the Login Page  
Create Authentication System using PHP Sessions for login/logout and Hash passwords for security if you desire.  
📌 Using the file: index.php (Login Page) in folder /public/  

🚀 STEP 6: Create the Homepage (Dashboard)  
Show upcoming maintenance tasks and list recent incidents  
📌 Using the file: homepage.php (Page after login) in folder /public/  

🚀 STEP 7: Create Logout  
📌 Using the file: logout.php in folder /public/  

🚀 STEP 8: Build a User Registration form  
📌 Using the file: registration_user.php in folder /public/  

🚀 STEP 9: Build Maintenance Scheduling form  
📌 Using the file: public/schedule.php in folder /public/  

🚀 STEP 10: Build Incident Reporting form  
📌 Using the file: incidents.php in folder /public/  

🚀 STEP 11: Add Email Reminders NOT WORKING!!!  
Implement Email Reminders using PHPMailer to send automatic reminders before scheduled maintenance.  
📌 Using the file: send_reminders.php in folder /public/  

NOTE: send_reminders.php is not working ... 

