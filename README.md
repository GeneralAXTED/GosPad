# GosPad Search System

![PHP Version](https://img.shields.io/badge/PHP-%3E%3D7.4-blue)
![MySQL](https://img.shields.io/badge/MySQL-%3E%3D5.7-orange)
![License](https://img.shields.io/badge/License-MIT-green)
![Status](https://img.shields.io/badge/Status-Active-brightgreen)

GosPad is a lightweight, user-friendly search system built with PHP and MySQL, designed to store, search, and manage keywords with their descriptions. It features a responsive front-end for users to search and view keyword details, and a secure admin panel for managing the database content. The system is optimized for both desktop and mobile devices, ensuring accessibility and ease of use.

## Table of Contents
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Project Structure](#project-structure)
- [Installation](#installation)
  - [Prerequisites](#prerequisites)
  - [Setup Steps](#setup-steps)
- [Usage](#usage)
  - [Front-End](#front-end)
  - [Admin Panel](#admin-panel)
- [Security](#security)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)
- [About](#about)

## Features
- **Keyword Search**: Fast and intuitive search with real-time suggestions.
- **Admin Panel**: Comprehensive management of keywords, including add, edit, bulk delete, search, and sorting functionalities.
- **Responsive Design**: Fully optimized for mobile, tablet, and desktop devices.
- **Rich Text Editor**: CKEditor integration for formatting keyword descriptions.
- **Security**: Protection against XSS and CSRF attacks, with input validation.
- **Pagination & Sorting**: Efficient data navigation with customizable sorting options.
- **Statistics**: Admin panel displays total keywords and latest entry details.

## Technologies Used
- **PHP**: Server-side logic and database interactions (version 7.4+).
- **MySQL**: Relational database for storing keywords and admin credentials (version 5.7+).
- **Tailwind CSS**: Utility-first CSS framework for responsive and modern styling.
- **CKEditor**: Rich text editor for formatting descriptions in the admin panel.
- **voku/anti-xss**: Library for preventing Cross-Site Scripting (XSS) attacks.
- **JavaScript**: Client-side interactivity, including real-time search suggestions and form handling.
- **Composer**: Dependency management for PHP libraries.

## Project Structure
```
gospad/
├── config/
│   └── db.php              # Database connection configuration
├── includes/
│   ├── header.php          # Common HTML header
│   ├── navbar.php          # Navigation bar
│   └── footer.php          # Common footer
├── sql/
│   └── database.sql        # Database schema and sample data
├── vendor/                 # Composer dependencies (ignored in .gitignore)
├── .gitignore              # Files and directories to exclude from Git
├── composer.json           # PHP dependencies
├── LICENSE                 # MIT License
├── README.md               # Project overview (this file)
├── about.md                # Detailed project information
├── admin.php               # Admin panel for managing keywords
├── index.php               # Front-end search interface
└── suggestions.php         # Backend for real-time search suggestions
```

## Installation

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (e.g., Apache or Nginx)
- Composer (for dependency management)
- Git (optional, for cloning the repository)

### Setup Steps
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/your-username/gospad.git
   cd gospad
   ```

2. **Install Dependencies**:
   Run the following command to install PHP dependencies:
   ```bash
   composer install
   ```

3. **Configure the Database**:
   - Import the `sql/database.sql` file into your MySQL database to create the necessary tables and sample data.
   - Update `config/db.php` with your database credentials:
     ```php
     define('DB_HOST', 'localhost');
     define('DB_USER', 'your_username');
     define('DB_PASS', 'your_password');
     define('DB_NAME', 'gospad');
     ```

4. **Set Up Admin Account**:
   - The `sql/database.sql` file includes a sample admin user. To create a new admin, generate a password hash using PHP:
     ```php
     echo password_hash('your_password', PASSWORD_BCRYPT);
     ```
   - Insert the hashed password into the `admins` table in the `database.sql` file or directly into the database.

5. **Configure Web Server**:
   - Point your web server to the `gospad` directory (e.g., `/var/www/gospad` for Apache).
   - Ensure the server has write permissions for session storage if needed.

6. **Access the Application**:
   - Open your browser and navigate to `http://your-domain.com` or `http://localhost/gospad`.
   - Log in to the admin panel at `http://your-domain.com/admin.php` using the admin credentials.

## Usage

### Front-End
- **Search Interface (`index.php`)**:
  - Enter a keyword in the search bar to find matching keywords and their descriptions.
  - Real-time suggestions appear as you type, powered by `suggestions.php`.
  - Results are displayed in a clean, responsive layout.

### Admin Panel
- **Access (`admin.php`)**:
  - Log in via `login.php` using admin credentials.
  - The admin panel allows you to:
    - Add new keywords and descriptions using a rich text editor.
    - Edit existing entries.
    - Perform bulk deletion of selected keywords.
    - Search and sort keywords by ID or keyword.
    - View statistics (total keywords and latest entry ID).
- **Logout**: Use the "Logout" link in the navigation bar to end the session.

## Security
- **XSS Protection**: Input data is sanitized using the `voku/anti-xss` library and `htmlspecialchars`.
- **CSRF Protection**: Every form submission includes a CSRF token to prevent unauthorized requests.
- **Input Validation**: Keyword inputs are restricted to 255 characters, and descriptions are required.
- **Secure Sessions**: Admin access is protected with session-based authentication.

## Contributing
Contributions are welcome! To contribute:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature`).
3. Make your changes and commit (`git commit -m "Add your feature"`).
4. Push to the branch (`git push origin feature/your-feature`).
5. Open a Pull Request with a detailed description of your changes.

Please follow the [Code of Conduct](CODE_OF_CONDUCT.md) and ensure your code adheres to the project's coding standards.

## License
This project is licensed under the [MIT License](LICENSE).

## Contact
For questions, suggestions, or issues, please contact:
- **Email**: info@gospad.uz
- **GitHub Issues**: [Create an issue](https://github.com/your-username/gospad/issues)

## About
For more details about the project’s purpose, history, and future plans, see [about.md](about.md).
