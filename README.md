# 🎮 PixelVault Games

### A Modern Video Game Store Website Built with PHP

PixelVault Games is a video game storefront developed using **PHP, HTML, and CSS**. The website features a modern dark-themed design, a dynamic game catalog, and reusable header and footer components.

This project was created for **CIS 344 – Chapter 5 PHP Assignment** to demonstrate how PHP's `include()` function can be used to organize a website into reusable components.

---

##  Features

- **Modern Gaming Interface:** Dark navy theme with purple and cyan accents.
- **Responsive Design:** Layout adapts to desktop, tablet, and mobile screens.
- **Reusable Header and Footer:** Shared components included on multiple pages using PHP.
- **Game Catalog:** Displays eight fictional video games with genres and prices.
- **Genre Filtering:** Browse games by Action, Adventure, Racing, or Role-Playing.
- **Dynamic PHP Content:** Uses arrays, loops, conditional statements, and formatted prices.
- **Automatic Copyright Year:** Uses PHP's `date()` function.

##  Technologies Used

- **PHP** – Server-side processing and reusable page components.
- **HTML5** – Website structure and content.
- **CSS3** – Styling, animations, gradients, and responsive layouts.
- **XAMPP** – Local Apache web server.
- **GitHub** – Version control and project hosting.

##  Project Structure

**video_game_store/**

- `index.php` – Homepage with featured game and gaming categories.
- `games.php` – Dynamic video game catalog with genre filters.
- `header.php` – Reusable website header and navigation.
- `footer.php` – Reusable footer with dynamic copyright year.
- `css.styles.css` – Website styling and responsive design.
- `README.md` – Project documentation.

##  How to Run the Project

**1. Install XAMPP**

Download and install XAMPP from https://www.apachefriends.org/.

**2. Download the Repository**

Clone the repository or download it as a ZIP file from GitHub.

**3. Move the Project**

Place the project folder inside your XAMPP `htdocs` directory:

`C:\xampp\htdocs\video_game_store`

**4. Start Apache**

Open the XAMPP Control Panel and start Apache.

**5. Open the Website**

Homepage:

`http://localhost/video_game_store/`

Game Catalog:

`http://localhost/video_game_store/games.php`

**Note:** MySQL is not required for this project.

##  PHP Concepts Demonstrated

### 1. PHP Include Function

The header and footer are stored in separate files and reused throughout the website.

`include 'header.php';`

`include 'footer.php';`

This approach improves code organization, reduces duplication, and makes the website easier to maintain.

### 2. Arrays and Loops

The game catalog uses a PHP array to store information about video games.

A `foreach` loop dynamically generates game cards based on the stored data.

### 3. Conditional Statements

The catalog uses PHP conditions to display games based on the selected genre.

### 4. Dynamic Date

The footer automatically displays the current year using PHP's `date("Y")` function.

##  Project Objectives

- Understand and implement PHP file inclusion.
- Separate reusable components from main content pages.
- Practice server-side programming using PHP.
- Build a visually appealing website.
- Demonstrate clean code organization and documentation.

##  Assignment Information

**Course:** CIS 344

**Assignment:** PHP Chapter 5 – Separate Header and Footer

**Project Theme:** Video Game Store

**Project Name:** PixelVault Games

##  Disclaimer

PixelVault Games is an educational project created for academic purposes. Game titles, prices, and product information are fictional and used for demonstration only.

The website is a storefront prototype and does not process actual purchases or payments.

---

**© 2026 PixelVault Games | Built with PHP, HTML & CSS**