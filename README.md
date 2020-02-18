# fake friends
A simple web application that allows you to recast the hit tv show friends with ai generated faces. Built with Laravel and VueJs.

### Installation

1. Clone repo 

2. Install dependencies

````
composer install
````

3. Copy .env file

```
cp .env.example .env
```

4. Modify `DB_*` value in `.env` with your database config.

5. Get api key for the Generated Photos api (https://generated.photos/api) and add it to `GENERATED_PHOTOS_KEY=` value in `.env`.

6. Migrate and (optional) seed database
````
php artisan migrate
php artisan db:seed
````

7. Install Node modules
````
npm install
````

8. Serve

````
php artisan serve
````

9. In another terminal window

```
npm run watch
```
