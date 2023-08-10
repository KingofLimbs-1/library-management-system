# Library Management System

## Overview

### <ins>Introduction</ins>

Welcome to the documentation of this library management system. In this section, I will be outlining the the **goals**, **capabalities**, and **significance** of the project.

### <ins>Goals and Objectives</ins>

This library management system aims to address these specific challenges and provide an efficient solution:

- Create an efficient inventory management system for the local library.

- This system should assist librarians and members belonging to the library, in finding books online without having to physically be at the library.

### <ins>Capabilities</ins>

#### Librarian

- Manage members, books, and admins within the system.

- All done within the librarian-specific view of the site.
- Through various CRUD operations (**C**reate, **R**ead, **U**pdate, and **D**elete).

- In the context of members, librarians have the following privileges:

1. View all members
2. See how many books a member has rented out at a time.
3. View all the books a member has rented out at any given time.
4. Suspending members if books are overdue.

- In the context of books, librarians have the following privileges:

1. View books in the system.
2. Add books to the system.
3. Update books in the system.
4. Delete books in the system.

- In the context of other admins, librarians have the following privileges:

1. View admins in the system.
2. Add admins to the system.

#### Member

- View books in the library, and interact with them in the form of borrowing, "reading", and returning them.

- All done within the member-specific view of the site.

### <ins>Benefits and Significance</ins>

This library management system offers several benefits:

- Efficiency - Simplifies resource management, reducing manual effort and potential errors.

- Ease of Access - Provides a simple and user-friendly interace to interact with the library's data.

- Data Insights - Provides detailed information on data collections (users, books, admins) in readable formats.

## Database Schema

### <ins>Introduction</ins>

This section outlines the structure and organization of the database used in this library management system project.

It provides an overview of the tables, relationships, and key components that store and manage the library's data.

### <ins>Entity-Relationship Diagram (ERD)</ins>

![librarySchema](https://github.com/KingofLimbs-1/library-management-system/assets/99418553/3ca9d977-418c-4e6d-95b8-3d03f49d46e4)



## <ins>Tables and Fields</ins>

### Users

- Table name: users
- Purpose: Table used to store all the data related to the user of the system, whether it be a librarian or member.

##### Table Structure

| Name         | Type         | Constraints | Default |
| ------------ | ------------ | ----------- | ------- |
| user_id      | int(11)      | Primary 🔑  | None    |
| name         | varchar(100) | None        | None    |
| email        | varchar(100) | None        | None    |
| password     | varchar(60)  | None        | None    |
| is_admin     | tinyint(1)   | None        | None    |
| rental_count | int(11)      | None        | 0       |
| status       | varchar(20)  | None        | active  |

##### Relationships

- user_id - "One to one" relationship with **borrowings** table.

### Books

- Table name: books
- Purpose: Table used to store all the data related to the books stored in the system.

##### Table Structure

| Name        | Type         | Constraints | Default |
| ----------- | ------------ | ----------- | ------- |
| book_id     | int(11)      | Primary 🔑  | None    |
| title       | varchar(100) | None        | None    |
| author      | varchar(100) | None        | None    |
| img_path    | varchar(255) | None        | None    |
| isbn        | varchar(20)  | None        | None    |
| borrow_date | datetime     | None        | None    |
| return_date | datetime     | None        | None    |

##### Relationships

- book_id - "One to one" relationship with **borrowings** table.

### Borrowings

- Table name: borrowings
- Purpose: Table used to store all the data related to the books that have been borrowed by users in the system.

##### Table Structure

| Name         | Type     | Constraints | Default |
| ------------ | -------- | ----------- | ------- |
| borrowing_id | int(11)  | Primary 🔑  | None    |
| user_id      | int(11)  | Foreign 🔑  | None    |
| book_id      | int(11)  | Foreign 🔑  | None    |
| borrow_date  | datetime | None        | None    |
| return_date  | datetime | None        | NULL    |

##### Relationships

- user_id - "One to one" relationship with **users** table.
- book_id - "One to one" relationship with **books** table.

## Database Setup

Prerequisites
Before setting up the database, ensure that you have the following installed:

- XAMPP or MAMP for creating a local server environment.
- Visual Studio Code for code editing.

### <ins>Steps to Set Up the Database</ins>

1. #### Clone the Repository:

Clone this project repository to your local machine using Git. Open your terminal and run the following command:

```
git clone https://github.com/your-username/your-repo.git
```

2. #### Start XAAMP/MAMP:

   Open XAMPP or MAMP and start the Apache and MySQL services. This will create a local server environment to run your application.

3. #### Import the database:

Locate the SQL copy of the database (library.sql) in the project directory. Use a tool like phpMyAdmin or the command line to import the database into your local MySQL server.

- #### Using phpMyAdmin:

- Open a web browser and navigate to http://localhost/phpmyadmin.
- Create a new database with a suitable name.
- In the newly created database, navigate to the "Import" tab.
- Choose the SQL file (your-database.sql) and click "Go" to import the database.

- #### Using Command Line:

Open a terminal and navigate to the project directory containing 'library.sql'.

Run the following command to import the database:

```
mysql -u root -p your_database_name < library.sql
```

- You will be prompted to enter your MySQL password.

4. #### Configure Connection:

1. In your project codebase, open the file where the database connection details are stored. This is in the config/database.php file.

1. Create a new config.php file in the root directory of the project, and add the following code, replacing placeholders with your own credentials:

```
<?php
define("DB_HOST", "localhost");
define("DB_USERNAME", "your_username");
define("DB_PASSWORD", "your_password");
define("DB_NAME", "your_database_name");
?>
```

3. Save the 'config.php' file.

4. In the project codebase, look for the database.php file where the connection is established. Require the config.php file by adding this line at the beginning:

```
require_once(__DIR__ . '/config.php');
```

5. #### Test the Application:

Start your application in the local server environment provided by XAMPP/MAMP. Access the application in your web browser and verify that it is connected to the local database.


## Login Credentials

#### These can be used to browse the site in either view...

#### <ins>Librarian</ins>

- Name: Cheryl Mason
- Email: cheryl.mason@example.com
- Password: Silent@789


#### <ins>Member</ins>

- Name: Harry Mason
- Email: harry.mason@example.com
- Password: SH_User@123
