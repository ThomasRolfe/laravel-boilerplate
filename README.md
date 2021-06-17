# Laravel Boilerplate (Tailwind, SASS, Mix, Livewire, Breeze, Alpine) ⚡

This boilerplate is a blank starting point for laravel projects both front and back end (not configured for API only) 

##Requirements
- PHP >= 8.0.0

## Included components

- Laravel 8
- Laravel Breeze (auth)
- Tailwind CSS
- SASS
- Mix
- Livewire
- Alpine JS

## Setup

Use repo as template within Github

[Generate new repositories with repository templates](https://github.blog/2019-06-06-generate-new-repositories-with-repository-templates/)

Create a .env file with a database connection (can be sqlite)

Run the following commands

```jsx
npm install
composer install
php artisan migrate

// During development
npm run dev 
//or
npm run watch

php artisan serve // or local server (eg. Mamp pro)
```

## Custom CSS/JS

Include custom SASS files within resources/sass and import them into app.scss.

Include custom JS files within resources/JS and require them in app.js after standard bootstrap/tailwind imports.

## Tailwind configuration

Tailwind config file is included at the root of the application with forms extension and purged on production build.

Ensure a new build/dev process is run when adjusting the tailwind config file for changes to take effect.

## Livewire

Livewire components are in use but not mandatory. Follow docs for component creation

[Making Components | Laravel](https://laravel-livewire.com/docs/2.x/making-components)
