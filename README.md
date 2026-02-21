# Library Book Management System

This project is a **Midterm Laboratory Exam** submission for a Laravel course. It is a web application that implements full CRUD (Create, Read, Update, Delete) functionality for managing a collection of library books.

## Objective

The primary objective was to develop a Laravel web application demonstrating proficiency in:

- MVC (Model-View-Controller) architecture
- Eloquent ORM for database interactions
- Resource Controllers and `Route::resource()` for routing
- Blade templating engine for views
- Form validation for data integrity

---

## Features

### Core Requirements

- **Create**: A form to add a new book to the library, with validation to ensure all fields are filled correctly.
- **Read**: A main page that displays all books in a paginated table format.
- **Update**: An edit form, pre-filled with the book's current data, allowing for updates with validation.
- **Delete**: A delete function with a JavaScript confirmation prompt to prevent accidental deletion.

### Bonus Features Implemented

- **Bootstrap Styling**: The application is styled using Bootstrap 5 for a clean and responsive user interface.
- **Search**: A search bar on the main page to filter books by `title` or `author`.
- **Pagination**: The list of books is paginated, displaying 5 books per page.
- **Flash Messages**: User-friendly success messages are displayed after a book is successfully added, updated, or deleted.

---

## Technical Stack

- **Backend**: PHP 8.1+, Laravel 12.x
- **Frontend**: HTML, Bootstrap 5
- **Database**: MySQL

---

## Setup and Installation

Follow these instructions to get the project up and running on your local machine.

### Prerequisites

- PHP (>= 8.1)
- Composer
- A local web server environment (e.g., Laravel Herd, XAMPP, Laragon)
- MySQL Database Server

### Installation Steps

1.  **Unzip the Project**

    Extract the provided zipped project folder to your desired location.

2.  **Navigate to Project Directory**

    Open your terminal or command prompt and navigate into the project's root directory.

    ```sh
    cd path/to/lib-sys
    ```

3.  **Install Dependencies**

    Run Composer to install the required PHP packages.

    ```sh
    composer install
    ```

4.  **Environment Configuration**

    Create a copy of the `.env.example` file and name it `.env`. Then, generate a new application key.

    ```sh
    copy .env.example .env
    php artisan key:generate
    ```

5.  **Database Setup**
    - Create a new MySQL database named `lib_sys`.
    - Open the `.env` file and update the database connection details as follows:
        ```env
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=lib_sys
        DB_USERNAME=root
        DB_PASSWORD=
        ```

6.  **Run Migrations**

    Execute the migration command to create the `books` table in your database.

    ```sh
    php artisan migrate
    ```

7.  **Serve the Application**

    Start the local development server.

    ```sh
    php artisan serve
    ```

    You can now access the application at **http://127.0.0.1:8000** in your web browser.

---

## Screenshots

_(Please add your screenshots here for List, Add, and Edit pages as required for the submission.)_

### Book List (with Search and Pagination)

!Book List

### Add New Book Form

!Add Book

### Edit Book Form

!Edit Book
