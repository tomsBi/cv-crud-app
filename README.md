# CV CRUD Application

This is a simple CRUD (Create, Read, Update, Delete) application for managing CVs (Curriculum Vitae). The application is built using Laravel 10 and styled with Tailwind CSS.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)

## Requirements

Make sure you have the following software installed on your machine:

- **Laravel 10:** [Installation Guide](https://laravel.com/docs/10/installation)
- **Composer:** [Download and Install Composer](https://getcomposer.org/download/)
- **Node.js and NPM:** [Download and Install Node.js and NPM](https://nodejs.org/)
- **MySQL Database:** [Download and Install MySQL](https://dev.mysql.com/downloads/)
- **Tailwind CSS:** No additional installation required.

## Installation

1. **Clone the Repository:**

    ```bash
    git clone https://github.com/tomsBi/cv-crud-app.git
    cd cv-crud-app
    ```

2. **Install Composer Dependencies:**

    ```bash
    composer install
    ```

3. **Copy the Environment File:**

    ```bash
    cp .env.example .env
    ```

4. **Generate Application Key:**

    ```bash
    php artisan key:generate
    ```

5. **Configure Database:**

    - Open the `.env` file and update the database configuration with your MySQL credentials.

6. **Run Migrations:**

    ```bash
    php artisan migrate
    ```

7. **Install NPM Dependencies:**

    ```bash
    npm install
    ```

8. **Compile Assets:**

    ```bash
    npm run dev
    ```

9. **Serve the Application:**

    ```bash
    php artisan serve
    ```

10. **Access the Application:**

    Open your browser and go to http://127.0.0.1:8000/resumes to access the application.