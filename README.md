#  Budgetlengha - E-commerce Website

> A modern PHP-based e-commerce platform specializing in traditional Indian clothing and fashion items, featuring lehengas, bridal wear, and ethnic fashion.

![Project Status](https://img.shields.io/badge/Status-Active-brightgreen)
![PHP Version](https://img.shields.io/badge/PHP-7.4+-blue)
![Bootstrap](https://img.shields.io/badge/Bootstrap-4.6.2-purple)
![License](https://img.shields.io/badge/License-MIT-yellow)

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Project Structure](#project-structure)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [API Endpoints](#api-endpoints)
- [Database Schema](#database-schema)
- [Contributing](#contributing)
- [Business Information](#business-information)
- [License](#license)

##  Overview

Budgetlengha is a comprehensive e-commerce solution designed for **Nuriya's Clothing**, specializing in traditional Indian ethnic wear. The platform offers a seamless shopping experience with modern web technologies while maintaining the cultural essence of traditional fashion.

### Key Highlights
-  Beautiful, responsive design optimized for fashion retail
-  Complete shopping cart and checkout system
-  User authentication and session management
-  Mobile-first responsive design
-  Secure user data handling
- Rich product catalog with image galleries

## Features

### E-commerce Core
- **Product Catalog**: Browse extensive collection of lehengas, bridal wear, and ethnic fashion
- **Shopping Cart**: Add, remove, and manage items with real-time cart updates
- **User Authentication**: Secure sign-in/sign-up system with session management
- **Product Search**: Find products easily with intuitive navigation
- **Responsive Design**: Optimized for desktop, tablet, and mobile devices

### User Experience
- **Modern UI/UX**: Clean, elegant design with smooth animations
- **Image Galleries**: High-quality product images with zoom functionality
- **Interactive Navigation**: Smooth scrolling and hover effects
- **Loading Animations**: Enhanced user experience with visual feedback

### Business Features
- **Contact System**: Direct communication with customers
- **Service Information**: Detailed service offerings
- **About Page**: Company story and values
- **Business Integration**: Contact details and location information

## Tech Stack

### Frontend
- **HTML5**: Semantic markup and modern web standards
- **CSS3**: Custom styling with animations and responsive design
- **Bootstrap 4.6.2**: Responsive grid system and components
- **JavaScript**: Interactive functionality and DOM manipulation
- **Google Fonts**: Josefin Sans & Poppins for elegant typography

### Backend
- **PHP 7.4+**: Server-side logic and session management
- **MySQL**: Database for user data and product information
- **Apache**: Web server (via XAMPP)

### Development Tools
- **XAMPP**: Local development environment
- **Git**: Version control
- **VS Code**: Recommended IDE

## Project Structure

```
300WEB/
├── 📁 img/                    # Product images and assets
│   ├── bridal lehengas/       # Bridal wear collection
│   ├── traditional wear/      # Traditional clothing
│   └── logos/                 # Brand assets
├── 📁 bpic/                   # Additional product images
├── 📁 pa/                     # Fashion accessories images
├── 📁 html/                   # Static HTML pages
│   ├── contact.html          # Contact form
│   └── login.html            # Login page
├── 📁 js/                     # JavaScript files
│   ├── script.js             # Main functionality
│   └── naushin.js            # Additional scripts
├── 📄 index1.php              # Homepage
├── 📄 index2.php              # Products catalog
├── 📄 signin.php              # User authentication
├── 📄 signup1.php             # User registration
├── 📄 mycart.php              # Shopping cart
├── 📄 manage_cart.php         # Cart management
├── 📄 about.php               # About page
├── 📄 service.php             # Services page
├── 📄 contact.php             # Contact handler
├── 📄 config.php              # Database configuration
├── 📄 db.php                  # Database connection
├── 📄 validate.php            # Form validation
├── 📄 style.css               # Main stylesheet
└── 📄 README.md               # Project documentation
```

## Installation

### Prerequisites
- XAMPP (Apache + MySQL + PHP)
- Web browser (Chrome, Firefox, Safari)
- Text editor (VS Code recommended)

### Step-by-Step Setup

1. **Download and Install XAMPP**
   ```bash
   # Download from: https://www.apachefriends.org/
   # Install and start Apache & MySQL services
   ```

2. **Clone/Download Project**
   ```bash
   # Navigate to XAMPP htdocs directory
   cd C:\xampp\htdocs
   
   # Clone or extract project files
   # Ensure folder name is '300WEB'
   ```

3. **Database Setup**
   ```sql
   -- Create database
   CREATE DATABASE cart_system;
   
   -- Import database schema (if available)
   -- Or create tables as needed
   ```

4. **Configure Database Connection**
   ```php
   // Edit config.php
   $servername = "localhost";
   $username = "root";
   $password = "123";  // Update as needed
   $dbname = "cart_system";
   ```

5. **Start Services**
   - Open XAMPP Control Panel
   - Start Apache and MySQL
   - Verify services are running

6. **Access Application**
   ```
   http://localhost:3000/
   # or
   http://localhost/300WEB/
   ```

## Configuration

### Database Configuration
Update `config.php` with your database credentials:

```php
<?php
$servername = "localhost";
$username = "root";
$password = "your_password";
$dbname = "cart_system";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
?>
```

### Server Configuration
- Ensure Apache is running on port 80 or 3000
- PHP version 7.4 or higher recommended
- Enable necessary PHP extensions (mysqli, session)

## Usage

### For Customers
1. **Browse Products**: Visit homepage and navigate to products
2. **Add to Cart**: Select items and add to shopping cart
3. **User Account**: Sign up or sign in for personalized experience
4. **Checkout**: Review cart and proceed with purchase
5. **Contact**: Use contact form for inquiries

### For Administrators
1. **Product Management**: Add/edit products through admin panel
2. **User Management**: Monitor user registrations and activities
3. **Order Processing**: Handle customer orders and inquiries

## API Endpoints

| Endpoint | Method | Description |
|----------|--------|--------------|
| `/signin.php` | POST | User authentication |
| `/signup1.php` | POST | User registration |
| `/manage_cart.php` | POST | Cart operations |
| `/contact.php` | POST | Contact form submission |
| `/validate.php` | POST | Form validation |

## Database Schema

### Users Table
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Products Table
```sql
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    image_url VARCHAR(255),
    category VARCHAR(50),
    stock_quantity INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Cart Table
```sql
CREATE TABLE cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    product_id INT,
    quantity INT DEFAULT 1,
    added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);
```

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

### Development Guidelines
- Follow PSR-4 coding standards for PHP
- Use meaningful commit messages
- Test thoroughly before submitting
- Update documentation as needed

## Business Information

**Nuriya's Clothing**  
*Traditional Indian Fashion & Bridal Wear*

 **Address**: Hussain Sindhi, near CB School, Valsad, Gujarat, India  
 **Phone**: +91 63594 72166  
 **Website**: http://localhost:3000/  
**Email**: Contact through website form

### Specializations
-  Bridal Lehengas
-  Traditional Indian Wear
-  Party & Festive Clothing
-  Custom Designs
-  Tailoring Services

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- Bootstrap team for the responsive framework
- Google Fonts for beautiful typography
- XAMPP team for the development environment
- All contributors and supporters

---

<div align="center">

**Made with  for Nuriya's Clothing**

*Bringing traditional fashion to the digital world*

</div>
