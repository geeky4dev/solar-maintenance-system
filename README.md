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



