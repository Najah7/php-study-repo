# Routing

## ルーティングのエンドポイントの構成
/endpoint/controller/method

## 基本的なルーティング
```php
Route::get('foo', function () {
    return 'Hello World';
});
```

## ルーティング with parameter
```php
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
```

## ルーティングwith optional parameter
```php
Route::get('user/{name?}', function ($name = null) {
    return $name;
});
```