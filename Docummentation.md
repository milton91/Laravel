# Run laravels local development server
```
php artisan serve
Path on my PC -> D:\Applications\SoftwareEngineering
```

# Routing
## Default Route
```
Route::get('/', function () {
    //If routed, then run the following blocks of code
    return view('welcome');
    //It will search resources > view > welcome.blade.php
});
```
## Non-default Route
```
Route::get('/about', function () {
    return view('welcome');
});
```

# View
To create a view, create a new file in resource > view 

# Adding CSS to the project
Create CSS file in public folder
Then, link the css into the page
```
<link rel="stylesheet" href="style.css">
```
This is also the same case for adding JavaScript and Images

# Sending Data to Views
```
?php echo $name; ?
```
or
```
?= $name; ?
```

# Blade
```
<h3><?= $name; ?></h3>
```
can be written as (only possible if our file have ".blade.php" as the name)
```
<h3>{{ $name }}}</h3>
```
Gets compiled as standart php echo in the background

# Boostrapping
One may use template from bootstrap at getbootstrap.com

# Layouting System
Blade layouting system provdes template for multiple pages (Extending a Layout)
main.blade.php (main layout)
```
<div class="container mt-4">
    @yield('container')
</div>
```
home.blade.php (child layout)
@extends('layouts.main')
@section('container')
    <h1>Halaman Home</h1>
@endsection

# Partials Folder
Partial Folder is used to save specific components of pages
```
<body>
    @include('partials.navbar')
```

# @dd (Dump and Die)

# Blade Looping
```
    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>{{ $post["title"] }}</h2>
            <h5>{{ $post["author"] }}</h5>
            <p>{{ $post["body"] }}</p>
        </article>
    @endforeach
```
# Model in Laravel
Eloquent ORM (Object Relational Model). ORM make it easy for us to interact with database.
```
php artisan make:model Flight
```

### Command Pallete
CTRL + Shift + P
```
Artisan: make model
```
In web.php, use the model
```
use App\Models\Post;
```
Install PHP Namespace Resolver Extension in VScode

# Collection
Collection is a wrapper of array of data. We can use many function wiht collection as oppose to standart array
```
    return collect(self::$blog_posts);
```
One of these function is firstWhere()
```
public static function find($slug){
    $posts = static::all();

    return $posts->firstWhere('slug', $slug);
}
```

# Controller
Instead of defining all of your request handling logic as closures in route files, we can organize this into "controller" classes
```
php artisan make:controller ProvisionServer --invokable
```











