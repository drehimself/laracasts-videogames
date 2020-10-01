![screenshot](https://user-images.githubusercontent.com/4316355/82725361-69b40400-9caa-11ea-994d-85c41919ca96.png)

# Laracasts Video Game Series

Code for Laracasts video series: https://laracasts.com/series/build-a-video-game-aggregator

## Installation

1. Clone the repo and `cd` into it
1. `composer install`
1. `npm install`
1. `npm run dev`
1. Rename or copy `.env.example` file to `.env`
2. Set your `IGDB_CLIENT_ID` and your `IGDB_ACCESS_TOKEN` in your `.env` file. You can find instructions on how to do that [here](https://api-docs.igdb.com/#account-creation).
3. `php artisan key:generate`
4. `php artisan serve` or use Laravel Valet or Laravel Homestead
5. Visit `localhost:8000` in your browser

## Starting from a particular point

If you would like to follow along and start from a particular point, follow these instructions. You can choose any point by replacing the hash with [any particular commit](https://github.com/drehimself/laracasts-videogames/commits/v4). The commits correspond to the different episodes (mostly).

1. Clone the repo and `cd` into it
1. `git checkout 07dbc21`
