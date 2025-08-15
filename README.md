## Product Feedback tool

## **Installation**

Clone the repository
```bash
    git clone https://github.com/vbijan/product-feedback-tool.git
```

## **Change the directory**
```bash
    cd product-feedback-tool
```

## **Copy the .env file and setup required configurations and create an application key**
```bash
    cp .env.example .env && php artisan key:generate
```

## **Create new database named 'product_feedback' with collation of 'utf8mb4_unicode_ci' and provide this name on .env file.**


## **Update .env file according to your database's username and password.**
```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=product_feedback
    DB_USERNAME=database_name
    DB_PASSWORD=password
```

## **Install PHP dependencies**
```bash
    composer install
```

## **Migrate the tables. (Note: This command will migrate the tables into our database according to files in database/migrations).**
```bash
    php artisan migrate
```

## **Seed the database**
```bash
    php artisan db:seed
```

## **Configure CORS, In config/cors.php, make sure your frontend URL is allowed:**
```bash
    'allowed_origins' => ['*', 'http://localhost:5173'],
    'supports_credentials' => true,
```

## **Start Laravel server**
```bash
    php artisan serve
```

## **The backend will run on http://127.0.0.1:8000 by default.**

## TEsting login credentials
```bash
    email : developer1@example.com
    password : password
```