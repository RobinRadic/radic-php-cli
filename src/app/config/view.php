<?php

return [
    'paths' => [
        realpath(base_path('resources/views')),
    ],
    'compiled' => realpath(app()->storagePath() . '/framework/views' ),

];
