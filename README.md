# 🧑‍💼 Laravel Job Portal

A Laravel-powered Job Portal application that allows admins to manage job postings and applicants, and lets users browse and apply for jobs.

---

## 🚀 Features

### Admin Panel

-   Login & Logout
-   Create, update, delete job postings
-   View list of applicants per job
-   Dashboard summary: total jobs & applicants

### Public Users

-   View job listings and details
-   Apply for a job (name, email, phone, resume upload)
-   Register and manage profile

---

## 🛠️ Tech Stack

-   **Laravel 10+**
-   **Tailwind CSS**
-   **Alpine.js**
-   **MySQL**
-   **Vite** (for frontend asset bundling)
-   **Laravel Breeze** (for authentication scaffolding)

---

## 📦 Requirements

-   PHP >= 8.1
-   Composer
-   MySQL / MariaDB
-   Node.js & npm
-   Laravel CLI (optional)

---

## ⚙️ Installation

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/job-portal.git
cd job-portal
```
2. Install PHP Dependencies
bash
Copy
Edit
composer install
3. Install Node Dependencies
bash
Copy
Edit
npm install && npm run dev
4. Setup Environment
bash
Copy
Edit
cp .env.example .env
php artisan key:generate
Update your .env file with your database credentials:

ini
Copy
Edit
DB_DATABASE=jobportal
DB_USERNAME=root
DB_PASSWORD=your_password
5. Run Migrations
bash
Copy
Edit
php artisan migrate
6. Link Storage
bash
Copy
Edit
php artisan storage:link
7. Start Development Server
bash
Copy
Edit
php artisan serve
Visit: http://localhost:8000
