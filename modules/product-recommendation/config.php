<?php

return [
    '__name' => 'product-recommendation',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/product-recommendation.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'https://iqbalfn.com/'
    ],
    '__files' => [
        'modules/product-recommendation' => ['install','update','remove'],
        'app/product-recommendation' => ['install','update']
    ],
    '__dependencies' => [
        'required' => [
            [
                'product' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'ProductRecommendation\\Library' => [
                'type' => 'file',
                'base' => 'app/product-recommendation/library'
            ]
        ],
        'files' => []
    ]
];