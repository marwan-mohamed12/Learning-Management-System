## Laravel Basic Learning Management System (LMS)

This repository contains a basic Learning Management System (LMS) built with Laravel. This application provides user registration, course management, and a contact form for users to reach the admin.

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
   git clone https://github.com/your-username/laravel-lms.git
   ```
2. **Install dependencies:**
   ```bash
   cd laravel-lms
   composer install
   ```
3. **Set up your database:**
   - Create a new database for the application.
   - Configure your database credentials in the `.env` file.
   - Run database migrations:
     ```bash
     php artisan migrate
     ```
4. **Set up the email configuration:**
   - Configure your email settings in the `.env` file.
   - Ensure that you have set the `MAIL_FROM_ADDRESS` to the desired admin email address.
5. **Start the development server:**
   ```bash
   php artisan serve
   ```
6. **Access the application:**
   - Open your web browser and visit `http://localhost:8000`.

**Instructions:**

- **User Registration:** Go to the registration page and fill in the required details to create an account.
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
