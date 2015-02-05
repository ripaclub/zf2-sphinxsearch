ZF2 Sphinx Search
=================

[![Latest Stable Version](https://img.shields.io/packagist/v/ripaclub/zf2-sphinxsearch.svg?style=flat-square)](https://packagist.org/packages/ripaclub/zf2-sphinxsearch)
[![Total Downloads](https://img.shields.io/packagist/dt/ripaclub/zf2-sphinxsearch.svg?style=flat-square)](https://packagist.org/packages/ripaclub/zf2-sphinxsearch)
[![Version Eye](https://www.versioneye.com/php/ripaclub:zf2-sphinxsearch/badge.svg?style=flat-square)](https://www.versioneye.com/php/ripaclub:zf2-sphinxsearch)

ZF2 integration module for [Sphinx Search library](https://github.com/ripaclub/sphinxsearch).

This repository contains a ZF2 module that already provides configuration ([details here](https://github.com/ripaclub/sphinxsearch)) for [Sphinx Search library](https://github.com/ripaclub/sphinxsearch).

Installation
------------

Using [composer](http://getcomposer.org/):

Add the following to your `composer.json` file:

    "require": {
        "php": ">=5.3.3",
        "ripaclub/zf2-sphinxsearch": "~0.7.0"
    }

Usage
-----

In order to use it you only need to load it through your ZF2 app `config/application.config.php` file:

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

And, finally configure the driver connection parameters (for example into your `local.config.php` file).

Example:

```php
'sphinxql' => array(
	'driver'    => 'pdo_mysql',
	'hostname'  => '127.0.0.1',
	'port'      => 9306,
	'charset'   => 'UTF8'
)
```

Done. Happy querying with [Sphinx Search library](https://github.com/ripaclub/sphinxsearch)!

---

[![Analytics](https://ga-beacon.appspot.com/UA-49655829-1/ripaclub/zf2-sphinxsearch)](https://github.com/igrigorik/ga-beacon)