
## Project Pengelolaan Data Uang Dana Bulanan dan Uang Dana Tahunan Menggunakan Framework Laravel 8

Cara installasi :

- Run `composer install` / Jika sudah ada cukup `composer update`
- Jika menemukan masalah `your requirement could not be resolved to an installable set of packages`
- Jalankan perintah ini `composer install --ignore-platform-reqs`
- Run `copy .env.example .env`
- Run `php artisan key:generate`
- Jangan lupa bikin database di database lokal kalian (phpmyadmin) nama database (kp_udb_new) di .env
- Run `php artisan migrate`
- Run `php artisan db:seed`
- Run `php artisan serve`
