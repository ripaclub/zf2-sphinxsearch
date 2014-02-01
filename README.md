ZF2 Sphinx Search [![License](http://img.shields.io/badge/license-BSD--2-green.svg)](http://opensource.org/licenses/BSD-2-Clause)&nbsp;[![Latest Stable Version](https://poser.pugx.org/ripaclub/zf2-sphinxsearch/v/stable.png)](https://packagist.org/packages/ripaclub/zf2-sphinxsearch)
=======================

ZF2 integration module for [Sphinx Search library](https://github.com/ripaclub/sphinxsearch).

This repository contains a ZF2 module that already provides configuration ([details here](https://github.com/ripaclub/sphinxsearch)) for [Sphinx Search library](https://github.com/ripaclub/sphinxsearch).

Installation
---

Using [composer](http://getcomposer.org/):

Add the following to your `composer.json` file:

    "require": {
        "php": ">=5.3.3",
        "ripaclub/zf2-sphinxsearch": "~0.2"
    }

Use
---

In order to use this module you only need to configure the driver connection parameters.

Example:

    'sphinxql' => array(
        'driver'         => 'Pdo',
        'dsn'            => 'mysql:dbname=dummy;host=127.0.0.1;port=9306;',
        'driver_options' => array(
         \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ),
    )
