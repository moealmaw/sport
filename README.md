# Fix

## Add the following relation to the `\App\Team` model

```php
  ...
  public function positions() {
    return $this->hasManyThrough(\App\Position::class, \App\Sport::class, 'id', 'sport_id', 'sport_id');
  }
  ...
```

## Check the results `routes/web.php`

```php
Route::get('/', function () {
  $teams = \App\Team::with('positions', 'positions.players')->get();
  return $teams;
});
```
