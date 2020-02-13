# OKANE POINT OF SALES

This is the repo for the OKANE project made by [Bruno Dantas](https://burunor.github.io), a private point of sales
web application designed to help small business owners manage their shop.

## Contributing
Contributions are highly welcomed.

To start contributing follow these steps:
1. Fork this repository and clone your version: `git clone`
1. Install composer needed dependencies: `composer install`
1. Apply changes to files: `npm install && npm run dev`
1. Link the File Storage: `php artisan storage:link` 
1. Generate Key: `php artisan key:generate --ansi`
1. Copy env file: `php -r "file_exists('.env') || copy('.env.example', '.env');"`
1. Migrate the database: `php artisan migrate`
1. Run the server: `php artisan serve`
