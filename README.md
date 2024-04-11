# [Foodiets]

A simple food delivery project 

## Installation & Setup

### Prerequisites

- PHP [8.0] or above ([Download PHP](https://www.php.net/downloads.php))
- Composer ([Download Composer](https://getcomposer.org/))
- Web server (Apache, Nginx, etc.)
- Database (MySQL, PostgreSQL, etc.)
- or You can Simply Use XAMPP or LAMPP

### Installation Steps

1. **Install dependencies using Composer:**
    ```bash
    composer install
    ```

2. **Create a copy of the environment configuration file:**
    ```bash
    cp .env.example .env
    ```

3. **Configure database connection:**
    - Open the `.env` file and update the database connection settings with your credentials.

4. **Apply migrations:**
    ```bash
    php yii migrate
    ```

5. **Start the development server:**
    ```bash
    php yii serve
    ```

6. **Access the application:**
    - Open your web browser and navigate to the URL provided by the `php yii serve` command (usually http://localhost:8080).

## Contributing

If you'd like to contribute to Foodiets, please follow these guidelines:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature`).
3. Commit your changes (`git commit -am 'Add some feature'`).
4. Push to the branch (`git push origin feature/your-feature`).
5. Create a new Pull Request.


