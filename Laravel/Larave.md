# Laravel Basics

## Request Lifecycle

When a user sends a request to a Laravel application:

1. **Request Enters**: The request first enters through `public/index.php`.
2. **Kernel Handling**: It gets passed to the HTTP Kernel (`App\Http\Kernel`) which manages middleware.
3. **Routing**: The request is sent to the Router to find the matching route.
4. **Controller / Closure Execution**: The matched route's controller method or closure function is executed.
5. **Response Return**: The controller returns a response, which gets sent back through middleware layers and finally back to the user.

---

## Routing in Laravel

- Laravel uses a simple and expressive way to define routes.
- Routes are usually defined inside `routes/web.php` for web routes or `routes/api.php` for API routes.
- Example:
  ```php
  Route::get('/home', [HomeController::class, 'index']);
  ```
