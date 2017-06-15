Sensitiver
=====

`sensitiver` is a sensitive words filter tool

Installation
------------

First, install laravel, and make sure that the database connection settings are correct.

```
composer require wjazz/sensitiver
```

In`config/app.php`add`ServiceProvider`:

```
Wjazz\Sensitiver\SensitiveWordsFilterProvider::class,
```

Then add`Facades`:

```
'Sensitive' => Wjazz\Sensitiver\SensitiveFacade::class,
```

License
------------
`Sensitiver` is licensed under [The MIT License (MIT)](LICENSE).
