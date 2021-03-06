# LARAVEL EMOJI CALCULATOR
### Md. Shabir Khan Akash
### Dept. of CSE, RUET

## ** IMPORTANT ** 
Master branch contains only the default boilerplate code of the Laravel Framework and My developed code is in Development Branch

## Approach

In the master branch all default laravel boilerplate code was commited. 
Then in the development branch I firstly started editing on 
```bash
Laravel-Emoji-Calculator\resources\views\welcome.blade.php
```
file there my basic frontend structure of the site was initialized. 

Then I added my custom CSS file and bootstrap in the 
```bash
Laravel-Emoji-Calculator\public\css\app.css
```
for styling the site.
After that I created a controller for handling the calculation in the server side. I make a controller by typing in the terminal 
```bash
php artisan make:controller CalcController
```
then I added the controller connection with the route in 
```bash
Laravel-Emoji-Calculator\routes\web.php
```

## Steps to Run
### Step 1: 
Download PHP 8.1.7 from here https://windows.php.net/downloads/releases/php-8.1.7-Win32-vs16-x64.zip then extract it to C:/Program Files/
After that set this directory link to the path in environment variable.

### Step 2: 
Download and install Composer from here https://getcomposer.org/Composer-Setup.exe and in terminal type 
```bash
composer global require laravel/installer
```

### Step 3: 
Install WAMP from here https://www.wampserver.com/en/download-wampserver-64bits/ and go to where you installed wamp and go to "C:\wamp64\www\" (if you install wamp in in C drive) and extract my project folder there.

### Step 4: 
Now double click and open wamp software and then go to open the project directory and open terminal there and type

```bash
php artisan serve
```

### Step 5:
After that goto the http://127.0.0.1:8000/ from your browser to see the output. 

### Demo: 
https://user-images.githubusercontent.com/39434260/177014478-17ba2842-5d36-43fe-ba4d-01e0aa630056.mp4




-----------------------------------------------------------------------------------------------------------------

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
