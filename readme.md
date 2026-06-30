# Project Aisle - E-Commerce Platform

A full-featured e-commerce platform built with modern web technologies, designed to provide a seamless shopping experience for buyers and sellers.

## About Project Aisle

Project Aisle is a comprehensive e-commerce marketplace solution that enables multiple sellers to list and sell products while buyers can browse, purchase, and manage their orders. The platform includes advanced features such as product management, shopping cart functionality, user authentication, payment processing, and seller ratings.

## Technology Stack

### Backend
- **PHP 7.x** - Server-side language
- **Laravel 5.x** - Web application framework
- **MySQL/MariaDB** - Relational database
- **Eloquent ORM** - Object-Relational Mapping
- **Composer** - PHP dependency manager

### Frontend
- **JavaScript (ES6+)** - Client-side scripting
- **Blade** - Laravel templating engine
- **Webpack** - Module bundler
- **Node.js/npm** - Frontend build tools
- **CSS/SCSS** - Styling

### Features
- User authentication and authorization with role-based access control
- Multi-seller marketplace functionality
- Product catalog with categories and search
- Shopping cart and checkout system
- Payment processing integration
- Order management and tracking
- User ratings and reviews
- Seller dashboard and analytics
- Image management system
- Responsive design for mobile and desktop

## Installation

### Requirements
- PHP 7.x or higher
- MySQL 5.7 or higher
- Node.js and npm
- Composer

### Setup
```bash
# Clone the repository
git clone git@github.com:dekaruz/project_aisle.git
cd project_aisle

# Install PHP dependencies
composer install

# Install Node dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run database migrations
php artisan migrate

# Seed the database (optional)
php artisan db:seed

# Build frontend assets
npm run dev

# Start the development server
php artisan serve
```

## Project Structure

- `app/` - Application models and business logic
- `config/` - Configuration files
- `database/` - Migrations and seeders
- `resources/` - Views and frontend assets
- `routes/` - Route definitions (API and web)
- `storage/` - Application storage
- `tests/` - Unit and feature tests
- `public/` - Publicly accessible files

## API Documentation

The API follows RESTful conventions. Check `routes/api.php` for available endpoints.

## License

This project is licensed under the MIT License.

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
