# IJ Restaurant Management System

A complete restaurant management system built with Laravel, featuring online ordering, table reservations, menu management, and more.

## Requirements

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL / MariaDB
- Laravel 10.x

## Installation

### 1. Clone the Repository

```bash
git clone <repository-url>
cd restaurant-management
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Node Dependencies

```bash
npm install
```

### 4. Environment Setup

Copy the example environment file and configure it:

```bash
cp .env.example .env
```

Open `.env` file and update the database configuration:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=restaurant_management
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Create Database

Create a new database in MySQL:

```sql
CREATE DATABASE restaurant_management;
```

### 7. Run Migrations & Seeders

Run migrations to create tables and seed with sample data:

```bash
php artisan migrate:fresh --seed
```

Or run separately:

```bash
php artisan migrate
php artisan db:seed
```

### 8. Create Storage Link

Create symbolic link for file uploads:

```bash
php artisan storage:link
```

### 9. Build Frontend Assets

For development:

```bash
npm run dev
```

For production:

```bash
npm run build
```

### 10. Start the Development Server

```bash
php artisan serve
```

The application will be available at: `http://localhost:8000`

---

## Quick Setup (All Commands)

Run all commands at once:

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan storage:link
npm run build
php artisan serve
```

---

## Login Credentials

All users have password: **`password`**

| Role | Email | Password |
|------|-------|----------|
| Admin | admin@gmail.com | password |
| User | ishrat@gmail.com | password |
| User | nabil@gmail.com | password |
| User | asif@gmail.com | password |
| User | arif@gmail.com | password |

---

## Features

- **Menu Management** - Add, edit, delete menu items with images
- **Category & Subcategory** - Organize menu items
- **Online Ordering** - Customers can order online
- **Table Reservations** - Book tables for dine-in
- **Dine-in Orders** - Manage table orders (POS)
- **Material/Inventory** - Track raw materials
- **Supplier Management** - Manage suppliers
- **Purchase Management** - Track purchases
- **User Authentication** - Login, Register, Password Reset

---

## Folder Structure

```
restaurant-management/
├── app/                    # Application logic
├── database/
│   ├── migrations/         # Database migrations
│   └── seeders/           # Database seeders
├── public/
│   └── website/           # Website assets (CSS, JS, images)
├── resources/
│   └── views/
│       ├── admin/         # Admin panel views
│       ├── auth/          # Authentication views
│       └── website/       # Frontend website views
├── routes/
│   └── web.php            # Web routes
└── storage/               # File uploads
```

---

## Troubleshooting

### Storage Permission Issues

```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

On Windows (run as Administrator):
```bash
php artisan storage:link
```

### Clear Cache

```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
```

### Regenerate Autoload

```bash
composer dump-autoload
```

---

## License

This project is open-sourced software.
