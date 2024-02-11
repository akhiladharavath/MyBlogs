# MyBlogs

MyBlogs is a blogging platform where users can create and share their posts.

## Getting Started

To run the MyBlogs application locally, follow these instructions.

### Prerequisites

Before you begin, ensure you have met the following requirements:

- You have installed PHP and MySQL on your local machine.
- You have a web browser to test the application.

### Installation

1. Clone the repository to your local machine:

```sh
git clone https://github.com/akhiladharavath/MyBlogs.git
```

####  Set up the database by logging into your MySQL server and running the following command

CREATE DATABASE blogs;
USE blogs;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE posts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);


#### Update the file with your MySQL username, password, and the name of the database you created earlier:


// Example configuration settings
define('DB_HOST', 'localhost');
define('DB_USER', '<YourDatabaseUsername>');
define('DB_PASS', '<YourDatabasePassword>');
define('DB_NAME', 'blogs');

#### Running the Application with the PHP Built-in Server

To run the application on your local machine, follow these steps:

1. Open your terminal or command prompt.
2. Navigate to the project directory where you have cloned the MyBlogs repository:

```sh
cd path/to/MyBlogs 
```
3. Enter the following command 

` php -S localhost:8000 -t public `.

#### Registration and Login

MyBlogs allows new users to register and existing users to log in. Follow these steps to use these features:

1. With the application running, navigate to the registration page in your web browser. The URL will typically be something like `http://localhost:8000/users/register`.

2. Fill in the required fields with your information and submit the form to create a new user account.

3. After successful registration, you will be redirected to the login page. Enter your credentials to log in to the application.

4. Once logged in, you will be redirected to the homepage where you can start creating and managing your blog posts.
Remember to a