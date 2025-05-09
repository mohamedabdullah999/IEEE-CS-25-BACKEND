# Laravel Eloquent Relationships and Optimization

## 🔗 Defining Relationships in Eloquent Models

Laravel's Eloquent ORM allows you to define relationships between tables using OOP. The main types of relationships are:

### 1. One to One

```php
// User.php
public function profile()
{
    return $this->hasOne(Profile::class);
}
```

```php
// Profile.php
public function user()
{
    return $this->belongsTo(User::class);
}
```

### 2. One to Many

```php
// Post.php
public function comments()
{
    return $this->hasMany(Comment::class);
}
```

```php
// Comment.php
public function post()
{
    return $this->belongsTo(Post::class);
}
```

### 3. Many to Many

```php
// User.php
public function roles()
{
    return $this->belongsToMany(Role::class);
}
```

```php
// Role.php
public function users()
{
    return $this->belongsToMany(User::class);
}
```

## Attaching, Syncing, Detaching Related Records

In many-to-many relationships, you can use these methods to manage data in the pivot table:

### attach()

Adds a record to the pivot table without removing existing ones.

```php
$user->roles()->attach($roleId);
```

### sync()

Replaces the current relationships with the given array. Any other relationships will be removed.

```php
$user->roles()->sync([1, 2, 3]); // Removes any role not in this list
```

### detach()

Removes the relationship between records in the pivot table.

```php
$user->roles()->detach($roleId);
```

> **Note:** You can pass `null` to `detach()` to remove all relationships.

## The N+1 Query Problem in Laravel

### The Problem:

If you fetch a list of `Post` records and want to access their `comments`, Laravel will run one query for the posts and a separate query for each post’s comments if accessed directly in a loop:

```php
$posts = Post::all();

foreach ($posts as $post) {
    echo $post->comments->count(); // N+1 problem here
}
```

This results in one query to get posts and N additional queries to get each post's comments = N+1 queries.

### Solution: Eager Loading

Use `with()` to load relationships up front:

```php
$posts = Post::with('comments')->get();

foreach ($posts as $post) {
    echo $post->comments->count();
}
```

> **Benefit:** Greatly improves performance especially with large databases.

# Laravel Research Summary

## What is XSRF or CSRF? Is There a Difference?

**CSRF (Cross-Site Request Forgery)** and **XSRF (Cross-Site Request Forgery)** are actually the same thing — just two different names.  
It's a type of attack where malicious websites trick authenticated users into performing unwanted actions on a web application.  
Laravel protects against CSRF by automatically generating tokens for forms and verifying them on submission.

---

## What is Livewire?

Livewire is a full-stack framework for Laravel that makes building dynamic interfaces simple, without writing JavaScript.  
It allows you to create components that react to user input and update the DOM without full page reloads.  
It's perfect for making interactive UIs while keeping the codebase in PHP and Laravel’s ecosystem.

---

## 5 Most Common Laravel Packages (With Examples)

### 1. **Spatie Laravel Permission**

Manages user roles and permissions easily using a simple API.

```php
$user->assignRole('admin');
```

Useful in multi-role applications like admin dashboards.

---

### 2. **Laravel Debugbar**

Provides a developer toolbar to inspect queries, requests, and more.  
Great for debugging performance issues and monitoring database queries.

---

### 3. **Laravel Sanctum**

Used for API token authentication (SPA or mobile apps).

```php
$user->createToken('token-name');
```

Lightweight and easier than Passport for smaller applications.

---

### 4. **Intervention Image**

Handles image uploads and manipulations like resize, crop, and filters.

```php
Image::make($file)->resize(300, 200)->save();
```

Great for profile pictures, galleries, and image-heavy apps.

---

### 5. **Barryvdh Laravel DomPDF**

Converts Blade views to downloadable PDFs.

```php
PDF::loadView('invoice', $data)->download('invoice.pdf');
```

Perfect for generating reports, invoices, and printable content.

---
