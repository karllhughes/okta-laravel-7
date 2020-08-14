# Okta Laravel 7 Demonstration

This repository demonstrates the new features available in Laravel 7 as well as adding 
authentication using Okta.

## Local development

Using Docker:

- Clone this repo to your local machine
- Install the packages: `docker run -v $(pwd):/app composer install`
- Build the image: `docker build -t laravel-7 .`
- Run with volume: `docker run -v $(pwd):/var/www/html -d --name=laravel-7 --rm -p 8000:80 laravel-7`

View the app at `localhost:8000`

Run artisan commands: `docker exec -it laravel-7 php artisan ...`
