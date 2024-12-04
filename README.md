# Online Voting System for Reality Shows

An interactive web application for managing reality show votes online, developed using **HTML**, **CSS**, **JavaScript**, and **PHP**. The system provides an intuitive interface for users and administrators to manage accounts, reality shows, voting, and deadlines.

---

## Description

This project is a group effort for our **1st-year, 2nd-semester IWT project**, showcasing an online voting system for reality shows.

---

## Features

- **Homepage:** Overview of popular reality shows and their voting status.
- **User Functionality:** Registration, login, voting, and watching shows.
- **Admin Functionality:**
  - Manage user accounts and reality shows.
  - Set and update voting deadlines.
  - Manage votes and results.
- **Responsive UI:** Ensures compatibility across various devices.

---

## Technologies Used

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL (managed via phpMyAdmin)
- **Server Environment:** XAMPP

---

## Project Structure

### Frontend
- `homepage.html`: **Main page** for all users.
- `login.html`: **User authentication** page.
- `register.html`: **New user registration** form.
- `popularpage.html`: Lists **trending reality shows**.

### User Pages
- `useraccount.php`: User profile and account management.
- `vote.php`: Page for voting on reality shows.
- `watch.php`: Stream selected shows.

### Admin Pages
- `admin-account.php`: Admin login and dashboard.
- `admin-manageaccount.php`: Manage user accounts.
- `admin-managerealityshow.php`: Add, update, or delete reality shows.
- `admin-managevote.php`: Oversee voting activities.
- `admin-setdeadline.php`: Set and manage voting deadlines.

### Backend
- PHP scripts for handling CRUD operations and form submissions.
- MySQL database with tables for users, reality shows, votes, and deadlines.

---

## How to Set Up the Application

### Prerequisites
1. **Visual Studio Code** or any code editor.
2. **XAMPP** installed for **PHP** and **MySQL**.
3. Browser for testing.

---

### Steps to Run the Application

#### Step 1: Set Up **XAMPP**
1. Open XAMPP and start **Apache** and **MySQL** services.

#### Step 2: Configure Database
1. Go to `http://localhost/phpmyadmin`.
2. Create a database (e.g., `voting_system`).
3. Import the SQL file (`database.sql`) from the project directory to set up necessary tables and data.

#### Step 3: Configure Project
1. Copy the project folder to the `htdocs` directory in XAMPP.
2. Update database connection details in `config.php`:
   ```php
   <?php
   $host = 'localhost';
   $user = 'root';
   $password = '';
   $dbname = 'voting_system';
   ?>

#### Step 4: Run the Application
1. Open a browser and go to `http://localhost/<project-folder-name>/homepage.html`.
2. Start exploring the system!

## Additional Information
- **Languages Used**: HTML, CSS, JavaScript, PHP
- **Database Management**: phpMyAdmin
- **Development Environment**: Visual Studio Code, XAMPP

## Screenshots
### Homepage
![image](https://github.com/user-attachments/assets/40ebe15b-2a02-4f7f-ba36-80f7d08ee449)

### Admin Dashboard
![image](https://github.com/user-attachments/assets/92fbd4b9-643a-49f8-8b45-21025b8f9a8d)

### Vote Page
![image](https://github.com/user-attachments/assets/270c478f-2b1c-4cb3-8e86-075a9f25947f)

### Watch Page
![image](https://github.com/user-attachments/assets/ab16e168-2d49-44b0-af58-d0b9b97258e5)

### Register Page
![image](https://github.com/user-attachments/assets/7b45f31e-32de-4908-9d7b-063f018b5128)

### Add Reality Show Page
![image](https://github.com/user-attachments/assets/1fd9ad2d-d891-42b3-b996-cd902e4af7e3)


#### This project is part of our 1st-year, 2nd-semester IWT group coursework at SLIIT University.
