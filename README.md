# Eunoia

(n.) a pure and well-balanced mind, a good spirit - "Beautiful thinking"

## Overview

Eunoia aims to be a fairly well designed blog.

The project is still under heavy development. 

## Installation

Clone the git down to your desired folder.

```shell
git clone https://github.com/KB885/Eunoia.git
```

`cd` into the folder and install the needed libraries for laravel.

```shell
composer install
```

Edit the `.env` file and set the newly created database, after you have re-named.

```shell
mv .env.example .env
```

Generate a new `APP_KEY` for your project.

```shell
php artisan key:generate
```

Install the needed frontend libs. eg. Tailwindcss.

```shell
npm install
```

Compile the needed frontend

```shell
npm run dev

// Or

npm run prod
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.
