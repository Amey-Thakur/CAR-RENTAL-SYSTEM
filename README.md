<div align="center">

  <a name="readme-top"></a>
  # Car Rental System

  [![License: MIT](https://img.shields.io/badge/License-MIT-lightgrey)](LICENSE)
  ![Status](https://img.shields.io/badge/Status-Completed-success)
  [![Platform](https://img.shields.io/badge/Platform-PHP%20%7C%20MySQL%20%7C%20Apache-blueviolet)](https://github.com/Amey-Thakur/CAR-RENTAL-SYSTEM)
  [![Technology](https://img.shields.io/badge/Technology-PHP%20%7C%20Bootstrap%203%20%7C%20jQuery-orange)](https://github.com/Amey-Thakur/CAR-RENTAL-SYSTEM)
  [![Developed by](https://img.shields.io/badge/Developed%20by-Amey%20Thakur-blue)](https://github.com/Amey-Thakur)

  A comprehensive web-based Car Rental Database Management System facilitating seamless vehicle booking, fleet management, and administrative oversight.

  **[Source Code](Source%20Code/)** &nbsp;&middot;&nbsp; **[Technical Specification](docs/SPECIFICATION.md)**

</div>

---

<div align="center">

  [Authors](#authors) &nbsp;·&nbsp; [Overview](#overview) &nbsp;·&nbsp; [Features](#features) &nbsp;·&nbsp; [Structure](#project-structure) &nbsp;·&nbsp; [Quick Start](#quick-start) &nbsp;·&nbsp; [License](#license) &nbsp;·&nbsp; [About](#about-this-repository) &nbsp;·&nbsp; [Acknowledgments](#acknowledgments)

</div>

---

<!-- AUTHORS -->
<div align="center">

  ## Authors

  **Terna Engineering College | Computer Engineering | Batch of 2022**

  <table>
  <tr>
  <td align="center">
  <a href="https://github.com/Amey-Thakur">
  <img src="https://github.com/Amey-Thakur.png" width="150px;" alt="Amey Thakur"/><br />
  <sub><b>Amey Thakur</b></sub>
  </a>
  </td>
  </tr>
  </table>



</div>

---

<!-- OVERVIEW -->
## Overview

The **CAR-RENTAL-SYSTEM** is a web-based database management utility developed to automate and streamline vehicle rental operations. It features a robust dual-interface architecture that facilitates seamless interactions between end-users and administrators.

Developed as a mini-project for the **Database Management System (DBMS)** curriculum, this tool demonstrates the practical application of relational database design (MySQL), server-side logic (PHP), and responsive frontend development (Bootstrap).

> [!IMPORTANT]
> **Research Impact**
>
> This project was published as a research paper in **International Journal for Research in Applied Science & Engineering Technology (IJRASET)** (Volume 9, Issue 7) and is also available as a preprint on **viXra**.
>
> - [Preprint @viXra](https://vixra.org/abs/2108.0140)
> - [Published Paper @IJRASET](https://doi.org/10.22214/ijraset.2021.36339)

 ### Resources

 | # | Project | Description | Date | Marks | Link |
 |---|---|---|---|---|---|
 | 1 | **Car Rental System** | Complete source code and documentation | - | - | [View](Source%20Code/) |
 | 2 | **Project Report** | Detailed project documentation | November 28, 2020 | 09/10 | [View](Mini%20Project/B-42,45,50,51_DBMS_Mini_Project.pdf) |
 | 3 | **Published Paper** | IJRASET (Vol 9 Issue 7) Publication | July 2021 | - | [View](Mini%20Project/IJRASET-V9I7%20-%20Car%20Rental%20System.pdf) |
 | 4 | **Certificate** | Publication Certificate | July 2021 | - | [View](Mini%20Project/IJRASET36339%20-%20Car%20Rental%20System.pdf) |

---

<!-- FEATURES -->
## Features

| Feature | Description |
|---------|-------------|
| **Vehicle Inventory** | Browsable fleet catalog comprising diverse vehicle brands, detailed specifications, high-resolution imagery, and accessory listings. |
| **Booking Engine** | Automated reservation workflow allowing users to query availability, book vehicles for specific durations, and track booking status (Confirmed/Pending). |
| **Admin Dashboard** | Centralized control panel providing real-time statistical insights into registered users, total bookings, vehicle status, and brand aggregates. |
| **User Management** | Secure authentication system for customers, featuring profile management, password recovery, and booking history tracking. |
| **Fleet Administration** | Comprehensive CRUD capabilities for administrators to manage vehicles, update pricing, modify features, and organize inventory by brand. |
| **Reservation Control** | Administrative tools to review, approve, or cancel user bookings, ensuring optimal fleet scheduling and availability management. |
| **Content Management** | Admin-controlled page editor for managing "About Us", "Privacy Policy", and "FAQs", alongside tools to moderate user testimonials. |
| **Inquiry Handling** | Dedicated interface for administrators to view, manage, and respond to "Contact Us" queries and manage email subscribers. |

### Tech Stack
- **Language**: PHP 7.x (Procedural)
- **Database**: MySQL 5.x+
- **Frontend**: HTML5, CSS3, Bootstrap 3, jQuery
- **Server**: Apache (XAMPP/WAMP)

---

<!-- STRUCTURE -->
## Project Structure

```
CAR-RENTAL-SYSTEM/
│
├── docs/                                # Formal Documentation
│   └── SPECIFICATION.md                 # Technical Architecture & Spec
│
├── Mini Project/                        # Research & Academic Assets
│   ├── Draft/                           # Preliminary Documentation
│   │   └── IJRASET - Car Rental.docx    # Working Draft Document
│   ├── Figures/                         # UML & Architecture Diagrams
│   │   ├── Fig. (1) Use Case Diagram.png           # System Use Case Diagram
│   │   ├── Fig. (2) Data Flow Diagram.png          # Data Flow Diagram (DFD)
│   │   ├── Fig. (3) Sequence Diagram.png           # System Sequence Diagram
│   │   ├── Fig. (4) ER Diagram.jpg                 # Entity-Relationship Diagram
│   │   ├── Fig. (5) Relationship Model.jpg         # Database Relationship Model
│   │   ├── Fig. (6) Database Management.png        # Database Management Structure
│   │   ├── Fig. (6) Home.jpg                       # Homepage Interface
│   │   ├── Fig. (7) Cars.jpg                       # Vehicle Listing Page
│   │   ├── Fig. (7) Database Structure.png         # Database Schema Structure
│   │   ├── Fig. (8) Contact Us.jpg                 # Contact Form Interface
│   │   ├── Fig. (9) Sign In.jpg                    # User Login Interface
│   │   ├── Fig. (10) Make My Account.jpg           # User Registration Interface
│   │   ├── Fig. (11) Password Recovery.jpg         # Password Reset Interface
│   │   ├── Fig. (12) My Profile.jpg                # User Profile Page
│   │   ├── Fig. (12) Update Password.jpg           # Password Update Interface
│   │   ├── Fig. (13) My Booking.jpg                # Booking History Interface
│   │   ├── Fig. (14) About Us.jpg                  # About Us Page
│   │   ├── Fig. (15) Successful Connection.png     # Database Connection Success
│   │   └── Untitled document.pdf                   # Supporting Documentation
│   ├── B-42,45,50,51_DBMS_Project.pdf   # Formal Academic Report (09/10)
│   ├── IJRASET-V9I7 - Car Rental.pdf    # Published Paper (IJRASET Vol 9 Issue 7)
│   ├── IJRASET36339 - Certificate.pdf   # Publication Certificate
│   └── Preprint - Car Rental System.pdf # viXra Preprint
│
├── Source Code/                         # Full Stack Web Application
│   ├── admin/                           # Administrative Backend Module
│   │   ├── css/                         # Admin Interface Stylesheets
│   │   │   ├── awesome-bootstrap-checkbox.css      # Custom Bootstrap Checkboxes
│   │   │   ├── bootstrap-select.css                # Bootstrap Select Styling
│   │   │   ├── bootstrap-social.css                # Social Icon Button Styles
│   │   │   ├── bootstrap.min.css                   # Core Bootstrap CSS Framework
│   │   │   ├── dataTables.bootstrap.min.css        # DataTable Bootstrap Integration
│   │   │   ├── datatables.min.css                  # DataTable Core Styling
│   │   │   ├── fileinput.min.css                   # File Input UI Styling
│   │   │   ├── font-awesome.min.css                # Vector Icon Library
│   │   │   ├── jquery.dataTables.min.css           # jQuery DataTable Base Styles
│   │   │   ├── style.css                           # Primary Admin Interface Styles
│   │   │   └── style.less                          # Preprocessor Style Definition
│   │   ├── fonts/                       # Admin Interface Web Fonts
│   │   │   ├── FontAwesome.otf                     # OpenType Icon Font
│   │   │   ├── fontawesome-webfont.eot             # Embedded OpenType Font
│   │   │   ├── fontawesome-webfont.svg             # Scalable Vector Graphics Font
│   │   │   ├── fontawesome-webfont.ttf             # TrueType Icon Font
│   │   │   ├── fontawesome-webfont.woff            # Web Open Font Format (W1)
│   │   │   ├── fontawesome-webfont.woff2           # Web Open Font Format (W2)
│   │   │   ├── glyphicons-halflings-regular.eot    # Glyphicon EOT Font
│   │   │   ├── glyphicons-halflings-regular.svg    # Glyphicon SVG Font
│   │   │   ├── glyphicons-halflings-regular.ttf    # Glyphicon TrueType Font
│   │   │   ├── glyphicons-halflings-regular.woff   # Glyphicon WOFF Font
│   │   │   └── glyphicons-halflings-regular.woff2  # Glyphicon WOFF2 Font
│   │   ├── img/                         # Admin Dashboard Visual Assets
│   │   ├── includes/                    # Admin Shared Components
│   │   │   ├── config.php               # Admin DB Connection Settings
│   │   │   ├── header.php               # Admin Top Navigation Bar
│   │   │   └── leftbar.php              # Admin Lateral Sidebar
│   │   ├── js/                          # Admin Functional Scripts
│   │   │   ├── Chart.min.js                        # Data Visualization Library
│   │   │   ├── bootstrap-select.js                 # Select Element Enhancements
│   │   │   ├── bootstrap-select.min.js             # Minified Select Library
│   │   │   ├── bootstrap.js                        # Bootstrap JS Framework
│   │   │   ├── bootstrap.min.js                    # Minified Bootstrap JS
│   │   │   ├── chartData.js                        # Dashboard Statistics Logic
│   │   │   ├── dataTables.bootstrap.min.js         # DataTable UI Logic
│   │   │   ├── fileinput.js                        # File Upload Functional Script
│   │   │   ├── jquery.dataTables.min.js            # Core DataTable Engine
│   │   │   ├── jquery.min.js                       # Primary jQuery Context
│   │   │   └── main.js                             # Admin Initialization Script
│   │   ├── change-password.php          # Admin Password Update Page
│   │   ├── changeimage1.php             # Vehicle Image 1 Update Page
│   │   ├── changeimage2.php             # Vehicle Image 2 Update Page
│   │   ├── changeimage3.php             # Vehicle Image 3 Update Page
│   │   ├── changeimage4.php             # Vehicle Image 4 Update Page
│   │   ├── changeimage5.php             # Vehicle Image 5 Update Page
│   │   ├── create-brand.php             # New Brand Creation Portal
│   │   ├── dashboard.php                # System Overview Dashboard
│   │   ├── edit-brand.php               # Vehicle Brand Modification
│   │   ├── edit-vehicle.php             # Vehicle Details Editor
│   │   ├── index.php                    # Admin Authentication Portal
│   │   ├── logout.php                   # Admin Session Termination
│   │   ├── manage-bookings.php          # Booking & Reservation Log
│   │   ├── manage-brands.php            # Vehicle Brand Control Center
│   │   ├── manage-contactusquery.php    # User Communication Tracker
│   │   ├── manage-pages.php             # Content Management (CMS)
│   │   ├── manage-subscribers.php       # Subscription List Manager
│   │   ├── manage-vehicles.php          # Fleet Inventory Controller
│   │   ├── nicEdit.js                   # Inline WYSIWYG Editor
│   │   ├── nicEditorIcons.gif           # Editor Interface Icons
│   │   ├── post-avehicle.php            # Vehicle Listing Submission
│   │   ├── reg-users.php                # Registered User Directory
│   │   ├── testimonials.php             # User Feedback Management
│   │   └── update-contactinfo.php       # Contact Information CMS
│   │
│   ├── assets/                          # Public Frontend Resources
│   │   ├── css/                         # Public Interface Stylesheets
│   │   │   ├── bootstrap-slider.min.css            # Range Slider UI Styles
│   │   │   ├── bootstrap.min.css                   # Core Frontend CSS Framework
│   │   │   ├── font-awesome.min.css                # System Icon Library
│   │   │   ├── grabbing.html                       # Drag & Drop Interface Utility
│   │   │   ├── owl.carousel.css                    # Image Carousel Component
│   │   │   ├── owl.transitions.css                 # Carousel Animation Logic
│   │   │   ├── slick.css                           # Slider Navigation Styles
│   │   │   └── style.css                           # Primary Frontend Stylesheet
│   │   ├── fonts/                       # Public Interface Web Fonts
│   │   │   ├── fontawesome-webfont3e6e.eot         # Icon Font Library (EOT)
│   │   │   ├── fontawesome-webfont3e6e.html        # Icon Manifest Catalog
│   │   │   ├── fontawesome-webfont3e6e.svg         # Icon Font Library (SVG)
│   │   │   ├── fontawesome-webfont3e6e.ttf         # Icon Font Library (TTF)
│   │   │   ├── fontawesome-webfont3e6e.woff        # Icon Font Library (WOFF)
│   │   │   ├── fontawesome-webfontd41d.eot         # Legacy Font Asset (EOT)
│   │   │   ├── glyphicons-halflings-regular.eot    # Bootstrap Glyphicon (EOT)
│   │   │   ├── glyphicons-halflings-regular.html   # Glyphicon Spec Catalog
│   │   │   ├── glyphicons-halflings-regular.svg    # Bootstrap Glyphicon (SVG)
│   │   │   ├── glyphicons-halflings-regular.ttf    # Bootstrap Glyphicon (TTF)
│   │   │   ├── glyphicons-halflings-regular.woff   # Bootstrap Glyphicon (WOFF)
│   │   │   └── glyphicons-halflings-regulard41d.eot # Legacy Halflings Asset
│   │   ├── images/                      # Fleet & UI Image Assets
│   │   └── js/                          # Public Behavioral Scripts
│   │       ├── bootstrap-slider.min.js              # Slider UI Interaction
│   │       ├── bootstrap.min.js                    # Bootstrap JS Componentry
│   │       ├── countdown_date.js                   # Timer Calculation Logic
│   │       ├── interface.js                        # General UI Transitions
│   │       ├── jquery.countdown.min.js             # Countdown Extension
│   │       ├── jquery.min.js                       # Primary jQuery Engine
│   │       ├── owl.carousel.min.js                 # Carousel Engagement Script
│   │       └── slick.min.js                        # Slider Interaction Logic
│   │
│   ├── img/                             # General Content Images
│   │   └── showcase.jpg                 # Homepage Hero Image
│   │
│   ├── includes/                        # Core Shared Framework
│   │   ├── config.php                   # Global Database Configuration
│   │   ├── footer.php                   # Global Page Footer Component
│   │   ├── forgotpassword.php           # Account Recovery Interface
│   │   ├── header.php                   # Global Page Header (Navbar)
│   │   ├── login.php                    # User Authentication Component
│   │   ├── registration.php             # User Signup Component
│   │   └── sidebar.php                  # Shared Application Sidebar
│   │
│   ├── sqlfile/                         # Data Architecture
│   │   └── carrental.sql                # Relational Database Schema
│   │
│   ├── car-listing.php                  # Fleet Inventory Display
│   ├── check_availability.php           # AJAX Dynamic Data Validator
│   ├── contact-us.php                   # Public Interaction Portal
│   ├── index.php                        # Application Landing Page
│   ├── logout.php                       # User Session Termination
│   ├── my-booking.php                   # Personal Reservation Log
│   ├── page.php                         # Dynamic CMS Page Loader
│   ├── profile.php                      # User Account Management
│   ├── search-carresult.php             # Filtered Search Processor
│   ├── update-password.php              # Secure Credential Update
│   └── vehicle-details.php              # Comprehensive Vehicle Specs
│
├── .gitattributes                       # Git Line Ending Control
├── .gitignore                           # Excluded Files Manifest
├── CITATION.cff                         # Academic Citation Standard
├── codemeta.json                        # Software Metadata Metadata
├── LICENSE                              # Project Licensing Terms
├── README.md                            # Comprehensive Documentation
└── SECURITY.md                          # Cybersecurity Protocol
```


---

<!-- USAGE -->
## Quick Start

### 1. Prerequisites
Ensure your local development environment meets the following requirements:
- **Web Server**: Apache (via [XAMPP](https://www.apachefriends.org/index.html), [WAMP](http://www.wampserver.com/en/), or [MAMP](https://www.mamp.info/)).
- **PHP**: Version **7.0** or higher.
- **Database**: MySQL **5.6** or higher.
- **Browser**: Modern web browser (Chrome, Firefox, Edge).

### 2. Setup & Deployment
1.  **Clone the Repository**:
    ```bash
    git clone https://github.com/Amey-Thakur/CAR-RENTAL-SYSTEM.git
    ```
2.  **Deploy Source Code**:
    -   Locate the `Source Code` directory within the cloned repository.
    -   Copy the **entire contents** of `Source Code` into your server's root directory:
        -   **XAMPP**: `C:\xampp\htdocs\carrental\`
        -   **WAMP**: `C:\wamp64\www\carrental\`

### 3. Database Configuration
1.  **Start Services**: Launch Apache and MySQL via your server control panel.
2.  **Access phpMyAdmin**: Navigate to `http://localhost/phpmyadmin/`.
3.  **Create Database**:
    -   Click **New**.
    -   Database Name: `carrental`
    -   Collation: `utf8_general_ci`
    -   Click **Create**.
4.  **Import Schema**:
    -   Select the `carrental` database.
    -   Click **Import** tab.
    -   Choose file: `Source Code/sqlfile/carrental.sql`.
    -   Click **Go**.

### 4. Application Configuration
Update the database connection settings in **both** configuration files to match your local environment.

**Frontend Config**: `includes/config.php`
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');      // Default XAMPP user
define('DB_PASS', '');          // Default XAMPP password (empty)
define('DB_NAME', 'carrental');
```

**Backend Config**: `admin/includes/config.php`
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'carrental');
```
> [!NOTE]
> Provide your specific MySQL password if one is set.

### 5. Launch Application
-   **User Portal**: [http://localhost/carrental/](http://localhost/carrental/)
-   **Admin Panel**: [http://localhost/carrental/admin/](http://localhost/carrental/admin/)

---

<!-- LICENSE -->
## License

This project is licensed under the **MIT License** - see the [LICENSE](LICENSE) file for details.

**Summary**: You are free to share and adapt this content for any purpose, even commercially, as long as you provide appropriate attribution to the original author.

**Copyright &copy; 2021** [Amey Thakur](https://github.com/Amey-Thakur)

---

<!-- ABOUT -->
## About This Repository

**Created & Maintained by**: [Amey Thakur](https://github.com/Amey-Thakur)  
**Academic Journey**: Bachelor of Engineering in Computer Engineering (2018-2022)  
**Institution**: [Terna Engineering College](https://ternaengg.ac.in/), Navi Mumbai  
**University**: [University of Mumbai](https://mu.ac.in/)

This project features the CAR-RENTAL-SYSTEM, a web-based utility developed as a **5th Semester Mini-Project**. It showcases the practical application of full-stack web development principles and relational database management.

**Connect**: [GitHub](https://github.com/Amey-Thakur) · [LinkedIn](https://www.linkedin.com/in/amey-thakur)

### Acknowledgments

Grateful acknowledgment to the **AHNA Team (Hasan Rizvi, Nithya Gnanasekar, Anisha Gupta)** for their pivotal role and collaborative excellence during the initial development phase of this project. Their combined expertise was instrumental in the success of this implementation. This technical record serves as a testament to our scholarly partnership and significant impact on the final system.

Special thanks to the faculty members of the Department of Computer Engineering at Terna Engineering College for their guidance during the course of this project. Gratitude is also extended to the mentors and peers who supported this learning endeavor.

---

<!-- FOOTER -->
<div align="center">

[↑ Back to Top](#readme-top)

[Authors](#authors)&nbsp;·&nbsp;[Overview](#overview)&nbsp;·&nbsp;[Features](#features)&nbsp;·&nbsp;[Structure](#project-structure)&nbsp;·&nbsp;[Quick Start](#quick-start)&nbsp;·&nbsp;[License](#license)&nbsp;·&nbsp;[About](#about-this-repository)&nbsp;·&nbsp;[Acknowledgments](#acknowledgments)

<br>

🔬 **[Database Management System Lab](https://github.com/Amey-Thakur/DATABASE-MANAGEMENT-SYSTEM-AND-DATABASE-MANAGEMENT-SYSTEM-LAB)**&nbsp;·&nbsp;🚗 **[CAR-RENTAL-SYSTEM](https://github.com/Amey-Thakur/CAR-RENTAL-SYSTEM)**

</div>

---

<div align="center">

  ### Presented as part of the 5th Semester Mini-Project @ Terna Engineering College

  ### 🎓 [Computer Engineering Repository](https://github.com/Amey-Thakur/COMPUTER-ENGINEERING)

  **Computer Engineering (B.E.) - University of Mumbai**

  *Semester-wise curriculum, laboratories, projects, and academic notes.*

</div>
