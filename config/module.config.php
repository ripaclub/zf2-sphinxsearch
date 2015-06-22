<?php
/**
 * ZF2 Sphinx Search
 *
 * @link        https://github.com/ripaclub/zf2-sphinxsearch
 * @copyright   Copyright (c) 2015,
 *              Leonardo Di Donato <leodidonato at gmail dot com>,
 *              Leonardo Grasso <me at leonardograsso dot com>
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */
return [
    'service_manager' => [
        'abstract_factories' => [
            'SphinxSearch\Db\Adapter\AdapterAbstractServiceFactory'
        ],
        'factories' => [
            'SphinxSearch\Db\Adapter\Adapter' => 'SphinxSearch\Db\Adapter\AdapterServiceFactory',
        ],
        'aliases' => [
            'sphinxql' => 'SphinxSearch\Db\Adapter\Adapter'
        ],
    ],
];
