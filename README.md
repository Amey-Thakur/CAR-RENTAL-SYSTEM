# Car Rental Database Management System

[![Archival Status](https://img.shields.io/badge/Status-Archived-red)](https://github.com/Amey-Thakur/CAR-RENTAL-SYSTEM)
[![License](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![PHP](https://img.shields.io/badge/Language-PHP-purple.svg)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/Database-MySQL-orange.svg)](https://www.mysql.com/)

> **Archival Notice**: This repository is preserved for educational and historical purposes. It represents a "Car Rental Database Management System" developed in 2021. No active maintenance or support is provided.

## 📖 System Overview

The **Car Rental Database Management System** is a web-based application designed to facilitate the online booking and management of rental vehicles. It features a dual-interface architecture:
1.  **Frontend (User Portal)**: Allows customers to browse the fleet, view vehicle details, and submit booking requests.
2.  **Backend (Admin Panel)**: Provides comprehensive control for administrators to manage vehicles, bookings, brands, and user inquiries.

### Key Features
-   **User Authentication**: Secure login and registration for customers.
-   **Vehicle Inventory**: Detailed listing of cars with images, pricing, and features.
-   **Booking Management**: Workflow for customers to book cars and admins to confirm/cancel reservations.
-   **Brand Management**: Categorization of vehicles by manufacturer.
-   **Dashboard Analytics**: Visual representation of system stats (users, bookings, vehicles).

## 🛠️ Technical Architecture

-   **Frontend**: HTML5, CSS3, JavaScript (jQuery), Bootstrap 3.
-   **Backend**: PHP (Procedural).
-   **Database**: MySQL (Relational).
-   **Server**: Apache/Nginx (XAMPP/WAMP recommended for local setup).

## 📂 Repository Structure

All source code is located in the `Source Code/` directory.

```
Source Code/
+--- admin/                 # Administrative backend panel
|    +--- css/              # Admin-specific stylesheets
|    +--- includes/         # Admin configuration and reusable fragments
|    +--- js/               # Admin dashboard scripts
|    ...
+--- assets/                # Frontend assets (CSS, JS, Fonts, Images)
+--- includes/              # Frontend configuration (DB connection) and partials
+--- sqlfile/               # Database schema import (carrental.sql)
+--- index.php              # Application entry point
...
```

## 🚀 Setup & Installation (Localhost)

1.  **Prerequisites**: Install a local server environment like [XAMPP](https://www.apachefriends.org/index.html) or [WAMP](http://www.wampserver.com/en/).
2.  **Clone Repository**:
    ```bash
    git clone https://github.com/Amey-Thakur/CAR-RENTAL-SYSTEM.git
    ```
3.  **Deploy Code**: Move the `Source Code` folder contents to your server's root directory (e.g., `htdocs/carrental/`).
4.  **Database Setup**:
    -   Open `phpMyAdmin`.
    -   Create a new database named `carrental`.
    -   Import the `Source Code/sqlfile/carrental.sql` file.
5.  **Configure Connection**:
    -   Edit `Source Code/includes/config.php` and `Source Code/admin/includes/config.php` if your MySQL credentials differ from default (`root`, no password).
6.  **Launch**: Access `http://localhost/carrental/` in your browser.

## 📜 Authorship & Credits

This project was developed by the **AHNA Team** as part of the 5th Semester Mini-Project at Terna Engineering College (Batch of 2022).

-   **Amey Thakur** (Lead Developer)
-   **Hasan Rizvi**
-   **Nithya Gnanasekar**
-   **Anisha Gupta**

## 📄 License

This project is licensed under the [MIT License](LICENSE).

## 📚 Related Publications

-   **Research Paper**: [Car Rental System (IJRASET)](https://doi.org/10.22214/ijraset.2021.36339)
-   **Preprint**: [viXra:2108.0140](https://vixra.org/abs/2108.0140)
