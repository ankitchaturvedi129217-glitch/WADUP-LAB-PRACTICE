# WADUP Lab Practice – PHP

A collection of **PHP Web Application Development Using PHP (WADUP)** laboratory practicals created for academic learning and hands-on practice.

This repository contains PHP programs and practical assignments covering fundamental to intermediate concepts of **PHP, HTML, Forms, Sessions, Cookies, File Handling, MySQL, CRUD Operations, AJAX, and Dynamic Web Applications**.

---

## 📌 Project Overview

**WADUP Lab Practice** is an academic repository containing practical programs completed while learning PHP and web application development.

The main purpose of this repository is to understand how PHP works with HTML forms, server-side processing, sessions, cookies, files, databases, and AJAX.

---

## 🛠️ Technologies Used

* **PHP**
* **HTML5**
* **CSS3**
* **JavaScript**
* **jQuery**
* **AJAX**
* **MySQL**
* **Apache**
* **Laragon / XAMPP / WAMP**
* **Visual Studio Code**

---

## 📂 Repository Structure

```text
WADUP-LAB-PRACTICE/
│
├── LAB-1/
│   ├── index.php
│   ├── login.php
│   └── home.php
│
├── LAB-2/
│   ├── index.php
│   ├── login.php
│   ├── home.php
│   └── registration.php
│
├── LAB-3/
│   ├── 1-1.php
│   ├── 1-2.php
│   └── 1-3.php
│
├── LAB-4/
│   ├── 1-4.php
│   ├── 1-5.php
│   └── 1-6.php
│
├── LAB-5/
│   ├── 1-7/
│   ├── 1-8.php
│   └── 2-1.php
│
├── LAB-6/
│   ├── 2-2.php
│   └── 2-3.php
│
├── LAB-7/
│   ├── 2-4.php
│   ├── 2-5.php
│   ├── 2-6.php
│   └── 2-7.php
│
├── LAB-8/
│   └── lab-8.php
│
├── LAB-9/
│   └── lab-9.php
│
├── LAB-10/
│   ├── 3-1.html
│   ├── 3-1.php
│   ├── 3-2.php
│   ├── 3-3.php
│   ├── 3-4.php
│   ├── 3-5.php
│   └── 3-6.php
│
├── LAB-11/
│   ├── 3-7.php
│   ├── 3-7-home.php
│   ├── 3-7-logout.php
│   ├── 3-8.php
│   ├── 3-9.php
│   └── 3-10.php
│
├── LAB-12/
│   ├── 5-1.php
│   ├── 5-2.php
│   └── sample-data.txt
│
├── LAB-13/
│   ├── db.php
│   ├── index.php
│   ├── edit.php
│   ├── delete.php
│   └── uploads/
│
├── LAB-14/
│   ├── Definition -1/
│   │   ├── index.php
│   │   └── get_content.php
│   │
│   └── Definition -2/
│       └── index.php
│
├── .gitignore
└── README.md
```

---

## 📚 Topics Covered

### PHP Fundamentals

* PHP Syntax
* Variables
* Data Types
* Operators
* Conditional Statements
* Loops
* Arrays
* Functions

### Forms and User Input

* HTML Forms
* GET Method
* POST Method
* Form Validation
* User Input Processing

### Authentication

* Login System
* Registration System
* User Authentication
* Logout Functionality

### Sessions and Cookies

* PHP Sessions
* Session Management
* Cookies
* Login State Management

### File Handling

* Reading Files
* Writing Files
* File Upload
* Image Upload
* File Processing

### MySQL Database

* MySQL Connection
* Database Creation
* Table Creation
* Insert Records
* Update Records
* Delete Records
* Display Records
* CRUD Operations

### AJAX and Dynamic Content

* AJAX Requests
* jQuery AJAX
* Dynamic Content Loading
* Server-Side PHP Requests
* Loading Content Without Refreshing the Page

---

## 🚀 How to Run the Project

You need a local PHP development environment such as **Laragon, XAMPP, or WAMP**.

### Option 1 – Laragon

1. Install Laragon.
2. Start **Apache** and **MySQL**.
3. Copy or clone this repository into:

