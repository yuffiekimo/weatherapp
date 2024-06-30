# City Traveler

The City Traveler web app is designed for first-time travelers in the cities of Japan. Given that they are first-timers, the app provides the 6 cities mostly visited. For every city selected, the app displays the current weather conditions and nearby places they can visit.

The app uses a responsive design to cater to mobile and desktop devices. Weather is displayed in a widget format and the nearby places in accordion form. It also utilized Google map to give users better visibility

### Desktop View
![image](https://github.com/yuffiekimo/weatherapp/assets/174209152/51303c8c-acfb-426f-9b84-7e1a4b3e2074)

### Mobile View
![image](https://github.com/yuffiekimo/weatherapp/assets/174209152/90f32801-0062-42e9-979f-9c2d4bdc5220)


## Development Requirements
- [x] Use OpenWeatherMap'sDaily API to get weather forecasts.
- [x] Use foursquare Search Venue API to get Place information.
- [x] Responsive Design via Bootstrap5
- [x] Laravel 11
- [x] VueJS 3
- [x] npm v8.19.2
- [x] php v8.3.8
- [x] composer 2.4.1
- [x] Apache 2.4.59


## Installation

#### Server Setup
```
git clone https://github.com/yuffiekimo/weatherapp.git
```
```
cd ./weatherapp
```
```
composer install
```
```
npm install
```
```
cp .env.demo .env
```
```
php artisan optimize:clear
```
```
npm run dev
```
```
php artisan serve
```

#### .env API Keys
```
OPENWEATHERMAP_API_KEY=179d0136abce9e6da567ac74b5ddfa48
OPENWEATHERMAP_BASEURL=http://api.openweathermap.org/data/2.5/weather

FOURSQUARE_API_KEY=fsq3jzbdYHL8K6TEuQMbpFQ5NCg/WAPU6CvM7m+SLP4arfI=
FOURSQUARE_BASEURL=https://api.foursquare.com/v3/places
```



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
