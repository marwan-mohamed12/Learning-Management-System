## Laravel Basic Learning Management System (LMS)

This repository contains a basic Learning Management System (LMS) built with Laravel. This application provides user registration, course management, and a contact form for users to reach the admin.

- [Live Demo](https://learning-management-system-production.up.railway.app/)
- Video Demo

https://github.com/marwan-mohamed12/Learning-Management-System/assets/40841193/3697f67c-b7a2-47ab-bc0f-ffb12589a8d4

**Features:**

- **User Registration & Authentication:**
    - Allows users to register with their name, email, and password.
    - Secure authentication system for user login.
    - Redirects authenticated users to a dashboard.
- **Course Management:**
    - CRUD operations for courses (Create, Read, Update, Delete).
    - Courses have title, description, start date, and end date.
    - Only authenticated users can manage courses.
- **Contact Form:**
    - Enables users to submit their name, email, and message via a contact form.
    - Sends an email with the form details to a specified admin email.

**Getting Started:**

1. **Clone the repository:**
   ```bash
   git clone https://github.com/marwan-mohamed12/Learning-Management-System.git
   ```
2. **Install dependencies:**
   ```bash
   cd laravel-lms
   composer install
   ```
3. **Make .env file:**
   ```bash
   cp .env.example .env
   ```
   
4. **Generate Key:**
   ```bash
   php artisan key:generate
   ```
   
5. **Set up your database:**
   - Create a new database for the application.
   - Configure your database credentials in the `.env` file.
   - Run database migrations:
     ```bash
     php artisan migrate
     ```
6. **Set up the email configuration:**
   - Configure your email settings in the `.env` file.
   - Ensure that you have set the `MAIL_FROM_ADDRESS` to the desired admin email address.
     
7. **Start the development server:**
   ```bash
   php artisan serve
   ```
8. **Access the application:**
   - Open your web browser and visit `http://localhost:8000`.

**Instructions:**

- **User Registration:** Go to the registration page and fill in the required details to create an account.
- **User Verification:** After registration, you'll receive an email with a verification link. Click the link to activate your account and gain access to the platform.
- **Login:** Use your registered credentials to log in.
- **Course Management:** Navigate to the dashboard and you will find options to create, view, edit, and delete courses.
- **Contact Form:** Use the contact form to reach the admin.

**Note:**

- You can customize the application further by adding more features and functionalities.
- The `app/Mail/ContactFormEmail.php` file contains the email template for the contact form. You can modify it according to your needs.

**Contributing:**

Contributions are welcome! Please feel free to open an issue or submit a pull request if you find any bugs or have suggestions for improvement.

**License:**

This project is licensed under the MIT License.