```text
C:\laragon\www\
```

4. The project should look like:

```text
C:\laragon\www\WADUP-LAB-PRACTICE
```

5. Open your browser and visit:

```text
http://localhost/WADUP-LAB-PRACTICE/
```

You can then open individual laboratory files.

For example:

```text
http://localhost/WADUP-LAB-PRACTICE/LAB-1/
```

---

### Option 2 – XAMPP

1. Install XAMPP.
2. Start **Apache** and **MySQL**.
3. Copy the repository into:

```text
C:\xampp\htdocs\
```

4. Open:

```text
http://localhost/WADUP-LAB-PRACTICE/
```

---

## 🗄️ LAB-13 Database

LAB-13 contains a PHP/MySQL CRUD application.

The database configuration is located in:

```text
LAB-13/db.php
```

The project uses:

```text
Host: localhost
Username: root
Password: empty
Database: lab-13
```

The PHP code is configured to create the database and required table automatically if they do not already exist.

> **Note:** These credentials are intended for a local development environment. Do not use the default `root` account without a password in a production application.

---

## 📤 File Upload

LAB-13 also demonstrates file/image upload functionality.

Uploaded files are stored inside:

```text
LAB-13/uploads/
```

The upload directory is included in the project structure for demonstration purposes.

---

## 🔄 AJAX Practical

LAB-14 contains practicals related to dynamically loading content using PHP and AJAX.

Example structure:

```text
LAB-14/
│
├── Definition -1/
│   ├── index.php
│   └── get_content.php
│
└── Definition -2/
    └── index.php
```

These practicals demonstrate how content can be requested from a PHP server and displayed dynamically without refreshing the complete webpage.

---

## 🎯 Learning Objectives

Through these practicals, you can learn:

* How PHP works on a web server
* How to process HTML forms
* How to use PHP conditions and loops
* How to create reusable functions
* How to manage sessions and cookies
* How to work with files
* How to upload images
* How PHP connects with MySQL
* How to perform CRUD operations
* How AJAX communicates with PHP
* How to create basic dynamic web applications

---

## 💻 Requirements

Before running the practicals, install:

| Requirement  | Recommended             |
| ------------ | ----------------------- |
| PHP          | 7.4+                    |
| MySQL        | 5.7+ / 8.x              |
| Apache       | Latest available        |
| Browser      | Chrome / Edge / Firefox |
| Code Editor  | Visual Studio Code      |
| Local Server | Laragon / XAMPP / WAMP  |

---

## 🧪 How to Practice

1. Clone the repository.
2. Open the project in Visual Studio Code.
3. Start Apache using Laragon/XAMPP.
4. Start MySQL if the practical requires a database.
5. Open the required LAB folder.
6. Run the PHP file through `localhost`.
7. Modify the code and experiment with different inputs.

---

## 📖 Example

A basic PHP program can be executed through:

```text
http://localhost/WADUP-LAB-PRACTICE/LAB-3/1-1.php
```

The exact URL depends on the practical and file name.

---

## 🌱 Academic Purpose

This repository is created for **educational and academic purposes** as part of PHP/Web Application Development laboratory practice.

The programs are intended to help students understand PHP concepts through practical implementation.

---

## 🔮 Future Improvements

Possible future improvements include:

* Improve UI/UX of practical applications
* Add responsive CSS designs
* Improve form validation
* Use prepared SQL statements
* Add better error handling
* Add screenshots for each practical
* Add detailed explanations for each program
* Improve authentication security
* Organize practical questions and solutions separately

---

## 🤝 Contribution

This repository is primarily maintained as an academic practice repository.

If you find an issue or have an improvement suggestion, feel free to create an issue or submit a pull request.

---

## ⭐ Support

If this repository helped you understand PHP or web development concepts, consider giving the repository a **⭐ Star** on GitHub.

---

## 📄 License

This project is intended for **educational and learning purposes**.

You are free to use the code for learning, practice, and academic purposes.

---

## 👨‍💻 Author

**Ankit Chaturvedi**

BCA Student

---

### 🔗 Repository

GitHub Repository:

**WADUP-LAB-PRACTICE**

Built for learning **PHP & Web Application Development**.
