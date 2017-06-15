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

Usages
------------

```
use Sensitive;

$string='我是sensitive'

$string=Sensitive::filter($string);

dd($string)
//"我是*"
```

License
------------
`Sensitiver` is licensed under [The MIT License (MIT)](LICENSE).
