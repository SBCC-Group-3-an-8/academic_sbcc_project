# ERP for Student Feedback Management

A robust Enterprise Resource Planning (ERP) system designed to streamline the student feedback process, course management, and progress tracking. Built collaboratively using Laravel (backend) and React (frontend), the platform offers an intuitive and seamless user experience.

## 🚀 Features

- **Feedback Management:** Efficiently collect and manage student feedback for courses, faculty, and overall program effectiveness.
- **Course Management:** Track and update course details with ease.
- **Progress Tracking:** Provide insights into students' academic and feedback progress.
- **Responsive Design:** User-friendly interface optimized for both desktop and mobile.
- **Seamless Integration:** Backend and frontend integration ensuring smooth functionality.
- **Secure Authentication:** Role-based access for administrators, faculty, and students.

## 🛠️ Tech Stack

### Backend:
- **Laravel:** PHP-based framework for backend development.
- **MySQL:** Database for storing and managing data.

### Frontend:
- **React:** JavaScript library for building dynamic user interfaces.
- **Bootstrap:** For responsive and modern design elements.

## 🏗️ Project Architecture

### Frontend (React):
- Designed a responsive UI with React components.
- Utilized state management for handling feedback forms and progress tracking.

### Backend (Laravel):
- Developed APIs for user authentication, feedback submission, and data retrieval.
- Implemented logic for aggregating and analyzing feedback data.

### Integration:
- Ensured smooth communication between React and Laravel via RESTful APIs.

## ⚙️ Installation and Setup

### Prerequisites:
- Node.js (v14+)
- Composer
- PHP (v7.4+)
- MySQL (v8.0+)

### Steps:

1. **Clone the Repository:**

    ```bash
    git clone https://github.com/your-username/erp-student-feedback.git
    cd erp-student-feedback
    ```

2. **Backend Setup (Laravel):**

    ```bash
    cd backend
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan migrate --seed
    php artisan serve
    ```

3. **Frontend Setup (React):**

    ```bash
    cd frontend
    npm install
    npm start
    ```

### Access Application:

- Open [http://localhost:3000](http://localhost:3000) for the frontend.
- Open [http://localhost:8000](http://localhost:8000) for API testing.

## 🌟 Key Contributions

### Backend Development:
- Created secure APIs for core functionalities.
- Optimized database queries for faster response times.

### Frontend Development:
- Built dynamic components for intuitive user interaction.
- Implemented feedback and course management features.

### Project Documentation:
- Maintained detailed documentation for smooth collaboration.
- Created comprehensive README files for project repositories.
