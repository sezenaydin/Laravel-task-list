# Task List Application

This project is a task management application developed using Laravel, Alpine.js, Tailwind CSS, and MySQL. Users can add, delete, and update tasks.

## Features
- Backend developed with Laravel framework
- Modern and stylish UI design with Tailwind CSS
- Dynamic components using Alpine.js
- MySQL database integration
- Task addition, deletion, and updating
- Pagination support

## Installation
1. **Clone the Repository:**

   git clone https://github.com/sezenaydin/task-list.git
   cd tasklist


2. **Install Dependencies:**

   composer install
   npm install


3. **Configure the .env File:**

   cp .env.example .env

   Then open the `.env` file and update your database credentials.

4. **Run Database Migrations:**

   php artisan migrate --seed


5. **Generate Application Key:**

   php artisan key:generate


6. **Start the Development Server:**

   php artisan serve

   The application will be accessible at `http://127.0.0.1:8000` by default.

## Usage
- **Task List:** View all tasks.
- **Add Task:** Create a new task.
- **Edit Task:** Modify existing tasks.
- **Delete Task:** Remove tasks you no longer need.
- **Mark as Completed:** Mark tasks as completed.




