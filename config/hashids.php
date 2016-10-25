<?php

/*
 * This file is part of Laravel Hashids.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Hashids Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'main' => [
            'salt' => 'your-salt-string',
            'length' => 50,
            'alphabet' => 'your-alphabet-string',
        ],

        'alternative' => [
            'salt' => 'your-salt-string',
            'length' => 'your-length-integer',
            'alphabet' => 'your-alphabet-string',
        ],

        'histori-mengajar' => [
            'salt' => 'ini-adalah-enkripsi-untuk-histori-mengajar',
            'length' => 35,
            'alphabet' => 'ini-adalah-enkripsi-untuk-histori-mengajar',
        ],

        'bimbingan' => [
            'salt' => 'ini-adalah-enkripsi-untuk-bimbingan',
            'length' => 35,
            'alphabet' => 'ini-adalah-enkripsi-untuk-bimbingan'
        ],

        'entri-nilai' => [
            'salt' => 'ini-adalah-enkripsi-untuk-entri-nilai-yang-panjang',
            'length' => 35,
            'alphabet' => 'ini-adalah-enkripsi-untuk-entri-nilai-yang-panjang'
        ]
    ],

];
