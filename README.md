# Week 6 PHP Project – Forms, Uploads, Cookies, and Sessions

## Overview

This project demonstrates basic PHP functionalities including:

- Form handling with JavaScript validation
- File uploads
- Cookies
- User authentication and sessions

It contains multiple PHP files that cover different aspects of web programming.

---

## Files and Description

### 1. `form-javascript.php`
- A simple HTML form with JavaScript validation.
- Ensures that the "Name" field is not empty before submission.
- Displays a greeting using PHP after the form is submitted.

### 2. `gallery-upload.php`
- HTML form to upload images.
- Submits the image file to `gallery.php` for processing.

### 3. `gallery.php`
- Handles image uploads and stores them in the `uploads/` directory.
- Displays the uploaded image after submission.

### 4. `cookietest.php`
- Demonstrates setting and reading cookies in PHP.
- Sets a cookie named `user` with the value `Student`.
- Displays the cookie value if it is set.

### 5. `login.inc.php`
- Contains the valid username and password for login (`admin` / `1234`).
- Used by `login.php` to authenticate users.

### 6. `login.php`
- Login page with PHP session handling.
- Authenticates users using the credentials in `login.inc.php`.
- Redirects authenticated users to `protected.php`.

### 7. `protected.php`
- Protected page accessible only to logged-in users.
- Displays a welcome message and a logout link.

### 8. `logout.php`
- Destroys the current session and logs out the user.
- Redirects back to `login.php`.

---

## Installation and Setup

1. Clone this repository to your local machine:

```bash
git clone <[repository-url](https://github.com/SreytouchLang/Week6-PHP-Project-Forms)>

Thank you !!
