ZF2 Sphinx Search [![Latest Stable Version](https://poser.pugx.org/ripaclub/zf2-sphinxsearch/v/stable.png)](https://packagist.org/packages/ripaclub/zf2-sphinxsearch)
=======================

ZF2 integration module for [Sphinx Search library](https://github.com/ripaclub/sphinxsearch).

This repository contains a ZF2 module that already provides configuration ([details here](https://github.com/ripaclub/sphinxsearch)) for [Sphinx Search library](https://github.com/ripaclub/sphinxsearch).

Installation
---

Using [composer](http://getcomposer.org/):

Add the following to your `composer.json` file:

    "require": {
        "php": ">=5.3.3",
        "ripaclub/sphinxsearch": "0.6.*"
    }

Use
---

In order to use this module you only need to configure the driver connection parameters.

Example:

```php
'sphinxql' => array(
	'driver'    => 'pdo_mysql',
	'hostname'  => '127.0.0.1',
	'port'      => 9306,
	'charset'   => 'UTF8'
)
```
