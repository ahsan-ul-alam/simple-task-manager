# 🧩 Task Management System

**Technical Assessment – Full Stack Laravel Developer (Qtec Solution Limited)**

---

## 📌 Overview

This project is a simple and clean task management system built using Laravel.
It allows users to create, update, and delete tasks while tracking their progress through different statuses.

The goal of this assessment was not to build a complex system, but to deliver a **well-structured, reliable, and maintainable solution** with proper validation, authorization, and testing.

---

## 🚀 Features

- User Authentication (Laravel Breeze)
- Create Task
- Update Task
- Delete Task
- Task Status Management (Pending, In Progress, Completed)
- Task Priority (Low, Medium, High)
- Due Date Support
- Clean and responsive UI (Tailwind CSS)
- Authorization (users can only manage their own tasks)
- Form validation
- Feature testing using Pest

---

## 🛠️ Tech Stack

- **Backend:** Laravel (PHP)
- **Frontend:** Blade + Tailwind CSS
- **Authentication:** Laravel Breeze
- **Database:** SQLite / MySQL
- **Testing:** Pest (Feature Testing)

---

## ⚙️ Installation & Setup

### 1. Clone the repository

```bash
git clone https://github.com/ahsan-ul-alam/simple-task-manager.git
cd simple-task-manager
```

---

### 2. Install dependencies

```bash
composer install
npm install
```

---

### 3. Environment setup

```bash
cp .env.example .env
php artisan key:generate
```

---

### 4. Database setup

For SQLite (recommended for quick setup):

```bash
touch database/database.sqlite
```

Update `.env`:

```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

---

### 5. Run migrations

```bash
php artisan migrate
```

---

### 6. Run the application

```bash
npm run dev
php artisan serve
```

Open:
👉 http://127.0.0.1:8000

---

## 🧪 Testing

This project includes feature tests covering the core task workflow.

### Covered test cases:

- Authenticated user can create a task
- Task validation (e.g., title is required)
- User can update their own task
- User can delete their own task
- User cannot access or modify another user's task

### Run tests:

```bash
php artisan test
```

---

## 🔐 Authorization Logic

- Each task belongs to a specific user
- Users can only:
    - View their own tasks
    - Edit their own tasks
    - Delete their own tasks

- Unauthorized access is prevented using query constraints

---

## 🧠 Design Decisions

- Used **Blade instead of SPA frameworks** to keep the solution simple and fast
- Focused on **core functionality and reliability**
- Used **Eloquent relationships** for clean data handling
- Applied **validation rules** for all inputs
- Implemented **feature tests** for critical flows
- Avoided unnecessary complexity (e.g., roles, teams, notifications)

---

## 📂 Project Structure (Important Parts)

```
app/
 └── Http/Controllers/TaskController.php

app/
 └── Models/Task.php

resources/views/tasks/
 ├── create.blade.php
 ├── edit.blade.php
 └── _form.blade.php

tests/Feature/
 └── TaskManagementTest.php
```

---

## 🔮 Possible Improvements

If extended further, the system could include:

- Task filtering (by status)
- Search functionality
- Pagination
- Task assignment (multi-user/team support)
- Notifications or reminders
- Activity logs
- API version (RESTful endpoints)

---

## 🎥 Demo

Loom Video: _https://www.loom.com/share/ae43ce0c7d9645aea1a869030633f29f_

---

## 💬 Final Note

This project focuses on:

- Clean and readable code
- Proper structure and organization
- Reliable functionality
- Real-world development practices

> I focused on building a clean, reliable, and testable system rather than adding unnecessary complexity.

---

## 👨‍💻 Author

**Md. Ahsan Ul Alam**
Full Stack Web Developer
Laravel | React.js | Next.js | Tailwind

---
