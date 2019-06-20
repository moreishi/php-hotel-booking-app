# Hotel Test App

This app allows you to book a room for a  specific hotel.

## Installation

Clone this repository

```bash
git clone git@github.com:moreishi/php-hotel-booking-app.git
```

Use composer to install required packages within the cloned directory,
```bash
composer install
```
Make sure you have NPM pakcage manager installed from node
```bash
npm install
```
Make sure to update the .env
```bash
cp .env.example .env

sudo nano .env
```

Migrate the models to the database

```bash
php artisan migrate:fresh --seed
```

Install Laravel passprot package
```bash
php artisan passport:install

php artisan passport:keys
```

Use this sample credentials

```bash
username: admin@domain.com
password: secret
```

Done...
