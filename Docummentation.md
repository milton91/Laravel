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




























