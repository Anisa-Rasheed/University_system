# University Management System

This is a University Management System built using PHP, MySQL, HTML, CSS. It allows you to manage student records efficiently with a professional interface.

# The system provides:

Add, Edit, Delete, and List Students

Delete confirmation dialog to prevent accidental deletion

Total students display at the top

Professional dark-themed design

Notifications/messages when a student is added, updated, or deleted

This project is ideal for learning CRUD operations in PHP and creating a simple management system interface.

# Project Structure
university_crud/
│
├─ config.php              # Database connection
├─ index.php               # List students + total
├─ add.php                 # Add student page
├─ edit.php                # Edit student page
├─ delete.php              # Delete student with confirmation
├─ style.css               # Shared professional styling
# Features

Add Student – Enter student details and add a new record.

Edit Student – Update any student information.

Delete Student – Delete with a confirmation dialog in the middle of the page.

Total Students – Shows the total number of students at the top.

Professional Interface – Dark theme with modern form and table styling.

Notifications – Messages appear in the center after add, update, or delete actions.

# Requirements

XAMPP / WAMP / MAMP (to run PHP & MySQL locally)

Web browser (Chrome, Firefox, etc.)

PHP 7+ and MySQL

# Setup Instructions

Clone or download the project into your XAMPP htdocs folder.
Example:

C:\xampp\htdocs\university_crud\

# Create the database:

Open phpMyAdmin → Create a database named university_crud_db

# Run the following SQL query to create the students table:

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    course VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

# Update database connection in config.php if necessary:

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university_crud_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


# Demo 

https://drive.google.com/file/d/14MrpvpsPpzMS77QqwM5d3TkW6NIFGH_x/view?usp=drivesdk
