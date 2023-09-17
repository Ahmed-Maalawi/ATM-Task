<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



# ATM Project
The Laravel ATM Simulator is a web-based application designed to mimic ATM (Automated Teller Machine) transactions. It provides a user-friendly interface for clients to perform common banking actions, including withdrawing funds, depositing money, and checking their account balances. Additionally, administrators have the ability to manage client data efficiently.

## Table of Contents

- [Getting Started](#getting-started)
    - [Prerequisites](#prerequisites)
    - [Installation](#installation)
- [Usage](#usage)
    - [Configuration:](#configuration)
    - [Installation](#installation)
    - [Running the Development Server](#runnin-server)
    - [Accessing the Application](#access-application)
- [Features](#features)
   - [User Features](#user-features)
   - [Admin Features](#admin-features)
   - [Additional Notes](#additional-notes)
- [About Laravel](#about-laravel)
- [Learning Laravel](#learning-laravel)
- [Laravel Sponsors](#laravel-sponsors)
- [Contributing](#contributing)
- [Code of Conduct](#code-of-conduct)
- [Security Vulnerabilities](#security-vulnerabilities)
- [License](#license)

## Getting Started

### Prerequisites

Before you begin, ensure you have met the following requirements:

- **PHP**: Laravel 10 requires PHP 8.0 or higher. You can download and install PHP from the [official PHP website](https://www.php.net/).

- **Composer**: Composer is a PHP dependency management tool used for installing Laravel and its dependencies. Make sure you have Composer installed. You can download it from [getcomposer.org](https://getcomposer.org/).

- **Web Server**: You'll need a web server to serve your Laravel application. Popular options include Apache and Nginx. For local development, you can use Laravel's built-in development server by running `php artisan serve`.

- **Database**: Laravel supports various database systems. You'll need one of the following:
    - MySQL
    - PostgreSQL
    - SQLite
    - SQL Server

      Ensure that your chosen database system is installed and properly configured.

- **Node.js and npm**: If you plan to use Laravel Mix for asset compilation and management, you'll need Node.js and npm installed. You can download them from [nodejs.org](https://nodejs.org/).

### Installation

```bash
# Clone the repository
git clone https://github.com/Ahmed-Maalawi/ATM-Task.git

# Navigate to the project directory
cd ATM-Task

# Install dependencies
composer install
npm install

# Configure the .env file
cp .env.example .env
php artisan key:generate

# Run database migrations and seeders (after updating the database name on .env file)
php artisan migrate --seed

# Start the development server
php artisan serve


```
## Usage
1. **Configuration**:

    - Before you start, ensure that you have configured your project environment. This typically involves setting up your `.env` file with the necessary environment variables, such as database credentials and application-specific settings. You can create a `.env` file by copying the `.env.example` file and configuring it to match your environment.

```bash
DB_CONNECTION=mysql #Database Type
DB_HOST=127.0.0.1 #Database Host
DB_PORT=3306 #Database Port
DB_DATABASE=database_name  #Database Name
DB_USERNAME=database_username #Database Username
DB_PASSWORD=database_password #Database Password
 ```

2. **Installation**:

    - If you haven't already, follow the installation steps outlined in the "Installation" section of this README to set up your Laravel project.

3. **Running the Development Server**:

    - To run the development server locally, use the following command:

      ```bash
      php artisan serve
      ```

      This command will start the Laravel development server, and you can access your application in a web browser at the specified URL (usually `http://localhost:8000` by default).

4. **Accessing the Application**:

    - Open your web browser and navigate to the URL where your Laravel application is running (usually `http://localhost:8000` by default).
#Features
5. **User Features**:

    - Login:

        1. Users can access the login page by navigating to the URL "http://localhost:8000/login".
           To log in, users must provide their email and password.

    - Card Verification:

        2. After successfully logging in, users are redirected to the card verification page.
        3. Here, users need to enter their card number and card PIN for authentication.

    - Dashboard:

        4. Upon successful card verification, users are redirected to their dashboard.
        5. The dashboard provides users with essential account information, including:
            - The user's latest 5 transactions, showing details such as transaction type, amount, and date.
            - A list of all their linked accounts.
            - Users can select an account from the list to perform actions on it.
    - Account Actions:

        6. Users can choose an account from their account list to perform various actions, including:
            - Withdraw Funds: Users can initiate withdrawals from the selected account.
            - Deposit Funds: Users can deposit money into the selected account.
            - Inquire Balance: Users can check the balance of the selected account.

6. **Admin Features**:

    - Login:

        1. The admin can access the login page using the same URL as users: "http://localhost:8000/login".
        2. Admins must enter their email and password to log in.
    - Admin Dashboard:

        3. After successful login, admins are redirected to their admin dashboard.
        4. The admin dashboard provides access to various administrative functions and information.

    - Transaction Management:

        5. Admins have access to user transaction details and can perform actions such as:
            - Viewing a list of all transactions across all user accounts.
            - Filtering and searching for transactions based on various criteria (e.g., date, transaction type).
            - Viewing detailed transaction information.

7. **Additional Notes**:

    - Admin:
        1. Email: 'admin@gmail.com'
        2. Password: 'password'

    - User:
        1. Email: created by seeding (access by database IDE).
        2. Default Password: 'password'.
        3. each user has one card.
        4. each user has many accounts.
        5. each user has 10 withdrawal transactions per day.

    - Card
        1. Card Number: created by seeding (access by database IDE).
        2. Card Pin Number: Default for all cards '123456'.



## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
