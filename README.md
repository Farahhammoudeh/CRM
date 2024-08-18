# CRM System

## Overview
This project is a simple CRM (Customer Relationship Management) system built with Laravel 11. It includes functionality for managing users, clients, projects, and tasks. Users can view, create, edit, and delete projects and tasks.

## Features
- **User Management**: Login and registration functionalities.
- **Client Management**: Add and manage clients within the system.
- **Project Management**:
- View all projects.
- Create new projects.
- Edit existing projects.
- Delete projects.
- **Task Management**:
- View tasks associated with projects.
- Create new tasks.
- Edit existing tasks.
- Delete tasks.

## Requirements
- **PHP**: 8.1 or higher
- **Composer**
- **Laravel**: 11.x
- **Database**: MySQL, PostgreSQL, SQLite, or any other supported by Laravel

## Installation

### Clone the Repository:
```git clone https://github.com/yourusername/your-repository.git```

### Navigate to the Project Directory:
```cd your-repository```

### Install PHP Dependencies:
```composer install```

### Install JavaScript Dependencies:
```npm install```

## Set Up the Environment File:

### Copy the example environment file:
```cp .env.example .env```

### Generate the application key:
```php artisan key:generate```

### Configure the Database:
Open the .env file and update the database connection settings.

### Run Migrations:
```php artisan migrate```

### Seed the Database (if applicable):
```php artisan db:seed```

## Start the Development Servers:

### Laravel Development Server:
```php artisan serve```

### Vite Development Server (in a new terminal window):
```npm run dev```

### Access your application at http://localhost:8000.

## Usage
- Login/Registration: Create an account or log in to manage clients, projects, and tasks.
- Client Management: Add new clients and view the list of all clients.
- Project Management: Create, view, update, and delete projects.
- Task Management: Create, view, update, and delete tasks associated with projects.

## Contributing
If you'd like to contribute to this project, please fork the repository and use a feature branch. Pull requests are welcome.

## License
This project is open-source and available under the MIT License.