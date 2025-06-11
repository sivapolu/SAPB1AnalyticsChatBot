# SAPB1AnalyticsChatBot

This repository contains a simple Laravel 8 backend and a Bootstrap based frontend skeleton. The backend exposes an example API endpoint while the frontend demonstrates calling it.

## Requirements
- PHP 7.3 or higher
- Composer

## Setup

1. Install PHP dependencies:
   ```bash
   cd backend
   composer install
   cp .env.example .env
   php artisan key:generate
   ```

2. Start the development server:
   ```bash
   php artisan serve
   ```
   The API will be available at `http://localhost:8000`.

3. Open the frontend
   ```bash
   cd ../frontend
   php -S localhost:8080
   ```
   Navigate to `http://localhost:8080` in your browser.

## NLP Integration

The backend includes a stub service at `app/Services/NLPService.php` where integration with a local NLP model can be implemented.
