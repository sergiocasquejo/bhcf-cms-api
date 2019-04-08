<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Profile Image Sizes Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default image sizes
    |
    */
    'profile' => [
        'sizes' => [
            'small' => [100, 100],
            'thumbnail' => [350, 350]
        ],
        'location' => public_path(). '/images/avatar/',
    ]
];