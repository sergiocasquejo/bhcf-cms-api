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
            'small' => [60, 60],
            'thumbnail' => [150, 150]
        ],
        'location' => public_path(). '/avatar/',
    ]
];