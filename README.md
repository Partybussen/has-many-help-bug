# Getting started

1. Clone this repo
2. Add an `auth.json` file with nova credentials
3. Copy .env.example to .env and add missing settings
4. Generate an app_key
   ```
   docker run --rm \
   -u "$(id -u):$(id -g)" \
   -v $(pwd):/var/www/html \
   -w /var/www/html \
   laravelsail/php81-composer:latest \
   php artisan key:generate
   ``` 
5. Install composer dependencies 
   ```
   docker run --rm \
   -u "$(id -u):$(id -g)" \
   -v $(pwd):/var/www/html \
   -w /var/www/html \
   laravelsail/php81-composer:latest \
   composer install --ignore-platform-reqs
   ```
6. Run the container with sail `sail up -d`
7. Install migration repository `sail artisan migrate:install`
8. Run migrations `sail artisan migrate`
9. Run seeder `sail artisan db:seed`
10. Create Nova user `sail artisan nova:user`
11. Login on http://localhost:8080/nova
