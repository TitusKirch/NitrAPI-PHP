Nitrapi-PHP
===========

[![Latest Stable Version](https://poser.pugx.org/TitusKirch/NitrAPI-PHP/v/stable.png)](https://packagist.org/packages/TitusKirch/NitrAPI-PHP)
[![Latest Unstable Version](https://poser.pugx.org/TitusKirch/NitrAPI-PHP/v/unstable.svg)](https://packagist.org/packages/TitusKirch/NitrAPI-PHP)
[![Total Downloads](https://poser.pugx.org/TitusKirch/NitrAPI-PHP/downloads.png)](https://packagist.org/packages/TitusKirch/NitrAPI-PHP)
![PHP Composer](https://github.com/TitusKirch/NitrAPI-PHP/workflows/PHP%20Composer/badge.svg)

Titus version of the PHP SDK for the Nitrapi RESTful API.


Recommends
---------

* PHP 7.3 or higher
* Composer


Installation
------------

Edit the composer.json and execute composer.phar update
``` php
{
    "require": {
        "TitusKirch/NitrAPI-PHP": "dev-master",
    }
}
```

Example
-------

```php
<?php

require_once '../vendor/autoload.php';

try {
    $api = new \Nitrapi\Nitrapi("<accesss token>");
    
    var_dump($api->getServices());
    
} catch(\Exception $e) {
    var_dump("API Error: " . $e->getMessage());
}
```
