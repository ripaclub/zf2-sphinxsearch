ZF2 Sphinx Search
=================

[![Latest Stable Version](https://poser.pugx.org/ripaclub/zf2-sphinxsearch/v/stable.png)](https://packagist.org/packages/ripaclub/zf2-sphinxsearch)

ZF2 integration module for [Sphinx Search library](https://github.com/ripaclub/sphinxsearch).

This repository contains a ZF2 module that already provides configuration ([details here](https://github.com/ripaclub/sphinxsearch)) for [Sphinx Search library](https://github.com/ripaclub/sphinxsearch).

Installation
------------

Using [composer](http://getcomposer.org/):

Add the following to your `composer.json` file:

    "require": {
        "php": ">=5.3.3",
        "ripaclub/sphinxsearch": "0.7.0"
    }

Usage
-----

In order to use this module you need to load it through your ZF2 app `config/application.config.php` file:

```php
return [
    // This should be an array of module namespaces used in the application.
    'modules' => [
        '...',
        'SphinxSearch', // Loading current module in your app
        'Application',
    ],
    // ...
];
```

Finally configure the driver connection parameters (for example into your `local.config.php` file).

Example:

```php
'sphinxql' => array(
	'driver'    => 'pdo_mysql',
	'hostname'  => '127.0.0.1',
	'port'      => 9306,
	'charset'   => 'UTF8'
)
```

---

[![Analytics](https://ga-beacon.appspot.com/UA-49655829-1/ripaclub/zf2-sphinxsearch)](https://github.com/igrigorik/ga-beacon)