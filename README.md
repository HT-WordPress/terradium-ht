# Terradium-HT: Gardens Under Glass

Terradium is a WordPress-based website dedicated to the art of terrariums and creating beautiful gardens under glass. This repository contains the site files and a sanitized database export for local development.

---

## About Terradium

Terradium is your go-to resource for:
- Inspiration and tutorials on creating terrariums.
- Tips for maintaining miniature ecosystems.
- Ideas for incorporating terrariums into home decor.

Whether you're a gardening enthusiast or a terrarium beginner, Terradium has something for everyone who loves small, lush worlds inside glass containers.

---

## Project Structure

- **`wp-content/`**: Includes the custom themes, plugins, and media files used for Terradium.
- **`database/local.sql`**: A sanitized export of the WordPress database for local development.

---

## Prerequisites

To set up Terradium locally, you’ll need:
- A local development environment (e.g., [Local by Flywheel](https://localwp.com/)).
- MySQL or MariaDB.
- A web server with PHP support.

---

## Setup Instructions

### 1. Clone the Repository
```bash
git clone https://github.com/your-username/terradium.git
cd terradium
```

### 2. Import the Database  

1. Create a new database in your local environment.

2. Import the **`database/local.sql`** file into your database.

### 3. Manually Create Admin User and Options
Since sensitive tables were excluded from the database export, you need to manually create essential data.

#### Create an Admin User
Run the following SQL queries in your database tool:

```sql
INSERT INTO wp_users (ID, user_login, user_pass, user_nicename, user_email, user_status)
VALUES (1, 'admin', MD5('securepassword'), 'Admin User', 'admin@example.com', 0);

INSERT INTO wp_usermeta (user_id, meta_key, meta_value)
VALUES 
(1, 'wp_capabilities', 'a:1:{s:13:"administrator";b:1;}'),
(1, 'wp_user_level', '10');
```

- Replace **`securepassword`** with a secure password.

- Replace **`admin@example.com`** with your desired email address.

#### Set Site URL and Options
Run these queries to set up site-specific options in the **`wp_options`** table:

```sql
INSERT INTO wp_options (option_name, option_value, autoload)
VALUES 
('siteurl', 'http://your-local-site.local', 'yes'),
('home', 'http://your-local-site.local', 'yes');
```

- Replace **`http://your-local-site.local`** with your local environment URL.

### 4. Configure **`wp-config.php`**
Update your database credentials in the wp-config.php file:

```php
define('DB_NAME', 'local');
define('DB_USER', 'your-database-username');
define('DB_PASSWORD', 'your-database-password');
define('DB_HOST', 'localhost');
```

---

## Notes on Excluded Tables
The following tables have been excluded from the database export for security reasons:

- **`wp_users`**: Contains sensitive user credentials.

- **`wp_usermeta`**: Stores user roles and metadata.

- **`wp_options`**: Contains site configuration settings, including sensitive information like API keys and URLs.

You must manually recreate this data as outlined in the setup instructions.

---

## Future Development
Terradium's roadmap includes:

- Adding an e-commerce section for terrarium kits.

- Expanding content with video tutorials and downloadable guides.

- Optimizing the site for better SEO and performance.

---

## License

This project is governed by the WordPress license under the GNU General Public License v2 or later (GPLv2+). See the [**`LICENSE`**](license.txt) for more detail.


---

## Contact
For questions or contributions, please reach out to:

- Hazem Twair: hazem3033993@gmail.com

- [Terradium-HT on GitHub](https://github.com/ht-wordpress/terradium-ht)

---

## Additional Resources

For more information about WordPress, refer to the `readme.html` file included in this repository. It includes:
- Installation instructions for setting up WordPress.
- System requirements for running WordPress.
- Links to WordPress support forums, documentation, and other helpful resources.


