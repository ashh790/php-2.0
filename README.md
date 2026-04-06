# Project Management CRUD (PHP + MySQL)

This project is a simple CRUD (Create, Read, Update, Delete) application built using PHP, MySQL, and Bootstrap. It allows users to manage project records through a clean and responsive interface.

## Features

* Add new projects with name, description, status, start date, and end date
* View all projects in a structured table
* Update project status
* Delete projects using ID
* Clean Bootstrap UI for better user experience
* Uses prepared statements for secure database operations

## Technologies Used

* PHP (Core PHP)
* MySQL / MariaDB
* Bootstrap 5
* HTML & CSS

## Database Structure

Table: `project`

* id (INT, Primary Key, Auto Increment)
* project_name (VARCHAR)
* project_desc (VARCHAR)
* status (ENUM: pending, in-progress, completed)
* start_date (DATE)
* end_date (DATE)

## How It Works

Users can add project details using the form. The data is stored in the MySQL database. All records are displayed in a table where users can update the status or delete a project by entering its ID.

## Purpose

This project was built to understand the fundamentals of CRUD operations, database connectivity in PHP, and building a simple full-stack application.

## Future Improvements

* Edit button with auto-fill form
* Search and filter functionality
* Better validation and error handling
* User authentication system
