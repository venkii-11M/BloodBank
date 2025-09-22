# 🩸 Blood Bank Management System (PHP)

A PHP + MySQL based Blood Bank Management System designed to help hospitals, blood banks, and donors manage blood donations, requests, and availability efficiently.

🚀 Features

🔑 User Roles

Admin: Manage blood stock, donors, requests

Donor: Register & donate blood

Recipient: Request blood from available stock

📊 Blood Inventory Tracking

See available units per blood group

🧾 Donation & Request Management

Log donations with date & donor details

Track and approve blood requests

Alert for low stock of any blood group

🎨 Responsive UI

Clean PHP + Bootstrap frontend

🛠️ Tech StackLayer	Technology

Frontend:HTML, CSS, Bootstrap

Backend:PHP

Database:MySQL

Server:Apache (XAMPP)

Version:Control	Git

⚙️ Installation & Setup

Install XAMPP

Download XAMPP

and start Apache & MySQL from the control panel.


Clone or Download the Project

Place the project folder inside:

C:\xampp\htdocs\bloodbank

Setup Database

Open phpMyAdmin → Create a new database (e.g. blood_bank)

Import the SQL file:

sql/blood_bank.sql


Configure Database Connection

Open includes/db.php (or similar config file) and update:

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "blood_bank";


Run the Project

Open browser and go to:

http://localhost/bloodbank/

