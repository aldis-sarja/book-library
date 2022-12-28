# Books Library app
Built with PHP 8, composer and Laravel 9. 

## Installation

```bash
git clone https://github.com/aldis-sarja/book-library.git
cd book-library
composer install
```

In `book-library` folder rename the file `.env.example` to `.env`, or make a copy:
```bash
cp .env.example .env
```

Generate API key:
```
php artisan key:generate
```

Configure your database:
```dosini
DB_CONNECTION=<your-db-server>
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<your-db-name>
DB_USERNAME=<your-db-user-name>
DB_PASSWORD=<your-password>
```

Now initialize database
```bash
php artisan migrate
```

populate database with sample records:
```bash
php artisan db:seed
```

## Usage
Run servers:
```bash
php artisan serve
```

Point your browser to address `http://localhost:8000/`

## API
There is only one API endpoint:
- `api/v1/books/top-ten`

```
[
    {
        "title":
        "author":
        "have_taken":
        "total_taken":
        "taken_in_current_month":
    },
    ...
]
```
