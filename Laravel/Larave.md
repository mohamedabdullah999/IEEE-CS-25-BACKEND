# Laravel Full Concepts

## 1. Request Lifecycle

- The **Request Lifecycle** describes how a web request flows through Laravel.
- **Steps**:
  1. **Entry Point**: All requests go through `public/index.php`.
  2. **HTTP Kernel**: Handles global middleware and bootstraps the application.
  3. **Service Providers**: Core services (like routing, database) are loaded.
  4. **Routing**: Laravel matches the request to a route.
  5. **Middleware Execution**: Route-specific middleware are applied.
  6. **Controller/Closure Execution**: Controller method or closure runs.
  7. **Response**: A response is created and returned to the user.

---

## 2. Routing in Laravel

- **Routing** defines how Laravel responds to a specific URL or HTTP request.
- Routes are defined inside `routes/web.php` or `routes/api.php`.
- **Example**:
  ```php
  Route::get('/home', [HomeController::class, 'index']);
  ```

## 3. Facades in Laravel

- Facades are "static proxies" to underlying classes in Laravel’s service container.
- They provide a clean and expressive syntax for common tasks.

## Why Facades?

- Easy and clean syntax.
- Hide complexity of service resolution.
- Offer quick access to framework features (like Cache, Auth, DB).

## 4. Blade Templates and How It Works

- Blade is Laravel’s simple yet powerful templating engine.
- Allows you to write PHP code in your views using simple and elegant syntax.

## 5. Blade is Laravel’s simple yet powerful templating engine.

- ORM (Object Relational Mapping) connects database tables with PHP classes.
- In Laravel, the ORM system is called Eloquent.
- It allows developers to work with databases using OOP style without writing raw SQL.
