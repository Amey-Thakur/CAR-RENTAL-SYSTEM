# Technical Specification: Car Rental Database Management System

## 1. System Overview
The **Car Rental Database Management System** is a web-based application designed to automate the process of renting cars. It serves two primary user roles:
1.  **End Users (Customers)**: Browse inventory, view car details, book vehicles, and manage their bookings.
2.  **Administrators**: Manage fleet inventory, user accounts, booking requests, brand categories, and site content (testimonials, contact queries).

## 2. Architecture
The system follows a standard **LAMP/WAMP stack** architecture:
-   **Frontend**: HTML5, CSS3, JavaScript (jQuery), Bootstrap 3.
-   **Backend**: PHP 7.x (Procedural).
-   **Database**: MySQL (Relational Schema).
-   **Server**: Apache/Nginx.

## 3. Database Schema
The data model relies on a relational MySQL database (`carrental`) with the following core entities:

### 3.1 Tables
-   `tblusers`: Stores customer account details (Name, Email, Password, Contact).
-   `tblbrands`: Managed vehicle manufacturers (BrandID, BrandName).
-   `tblvehicles`: Stores fleet inventory (Title, BrandID, Price, FuelType, ModelYear, Image).
-   `tblbooking`: Links Users and Vehicles for reservation transactions (FromDate, ToDate, Status).
-   `tblcontactusquery`: Captures user inquiries submitted via the contact form.
-   `tbltestimonial`: Stores user feedback and reviews.
-   `admin`: Stores administrative credentials.

## 4. Key Modules

### 4.1 Authentication
-   **User Login**: Email/Password based.
-   **Admin Login**: Secure backend access.
-   **Session Management**: PHP sessions used to track logged-in state.

### 4.2 Booking Engine
-   Users select dates and vehicle.
-   Systems checks availability (implied logic via status).
-   Booking status defaults to 'Not Confirmed' until Admin approval.
-   Admin can 'Confirm' or 'Cancel' bookings.

### 4.3 Content Management
-   **Vehicles**: CRUD operations for adding/editing cars, uploading images.
-   **Pages**: Dynamic management of "About Us", "Privacy Policy" content.

## 5. Security Features
-   **SQL Injection Protection**: Usage of PDO (PHP Data Objects) for database interactions.
-   **Password Hashing**: MD5 (Note: Legacy encryption, retained for historical accuracy).
-   **Session Validation**: Checks for active session tokens on protected pages.

## 6. Dependencies
-   **Bootstrap 3.x**: Responsive styling.
-   **jQuery**: DOM manipulation and AJAX.
-   **FontAwesome 4.x**: Iconography.
-   **Chart.js**: Admin dashboard analytics.
-   **Google Fonts**: Typography (Lato).

## 7. Configuration
-   **Database Connection**: Located in `includes/config.php`.
-   **Credentials**:
    -   Host: `localhost`
    -   DB Name: `carrental`
    -   User: `root`
    -   Pass: `` (Empty by default)
