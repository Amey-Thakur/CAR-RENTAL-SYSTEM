<div align="center">

  <a name="readme-top"></a>
  
  # Car Rental System

  [![License: MIT](https://img.shields.io/badge/License-MIT-lightgrey)](LICENSE)
  ![Status](https://img.shields.io/badge/Status-Completed-success)
  [![Platform](https://img.shields.io/badge/Platform-PHP%20%7C%20MySQL%20%7C%20Apache-blueviolet)](https://github.com/Amey-Thakur/CAR-RENTAL-SYSTEM)
  [![Technology](https://img.shields.io/badge/Technology-PHP%20%7C%20Bootstrap%203%20%7C%20jQuery-orange)](https://github.com/Amey-Thakur/CAR-RENTAL-SYSTEM)
  [![Developed by Amey Thakur](https://img.shields.io/badge/Developed%20by-Amey%20Thakur-blue)](https://github.com/Amey-Thakur)

  A comprehensive web-based Car Rental Database Management System facilitating seamless vehicle booking, fleet management, and administrative oversight.

  **[Source Code](Source%20Code/)** &nbsp;·&nbsp; **[Technical Specification](docs/SPECIFICATION.md)** &nbsp;·&nbsp; **[Live Demo](https://amey-thakur.github.io/CAR-RENTAL-SYSTEM/)**

</div>

---

<div align="center">

  [Authors](#authors) &nbsp;·&nbsp; [Overview](#overview) &nbsp;·&nbsp; [Features](#features) &nbsp;·&nbsp; [Structure](#project-structure) &nbsp;·&nbsp; [Results](#system-architecture--design-gallery) &nbsp;·&nbsp; [Quick Start](#quick-start) &nbsp;·&nbsp; [Usage Guidelines](#usage-guidelines) &nbsp;·&nbsp; [License](#license) &nbsp;·&nbsp; [About](#about-this-repository) &nbsp;·&nbsp; [Acknowledgments](#acknowledgments)

</div>

---

<!-- AUTHORS -->
<div align="center">

  ## Authors

  **Terna Engineering College | Computer Engineering | Batch of 2022**

| <a href="https://github.com/Amey-Thakur"><img src="https://github.com/Amey-Thakur.png" width="150" height="150" alt="Amey Thakur"></a><br>[**Amey Thakur**](https://github.com/Amey-Thakur)<br><br>[![ORCID](https://img.shields.io/badge/ORCID-0000--0001--5644--1575-green.svg)](https://orcid.org/0000-0001-5644-1575) |
| :---: |

</div>

> [!IMPORTANT]
> ### 🤝🏻 Special Acknowledgement
> *Special thanks to the **AHNA Team (Hasan Rizvi, Nithya Gnanasekar, Anisha Gupta)** for their meaningful contributions, guidance, and support that helped shape this work.*

---

<!-- OVERVIEW -->
## Overview

The **Car Rental System** is a web-based database management utility developed to automate and streamline vehicle rental operations. It features a robust dual-interface architecture that facilitates seamless interactions between end-users and administrators.

Developed as a mini-project for the **Database Management System Laboratory** curriculum, this tool demonstrates the practical application of relational database design (MySQL), server-side logic (PHP), and responsive frontend development (Bootstrap).

> [!NOTE]
> **Research Impact & Certification**
>
> This project was published as an academic research paper in the **International Journal for Research in Applied Science & Engineering Technology (IJRASET)** (Volume 9, Issue 7), with a scholarly **Preprint** available on **viXra**. The project received an official **Publication Certificate** for its research contribution to database management systems.
>
> - [Preprint @viXra](https://vixra.org/abs/2108.0140)
> - [Published Paper @IJRASET](https://doi.org/10.22214/ijraset.2021.36339)
> - [Publication Certificate](Mini-Project/IJRASET36339%20-%20Car%20Rental%20System.pdf)


 ### Resources

 | # | Resource | Description | Date | Marks |
 |---|---|---|---|---|
 | 1 | [**Source Code**](Source%20Code/) | Complete web application source code | - | - |
 | 2 | [**Technical Specification**](docs/SPECIFICATION.md) | System architecture and specifications | - | - |
 | 3 | [**Project Report**](Mini-Project/B-42,45,50,51_DBMS_Mini_Project.pdf) | Detailed project documentation | November 28, 2020 | 09/10 |
 | 4 | [**Published Paper**](Mini-Project/IJRASET-V9I7%20-%20Car%20Rental%20System.pdf) | IJRASET (Vol 9 Issue 7) Publication | July 2021 | - |
 | 5 | [**Certificate**](Mini-Project/IJRASET36339%20-%20Car%20Rental%20System.pdf) | Publication Certificate | July 2021 | - |
 | 6 | [**DBMS Laboratory**](https://github.com/Amey-Thakur/DATABASE-MANAGEMENT-SYSTEM-AND-DATABASE-MANAGEMENT-SYSTEM-LAB) | Computer Engineering Laboratory Repository | - | - |

> [!TIP]
> **Database Schema Optimization**
> 
> For high-performance vehicle queries, ensure that the `tblvehicles` table is indexed on `VehiclesBrand` and `PricePerDay`. This optimization significantly reduces latency during filtered search operations and dashboard aggregation in the administrative backend.

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

```python
CAR-RENTAL-SYSTEM/
│
├── docs/                                    # Formal Documentation
│   └── SPECIFICATION.md                     # Technical Architecture & Specification
│
├── Mini-Project/                            # Research & Academic Assets
│   ├── Draft/                               # Preliminary Documentation
│   │   └── IJRASET - Car Rental.docx        # Working Draft Document
│   ├── Figures/                             # UML & Architecture Diagrams
│   │   ├── Fig. (1) Use Case Diagram.png    # System Use Case Diagram
│   │   ├── Fig. (2) Data Flow Diagram.png   # Data Flow Diagram (DFD)
│   │   ├── Fig. (3) Sequence Diagram.png    # System Sequence Diagram
│   │   ├── Fig. (4) ER Diagram.jpg          # Entity-Relationship Diagram
│   │   ├── Fig. (5) Relationship Model.jpg  # Database Relationship Model
│   │   ├── Fig. (6) Database Management.png # Database Management Structure
│   │   ├── Fig. (6) Home.jpg                # Homepage Interface
│   │   ├── Fig. (7) Cars.jpg                # Vehicle Listing Page
│   │   ├── Fig. (7) Database Structure.png  # Database Schema Structure
│   │   ├── Fig. (8) Contact Us.jpg          # Contact Form Interface
│   │   ├── Fig. (9) Sign In.jpg             # User Login Interface
│   │   ├── Fig. (10) Make My Account.jpg    # User Registration Interface
│   │   ├── Fig. (11) Password Recovery.jpg  # Password Reset Interface
│   │   ├── Fig. (12) My Profile.jpg         # User Profile Page
│   │   ├── Fig. (12) Update Password.jpg    # Password Update Interface
│   │   ├── Fig. (13) My Booking.jpg         # Booking History Interface
│   │   ├── Fig. (14) About Us.jpg           # About Us Page
│   │   └── Fig. (15) Successful Connection.png # Database Connection Success
│   ├── B-42,45,50,51_DBMS_Mini_Project.pdf  # Formal Academic Report (09/10)
│   ├── IJRASET-V9I7 - Car Rental System.pdf # Published Paper (IJRASET Vol 9 Issue 7)
│   ├── IJRASET36339 - Car Rental System.pdf # Publication Certificate
│   └── Preprint - Car Rental System.pdf     # viXra Preprint
│
├── Source Code/                             # Full Stack Web Application
│   ├── admin/                               # Administrative Backend Module
│   │   ├── css/                             # Admin Interface Stylesheets
│   │   ├── fonts/                           # Admin Interface Web Fonts
│   │   ├── img/                             # Admin Dashboard Visual Assets
│   │   ├── includes/                        # Admin Shared Components
│   │   ├── js/                              # Admin Functional Scripts
│   │   ├── dashboard.php                    # System Overview Dashboard
│   │   ├── manage-vehicles.php              # Fleet Inventory Controller
│   │   └── reg-users.php                    # Registered User Directory
│   │
│   ├── assets/                              # Public Frontend Resources
│   ├── includes/                            # Core Shared Framework
│   ├── sqlfile/                             # Data Architecture
│   │   └── carrental.sql                    # Relational Database Schema
│   ├── car-listing.php                      # Fleet Inventory Display
│   ├── index.php                            # Application Landing Page
│   ├── profile.php                          # User Account Management
│   └── vehicle-details.php                  # Comprehensive Vehicle Specs
│
├── .gitattributes                           # Git Line Ending Control
├── .gitignore                               # Excluded Files Manifest
├── CITATION.cff                             # Academic Citation Standard
├── codemeta.json                            # Software Metadata Repository
├── LICENSE                                  # Project Licensing Terms
├── README.md                                # Comprehensive Documentation
└── SECURITY.md                              # Cybersecurity Protocol
```

---

<!-- RESULTS -->
## System Architecture & Design Gallery

<div align="center">

  ### System Use Case Diagram
  ![Use Case Diagram](Mini-Project/Figures/Fig.%20%281%29%20Use%20Case%20Diagram.png)

  ### Data Flow Diagram (DFD)
  ![Data Flow Diagram](Mini-Project/Figures/Fig.%20%282%29%20Data%20Flow%20Diagram.png)

  ### System Sequence Diagram
  ![Sequence Diagram](Mini-Project/Figures/Fig.%20%283%29%20Sequence%20Diagram.png)

  ### Entity-Relationship Diagram (ERD)
  ![ER Diagram](Mini-Project/Figures/Fig.%20%284%29%20ER%20Diagram.jpg)

  ### Relational Schema (Database Tables)
  ![Relationship Model](Mini-Project/Figures/Fig.%20%285%29%20Relationship%20Model.jpg)

  ### Database Management Structure
  ![Database Management](Mini-Project/Figures/Fig.%20%286%29%20Database%20Management%20Structure.png)

  ### Homepage Interface
  ![Home](Mini-Project/Figures/Fig.%20%286%29%20Home.jpg)

  ### Vehicle Listing Page
  ![Cars](Mini-Project/Figures/Fig.%20%287%29%20Cars.jpg)

  ### Database Schema Structure
  ![Database Structure](Mini-Project/Figures/Fig.%20%287%29%20Database%20Structure.png)

  ### Contact Form Interface
  ![Contact Us](Mini-Project/Figures/Fig.%20%288%29%20Contact%20Us.jpg)

  ### User Login Interface
  ![Sign In](Mini-Project/Figures/Fig.%20%289%29%20Sign%20In.jpg)

  ### User Registration Interface
  ![Make My Account](Mini-Project/Figures/Fig.%20%2810%29%20Make%20My%20Account.jpg)

  ### Password Reset Interface
  ![Password Recovery](Mini-Project/Figures/Fig.%20%2811%29%20Password%20Recovery.jpg)

  ### User Profile Page
  ![My Profile](Mini-Project/Figures/Fig.%20%2812%29%20My%20Profile.jpg)

  ### Password Update Interface
  ![Update Password](Mini-Project/Figures/Fig.%20%2812%29%20Update%20Password.jpg)

  ### Booking History Interface
  ![My Booking](Mini-Project/Figures/Fig.%20%2813%29%20My%20Booking.jpg)

  ### About Us Page
  ![About Us](Mini-Project/Figures/Fig.%20%2814%29%20About%20Us.jpg)

  ### Database Connection Verification
  ![Successful Connection](Mini-Project/Figures/Fig.%20%2815%29%20Successful%20Connection.png)

</div>

---

<!-- USAGE -->
## Quick Start

### 1. Prerequisites
Ensure your local development environment meets the following requirements:
- **Web Server**: Apache (via [XAMPP](https://www.apachefriends.org/index.html), [WAMP](http://www.wampserver.com/en/), or [MAMP](https://www.mamp.info/)).
- **PHP**: Version **7.0** or higher.
- **Database**: MySQL **5.6** or higher.
- **Browser**: Modern web browser (Chrome, Firefox, Edge).

> [!WARNING]
> **Legacy Dependencies & Security**
> 
> This system utilizes **PHP 7.x Procedural** logic and **Bootstrap 3**. While robust for educational archiving, it is recommended to run this in a sandboxed local environment (e.g., XAMPP) to mitigate risks associated with legacy server-side scripting. Ensure that `config.php` utilizes strong MySQL credentials if deployed beyond local environments.

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
    -   Database Name: `carrental`
    -   Collation: `utf8_general_ci`
4.  **Import Schema**:
    -   Select the `carrental` database.
    -   Import the `Source Code/sqlfile/carrental.sql` script.

### 4. Application Parameters
Update the database connection settings in `Source Code/includes/config.php` (and `Source Code/admin/includes/config.php`) if your local MySQL credentials differ from the defaults.

```php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','carrental');
```

### 5. Launch
Access the application through your local gateway: [http://localhost/carrental/](http://localhost/carrental/)

> [!TIP]
> **Car Rental Database Management System**
>
> Access the comprehensive IJRASET-published research simulation featuring detailed UML architecture, advanced relational database models, and a high-fidelity web-based fleet management ecosystem.
>
> [**Launch Live Demo**](https://amey-thakur.github.io/CAR-RENTAL-SYSTEM/)

---

<!-- =========================================================================================
                                     USAGE SECTION
     ========================================================================================= -->
## Usage Guidelines

This repository is openly shared to support learning and knowledge exchange across the academic community.

**For Students**  
Use this mini-project as a reference for understanding relational database design, server-side logic in PHP, and responsive frontend development. The source code and research assets are documented to support self-paced learning and exploration of full-stack database applications.

**For Educators**  
This project may serve as a practical example or supplementary teaching resource for Database Management System courses (`CSC502` / `CSL503`). Attribution is appreciated when utilizing content.

**For Researchers**  
The published paper and preprint provide insights into the system's architecture and the researchers' approach to automating vehicle rental operations.

---

<!-- LICENSE -->
## License

This repository and all linked academic content are made available under the **MIT License**. See the [LICENSE](LICENSE) file for complete terms.

> [!NOTE]
> **Summary**: You are free to share and adapt this content for any purpose, even commercially, as long as you provide appropriate attribution to the original author.

Copyright © 2021 Amey Thakur

---

<!-- ABOUT -->
## About This Repository

**Created & Maintained by**: [Amey Thakur](https://github.com/Amey-Thakur)  
**Academic Journey**: Bachelor of Engineering in Computer Engineering (2018-2022)  
**Institution**: [Terna Engineering College](https://ternaengg.ac.in/), Navi Mumbai  
**University**: [University of Mumbai](https://mu.ac.in/)

This project features the **Car Rental System**, a web-based utility developed as a **5th Semester Mini-Project**. It showcases the practical application of full-stack web development principles and relational database management.

**Connect:** [GitHub](https://github.com/Amey-Thakur) &nbsp;·&nbsp; [LinkedIn](https://www.linkedin.com/in/amey-thakur) &nbsp;·&nbsp; [ORCID](https://orcid.org/0000-0001-5644-1575)

### Acknowledgments

Grateful acknowledgment to the **AHNA Team (Hasan Rizvi, Nithya Gnanasekar, Anisha Gupta)** for their exceptional collaboration and innovative contributions during the development of this project. Their combined technical expertise in relational database architecture, server-side PHP logic, and commitment to software quality were instrumental in building this robust management system. Learning alongside them was a transformative experience; their thoughtful approach to problem-solving and steady encouragement turned complex challenges into meaningful learning moments. This work reflects the growth and insights gained from our side-by-side academic journey. Thank you, Hasan, Nithya, and Anisha, for everything you shared and taught along the way.

Grateful acknowledgment to the faculty members of the **Department of Computer Engineering** at Terna Engineering College for their guidance and instruction in Database Management Systems. Their expertise in relational architecture and server-side logic helped shape the technical foundation of this project.

Special thanks to the mentors and peers whose encouragement, discussions, and support contributed meaningfully to this learning endeavor.

---

<!-- FOOTER -->
<div align="center">

  [↑ Back to Top](#readme-top)

  [Authors](#authors) &nbsp;·&nbsp; [Overview](#overview) &nbsp;·&nbsp; [Features](#features) &nbsp;·&nbsp; [Structure](#project-structure) &nbsp;·&nbsp; [Results](#system-architecture--design-gallery) &nbsp;·&nbsp; [Quick Start](#quick-start) &nbsp;·&nbsp; [Usage Guidelines](#usage-guidelines) &nbsp;·&nbsp; [License](#license) &nbsp;·&nbsp; [About](#about-this-repository) &nbsp;·&nbsp; [Acknowledgments](#acknowledgments)

  <br>

  🔬 **[Database Management System Laboratory](https://github.com/Amey-Thakur/DATABASE-MANAGEMENT-SYSTEM-AND-DATABASE-MANAGEMENT-SYSTEM-LAB)** &nbsp;·&nbsp; 🚗 **[Car Rental System](https://amey-thakur.github.io/CAR-RENTAL-SYSTEM/)**

  ---

  #### Presented as part of the 5th Semester Mini-Project @ Terna Engineering College

  ---

  ### 🎓 [Computer Engineering Repository](https://github.com/Amey-Thakur/COMPUTER-ENGINEERING)

  **Computer Engineering (B.E.) - University of Mumbai**

  *Semester-wise curriculum, laboratories, projects, and academic notes.*

</div>
