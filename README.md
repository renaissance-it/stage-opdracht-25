# hPanel - Stage opdracht 2025

## Instructies
1. Clone deze repository naar je lokale machine, bijvoorbeeld:
   ```bash
   git clone https://github.com/renaissance-it/stage-opdracht-25.git
   ```
   en navigeer naar de projectmap:
   ```bash
    cd stage-opdracht-25
    ```
2. Installeer de vereiste afhankelijkheden met Composer:
   ```bash
   composer install
   ```
3. Installeer Node.js afhankelijkheden en compileer de assets:
   ```bash
   npm install
   npm run dev
   ```
4. Kopieer het `.env.example` bestand naar `.env` en configureer je database- en andere instellingen.
4. Genereer een nieuwe applicatiesleutel:
   ```bash
   php artisan key:generate
   ```
5. Voer de database migraties uit:
   ```bash
    php artisan migrate --seed
    ```
6. Start de ontwikkelserver:
    ```bash
    php artisan serve
    ```
8. Open je browser en ga naar `http://localhost:8000` om de applicatie te bekijken.
9. Log in met de volgende testgegevens:
    - Email: **webmaster@renaissance.nl**
    - Wachtwoord: **password123**

## Filament Admin Panel
Deze applicatie maakt gebruik van [Filament](https://filamentphp.com/), een krachtig admin panel voor 
Laravel. 

Documentatie is te vinden op de [Filament website](https://filamentphp.com/docs).

En hier is een goede instructievideo over het gebruik van Filament met Laravel:

https://www.youtube.com/watch?v=GXsMX9gI-uI&ab_channel=LaravelDaily

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
