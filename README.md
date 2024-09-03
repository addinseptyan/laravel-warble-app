# Warble App

Warble is a web application built with Laravel that integrates with Laravel Breeze for authentication and scaffolding. The app implements full CRUD (Create, Read, Update, Delete) functionality, allowing users to interact seamlessly with the data.

## Features

- **Laravel Breeze Integration:** Provides a simple, clean, and customizable authentication layer.
- **CRUD Operations:** Full support for creating, reading, updating, and deleting records.
- **Responsive Design:** A mobile-first approach ensures usability across all devices.
- **Scalable Architecture:** Built with Laravel's best practices for scalability and performance.

## Preview

https://github.com/user-attachments/assets/3f6135c8-5072-4c16-a58b-0bf75618dc31

## Getting Started

Follow the instructions below to clone and set up the project on your local machine.

### 1. Clone the Repository

First, clone the repository to your local machine:

```bash
git clone https://github.com/addinseptyan/laravel11-livewire3-todo.git
```

```bash
cd repository-name
```

### 2. Install Dependencies

Next, install the required PHP and Node.js dependencies:

```bash
composer install
```

```bash
npm install
```

### 3. Configure Environment Variables

Copy the \`.env.example\` file to \`.env\` and set up your environment variables:

```bash
cp .env.example .env
```

Generate a new application key:

```bash
php artisan key:generate
```

### 4. Set Up the Database

Update the \`.env\` file with your database configuration:

```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Run the database migrations:

```bash
php artisan migrate
```

### 5. Start the Development Server

Finally, serve the application locally:

```bash
php artisan serve
```

```bash
npm run dev
```

Open your browser and navigate to:

```
http://localhost:8000
```
