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
# 🧑‍💼 Laravel Job Portal Setup Guide

A Laravel-based Job Portal application where admins can manage jobs and applicants, and users can apply for jobs online.

---

## ⚙️ Installation Steps

### 1. Install PHP Dependencies

```bash
composer install
```
### 2. Install Node Dependencies

```bash
npm install && npm run dev
```
### 3. Setup Environment

```base
cp .env.example .env
php artisan key:generate
```
Update your .env file with your database credentials:

```base
DB_DATABASE=jobportal
DB_USERNAME=root
DB_PASSWORD=your_password
```
### 4. Run Migrations

```base
php artisan migrate
```
### 5. Link Storage

```bash
php artisan storage:link
```
### 6. Start Development Server

```bash
php artisan serve
```
### 7. Project Structure
| Path                                           | Purpose               |
| ---------------------------------------------- | --------------------- |
| `app/Models/Jobmodel.php`                      | Job postings          |
| `app/Models/Applicant.php`                     | Applicant data        |
| `app/Http/Controllers/Admin/JobController.php` | Admin job management  |
| `app/Http/Controllers/ApplicantController.php` | Job application logic |
| `resources/views/`                             | Blade view files      |
| `routes/web.php`                               | Web routes            |


### 8. Example Route

| Route                       | Description             |
| --------------------------- | ----------------------- |
| `/`                         | Public job listing      |
| `/dashboard`                | Admin dashboard         |
| `/admin/jobs`               | Manage job listings     |
| `/admin/jobs/create`        | Add a new job           |
| `/admin/jobs/applicantlist` | View all applicants     |
| `/jobs/{id}`                | Job detail & apply form |

### 9. Limitations
- No role middleware yet (manual admin assignment if needed)
- Basic file validation (should be improved)
- No advanced filtering or search
- Resume uploads stored in storage/app/public/resumes

### 10. Screenshot
![image](https://github.com/user-attachments/assets/10112416-7f1a-48eb-b5cc-04fdffbfad3e)


  ### Author
Rajesh Sada
📧 itrajeshsada@gmail.com


