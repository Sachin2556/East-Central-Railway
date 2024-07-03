
# East Central Railway Website

## Project Overview

**This project involves designing and developing a website for East Central Railway.** The website consists of multiple pages, a responsive navigation bar, and an administration panel for managing administrative users. The primary technologies used in this project are HTML, CSS, JavaScript, PHP, and MySQLi for the database.

## Features

1. **Home Page**:
   - Designed using HTML, CSS and JAVASCRIPT.
   - Includes a responsive navigation bar with links to other pages.
   - Informative sections about East Central Railway.

2. **Navigation Bar**:
   - Links to Home, email, Services, Contact, Administration pages and a lot of things.
   - Responsive design for better usability on various devices.

3. **Administration Login Page**:
   - A secure login page designed using HTML, CSS, and PHP.
   - Requires email ID and password for login.
   - Authentication against credentials stored in the MySQLi database.

4. **Admin Panel**:
   - Accessible after successful login.
   - Allows the addition of new administrators.
   - Displays a list of all administrators with options to edit and delete entries.
   - All changes are directly reflected in the MySQLi database.

## Technologies Used

- **HTML**: For structuring the web pages.
- **CSS**: For styling the web pages.
- **JavaScript**: For enhancing interactivity and responsiveness.
- **PHP**: For server-side scripting and database interaction.
- **MySQLi**: For database management and queries.

## Project Structure

project-directory/
│
├── index.html # Home page
|
├── dashboard.html # Dashboard page
|
├── email.html # Email page
|
|
├── contact.html # Contact page
|
├── admin-login.html # Administration login page
|
├── admin-panel.php # Admin panel page
|
|
├── css/
|
│ └── styles.css # CSS file for styling
|
├── js/
|
│ └── script.js # JavaScript file for interactivity
|
├── php/
|
│ ├── login.php # PHP script for login authentication
|
│ ├── register.php # PHP script for adding new administrators
|
│ ├── register-edit.php # PHP script for editing administrators
|
|
│ └── delete-admin.php # PHP script for deleting administrators
|
└── db/
|
└── database.php # PHP script for database connection



## Database Structure

- **Administrators Table**:
  - `id` (INT, Primary Key, Auto Increment)
  - `email` (VARCHAR)
  - `password` (VARCHAR)

## Setup Instructions

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/yourusername/east-central-railway.git
2. **Set Up the Database**:

    .Create a MySQL database.
    .Import the SQL file (db/database.sql) to set up the necessary tables.
   
 3. **Configure Database Connection**:

      . Update the php/database.php file with your database credentials.
    
 4. **Run the Server**:

     . Ensure you have a local server setup (like XAMPP or WAMP).
    .Place the project directory in the server's root directory.
     .Access the website via your browser (e.g., http://localhost/east-central-railway).

   ## Usage
   
 1. **Navigate the Website**:

      . Use the navigation bar to explore different pages.
    
 2.  **Administration Login**:

     . Access the login page via the Administration link in the navbar.
   . Enter the credentials to log in.
4. **Admin Panel**:

    . Add, edit, and delete administrators via the admin panel.
    .  All changes are automatically updated in the database.


  ## Contribution
  
   .Feel free to fork this project and submit pull requests. 
      For major changes, please open an issue to discuss what you would like to change.

  ## License
  
   .This project is open-source and available under the MIT License.


 Happy coding!
