# Game Manager API

This is a Laravel 10-based API project for managing game-related data.

## Prerequisites

Before setting up the project, ensure you have the following installed:

- [PHP 8.1+](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/download/)
- [Laravel 10](https://laravel.com/docs/10.x/installation)
- [MySQL or PostgreSQL]\([https://www.mysql.com/](https://www.mysql.com/) or [https://www.postgresql.org/](https://www.postgresql.org/))
- [Node.js & npm](https://nodejs.org/en/download/) (for frontend assets if needed)

## Installation

### Step 1: Clone the Repository (if applicable)

```sh
# If using a repository
git clone https://github.com/your-repo/game-manager-api.git
cd game-manager-api
```

### Step 2: Create a New Laravel Project (if not cloned)

```sh
composer create-project laravel/laravel:^10.2 game-manager-api
cd game-manager-api
```

### Step 3: Install Dependencies

```sh
composer install
```

### Step 4: Copy Environment File

```sh
cp .env.example .env
```

### Step 5: Generate Application Key

```sh
php artisan key:generate
```

### Step 6: Configure Environment Variables

Edit the `.env` file and configure database settings:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Step 7: Run Database Migrations

```sh
php artisan migrate
```

### Step 8: Start Development Server

```sh
php artisan serve
```

This will start the Laravel development server at `http://127.0.0.1:8000/`.

## Next Steps

- Set up authentication and routes
- Implement controllers and models
- Test API endpoints using Postman or Laravel's built-in tools

---
