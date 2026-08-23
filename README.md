# 🐘 PHP MVC Application

A simple Model-View-Controller (MVC) application built with native PHP to understand the fundamentals of the architecture without using an external framework.

---

## 🚀 Features

* **MVC Architecture**: Clean separation of concerns.
* **Custom Routing**: Directs URLs to specific controllers and actions.
* **Core Components**: Native Controllers, Models, and Views.
* **Composer Autoloading**: Uses PSR-4 standard for automatic class loading.
* **Session Management**: Session handling across pages.
* **Authentication**: Complete user Register and Login system.
* **Form Validation**: Server-side input validation and error handling.
* **Database Layer**: PDO-based database layer with MySQL.
* **URL Rewriting**: Apache `.htaccess` configuration for clean URLs.

---

## 🛠️ Tech Stack

* **Backend**: PHP, Composer
* **Database**: MySQL, PDO
* **Frontend**: HTML5, CSS3, JavaScript, Bootstrap
* **Server**: Apache

---

## 📁 Project Structure

```text
php-mvc/
├── app/
│   ├── controllers/
│   ├── core/
│   ├── models/
│   └── views/
├── public/
│   ├── index.php
│   └── .htaccess
├── vendor/
├── composer.json
└── README.md
```

---

## 💻 Setup Instructions

Follow these steps to set up the project locally:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/ABDOKARAM22/php-mvc.git
   ```

2. **Install dependencies:**
   ```bash
   composer install
   ```

3. **Configure Database:**
   * Set up your MySQL database details in the application configuration file.

4. **Configure Apache:**
   * Point your Apache Virtual Host DocumentRoot to the `public/` directory:
     ```text
     php-mvc/public
     ```

5. **Update Hosts File (Windows):**
   * Add the following line to your `C:\Windows\System32\drivers\etc\hosts` file:
     ```text
     127.0.0.1 php-mvc.local
     ```

6. **Access the App:**
   * Open your browser and navigate to: [http://php-mvc.local/](http://php-mvc.local/)

---

## 🎯 Purpose

This project was built to practice native PHP MVC concepts and understand the fundamental architecture that powers modern frameworks like **Laravel**.

---

## 👤 Author

* **Abdelrahman Karam**
* **GitHub**: [@ABDOKARAM22](https://github.com/ABDOKARAM22)
