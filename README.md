# Laravel Snack API Integration

### Environment
- Laravel Framework 10.26.2
- PHP 8.2.11

## Tasks
### Task 1: API Wrapper
- Create a Laravel service or class that acts as a wrapper for connecting to the external snack API.
- Implement methods to retrieve snack data from the API.
- Ensure that the wrapper handles API errors gracefully.

### Task 2: Scheduled Job
- Create a scheduled job in Laravel that runs at a specified interval (e.g., every hour).
- Use the API wrapper from Task 1 to fetch snack data.
- Store the retrieved data locally.

### Task 3: View Component
- Create a user-friendly view to display the stored snack data.
- Design the view to present the snacks in an appealing and organized manner.
- Implement dynamic features, such as filtering or sorting



## Workflow
#### 1. Create a project
* `composer create-project laravel/laravel snack`
* `cd snack`

#### 2. Valet link to create test link (http://snack.test)
* `valet link`

#### 3. Debugbar
* `composer require barryvdh/laravel-debugbar --dev`
* `php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"`

#### 4. API call
* Create SnackApi.php in the /app/Services
* `composer require guzzlehttp/guzzle`

#### 5. Save data locally
* Save API response data to local (/storage/app/snacks.json) 

#### 6. Schedule
* Add schedule call in the /app/Console/Kernel.php
* Run **`php artisan schedule:run`** command to check the scheduled method works proprely 

#### 7. Router
* Add snack.index route in the /routes/web.php file

#### 8. Controller
* Create controller and get data from local storage
* `php artisan make:controller SnackController --resource`

#### 9. View
* Install tailwindcss, postcss, autoprefixer and update config file and give styles
* `npm install -D tailwindcss postcss autoprefixer`
* `npx tailwindcss init -p`